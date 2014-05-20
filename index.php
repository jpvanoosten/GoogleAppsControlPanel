<html>
<head>
  <link type="text/css" rel="stylesheet" href="/styles/styles.css" />
</head>
<body>

<?php
require_once 'Google/Client.php';
require_once 'config.php';

$client = new Google_Client();
$client->setClientId(CLIENT_ID);
$client->setClientSecret(CLIENT_SECRET);
$client->setRedirectUri(REDIRECT_URI);

use google\appengine\api\users\User;
use google\appengine\api\users\UserService;

$user = UserService::getCurrentUser();

if (isset($user)) {
  echo sprintf('Welcome, %s! (<a href="%s">sign out</a>)',
               htmlspecialchars($user->getNickname()),
               UserService::createLogoutUrl('/'));
	echo '<p>Your e-mail address is ' . $user->getEmail() . '</p>';
} else {
  echo sprintf('<a href="%s">Sign in or register</a>',
               UserService::createLoginUrl('/'));
}  
 ?>
 
 <p>
 <img src="/assets/Jeremiah-480x480.jpg" alt="Jeremiah" />
 </p>
</body>

 </html>