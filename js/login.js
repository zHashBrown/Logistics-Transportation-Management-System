var e = 1;

function login() {
	var str1 = hex_md5($("input[name='password']").val());
	$("input[name='password']").val(str1);
	if (!flag) {
		alert("请选择用户类型！");
		return;
	}
	exist();
	if (e == 0)
		return false;
	else
		check();
}

function exist() {
	$.ajax({
		type: "post",
		async: false,
		data: $("#subform").serialize(),
		url: "http://localhost:8081/exist.php",
		success: function(result) {
			if (0 == result) {
				alert("用户不存在");
				e = 0;
			}
		}
	});
}

function check() {
	$.ajax({
		type: "post",
		async: false,
		data: $("#subform").serialize(),
		url: "http://localhost:8081/login.php",
		success: function(result) {
			if (0 == result) {
				alert("密码错误");
			} else {
				share(1);
				jump();
				window.close();
			}
		}
	});

}

function jump() {
	if (flag == 2)
		window.open('Driver_main.html');
	else if (flag == 1)
		window.open('Owner_main.html');
	else if (flag == 3)
		window.open('Admin_main.html');
}
