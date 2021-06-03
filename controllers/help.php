<?php
class help extends controller {
    function __construct() {
        parent::__construct();
    }

    function index() {
        $this->views->render('help/index');
    }

   public function other($arg = false) {
        require "models/help_model.php";
        $model = new help_model();
        $this->views->blah = $model->blah();
    }
}
