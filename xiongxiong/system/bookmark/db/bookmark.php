<?php

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
                mark_name=\"{$mark_name}\",
                sort=\"{$sort}\",
                href=\"{$href}\",
                img=\"{$img}\",
                target=\"{$target}\"

				WHERE {$this->id}=\"{${$this->id}}\"
				;";
        return $this->mysql->run($sql);
    }

    function delete($id) {
        $sql = "DELETE FROM {$this->table} WHERE {$this->id}=\"{$id}\"";
        return $this->mysql->run($sql);
    }
}
