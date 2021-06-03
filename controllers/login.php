<?php
class login extends controller {
    function __construct() {
        parent::__construct();
    }
    function index() {
        $this->views->render('login/index');
    }
    function run() {
        $this->model->run();
    }
   // function login() {
      //  echo "123";
    //}
    //function dashboard() {
      //  echo " xử lý login";
   // }
}