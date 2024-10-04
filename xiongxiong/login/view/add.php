<div class="login-container">
    <h2>註冊帳號</h2>
    <form action="" method="post" id="form1" target="_self" onsubmit=" return chick_add();">
        <input type="hidden" name="op" id="op" value="creat_save">
        <input type="hidden" name="creat_date" id="creat_date" value="<?php echo $now_date ?>">
        <div class="form-group">
            <input type="text" placeholder="使用者名稱" name="user_name" id="user_name" value="" maxlength="10" required/>&nbsp;
            <input type="text" placeholder="電子信箱" name="email" id="email" value="" required/>&nbsp;
            <!-- <input type="text" placeholder="帳號" name="user_id" id="user_id" value="" maxlength="10" required/>&nbsp; -->
            <input type="password" placeholder="密碼" name="user_pwd" id="user_pwd" value="" minlength="8" maxlength="8" required/>&nbsp;
            <input type="password" placeholder="確認密碼" name="check_psw" id="check_psw" value="" minlength="8" maxlength="8" required/>&nbsp;
            <select name="gender" id="gender" required>
                <option value="">請選擇性別</option>
                <?php $html->select_options($genders) ?>
            </select>
            <div class="custom-line"></div>&nbsp;
            <input type="submit" class="btn" id="btn_add" value="新增帳號">&nbsp;
        </div>
    </form>
</div>