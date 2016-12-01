<?php

$app->post('/api/AmazonS3/putBucketACL', function ($request, $response, $args) {
    
    $checkRequest = $this->validation;
    $validateRes = $checkRequest->validate($request, ['apiKey','apiSecret','region','bucketName','grants']);
    if(!empty($validateRes) && isset($validateRes['callback']) && $validateRes['callback']=='error') {
        return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($validateRes);
    } else {
        $post_data = $validateRes;
    }

    $credentials = new Aws\Credentials\Credentials($post_data['args']['apiKey'], $post_data['args']['apiSecret']);

    $client = new Aws\S3\S3Client([
        'version'     => 'latest',
        'region'      => $post_data['args']['region'],
        'credentials' => $credentials
    ]);
    
    $body['Bucket'] = $post_data['args']['bucketName'];
    $body['AccessControlPolicy'] = $post_data['args']['grants'];
    if(!empty($post_data['args']['cannedAcl'])) {
        $body['ACL'] = $post_data['args']['cannedAcl'];
    }
    if(!empty($post_data['args']['grantFullControl'])) {
        $body['GrantFullControl'] = $post_data['args']['grantFullControl'];
    }
    if(!empty($post_data['args']['grantRead'])) {
        $body['GrantRead'] = $post_data['args']['grantRead'];
    }
    if(!empty($post_data['args']['grantReadACP'])) {
        $body['GrantReadACP'] = $post_data['args']['grantReadACP'];
    }
    if(!empty($post_data['args']['grantWrite'])) {
        $body['GrantWrite'] = $post_data['args']['grantWrite'];
    }
    if(!empty($post_data['args']['grantWriteACP'])) {
        $body['GrantWriteACP'] = $post_data['args']['grantWriteACP'];
    }
    
    try {
        $res = $client->putBucketAcl($body)->toArray();
                
        $result['callback'] = 'success';
        $result['contextWrites']['to'] = is_array($res) ? $res : json_decode($res);
        if(empty($result['contextWrites']['to'])) {
            $result['contextWrites']['to']['status_msg'] = "Api return no results";
        }
    } catch (S3Exception $e) {
        // Catch an S3 specific exception.
        $result['callback'] = 'error';
        $result['contextWrites']['to']['status_code'] = 'API_ERROR';
        $result['contextWrites']['to']['status_msg'] = $e->getMessage();
    } catch (\Exception $e) {
        $result['callback'] = 'error';
        $result['contextWrites']['to']['status_code'] = 'API_ERROR';
        $result['contextWrites']['to']['status_msg'] = $e->getMessage();
    }
    
    return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($result);
    
});
