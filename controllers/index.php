<?php
class Index extends controller {
    function __construct() {
        parent::__construct();
    }

        function index() {
        echo " INDEX INDEX INDIX";
            $this->views->render('index/index');
        }

        function details() {
            $this->views->render('index/index');
        }

    }
