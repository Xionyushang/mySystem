<?php
include('./include/config.php');
include('./db/bookmark.php');
$bookmark = new bookmark($mysql);

switch ($get_data['op']) {
    case "list":
    default:
        $html->head("主頁籤維護", "", "./include/bookmark.js");
        $db = $bookmark->read($get_data);
        include('./view/search.php');
        include('./view/list.php');
        break;

    case "add_edit_view":
        if(empty($get_data['id'])){
            $html->head("新增主頁籤");
            $db = $bookmark->read($get_data);
            $op="creat_save";
        }else{
            $html->head("編輯主頁籤","","./include/bookmark.js");
            $db = $bookmark->read($get_data);
            $op="edit_save";
        }
        include('./view/add_edit_view.php');
        break;

    case "creat_save":
        $db = $bookmark->create($get_data);
        $js->Reload_father();
        $js->close_window();
        break;

    case "edit_save":
        $html->head();
        $db = $bookmark->update($get_data);
        $js->Reload_father();
        $js->close_window();
        break;

    case "delete":
        $db = $bookmark->delete($get_data['id']);
        $js->Reload_father();
        $js->close_window();
        break;
}
$html->food();
