function email_chick() {
	const nameElement_email = document.getElementById("email");
	const email = nameElement_email.value;
	const reg =
		/^[-A-Za-z0-9_]+[-A-Za-z0-9_.]*[@]{1}[-A-Za-z0-9_]+[-A-Za-z0-9_.]*[.]{1}[A-Za-z]{2,5}$/;
	if (reg.test(email)) {
		return true;
	}
}

function chick_password() {
	const nameElement_user_password = document.getElementById("user_pwd");
	const user_pwd = nameElement_user_password.value;
	const nameElement_check_psw = document.getElementById("check_psw");
	const check_psw = nameElement_check_psw.value;

	if (user_pwd == check_psw) {
		return true;
	}
}

function chick_add() {
	if (email_chick() == true) {
		if (chick_password() == true) {
			Swal.fire({
				title: "註冊成功",
				timer: 10000,
				icon: "success",
			});
			return true;
		} else {
			Swal.fire({
				title: "密碼錯誤",
				icon: "error",
			});
			return false;
		}
	} else {
		Swal.fire({
			title: "信箱格式錯誤",
			icon: "error",
		});
		return false;
	}
}
