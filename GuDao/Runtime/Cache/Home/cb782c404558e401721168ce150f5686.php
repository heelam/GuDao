<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<title></title>
<script src="/GuDao/Public/js/common/jquery-3.2.1.js" type="text/javascript" charset="utf-8"></script>
<script src="/GuDao/Public/js/common/md5.js" type="text/javascript" charset="utf-8"></script>
</head>
<body>
<script>
	$.ajax({
		url: "/GuDao/index.php/Home/Index/doRegister",
		type: "POST",
		dataType: "json",
		data: {
			"email": "ng.winglam@qq.com",
			"code": 1234,
			"password": md5("wuyinglin123"),
			"autoLogin": true
		},
		success: function(result) {
			console.log(result);
		}
	});
</script>
</body>
</html>