<?php
function isWebRequest()
{
  return isset($_SERVER['HTTP_USER_AGENT']);
}

function pageHeader($title)
{
	$ret = "";
	if ( isWebRequest() ) 
	{
		$ret = <<<HEADER
<!doctype html>
	<html>
	<head>
		<title>$title</title>
		<link href='styles/styles.css' rel='stylesheet' type='text/css' />
	</head>
	<table>
		<tr>
			<td><a href="index.php">Home</a></td>
			<td><a href="user_manager">User Manager</a></td>
		</tr>
	</table>
<body>
HEADER;
	}
	return $ret;
}

function pageFooter($file = null)
{
	$ret = "";
	if ( isWebRequest() ) 
	{
		$ret = <<<FOOTER
<div class="footer" align="center">
Copyright 2014<br/>
Jeremiah van Oosten
</div>
</html>
FOOTER;
	}
	return $ret;
}
