<?php

$app->post('/api/AmazonS3/copyObject', function ($request, $response, $args) {
    
    $checkRequest = $this->validation;
    $validateRes = $checkRequest->validate($request, ['apiKey','apiSecret','region','bucketName','objectName','copySource']);
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
    if(!empty($post_data['args']['acl'])) {
        $body['ACL'] = $post_data['args']['acl'];
    }
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
    if(!empty($post_data['args']['copySourceSSECustomerAlgorithm'])) {
        $body['CopySourceSSECustomerAlgorithm'] = $post_data['args']['copySourceSSECustomerAlgorithm'];
    }
    if(!empty($post_data['args']['copySourceSSECustomerKey'])) {
        $body['CopySourceSSECustomerKey'] = $post_data['args']['copySourceSSECustomerKey'];
    }
    if(!empty($post_data['args']['copySourceSSECustomerKeyMD5'])) {
        $body['CopySourceSSECustomerKeyMD5'] = $post_data['args']['copySourceSSECustomerKeyMD5'];
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
    if(!empty($post_data['args']['metadataDirective'])) {
        $body['MetadataDirective'] = $post_data['args']['metadataDirective'];
    }
    if(!empty($post_data['args']['taggingDirective'])) {
        $body['TaggingDirective'] = $post_data['args']['taggingDirective'];
    }
    if(!empty($post_data['args']['websiteRedirectLocation'])) {
        $body['WebsiteRedirectLocation'] = $post_data['args']['websiteRedirectLocation'];
    }
    
    try {
        $res = $client->copyObject($body)->toArray();
                
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
