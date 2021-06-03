<?php
class error1 extends controller {
    function __construct() {
        parent::__construct();
    }
    function index() {
        $this->views->msg = "this page doesnt exist";
        $this->views->render('error/index');
    }
}
?>