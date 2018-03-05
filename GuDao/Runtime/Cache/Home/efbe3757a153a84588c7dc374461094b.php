<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<title></title>
<link rel="stylesheet" type="text/css" href="/GuDao/Public/css/common/bootstrap.css">
<link rel="stylesheet" type="text/css" href="/GuDao/Public/css/common/common.css">
<link rel="stylesheet" type="text/css" href="/GuDao/Public/css/common/frame.css">
<script type="text/javascript" src="/GuDao/Public/js/common/jquery-3.2.1.js"></script>
<script type="text/javascript" src="/GuDao/Public/js/common/bootstrap.js"></script>
<script type="text/javascript" src="/GuDao/Public/js/common/vue.js"></script>
</head>
<body>

<div id="gudao">	
	<!-- 导航条 -->
	<navbar></navbar>

	<!-- 内容 -->
	<div class="container content">
		<div>
			<ul class="tablist nav nav-tabs" role="tablist">
				<li role="presentation"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Home</a></li>
				<li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Profile</a></li>
				<li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Messages</a></li>
				<li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Settings</a></li>
			</ul>

			<div class="tab-content">
				<div role="tabpanel" class="tab-pane" id="home">.1..</div>
				<div role="tabpanel" class="tab-pane" id="profile">.2..</div>
				<div role="tabpanel" class="tab-pane" id="messages">.3..</div>
				<div role="tabpanel" class="tab-pane" id="settings">.4..</div>
			</div>
		</div>
	</div>

	<!-- 底部 -->
	<back-to-top></back-to-top>
	<copyright></copyright>
</div>


<script type="text/javascript" src="/GuDao/Public/js/common/common.js"></script>
<script type="text/javascript" src="/GuDao/Public/js/common/component.js"></script>
<script type="text/javascript" src="/GuDao/Public/js/common/frame.js"></script>

<script>
new Vue({
	el: '#gudao',
	components: {
		"navbar": navbar,
		"back-to-top": backToTop,
		"copyright": copyright
	}
});
$(function() {
	var id = location.search.substr(1).split("=")[1];
	$.ajax({
		url: "/GuDao/index.php/Home/Show/getShowByID",
		// type: "POST",
		type: "GET",
		dataType: "json",
		data: {
			// "target": 1,
			"id": id,
			// "user_id": 4,
			// "show_id": 2,
			// "time": "2017-12-22"
		},
		success: function(result) {
			console.log(result);
		}
	});


	var tabIndex = ["#home", "#profile", "#messages", "#settings"].indexOf(location.hash);
	$(".tablist li:eq(" + tabIndex +")").addClass("active");
	$(".tab-content div:eq(" + tabIndex +")").addClass("active");
	$('.tablist a').click(function () {
		location.href = location.toString().split("#")[0] + $(this).attr("href");
	})

});
</script>

</body>
</html>