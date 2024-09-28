<?php
include(dirname(__FILE__) . '/includes/init.php');

switch ($op) {
    case "main":
    default:
        if ($_SESSION['email'] !== '' && $_SESSION['login_time'] != '' && $_SESSION['login_date'] == $now_date) {
            $html->head("首頁","","");
            include('main.php');
        } else{
            $js->window_open("./system/login/index.php","_self","");
        }
            break;
}
$html->food();
