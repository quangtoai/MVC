<?php
class dashboard_model extends model {
    function __construct() {
        parent::__construct();
    }
    function xhrInsert()
    {
        echo 1343;
    $text = $_POST['text'];
    $sth = $this->db->prepare('INSERT INTO data (text) value (:text)');
    $sth->execute(array(':text' => $text));

    $data = array('text' => $text, 'id' => $this->db->lastInsertId());

    echo json_encode($data);

    }

    function xhrGetlistings()
    {
            $sth = $this->db->prepare('SELECT * FROM data');
            $sth->setFetchMode(PDO::FETCH_ASSOC);
            $sth->execute();
            $data = $sth->fetchAll();
            echo json_encode($data);
    }

   function xhrDeleteListing() {
       $id = $_POST['id'];
       $sth = $this->db->prepare('DELETE FROM data WHERE id = "'.$id.'" ');
       $sth->execute();

   }


}