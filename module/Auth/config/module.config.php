<?php
return array(
    'navigation' => array(
        'primary' => array( 
            array(
                'label' => 'Auth', // TODO: This should change to Login if the user is not logged in, or Logout if the user is logged in.
                'route' =>  'auth',
                'pages' => array(
                    array(
                        'label' => 'Login',
                        'route' => 'auth',
                        'action' => 'login',
                    ),
                    array(
                        'label' => 'Logout',
                        'route' => 'auth',
                        'action' => 'logout',
                    ),
                    array(
                        'label' => 'Register',
                        'route' => 'auth',
                        'action' => 'register',
                    ),
                ),
            ),
        ),
    ),
    'controllers' => array(
        'invokables' => array(
            'Auth\Controller\Auth' => 'Auth\Controller\AuthController',
        ),
    ),
    'router' => array(
        'routes' => array( 
            'auth' => array(
                'type'      => 'Segment',
                'options'   => array(
                    'route'     => '/auth[/][:action]',
                    'defaults'  => array(
                        '__NAMESPACE__' => 'Auth\Controller',
                        'controller'    => 'Auth',
                        'action'        => 'index',
                    ),
                    'constraints' => array(
                        'action'    => '^index|login|logout|register$'                        
                    ),
                ),
            ),
        ),
    ),
    'view_manager' => array(
        'template_path_stack' => array(
            'auth' => __DIR__ . '/../view',
        ),
    ),
);