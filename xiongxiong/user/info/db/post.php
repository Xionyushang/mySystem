<?php

class post {
    public $mysql;
    public  $table = 'post';

    function __construct($mysql) {
        if ($mysql != '') {
            $this->mysql = $mysql;
        }
    }

    function read($array) {
        extract($array);
        $sql .= "SELECT content,creat_date,creat_time,state FROM {$this->table}";
        $sql .= " WHERE user_id={$user_id}";
        $sql .= " ORDER BY creat_date DESC, creat_time DESC;";
        
        return $this->mysql->run($sql);
    }
}
