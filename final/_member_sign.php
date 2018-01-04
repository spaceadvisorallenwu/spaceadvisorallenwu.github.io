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
		<div class="meberContent meber_in">
			<!-- 錯誤時請加上 warning_error -->
			<div class="meberDetail warning_error">
				<div class="meberlogo"><img src="dist/images/meber/logo.jpg"></div>
				<h3>SpaceAdvisor帳號會員登入</h3>
				<div class="error_prompt">重設密碼修改完成</div>
				<div class="meberInput">
					<i></i><input type="text" placeholder="帳號">
					<i></i><input type="password" placeholder="密碼">
				</div>
				<div class="forget_password">
					<a href="member_forget.php">忘記密碼</a> │
					<div class="col">
						<span class="assess">
							<input type="checkbox" id="d1">
							<label for="d1">
								<p>保持登入</p>
							</label>
						</span>
	               </div>
				</div>
				<div class="meberBtn">
					<a href="index.php" class="rebBtn">登入</a>
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