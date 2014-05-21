<?php

include_once "functions.php";

function viewUserManager()
{
	$ret = <<<USER_MANAGER
<p>This is the user manager page.</p>
USER_MANAGER;

	return $ret;
}

echo pageHeader(PROJECT_NAME . " - User Manager");

echo viewUserManager();

echo pageFooter();