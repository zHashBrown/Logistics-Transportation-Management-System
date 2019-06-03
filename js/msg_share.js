function share(i) {
	if (i == 1) {
		$.cookie('user', $("#telephone").val(), {
			expires: 1,
			path: '/'
		});
		alert("用户" + $.cookie('user') + "登陆成功");
	}
	if (i == 2) {
		$("#number").val($.cookie('user'));
	}
}