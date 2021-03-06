<?php
/**
 * Configuration file generated by ZFTool
 * The previous configuration file is stored in application.config.old
 *
 * @see https://github.com/zendframework/ZFTool
 */

$env = getenv('APPLICATION_ENV') ?: 'production';

return array(
    'modules' => array(
        'Application',
        'Auth',
    ),
    'module_listener_options' => array(
        'module_paths' => array(
            './module',
            './vendor',
        ),
        'config_glob_paths' => array(
            'config/autoload/{,*.}{global,local}.php'
        ),
        
        'config_cache_enabled' => ($env == 'production'),
        'module_map_cache_enabled' => ($env == 'production'),
        'module_map_cache_key' => 'module_map',
        'cache_dir' => 'data/config/',
        'check_dependencies' => ($env != 'production'),
    ),
);
