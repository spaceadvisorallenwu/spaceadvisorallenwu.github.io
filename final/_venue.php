<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="keywords" content=" " />
<meta name="description" content=" ">
<meta name="author" content="SpaceAdvisor">
<meta name="copyright" content="本網頁著作SpaceAdvisor所有">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<link href="dist/images/icon.ico" type="image/x-icon" rel="shortcut icon"/>
<title>SpaceAdvisor</title>
<link href="dist/css/font-awesome.min.css" rel="stylesheet" type="text/css" media=""/>
<link href="dist/css/main.css" rel="stylesheet" type="text/css" media=""/>
<link href="dist/css/banner.css" rel="stylesheet" type="text/css" media=""/>
<link href="dist/css/jquery.mmenu.css" rel="stylesheet" type="text/css" media=""/>
<link href="dist/css/slick.css" rel="stylesheet" type="text/css" media=""/>
<link href="dist/css/slick-theme.css" rel="stylesheet" type="text/css" media=""/>
<link href="dist/css/colorbox.css" rel="stylesheet" type="text/css" media=""/>
<!-- 套件 -->
<link rel="stylesheet" type="text/css" href="dist/css/slick.css">
<link rel="stylesheet" type="text/css" href="dist/css/slick-theme.css">

<link rel="stylesheet" type="text/css" href="dist/js/gl/styles/glDatePicker.darkneon.css">
<link rel="stylesheet" type="text/css" href="dist/js/gl/styles/glDatePicker.default.css">
<link rel="stylesheet" type="text/css" href="dist/js/gl/styles/glDatePicker.flatwhite.css">
<!-- dan -->
<link href="dist/css/main_dan.css" rel="stylesheet" type="text/css" media=""/>
</head>

<body>
<div id="wrapper" class="venueBox">
	<header class="cf">
	<div class="content cf">
		<a href="home.html" class="logo">
			<img src="dist/svg/logo.svg">
		</a>
		<section class="__pc">
			<a href="" class="activity">找活動</a>
			<section class="_notLogin ">
				<div class="login_info">
					<a class="signup" href="signup.html">註冊</a>/<a class="signin" href="signin.html">登入</a>
				</div>
			</section>
			<section class="_isLogin">
				<div class="memberClick">
					<a href="" class="member" style="background-image:url(dist/images/avator.jpg)"></a>
					<div class="memberMenu">
						<ul>
							<li class="mgmt"><a href="javascript:;">會員資料管理</a></li>
							<li class="collect"><a href="javascript:;">收藏清單</a></li>
							<li class="compare"><a href="javascript:;">比較清單<b>2</b></a></li>
							<li class="orders"><a href="javascript:;">訂單管理</a></li>
							<li class="points"><a href="javascript:;">點數管理</a></li>
							<li class="faq"><a href="faq.html">常見問題</a></li>
							<li class="logout"><a href="javascript:;">登出</a></li>
						</ul>
					</div>
				</div>
				<a href="" class="mail"><i class="fa fa-envelope-o" aria-hidden="true"></i>收件夾<b>1</b></a>
				<a href="" class="cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i>購物車(<b>0</b>)</a>
			</section>
			<nav>
				<ul>
					<li class="about_us"><a href="about_us.html">關於我們</a></li>
					<li class="why_spaceadvisor"><a href="why_spaceadvisor.html">平台優勢</a></li>
					<li class="space_signup"><a href="space_signup_readme.html">成為場地主</a></li>
				</ul>
			</nav>
			<select name="select" id="select">
				<option>中文</option>
				<option>English</option>
			</select>
		</section>
		<section class="__mb">
			<a href="#menu" data-ajax="false" class="menu-mobile"><i class="fa fa-bars" aria-hidden="true"></i></a>
			<div class="search">
				<i id="search" class="fa fa-search" aria-hidden="true"></i>
				<div class="search-box"><input type="text" name="textfield" id="textfield" placeholder="請輸入關鍵字" /><a href="javscript:;"><span class="btn btn-c-3 btn-sm">搜尋</span></a></div>
			</div>
		</section>
	</div>
	<section class="__mb">
		<nav id="menu">
			<ul>
				<section class="_notLogin">
					<li class="member">
						<a class="signup" href="signup.html">註冊</a><a class="signin" href="signin.html">登入</a>
					</li>
					<li class="faq"><a href="faq.html">常見問題</a></li>
					<li class="about_us"><a href="about_us.html">關於我們</a></li>
					<li class="why_spaceadvisor"><a href="why_spaceadvisor.html">平台優勢</a></li>
					<li class="space_signup"><a href="space_signup_readme.html">成為場地主</a></li>
					<li class="language">
						<select name="select" id="select">
							<option>中文</option>
							<option>English</option>
						</select>
					</li>
					<li class="activity"><a href="">找活動</a></li>
				</section>
				<section class="_isLogin">
					<li class="member">
						<a href="" class="pic" style="background-image:url(dist/images/avator.jpg)"></a><p>Hyun</p>
						<a href="" class="mail"><i class="fa fa-envelope-o" aria-hidden="true"></i><b>1</b></a>
					</li>
					<li class="mgmt"><a href="javascript:;">會員資料管理</a></li>
					<li class="collect"><a href="javascript:;">收藏清單</a></li>
					<li class="compare"><a href="javascript:;">比較清單 <b>2</b></a></li>
					<li class="orders"><a href="javascript:;">訂單管理</a></li>
					<li class="points"><a href="javascript:;">點數管理</a></li>
					<li class="faq"><a href="faq.html">常見問題</a></li>
					<li class="about_us"><a href="about_us.html">關於我們</a></li>
					<li class="why_spaceadvisor"><a href="why_spaceadvisor.html">平台優勢</a></li>
					<li class="space_signup"><a href="space_signup_readme.html">成為場地主</a></li>
					<li class="logout"><a href="">登出</a></li>
					<li class="language">
						<select name="select" id="select">
							<option>中文</option>
							<option>English</option>
						</select>
					</li>
					<li class="activity"><a href="">找活動</a></li>
				</section>
			</ul>
		</nav>
	</section>
</header>
<!--main-->
	<main>
