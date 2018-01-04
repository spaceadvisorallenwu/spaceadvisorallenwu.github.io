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
		<div class="meberContent meber_registered">
			<!-- 錯誤時請加上 warning_error -->
			<div class="meberDetail warning_error">
				<div class="meberlogo"><img src="dist/images/meber/logo.jpg"></div>
				<h3>註冊成功</h3>
				<div class="success">
					恭喜你註冊成功，成為SpaceAdvisor的會員！
					請快點選下方按鈕登入網站，已確認帳號和密碼。
				</div>
				<div class="meberBtn">
					<a href="index.php" class="rebBtn">登入</a>
				</div>
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