function submit_driver() {
	var str1 = hex_md5($("input[name='Password']").val());
	$("input[name='Password']").val(str1);
	$.ajax({
		async: false,
		url: "http://localhost:8081/submit_driver_msg.php",
		data: $("#subform_driver").serialize(),
		type: "post",
		success: function(result) {
			alert('修改成功!');
			show();
		},
		error: function(result) {
			alert('错误，服务器未连接！');
		}
	});
}

function show() {
	$.ajax({
		async: false,
		url: "http://localhost:8081/msg_driver.php",
		data: $("#subform_driver").serialize(),
		type: "post",
		dataType: "json",
		success: function(result) {
			$("#Password").val(result[0].Password);
			$("#Name").val(result[0].Name);
			var s = document.getElementById("CarType");
			var ops = s.options;
			for (var j = 0; j < ops.length; j++) {
				var tempValue = ops[j].value;
				if (tempValue == result[0].CarType)
					ops[j].selected = true;
			}
			$("#Carnumber").val(result[0].Carnumber);
			var s = document.getElementById("TransportType");
			var ops = s.options;
			for (var j = 0; j < ops.length; j++) {
				var tempValue = ops[j].value;
				if (tempValue == result[0].TransportType)
					ops[j].selected = true;
			}
			$("#Account").val(result[0].Account);
		},
		error: function(result) {
			alert('错误，服务器未连接！');
		}
	});
}
