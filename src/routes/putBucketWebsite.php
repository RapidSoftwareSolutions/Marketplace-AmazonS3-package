<?php

$app->post('/api/AmazonS3/putBucketWebsite', function ($request, $response, $args) {
    
    $checkRequest = $this->validation;
    $validateRes = $checkRequest->validate($request, ['apiKey','apiSecret','region','bucketName','indexDocument']);
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
    $body['WebsiteConfiguration']['IndexDocument']['Suffix'] = $post_data['args']['indexDocument'];
    if(!empty($post_data['args']['errorDocument'])) {
        $body['WebsiteConfiguration']['ErrorDocument']['Key'] = $post_data['args']['errorDocument']; 
    }
    if(!empty($post_data['args']['redirectHostName'])) {
        $body['WebsiteConfiguration']['RedirectAllRequestsTo']['HostName'] = $post_data['args']['redirectHostName']; 
    }
    if(!empty($post_data['args']['redirectProtocol'])) {
        $body['WebsiteConfiguration']['RedirectAllRequestsTo']['Protocol'] = $post_data['args']['redirectProtocol']; 
    }
    if(!empty($post_data['args']['routingRules'])) {
        $body['WebsiteConfiguration']['RoutingRules'] = $post_data['args']['routingRules']; 
    }
    
    try {
        $res = $client->putBucketWebsite($body)->toArray();
                
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
