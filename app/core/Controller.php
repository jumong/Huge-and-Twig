<?php


class Controller
{
    public $View;

    function __construct()
    {
        // always initialize a session
        Session::init();

        // user is not logged in but has remember-me-cookie ? then try to login with cookie ("remember me" feature)
        if (!Session::userIsLoggedIn() AND Request::cookie('remember_me')) {
            header('location: ' . Config::get('URL') . 'login/loginWithCookie');
        }

        /**
         *
         * add in Twig or use the Static Function
         * if use the Static method this is not needed here
         *
         * */

        Twig_Autoloader::register();

        $this->loader = new Twig_Loader_Filesystem(VIEW_DIR);

        $this->twig = new Twig_Environment($this->loader, array(
            'cache' => APP_DIR . '/cache',
            'debug' => true,
            'auto_reload' => true,
            'strict_variables' => true,
            'autoescape' => true,
        ));


        /**
         * the View is no longer needed
         */

        // create a view object to be able to use it inside a controller, like $this->View->render();
        //$this->View = new View();

    }
}
