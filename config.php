<?php
require 'vendor/autoload.php';

$appUrl = "PLACE_YOUR_PROJECT_URL_HERE";
$clientID = "PLACE_YOUR_CLIENT_ID_HERE";
$clientID = "PLACE_YOUR_CLIENT_SECRET_HERE";
$redirectUri = "PLACE_YOUR_REDIRECT_URI_HERE";

$provider = new \League\OAuth2\Client\Provider\GenericProvider([
    'clientId'                => $clientID,    // The client ID assigned to you by the provider
    'clientSecret'            => $clientSecret,    // The client password assigned to you by the provider
    'redirectUri'             => $redirectUri,
    'urlAuthorize'            => $appUrl.'/oauth2/authorize',
    'urlAccessToken'          => $appUrl.'/oauth2/token',
    'urlResourceOwnerDetails' => $appUrl.'/oauth2/userInfo',
    'scopes' => 'openid'
]);
?>