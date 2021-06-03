<?php
class user extends controller {
    public function __construct() {
        parent::__construct();
        session::init();
        $logged = session::get('loggedIn');
        $role = session::get('role');
        if($logged == false || $role != 'owner') {
            session::destroy();
            header('location: login');
            exit;
        }
    }
    public function index() {
        $this->views->userList = $this->model->userList();
        $this->views->render('user/index');
    }

    public function create() {
        if (strlen($_POST['password']) < 4) {
            echo "nhap lai pass";
        } else {
           $this->model->create();
           header('location: ../user');
        }
    }

    public function edit($id) {
         $this->views->user = $this->model->userSinglelist($id);
        $this->views->render('user/edit');
    }

    public function editSave() {
        $this->model->editSave();
        header('location:'.URL.'user');
    }

    public function delete($id) {
        $this->model->Delete($id);
        header('location:' .URL. 'user');

    }
}
