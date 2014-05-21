<?php

include_once "globals.php";
include_once "functions.php";

$path = parse_url( $_SERVER['REQUEST_URI'], PHP_URL_PATH );

switch( $path )
{
	case "/user_manager":
		include_once "views/view_users.php";
		break;
	default:
		include_once "views/view_frontpage.php";
}