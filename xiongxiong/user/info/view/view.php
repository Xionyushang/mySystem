<?php
foreach ($db['data'] as $row) {
    extract($row);
}
foreach ($db_user_info['data'] as $row) {
    extract($row);
}
$bio_op = empty($bio) ? "create_save" : "edit_save";
$bio_view = empty($bio) ? "新增簡介" : $bio;
$self_info_op = empty($id) ? "add_self_save" : "edit_self_save";
$self_info_onclick = "onClick=\"open_dialog();\";";
$self_info_content = "
                <table>
                    <tr>
                        <td>年齡:{$age}</td>
                    </tr>
                    <tr>
                        <td>行業:{$job}</td>
                    </tr>
                    <tr>
                        <td>性別: {$genders[$gender]}</td>
                    </tr>
                </table>
";

foreach ($dbPost['data'] as $row) {
    extract($row);
    $postContent .= "
    <div class=\"post\">
        {$user_name}&nbsp
        <span class=\"date-time\">
        <span class=\"creat_date\">{$creat_date}</span>&nbsp
        <span class=\"creat_time\">{$creat_time}</span>
        </span>
        <br>{$content}
    </div>";
}
?>
<div id="dialog">
    <form action="" method="post" id="form" target="_self">
        <input name="id" type="hidden" id="id" value="<?php echo $id; ?>" />
        <input name="user_id" type="hidden" id="user_id" value="<?php echo $user_id; ?>" />
        <input name="op" type="hidden" id="op" value="<?php echo $self_info_op; ?>" />
        <table>
            <tr>
                <td width="15%" class="title_right">名稱:</td>
                <td><input name="user_name" type="text" id="user_name" value="<?php echo $user_name; ?>" /></td>
            </tr>
            <tr>
                <td width="15%" class="title_right">年齡:</td>
                <td><input name="age" type="number" id="age" value="<?php echo $age; ?>" /></td>
            </tr>
            <tr>
                <td width="15%" class="title_right">工作:</td>
                <td><input name="job" type="text" id="job" value="<?php echo $job; ?>" /></td>
            </tr>
            <tr>
                <td width="15%" class="title_right">性別:</td>
                <td>
                    <select name="gender" id="gender">
                        <option></option>
                        <?php $html->select_options($genders, $gender) ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td width="15%" class="title_right">簡介:</td>
                <td><textarea name="bio" type="text" id="bio" cols="23" rows="5"><?php echo $bio; ?></textarea></td>
                </td>
            </tr>
        </table>
    </form>
</div>

<div class="profile-page">
    <div class="header">
        <div class="cover-photo">
            <!-- <img src="cover-photo.jpg" alt="Cover Photo"> -->
        </div>
        <div class="profile-photo">
            <img src="../../../img/user_icon/default_people_piceure.png">
        </div>
    </div>
    <div class="profile-info">
        <h1><?php echo $user_name ?></h1>
        <div class=bio>
            <p onclick="bio_edit()"><?php echo nl2br($bio_view); ?></p>
            <div class="bio_msg"><?php echo $bio_msg[$bio_op] ?></div>
        </div>
        <form id="form1" method="post" action="" target="_self">
            <input type="hidden" name="op" id="op" value="<?php echo $bio_op; ?>" />
            <input type="hidden" name="user_id" id="user_id" value="<?php echo $user_id; ?>" />
            <input type="hidden" name="bio" id="bio" value="<?php echo $bio; ?>" />
        </form>
    </div>
    <div class="content">
        <div class="sidebar">
            <div class="post">
                <div class="self_info">
                    <h2 <?php echo $self_info_onclick ?>>個人簡介</h2>
                    <div class="self_info_msg">編輯</div>
                </div>
                <?php echo $self_info_content ?>
            </div>
        </div>
        <div class="main-content">
            <h2>歷史貼文</h2>
            <?php echo $postContent ?>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $("#dialog").dialog({
            autoOpen: false,
            title: "修改資料",
            modal: true,
            width: 320,
            open: function() {
                $(this).html(textAreaContent);
            },
            buttons: {
                "確定": function() {
                    $("#form").submit(); // 手動觸發表單提交
                },
                "取消": function() {
                    $(this).dialog("close");
                }
            }
        });
    });

    function open_dialog() {
        $("#dialog").dialog("open");
    };

    function bio_edit() {
        (async () => {
            const {
                value: bio
            } = await Swal.fire({
                input: "textarea",
                title: '個人介紹',
                inputPlaceholder: "說點甚麼吧~",
                inputValue: "<?php echo $bio; ?>",
                confirmButtonText: "送出",
                cancelButtonText: "取消",
                showCancelButton: true,
            })
            if (bio) {
                document.getElementById("bio").value = bio;
                document.getElementById("form1").submit();
            }
        })();
    }
</script>