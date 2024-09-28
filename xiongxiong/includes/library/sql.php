<?php
include(dirname(__FILE__) . '/../../includes/database/erp.php');

$link = mysqli_connect($sql_db['host'], $sql_db['dbuser'], $sql_db['dbpassword'], $sql_db['db_data_base']);

if ($link) {
    mysqli_query($link, 'SET NAMES utf8');
    //echo "Connect successfully";
} else {
    echo "system comment error" . mysqli_connect_error();
};


class mysql {
    public $mysql;
    function data_query($sql) {
        global $link;
        $result = mysqli_query($link, $sql);
        if ($result === false) {
            echo "SQL query error" . mysqli_error($link);
        } else {
            return $result;
        }
    }

    function run($sql) {
        $upper = strtoupper($sql); //string to upper case
        $sql_kind = explode(' ', $upper)[0]; //take blank forward
        if ($sql_kind == "SELECT") {
            return $this->data_read($sql);
        }
        if ($sql_kind == "UPDATE") {
            return $this->data_update($sql);
        }
        if ($sql_kind == "INSERT") {
            return $this->data_creat($sql);
        }
        if ($sql_kind == "DELETE") {
            return $this->data_update($sql);
        }
    }

    function data_read($sql) {
        $query = $this->data_query($sql);
        $resut['sql']=$sql;
        $resut['num_rows'] = mysqli_num_rows($query);
        if ($resut['num_rows'] > 0) {
            while ($row = mysqli_fetch_assoc($query)) {
                $data[] = $row;
            }
            $resut['data']=$data;
            return $resut;
        } else {
            return false;
        }
        // $resut['data']=mysqli_fetch_assoc($query);
        return $resut;
    }

    //creat
    function data_creat($sql) {
        return  $this->data_query($sql);
    }

    //delete
    function data_delete($sql) {
        return  $this->data_query($sql);
    }

    //update
    function data_update($sql) {
        return  $this->data_query($sql);
    }
}
$mysql = new mysql($mysql);
?>