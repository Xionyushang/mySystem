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

class bookmark {
    public $mysql;
    public  $table = 'bookmark';
    public  $id = 'id';

    function __construct($mysql) {
        if ($mysql != '') {
            $this->mysql = $mysql;
        }
    }

    function read($array) {
        extract($array);
        $sql = "SELECT * FROM {$this->table} ";
        $sql .= empty(${$this->id}) ? " where 1=1 " : " where {$this->id}='{${$this->id}}' ";

        $sql .= empty($find_mark_name) ? "" : " and mark_name LIKE '%{$find_mark_name}%' ";
        $sql .= empty($find_sort) ? "" : " and sort='{$find_sort}' ";
        $sql .= "ORDER BY sort ASC";

        return $this->mysql->run($sql);
    }
}
