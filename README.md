# AmazonS3 Package
Store and retrieve data at any time from the web.
* Domain: amazon.com
* Credentials: apiKey, apiSecret

## How to get credentials: 
0. Go to [Amazon Console](https://console.aws.amazon.com/console/home?region=us-east-1)
1. Log in or create new account
2. Create new group in Groups section at the left side with necessary polices
3. Create new user and assign to existing group
4. After creating user you will see credentials


## AmazonS3.getBuckets
This endpoint returns a list of all buckets owned by the authenticated sender of the request.

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Required: API key obtained from Amazon.
| apiSecret| credentials| Required: API secret  obtained from Amazon.
| region   | String     | Required: Region.


## AmazonS3.getSingleBucket
This endpoint returns some or all (up to 1,000) of the objects in a bucket. You can use the request parameters as selection criteria to return a subset of the objects in a bucket.

| Field     | Type       | Description
|-----------|------------|----------
| apiKey    | credentials| Required: API key obtained from Amazon.
| apiSecret | credentials| Required: API secret  obtained from Amazon.
| region    | String     | Required: Region.
| bucketName| String     | Required: The name of the bucket.


## AmazonS3.getBucketAccelerate
This endpoint returns the Transfer Acceleration state of a bucket, which is either Enabled or Suspended.

| Field     | Type       | Description
|-----------|------------|----------
| apiKey    | credentials| Required: API key obtained from Amazon.
| apiSecret | credentials| Required: API secret  obtained from Amazon.
| region    | String     | Required: Region.
| bucketName| String     | Required: The name of the bucket.


## AmazonS3.getBucketACL
This endpoint returns the access control list (ACL) of a bucket. 

| Field     | Type       | Description
|-----------|------------|----------
| apiKey    | credentials| Required: API key obtained from Amazon.
| apiSecret | credentials| Required: API secret  obtained from Amazon.
| region    | String     | Required: Region.
| bucketName| String     | Required: The name of the bucket.


## AmazonS3.getBucketCORS
This endpoint returns the cors configuration information set for the bucket.

| Field     | Type       | Description
|-----------|------------|----------
| apiKey    | credentials| Required: API key obtained from Amazon.
| apiSecret | credentials| Required: API secret  obtained from Amazon.
| region    | String     | Required: Region.
| bucketName| String     | Required: The name of the bucket.


## AmazonS3.getBucketLifecycle
This endpoint returns the lifecycle configuration information set on the bucket.

| Field     | Type       | Description
|-----------|------------|----------
| apiKey    | credentials| Required: API key obtained from Amazon.
| apiSecret | credentials| Required: API secret  obtained from Amazon.
| region    | String     | Required: Region.
| bucketName| String     | Required: The name of the bucket.


## AmazonS3.getBucketPolicy
This endpoint returns the policy of a specified bucket.

| Field     | Type       | Description
|-----------|------------|----------
| apiKey    | credentials| Required: API key obtained from Amazon.
| apiSecret | credentials| Required: API secret  obtained from Amazon.
| region    | String     | Required: Region.
| bucketName| String     | Required: The name of the bucket.


## AmazonS3.getBucketLocation
This endpoint returns a bucket's region.

| Field     | Type       | Description
|-----------|------------|----------
| apiKey    | credentials| Required: API key obtained from Amazon.
| apiSecret | credentials| Required: API secret  obtained from Amazon.
| region    | String     | Required: Region.
| bucketName| String     | Required: The name of the bucket.


## AmazonS3.getBucketLogging
This endpoint returns the logging status of a bucket and the permissions users have to view and modify that status.

| Field     | Type       | Description
|-----------|------------|----------
| apiKey    | credentials| Required: API key obtained from Amazon.
| apiSecret | credentials| Required: API secret  obtained from Amazon.
| region    | String     | Required: Region.
| bucketName| String     | Required: The name of the bucket.


## AmazonS3.getBucketNotification
This endpoint returns the notification configuration of a bucket.

| Field     | Type       | Description
|-----------|------------|----------
| apiKey    | credentials| Required: API key obtained from Amazon.
| apiSecret | credentials| Required: API secret  obtained from Amazon.
| region    | String     | Required: Region.
| bucketName| String     | Required: The name of the bucket.


## AmazonS3.getBucketReplication
This endpoint returns the replication configuration information set on the bucket.

| Field     | Type       | Description
|-----------|------------|----------
| apiKey    | credentials| Required: API key obtained from Amazon.
| apiSecret | credentials| Required: API secret  obtained from Amazon.
| region    | String     | Required: Region.
| bucketName| String     | Required: The name of the bucket.


## AmazonS3.getBucketTagging
This endpoint returns the tag set associated with the bucket.

| Field     | Type       | Description
|-----------|------------|----------
| apiKey    | credentials| Required: API key obtained from Amazon.
| apiSecret | credentials| Required: API secret  obtained from Amazon.
| region    | String     | Required: Region.
| bucketName| String     | Required: The name of the bucket.


## AmazonS3.getBucketObjectVersions
This endpoint returns a list of metadata about all of the versions of objects in a bucket.

| Field          | Type       | Description
|----------------|------------|----------
| apiKey         | credentials| Required: API key obtained from Amazon.
| apiSecret      | credentials| Required: API secret  obtained from Amazon.
| region         | String     | Required: Region.
| bucketName     | String     | Required: The name of the bucket.
| delimiter      | String     | Optional: A delimiter is a character that you specify to group keys. All keys that contain the same string between the prefix and the first occurrence of the delimiter are grouped under a single result element in CommonPrefixes. These groups are counted as one result against the max-keys limitation. These keys are not returned elsewhere in the response. Also, see prefix.
| keyMarker      | String     | Optional: Specifies the key in the bucket that you want to start listing from. Also, see version-id-marker.
| maxKeys        | String     | Optional: Sets the maximum number of keys returned in the response body. The response might contain fewer keys, but will never contain more. Default: 1000
| prefix         | String     | Optional: Use this parameter to select only those keys that begin with the specified prefix. You can use prefixes to separate a bucket into different groupings of keys. (You can think of using prefix to make groups in the same way you'd use a folder in a file system.) You can use prefix with delimiter to roll up numerous objects into a single result under CommonPrefixes. Also, see delimiter.
| versionIdMarker| String     | Optional: Specifies the object version you want to start listing from. Also, see key-marker. Valid Values: Valid version ID \| Default


## AmazonS3.getBucketRequestPayment
This endpoint returns the request payment configuration of a bucket.

| Field     | Type       | Description
|-----------|------------|----------
| apiKey    | credentials| Required: API key obtained from Amazon.
| apiSecret | credentials| Required: API secret  obtained from Amazon.
| region    | String     | Required: Region.
| bucketName| String     | Required: The name of the bucket.


## AmazonS3.getBucketVersioning
This endpoint returns the versioning state of a bucket. To retrieve the versioning state of a bucket, you must be the bucket owner.

| Field     | Type       | Description
|-----------|------------|----------
| apiKey    | credentials| Required: API key obtained from Amazon.
| apiSecret | credentials| Required: API secret  obtained from Amazon.
| region    | String     | Required: Region.
| bucketName| String     | Required: The name of the bucket.


## AmazonS3.getBucketWebsite
This endpoint returns the website configuration associated with a bucket.

| Field     | Type       | Description
|-----------|------------|----------
| apiKey    | credentials| Required: API key obtained from Amazon.
| apiSecret | credentials| Required: API secret  obtained from Amazon.
| region    | String     | Required: Region.
| bucketName| String     | Required: The name of the bucket.


## AmazonS3.checkBucket
This endpoint allows to determine if a bucket exists and you have permission to access it.

| Field     | Type       | Description
|-----------|------------|----------
| apiKey    | credentials| Required: API key obtained from Amazon.
| apiSecret | credentials| Required: API secret  obtained from Amazon.
| region    | String     | Required: Region.
| bucketName| String     | Required: The name of the bucket.


## AmazonS3.getMultipartUploads
This endpoint returns a list of in-progress multipart uploads. An in-progress multipart upload is a multipart upload that has been initiated using the Initiate Multipart Upload request, but has not yet been completed or aborted.

| Field         | Type       | Description
|---------------|------------|----------
| apiKey        | credentials| Required: API key obtained from Amazon.
| apiSecret     | credentials| Required: API secret  obtained from Amazon.
| region        | String     | Required: Region.
| bucketName    | String     | Required: The name of the bucket.
| delimiter     | String     | Optional: Character you use to group keys. All keys that contain the same string between the prefix, if specified, and the first occurrence of the delimiter after the prefix are grouped under a single result element, CommonPrefixes. If you don't specify the prefix parameter, then the substring starts at the beginning of the key. The keys that are grouped under CommonPrefixes result element are not returned elsewhere in the response.
| keyMarker     | String     | Optional: Together with upload-id-marker, this parameter specifies the multipart upload after which listing should begin.
| maxUploads    | String     | Optional: Sets the maximum number of multipart uploads, from 1 to 1,000, to return in the response body. 1,000 is the maximum number of uploads that can be returned in a response. Default: 1,000
| prefix        | String     | Optional: Lists in-progress uploads only for those keys that begin with the specified prefix.
| uploadIdMarker| String     | Optional: ogether with key-marker, specifies the multipart upload after which listing should begin. If key-marker is not specified, the upload-id-marker parameter is ignored. Otherwise, any multipart uploads for a key equal to the key-marker might be included in the list only if they have an upload ID lexicographically greater than the specified upload-id-marker.


## AmazonS3.createBucket
This endpoint allows to create a new bucket

| Field           | Type       | Description
|-----------------|------------|----------
| apiKey          | credentials| Required: API key obtained from Amazon.
| apiSecret       | credentials| Required: API secret  obtained from Amazon.
| region          | String     | Required: Region.
| bucketName      | String     | Required: The name of new bucket.
| bucketRegion    | String     | Required: The region of new bucket.
| cannedAcl       | String     | Optional: The canned ACL to apply to the bucket you are creating. Valid Values: private \| public-read \| public-read-write \| aws-exec-read \| authenticated-read \| bucket-owner-read \| bucket-owner-full-control. Format: value1\|value2\|...
| grantFullControl| String     | Optional: Allows grantee the READ, WRITE, READ_ACP, and WRITE_ACP permissions on the bucket. Default: None. Example: emailAddress="xyz@amazon.com", emailAddress="abc@amazon.com"
| grantRead       | String     | Optional: Allows grantee to list the objects in the bucket. Default: None. Example: emailAddress="xyz@amazon.com", emailAddress="abc@amazon.com"
| grantReadACP    | String     | Optional: Allows grantee to read the bucket ACL. Default: None. Example: emailAddress="xyz@amazon.com", emailAddress="abc@amazon.com"
| grantWrite      | String     | Optional: Allows grantee to create, overwrite, and delete any object in the bucket. Default: None. Example: emailAddress="xyz@amazon.com", emailAddress="abc@amazon.com"
| grantWriteACP   | String     | Optional: Allows grantee to read the bucket ACL. Default: None. Example: emailAddress="xyz@amazon.com", emailAddress="abc@amazon.com"


## AmazonS3.putBucketAccelerateConfiguration
This endpoint allows to set the Transfer Acceleration state of an existing bucket.

| Field     | Type       | Description
|-----------|------------|----------
| apiKey    | credentials| Required: API key obtained from Amazon.
| apiSecret | credentials| Required: API secret  obtained from Amazon.
| region    | String     | Required: Region.
| bucketName| String     | Required: The name of bucket.
| status    | String     | Required: Sets the transfer acceleration state of the bucket. Valid Values: Enabled | Suspended


## AmazonS3.putBucketACL
This endpoint allows to set the permissions on an existing bucket using access control lists (ACL).

| Field           | Type       | Description
|-----------------|------------|----------
| apiKey          | credentials| Required: API key obtained from Amazon.
| apiSecret       | credentials| Required: API secret  obtained from Amazon.
| region          | String     | Required: Region.
| bucketName      | String     | Required: The name of bucket.
| grants          | JSON       | Required: Array of json objects. The array of grantees. See README for more details.
| cannedAcl       | String     | Optional: The canned ACL to apply to the bucket you are creating. Valid Values: private \| public-read \| public-read-write \| authenticated-read. Default: private. Format: value1\|value2\|...
| grantFullControl| String     | Optional: Allows the specified grantee(s) the READ, WRITE, READ_ACP, and WRITE_ACP permissions on the bucket. Default: None. Example: emailAddress="xyz@amazon.com", emailAddress="abc@amazon.com"
| grantRead       | String     | Optional: Allows the specified grantee(s) to list the objects in the bucket. Default: None. Example: emailAddress="xyz@amazon.com", emailAddress="abc@amazon.com"
| grantReadACP    | String     | Optional: Allows the specified grantee(s) to read the bucket ACL. Default: None. Example: emailAddress="xyz@amazon.com", emailAddress="abc@amazon.com"
| grantWrite      | String     | Optional: Allows the specified grantee(s) to create, overwrite, and delete any object in the bucket. Default: None. Example: emailAddress="xyz@amazon.com", emailAddress="abc@amazon.com"
| grantWriteACP   | String     | Optional: Allows the specified grantee(s) to write the ACL for the applicable bucket. Default: None. Example: emailAddress="xyz@amazon.com", emailAddress="abc@amazon.com"

#### grants format
```
{
  "Grants": [
    {
      "Grantee": {
        "DisplayName": "string",
        "EmailAddress": "string",
        "ID": "string",
        "Type": "CanonicalUser"|"AmazonCustomerByEmail"|"Group",
        "URI": "string"
      },
      "Permission": "FULL_CONTROL"|"WRITE"|"WRITE_ACP"|"READ"|"READ_ACP"
    }
    ...
  ],
  "Owner": {
    "DisplayName": "string",
    "ID": "string"
  }
}
```
#### grants example
```json
{  
    "Grants":[  
        {  
            "Grantee":{  
                "DisplayName":"test.test",
                "ID":"qwa6fbad701127bcd900cd5820ce33ef31962a7fc0fabd1bf07432c1736af35d",
                "Type":"CanonicalUser"
            },
            "Permission":"READ"
        }
    ],
    "Owner":{  
        "DisplayName":"test.test",
        "ID":"qwa6fbad701127bcd900cd5820ce33ef31962a7fc0fabd1bf07432c1736af35d"
    }
}
```

## AmazonS3.putBucketCORS
Sets the cors configuration for your bucket. If the configuration exists, Amazon S3 replaces it.

| Field     | Type       | Description
|-----------|------------|----------
| apiKey    | credentials| Required: API key obtained from Amazon.
| apiSecret | credentials| Required: API secret  obtained from Amazon.
| region    | String     | Required: Region.
| bucketName| String     | Required: The name of bucket.
| CORSRules | JSON       | Required: Array of json objects. The array of CORSRules. See README for more details.

#### CORSRules
```json
{
  "CORSRules": [
    {
      "AllowedHeaders": ["string", ...],
      "AllowedMethods": ["string", ...],
      "AllowedOrigins": ["string", ...],
      "ExposeHeaders": ["string", ...],
      "MaxAgeSeconds": integer
    }
    ...
  ]
}
```
#### CORSRules example
```json
{  
    "CORSRules":[  
        {  
            "AllowedHeaders":[  
                "Authorization"
            ],
            "AllowedMethods":[  
                "GET"
            ],
            "AllowedOrigins":[  
                "*"
            ],
            "MaxAgeSeconds":3000
        }
    ]
}
```
<a name="putBucketLifecycleConfiguration"/>
## AmazonS3.putBucketLifecycleConfiguration
Creates a new lifecycle configuration for the bucket or replaces an existing lifecycle configuration.

| Field     | Type       | Description
|-----------|------------|----------
| apiKey    | credentials| Required: API key obtained from Amazon.
| apiSecret | credentials| Required: API secret  obtained from Amazon.
| region    | String     | Required: Region.
| bucketName| String     | Required: The name of bucket.
| rules     | JSON       | Required: Array of json objects. The lifecycle configuration consisting of one or more rules. See README for more details.

#### rules
```json
{
  "Rules": [
    {
      "Expiration": {
        "Date": timestamp,
        "Days": integer,
        "ExpiredObjectDeleteMarker": true|false
      },
      "ID": "string",
      "Prefix": "string",
      "Filter": {
        "Prefix": "string",
        "Tag": {
          "Key": "string",
          "Value": "string"
        },
        "And": {
          "Prefix": "string",
          "Tags": [
            {
              "Key": "string",
              "Value": "string"
            }
            ...
          ]
        }
      },
      "Status": "Enabled"|"Disabled",
      "Transitions": [
        {
          "Date": timestamp,
          "Days": integer,
          "StorageClass": "GLACIER"|"STANDARD_IA"
        }
        ...
      ],
      "NoncurrentVersionTransitions": [
        {
          "NoncurrentDays": integer,
          "StorageClass": "GLACIER"|"STANDARD_IA"
        }
        ...
      ],
      "NoncurrentVersionExpiration": {
        "NoncurrentDays": integer
      },
      "AbortIncompleteMultipartUpload": {
        "DaysAfterInitiation": integer
      }
    }
    ...
  ]
}
```
#### rules example
```json
{
    "Rules": [
        {
            "ID": "Move rotated logs to Glacier",
            "Prefix": "rotated/",
            "Status": "Enabled",
            "Transitions": [
                {
                    "Date": "2015-11-10T00:00:00.000Z",
                    "StorageClass": "GLACIER"
                }
            ]
        },
        {
            "Status": "Enabled",
            "Prefix": "",
            "NoncurrentVersionTransitions": [
                {
                    "NoncurrentDays": 2,
                    "StorageClass": "GLACIER"
                }
            ],
            "ID": "Move old versions to Glacier"
        }
    ]
}
```

## AmazonS3.putBucketPolicy
This endpoint allows to add to or replace a policy on a bucket. If the bucket already has a policy, the one in this request completely replaces it.

| Field     | Type       | Description
|-----------|------------|----------
| apiKey    | credentials| Required: API key obtained from Amazon.
| apiSecret | credentials| Required: API secret  obtained from Amazon.
| region    | String     | Required: Region.
| bucketName| String     | Required: The name of bucket.
| policy    | JSON       | Required: Json object. Policy written in JSON. See README for more details.

#### policy format
```json
{
   "Statement": [
      {
         "Effect": "Allow",
         "Principal": "*",
         "Action": "s3:GetObject",
         "Resource": "arn:aws:s3:::MyBucket/*"
      },
      {
         "Effect": "Deny",
         "Principal": "*",
         "Action": "s3:GetObject",
         "Resource": "arn:aws:s3:::MyBucket/MySecretFolder/*"
      },
      {
         "Effect": "Allow",
         "Principal": {
            "AWS": "arn:aws:iam::123456789012:root"
         },
         "Action": [
            "s3:DeleteObject",
            "s3:PutObject"
         ],
         "Resource": "arn:aws:s3:::MyBucket/*"
      }
   ]
}
```

## AmazonS3.putBucketLogging
This endpoint allows to set the logging parameters for a bucket and to specify permissions for who can view and modify the logging parameters.

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| Required: API key obtained from Amazon.
| apiSecret   | credentials| Required: API secret  obtained from Amazon.
| region      | String     | Required: Region.
| bucketName  | String     | Required: The name of bucket.
| targetGrants| JSON       | Required: Array of objects. Container for granting information. See README for more information.
| targetBucket| String     | Optional: Specifies the bucket where you want Amazon S3 to store server access logs. You can have your logs delivered to any bucket that you own, including the same bucket that is being logged. You can also configure multiple buckets to deliver their logs to the same target bucket. In this case you should choose a different TargetPrefix for each source bucket so that the delivered log files can be distinguished by key.
| targetPrefix| String     | Optional: This element lets you specify a prefix for the keys that the log files will be stored under.

#### targetGrants format
```
[
      {
        "Grantee": {
          "DisplayName": "string",
          "EmailAddress": "string",
          "ID": "string",
          "Type": "CanonicalUser"|"AmazonCustomerByEmail"|"Group",
          "URI": "string"
        },
        "Permission": "FULL_CONTROL"|"READ"|"WRITE"
      }
      ...
]
```
#### targetGrants example
```json
[
      {
        "Grantee": {
          "Type": "AmazonCustomerByEmail",
          "EmailAddress": "user@example.com"
        },
        "Permission": "FULL_CONTROL"
      },
      {
        "Grantee": {
          "Type": "Group",
          "URI": "http://acs.amazonaws.com/groups/global/AllUsers"
        },
        "Permission": "READ"
      }
]
```

## AmazonS3.putBucketTagging
This endpoint allows to add a set of tags to an existing bucket.

| Field     | Type       | Description
|-----------|------------|----------
| apiKey    | credentials| Required: API key obtained from Amazon.
| apiSecret | credentials| Required: API secret  obtained from Amazon.
| region    | String     | Required: Region.
| bucketName| String     | Required: The name of bucket.
| tagSet    | JSON       | Required: Array of objects. Container for a set of tags See README for more information.

#### tagSet format
```
[{Key=string,Value=string},{Key=string,Value=string},...]
```
#### tagSet example
```json
[  
    {  
        "Key":"new tag",
        "Value":"tag_value"
    }
]
```

## AmazonS3.putBucketRequestPayment
This endpoint allows to add a set of tags to an existing bucket.

| Field     | Type       | Description
|-----------|------------|----------
| apiKey    | credentials| Required: API key obtained from Amazon.
| apiSecret | credentials| Required: API secret  obtained from Amazon.
| region    | String     | Required: Region.
| bucketName| String     | Required: The name of bucket.
| payer     | String     | Required: Specifies who pays for the download and request fees. Valid Values: Requester | BucketOwner


## AmazonS3.putBucketVersioning
This endpoint allows to set the versioning state of an existing bucket.

| Field     | Type       | Description
|-----------|------------|----------
| apiKey    | credentials| Required: API key obtained from Amazon.
| apiSecret | credentials| Required: API secret  obtained from Amazon.
| region    | String     | Required: Region.
| bucketName| String     | Required: The name of bucket.
| MFA       | String     | Optional: The value is the concatenation of the authentication device's serial number, a space, and the value displayed on your authentication device. Required to configure the versioning state if versioning is configured with MFA Delete enabled.
| MFADelete | String     | Optional: Specifies whether MFA Delete is enabled in the bucket versioning configuration. Valid Values: Disabled | Enabled. Can only be used when you use Status.
| status    | String     | Optional: Sets the versioning state of the bucket. Valid Values: Suspended | Enabled


## AmazonS3.putBucketWebsite
This endpoint allows to set the configuration of the website that is specified.

| Field           | Type       | Description
|-----------------|------------|----------
| apiKey          | credentials| Required: API key obtained from Amazon.
| apiSecret       | credentials| Required: API secret  obtained from Amazon.
| region          | String     | Required: Region.
| bucketName      | String     | Required: The name of bucket.
| indexDocument   | String     | Required: A suffix that is appended to a request that is for a directory on the website endpoint (e.g., if the suffix is index.html and you make a request to samplebucket/images/, the data that is returned will be for the object with the key name images/index.html). The suffix must not be empty and must not include a slash character.
| errorDocument   | String     | Optional: This key identifies the page that is returned when such an error occurs.
| redirectHostName| String     | Optional: The host name to use in the redirect request.
| redirectProtocol| String     | Optional: The protocol to use in the redirect request. HTTP || HTTPS
| routingRules    | JSON       | Optional: Array of objects. Container for a collection of RoutingRule elements. See README for more details.

#### routingRules format
```
"RoutingRules": [
    {
      "Condition": {
        "HttpErrorCodeReturnedEquals": "string",
        "KeyPrefixEquals": "string"
      },
      "Redirect": {
        "HostName": "string",
        "HttpRedirectCode": "string",
        "Protocol": "http"|"https",
        "ReplaceKeyPrefixWith": "string",
        "ReplaceKeyWith": "string"
      }
    }
    ...
]
```
#### routingRules example
```json
{
  "RoutingRules": [
    {
      "Condition": {
        "KeyPrefixEquals": "docs"
      },
      "Redirect": {
        "ReplaceKeyPrefixWith": "documents"
      }
    }
  ]
}
```

## AmazonS3.getSingleObject
This endpoint allows to retrieve objects from Amazon S3.

| Field                     | Type       | Description
|---------------------------|------------|----------
| apiKey                    | credentials| Required: API key obtained from Amazon.
| apiSecret                 | credentials| Required: API secret  obtained from Amazon.
| region                    | String     | Required: Region.
| bucketName                | String     | Required: The name of bucket.
| objectName                | String     | Required: The name of the object to be retrieved.
| ifMatch                   | String     | Optional: Return the object only if its entity tag (ETag) is the same as the one specified; otherwise, return a 412 (precondition failed).
| ifModifiedSince           | String     | Optional: Return the object only if it has not been modified since the specified time, otherwise return a 412 (precondition failed).
| ifNoneMatch               | String     | Optional: Return the object only if its entity tag (ETag) is different from the one specified; otherwise, return a 304 (not modified).
| ifUnmodifiedSince         | String     | Optional: Return the object only if it has not been modified since the specified time, otherwise return a 412 (precondition failed).
| range                     | String     | Optional: Downloads the specified range bytes of an object. For more information about the HTTP Range header, go to http://www.w3.org/Protocols/rfc2616/rfc2616-sec14.html#sec14.35.
| responseCacheControl      | String     | Optional: Sets the Cache-Control header of the response.
| responseContentDisposition| String     | Optional: Sets the Content-Disposition header of the response.
| responseContentEncoding   | String     | Optional: Sets the Content-Encoding header of the response.
| responseContentLanguage   | String     | Optional: Sets the Content-Language header of the response.
| responseContentType       | String     | Optional: Sets the Content-Type header of the response.
| responseExpires           | String     | Optional: Sets the Expires header of the response.
| SSECustomerAlgorithm      | String     | Optional: Specifies the algorithm to use to when decrypting the requested object. Default: None. Valid Values: AES256
| SSECustomerKey            | String     | Optional: Specifies the customer-provided base64-encoded encryption key to use to decrypt the requested object. This value is used to perform the decryption and then it is discarded; Amazon does not store the key. The key must be appropriate for use with the algorithm specified in the x-amz-server-side​-encryption​-customer-algorithm header.
| SSECustomerKeyMD5         | String     | Optional: Specifies the base64-encoded 128-bit MD5 digest of the customer-provided encryption key according to RFC 1321. Amazon S3 uses this header for a message integrity check to ensure that the encryption key was transmitted without error.


## AmazonS3.getObjectACL
This endpoint returns the access control list (ACL) of an object.

| Field     | Type       | Description
|-----------|------------|----------
| apiKey    | credentials| Required: API key obtained from Amazon.
| apiSecret | credentials| Required: API secret  obtained from Amazon.
| region    | String     | Required: Region.
| bucketName| String     | Required: The name of bucket.
| objectName| String     | Required: The name of the object to be retrieved.


## AmazonS3.getObjectTorrent
This endpoint return torrent files from a bucket.

| Field     | Type       | Description
|-----------|------------|----------
| apiKey    | credentials| Required: API key obtained from Amazon.
| apiSecret | credentials| Required: API secret  obtained from Amazon.
| region    | String     | Required: Region.
| bucketName| String     | Required: The name of bucket.
| objectName| String     | Required: The name of the object to be retrieved.


## AmazonS3.getObjectMetadata
This endpoint retrieves metadata from an object without returning the object itself.

| Field               | Type       | Description
|---------------------|------------|----------
| apiKey              | credentials| Required: API key obtained from Amazon.
| apiSecret           | credentials| Required: API secret  obtained from Amazon.
| region              | String     | Required: Region.
| bucketName          | String     | Required: The name of bucket.
| objectName          | String     | Required: The name of the object to be retrieved.
| ifMatch             | String     | Optional: Return the object only if its entity tag (ETag) is the same as the one specified; otherwise, return a 412 (precondition failed).
| ifModifiedSince     | String     | Optional: Return the object only if it has not been modified since the specified time, otherwise return a 412 (precondition failed).
| ifNoneMatch         | String     | Optional: Return the object only if its entity tag (ETag) is different from the one specified; otherwise, return a 304 (not modified).
| ifUnmodifiedSince   | String     | Optional: Return the object only if it has not been modified since the specified time, otherwise return a 412 (precondition failed).
| range               | String     | Optional: Downloads the specified range bytes of an object. For more information about the HTTP Range header, go to http://www.w3.org/Protocols/rfc2616/rfc2616-sec14.html#sec14.35.
| SSECustomerAlgorithm| String     | Optional: Specifies the algorithm to use to when decrypting the requested object. Default: None. Valid Values: AES256
| SSECustomerKey      | String     | Optional: Specifies the customer-provided base64-encoded encryption key to use to decrypt the requested object. This value is used to perform the decryption and then it is discarded; Amazon does not store the key. The key must be appropriate for use with the algorithm specified in the x-amz-server-side​-encryption​-customer-algorithm header.
| SSECustomerKeyMD5   | String     | Optional: Specifies the base64-encoded 128-bit MD5 digest of the customer-provided encryption key according to RFC 1321. Amazon S3 uses this header for a message integrity check to ensure that the encryption key was transmitted without error.


## AmazonS3.restoreArchivedObject
This endpoint allows to restore a temporary copy of an archived object. You can optionally provide version ID to restore specific object version. If version ID is not provided, it will restore the current version.

| Field     | Type       | Description
|-----------|------------|----------
| apiKey    | credentials| Required: API key obtained from Amazon.
| apiSecret | credentials| Required: API secret  obtained from Amazon.
| region    | String     | Required: Region.
| bucketName| String     | Required: The name of bucket.
| objectName| String     | Required: The name of the object to be retrieved.
| days      | String     | Required: Lifetime of the restored (active) copy. The minimum number of days that you can restore an object from Amazon Glacier is 1. After the object copy reaches the specified lifetime, Amazon S3 removes the copy from the bucket.
| tier      | String     | Required: The retrieval option to use when restoring the archive. Standard is the default. Valid values: Expedited, Standard, Bulk
| versionId | String     | Optional: version ID to restore specific object version.


## AmazonS3.addObject
This endpoint allows to add an object to a bucket.

| Field                  | Type       | Description
|------------------------|------------|----------
| apiKey                 | credentials| Required: API key obtained from Amazon.
| apiSecret              | credentials| Required: API secret  obtained from Amazon.
| region                 | String     | Required: Region.
| bucketName             | String     | Required: The name of bucket.
| objectName             | String     | Required: The name of the object to be retrieved.
| objectBody             | File       | Required: File to be uploaded to the bucket.
| acl                    | String     | Optional: The canned ACL to apply to the object. Default: private. Valid Values: private, public-read, public-read-write, aws-exec-read, authenticated-read, bucket-owner-read, bucket-owner-full-control
| cacheControl           | String     | Optional: Can be used to specify caching behavior along the request/reply chain. For more information, go to http://www.w3.org/Protocols/rfc2616/rfc2616-sec14.html#sec14.9.
| contentDisposition     | String     | Optional: Specifies presentational information for the object. For more information, go to http://www.w3.org/Protocols/rfc2616/rfc2616-sec19.html#sec19.5.1.
| contentEncoding        | String     | Optional: Specifies what content encodings have been applied to the object and thus what decoding mechanisms must be applied to obtain the media-type referenced by the Content-Type header field. For more information, go to http://www.w3.org/Protocols/rfc2616/rfc2616-sec14.html#sec14.11.
| contentLanguage        | String     | Optional: The language the content is in.
| contentLength          | String     | Optional: The size of the object, in bytes. For more information, go to http://www.w3.org/Protocols/rfc2616/rfc2616-sec14.html#sec14.13.
| contentType            | String     | Optional: A standard MIME type describing the format of the contents. For more information, go to http://www.w3.org/Protocols/rfc2616/rfc2616-sec14.html#sec14.17.
| expires                | String     | Optional: The date and time at which the object is no longer cacheable. For more information, go to http://www.w3.org/Protocols/rfc2616/rfc2616-sec14.html#sec14.21.
| grantFullControl       | String     | Optional: Allows grantee the READ, READ_ACP, and WRITE_ACP permissions on the object. You specify each grantee as a type=value pair, where the type can be one of the following: emailAddress – if value specified is the email address of an AWS account; id – if value specified is the canonical user ID of an AWS account; uri – if granting permission to a predefined group. Example: emailAddress="xyz@amazon.com", emailAddress="abc@amazon.com"
| grantRead              | String     | Optional: Allows grantee to read the object data and its metadata. You specify each grantee as a type=value pair, where the type can be one of the following: emailAddress – if value specified is the email address of an AWS account; id – if value specified is the canonical user ID of an AWS account; uri – if granting permission to a predefined group. Example: emailAddress="xyz@amazon.com", emailAddress="abc@amazon.com"
| grantReadACP           | String     | Optional: Allows grantee to read the object ACL. You specify each grantee as a type=value pair, where the type can be one of the following: emailAddress – if value specified is the email address of an AWS account; id – if value specified is the canonical user ID of an AWS account; uri – if granting permission to a predefined group. Example: emailAddress="xyz@amazon.com", emailAddress="abc@amazon.com"
| grantWriteACP          | String     | Optional: Allows grantee to write the ACL for the applicable object. You specify each grantee as a type=value pair, where the type can be one of the following: emailAddress – if value specified is the email address of an AWS account; id – if value specified is the canonical user ID of an AWS account; uri – if granting permission to a predefined group. Example: emailAddress="xyz@amazon.com", emailAddress="abc@amazon.com"
| metadata               | JSON       | Optional: Array of strings. A map of metadata to store with the object in S3. Example: ['<string>', ...]
| SSECustomerAlgorithm   | String     | Optional: Specifies the algorithm to use to when encrypting the object. Valid Value: AES256
| SSECustomerKey         | String     | Optional: Specifies the customer-provided base64-encoded encryption key for Amazon S3 to use in encrypting data. This value is used to store the object and then is discarded; Amazon does not store the encryption key. The key must be appropriate for use with the algorithm specified in the x-amz-server-side​-encryption​-customer-algorithm header.
| SSECustomerKeyMD5      | String     | Optional: Specifies the base64-encoded 128-bit MD5 digest of the encryption key according to RFC 1321. Amazon S3 uses this header for a message integrity check to ensure the encryption key was transmitted without error.
| SSEKMSKeyId            | String     | Optional: If the x-amz-server-side-encryption is present and has the value of aws:kms, this header specifies the ID of the AWS Key Management Service (KMS) master encryption key that was used for the object.
| serverSideEncryption   | String     | Optional: Specifies a server-side encryption algorithm to use when Amazon S3 creates an object. Valid Value: aws:kms, AES256
| storageClass           | String     | Optional: If you don't specify, Standard is the default storage class. Amazon S3 supports other storage classes. Valid Values: STANDARD | STANDARD_IA | REDUCED_REDUNDANCY
| tagging                | String     | Optional: Specifies a set of one or more tags you want to associated with the object. These tags are stored in the tagging subresource associated with the object.
| websiteRedirectLocation| String     | Optional: If the bucket is configured as a website, redirects requests for this object to another object in the same bucket or to an external URL.

#### metadata format
```
['meta1', 'meta2']
```

## AmazonS3.copyObject
This endpoint allows to create a copy of an object that is already stored in Amazon S3.

| Field                         | Type       | Description
|-------------------------------|------------|----------
| apiKey                        | credentials| Required: API key obtained from Amazon.
| apiSecret                     | credentials| Required: API secret  obtained from Amazon.
| region                        | String     | Required: Region.
| bucketName                    | String     | Required: The name of bucket.
| objectName                    | String     | Required: The name of the source bucket and key name of the source object to be copied, separated by a slash (/).
| copySource                    | String     | Required: The name of the source bucket and key name of the source object, separated by a slash (/).
| acl                           | String     | Optional: The canned ACL to apply to the object. Default: private. Valid Values: private \| public-read \| public-read-write \| aws-exec-read \| authenticated-read \| bucket-owner-read \| bucket-owner-full-control
| copySourceIfMatch             | String     | Optional: Copies the object if its entity tag (ETag) matches the specified tag; otherwise, the request returns a 412 HTTP status code error (failed precondition).
| copySourceIfModifiedSince     | String     | Optional: Copies the object if it has been modified since the specified time; otherwise, the request returns a 412 HTTP status code error (failed condition).
| copySourceIfNoneMatch         | String     | Optional: Copies the object if its entity tag (ETag) is different than the specified ETag; otherwise, the request returns a 412 HTTP status code error (failed precondition).
| copySourceIfUnmodifiedSince   | String     | Optional: Copies the object if it hasn't been modified since the specified time; otherwise, the request returns a 412 HTTP status code error (failed precondition).
| copySourceSSECustomerAlgorithm| String     | Optional: Specifies the algorithm to use to when encrypting the object. Valid Value: AES256. Default: None
| copySourceSSECustomerKey      | String     | Optional: Specifies the customer-provided base64-encoded encryption key for Amazon S3 to use in encrypting data. This value is used to store the object and then is discarded; Amazon does not store the encryption key. The key must be appropriate for use with the algorithm specified in the x-amz-server-side​-encryption​-customer-algorithm header.
| copySourceSSECustomerKeyMD5   | String     | Optional: Specifies the base64-encoded 128-bit MD5 digest of the encryption key according to RFC 1321. Amazon S3 uses this header as a message integrity check to ensure the encryption key was transmitted without error.
| grantFullControl              | String     | Optional: Allows grantee the READ, READ_ACP, and WRITE_ACP permissions on the object. You specify each grantee as a type=value pair, where the type can be one of the following: emailAddress – if value specified is the email address of an AWS account; id – if value specified is the canonical user ID of an AWS account; uri – if granting permission to a predefined group. Example: emailAddress="xyz@amazon.com", emailAddress="abc@amazon.com"
| grantRead                     | String     | Optional: Allows grantee to read the object data and its metadata. You specify each grantee as a type=value pair, where the type can be one of the following: emailAddress – if value specified is the email address of an AWS account; id – if value specified is the canonical user ID of an AWS account; uri – if granting permission to a predefined group. Example: emailAddress="xyz@amazon.com", emailAddress="abc@amazon.com"
| grantReadACP                  | String     | Optional: Allows grantee to read the object ACL. You specify each grantee as a type=value pair, where the type can be one of the following: emailAddress – if value specified is the email address of an AWS account; id – if value specified is the canonical user ID of an AWS account; uri – if granting permission to a predefined group. Example: emailAddress="xyz@amazon.com", emailAddress="abc@amazon.com"
| grantWriteACP                 | String     | Optional: Allows grantee to write the ACL for the applicable object. You specify each grantee as a type=value pair, where the type can be one of the following: emailAddress – if value specified is the email address of an AWS account; id – if value specified is the canonical user ID of an AWS account; uri – if granting permission to a predefined group. Example: emailAddress="xyz@amazon.com", emailAddress="abc@amazon.com"
| SSECustomerAlgorithm          | String     | Optional: Specifies the algorithm to use to when encrypting the object. Valid Value: AES256
| SSECustomerKey                | String     | Optional: Specifies the customer-provided base64-encoded encryption key for Amazon S3 to use in encrypting data. This value is used to store the object and then is discarded; Amazon does not store the encryption key. The key must be appropriate for use with the algorithm specified in the x-amz-server-side​-encryption​-customer-algorithm header.
| SSECustomerKeyMD5             | String     | Optional: Specifies the base64-encoded 128-bit MD5 digest of the encryption key according to RFC 1321. Amazon S3 uses this header for a message integrity check to ensure the encryption key was transmitted without error.
| SSEKMSKeyId                   | String     | Optional: If the x-amz-server-side-encryption is present and has the value of aws:kms, this header specifies the ID of the AWS Key Management Service (KMS) master encryption key that was used for the object.
| serverSideEncryption          | String     | Optional: Specifies a server-side encryption algorithm to use when Amazon S3 creates an object. Valid Value: aws:kms, AES256
| storageClass                  | String     | Optional: If you don't specify, Standard is the default storage class. Amazon S3 supports other storage classes. Valid Values: STANDARD \| STANDARD_IA \| REDUCED_REDUNDANCY
| metadataDirective             | String     | Optional: Specifies whether the metadata is copied from the source object or replaced with metadata provided in the request. Default: COPY. Valid values: COPY \| REPLACE
| taggingDirective              | String     | Optional: Specifies whether the object tags are copied from the source object or replaced with tags provided in the request. Default: COPY. Valid values: COPY \| REPLACE
| websiteRedirectLocation       | String     | Optional: If the bucket is configured as a website, redirects requests for this object to another object in the same bucket or to an external URL. Amazon S3 stores the value of this header in the object metadata.


## AmazonS3.getParts
This operation lists the parts that have been uploaded for a specific multipart upload.

| Field           | Type       | Description
|-----------------|------------|----------
| apiKey          | credentials| Required: API key obtained from Amazon.
| apiSecret       | credentials| Required: API secret  obtained from Amazon.
| region          | String     | Required: Region.
| bucketName      | String     | Required: The name of bucket.
| objectName      | String     | Required: The name of the object to be copied.
| uploadId        | String     | Required: Upload ID identifying the multipart upload.
| encodingType    | String     | Optional: Requests Amazon S3 to encode the response and specifies the encoding method to use. Default: None. Valid value: url
| maxParts        | String     | Optional: Sets the maximum number of parts to return in the response body. Default: 1,000
| partNumberMarker| String     | Optional: Specifies the part after which listing should begin. Only parts with higher part numbers will be listed.


## AmazonS3.deleteSingleObject
This operation removes the null version (if there is one) of an object and inserts a delete marker, which becomes the current version of the object. If there isn't a null version, Amazon S3 does not remove any objects.

| Field     | Type       | Description
|-----------|------------|----------
| apiKey    | credentials| Required: API key obtained from Amazon.
| apiSecret | credentials| Required: API secret  obtained from Amazon.
| region    | String     | Required: Region.
| bucketName| String     | Required: The name of bucket.
| objectName| String     | Required: The name of the object to be copied.
| MFA       | String     | Optional: The value is the concatenation of the authentication device's serial number, a space, and the value displayed on your authentication device. Default: None. Condition: Required to permanently delete a versioned object if versioning is configured with MFA Delete enabled.
| versionId | String     | Optional: VersionId used to reference a specific version of the object.


## AmazonS3.deleteObjects
This operation enables you to delete multiple objects from a bucket using a single HTTP request. You may specify up to 1000 objects.

| Field     | Type       | Description
|-----------|------------|----------
| apiKey    | credentials| Required: API key obtained from Amazon.
| apiSecret | credentials| Required: API secret  obtained from Amazon.
| region    | String     | Required: Region.
| bucketName| String     | Required: The name of bucket.
| objects   | JSON       | Required: Array of objects. Container element that describes the delete request for an object. See README for more details.
| MFA       | String     | Optional: The value is the concatenation of the authentication device's serial number, a space, and the value displayed on your authentication device. Default: None. Condition: Required to permanently delete a versioned object if versioning is configured with MFA Delete enabled.
| quiet     | String     | Optional: Element to enable quiet mode for the request. When you add this element, you must set its value to true. true OR false

#### objects format
```
[
    {
      "Key": "string",
      "VersionId": "string"
    }
    ...
]
```
#### objects example
```json
[
    {
      "Key": "test1.txt"
    }
]
```

## AmazonS3.deleteBucketWebsite
This operation removes the website configuration from the bucket.

| Field     | Type       | Description
|-----------|------------|----------
| apiKey    | credentials| Required: API key obtained from Amazon.
| apiSecret | credentials| Required: API secret  obtained from Amazon.
| region    | String     | Required: Region.
| bucketName| String     | Required: The name of bucket.


## AmazonS3.deleteBucketTagging
This operation deletes the tags from the bucket.

| Field     | Type       | Description
|-----------|------------|----------
| apiKey    | credentials| Required: API key obtained from Amazon.
| apiSecret | credentials| Required: API secret  obtained from Amazon.
| region    | String     | Required: Region.
| bucketName| String     | Required: The name of bucket.


## AmazonS3.deleteBucketReplication
This operation deletes the tags from the bucket.

| Field     | Type       | Description
|-----------|------------|----------
| apiKey    | credentials| Required: API key obtained from Amazon.
| apiSecret | credentials| Required: API secret  obtained from Amazon.
| region    | String     | Required: Region.
| bucketName| String     | Required: The name of bucket.


## AmazonS3.deleteBucketPolicy
This operation deletes the policy from the bucket

| Field     | Type       | Description
|-----------|------------|----------
| apiKey    | credentials| Required: API key obtained from Amazon.
| apiSecret | credentials| Required: API secret  obtained from Amazon.
| region    | String     | Required: Region.
| bucketName| String     | Required: The name of bucket.


## AmazonS3.deleteBucketLifecycle
This operation deletes the lifecycle configuration from the bucket.

| Field     | Type       | Description
|-----------|------------|----------
| apiKey    | credentials| Required: API key obtained from Amazon.
| apiSecret | credentials| Required: API secret  obtained from Amazon.
| region    | String     | Required: Region.
| bucketName| String     | Required: The name of bucket.


## AmazonS3.deleteBucketCORS
This operation deletes the cors configuration information set for the bucket.

| Field     | Type       | Description
|-----------|------------|----------
| apiKey    | credentials| Required: API key obtained from Amazon.
| apiSecret | credentials| Required: API secret  obtained from Amazon.
| region    | String     | Required: Region.
| bucketName| String     | Required: The name of bucket.


## AmazonS3.deleteBucket
This operation deletes the bucket. All objects (including all object versions and Delete Markers) in the bucket must be deleted before the bucket itself can be deleted.

| Field     | Type       | Description
|-----------|------------|----------
| apiKey    | credentials| Required: API key obtained from Amazon.
| apiSecret | credentials| Required: API secret  obtained from Amazon.
| region    | String     | Required: Region.
| bucketName| String     | Required: The name of bucket.

