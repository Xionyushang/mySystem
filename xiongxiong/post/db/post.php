<?php

class post {
    public $mysql;
    public  $table = 'post';

    function __construct($mysql) {
        if ($mysql != '') {
            $this->mysql = $mysql;
        }
    }

    function create($array) {
        extract($array);
        $sql = "INSERT INTO {$this->table} SET
                user_id=\"{$user_id}\",
                content=\"{$content}\",
                creat_date=\"{$creat_date}\",
                creat_time=\"{$creat_time}\"";

        return $this->mysql->run($sql);
    }
}
