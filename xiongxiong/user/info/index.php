<?php
include('./include/config.php');
include('./db/user_info.php');
include('./db/user.php');
include('./db/post.php');

$user_info = new user_info($mysql);
$user = new user($mysql);
$post = new post($mysql);

switch ($get_data['op']) {
    case "view":
    default:
        $html->head("我的個人檔案", "./include/user_info.css", "./include/user_info.js");
        $html->load_jQuery();
        $html->load_jquery_ui();
        $html->load_sweetalert2();
        $get_data['id'] = $_SESSION['user_id'];
        $db = $user->read($get_data);
        $get_data['user_id'] = $_SESSION['user_id'];
        $db_user_info = $user_info->read($get_data);
        $dbPost=$post->read($get_data);
        include("./view/view.php");
        break;

    case "demo":
        $html->head("我的個人檔案", "", "./include/user_info.js");
        $html->load_jQuery();
        include("./view/demo.php");
        break;

    case "create_save": //bio
        $html->head("新增簡介", "", "");
        $db = $user_info->create_bio($get_data);
        $js->window_replace("./index.php?op=view");
        break;

    case "edit_save": //bio
        $html->head("修改簡介", "", "");
        $db = $user_info->update_bio($get_data);
        $js->window_replace("./index.php?op=view");
        break;

    case "add_self_save": //user_info
        $html->head("新增儲存", "", "");
        $db = $user_info->create_self($get_data);
        $get_data['id'] = $get_data['user_id'];
        $db = $user->update($get_data);
        $_SESSION['user_name'] = $get_data['user_name'];
        $js->window_replace("./index.php?op=view");

    case "edit_self_save": //user_info
        $html->head("修改儲存", "", "");
        $db = $user_info->update_self($get_data);
        $get_data['id'] = $get_data['user_id'];
        $db = $user->update($get_data);
        $_SESSION['user_name'] = $get_data['user_name'];
        $js->window_replace("./index.php?op=view");
}
$html->food();
