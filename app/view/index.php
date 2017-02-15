<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Kanrisha - HTML5后台</title>
	<!-- The Fonts -->
	<link href="./app/profile/style/oswald.css" rel="stylesheet">
	<!-- The Main CSS File -->
	<link rel="stylesheet" href="./app/profile/style/style.css">
	<!-- jQuery -->
	<script src="./app/profile/js/jQuery/jquery-1.7.2.min.js"></script>
	<!-- Flot -->
	<script src="./app/profile/js/Flot/jquery.flot.js"></script>
	<script src="./app/profile/js/Flot/jquery.flot.resize.js"></script>
	<script src="./app/profile/js/Flot/jquery.flot.pie.js"></script>
	<!-- DataTables -->
	<script src="./app/profile/js/DataTables/jquery.dataTables.min.js"></script>
	<!-- ColResizable -->
	<script src="./app/profile/js/ColResizable/colResizable-1.3.js"></script>
	<!-- jQuryUI -->
	<script src="./app/profile/js/jQueryUI/jquery-ui-1.8.21.min.js"></script>
	<!-- Uniform -->
	<script src="./app/profile/js/Uniform/jquery.uniform.js"></script>
	<!-- Tipsy -->
	<script src="./app/profile/js/Tipsy/jquery.tipsy.js"></script>
	<!-- Elastic -->
	<script src="./app/profile/js/Elastic/jquery.elastic.js"></script>
	<!-- ColorPicker -->
	<script src="./app/profile/js/ColorPicker/colorpicker.js"></script>
	<!-- SuperTextarea -->
	<script src="./app/profile/js/SuperTextarea/jquery.supertextarea.min.js"></script>
	<!-- UISpinner -->
	<script src="./app/profile/js/UISpinner/ui.spinner.js"></script>
	<!-- MaskedInput -->
	<script src="./app/profile/js/MaskedInput/jquery.maskedinput-1.3.js"></script>
	<!-- ClEditor -->
	<script src="./app/profile/js/ClEditor/jquery.cleditor.js"></script>
	<!-- Full Calendar -->
	<script src="./app/profile/js/FullCalendar/fullcalendar.js"></script>
	<!-- Color Box -->
	<script src="./app/profile/js/ColorBox/jquery.colorbox.js"></script>
	<!-- Kanrisha Script -->
	<script src="./app/profile/js/kanrisha.js"></script>
</head>
<body>
    这是<?php echo $test; ?>，呵呵
	<!-- Change Pattern -->
	<div class="changePattern">
		<span id="pattern1"></span>
		<span id="pattern2"></span>
		<span id="pattern3"></span>
		<span id="pattern4"></span>
		<span id="pattern5"></span>
		<span id="pattern6"></span>
	</div>
	<!-- Top Panel -->
	<div class="top_panel">
		<div class="wrapper">
			<div class="user">
				<img src="./app/profile/image/user_avatar.png" alt="user_avatar" class="user_avatar">
				<span class="label"><a href="#">登录</a></span>
			</div>
		</div>
	</div>

	<div class="wrapper contents_wrapper">
		
		<div class="login">
			<div class="widget_header">
				<h4 class="widget_header_title wwIcon i_16_login">登录</h4>
			</div>
			<div class="widget_contents lgNoPadding">
				<form action="app/view/index.html">
				<div class="line_grid">
					<div class="g_2 g_2M"><span class="label">账号：</span></div>
					<div class="g_10 g_10M">
						<input class="simple_field tooltip" title="Your Username" type="text" placeholder="Username"></div>
					<div class="clear"></div>
				</div>
				<div class="line_grid">
					<div class="g_2 g_2M"><span class="label">密码：</span></div>
					<div class="g_10 g_10M">
						<input class="simple_field tooltip" title="Your Password" type="password" value="password">
					</div>
					<div class="clear"></div>
				</div>
				<div class="line_grid">
					<div class="g_6"><input class="submitIt simple_buttons" value="登录" type="submit">
					</div>
					<div class="clear"></div>
				</div>
				</form>
			</div>
		</div>

	</div>
<div style="display:none"><script src='http://v7.cnzz.com/stat.php?id=155540&web_id=155540' language='JavaScript' charset='gb2312'></script></div>
</body>
</html>