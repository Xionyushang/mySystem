<?php
include(dirname(__FILE__) . '/includes/init.php');
include(dirname(__FILE__) . '/mainDb.php');
$post = new post($mysql);
$bookmork = new bookmark($mysql);

switch ($get_data['op']) {
    case "main":
    default:
        if ($_SESSION['email'] !== '' && $_SESSION['login_time'] != '' && $_SESSION['login_date'] == $now_date) {
            $html->head("首頁", "", "./mainJs.js");
            $html->load_jQuery();
            $dbPost = $post->read($get_data);
            $dbBookmark = $bookmork->read($get_data);
            include('main.php');
        } else {
            $js->window_open("./login/index.php", "_self", "");
        }
        break;
}
$html->food();
