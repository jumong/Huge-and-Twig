<?php


return [


    /**
     *
     * Added a DIRS[array] to easily pass to vars to Twig
     * Defined vars come from Public/index.php
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

