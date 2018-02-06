<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<title></title>
<link rel="stylesheet" type="text/css" href="/GuDao/Public/css/common/bootstrap.css">
<link rel="stylesheet" type="text/css" href="/GuDao/Public/css/common/common.css">
<script src="/GuDao/Public/js/common/jquery-3.2.1.js" type="text/javascript" charset="utf-8"></script>
<script src="/GuDao/Public/js/common/bootstrap.js" type="text/javascript" charset="utf-8"></script>
</head>
<body>
	<nav class="navbar navbar-fixed-top">
		<div class="container">
			<div class="row">
				<div class="col-sm-3 logo">孤岛</div>
				<div class="col-sm-1 menu active"><a href="">首页</a></div>
				<div class="col-sm-1 menu"><a href="../Notice">通知</a></div>
				<div class="col-sm-1 menu"><a href="../Show">演出</a></div>
				<div class="col-sm-1 menu"><a href="../Band">乐队</a></div>
				<div class="col-sm-3 search">
					<form action="">
						<input type="text" name="search" placeholder="搜索...">
						<button><span class="glyphicon glyphicon-search"></span></button>
					</form>
				</div>
				<div class="col-sm-2 didnotLogin"><a href="login">登录</a>&ensp;|&ensp;<a href="register">注册</a></div>
				<div class="col-sm-2 didLogin">
					<img src="/GuDao/Public/img/user/headImg.jpg">
					<div class="userList">
						<ul>
							<li class="triangle">
								<span class="triangleBorder"></span>
								<span class="triangleColor"></span>
							</li>
							<li class="username">NgWingLam</li>
							<li><a href="../User">个人中心<span></span></a></li>
							<li><a href="../User">我的消息<span class="spot"></span></a></li>
							<li><a href="">退出登录<span></span></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</nav>

	<div class="container" id="home">
			<p>start</p>
			<p>a</p>
			<p>a</p>
			<p>a</p>
			<p>a</p>
			<p>a</p>
			<p>a</p>
			<p>a</p>
			<p>a</p>
			<p>a</p>
			<p>a</p>
			<p>a</p>
			<p>a</p>
			<p>a</p>
			<p>a</p>
			<p>a</p>
			<p>a</p>
			<p>a</p>
			<p>a</p>
			<p>a</p>
			<p>a</p>
			<p>a</p>
			<p>a</p>
			<p>a</p>
			<p>a</p>
			<p>a</p>
			<p>a</p>
			<p>a</p>
			<p>a</p>
			<p>a</p>
			<p>a</p>
			<p>a</p>
			<p>a</p>
			<p>a</p>
			<p>a</p>
			<p>a</p>
			<p>a</p>
			<p>a</p>
			<p>a</p>
			<p>a</p>
			<p>a</p>
			<p>a</p>
			<p>a</p>
			<p>a</p>
			<p>a</p>
			<p>a</p>
			<p>a</p>
			<p>a</p>
			<p>a</p>
			<p>a</p>
			<p>a</p>
			<p>a</p>
			<p>a</p>
			<p>a</p>
			<p>a</p>
			<p>a</p>
			<p>a</p>
			<p>a</p>
			<p>a</p>
			<p>a</p>
			<p>a</p>
			<p>a</p>
			<p>a</p>
			<p>a</p>
			<p>a</p>
			<p>a</p>
			<p>a</p>
			<p>a</p>
			<p>a</p>
			<p>a</p>
			<p>a</p>
			<p>a</p>
			<p>a</p>
			<p>a</p>
			<p>a</p>
			<p>a</p>
			<p>end</p>
	</div>

	<a href="#home" class="backToTop"><span class="glyphicon glyphicon-send"></span></a>
	<footer>Copyright&ensp;&copy;&ensp;2017-2018&ensp;孤岛音乐平台&ensp;All&ensp;Rights&ensp;Reserved.</footer>


	

<script>
	// $.ajax({
	// 	url: "/GuDao/index.php/Home/Index/getShowCalendar",
	// 	type: "POST",
	// 	dataType: "json",
	// 	data: {
	// 		"month": "2017-11",
	// 	},
	// 	success: function(result) {
	// 		console.log(result);
	// 	}
	// });


	$(function() {
		//sessionStorage.setItem("userID", 1);
		if(sessionStorage.getItem("userID")) {
			$(".didnotLogin").hide();
		} else {
			$(".didLogin").hide();
		}

		$(".didLogin img").mouseover(function() {
			$(".didLogin .userList").show();
		});
		$(".didLogin img").click(function(e) {
			$(".didLogin .userList").show();
			$(document).one("click", function() {
				$(".didLogin .userList").hide();
			});
			e.stopPropagation();
		});
		$(".didLogin .userList").mouseover(function() {
			$(".didLogin .userList").show();
		});
		$(".didLogin .userList").mouseout(function() {
			$(".didLogin .userList").hide();
		});
		$(".didLogin .userList").click(function(e) {
			e.stopPropagation();
		});

		$(document).scroll(function() {
			if($(document).scrollTop() > 150) {
				$(".backToTop").removeClass("hideBackToTop").addClass("showBackToTop");
			} else if($(".backToTop").hasClass("showBackToTop")) {
				$(".backToTop").removeClass("showBackToTop").addClass("hideBackToTop");
			}
		});
	});
	
</script>
</body>
</html>