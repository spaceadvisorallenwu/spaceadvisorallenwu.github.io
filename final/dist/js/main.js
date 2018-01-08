$(function(){
//top
	$(".gotop").click(function() {
		$("html,body").animate({ scrollTop: 0 }, 1000);
		return false;
	});
});

$(function(){
  $("#menu").mmenu({
               "extensions": [
                  "fx-menu-zoom",
                  "fx-panels-zoom",
                  "pagedim-black"
               ],
               "offCanvas": {
                  "position": "right"
               }
  });
});

//mobile頭部搜尋用
$(function(){
	var windowHeight = $(window).height();
	var windowWidth = $(window).width();

	// $(window).resize(function() {
	// 	if(windowHeight == $(window).height() && windowWidth != $(window).width()){
	// 		if($(window).width() >= 980 ){
	// 			$('header > .content > .search').hide();
	// 		}
	// 	}
	// });
	$('header .__mb .search #search').click(function() {
		$('header .__mb .search').toggleClass('search-open');
	});
});

$(function() {
	$(".flexslider").flexslider({
		animation: "slide",
		slideshowSpeed: 5000, //展示时间间隔ms
		animationSpeed: 1500, //滚动时间ms
		touch: true //是否支持触屏滑动
	});
});

//index 類型收合用
$(function(){
	$('#style-open').click(function() {
		$('.style-other').slideToggle(0);
	});

	$('.style > ul > li > a').hover(
		function() {
			$(this).find('.mouseout').css({'opacity': 0});
			$(this).find('.mouseover').css({'opacity': 1});
		}, function() {
			$(this).find('.mouseout').css({'opacity': 1});
			$(this).find('.mouseover').css({'opacity': 0});
	});
});

//search 桌機用
$(function(){
	$('.search_item').click(function(){
		if($(this).siblings().hasClass('open')){
			 $(this).siblings().removeClass('open');
			 $(this).find('i').attr("class", "fa fa-angle-down");
		}else{
			 $('.search_item_detail').removeClass('open');
			$('.search_item').find('i').attr("class", "fa fa-angle-down");
			$(this).siblings().toggleClass('open');
			$(this).find('i').attr("class", "fa fa-angle-up");
		}
	});//搜尋bar縮合

	$('.search_in>li').click(function(){
		 $('.search-box.searchPopup').removeClass('on');//map.php 更多條件用
	});//其他

	$('.sequence-click > a').click(function(){
		$(this).toggleClass('this');
	});//篩選點選樣式

	$(function(){
		$('.search-list > ul > li > .place > .text > i.plan').click(function(){
			$(this).parent().siblings('.down').slideToggle();
		});
		$('.search-list > ul > li > .place > .showbox-all > .showbox').click(function(){
			$(this).parent().siblings('.down').slideToggle();
		});
	});//點擊價格方案/圖片 打開下方區塊

	$(function(){
		// 用來顯示大圖片用
		var $showImage = $('#show-image');
	 
		// 當滑鼠移到 .abgne 中的某一個超連結時
		$('.abgne a.pic').click(function(){
			// 把 #show-image 的 src 改成被移到的超連結的位置
			$showImage.attr('src', $(this).attr('href'));
		}).click(function(){
			// 如果超連結被點擊時, 取消連結動作
			return false;
		});
	});//點小圖換大圖
});

//search 手機用 搜尋bar
$(function(){
	var windowWidth = $(window).width();
	var windowHeight = $(window).height();
	$('#condition').click(function(){
		$('#sequence').removeClass('this'); // allen
		if($(this).hasClass('this')){
			$(this).removeClass('this');
			$('.search-send').hide();
			$('#condition > i').attr("class", "fa fa-angle-down");
			$('body').css({'height': 'auto'});
		}
		else{
			$('.search-mobile > a').removeClass('this');
			$(this).addClass('this');
			$('.search-send').show();
			$('#condition > i').attr("class", "fa fa-angle-up");
			$('#sequence > i').attr("class", "fa fa-angle-down");
			$('body').css({'height': 0});
		}
		$('#sequence-open').hide();
		$('#condition-open').toggle() // allen
	});//搜尋條件
    windowWidth = $(window).width();
	$(window).resize(function() {
		if($(this).width() >= 980 ){
			$('body').css({'height': 'auto'});
		}
	});
	$('#sequence').click(function(){
		$('#condition').removeClass('this'); // allen
		if($(this).hasClass('this')){
			$(this).removeClass('this');
			$('.search-send').hide();
			$('#sequence > i').attr("class", "fa fa-angle-down");
			$('body').css({'height': 'auto'});
		}
		else{
			$('.search-mobile > a').removeClass('this');
			$(this).addClass('this');
			$('.search-send').show();
			$('#sequence > i').attr("class", "fa fa-angle-up");
			$('#condition > i').attr("class", "fa fa-angle-down");
			$('body').css({'height': 0});
		}
		$('#condition-open').hide();
		$('#sequence-open').toggle(); // allen
	});//搜尋排序

	if($(window).width() >= 980 ){
		$('body').css({'height': 'auto'});
	}

	$(window).resize(function() {
		if(windowWidth != $(window).width() && $(window).width() <= 980 ){
			$('body').css({'height': 'auto'});
		}else{
			$('.search-send').hide();
			$('#condition-open').hide();
			$('#condition').removeClass('this');
			$('#condition > i').attr("class", "fa fa-angle-down");
			$('#sequence-open').hide();
			$('#sequence').removeClass('this');
			$('#sequence > i').attr("class", "fa fa-angle-down");
		}
		windowWidth = $(window).width();
	});

	// $(window).resize(function() {
	// 	if(windowWidth != $(window).width()){
	// 		if($(window).width() >= 980 ){
	// 			$('body').css({'height': 'auto'});
	// 		}else{
	// 			if($(window).width() <= 980){
	// 				$('#condition-open').hide();
	// 				$('#condition').removeClass('this');
	// 				$('#condition > i').attr("class", "fa fa-angle-down");
	// 				$('#sequence-open').hide();
	// 				$('#sequence').removeClass('this');
	// 				$('#sequence > i').attr("class", "fa fa-angle-down");
	// 				$('.search-send').hide();
	// 			}
	// 		}
	// 	}
	// 	windowWidth = $(window).width();
	// });

	$(".search-condition").css({ height: windowHeight - 207 + 'px' });

	$('.search_bar > ul > li > p').click(function(){
		$(this).toggleClass('this')
		$(this).siblings('.search_item_detail').slideToggle();
	});//點擊標題打開內容

	$('li.switch > span').click(function(){
		$(this).toggleClass('on');
	});//搜尋排列開關
});

