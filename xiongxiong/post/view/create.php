<style>
    .tb1 {
        margin: 0 auto;
        border-collapse: collapse;
    }

    td {
        text-align: center;
    }
</style>
<form action="" method="post" id="form1" target="_self">
    <input name="op" type="hidden" id="op" value="create_save" />
    <input name="user_id" type="hidden" id="user_id" value="<?php echo $user_id ?>" />
    <input name="creat_date" type="hidden" id="creat_date" value="<?php echo $now_date ?>" />
    <input name="creat_time" type="hidden" id="creat_time" value="<?php echo $now_time ?>" />
    <table class="tb1" width="50%">
        <tr>
            <td class="title_right">新增貼文:
                <textarea id="editor1" name="content"><?php echo $content ?></textarea>
            </td>
        </tr>
        <tr>
            <td><input type="submit" value="儲存" /></td>
        </tr>
    </table>
</form>