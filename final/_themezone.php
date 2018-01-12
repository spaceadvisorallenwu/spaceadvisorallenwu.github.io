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
<!-- dan -->
<link href="dist/css/main_dan.css" rel="stylesheet" type="text/css" media=""/>
</head>

<body>
<div id="wrapper" class="themezoneBox">
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
<!-- 手機用搜尋 -->
		<div class="search-mobile mobile">
			<a id="condition">搜尋條件<i class="fa fa-angle-down" aria-hidden="true"></i></a>
			<a id="sequence">搜尋排序<i class="fa fa-angle-down" aria-hidden="true"></i></a>
			<!-- ****手機用搜尋條件**** -->
			<div id="condition-open" class="search-condition mobile">
				<div class="first">
					<div class="input">
						<input type="text" name="textfield" id="textfield" placeholder="輸入關鍵字" />
						<a href="">搜尋</a>
					</div>

				</div><!-- /first -->
				<div class="search_bar">
					<ul>
						<li>
							<p>縣市<i class="fa fa-angle-down mobile" aria-hidden="true"></i></p>
							<div class="search_item_detail">
								<ul>
									<li>
										<span>
											<input type="checkbox" name="checkbox" id="checkbox43" />
											<label for="checkbox43">台北市</label>
										</span>
										<span>
											<input type="checkbox" name="checkbox" id="checkbox44" />
											<label for="checkbox44">新北市</label>
										</span>
										<span>
											<input type="checkbox" name="checkbox" id="checkbox45" />
											<label for="checkbox45">桃園市</label>
										</span>
										<span>
											<input type="checkbox" name="checkbox" id="checkbox46" />
											<label for="checkbox46">新竹市</label>
										</span>
										<span>
											<input type="checkbox" name="checkbox" id="checkbox47" />
											<label for="checkbox47">新竹縣</label>
										</span>
										<span>
											<input type="checkbox" name="checkbox" id="checkbox48" />
											<label for="checkbox48">基隆市</label>
										</span>
										
										<span>
											<input type="checkbox" name="checkbox" id="checkbox49" />
											<label for="checkbox49">台中市</label>
										</span>
										<span>
											<input type="checkbox" name="checkbox" id="checkbox50" />
											<label for="checkbox50">彰化縣</label>
										</span>
										<span>
											<input type="checkbox" name="checkbox" id="checkbox51" />
											<label for="checkbox51">南投縣</label>
										</span>
										<span>
											<input type="checkbox" name="checkbox" id="checkbox52" />
											<label for="checkbox52">雲林縣</label>
										</span>
										<span>
											<input type="checkbox" name="checkbox" id="checkbox53" />
											<label for="checkbox53">高雄市</label>
										</span>
										<span>
											<input type="checkbox" name="checkbox" id="checkbox54" />
											<label for="checkbox54">台南市</label>
										</span>
										<span>
											<input type="checkbox" name="checkbox" id="checkbox55" />
											<label for="checkbox55">嘉義市</label>
										</span>
										<span>
											<input type="checkbox" name="checkbox" id="checkbox56" />
											<label for="checkbox56">嘉義縣</label>
										</span>
										<span>
											<input type="checkbox" name="checkbox" id="checkbox57" />
											<label for="checkbox57">屏東縣</label>
										</span>
										
										<span>
											<input type="checkbox" name="checkbox" id="checkbox58" />
											<label for="checkbox58">宜蘭縣</label>
										</span>
										<span>
											<input type="checkbox" name="checkbox" id="checkbox59" />
											<label for="checkbox59">花蓮縣</label>
										</span>
										<span>
											<input type="checkbox" name="checkbox" id="checkbox60" />
											<label for="checkbox60">台東縣</label>
										</span>
										
										<span>
											<input type="checkbox" name="checkbox" id="checkbox61" />
											<label for="checkbox61">澎湖縣</label>
										</span>
										<span>
											<input type="checkbox" name="checkbox" id="checkbox62" />
											<label for="checkbox62">金門縣</label>
										</span>
									</li>
								</ul>
							</div><!-- /search_item_detail -->
						</li>

					</ul>
				</div><!-- /search_bar -->
			</div><!-- /search-condition -->
			<!-- ****手機用搜尋篩選**** -->
			<div id="sequence-open" class="search-condition mobile">
				<div class="search_bar">
					<ul>
						<li class="no">
							<select name="select" id="select">
								<option>價格</option>
								<option>價格由高到低</option>
								<option>價格由低到高</option>
							</select>
						</li>
						<li>
							<select name="select" id="select">
								<option>評價星等</option>
								<option>評價星等由高到低</option>
								<option>評價星等由低到高</option>
							</select>
						</li>
					</ul>
				</div><!-- /search_bar -->
			</div><!-- /search-condition -->
		</div>
		<div class="search-send mobile">
			<a href="">搜尋</a>
			<a href="">清除</a>
		</div>

		<div class="ma_banner">
			<div class="ba_txt">
				<h2>婚宴主題</h2>
				輕鬆找到一個完美的場地輕鬆找到一個完美的場地輕鬆找到一個完美的場地
			</div>
			<div class="pc_banner"><img src="dist/images/themezone/themezone.jpg" alt=""></div>
			<div class="mo_banner"><img src="dist/images/themezone/themezone_2.jpg" alt=""></div>
		</div>
		<div class="sequence desk">
			<div class="content">
				<h3>婚宴主題場地一覽   共<b>380</b>筆店家</h3>
				<div class="sequence-select">
					<ul>
						<li>
							<select name="select" id="select">
								<option>價錢</option>
								<option>價格由高到低</option>
								<option>價格由低到高</option>
							</select>
						</li>
						<li>
							<select name="select" id="select">
								<option>星等</option>
								<option>評價星等由高到低</option>
								<option>評價星等由低到高</option>
							</select>
						</li>
						<li>
							<div class="search_item short">
								<div class="search_item_name" id="area">縣市</div>
								<i></i>
							</div>
							<div id="search_county" class="search_item_detail">
								<div class="search_item_open short"></div>
									<div class="search_item_area address">
										<table width="100%" border="0" cellspacing="0" cellpadding="0">
											<tbody><tr>
												<td width="100%" valign="top">
													<span><label><input type="checkbox" name="area[]" value="台北市">台北市</label></span>
													<span><label><input type="checkbox" name="area[]" value="新北市">新北市</label></span>
													<span><label><input type="checkbox" name="area[]" value="桃園市">桃園市</label></span>
													<span><label><input type="checkbox" name="area[]" value="新竹市">新竹市</label></span>
													<span><label><input type="checkbox" name="area[]" value="新竹縣">新竹縣</label></span>
													<span><label><input type="checkbox" name="area[]" value="基隆市">基隆市</label></span>
													<span><label><input type="checkbox" name="area[]" value="台中市">台中市</label></span>
													<span><label><input type="checkbox" name="area[]" value="彰化縣">彰化縣</label></span>
													<span><label><input type="checkbox" name="area[]" value="南投縣">南投縣</label></span>
													<span><label><input type="checkbox" name="area[]" value="雲林縣">雲林縣</label></span>
													<span><label><input type="checkbox" name="area[]" value="高雄市">高雄市</label></span>
													<span><label><input type="checkbox" name="area[]" value="台南市">台南市</label></span>
													<span><label><input type="checkbox" name="area[]" value="嘉義市">嘉義市</label></span>
													<span><label><input type="checkbox" name="area[]" value="嘉義縣">嘉義縣</label></span>
													<span><label><input type="checkbox" name="area[]" value="屏東縣">屏東縣</label></span>
													<span><label><input type="checkbox" name="area[]" value="宜蘭縣">宜蘭縣</label></span>
													<span><label><input type="checkbox" name="area[]" value="花蓮縣">花蓮縣</label></span>
													<span><label><input type="checkbox" name="area[]" value="台東縣">台東縣</label></span>
													<span><label><input type="checkbox" name="area[]" value="澎湖縣">澎湖縣</label></span>
													<span><label><input type="checkbox" name="area[]" value="金門縣">金門縣</label></span>
												</td>

											</tr>
										</tbody></table>
									</div>
							</div>
						</li>
					</ul>
				</div>
				<div class="input">
					<input type="text" name="textfield" id="textfield" placeholder="輸入關鍵字">
					<a href="">搜尋</a>
				</div>
			</div>
		</div>
		<div class="hotelList">
			<ul>
				<li>
					<a href="#">
						<div class="hotelImg">
							<img src="dist/images/themezone/logo.jpg" alt="">
						</div>
						<h3>君悅酒店</h3>
						<div class="assess">
							<i class="fa fa-star light" aria-hidden="true"></i>
							<i class="fa fa-star light" aria-hidden="true"></i>
							<i class="fa fa-star light" aria-hidden="true"></i>
							<i class="fa fa-star light" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<span>380評價</span>
						</div>
						<div class="region">台北·信義區<i></i></div>
						<div class="hotelPhoto">
							<img src="dist/images/themezone/hotel_1.jpg" alt="">
							<img src="dist/images/themezone/hotel_2.jpg" alt="">
						</div>
						<div class="hotelPay">TWD 29,000起</div>
					</a>
				</li>
				<li>
					<a href="#">
						<div class="hotelImg">
							<img src="dist/images/themezone/logo.jpg" alt="">
						</div>
						<h3>君悅酒店</h3>
						<div class="assess">
							<i class="fa fa-star light" aria-hidden="true"></i>
							<i class="fa fa-star light" aria-hidden="true"></i>
							<i class="fa fa-star light" aria-hidden="true"></i>
							<i class="fa fa-star light" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<span>380評價</span>
						</div>
						<div class="region">台北·信義區<i></i></div>
						<div class="hotelPhoto">
							<img src="dist/images/themezone/hotel_1.jpg" alt="">
							<img src="dist/images/themezone/hotel_2.jpg" alt="">
						</div>
						<div class="hotelPay">TWD 29,000起</div>
					</a>
				</li>
				<li>
					<a href="#">
						<div class="hotelImg">
							<img src="dist/images/themezone/logo.jpg" alt="">
						</div>
						<h3>君悅酒店</h3>
						<div class="assess">
							<i class="fa fa-star light" aria-hidden="true"></i>
							<i class="fa fa-star light" aria-hidden="true"></i>
							<i class="fa fa-star light" aria-hidden="true"></i>
							<i class="fa fa-star light" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<span>380評價</span>
						</div>
						<div class="region">台北·信義區<i></i></div>
						<div class="hotelPhoto">
							<img src="dist/images/themezone/hotel_1.jpg" alt="">
							<img src="dist/images/themezone/hotel_2.jpg" alt="">
						</div>
						<div class="hotelPay">TWD 29,000起</div>
					</a>
				</li>
				<li>
					<a href="#">
						<div class="hotelImg">
							<img src="dist/images/themezone/logo.jpg" alt="">
						</div>
						<h3>君悅酒店</h3>
						<div class="assess">
							<i class="fa fa-star light" aria-hidden="true"></i>
							<i class="fa fa-star light" aria-hidden="true"></i>
							<i class="fa fa-star light" aria-hidden="true"></i>
							<i class="fa fa-star light" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<span>380評價</span>
						</div>
						<div class="region">台北·信義區<i></i></div>
						<div class="hotelPhoto">
							<img src="dist/images/themezone/hotel_1.jpg" alt="">
							<img src="dist/images/themezone/hotel_2.jpg" alt="">
						</div>
						<div class="hotelPay">TWD 29,000起</div>
					</a>
				</li>
				<li>
					<a href="#">
						<div class="hotelImg">
							<img src="dist/images/themezone/logo.jpg" alt="">
						</div>
						<h3>君悅酒店</h3>
						<div class="assess">
							<i class="fa fa-star light" aria-hidden="true"></i>
							<i class="fa fa-star light" aria-hidden="true"></i>
							<i class="fa fa-star light" aria-hidden="true"></i>
							<i class="fa fa-star light" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<span>380評價</span>
						</div>
						<div class="region">台北·信義區<i></i></div>
						<div class="hotelPhoto">
							<img src="dist/images/themezone/hotel_1.jpg" alt="">
							<img src="dist/images/themezone/hotel_2.jpg" alt="">
						</div>
						<div class="hotelPay">TWD 29,000起</div>
					</a>
				</li>
				<li>
					<a href="#">
						<div class="hotelImg">
							<img src="dist/images/themezone/logo.jpg" alt="">
						</div>
						<h3>君悅酒店</h3>
						<div class="assess">
							<i class="fa fa-star light" aria-hidden="true"></i>
							<i class="fa fa-star light" aria-hidden="true"></i>
							<i class="fa fa-star light" aria-hidden="true"></i>
							<i class="fa fa-star light" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<span>380評價</span>
						</div>
						<div class="region">台北·信義區<i></i></div>
						<div class="hotelPhoto">
							<img src="dist/images/themezone/hotel_1.jpg" alt="">
							<img src="dist/images/themezone/hotel_2.jpg" alt="">
						</div>
						<div class="hotelPay">TWD 29,000起</div>
					</a>
				</li>
				<li>
					<a href="#">
						<div class="hotelImg">
							<img src="dist/images/themezone/logo.jpg" alt="">
						</div>
						<h3>君悅酒店</h3>
						<div class="assess">
							<i class="fa fa-star light" aria-hidden="true"></i>
							<i class="fa fa-star light" aria-hidden="true"></i>
							<i class="fa fa-star light" aria-hidden="true"></i>
							<i class="fa fa-star light" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<span>380評價</span>
						</div>
						<div class="region">台北·信義區<i></i></div>
						<div class="hotelPhoto">
							<img src="dist/images/themezone/hotel_1.jpg" alt="">
							<img src="dist/images/themezone/hotel_2.jpg" alt="">
						</div>
						<div class="hotelPay">TWD 29,000起</div>
					</a>
				</li>
				<li>
					<a href="#">
						<div class="hotelImg">
							<img src="dist/images/themezone/logo.jpg" alt="">
						</div>
						<h3>君悅酒店</h3>
						<div class="assess">
							<i class="fa fa-star light" aria-hidden="true"></i>
							<i class="fa fa-star light" aria-hidden="true"></i>
							<i class="fa fa-star light" aria-hidden="true"></i>
							<i class="fa fa-star light" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<span>380評價</span>
						</div>
						<div class="region">台北·信義區<i></i></div>
						<div class="hotelPhoto">
							<img src="dist/images/themezone/hotel_1.jpg" alt="">
							<img src="dist/images/themezone/hotel_2.jpg" alt="">
						</div>
						<div class="hotelPay">TWD 29,000起</div>
					</a>
				</li>
				<li>
					<a href="#">
						<div class="hotelImg">
							<img src="dist/images/themezone/logo.jpg" alt="">
						</div>
						<h3>君悅酒店</h3>
						<div class="assess">
							<i class="fa fa-star light" aria-hidden="true"></i>
							<i class="fa fa-star light" aria-hidden="true"></i>
							<i class="fa fa-star light" aria-hidden="true"></i>
							<i class="fa fa-star light" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<span>380評價</span>
						</div>
						<div class="region">台北·信義區<i></i></div>
						<div class="hotelPhoto">
							<img src="dist/images/themezone/hotel_1.jpg" alt="">
							<img src="dist/images/themezone/hotel_2.jpg" alt="">
						</div>
						<div class="hotelPay">TWD 29,000起</div>
					</a>
				</li>
				<li>
					<a href="#">
						<div class="hotelImg">
							<img src="dist/images/themezone/logo.jpg" alt="">
						</div>
						<h3>君悅酒店</h3>
						<div class="assess">
							<i class="fa fa-star light" aria-hidden="true"></i>
							<i class="fa fa-star light" aria-hidden="true"></i>
							<i class="fa fa-star light" aria-hidden="true"></i>
							<i class="fa fa-star light" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<span>380評價</span>
						</div>
						<div class="region">台北·信義區<i></i></div>
						<div class="hotelPhoto">
							<img src="dist/images/themezone/hotel_1.jpg" alt="">
							<img src="dist/images/themezone/hotel_2.jpg" alt="">
						</div>
						<div class="hotelPay">TWD 29,000起</div>
					</a>
				</li>
				<li>
					<a href="#">
						<div class="hotelImg">
							<img src="dist/images/themezone/logo.jpg" alt="">
						</div>
						<h3>君悅酒店</h3>
						<div class="assess">
							<i class="fa fa-star light" aria-hidden="true"></i>
							<i class="fa fa-star light" aria-hidden="true"></i>
							<i class="fa fa-star light" aria-hidden="true"></i>
							<i class="fa fa-star light" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<span>380評價</span>
						</div>
						<div class="region">台北·信義區<i></i></div>
						<div class="hotelPhoto">
							<img src="dist/images/themezone/hotel_1.jpg" alt="">
							<img src="dist/images/themezone/hotel_2.jpg" alt="">
						</div>
						<div class="hotelPay">TWD 29,000起</div>
					</a>
				</li>
				<li>
					<a href="#">
						<div class="hotelImg">
							<img src="dist/images/themezone/logo.jpg" alt="">
						</div>
						<h3>君悅酒店</h3>
						<div class="assess">
							<i class="fa fa-star light" aria-hidden="true"></i>
							<i class="fa fa-star light" aria-hidden="true"></i>
							<i class="fa fa-star light" aria-hidden="true"></i>
							<i class="fa fa-star light" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<span>380評價</span>
						</div>
						<div class="region">台北·信義區<i></i></div>
						<div class="hotelPhoto">
							<img src="dist/images/themezone/hotel_1.jpg" alt="">
							<img src="dist/images/themezone/hotel_2.jpg" alt="">
						</div>
						<div class="hotelPay">TWD 29,000起</div>
					</a>
				</li>
				<li>
					<a href="#">
						<div class="hotelImg">
							<img src="dist/images/themezone/logo.jpg" alt="">
						</div>
						<h3>君悅酒店</h3>
						<div class="assess">
							<i class="fa fa-star light" aria-hidden="true"></i>
							<i class="fa fa-star light" aria-hidden="true"></i>
							<i class="fa fa-star light" aria-hidden="true"></i>
							<i class="fa fa-star light" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<span>380評價</span>
						</div>
						<div class="region">台北·信義區<i></i></div>
						<div class="hotelPhoto">
							<img src="dist/images/themezone/hotel_1.jpg" alt="">
							<img src="dist/images/themezone/hotel_2.jpg" alt="">
						</div>
						<div class="hotelPay">TWD 29,000起</div>
					</a>
				</li>
				<li>
					<a href="#">
						<div class="hotelImg">
							<img src="dist/images/themezone/logo.jpg" alt="">
						</div>
						<h3>君悅酒店</h3>
						<div class="assess">
							<i class="fa fa-star light" aria-hidden="true"></i>
							<i class="fa fa-star light" aria-hidden="true"></i>
							<i class="fa fa-star light" aria-hidden="true"></i>
							<i class="fa fa-star light" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<span>380評價</span>
						</div>
						<div class="region">台北·信義區<i></i></div>
						<div class="hotelPhoto">
							<img src="dist/images/themezone/hotel_1.jpg" alt="">
							<img src="dist/images/themezone/hotel_2.jpg" alt="">
						</div>
						<div class="hotelPay">TWD 29,000起</div>
					</a>
				</li>
				<li>
					<a href="#">
						<div class="hotelImg">
							<img src="dist/images/themezone/logo.jpg" alt="">
						</div>
						<h3>君悅酒店</h3>
						<div class="assess">
							<i class="fa fa-star light" aria-hidden="true"></i>
							<i class="fa fa-star light" aria-hidden="true"></i>
							<i class="fa fa-star light" aria-hidden="true"></i>
							<i class="fa fa-star light" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<span>380評價</span>
						</div>
						<div class="region">台北·信義區<i></i></div>
						<div class="hotelPhoto">
							<img src="dist/images/themezone/hotel_1.jpg" alt="">
							<img src="dist/images/themezone/hotel_2.jpg" alt="">
						</div>
						<div class="hotelPay">TWD 29,000起</div>
					</a>
				</li>
				<li>
					<a href="#">
						<div class="hotelImg">
							<img src="dist/images/themezone/logo.jpg" alt="">
						</div>
						<h3>君悅酒店</h3>
						<div class="assess">
							<i class="fa fa-star light" aria-hidden="true"></i>
							<i class="fa fa-star light" aria-hidden="true"></i>
							<i class="fa fa-star light" aria-hidden="true"></i>
							<i class="fa fa-star light" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<span>380評價</span>
						</div>
						<div class="region">台北·信義區<i></i></div>
						<div class="hotelPhoto">
							<img src="dist/images/themezone/hotel_1.jpg" alt="">
							<img src="dist/images/themezone/hotel_2.jpg" alt="">
						</div>
						<div class="hotelPay">TWD 29,000起</div>
					</a>
				</li>
				<li>
					<a href="#">
						<div class="hotelImg">
							<img src="dist/images/themezone/logo.jpg" alt="">
						</div>
						<h3>君悅酒店</h3>
						<div class="assess">
							<i class="fa fa-star light" aria-hidden="true"></i>
							<i class="fa fa-star light" aria-hidden="true"></i>
							<i class="fa fa-star light" aria-hidden="true"></i>
							<i class="fa fa-star light" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<span>380評價</span>
						</div>
						<div class="region">台北·信義區<i></i></div>
						<div class="hotelPhoto">
							<img src="dist/images/themezone/hotel_1.jpg" alt="">
							<img src="dist/images/themezone/hotel_2.jpg" alt="">
						</div>
						<div class="hotelPay">TWD 29,000起</div>
					</a>
				</li>
				<li>
					<a href="#">
						<div class="hotelImg">
							<img src="dist/images/themezone/logo.jpg" alt="">
						</div>
						<h3>君悅酒店</h3>
						<div class="assess">
							<i class="fa fa-star light" aria-hidden="true"></i>
							<i class="fa fa-star light" aria-hidden="true"></i>
							<i class="fa fa-star light" aria-hidden="true"></i>
							<i class="fa fa-star light" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<span>380評價</span>
						</div>
						<div class="region">台北·信義區<i></i></div>
						<div class="hotelPhoto">
							<img src="dist/images/themezone/hotel_1.jpg" alt="">
							<img src="dist/images/themezone/hotel_2.jpg" alt="">
						</div>
						<div class="hotelPay">TWD 29,000起</div>
					</a>
				</li>
				<li>
					<a href="#">
						<div class="hotelImg">
							<img src="dist/images/themezone/logo.jpg" alt="">
						</div>
						<h3>君悅酒店</h3>
						<div class="assess">
							<i class="fa fa-star light" aria-hidden="true"></i>
							<i class="fa fa-star light" aria-hidden="true"></i>
							<i class="fa fa-star light" aria-hidden="true"></i>
							<i class="fa fa-star light" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<span>380評價</span>
						</div>
						<div class="region">台北·信義區<i></i></div>
						<div class="hotelPhoto">
							<img src="dist/images/themezone/hotel_1.jpg" alt="">
							<img src="dist/images/themezone/hotel_2.jpg" alt="">
						</div>
						<div class="hotelPay">TWD 29,000起</div>
					</a>
				</li>
				<li>
					<a href="#">
						<div class="hotelImg">
							<img src="dist/images/themezone/logo.jpg" alt="">
						</div>
						<h3>君悅酒店</h3>
						<div class="assess">
							<i class="fa fa-star light" aria-hidden="true"></i>
							<i class="fa fa-star light" aria-hidden="true"></i>
							<i class="fa fa-star light" aria-hidden="true"></i>
							<i class="fa fa-star light" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<span>380評價</span>
						</div>
						<div class="region">台北·信義區<i></i></div>
						<div class="hotelPhoto">
							<img src="dist/images/themezone/hotel_1.jpg" alt="">
							<img src="dist/images/themezone/hotel_2.jpg" alt="">
						</div>
						<div class="hotelPay">TWD 29,000起</div>
					</a>
				</li>
			</ul>
		</div>
