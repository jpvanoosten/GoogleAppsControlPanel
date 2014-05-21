<?php

include_once "globals.php";
include_once "functions.php";

$path = parse_url( $_SERVER['REQUEST_URI'], PHP_URL_PATH );

if ( $path == '/user_manager' )
{
	include_once "views/view_users.php";
}
else
{
	include_once "views/view_frontpage.php";
}