<!-- breadcrumb -->
		<div class="breadcrumb">
			<ul>
				<li><a href="">首頁</a></li>
				<li><a href="">進階搜尋</a></li>
				<li><a href="">文華東方飯店</a></li>
			</ul>
		</div>
		<!-- banner -->
		<div class="banner">
			<div class="hotelImg">
				<img src="dist/images/themezone/logo.jpg" alt="">
			</div>
			<div class="pc_banner">
				<img src="dist/images/venue/venue.jpg" alt="">
			</div>
			<div class="mo_banner">
				<img src="dist/images/venue/venue_2.jpg" alt="">
			</div>
		</div>
		<div class="vanueContenter">
			<!-- header -->
			<div class="vanueHeader">
				<div class="vanueContent">
					<h3>君悅酒店</h3>
					<div class="assess">
						<i class="fa fa-star light" aria-hidden="true"></i>
						<i class="fa fa-star light" aria-hidden="true"></i>
						<i class="fa fa-star light" aria-hidden="true"></i>
						<i class="fa fa-star light" aria-hidden="true"></i>
						<i class="fa fa-star" aria-hidden="true"></i>
						<span>380評價</span>
					</div>
				</div>

				<div class="region">台北·信義區<i></i></div>

				<div class="hotelPhoto">
					<div class="hotelOveh">
						<a href="#picture_1" class="sing inline cboxElement"><img src="dist/images/venue/vue1.jpg" alt=""></a>
						<a href="#picture_2" class="sing inline cboxElement"><img src="dist/images/venue/vue2.jpg" alt=""></a>
						<a href="#picture_1" class="sing inline cboxElement"><img src="dist/images/venue/vue3.jpg" alt=""></a>
						<a href="#picture_1" class="sing inline cboxElement"><img src="dist/images/venue/vue4.jpg" alt=""></a>
						<a href="#picture_1" class="sing inline cboxElement"><img src="dist/images/venue/vue1.jpg" alt=""></a>
						<a href="#picture_1" class="sing inline cboxElement"><img src="dist/images/venue/vue2.jpg" alt=""></a>
					</div>

				</div>
				<div class="hotelPay">TWD 29,000起</div>
			</div>
			<!-- 開啟圖片 -->
			<div style="display:none">
				<div class="inline_content" id="picture_1">
					<img src="dist/images/information/information_photo.jpg" alt="" title="">
				</div>
				<div class="inline_content" id="picture_2">
					<img src="dist/images/information/information_photo.jpg" alt="" title="">
				</div>
			</div>
			<!-- 地點簡介 -->
			<div class="description">
				<h2>場地簡介</h2>
				<div class="box">
					<div class="add">
						春天飯店(Spring City Resort)座落在台北市的東北部，驅車僅需25分鐘即可到達市中心地帶。 附近的峽谷被沙謀，大屯和七星山，以及一個以溫泉而著名的休眠火山地區環繞著春天飯店喔真(Spring City Resort)座落在台北市的東北部，驅車僅需25分鐘即可到達市中心地帶。 附近的峽谷被沙謀，大屯和七星山。
						</br>
						</br>
						春天飯店(Spring City Resort)座落在台北市的東北部，驅車僅需25分鐘即可到達市中心地帶。 附近的峽谷被沙謀，大屯和七星山，以及一個以溫泉而著名的休眠火山地區環繞著春天飯店喔真(Spring City Resort)座落在台北市的東北部，驅車僅需25分鐘即可到達市中心地帶。 附近的峽谷被沙謀，大屯和七星山。
					</div>
					<a class="more">瞭解更多<i class="fa fa-caret-down" aria-hidden="true"></i></a>
				</div>
			</div>
			<!-- Tag -->
			<div class="vanueTag">
				<div class="vanueBox">
					<ul class="vanueList">
						<li class="active"><a href="javascript:;">會議室列表</a></li>
						<li><a href="javascript:;">查看容納人數表</a></li>
					</ul>
					<div class="vanueContent active">
						<div class="placeBox">
							<!-- photoList -->
							<ul>
								<li>
									<div class="placeList">
										<div class="pic slider">
											<ul>
												<li><a href="" style="background-image: url(dist/images/site_list_pic01.png)"></a></li>
											</ul>
										</div>
										<a href=""><div class="text">
											<p class="title">藝文推廣處-藝文大樓三樓(五)1</p>
											<div class="three">
												<span><i class="fa fa-user" aria-hidden="true"></i>8000人</span>
												<span><i class="fa fa-map-marker" aria-hidden="true"></i>台北市信義區</span>
												<span><i class="fa fa-comment" aria-hidden="true"></i>政府機關</span>
											</div>
											<span class="star"><i class="fa fa-star light" aria-hidden="true"></i><i class="fa fa-star light" aria-hidden="true"></i><i class="fa fa-star light" aria-hidden="true"></i><i class="fa fa-star light" aria-hidden="true"></i><i class="fa fa-star-half-o light" aria-hidden="true"></i><b>150 則評價</b></span>
											<span class="price">TWD <b>30,000</b>/小時</span>
										</div></a>
										<i class="heart"></i>
										<i class="add"></i>
									</div>
								</li>
								<li>
									<div class="placeList">
										<div class="pic slider">
											<ul>
												<li><a href="" style="background-image: url(dist/images/site_list_pic01.png)"></a></li>
											</ul>
										</div>
										<a href=""><div class="text">
											<p class="title">藝文推廣處-藝文大樓三樓(五)1</p>
											<div class="three">
												<span><i class="fa fa-user" aria-hidden="true"></i>8000人</span>
												<span><i class="fa fa-map-marker" aria-hidden="true"></i>台北市信義區</span>
												<span><i class="fa fa-comment" aria-hidden="true"></i>政府機關</span>
											</div>
											<span class="star"><i class="fa fa-star light" aria-hidden="true"></i><i class="fa fa-star light" aria-hidden="true"></i><i class="fa fa-star light" aria-hidden="true"></i><i class="fa fa-star light" aria-hidden="true"></i><i class="fa fa-star-half-o light" aria-hidden="true"></i><b>150 則評價</b></span>
											<span class="price">TWD <b>30,000</b>/小時</span>
										</div></a>
										<i class="heart"></i>
										<i class="add"></i>
									</div>
								</li>
								<li>
									<div class="placeList">
										<div class="pic slider">
											<ul>
												<li><a href="" style="background-image: url(dist/images/site_list_pic01.png)"></a></li>
											</ul>
										</div>
										<a href=""><div class="text">
											<p class="title">藝文推廣處-藝文大樓三樓(五)1</p>
											<div class="three">
												<span><i class="fa fa-user" aria-hidden="true"></i>8000人</span>
												<span><i class="fa fa-map-marker" aria-hidden="true"></i>台北市信義區</span>
												<span><i class="fa fa-comment" aria-hidden="true"></i>政府機關</span>
											</div>
											<span class="star"><i class="fa fa-star light" aria-hidden="true"></i><i class="fa fa-star light" aria-hidden="true"></i><i class="fa fa-star light" aria-hidden="true"></i><i class="fa fa-star light" aria-hidden="true"></i><i class="fa fa-star-half-o light" aria-hidden="true"></i><b>150 則評價</b></span>
											<span class="price">TWD <b>30,000</b>/小時</span>
										</div></a>
										<i class="heart"></i>
										<i class="add"></i>
									</div>
								</li>
								<li>
									<div class="placeList">
										<div class="pic slider">
											<ul>
												<li><a href="" style="background-image: url(dist/images/site_list_pic01.png)"></a></li>
											</ul>
										</div>
										<a href=""><div class="text">
											<p class="title">藝文推廣處-藝文大樓三樓(五)1</p>
											<div class="three">
												<span><i class="fa fa-user" aria-hidden="true"></i>8000人</span>
												<span><i class="fa fa-map-marker" aria-hidden="true"></i>台北市信義區</span>
												<span><i class="fa fa-comment" aria-hidden="true"></i>政府機關</span>
											</div>
											<span class="star"><i class="fa fa-star light" aria-hidden="true"></i><i class="fa fa-star light" aria-hidden="true"></i><i class="fa fa-star light" aria-hidden="true"></i><i class="fa fa-star light" aria-hidden="true"></i><i class="fa fa-star-half-o light" aria-hidden="true"></i><b>150 則評價</b></span>
											<span class="price">TWD <b>30,000</b>/小時</span>
										</div></a>
										<i class="heart"></i>
										<i class="add"></i>
									</div>
								</li>
								<li>
									<div class="placeList">
										<div class="pic slider">
											<ul>
												<li><a href="" style="background-image: url(dist/images/site_list_pic01.png)"></a></li>
											</ul>
										</div>
										<a href=""><div class="text">
											<p class="title">藝文推廣處-藝文大樓三樓(五)1</p>
											<div class="three">
												<span><i class="fa fa-user" aria-hidden="true"></i>8000人</span>
												<span><i class="fa fa-map-marker" aria-hidden="true"></i>台北市信義區</span>
												<span><i class="fa fa-comment" aria-hidden="true"></i>政府機關</span>
											</div>
											<span class="star"><i class="fa fa-star light" aria-hidden="true"></i><i class="fa fa-star light" aria-hidden="true"></i><i class="fa fa-star light" aria-hidden="true"></i><i class="fa fa-star light" aria-hidden="true"></i><i class="fa fa-star-half-o light" aria-hidden="true"></i><b>150 則評價</b></span>
											<span class="price">TWD <b>30,000</b>/小時</span>
										</div></a>
										<i class="heart"></i>
										<i class="add"></i>
									</div>
								</li>
								<li>
									<div class="placeList">
										<div class="pic slider">
											<ul>
												<li><a href="" style="background-image: url(dist/images/site_list_pic01.png)"></a></li>
											</ul>
										</div>
										<a href=""><div class="text">
											<p class="title">藝文推廣處-藝文大樓三樓(五)1</p>
											<div class="three">
												<span><i class="fa fa-user" aria-hidden="true"></i>8000人</span>
												<span><i class="fa fa-map-marker" aria-hidden="true"></i>台北市信義區</span>
												<span><i class="fa fa-comment" aria-hidden="true"></i>政府機關</span>
											</div>
											<span class="star"><i class="fa fa-star light" aria-hidden="true"></i><i class="fa fa-star light" aria-hidden="true"></i><i class="fa fa-star light" aria-hidden="true"></i><i class="fa fa-star light" aria-hidden="true"></i><i class="fa fa-star-half-o light" aria-hidden="true"></i><b>150 則評價</b></span>
											<span class="price">TWD <b>30,000</b>/小時</span>
										</div></a>
										<i class="heart"></i>
										<i class="add"></i>
									</div>
								</li>
							</ul>
						</div>
					</div>
					<div class="vanueContent">
						<div class="tableBox">
							<table>
							  <tr>
							    <td></td>
							  </tr>
							  <tr>
							    <td>
							        <table class="table_title">
							          <tr>
							            <th class="ta_ha1"><span>樓層/廳型</span></th>
							            <th class="ta_ha1"><span>高度(m)</span></th>
							            <th class="ta_ha1"><span>坪數</span></th>
							            <th>
							            	<div class="venImg">
							            		<img src="dist/images/venue/num_1.png" alt="">
							            	</div>
							            	<span>圓桌</br><small>12人/桌</small></span>
							            </th>
							            <th>
							            	<div class="venImg">
							            		<img src="dist/images/venue/num_2.png" alt="">
							            	</div>
							            	<span>自助餐式</br><small>10人/桌</small></span>
							            </th>
							            <th>
							            	<div class="venImg">
							            		<img src="dist/images/venue/num_3.png" alt="">
							            	</div>
							            	<span>教室型</span>
							            </th>
							            <th>
							            	<div class="venImg">
							            		<img src="dist/images/venue/num_4.png" alt="">
							            	</div>
							            	<span>分組型</span>
							            </th>
							            <th>
							            	<div class="venImg">
							            		<img src="dist/images/venue/num_5.png" alt="">
							            	</div>
							            	<span>U字型</span>
							            </th>
							            <th>
							            	<div class="venImg">
							            		<img src="dist/images/venue/num_6.png" alt="">
							            	</div>
							            	<span>雞尾酒式</span>
							            </th>
							            <th>
							            	<div class="venImg">
							            		<img src="dist/images/venue/num_7.png" alt="">
							            	</div>
							            	<span>劇院式</span>
							            </th>
							            <th>
							            	<div class="venImg">
							            		<img src="dist/images/venue/num_8.png" alt="">
							            	</div>
							            	<span>口字型</span>
							            </th>
							            <th>
							            	<div class="venImg">
							            		<img src="dist/images/venue/num_9.png" alt="">
							            	</div>
							            	<span>董事會型</span>
							            </th>
							          </tr>
							        </table>
							    </td>
							  </tr>
							  <!-- tr一個群組 -->
							  <tr>
							    <td class="tableContent">
							    	<div class="tdTitle"><b>1F</b>樓層佈局圖</div>
							        <table class="tableList">
							          <tr>
							            <td class="hall"><a href="#">中華廳</a></td>
							            <td>xx</td>
							            <td>xx</td>
							            <td><a href="#">xx桌</a></td>
							            <td><a href="#">xx桌</a></td>
							            <td><a href="#">xx人</a></td>
							            <td><a href="#">xx人</a></td>
							            <td><a href="#">xx人</a></td>
							            <td><a href="#">xx人</a></td>
							            <td><a href="#">xx人</a></td>
							            <td><a href="#">xx人</a></td>
							            <td><a href="#">xx人</a></td>
							          </tr>
							        </table>
							        <table class="tableList">
							          <tr>
							            <td class="hall"><a href="#">中華廳</a></td>
							            <td>xx</td>
							            <td>xx</td>
							            <td><a href="#">xx桌</a></td>
							            <td><a href="#">xx桌</a></td>
							            <td><a href="#">xx人</a></td>
							            <td><a href="#">xx人</a></td>
							            <td><a href="#">xx人</a></td>
							            <td><a href="#">xx人</a></td>
							            <td><a href="#">xx人</a></td>
							            <td><a href="#">xx人</a></td>
							            <td><a href="#">xx人</a></td>
							          </tr>
							        </table>
							        <table class="tableList">
							          <tr>
							            <td class="hall"><a href="#">中華廳</a></td>
							            <td>xx</td>
							            <td>xx</td>
							            <td><a href="#">xx桌</a></td>
							            <td><a href="#">xx桌</a></td>
							            <td><a href="#">xx人</a></td>
							            <td><a href="#">xx人</a></td>
							            <td><a href="#">xx人</a></td>
							            <td><a href="#">xx人</a></td>
							            <td><a href="#">xx人</a></td>
							            <td><a href="#">xx人</a></td>
							            <td><a href="#">xx人</a></td>
							          </tr>
							        </table>
							        <table class="tableList">
							          <tr>
							            <td class="hall"><a href="#">中華廳</a></td>
							            <td>xx</td>
							            <td>xx</td>
							            <td><a href="#">xx桌</a></td>
							            <td><a href="#">xx桌</a></td>
							            <td><a href="#">xx人</a></td>
							            <td><a href="#">xx人</a></td>
							            <td><a href="#">xx人</a></td>
							            <td><a href="#">xx人</a></td>
							            <td><a href="#">xx人</a></td>
							            <td><a href="#">xx人</a></td>
							            <td><a href="#">xx人</a></td>
							          </tr>
							        </table>
							    </td>
							  </tr>
								<!-- tr一個群組 -->
							  <tr>
							    <td class="tableContent">
							    	<div class="tdTitle"><b>1F</b>樓層佈局圖</div>
							        <table class="tableList">
							          <tr>
							            <td class="hall"><a href="#">中華廳</a></td>
							            <td>xx</td>
							            <td>xx</td>
							            <td><a href="#">xx桌</a></td>
							            <td><a href="#">xx桌</a></td>
							            <td><a href="#">xx人</a></td>
							            <td><a href="#">xx人</a></td>
							            <td><a href="#">xx人</a></td>
							            <td><a href="#">xx人</a></td>
							            <td><a href="#">xx人</a></td>
							            <td><a href="#">xx人</a></td>
							            <td><a href="#">xx人</a></td>
							          </tr>
							        </table>
							        <table class="tableList">
							          <tr>
							            <td class="hall"><a href="#">中華廳</a></td>
							            <td>xx</td>
							            <td>xx</td>
							            <td><a href="#">xx桌</a></td>
							            <td><a href="#">xx桌</a></td>
							            <td><a href="#">xx人</a></td>
							            <td><a href="#">xx人</a></td>
							            <td><a href="#">xx人</a></td>
							            <td><a href="#">xx人</a></td>
							            <td><a href="#">xx人</a></td>
							            <td><a href="#">xx人</a></td>
							            <td><a href="#">xx人</a></td>
							          </tr>
							        </table>
							        <table class="tableList">
							          <tr>
							            <td class="hall"><a href="#">中華廳</a></td>
							            <td>xx</td>
							            <td>xx</td>
							            <td><a href="#">xx桌</a></td>
							            <td><a href="#">xx桌</a></td>
							            <td><a href="#">xx人</a></td>
							            <td><a href="#">xx人</a></td>
							            <td><a href="#">xx人</a></td>
							            <td><a href="#">xx人</a></td>
							            <td><a href="#">xx人</a></td>
							            <td><a href="#">xx人</a></td>
							            <td><a href="#">xx人</a></td>
							          </tr>
							        </table>
							        <table class="tableList">
							          <tr>
							            <td class="hall"><a href="#">中華廳</a></td>
							            <td>xx</td>
							            <td>xx</td>
							            <td><a href="#">xx桌</a></td>
							            <td><a href="#">xx桌</a></td>
							            <td><a href="#">xx人</a></td>
							            <td><a href="#">xx人</a></td>
							            <td><a href="#">xx人</a></td>
							            <td><a href="#">xx人</a></td>
							            <td><a href="#">xx人</a></td>
							            <td><a href="#">xx人</a></td>
							            <td><a href="#">xx人</a></td>
							          </tr>
							        </table>
							    </td>
							  </tr>
								<!-- tr一個群組 -->
							  <tr>
							    <td class="tableContent">
							    	<div class="tdTitle"><b>1F</b>樓層佈局圖</div>
							        <table class="tableList">
							          <tr>
							            <td class="hall"><a href="#">中華廳</a></td>
							            <td>xx</td>
							            <td>xx</td>
							            <td><a href="#">xx桌</a></td>
							            <td><a href="#">xx桌</a></td>
							            <td><a href="#">xx人</a></td>
							            <td><a href="#">xx人</a></td>
							            <td><a href="#">xx人</a></td>
							            <td><a href="#">xx人</a></td>
							            <td><a href="#">xx人</a></td>
							            <td><a href="#">xx人</a></td>
							            <td><a href="#">xx人</a></td>
							          </tr>
							        </table>
							        <table class="tableList">
							          <tr>
							            <td class="hall"><a href="#">中華廳</a></td>
							            <td>xx</td>
							            <td>xx</td>
							            <td><a href="#">xx桌</a></td>
							            <td><a href="#">xx桌</a></td>
							            <td><a href="#">xx人</a></td>
							            <td><a href="#">xx人</a></td>
							            <td><a href="#">xx人</a></td>
							            <td><a href="#">xx人</a></td>
							            <td><a href="#">xx人</a></td>
							            <td><a href="#">xx人</a></td>
							            <td><a href="#">xx人</a></td>
							          </tr>
							        </table>
							        <table class="tableList">
							          <tr>
							            <td class="hall"><a href="#">中華廳</a></td>
							            <td>xx</td>
							            <td>xx</td>
							            <td><a href="#">xx桌</a></td>
							            <td><a href="#">xx桌</a></td>
							            <td><a href="#">xx人</a></td>
							            <td><a href="#">xx人</a></td>
							            <td><a href="#">xx人</a></td>
							            <td><a href="#">xx人</a></td>
							            <td><a href="#">xx人</a></td>
							            <td><a href="#">xx人</a></td>
							            <td><a href="#">xx人</a></td>
							          </tr>
							        </table>
							        <table class="tableList">
							          <tr>
							            <td class="hall"><a href="#">中華廳</a></td>
							            <td>xx</td>
							            <td>xx</td>
							            <td><a href="#">xx桌</a></td>
							            <td><a href="#">xx桌</a></td>
							            <td><a href="#">xx人</a></td>
							            <td><a href="#">xx人</a></td>
							            <td><a href="#">xx人</a></td>
							            <td><a href="#">xx人</a></td>
							            <td><a href="#">xx人</a></td>
							            <td><a href="#">xx人</a></td>
							            <td><a href="#">xx人</a></td>
							          </tr>
							        </table>
							    </td>
							  </tr>
							</table>
						</div>
					</div>
				</div>
			</div>
			<!-- 價格方案 -->
			<div class="pricePlan">
				<h2>價格方案</h2>
				<ul>
					<li>
						<div class="priTitle">
							<span>婚宴方案<img class="svg icon" src="dist/svg/ring.svg"></span>
						</div>
						<div class="priContent">
							<div class="placeBox">
								<!-- photoList -->
								<ul>
									<li>
										<div class="placeList">
											<div class="pic slider">
												<ul>
													<li><a href="" style="background-image: url(dist/images/site_list_pic01.png)"></a></li>
												</ul>
												<i class="ranking2"></i>
											</div>
											<a href=""><div class="text">
												<p class="title">藝文推廣處-藝文大樓三樓(五)1</p>
												<div class="three">
													<span><i class="fa fa-user" aria-hidden="true"></i>8000人</span>
													<span><i class="fa fa-map-marker" aria-hidden="true"></i>台北市信義區</span>
													<span><i class="fa fa-comment" aria-hidden="true"></i>政府機關</span>
												</div>
												<span class="star"><i class="fa fa-star light" aria-hidden="true"></i><i class="fa fa-star light" aria-hidden="true"></i><i class="fa fa-star light" aria-hidden="true"></i><i class="fa fa-star light" aria-hidden="true"></i><i class="fa fa-star-half-o light" aria-hidden="true"></i><b>150 則評價</b></span>
												<span class="price">TWD <b>30,000</b>/小時</span>
											</div></a>
											<i class="heart"></i>
											<i class="add"></i>
										</div>
									</li>
									<li>
										<div class="placeList">
											<div class="pic slider">
												<ul>
													<li><a href="" style="background-image: url(dist/images/site_list_pic01.png)"></a></li>
												</ul>
												<i class="ranking2"></i>
											</div>
											<a href=""><div class="text">
												<p class="title">藝文推廣處-藝文大樓三樓(五)1</p>
												<div class="three">
													<span><i class="fa fa-user" aria-hidden="true"></i>8000人</span>
													<span><i class="fa fa-map-marker" aria-hidden="true"></i>台北市信義區</span>
													<span><i class="fa fa-comment" aria-hidden="true"></i>政府機關</span>
												</div>
												<span class="star"><i class="fa fa-star light" aria-hidden="true"></i><i class="fa fa-star light" aria-hidden="true"></i><i class="fa fa-star light" aria-hidden="true"></i><i class="fa fa-star light" aria-hidden="true"></i><i class="fa fa-star-half-o light" aria-hidden="true"></i><b>150 則評價</b></span>
												<span class="price">TWD <b>30,000</b>/小時</span>
											</div></a>
											<i class="heart"></i>
											<i class="add"></i>
										</div>
									</li>
									<li>
										<div class="placeList">
											<div class="pic slider">
												<ul>
													<li><a href="" style="background-image: url(dist/images/site_list_pic01.png)"></a></li>
												</ul>
												<i class="ranking2"></i>
											</div>
											<a href=""><div class="text">
												<p class="title">藝文推廣處-藝文大樓三樓(五)1</p>
												<div class="three">
													<span><i class="fa fa-user" aria-hidden="true"></i>8000人</span>
													<span><i class="fa fa-map-marker" aria-hidden="true"></i>台北市信義區</span>
													<span><i class="fa fa-comment" aria-hidden="true"></i>政府機關</span>
												</div>
												<span class="star"><i class="fa fa-star light" aria-hidden="true"></i><i class="fa fa-star light" aria-hidden="true"></i><i class="fa fa-star light" aria-hidden="true"></i><i class="fa fa-star light" aria-hidden="true"></i><i class="fa fa-star-half-o light" aria-hidden="true"></i><b>150 則評價</b></span>
												<span class="price">TWD <b>30,000</b>/小時</span>
											</div></a>
											<i class="heart"></i>
											<i class="add"></i>
										</div>
									</li>
									<li>
										<div class="placeList">
											<div class="pic slider">
												<ul>
													<li><a href="" style="background-image: url(dist/images/site_list_pic01.png)"></a></li>
												</ul>
												<i class="ranking2"></i>
											</div>
											<a href=""><div class="text">
												<p class="title">藝文推廣處-藝文大樓三樓(五)1</p>
												<div class="three">
													<span><i class="fa fa-user" aria-hidden="true"></i>8000人</span>
													<span><i class="fa fa-map-marker" aria-hidden="true"></i>台北市信義區</span>
													<span><i class="fa fa-comment" aria-hidden="true"></i>政府機關</span>
												</div>
												<span class="star"><i class="fa fa-star light" aria-hidden="true"></i><i class="fa fa-star light" aria-hidden="true"></i><i class="fa fa-star light" aria-hidden="true"></i><i class="fa fa-star light" aria-hidden="true"></i><i class="fa fa-star-half-o light" aria-hidden="true"></i><b>150 則評價</b></span>
												<span class="price">TWD <b>30,000</b>/小時</span>
											</div></a>
											<i class="heart"></i>
											<i class="add"></i>
										</div>
									</li>
									<li>
										<div class="placeList">
											<div class="pic slider">
												<ul>
													<li><a href="" style="background-image: url(dist/images/site_list_pic01.png)"></a></li>
												</ul>
												<i class="ranking2"></i>
											</div>
											<a href=""><div class="text">
												<p class="title">藝文推廣處-藝文大樓三樓(五)1</p>
												<div class="three">
													<span><i class="fa fa-user" aria-hidden="true"></i>8000人</span>
													<span><i class="fa fa-map-marker" aria-hidden="true"></i>台北市信義區</span>
													<span><i class="fa fa-comment" aria-hidden="true"></i>政府機關</span>
												</div>
												<span class="star"><i class="fa fa-star light" aria-hidden="true"></i><i class="fa fa-star light" aria-hidden="true"></i><i class="fa fa-star light" aria-hidden="true"></i><i class="fa fa-star light" aria-hidden="true"></i><i class="fa fa-star-half-o light" aria-hidden="true"></i><b>150 則評價</b></span>
												<span class="price">TWD <b>30,000</b>/小時</span>
											</div></a>
											<i class="heart"></i>
											<i class="add"></i>
										</div>
									</li>
									<li>
										<div class="placeList">
											<div class="pic slider">
												<ul>
													<li><a href="" style="background-image: url(dist/images/site_list_pic01.png)"></a></li>
												</ul>
												<i class="ranking2"></i>
											</div>
											<a href=""><div class="text">
												<p class="title">藝文推廣處-藝文大樓三樓(五)1</p>
												<div class="three">
													<span><i class="fa fa-user" aria-hidden="true"></i>8000人</span>
													<span><i class="fa fa-map-marker" aria-hidden="true"></i>台北市信義區</span>
													<span><i class="fa fa-comment" aria-hidden="true"></i>政府機關</span>
												</div>
												<span class="star"><i class="fa fa-star light" aria-hidden="true"></i><i class="fa fa-star light" aria-hidden="true"></i><i class="fa fa-star light" aria-hidden="true"></i><i class="fa fa-star light" aria-hidden="true"></i><i class="fa fa-star-half-o light" aria-hidden="true"></i><b>150 則評價</b></span>
												<span class="price">TWD <b>30,000</b>/小時</span>
											</div></a>
											<i class="heart"></i>
											<i class="add"></i>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</li>
					<li>
						<div class="priTitle">
							<span>尾牙春酒方案<img class="svg icon" src="dist/svg/ring.svg"></span>
						</div>
						<div class="priContent">
							<div class="placeBox">
								<!-- photoList -->
								<ul>
									<li>
										<div class="placeList">
											<div class="pic slider">
												<ul>
													<li><a href="" style="background-image: url(dist/images/site_list_pic01.png)"></a></li>
												</ul>
												<i class="ranking3"></i>
											</div>
											<a href=""><div class="text">
												<p class="title">藝文推廣處-藝文大樓三樓(五)1</p>
												<div class="three">
													<span><i class="fa fa-user" aria-hidden="true"></i>8000人</span>
													<span><i class="fa fa-map-marker" aria-hidden="true"></i>台北市信義區</span>
													<span><i class="fa fa-comment" aria-hidden="true"></i>政府機關</span>
												</div>
												<span class="star"><i class="fa fa-star light" aria-hidden="true"></i><i class="fa fa-star light" aria-hidden="true"></i><i class="fa fa-star light" aria-hidden="true"></i><i class="fa fa-star light" aria-hidden="true"></i><i class="fa fa-star-half-o light" aria-hidden="true"></i><b>150 則評價</b></span>
												<span class="price">TWD <b>30,000</b>/小時</span>
											</div></a>
											<i class="heart"></i>
											<i class="add"></i>
										</div>
									</li>
									<li>
										<div class="placeList">
											<div class="pic slider">
												<ul>
													<li><a href="" style="background-image: url(dist/images/site_list_pic01.png)"></a></li>
												</ul>
												<i class="ranking3"></i>
											</div>
											<a href=""><div class="text">
												<p class="title">藝文推廣處-藝文大樓三樓(五)1</p>
												<div class="three">
													<span><i class="fa fa-user" aria-hidden="true"></i>8000人</span>
													<span><i class="fa fa-map-marker" aria-hidden="true"></i>台北市信義區</span>
													<span><i class="fa fa-comment" aria-hidden="true"></i>政府機關</span>
												</div>
												<span class="star"><i class="fa fa-star light" aria-hidden="true"></i><i class="fa fa-star light" aria-hidden="true"></i><i class="fa fa-star light" aria-hidden="true"></i><i class="fa fa-star light" aria-hidden="true"></i><i class="fa fa-star-half-o light" aria-hidden="true"></i><b>150 則評價</b></span>
												<span class="price">TWD <b>30,000</b>/小時</span>
											</div></a>
											<i class="heart"></i>
											<i class="add"></i>
										</div>
									</li>
									<li>
										<div class="placeList">
											<div class="pic slider">
												<ul>
													<li><a href="" style="background-image: url(dist/images/site_list_pic01.png)"></a></li>
												</ul>
												<i class="ranking3"></i>
											</div>
											<a href=""><div class="text">
												<p class="title">藝文推廣處-藝文大樓三樓(五)1</p>
												<div class="three">
													<span><i class="fa fa-user" aria-hidden="true"></i>8000人</span>
													<span><i class="fa fa-map-marker" aria-hidden="true"></i>台北市信義區</span>
													<span><i class="fa fa-comment" aria-hidden="true"></i>政府機關</span>
												</div>
												<span class="star"><i class="fa fa-star light" aria-hidden="true"></i><i class="fa fa-star light" aria-hidden="true"></i><i class="fa fa-star light" aria-hidden="true"></i><i class="fa fa-star light" aria-hidden="true"></i><i class="fa fa-star-half-o light" aria-hidden="true"></i><b>150 則評價</b></span>
												<span class="price">TWD <b>30,000</b>/小時</span>
											</div></a>
											<i class="heart"></i>
											<i class="add"></i>
										</div>
									</li>
									<li>
										<div class="placeList">
											<div class="pic slider">
												<ul>
													<li><a href="" style="background-image: url(dist/images/site_list_pic01.png)"></a></li>
												</ul>
												<i class="ranking3"></i>
											</div>
											<a href=""><div class="text">
												<p class="title">藝文推廣處-藝文大樓三樓(五)1</p>
												<div class="three">
													<span><i class="fa fa-user" aria-hidden="true"></i>8000人</span>
													<span><i class="fa fa-map-marker" aria-hidden="true"></i>台北市信義區</span>
													<span><i class="fa fa-comment" aria-hidden="true"></i>政府機關</span>
												</div>
												<span class="star"><i class="fa fa-star light" aria-hidden="true"></i><i class="fa fa-star light" aria-hidden="true"></i><i class="fa fa-star light" aria-hidden="true"></i><i class="fa fa-star light" aria-hidden="true"></i><i class="fa fa-star-half-o light" aria-hidden="true"></i><b>150 則評價</b></span>
												<span class="price">TWD <b>30,000</b>/小時</span>
											</div></a>
											<i class="heart"></i>
											<i class="add"></i>
										</div>
									</li>
									<li>
										<div class="placeList">
											<div class="pic slider">
												<ul>
													<li><a href="" style="background-image: url(dist/images/site_list_pic01.png)"></a></li>
												</ul>
												<i class="ranking3"></i>
											</div>
											<a href=""><div class="text">
												<p class="title">藝文推廣處-藝文大樓三樓(五)1</p>
												<div class="three">
													<span><i class="fa fa-user" aria-hidden="true"></i>8000人</span>
													<span><i class="fa fa-map-marker" aria-hidden="true"></i>台北市信義區</span>
													<span><i class="fa fa-comment" aria-hidden="true"></i>政府機關</span>
												</div>
												<span class="star"><i class="fa fa-star light" aria-hidden="true"></i><i class="fa fa-star light" aria-hidden="true"></i><i class="fa fa-star light" aria-hidden="true"></i><i class="fa fa-star light" aria-hidden="true"></i><i class="fa fa-star-half-o light" aria-hidden="true"></i><b>150 則評價</b></span>
												<span class="price">TWD <b>30,000</b>/小時</span>
											</div></a>
											<i class="heart"></i>
											<i class="add"></i>
										</div>
									</li>
									<li>
										<div class="placeList">
											<div class="pic slider">
												<ul>
													<li><a href="" style="background-image: url(dist/images/site_list_pic01.png)"></a></li>
												</ul>
												<i class="ranking3"></i>
											</div>
											<a href=""><div class="text">
												<p class="title">藝文推廣處-藝文大樓三樓(五)1</p>
												<div class="three">
													<span><i class="fa fa-user" aria-hidden="true"></i>8000人</span>
													<span><i class="fa fa-map-marker" aria-hidden="true"></i>台北市信義區</span>
													<span><i class="fa fa-comment" aria-hidden="true"></i>政府機關</span>
												</div>
												<span class="star"><i class="fa fa-star light" aria-hidden="true"></i><i class="fa fa-star light" aria-hidden="true"></i><i class="fa fa-star light" aria-hidden="true"></i><i class="fa fa-star light" aria-hidden="true"></i><i class="fa fa-star-half-o light" aria-hidden="true"></i><b>150 則評價</b></span>
												<span class="price">TWD <b>30,000</b>/小時</span>
											</div></a>
											<i class="heart"></i>
											<i class="add"></i>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</li>
					<li>
						<div class="priTitle">
							<span>謝師宴方案<img class="svg icon" src="dist/svg/ring.svg"></span>
						</div>
						<div class="priContent">
							<div class="placeBox">
								<!-- photoList -->
								<ul>
									<li>
										<div class="placeList">
											<div class="pic slider">
												<ul>
													<li><a href="" style="background-image: url(dist/images/site_list_pic01.png)"></a></li>
												</ul>
												<i class="ranking2"></i>
											</div>
											<a href=""><div class="text">
												<p class="title">藝文推廣處-藝文大樓三樓(五)1</p>
												<div class="three">
													<span><i class="fa fa-user" aria-hidden="true"></i>8000人</span>
													<span><i class="fa fa-map-marker" aria-hidden="true"></i>台北市信義區</span>
													<span><i class="fa fa-comment" aria-hidden="true"></i>政府機關</span>
												</div>
												<span class="star"><i class="fa fa-star light" aria-hidden="true"></i><i class="fa fa-star light" aria-hidden="true"></i><i class="fa fa-star light" aria-hidden="true"></i><i class="fa fa-star light" aria-hidden="true"></i><i class="fa fa-star-half-o light" aria-hidden="true"></i><b>150 則評價</b></span>
												<span class="price">TWD <b>30,000</b>/小時</span>
											</div></a>
											<i class="heart"></i>
											<i class="add"></i>
										</div>
									</li>
									<li>
										<div class="placeList">
											<div class="pic slider">
												<ul>
													<li><a href="" style="background-image: url(dist/images/site_list_pic01.png)"></a></li>
												</ul>
												<i class="ranking2"></i>
											</div>
											<a href=""><div class="text">
												<p class="title">藝文推廣處-藝文大樓三樓(五)1</p>
												<div class="three">
													<span><i class="fa fa-user" aria-hidden="true"></i>8000人</span>
													<span><i class="fa fa-map-marker" aria-hidden="true"></i>台北市信義區</span>
													<span><i class="fa fa-comment" aria-hidden="true"></i>政府機關</span>
												</div>
												<span class="star"><i class="fa fa-star light" aria-hidden="true"></i><i class="fa fa-star light" aria-hidden="true"></i><i class="fa fa-star light" aria-hidden="true"></i><i class="fa fa-star light" aria-hidden="true"></i><i class="fa fa-star-half-o light" aria-hidden="true"></i><b>150 則評價</b></span>
												<span class="price">TWD <b>30,000</b>/小時</span>
											</div></a>
											<i class="heart"></i>
											<i class="add"></i>
										</div>
									</li>
									<li>
										<div class="placeList">
											<div class="pic slider">
												<ul>
													<li><a href="" style="background-image: url(dist/images/site_list_pic01.png)"></a></li>
												</ul>
												<i class="ranking2"></i>
											</div>
											<a href=""><div class="text">
												<p class="title">藝文推廣處-藝文大樓三樓(五)1</p>
												<div class="three">
													<span><i class="fa fa-user" aria-hidden="true"></i>8000人</span>
													<span><i class="fa fa-map-marker" aria-hidden="true"></i>台北市信義區</span>
													<span><i class="fa fa-comment" aria-hidden="true"></i>政府機關</span>
												</div>
												<span class="star"><i class="fa fa-star light" aria-hidden="true"></i><i class="fa fa-star light" aria-hidden="true"></i><i class="fa fa-star light" aria-hidden="true"></i><i class="fa fa-star light" aria-hidden="true"></i><i class="fa fa-star-half-o light" aria-hidden="true"></i><b>150 則評價</b></span>
												<span class="price">TWD <b>30,000</b>/小時</span>
											</div></a>
											<i class="heart"></i>
											<i class="add"></i>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</li>
					<li>
						<div class="priTitle">
							<span>歡送會方案<img class="svg icon" src="dist/svg/ring.svg"></span>
						</div>
						<div class="priContent">
							<div class="placeBox">
								<!-- photoList -->
								<ul>
									<li>
										<div class="placeList">
											<div class="pic slider">
												<ul>
													<li><a href="" style="background-image: url(dist/images/site_list_pic01.png)"></a></li>
												</ul>
												<i class="ranking3"></i>
											</div>
											<a href=""><div class="text">
												<p class="title">藝文推廣處-藝文大樓三樓(五)1</p>
												<div class="three">
													<span><i class="fa fa-user" aria-hidden="true"></i>8000人</span>
													<span><i class="fa fa-map-marker" aria-hidden="true"></i>台北市信義區</span>
													<span><i class="fa fa-comment" aria-hidden="true"></i>政府機關</span>
												</div>
												<span class="star"><i class="fa fa-star light" aria-hidden="true"></i><i class="fa fa-star light" aria-hidden="true"></i><i class="fa fa-star light" aria-hidden="true"></i><i class="fa fa-star light" aria-hidden="true"></i><i class="fa fa-star-half-o light" aria-hidden="true"></i><b>150 則評價</b></span>
												<span class="price">TWD <b>30,000</b>/小時</span>
											</div></a>
											<i class="heart"></i>
											<i class="add"></i>
										</div>
									</li>
									<li>
										<div class="placeList">
											<div class="pic slider">
												<ul>
													<li><a href="" style="background-image: url(dist/images/site_list_pic01.png)"></a></li>
												</ul>
												<i class="ranking3"></i>
											</div>
											<a href=""><div class="text">
												<p class="title">藝文推廣處-藝文大樓三樓(五)1</p>
												<div class="three">
													<span><i class="fa fa-user" aria-hidden="true"></i>8000人</span>
													<span><i class="fa fa-map-marker" aria-hidden="true"></i>台北市信義區</span>
													<span><i class="fa fa-comment" aria-hidden="true"></i>政府機關</span>
												</div>
												<span class="star"><i class="fa fa-star light" aria-hidden="true"></i><i class="fa fa-star light" aria-hidden="true"></i><i class="fa fa-star light" aria-hidden="true"></i><i class="fa fa-star light" aria-hidden="true"></i><i class="fa fa-star-half-o light" aria-hidden="true"></i><b>150 則評價</b></span>
												<span class="price">TWD <b>30,000</b>/小時</span>
											</div></a>
											<i class="heart"></i>
											<i class="add"></i>
										</div>
									</li>
									<li>
										<div class="placeList">
											<div class="pic slider">
												<ul>
													<li><a href="" style="background-image: url(dist/images/site_list_pic01.png)"></a></li>
												</ul>
												<i class="ranking3"></i>
											</div>
											<a href=""><div class="text">
												<p class="title">藝文推廣處-藝文大樓三樓(五)1</p>
												<div class="three">
													<span><i class="fa fa-user" aria-hidden="true"></i>8000人</span>
													<span><i class="fa fa-map-marker" aria-hidden="true"></i>台北市信義區</span>
													<span><i class="fa fa-comment" aria-hidden="true"></i>政府機關</span>
												</div>
												<span class="star"><i class="fa fa-star light" aria-hidden="true"></i><i class="fa fa-star light" aria-hidden="true"></i><i class="fa fa-star light" aria-hidden="true"></i><i class="fa fa-star light" aria-hidden="true"></i><i class="fa fa-star-half-o light" aria-hidden="true"></i><b>150 則評價</b></span>
												<span class="price">TWD <b>30,000</b>/小時</span>
											</div></a>
											<i class="heart"></i>
											<i class="add"></i>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</li>
				</ul>
			</div>
			<!-- 場地設施 住宿資訊 交通資訊 住宿資訊-->
			<div class="synthesis">
				<div class="syn_item1">
					<h2>取消條款</h2>
					<div class="box">
						<div class="add">
							<h3>場地:</h3>
							若非保證住房，於入住日的 11天之前取消訂房、更改飯店或更改日期，均收取手續費NT$500，餘額可全額退還。飯店異動後，若有任何價差，須補足價差；已開立住宿券或於入住前的十天內取消訂房、更改飯店或更改日期，一律收取第一日房價的100%，剩餘的金額可全額退還；旺季或展覽全改本公司客服人員。
							</br>
							</br>
							<h3>住宿:</h3>
							若非保證住房，於入住日的 11天之前取消訂房、更改飯店或更改日期，均收取手續費NT$500，餘額可全額退還。飯店異動後，若有任何價差，須補足價差；已開立住宿券或於入住前的十天內取消訂房、更改飯店或更改日期，一律收取第一日房價的100%，剩餘的金額可全額退還；旺季或展覽全改本公司客服人員。
							</br>
							</br>
							的金額可全額退還；旺季或展覽全改本公司客服人員。
						</div>
						<a class="more">瞭解更多<i class="fa fa-caret-down" aria-hidden="true"></i></a>
					</div>
				</div>
				<div class="syn_item2">
					<h2>場地設施</h2>
					<div class="box">
						<div class="add">
							<ul class="bonus">
								<li>
									<i><img src="dist/images/collect/bonus_1.png" alt=""></i>
									<span>投影機與螢幕 </span>
								</li>
								<li>
									<i><img src="dist/images/collect/bonus_1.png" alt=""></i>
									<span>投影機與螢幕 </span>
								</li>
								<li>
									<i><img src="dist/images/collect/bonus_1.png" alt=""></i>
									<span>投影機與螢幕 </span>
								</li>
								<li>
									<i><img src="dist/images/collect/bonus_1.png" alt=""></i>
									<span>投影機與螢幕 </span>
								</li>
								<li>
									<i><img src="dist/images/collect/bonus_2.png" alt=""></i>
									<span>無線麥克風ABCDEFG</span>
								</li>
								<li>
									<i><img src="dist/images/collect/bonus_2.png" alt=""></i>
									<span>無線麥克風ABCDEFG</span>
								</li>
								<li>
									<i><img src="dist/images/collect/bonus_2.png" alt=""></i>
									<span>無線麥克風ABCDEFG</span>
								</li>
								<li>
									<i><img src="dist/images/collect/bonus_2.png" alt=""></i>
									<span>無線麥克風ABCDEFG</span>
								</li>
								<li>
									<i><img src="dist/images/collect/bonus_2.png" alt=""></i>
									<span>無線麥克風ABCDEFG</span>
								</li>
								<li>
									<i><img src="dist/images/collect/bonus_2.png" alt=""></i>
									<span>無線麥克風ABCDEFG</span>
								</li>
								<li>
									<i><img src="dist/images/collect/bonus_2.png" alt=""></i>
									<span>無線麥克風ABCDEFG</span>
								</li>
								<li>
									<i><img src="dist/images/collect/bonus_2.png" alt=""></i>
									<span>無線麥克風ABCDEFG</span>
								</li>
								<li>
									<i><img src="dist/images/collect/bonus_2.png" alt=""></i>
									<span>無線麥克風ABCDEFG</span>
								</li>
								<li>
									<i><img src="dist/images/collect/bonus_2.png" alt=""></i>
									<span>無線麥克風ABCDEFG</span>
								</li>
								<li>
									<i><img src="dist/images/collect/bonus_2.png" alt=""></i>
									<span>無線麥克風ABCDEFG</span>
								</li>
							</ul>
						</div>
						<a class="more">瞭解更多<i class="fa fa-caret-down" aria-hidden="true"></i></a>
					</div>
				</div>
				<div class="syn_item3">
					<h2>餐飲資訊</h2>
					<div class="box">
						春天飯店(Spring City Resort)座落在台北市的春天飯店(Spring City Resort)座落在台北市的東北部，驅車僅需25分鐘即可到達市中心地帶。 附近的峽谷被沙謀，大屯和七星山，以及一個以溫泉而著名的休眠火山地區環繞著。東北部，驅車僅需25分鐘即可到達市中心地帶。 附近的峽谷被沙謀，大屯和七星山，以及一個以溫泉而著名的休眠火山地區環繞著。
					</div>
					<div class="mealBtn">
						<a href="#" class="meal_icon1">查看菜單</a>
						<a href="#" class="meal_icon2">查看酒單</a>
					</div>
				</div>
				<div class="syn_item4">
					<h2>住宿資訊</h2>
					<ul>
						<li>
							<div class="priTitle">
								<span>經濟雙人房 (Economy Double) 12m<sup>2</sup>  一大床 免費WiFi</span>
							</div>
							<div class="priContent">
								<img src="dist/images/venue/syn_1.jpg" alt="">
								<img src="dist/images/venue/syn_2.jpg" alt="">
								<img src="dist/images/venue/syn_3.jpg" alt="">
								<img src="dist/images/venue/syn_4.jpg" alt="">
								<img src="dist/images/venue/syn_1.jpg" alt="">
								<img src="dist/images/venue/syn_2.jpg" alt="">
								<img src="dist/images/venue/syn_3.jpg" alt="">
								<img src="dist/images/venue/syn_4.jpg" alt="">
							</div>
						</li>
						<li>
							<div class="priTitle">
								<span>商務雙人房 (Business Double Room) 18m<sup>2</sup>  兩單人床 免費WiFi </span>
							</div>
							<div class="priContent">
								<img src="dist/images/venue/syn_1.jpg" alt="">
								<img src="dist/images/venue/syn_2.jpg" alt="">
								<img src="dist/images/venue/syn_3.jpg" alt="">
								<img src="dist/images/venue/syn_4.jpg" alt="">
								<img src="dist/images/venue/syn_1.jpg" alt="">
								<img src="dist/images/venue/syn_2.jpg" alt="">
								<img src="dist/images/venue/syn_3.jpg" alt="">
								<img src="dist/images/venue/syn_4.jpg" alt="">
							</div>
						</li>
						<li>
							<div class="priTitle">
								<span>商務雙人房 (Business Double Room) 18m<sup>2</sup>  兩單人床 免費WiFi </span>
							</div>
							<div class="priContent">
								<img src="dist/images/venue/syn_1.jpg" alt="">
								<img src="dist/images/venue/syn_2.jpg" alt="">
								<img src="dist/images/venue/syn_3.jpg" alt="">
								<img src="dist/images/venue/syn_4.jpg" alt="">
								<img src="dist/images/venue/syn_1.jpg" alt="">
								<img src="dist/images/venue/syn_2.jpg" alt="">
								<img src="dist/images/venue/syn_3.jpg" alt="">
								<img src="dist/images/venue/syn_4.jpg" alt="">
							</div>
						</li>
					</ul>
				</div>
			</div>
			<!-- 評論 -->
			<div class="comment content">
				<div class="star">
					<p>15 則評價<i class="fa fa-star light" aria-hidden="true"></i><i class="fa fa-star light" aria-hidden="true"></i><i class="fa fa-star light" aria-hidden="true"></i><i class="fa fa-star light" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i>
					<a class="more mobile">詳細評價<i class="fa fa-caret-down" aria-hidden="true"></i></a>
					</p>
					<ul>
						<li>
							<p>交通便利</p>
							<i class="fa fa-star light" aria-hidden="true"></i><i class="fa fa-star light" aria-hidden="true"></i><i class="fa fa-star light" aria-hidden="true"></i><i class="fa fa-star light" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i>
						</li>
						<li>
							<p>餐飲品質</p>
							<i class="fa fa-star light" aria-hidden="true"></i><i class="fa fa-star light" aria-hidden="true"></i><i class="fa fa-star light" aria-hidden="true"></i><i class="fa fa-star light" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i>
						</li>
						<li>
							<p>硬體設施</p>
							<i class="fa fa-star light" aria-hidden="true"></i><i class="fa fa-star light" aria-hidden="true"></i><i class="fa fa-star light" aria-hidden="true"></i><i class="fa fa-star light" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i>
						</li>
						<li>
							<p>住宿品質</p>
							<i class="fa fa-star light" aria-hidden="true"></i><i class="fa fa-star light" aria-hidden="true"></i><i class="fa fa-star light" aria-hidden="true"></i><i class="fa fa-star light" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i>
						</li>
						<li>
							<p>整體空間</p>
							<i class="fa fa-star light" aria-hidden="true"></i><i class="fa fa-star light" aria-hidden="true"></i><i class="fa fa-star light" aria-hidden="true"></i><i class="fa fa-star light" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i>
						</li>
						<li>
							<p>CP值</p>
							<i class="fa fa-star light" aria-hidden="true"></i><i class="fa fa-star light" aria-hidden="true"></i><i class="fa fa-star light" aria-hidden="true"></i><i class="fa fa-star light" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i>
						</li>
						<li>
							<p>整體服務</p>
							<i class="fa fa-star light" aria-hidden="true"></i><i class="fa fa-star light" aria-hidden="true"></i><i class="fa fa-star light" aria-hidden="true"></i><i class="fa fa-star light" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i>
						</li>
						<li>
							<p>值得推薦</p>
							<i class="fa fa-star light" aria-hidden="true"></i><i class="fa fa-star light" aria-hidden="true"></i><i class="fa fa-star light" aria-hidden="true"></i><i class="fa fa-star light" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i>
						</li>
					</ul>
				</div>
				<div class="comment-list">
					<ul>
						<li>
							<span class="pic"><img src="dist/images/member.jpg" alt="" title=""></span>
							<div class="other">
								<span class="left">
									<p>Hyun</p>
									<time>2017年2月</time>
								</span>
								<span class="star"><i class="fa fa-star light" aria-hidden="true"></i><i class="fa fa-star light" aria-hidden="true"></i><i class="fa fa-star light" aria-hidden="true"></i><i class="fa fa-star light" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></span>
							</div>
							<p class="text">感謝您這段時間，我會借給槌之子空間！一個非常美麗的地方可能是設施，我們能夠花沒有任何不便舒適。我們被教導，如精心如何使用人對老闆很溫柔。我想用的產品，當你有機會。再次，非常感謝你。</p>
						</li>
						<li>
							<span class="pic"></span>
							<div class="other">
								<span class="left">
									<p>Hyun</p>
									<time>2017年2月</time>
								</span>
								<span class="star"><i class="fa fa-star light" aria-hidden="true"></i><i class="fa fa-star light" aria-hidden="true"></i><i class="fa fa-star light" aria-hidden="true"></i><i class="fa fa-star light" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></span>
							</div>
							<p class="text">感謝您這段時間，我會借給槌之子空間！一個非常美麗的地方可能是設施，我們能夠花沒有任何不便舒適。我們被教導，如精心如何使用人對老闆很溫柔。我想用的產品，當你有機會。再次，非常感謝你。</p>
						</li>
						<li>
							<span class="pic"></span>
							<div class="other">
								<span class="left">
									<p>Hyun</p>
									<time>2017年2月</time>
								</span>
								<span class="star"><i class="fa fa-star light" aria-hidden="true"></i><i class="fa fa-star light" aria-hidden="true"></i><i class="fa fa-star light" aria-hidden="true"></i><i class="fa fa-star light" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></span>
							</div>
							<p class="text">感謝您這段時間，我會借給槌之子空間！一個非常美麗的地方可能是設施，我們能夠花沒有任何不便舒適。我們被教導，如精心如何使用人對老闆很溫柔。我想用的產品，當你有機會。再次，非常感謝你。</p>
						</li>
						<li>
							<span class="pic"></span>
							<div class="other">
								<span class="left">
									<p>Hyun</p>
									<time>2017年2月</time>
								</span>
								<span class="star"><i class="fa fa-star light" aria-hidden="true"></i><i class="fa fa-star light" aria-hidden="true"></i><i class="fa fa-star light" aria-hidden="true"></i><i class="fa fa-star light" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></span>
							</div>
							<p class="text">感謝您這段時間，我會借給槌之子空間！一個非常美麗的地方可能是設施，我們能夠花沒有任何不便舒適。我們被教導，如精心如何使用人對老闆很溫柔。我想用的產品，當你有機會。再次，非常感謝你。</p>
						</li>
					</ul>
				</div>
				<div class="pagebox">
	<dl class="page">
		<dt><a href="#" class="no"> < </a></dt>
			<dd><a href="#" class="mark">1</a></dd>
			<dd><a href="#">2</a></dd>
			<dd><a href="#">3</a></dd>
			<dd><a href="#">4</a></dd>
			<dd><a href="#">5</a></dd>
		<dt><a href="#"> > </a></dt>
	</dl>
