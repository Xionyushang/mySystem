<?php
foreach ($db['data'] as $row) {
    extract($row);
}

$button = empty($id) ? "" : "<button onclick=\"go_delete($id)\">刪除</button>";

echo $button;
?>

<form action="" method="post" id="form1" target="_self">
    <input name="id" type="hidden" id="id" value="<?php echo $id; ?>" />
    <input name="op" type="hidden" id="op" value="<?php echo $op; ?>" />
    <table>
        <tr>
            <td width="15%" class="title_right">頁籤名稱:</td>
            <td><input name="mark_name" type="text" id="mark_name" value="<?php echo $mark_name; ?>" /></td>
        </tr>
        <tr>
            <td width="15%" class="title_right">排序:</td>
            <td><input name="sort" type="text" id="sort" value="<?php echo $sort; ?>" /></td>
        </tr>
        <tr>
            <td width="15%" class="title_right">目的地連結:</td>
            <td><input name="url" type="text" id="url" value="<?php echo $url; ?>" /></td>
        </tr>
        <tr>
            <td width="15%" class="title_right">檔名:</td>
            <td><input name="img" type="text" id="img" value="<?php echo $img; ?>" /></td>
        </tr>
        <tr>
            <td width="15%" class="title_right">分頁開啟方式:</td>
            <td>
                <select name="target" id="target">
                    <option></option>
                    <?php $html->select_options($targets, $target) ?>
                </select>
            </td>
        </tr>
        <tr>
            <td><input type="submit" value="儲存" /></td>
        </tr>
    </table>
</form>