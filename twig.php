<?php

require_once "vendor/autoload.php";
require_once "config.php";

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
    new NavItem( "Home", "home", "active" ),
    new NavItem( "About", "about" ),
    new NavItem( "Contact", "contact" )
    ];

$templateParameters = [
    "projectName" => PROJECT_NAME,
    "navigation" => $navItems
    ];

$template = "home.html";

echo $twig->render($template, $templateParameters );