</div><!-- /pagebox -->
			</div>
			<!-- 位置 -->
			<div class="position">
				<div class="content">
					<h2>交通資訊</h2>
					<div class="box">
						<div class="add">
							<b>位置：</b>10554臺北市八德路三段25號
							</br>
							</br>
							<b>捷運：</b>
							</br>
							緊鄰中正紀念堂、捷運中正紀念堂站3號出口步行一分鐘，羅斯福路與寧波東街口。近古亭、中正紀念堂，有多條路線公捷運中正紀念堂站3號出口步行一分鐘。
							</br>
							<b>公車：</b>
							</br>
							緊鄰中正紀念堂、捷運中正紀念堂站3號出口步行一分鐘，羅斯福路與寧波東街口。近古亭、中正紀念堂，有多條路線公捷運中正紀念堂站3號出口步行一分鐘。
							</br>
							<b>公車：</b>
							</br>
							緊鄰中正紀念堂、捷運中正紀念堂站3號出口步行一分鐘，羅斯福路與寧波東街口。近古亭、中正紀念堂，有多條路線公捷運中正紀念堂站3號出口步行一分鐘。
						</div>
						<a class="more">瞭解更多<i class="fa fa-caret-down" aria-hidden="true"></i></a>
					</div>
					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14455.293863047751!2d121.51987149999998!3d25.07397185!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3442a96a2f4261a1%3A0x64e39f190506b4b3!2z6Ie65YyX5biC5a2U5buf!5e0!3m2!1szh-TW!2stw!4v1510546297500" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
			</div>
		</div>







