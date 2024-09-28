<?php
include(dirname(__FILE__) . '/includes/init.php');
include('./system/mainRightDb.php');
$post = new post($mysql);
$db = $post->read($get_data);

$Allcontent = '';
foreach ($db['data'] as $row) {
    extract($row);
    $Allcontent .= "<li class=\"comment\">
                        {$user_name}&nbsp
                        <span class=\"date-time\">
                        <span>{$creat_date}</span>&nbsp
                        <span>{$creat_time}</span>
                        </span>
                        <br>{$content}
                    </li>";
}
?>

<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 20px;
    }

    .container {
        max-width: 600px;
        margin: auto;
        background: white;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h1 {
        text-align: center;
        color: #333;
    }

    #commentsList {
        list-style: none;
        padding: 0;
    }

    .comment {
        background: #f9f9f9;
        margin: 5px 0;
        padding: 10px;
        border-radius: 5px;
    }

    .date-time {
        float: right;
        text-align: right;
    }
</style>

<!DOCTYPE html>
<html lang="zh-Hant">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>留言列表</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="container">
        <h1>留言列表</h1>
        <div id="commentsSection">
            <ul id="commentsList">
                <?php echo $Allcontent ?>
            </ul>
        </div>
    </div>
</body>
</html>