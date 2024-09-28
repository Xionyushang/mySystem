<?php

class user {
    public $mysql;
    public  $table = 'user';
    public  $id = 'id';

    function __construct($mysql) {
        if ($mysql != '') {
            $this->mysql = $mysql;
        }
    }

    function read($array) {
        extract($array);
        $sql = "SELECT user_name,gender FROM {$this->table} ";
        $sql .= empty($this->id)?"WHERE {$this->id}='{$user_id}'":"WHERE {$this->id}='{${$this->id}}'";

        return $this->mysql->run($sql);
    }

    function create($array) {
        extract($array);
        $sql = "INSERT INTO {$this->table} SET
                mark_name=\"{$mark_name}\",
                sort=\"{$sort}\",
                href=\"{$href}\",
                img=\"{$img}\",
                target=\"{$target}\"";

        return $this->mysql->run($sql);
    }

    function update($array) { //修改
        extract($array);
        $sql = "UPDATE {$this->table} SET 
                user_name=\"{$user_name}\",
                gender=\"{$gender}\"
				WHERE {$this->id}=\"{${$this->id}}\";";
        return $this->mysql->run($sql);
    }
}
