<?php

include 'sageone_client.php';
include 'sageone_constants.php';

$sageone_client = new SageoneClient($client_id, $client_secret, $callback_url, $auth_endpoint, $token_endpoint, $scope);

/* Exchange the authorisation code for an access_token */
$response = $sageone_client->getAccessToken($_GET['code']);
$access_token = json_decode($response, true)['access_token'];

/* redirect with the access_token */
header("Location: http://localhost:8000/sageone_data.php?access_token=" . $access_token);
die();

?>
