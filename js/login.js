$(document).ready(function() {
	$("#submit_btn").bind('click', login);
});


function check_account_name(name) {
	if (name == "") {
		alert(" 您还没有输入帐号！");
		return false;
	} else {
		return true;
	}
}
function check_account_key(key) {
	if (key == "") {
		alert(" 您还没有输入密码！");
		return false;
	} else {
		return true;
	}
}
function login() {
	var name = $("#account_name").val();
	var pwd = $("#account_key").val();

	if (!check_account_name(name)) {
		// document.getElementById("error_account").style.display = "block";
		return false;
	} else if (!check_account_key(pwd)) {
		// document.getElementById("error_key").style.display = "block";
		return false;
	} else {
		console.log("success");
		return true;
	}
}