//場地列表 i標籤點擊變色
$(function(){
	$('i.heart, .meeting .day-plan ._others .heart').click(function(){
		$(this).toggleClass('this');
	});
	$('i.add, .meeting .day-plan ._others .add').click(function(){
		$(this).toggleClass('this');
	});
});

//meeting 價格方案 點選打開
$(function(){
	$('.price-plan > .content > .content-720 > .box > ul > li > div > p.program, .price-plan > .content > .content-720 > .box > ul > li > div > p.price').click(function(){ // allen
		$(this).parent().siblings().toggle();
	});
	$('.box a.more').click(function(){ // allen
		var $this = $(this).parents('.box');
		if($this.hasClass('open')) {
			$this.removeClass('open');
		} else {
			$this.addClass('open');
		}
	});
});

//meeting banner切換用
$('.banner > .banner-box > .panorama').css({'opacity':1,'zIndex':1});
$(function(){
	$('.banner > .banner-nav > div > a.panorama').click(function(){
		$(this).addClass('this').siblings().removeClass('this');
		$('.banner > .banner-box > .panorama').css({'opacity':1,'zIndex':1});
		$('.banner > .banner-box > .pic').css({'opacity':0,'zIndex':-1});
		$('.banner > .banner-box > .video').css({'opacity':0,'zIndex':-1});
	});
	$('.banner > .banner-nav > div > a.pic').click(function(){
		$(this).addClass('this').siblings().removeClass('this');
		$('.banner > .banner-box > .panorama').css({'opacity':0,'zIndex':-1});
		$('.banner > .banner-box > .pic').css({'opacity':1,'zIndex':1});
		$('.banner > .banner-box > .video').css({'opacity':0,'zIndex':-1});
	});
	$('.banner > .banner-nav > div > a.video').click(function(){
		$(this).addClass('this').siblings().removeClass('this');
		$('.banner > .banner-box > .panorama').css({'opacity':0,'zIndex':-1});
		$('.banner > .banner-box > .pic').css({'opacity':0,'zIndex':-1});
		$('.banner > .banner-box > .video').css({'opacity':1,'zIndex':1});
	});
});
//meeting 加入收藏 比較場地
$(function(){
	$('.anchor > .content > .day-plan > span > a').click(function(){
		$(this).toggleClass('this');
	});//桌機
	$('.outline > .content-720 > .link > a').click(function(){
		$(this).toggleClass('this');
	});//手機
});
//meeting 價格方案 選擇
$(function(){
	$('.box > ul > li > div > a.select').click(function(){
		$('#cart').css('background-color','#5b5b5d');
		function first(){
			$('#cart').css('background-color','#464649');
		};
		setTimeout(first,500);
	});//桌機
});

//meeting 手機 評論
$(function(){
	$('.comment > .content-720 > .star > p > a.more').click(function(){
		$(this).parent().siblings().slideToggle();
	});
});

//meeting 手機 價格方案用
$(function(){
	var windowHeight = $(window).height();
	$(".mobile-plan.mobile > .plan-box").css({ height: windowHeight + 'px' });
	$(".mobile-plan.mobile > .plan-box > .scroll").css({ height: windowHeight + 'px' });

	$('.mobile-plan a.first').click(function() {
		$(this).toggleClass('this');
		if($(this).hasClass('this')){
			$(this).find('i').html('確定方案');
			$('body,html').css({'overflow': 'hidden'});
		}else{
			$(this).find('i').html('選擇方案');
			$('body,html').css({'overflow': ''});
		}
		$('.mobile-plan > .plan-box').toggle();
	});
	$('.mobile-plan > .plan-box > .scroll > ul > li > div > i').click(function() {
		$(this).parent().siblings('.text').toggle();
	});
    $(window).on('resize', function() {
		var windowHeight = $(window).height();
		$(".mobile-plan-stecla > .plan-box").css({ height: windowHeight - 116 + 'px' });
		$(".mobile-plan-stecla > .plan-box > .scroll").css({ height: windowHeight - 166 + 'px' });
    });
});





