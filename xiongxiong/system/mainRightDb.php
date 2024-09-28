<?php
class post {
    public $mysql;
    public  $table = 'post';

    function __construct($mysql) {
        if ($mysql != '') {
            $this->mysql = $mysql;
        }
    }

    function read($array) { //修改
        extract($array);
        $sql .= "SELECT p.*, u.user_name FROM {$this->table} p";
        $sql .= " JOIN user u ON p.user_id = u.id";
        $sql .= " WHERE p.state='0'";
        $sql .= " ORDER BY p.creat_date DESC, p.creat_time DESC;";
        return $this->mysql->run($sql);
    }
}