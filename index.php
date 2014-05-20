<html>
<head>
  <link type="text/css" rel="stylesheet" href="/styles/styles.css" />
</head>
<body>

<?php
use google\appengine\api\users\User;
use google\appengine\api\users\UserService;

$user = UserService::getCurrentUser();

if (isset($user)) {
  echo sprintf('Welcome, %s! (<a href="%s">sign out</a>)',
               $user->getNickname(),
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