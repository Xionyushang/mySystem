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

    function update($array) { //修改
        extract($array);
        $sql = "UPDATE {$this->table} SET 
                mark_name=\"{$mark_name}\",
                sort=\"{$sort}\",
                href=\"{$href}\",
                img=\"{$img}\",
                target=\"{$target}\"

				;";
        return $this->mysql->run($sql);
    }

    function delete($id) {
        $sql = "DELETE FROM {$this->table} WHERE ";
        return $this->mysql->run($sql);
    }
}