<!-- top -->
		<a href="javascript:;" class="gotop"></a>
	</main><!--/main-->
	<!-- top -->
<a href="javascript:;" class="gotop"></a>
<footer class="cf search-mobile-hide">
	<div class="top desk">
		<ul>
			<li>
				<p>SpaceAdvisor</p>
				<a href="">關於我們</a>
				<a href="">平台優勢</a>
				<a href="">使用說明</a>
				<a href="">人才招募</a>
			</li>
			<li>
				<p>客服中心</p>
				<a href="">常見問題</a>
				<a href="">聯絡我們</a>
				<a href="">服務政策</a>
				<a href="">隱私權條款</a>
			</li>
			<li>
				<p>活動類型</p>
				<a href="">企業培訓</a>
				<a href="">記者會 發表會</a>
				<a href="">商務宴客</a>
				<a href="">企業聚餐</a>
				<a href="">主題派對</a>
				<a href="">婚禮 春酒 晚會</a>
			</li>
			<li>
				<p>場地類型</p>
				<a href="">星級飯店</a>
				<a href="">藝文場地</a>
				<a href="">會議中心</a>
				<a href="">展覽中心</a>
				<a href="">餐飲空間</a>
				<a href="">公家機構</a>
				<a href="">戶外場地</a>
			</li>
			<li>
				<p>合作夥伴</p>
				<a href="">合作優勢</a>
				<a href="">立即刊登場地</a>
				<a href="">企業合作</a>
				<a href="">經銷商計畫</a>
			</li>
		</ul>
	</div>
	<div class="bottom">
		<ul>
			<li>
				<p>台北市信義區信義路5段7號24F D1 (101大樓)</p>
				<p>© SpaceAdvisor 2017 All Rights Reserved</p>
			</li>
			<li>
				<a href="" target="_blank"><img src="dist/images/icon_fb.png" alt="" title=""></a>
				<a href="" target="_blank"><img src="dist/images/icon_line.png" alt="" title=""></a>
			</li>
		</ul>
	</div>
