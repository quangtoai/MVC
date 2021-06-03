<?php
class dashboard extends controller {
    function __construct() {
        parent::__construct();
        session::init();
        $logged = session::get('loggedIn');
        if($logged == false) {
            session::destroy();
            header('location: login');
            exit;
        }

        $this->views->js = array('dashboard/js/default.js');

    }
    function index() {
        $this->views->render('dashboard/index');
    }
    function logout() {
        session::destroy();
        header('location: ../login');
        exit;
    }

    function xhrInsert()

    {
       $this->model->xhrInsert();
    }

    function xhrGetlistings()
    {
    $this->model->xhrGetlistings();
    }
    function xhrDeleteListing()
    {
        $this->model->xhrDeleteListing();
    }

}
