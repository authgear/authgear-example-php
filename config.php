<?php
require 'vendor/autoload.php';

$appUrl = "PLACE_YOUR_PROJECT_URL_HERE";
$provider = new \League\OAuth2\Client\Provider\GenericProvider([
    'clientId'                => 'PLACE_YOUR_APP_CLIENT_ID_HERE',    // The client ID assigned to you by the provider
    'clientSecret'            => 'PLACE_YOUR_APP_CLIENT_SECRET_HERE',    // The client password assigned to you by the provider
    'redirectUri'             => 'PLACE_YOUR_REDIRECT_URL_HERE',
    'urlAuthorize'            => 'PLACE_YOUR_AUTH_ENDPOINT_HERE',
    'urlAccessToken'          => 'PLACE_YOUR_ACCESSTOKEN_ENDPOINT_HERE',
    'urlResourceOwnerDetails' => 'PLACE_YOUR_USER_INFO_ENDPOINT_HERE',
    'scopes' => 'openid'
]);
?>