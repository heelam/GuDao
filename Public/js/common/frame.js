$(function() {
	$(document).ajaxStart(function() {
		setLoading();
	}).ajaxStop(function() {
		removeLoading();
	});


	// 检查登录状态
	sessionStorage.setItem("userID", 1);
	if(sessionStorage.getItem("userID")) {
		$(".didnotLogin").hide();
	} else {
		$(".didLogin").hide();
	}


	// 导航栏avtive状态
	var pathname = location.pathname;
	var model = pathname.split("/")[2];
	if(model == "Notice") {
		$("ul.menu li:eq(1)").addClass("active");
	} else if(model == "Show") {
		$("ul.menu li:eq(2)").addClass("active");
	} else if(model == "Band") {
		$("ul.menu li:eq(3)").addClass("active");
	} else {
		var page = pathname.split("/")[3];
		if(page == "home") {
			$("ul.menu li:eq(0)").addClass("active");
		} else if(page == "login") {
			$(".didnotLogin a:eq(0)").addClass("active");
		} else if(page == "register") {
			$(".didnotLogin a:eq(1)").addClass("active");
		}
	}


	// 搜索按钮
	$(".search-box button").click(function() {
		search();
	});
	$(document).keydown(function(e) {
		if(e.keyCode == 13) {
			e.preventDefault();
			search();
		}
	});
	function search() {
		if($(".search-box input").val()) {
			location.href = "../../GuDao/Index/search";
		} else {
			setAlertBox({
				className: "text",
				close: true,
				title: "孤岛提示",
				message: "请输入搜索内容"
			});
		}
	}


	// 退出登录
	$(".logout").click(function(e) {
		e.preventDefault();
		setAlertBox({
			className: "text",
			close: true,
			title: "孤岛提示",
			message: "您确定要退出登录吗？",
			buttons: [{
				value: "确定",
				callback: function() {
					sessionStorage.removeItem("userID");
					location.reload();
				}
			}, {
				value: "取消"
			}]
		});
	});


	// 返回顶部
	$(document).scroll(function() {
		if($(document).scrollTop() > 150) {
			$(".back-to-top").removeClass("hide-back-to-top").addClass("show-back-to-top");
		} else if($(".back-to-top").hasClass("show-back-to-top")) {
			$(".back-to-top").removeClass("show-back-to-top").addClass("hide-back-to-top");
		}
	});
	$(".back-to-top").click(function() {
		$(document).scrollTop(0);
	});


	// 查看原图
	$("img.thumbnail").click(function() {
		setAlertBox({
			className: "image",
			close: true,
			maskClose: true,
			message: "<img src=" + this.src +">",
			buttons: []
		});
		if($(".alert-box.image .message").height() > $(".alert-box.image .box").height()) {
			$(".alert-box.image .message").height($(".alert-box.image .box").height() - 72);
		}
	});
});