<?php
foreach ($db['data'] as $row) {
    extract($row);

    $DblClick = "onDblClick=\"go_edit('{$id}');\";";

    $content .= "<tr {$DblClick} >
            <td>{$id}</td>
            <td>{$mark_name}</td>
            <td>{$sort}</td>
            <td>{$href}</td>
            <td>{$img}</td>
            <td>{$targets[$target]}</td>
        </tr>";
}
?>
<button onclick="go_add()">新增</button>
<table width="100%" border="1" cellpadding="1" cellspacing="2">
    <thead>
        <tr>
            <td>id</td>
            <td>頁籤名稱</td>
            <td>排序</td>
            <td>目的地連結</td>
            <td>檔名</td>
            <td>分頁開啟方式</td>
        </tr>
    </thead>
    <tbody>
        <?php echo $content ?>
    </tbody>
    <tfoot>
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
    </tfoot>
</table>