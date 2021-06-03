<?php
class user_model extends model {
    function __construct()
    {
        parent::__construct();
    }
    function userlist() {
        $sth = $this->db->prepare('SELECT id, login, role FROM users');
        $sth->execute();
        //$data = $sth->fetchAll();
        //return $data;
        return $sth->fetchAll();
    }

    function userSinglelist($id) {
        $sth = $this->db->prepare('SELECT id, login, role FROM users WHERE id = :id');
        $sth->execute(array(
            ':id' => $id
        ));
        return $sth->fetch();

    }

public function create() {
        $sth = $this->db->prepare(' INSERT INTO users
    (login, password, role )
    value (:login, :password, :role)
    ');
        $sth->execute(array(
            ':login' => $_POST['login'],
            ':password' => MD5($_POST['password']),
            ':role' => $_POST['role'],
        ));
}

public function editSave() {
        var_dump($_POST);
    $sth = $this->db->prepare(' UPDATE users SET
    login = :login, password = :password, role = :role WHERE id = :id
');
    $sth->execute(array(
        ':login' => $_POST['login'],
        ':password' => MD5($_POST['password']),
        ':role' => $_POST['role'],
        ':id' => $_POST['id'],
    ));
    $data = $sth->fetchAll();
    return $data;

}

public function delete($id) {
        $sth = $this->db->prepare("DELETE FROM users WHERE id = :id");
        $sth->execute(array(
            ':id' => $id
        ));
}
}
