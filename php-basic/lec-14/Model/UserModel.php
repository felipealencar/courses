<?php
require_once ROOT_PATH . "/Model/Database.php";
    class UserModel extends Database {
        public function getUsers(){
            $sql = "SELECT * FROM usuarios";
            return $this->select($sql);
        }
    }
?>