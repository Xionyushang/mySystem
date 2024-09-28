<?php
foreach ($db['data'] as $row) {
    extract($row);
}
foreach ($db_user_info['data'] as $row) {
    extract($row);
}
?>

<form action="" method="post" id="form1" target="_selg">
    <input name="id" type="hidden" id="id" value="<?php echo $id; ?>" />
    <input name="user_id" type="hidden" id="user_id" value="<?php echo $user_id; ?>" />
    <input name="op" type="hidden" id="op" value="<?php echo $op; ?>" />
    <table>
        <tr>
            <td width="15%" class="title_right">名稱:</td>
            <td><input name="user_name" type="text" id="user_name" value="<?php echo $user_name; ?>" /></td>
        </tr>
        <tr>
            <td width="15%" class="title_right">年齡:</td>
            <td><input name="age" type="number" id="age" value="<?php echo $age; ?>"/></td>
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
            <td><textarea name="bio" type="text" id="bio"><?php echo $bio; ?></textarea></td>
            </td>
        </tr>
        <tr>
            <td><input type="submit" value="儲存" /></td>
        </tr>
    </table>
</form>