<?php


include_once "globals.php";
include_once "functions.php";

$path = parse_url( $_SERVER['REQUEST_URI'], PHP_URL_PATH );
$base = basename($path);

switch( $base )
{
	case "user_manager":
		include_once "views/view_users.php";
		break;
    case "about":
        include_once "views/view_about.php";
        break;
    case "contact":
        include_once "views/view_contact.php";
        break;
	default:
		include_once "views/view_frontpage.php";
}