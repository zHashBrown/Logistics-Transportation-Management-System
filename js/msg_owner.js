function submit_owner() {

	$.ajax({
		async: false,
		url: "http://localhost:8081/submit_owner_msg.php",
		data: $("#subform_owner").serialize(),
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
		url: "http://localhost:8081/msg_owner.php",
		data: $("#subform_owner").serialize(),
		type: "post",
		dataType: "json",
		success: function(result) {
			$("#Password").val(result[0].Password);
			$("#Name").val(result[0].Name);
			$("#Address").val(result[0].Address);
			var s = document.getElementById("Cargo");
			var ops = s.options;
			for (var j = 0; j < ops.length; j++) {
				var tempValue = ops[j].value;
				if (tempValue == result[0].Cargo)
					ops[j].selected = true;
			}
			$("#Account").val(result[0].Account);
			$("#charge").val(0);
		},
		error: function(result) {
			alert('错误，服务器未连接！');
		}
	});
}

function Recharge() {
	if (isNaN($("#charge").val()) || $("#charge").val() <= 0) {
		alert("请输入正确的金额（大于0的数字）");
		$("#charge").val(0);
	} else {
		$.ajax({
			async: false,
			url: "http://localhost:8081/submit_owner_charge.php",
			data: $("#subform_owner").serialize() + '&' + $("#subform_owner_pay").serialize(),
			type: "post",
			dataType: "json",
			success: function(result) {
				alert('充值成功！');
				setTimeout(function() {
					$("#myModal").modal("hide")
				}, 10);
				show();
			},
			error: function(result) {
				alert('错误，服务器未连接！');
				show();
			}
		});
	}
}
