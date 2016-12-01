<?php

namespace Test\Functional;

require_once(__DIR__ . '/../../src/Models/checkRequest.php');

class AmazonS3Test extends BaseTestCase {
    
    public function testListMetrics() {
        
        $routes = [
            'getBuckets',
            'getSingleBucket',
            'getBucketAccelerate',
            'getBucketACL',
            'getBucketCORS',
            'getBucketLifecycle',
            'getBucketPolicy',
            'getBucketLocation',
            'getBucketLogging',
            'getBucketNotification',
            'getBucketReplication',
            'getBucketTagging',
            'getBucketObjectVersions',
            'getBucketRequestPayment',
            'getBucketVersioning',
            'getBucketWebsite',
            'checkBucket',
            'getMultipartUploads',
            'createBucket',
            'putBucketAccelerateConfiguration',
            'putBucketACL',
            'putBucketCORS',
            'putBucketLifecycleConfiguration',
            'putBucketPolicy',
            'putBucketLogging',
            'putBucketNotificationConfiguration',
            'putBucketReplication',
            'putBucketTagging',
            'putBucketRequestPayment',
            'putBucketVersioning',
            'putBucketWebsite',
            'getSingleObject',
            'getObjectACL',
            'getObjectTorrent',
            'getObjectMetadata',
            'restoreArchivedObject',
            'addObject',
            'putObjectACL',
            'copyObject',
            'createMultipartUpload',
            'uploadPart',
            'uploadPartCopy',
            'completeMultipartUpload', 
            'abortMultipartUpload', 
            'getParts',
            'deleteSingleObject',
            'deleteObjects',
            'deleteBucketWebsite',
            'deleteBucketTagging',
            'deleteBucketReplication',
            'deleteBucketPolicy',
            'deleteBucketLifecycle',
            'deleteBucketCORS',
            'deleteBucket',
        ];
        
        foreach($routes as $file) {
            $var = '{  
                        "args":{  
                            "apiKey":"AKIAJDG53VDT3PHDTGMQ",
                            "apiSecret":"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",
                            "region":"us-east-1",
                            "bucketName":"imrapid-test2"
                        }
                    }';
            $post_data = json_decode($var, true);

            $response = $this->runApp('POST', '/api/AmazonS3/'.$file, $post_data);

            $this->assertEquals(200, $response->getStatusCode(), 'Error in '.$file.' method');
        }
    }
    
}
