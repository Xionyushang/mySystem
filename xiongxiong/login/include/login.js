function go_add() {
	window.open(location.pathname + "?op=add", "_blank", "");
}

function email_chick() {
	const nameElement_email = document.getElementById("email");
	const email = nameElement_email.value;
	const reg =
		/^[-A-Za-z0-9_]+[-A-Za-z0-9_.]*[@]{1}[-A-Za-z0-9_]+[-A-Za-z0-9_.]*[.]{1}[A-Za-z]{2,5}$/;
	if (reg.test(email)) {
		return true;
	}
}

function chick_login() {
	const nameElement_login_user_id = document.getElementById("email");
	const user_id = nameElement_login_user_id.value;
	const nameElement_login_password = document.getElementById("user_pwd");
	const user_pwd = nameElement_login_password.value;
	if (email_chick() == true) {
		if (user_pwd != "") {
			return true;
		} else {
			Swal.fire({
				title: "請輸入密碼",
				icon: "warning",
			});
			return false;
		}
	} else {
		Swal.fire({
			title: "請輸入正確電子信箱",
			icon: "warning",
		});
		return false;
	}
}
