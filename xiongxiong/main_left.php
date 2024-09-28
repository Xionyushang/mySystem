<?php
include(dirname(__FILE__) . '/./includes/init.php');
include('./system/bookmark/db/bookmark.php');
$bookmark = new bookmark($mysql);
$read_bookmark = $bookmark->read($get_data);

foreach ($read_bookmark['data'] as $row) {
    extract($row);

    $content .= "
        <li>
            <img src=\"./img/system_icon/{$img}\" />
            <a href=\"{$href}\" target=\"$target\">{$mark_name}</a>
        </li>
        ";
}

$user_name_title = empty($user_name) ? "*訪客*" : $user_name; ?>

<style>
    a {
        text-decoration: none;
        font-size: 25;
        color: white;
    }

    ul {
        list-style-type: none;
    }

    li img {
        width: 30px;
        height: 30px;
        margin-right: 10px;
    }

    html,
    body {
        height: 100%;
    }

    body {
        display: flex;
        flex-direction: column;
    }

    html,
    body {
        height: 100%;
    }

    ::-webkit-scrollbar {
        display: none;
    }
</style>
<table style="display: flex; justify-content: center;">
    <tr>
        <td><img src="./img/user_icon/default_people_piceure.png" width="150px"></td>
    </tr>
    <tr>
        <td style="text-align: center;font-size: 30; color:white;"><?php echo $user_name_title ?></td>
    </tr>
</table>
<ul>
    <?php echo $content ?>
</ul>