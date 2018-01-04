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
		<div class="meberContent">
			<div class="meberDetail">
				<div class="meberlogo"><img src="dist/images/meber/logo.jpg"></div>
				<h3>SpaceAdvisor帳號會員忘記密碼</h3>
				<p>請輸入您當初加入會員時，所註冊的「信箱帳號」系統會自動將密碼寄到您的信箱中。</p>
				<div class="meberInput">
					<input type="text">
					<div class="meberCode">
						<input type="text">
						<a href="javascript:;"><img src="dist/images/meber/code.jpg"></a>
					</div>
				</div>
				<div class="meberBtn">
					<a href="member_email.php" class="rebBtn">密碼查詢</a>
					<span class="or">或是</span>
					<a href="#" traget="_blank" class="fbBtn"><i></i>使用Facebook登入</a>
				</div>
				<div class="meberyet">還不是會員嗎？<a href="member_registered.php">立即註冊新帳號</a></div>
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