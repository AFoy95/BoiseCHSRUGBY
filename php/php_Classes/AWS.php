<?php
require '/Users/crk/projects/cs404/src/vendor/autoload.php';
require 'aws.phar';
use Aws\S3\S3Client;
$s3 = new Aws\S3\S3Client([
    'profile' => 'default',
    'version' => 'latest',
    'region' => 'us-east'
]);
$sharedConfig = [
    'region' => 'us-west',
    'version' => 'latest'
];
$sdk = new Aws\Sdk($sharedConfig);
$client = $sdk->createS3();
$result = $client->putObject([
    'Bucket' => 'newpersopics',
    'Key' => "CheMan1995!",
    'Body' => 'Working form'
]);
// Download the contents of the object.
$result = $client->getObject([
    'Bucket' => 'newpersopics',
    'Key' => "CheMan1995!"
]);
// Print the body of the result by indexing into the result object.
echo "\n" . $result['Body'] . "\n";