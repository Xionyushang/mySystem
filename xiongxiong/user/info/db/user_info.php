<?php

class user_info {
    public $mysql;
    public  $table = 'user_info';
    public  $id = 'id';
    public  $user = 'user_id';

    function __construct($mysql) {
        if ($mysql != '') {
            $this->mysql = $mysql;
        }
    }

    function read($array) {
        extract($array);
        $sql = "SELECT * FROM {$this->table} ";
        $sql .= "WHERE {$this->user}='{${$this->user}}' ";

        return $this->mysql->run($sql);
    }

    function create_self($array) {
        extract($array);
        $sql = "INSERT INTO {$this->table} SET
                age=\"{$age}\",
                job=\"{$job}\",
                user_id=\"{$user_id}\",
                img_name=\"0\",
                bio=\"{$bio}\"";
        return $this->mysql->run($sql);
    }

    function update_self($array) { //修改
        extract($array);
        $sql = "UPDATE {$this->table} SET 
                age=\"{$age}\",
                job=\"{$job}\",
                bio=\"{$bio}\"
				WHERE {$this->id}=\"{${$this->id}}\";";
        return $this->mysql->run($sql);
    }

    function create_bio($array) {
        extract($array);
        $sql = "INSERT INTO {$this->table} SET
                age=\"0\",
                job=\"\",
                user_id=\"{$user_id}\",
                img_name=\"0\",
                bio=\"{$bio}\"";
        return $this->mysql->run($sql);
    }

    function update_bio($array) { //修改
        extract($array);
        $sql = "UPDATE {$this->table} SET 
                bio=\"{$bio}\"
				WHERE {$this->user}=\"{${$this->user}}\"
				;";
        return $this->mysql->run($sql);
    }

    function delete($id) {
        $sql = "DELETE FROM {$this->table} WHERE {$this->id}=\"{$id}\"";
        return $this->mysql->run($sql);
    }
}
