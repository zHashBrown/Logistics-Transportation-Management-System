/*
 * 手机号正则表达式
 */
function isPhoneNo(phone) {
	var pattern = /^1[34578]\d{9}$/;
	return pattern.test(phone);
}
/*
 * 手机号是否被注册
 */
function isReged(phone) {
	f1 = true;
	$.ajax({
		type: "post",
		async: false,
		data: $("#subform").serialize(),
		url: "http://localhost:8081/exist.php",
		success: function(result) {
			if (1 == result) {
				f1 = false;
			}
		}
	});
	return f1;
}

/*
 * 验证手机号
 */
var yzm = "";
for (var i = 0; i < 4; i++)
	yzm += Math.floor(Math.random() * 10);

function checkPhone() {
	if (!flag) {
		alert("请选择用户类型！");
		$('#telephone').val("");
		return;
	}
	if ($.trim($('#telephone').val()).length == 0) {
		$('#telephoneError').html('手机号码没有输入');
		$('#telephone').focus();
		return false;
	} else {
		$('#telephoneError').html('');
		if (isPhoneNo($('#telephone').val()) == false) {
			$('#telephoneError').html('手机号码不正确');
			$('#telephone').focus();
			return false;
		} else {
			$('#telephoneError').html('');
			if (isReged($('#telephone').val()) == false) {
				$('#telephoneError').html('手机号码已被注册');
				$('#telephone').focus();
				return false;
			} else {
				$('#telephoneError').html('号码可用，已发送验证码（' + yzm + '）');
				return true;
			}
		}
	}
}
/*
 * 验证码
 */
function checkYanzheng() {
	if ($.trim($('#yanzhengma').val()).length == 0) {
		$('#yanZhengmaError').html('验证码没有输入');
		$('#yanzhengma').focus();
		return false;
	} else {
		$('#yanZhengmaError').html('');
		var yz = $.trim($('#yanzhengma').val());
		if (yz != yzm) {
			$('#yanZhengmaError').html('验证码不正确');
			$('#yanzhengma').focus();
			return false;
		} else {
			$('#yanZhengmaError').html('');
			$('#yanZhengmaError').html('验证通过');
			return true;
		}
	}
}
/*
 * 验证密码
 */
function checkPassword() {
	if ($.trim($('#password').val()).length == 0) {
		$('#passwordError').html('密码没有输入');
		$('#password').focus();
		return false;
	} else {
		$('#passwordError').html('');
		var rePass = $.trim($('#rePassword').val());
		var pass = $.trim($('#password').val());
		if (rePass.length != 0) {
			if (rePass != pass) {
				$('#rePasswordError').html('两次密码不一致');
				return false;
			} else {
				$('#rePasswordError').html('');
				return true;
			}
		}
	}
}
/*
 * 重复密码
 */
function checkrePassword() {
	var rePass = $.trim($('#rePassword').val());
	if (rePass.length == 0) {
		$('#rePasswordError').html('请确认密码');
		$('#rePassword').focus();
		return false;
	} else {
		$('#rePasswordError').html('');
		var pass = $.trim($('#password').val());
		if (pass.length == 0) {
			$('#rePassword').val('');
			$('#passwordError').html('密码没有输入');
			$('#password').focus();
			return false;
		} else if (rePass != pass) {
			$('#rePasswordError').html('两次密码不一致');
			$('#rePasswordError').focus();
			return false;
		} else {
			$('#rePasswordError').html('');
			return true;
		}
	}
}

/*
 * 注册表单提交时验证
 */
function checkRegister() {
	if (checkPhone() == false) {
		return false;
	} else if (checkPassword() == false) {
		return false;
	} else if (checkrePassword() == false) {
		return false;
	} else if (checkYanzheng() == false) {
		return false;
	} else {
		var str1 = hex_md5($("input[name='password']").val());
		$("input[name='password']").val(str1);
		$.ajax({
			async: false,
			url: "http://localhost:8081/register.php",
			data: $("#subform").serialize(),
			type: "post",
			success: function(result) {
				alert('注册成功!');
				share(1);
				jump();
				window.close();
			},
			error: function(result) {
				alert('错误，服务器未连接！');
				$('#passwordError').html('');
				$('#yanZhengmaError').html('');
				$('#telephoneError').html('');
				$('#rePasswordError').html('');
			}
		});
	}
}

function jump() {
	if (flag == 2)
		window.open('Driver_Information.html');
	else if (flag == 1)
		window.open('Owner_Information.html');
}