</footer>
</div><!-- /#wrapper -->

<script type="text/javascript" src="dist/js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="dist/js/main.js"></script>
<script type="text/javascript" src="dist/js/jquery.flexslider.js"></script>
<script type="text/javascript" src="dist/js/jquery.mmenu.min.js"></script>
<script type="text/javascript" src="dist/js/slick.js"></script>
<script type="text/javascript">
//精選場地
$(function(){
	$('.site-box').slick({
		dots: true,
		// infinite: false,
		speed: 300,
		slidesToShow: 3,
		slidesToScroll: 3,
		autoplay: true,
		autoplaySpeed: 50000,
		responsive: [
			{
				breakpoint: 1250,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 2
				}
			},
			{
				breakpoint: 880,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1
				}
			}
		]
	});
});
//熱門情報
$(function(){
	$('.information-box').slick({
		// dots: true,
		// infinite: false,
		speed: 300,
		slidesToShow: 4,
		slidesToScroll: 2,
		responsive: [
			{
				breakpoint: 1250,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 1
				}
			},
			{
				breakpoint: 980,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 1
				}
			},
			{
				breakpoint: 880,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1
				}
			}
		]
	});
});
//精選品牌
$(function(){
	$('.brand-box').slick({
		// dots: true,
		// infinite: false,
		speed: 300,
		slidesToShow: 5,
		slidesToScroll: 5,
		responsive: [
			{
				breakpoint: 980,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 3
				}
			},
			{
				breakpoint: 480,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1
				}
			}
		]
	});
});
</script>
<script type="text/javascript" src="dist/js/svg.js"></script>
<script type="text/javascript" src="dist/js/colorbox.js"></script>
<script type="text/javascript" src="dist/js/jquery.colorbox.js"></script>
<script type="text/javascript" src="dist/js/imgLiquid.js"></script>
<!-- dan java script -->
<script type="text/javascript" src="dist/js/slick.js"></script>
<script type="text/javascript">

	$('.slider-nav .item,.slider-for .item').imgLiquid();
	//價格方案
	$('.pricePlan li').on('click',function(){
		var  price_li = $('.pricePlan li'),
		     price_content =$('.pricePlan .priContent');

		if(! $(this).hasClass('open')){
		   price_li.removeClass('open');
		   $(this).addClass('open');
			 price_content.stop().slideUp(function(){
				$(this).removeAttr('style');
			});
			$(this).children('.priContent').stop().slideDown(300);
		}else{
			price_li.removeClass('open');
			price_content.stop().slideUp(function(){
				$(this).removeAttr('style');
			});
		}
	});

	//住宿資訊
	$('.syn_item4 li').on('click',function(){
		var  price_li = $('.syn_item4 li'),
		     price_content =$('.syn_item4 .priContent');

		if(! $(this).hasClass('open')){
		   price_li.removeClass('open');
		   $(this).addClass('open');
			 price_content.stop().slideUp(function(){
				$(this).removeAttr('style');
			});
			$(this).children('.priContent').stop().slideDown(300);
		}else{
			price_li.removeClass('open');
			price_content.stop().slideUp(function(){
				$(this).removeAttr('style');
			});
		}
	});
	//頁籤
    $('.vanueList li').on('click', function() {
        var st_current = $(this).index();
        $('.vanueList li').removeClass('active');
        $(this).addClass('active');
        $('.vanueTag .vanueContent.active').removeClass('active');
        $('.vanueTag .vanueContent:eq(' + st_current + ')').addClass('active');
    });
</script>


</body>
</html>