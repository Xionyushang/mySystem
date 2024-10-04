<div class="main-content">
    <div class="login-container">
        <h2>歡迎</h2>
        <form action="" method="post" id="form1" target="_self" onsubmit=" return chick_login();">
            <input type="hidden" name="op" id="op" value="verify">
            <div class="form-group">
                <input type="text" placeholder="電子信箱" name="email" id="email" value="" />&nbsp;
                <input type="password" placeholder="密碼" name="user_pwd" id="user_pwd" value="" minlength="8" maxlength="8">&nbsp;
                <input type="submit" class="btn" id="login" value="登入">&nbsp;
                <div class="custom-line"></div>&nbsp;
                <input type="button" class="btn" id="btn_add" onclick="go_add()" value="註冊">
            </div>
        </form>
    </div>
</div>