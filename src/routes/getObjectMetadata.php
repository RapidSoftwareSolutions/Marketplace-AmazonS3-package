<?php

$app->post('/api/AmazonS3/getObjectMetadata', function ($request, $response, $args) {
    
    $checkRequest = $this->validation;
    $validateRes = $checkRequest->validate($request, ['apiKey','apiSecret','region','bucketName','objectName']);
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
    $body['Key'] = $post_data['args']['objectName'];
    if(!empty($post_data['args']['ifMatch'])) {
        $body['IfMatch'] = $post_data['args']['ifMatch']; 
    }
    if(!empty($post_data['args']['ifModifiedSince'])) {
        $body['IfModifiedSince'] = $post_data['args']['ifModifiedSince']; 
    }
    if(!empty($post_data['args']['ifNoneMatch'])) {
        $body['IfNoneMatch'] = $post_data['args']['ifNoneMatch']; 
    }
    if(!empty($post_data['args']['ifUnmodifiedSince'])) {
        $body['IfUnmodifiedSince'] = $post_data['args']['ifUnmodifiedSince']; 
    }
    if(!empty($post_data['args']['range'])) {
        $body['Range'] = $post_data['args']['range']; 
    }
    if(!empty($post_data['args']['SSECustomerAlgorithm'])) {
        $body['SSECustomerAlgorithm'] = $post_data['args']['SSECustomerAlgorithm']; 
    }
    if(!empty($post_data['args']['SSECustomerKey'])) {
        $body['SSECustomerKey'] = $post_data['args']['SSECustomerKey']; 
    }
    if(!empty($post_data['args']['SSECustomerKeyMD5'])) {
        $body['SSECustomerKeyMD5'] = $post_data['args']['SSECustomerKeyMD5']; 
    }
    
    try {
        $res = $client->headObject($body)->toArray();
                
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
