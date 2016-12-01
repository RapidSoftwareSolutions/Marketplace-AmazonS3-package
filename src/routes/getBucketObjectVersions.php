<?php

$app->post('/api/AmazonS3/getBucketObjectVersions', function ($request, $response, $args) {
    
    $checkRequest = $this->validation;
    $validateRes = $checkRequest->validate($request, ['apiKey','apiSecret','region','bucketName']);
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
    if(!empty($post_data['args']['delimiter'])) {
        $body['Delimiter'] = $post_data['args']['delimiter'];
    }
    if(!empty($post_data['args']['keyMarker'])) {
        $body['KeyMarker'] = $post_data['args']['keyMarker'];
    }
    if(!empty($post_data['args']['maxKeys'])) {
        $body['MaxKeys'] = $post_data['args']['maxKeys'];
    }
    if(!empty($post_data['args']['prefix'])) {
        $body['Prefix'] = $post_data['args']['prefix'];
    }
    if(!empty($post_data['args']['versionIdMarker'])) {
        $body['VersionIdMarker'] = $post_data['args']['versionIdMarker'];
    }
    
    try {
        $res = $client->listObjectVersions($body)->toArray();
                
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
