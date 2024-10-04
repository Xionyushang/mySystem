<?php
include('./include/config.php');
include('./db/post.php');
$post = new post($mysql);


switch ($get_data['op']) {
    case "view":
    default:
        $html->head("新增貼文", "", "");
        $html->load_tinymce();
        include('./view/create.php');
        break;
    case "create_save":
        $html->head("新增儲存貼文", "", "");
        $db = $post->create($get_data);
        $js->window_replace("./../index.php");
        break;
}
$html->food('Y');