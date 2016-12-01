<?php

$app->post('/api/AmazonS3/uploadPartCopy', function ($request, $response, $args) {
    
    $checkRequest = $this->validation;
    $validateRes = $checkRequest->validate($request, ['apiKey','apiSecret','region','bucketName','objectName','copySource','partNumber','uploadId']);
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
    $body['CopySource'] = $post_data['args']['copySource'];
    $body['PartNumber'] = $post_data['args']['partNumber'];
    $body['UploadId'] = $post_data['args']['uploadId'];
    
    
    
    if(!empty($post_data['args']['copySourceIfMatch'])) {
        $body['CopySourceIfMatch'] = $post_data['args']['copySourceIfMatch'];
    }
    if(!empty($post_data['args']['copySourceIfModifiedSince'])) {
        $body['CopySourceIfModifiedSince'] = $post_data['args']['copySourceIfModifiedSince'];
    }
    if(!empty($post_data['args']['copySourceIfNoneMatch'])) {
        $body['CopySourceIfNoneMatch'] = $post_data['args']['copySourceIfNoneMatch'];
    }
    if(!empty($post_data['args']['copySourceIfUnmodifiedSince'])) {
        $body['CopySourceIfUnmodifiedSince'] = $post_data['args']['copySourceIfUnmodifiedSince'];
    }
    if(!empty($post_data['args']['copySourceRange'])) {
        $body['CopySourceRange'] = $post_data['args']['copySourceRange'];
    }
    if(!empty($post_data['args']['copySourceSSECustomerAlgorithm'])) {
        $body['CopySourceSSECustomerAlgorithm'] = $post_data['args']['copySourceSSECustomerAlgorithm'];
    }
    if(!empty($post_data['args']['copySourceSSECustomerKey'])) {
        $body['CopySourceSSECustomerKey'] = $post_data['args']['copySourceSSECustomerKey'];
    }
    if(!empty($post_data['args']['copySourceSSECustomerKeyMD5'])) {
        $body['CopySourceSSECustomerKeyMD5'] = $post_data['args']['copySourceSSECustomerKeyMD5'];
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
        $res = $client->uploadPartCopy($body)->toArray();
                
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
