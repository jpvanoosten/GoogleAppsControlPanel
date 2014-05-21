<?php

include_once "include.php";
include_once "config.php";

require_once "Google/Client.php";

$client = new Google_Client();
$client->setClientId(CLIENT_ID);
$client->setClientSecret(CLIENT_SECRET);
$client->setRedirectUri(REDIRECT_URI);
