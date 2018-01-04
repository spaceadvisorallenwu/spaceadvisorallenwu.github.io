<?php include_once 'quote/headleader.php'; ?>
<title>SpaceAdvisor</title>
<?php include_once 'quote/head.php'; ?>
<!-- dan -->
<link href="dist/css/main_dan.css" rel="stylesheet" type="text/css" media=""/>
<!-- 套件 -->
<link rel="stylesheet" type="text/css" href="dist/css/slick.css">
<link rel="stylesheet" type="text/css" href="dist/css/slick-theme.css">
<!-- dan end-->
</head>
<body>
<div id="wrapper" class="meberBox">
	<?php include_once 'quote/header_nosing.php'; ?>
<!--main-->
	<main>
		<div class="meberContent meber_nomail">
			<!-- 錯誤時請加上 warning_error -->
			<div class="meberDetail warning_error">
				<div class="meberlogo"><img src="dist/images/meber/logo.jpg"></div>
				<h3>沒有收到註冊信？</h3>
				<div class="meberInput">
					<i></i><input type="email" placeholder="信箱">
				</div>

				<div class="meberBtn">
					<a href="member_email.php" class="rebBtn">重新寄送註冊信</a>
				</div>
				<div class="meberyet">已經有帳號了？<a href="member_sign.php">立即登入</a></div>
			</div>
		</div>
		<!-- top -->
		<a href="javascript:;" class="gotop"></a>
	</main><!--/main-->
	<?php include_once 'quote/footer.php'; ?>
</div><!-- /#wrapper -->

<!-- js -->
<?php include_once 'quote/scriptfoot.php'; ?>
<script type="text/javascript" src="dist/js/dan.js"></script>
<script type="text/javascript" src="dist/js/slick.js"></script>
<script type="text/javascript" src="dist/js/imgLiquid.js"></script>
<script type="text/javascript" src="dist/js/laydate/laydate.js"></script>


</body>
</html>