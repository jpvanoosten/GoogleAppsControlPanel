<?php

require_once "vendor/autoload.php";
require_once "config.php";

$path = parse_url( $_SERVER['REQUEST_URI'], PHP_URL_PATH );
$base = basename($path);

var_dump($base);

$loader = new Twig_Loader_Filesystem("templates");
$twig = new Twig_Environment($loader);

class NavItem
{
    public $caption;
    public $href;
    public $class;
    
    function __construct( $caption, $href, $class = "" )
    {
        $this->caption = $caption;
        $this->href = $href;
        $this->class = $class;
    }
}

$navItems = [
    new NavItem( "Home", "home", ( $base == "home" || $base == "" ) ? "active" : "" ),
    new NavItem( "About", "about", ( $base == "about" ) ? "active" : "" ),
    new NavItem( "Contact", "contact", ($base == "contact" ) ? "active" : "" )
    ];

$templateParameters = [
    "projectName" => PROJECT_NAME,
    "navigation" => $navItems
    ];

switch( $base )
{
    case "about":
        $template = "about";
        break;
    case "contact":
        $template = "contact";
        break;
	default:
        $template = "home";
        error_log( "Invalid base: " . $base );
}

echo $twig->render($template . ".html", $templateParameters );
