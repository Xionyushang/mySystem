<?php
include('./include/config.php');
include('./db/user.php');
$user = new user($mysql);

switch ($get_data['op']) {
    case "login": //首頁
    default:
        $html->head("welcome", "./include/login.css", "./include/login.js");
        $html->load_sweetalert2();
        if($get_data['type']=='false'){$js->sweetalert2("信箱或密碼錯誤","","error");}
        include('./view/login.php');
        break;
    case "verify";
        $html->head();
        $html->load_sweetalert2();
        $db = $user->read($get_data);
        if (!empty($db) and $db['num_rows'] == '1') {
            foreach ($db['data'] as $row) {
                extract($row);
            }
            $_SESSION['user_id'] = $id;
            $_SESSION['email'] = $email;
            $_SESSION['user_name'] = $user_name;
            $_SESSION['login_date']=$now_date;
            $_SESSION['login_time']=$now_time;
            $js->window_open("../../index.php", "_self", "");
        } else {
            $js->window_open("index.php?op=login&type=false", "_self","");
        };
        break;
    case "add":
        $html->load_sweetalert2();
        $html->head("creat_user", "./include/add.css", "./include/add.js");
        $op="creat_save";
        include('./view/add.php');
        break;
    case "creat_save":
        $html->head();
        $db = $user->create($get_data);
        $js->Reload_father();
        $js->close_window();
        break;
    case "logout":
        //session clear
        session_start();
        session_destroy(); 
        $js->window_open("index.php?op=login", "_self","");
        break;
}
$html->food();
