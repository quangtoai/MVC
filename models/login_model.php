<?php
class login_model extends model
{
    public function __construct()
    {
        parent::__construct();
    }
    public function run()
    {
        $sth = $this->db->prepare(" SELECT id, role FROM users WHERE
                login = :login AND password = MD5(:password)");
        $sth->execute(array(
            ':login' => $_POST['login'],
            ':password' => $_POST['password']
        ));
        $data = $sth->fetch();
        //$data = $sth->fetchAll();
        $count = $sth->rowCount();
        if($count > 0) {
            //login
            session::init();
            session::set('role', $data['role']);
            session::set('loggedIn', true);
            header('location: ../dashboard');
        }else {
            // show an error!
            header('location: ../login');
        }
        function logout() {
            session::destroy();
            header('location: ../login');
            exit;
        }
    }
}