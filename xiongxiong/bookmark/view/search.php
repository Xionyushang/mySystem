<form action="" method="get" name="form_search" target="_self" id="form_search" style='margin:0px;'>
  <table width="100%" border="0" cellpadding="5" cellspacing="0">
    <tr>
      <td width="10%" nowrap><input name="op" type="hidden" id="op" value="" />
        <input name="find_tag" type="hidden" id="find_tag" value="1" />
        頁籤名稱
        <input name="find_mark_name" type="text" id="find_mark_name" value="<?php echo $find_mark_name; ?>" size="7" />
        排序
        <input name="find_sort" type="text" id="find_sort" value="<?php echo $find_sort ?>" size="7" />
      </td>
      <td align="left" nowrap="nowrap">&nbsp;&nbsp;
        <input type="submit" value="搜尋" />
      </td>
    </tr>
  </table>
</form>