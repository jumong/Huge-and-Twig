<?php
/**

 *
 * Code modifed from this Arthor
 *
 * @author     Gabriel Maftei <gmaftei@gmail.com>
 * @copyright  2015 Gabriel Maftei
 * @license    MIT
 *
 * @link       https://github.com/gabizz/Twig-Helper-for-simple-mvc-framework
 * @since      File available since Release 1.0
 **/


class Twig {


    public static function render( $path , $data = [] , $extension = "twig" ) {

        Twig_Autoloader::register();

        $redirect = $path . "." . $extension;

        $loader = new Twig_Loader_Filesystem(VIEW_DIR);

        $twig = new Twig_Environment($loader, array(
            'cache' => APP_DIR.'/cache',
            'debug'	=>	true,
            'auto_reload'	=>	true,
            'strict_variables'	=>	true,
            'autoescape'	=>	true,
        ));

        $twig->AddExtension( new \Twig_Extension_Debug() );

        echo $twig->render( $redirect , $data  );

    }


}