<!-- 場地列表 -->
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
		<div class="listTxt">1–5共超過300個場地出租</div>
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
<script type="text/javascript" src="dist/js/laydate/laydate.js"></script>

<!-- 1225 javascript -->
<script type="text/javascript">
	//input框++
    var div_array = [];

    $(".search_item_name").each(function(){
    	var this_id = $(this).attr("id");
    	div_array[this_id] = $(this).html();
    });
    $(':input').on('click',function(){
     	if($(this).attr("type") == "checkbox"){
	    	var search_item = $(this).parents('.search_off').children('.search_item');
	    	var search_item_detail = $(this).parents('.search_item_detail');
	    	search_item.addClass('have');
	    	search_item_detail.addClass('have');

	     	var checkbox_name = $(this).attr("name");
	     	var div_name = checkbox_name.replace("[]","");
	     	var checkbox_value = "";
	     	var i = 0;
		 	$("input[name='"+ checkbox_name +"']").each(function(){
		 		if($(this).prop("checked") == true){
		 			if(i == 0) checkbox_value = $(this).val();
		 			 i++;
		 		}
		 	});
		 	if(i > 1) checkbox_value = checkbox_value + "+";
		 	if(i == 0){
				$("#" + div_name).html(div_array[div_name]);
		    	search_item.removeClass('have');
		    	search_item_detail.removeClass('have');
		 	}else $("#" + div_name).html(checkbox_value);
	 	}
    });

</script>
<script type="text/javascript">
$("body").click(function(event){
	if($(event.target).parents(".sequence-select").length == 0  ){
		$(".search_item_detail").removeClass('open');
	}
});//點擊其他地方關閉

</script>
</body>
</html>