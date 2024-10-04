<?php
$userNameTitle = empty($user_name) ? "*訪客*" : $user_name;
$allContent = '';
foreach ($dbPost['data'] as $row) {
    extract($row);
    $allContent .= "<article>
                    <h3>
                        {$user_name}&nbsp
                        <span class=\"date-time\">
                            <span>{$creat_date}</span>&nbsp
                            <span>{$creat_time}</span>
                        </span>
                    </h3>
                    {$content}
                    </article>";
}

foreach ($dbBookmark['data'] as $row) {
    extract($row);
    $bookmark .= "
            <li>
            <img src=\"./img/system_icon/{$img}\" />
            <span onclick=\"window.open('{$url}','{$target}','')\">{$mark_name}</span>
        </li>
    ";
}
?>

<style>
    body {
        margin: 0;
        padding: 0;
        position: relative;
    }

    header {
        background-color: #006EFB;
        padding: 10px;
        text-align: center;
    }

    .search-bar {
        width: 20%;
        padding: 8px;
    }

    .container {
        display: flex;
        margin: 10px;
        margin: 0;
        width: 90vw;
    }

    .content {
        width: 60%;
        padding: 15px;
    }

    article {
        margin-bottom: 20px;
        padding: 10px;
        border: 1px solid #ccc;
        background-color: #f9f9f9;
        border-radius: 5px;
    }

    .date-time {
        float: right;
        text-align: right;
    }

    /*sidebar*/
    ul {
        list-style-type: none;
    }

    li {
        display: flex;
        align-items: center;
        margin-bottom: 10px;
    }

    li span {
        position: relative;
        text-decoration: none;
        font-size: 30px;
        color: white;
        cursor: pointer;
    }

    li span::after {
        content: '';
        position: absolute;
        left: 0;
        bottom: -2px;
        width: 0;
        height: 3px;
        background-color: white;
        transition: .4s .2s;
    }

    li span:hover::after {
        width: 100%;
    }

    li img {
        width: 35px;
        height: 35px;
        margin-right: 10px;
    }

    .sidebar {
        width: 20%;
        background-color: #a2a6dd;
        padding: 15px;
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        font-size: 25px;
        color: white;
        margin: 0;
    }

    /*sidebar end*/
</style>
<header>
    <input type="text" placeholder="搜尋..." class="search-bar">
</header>
<div class="container">
    <aside class="sidebar">
        <img src="./img/user_icon/default_people_piceure.png" width="150px">
        <h2><?php echo $userNameTitle ?></h2>
        <ul>
            <?php echo $bookmark ?>
        </ul>
    </aside>
    <main class="content">
        <h2 style="text-align: center;">留言板</h2>
        <?php echo $allContent; ?>
    </main>
</div>