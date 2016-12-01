<?php

$app->post('/api/AmazonS3/addObject', function ($request, $response, $args) {
    
    $checkRequest = $this->validation;
    $validateRes = $checkRequest->validate($request, ['apiKey','apiSecret','region','bucketName','objectName','objectBody']);
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
    $body['Body'] = $post_data['args']['objectBody'];
    if(!empty($post_data['args']['acl'])) {
        $body['ACL'] = $post_data['args']['acl'];
    }
    if(!empty($post_data['args']['cacheControl'])) {
        $body['CacheControl'] = $post_data['args']['cacheControl'];
    }
    if(!empty($post_data['args']['contentDisposition'])) {
        $body['ContentDisposition'] = $post_data['args']['contentDisposition'];
    }
    if(!empty($post_data['args']['contentEncoding'])) {
        $body['ContentEncoding'] = $post_data['args']['contentEncoding'];
    }
    if(!empty($post_data['args']['contentLanguage'])) {
        $body['ContentLanguage'] = $post_data['args']['contentLanguage'];
    }
    if(!empty($post_data['args']['contentLength'])) {
        $body['ContentLength'] = $post_data['args']['contentLength'];
    }
    if(!empty($post_data['args']['contentType'])) {
        $body['ContentType'] = $post_data['args']['contentType'];
    }
    if(!empty($post_data['args']['expires'])) {
        $body['Expires'] = $post_data['args']['expires'];
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
    if(!empty($post_data['args']['grantWriteACP'])) {
        $body['GrantWriteACP'] = $post_data['args']['grantWriteACP'];
    }
    if(!empty($post_data['args']['metadata'])) {
        $body['Metadata'] = $post_data['args']['metadata'];
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
    if(!empty($post_data['args']['SSEKMSKeyId'])) {
        $body['SSEKMSKeyId'] = $post_data['args']['SSEKMSKeyId'];
    }
    if(!empty($post_data['args']['serverSideEncryption'])) {
        $body['ServerSideEncryption'] = $post_data['args']['serverSideEncryption'];
    }
    if(!empty($post_data['args']['storageClass'])) {
        $body['StorageClass'] = $post_data['args']['storageClass'];
    }
    if(!empty($post_data['args']['tagging'])) {
        $body['Tagging'] = $post_data['args']['tagging'];
    }
    if(!empty($post_data['args']['websiteRedirectLocation'])) {
        $body['WebsiteRedirectLocation'] = $post_data['args']['websiteRedirectLocation'];
    }
    
    try {
        $res = $client->putObject($body)->toArray();
                
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
