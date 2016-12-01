<?php

$app->post('/api/AmazonS3/uploadPart', function ($request, $response, $args) {
    
    $checkRequest = $this->validation;
    $validateRes = $checkRequest->validate($request, ['apiKey','apiSecret','region','bucketName','objectName','uploadBody','partNumber','uploadId']);
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
    $body['Body'] = $post_data['args']['uploadBody'];
    $body['PartNumber'] = $post_data['args']['partNumber'];
    $body['UploadId'] = $post_data['args']['uploadId'];
    
    
    
    if(!empty($post_data['args']['contentLength'])) {
        $body['ContentLength'] = $post_data['args']['contentLength'];
    }
    if(!empty($post_data['args']['contentSHA256'])) {
        $body['ContentSHA256'] = $post_data['args']['contentSHA256'];
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
        $res = $client->uploadPart($body)->toArray();
                
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
