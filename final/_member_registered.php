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
				<h3>SpaceAdvisor註冊</h3>
				<div class="meberInput">
					<i></i><input type="text" placeholder="暱稱">
					<i></i><input type="email" placeholder="信箱">
					<i></i><input type="password" placeholder="密碼 (由英文與數字組成8-16字)">
					<i></i><input type="password" placeholder="確認密碼">
				</div>
				<div class="forget_password">
					<div class="col">
						<span class="assess">
							<input type="checkbox" id="d1">
							<label for="d1">
								<p> 我已經詳細閱讀<a href="#">隱私權政策</a>並接受商業<a href="#">使用條款</a>，如SpaceAdvisor網站所聲明</p>
							</label>
						</span>
	               </div>
				</div>
				<div class="meberBtn">
					<a href="member_success.php" class="rebBtn">註冊</a>
				</div>
				<div class="meberyet">已經有帳號了？
					<a href="member_sign.php">立即登入</a></br>
					<a href="member_nomail.php">沒有收到註冊信？</a>
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