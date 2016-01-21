<?php

/**
 * Configuration for DEVELOPMENT environment
 * To create another configuration set just copy this file to config.production.php etc. You get the idea :)
 */


return [


    'PATH_CONTROLLER' => BASE_DIR . '/app/controller/',
    'PATH_VIEW' => BASE_DIR . '/app/view/',
    'PATH_LAYOUTS' => BASE_DIR . '/app/layout/',
    'VIEWS_PATH' => APP_DIR . 'view/',
    'ERRORS_PATH' => APP_DIR . 'view/errors/',
    'LOGIN_PATH' => APP_DIR . 'view/login/',
    'ADMIN_VIEWS_PATH' => APP_DIR . 'view/admin/',
    'LAYOUT_PATH' => APP_DIR . '/view/layout/',
    'CSS_PATH' => BASE_DIR . '/public/css/',


    /**
     *
     * added a dir[array] to easily pass to vars to Twig
     *
     */

    'DIRS' => [

        'URL_PATH'      => 'http://' . $_SERVER['HTTP_HOST'] . str_replace('public', '', dirname($_SERVER['SCRIPT_NAME'])),
        'PUBLIC_ROOT'   => PUBLIC_ROOT,
        'APP_PATH'      => APP_DIR,
        'VIEWS_PATH'    => APP_DIR . 'view/',
        'CSS_PATH'      => PUBLIC_ROOT . 'public/css/',
        'BOWER_PATH'    => PUBLIC_ROOT . 'bower_components/',

    ],


];

