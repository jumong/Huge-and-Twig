<?php

class IndexController extends Controller
{


    /**
     * Construct this object by extending the basic Controller class
     */
    public function __construct()
    {
        parent::__construct();
    }


    public function index()
    {


        /**
         * these are the basic values passed to Twig
         */

        $data = [

            "dir" => Config::get('DIRS'),
            "description" => Config::get('DESCRIPT'),
            "pageTitle" => 'Index Page',
            "feedback" => FlashAlert::renderFeedbackMessages(),

        ];

        /**
         * Static function to call Twig page
         */

        Twig::render('index/index', $data);

        /**
         * Or from the Controller method
         */

        $this->twig('index/index', $data);


    }

}




