$(document).ready(function() {

    $('.placeList .pic ul').slick({
        dots:  false,
        arrows: true,

        autoplaySpeed: 3500,
        infinite: true,
        speed: 600,
        
        cssEase: 'ease',
        //vertical: true,
        pauseOnHover: false,
    });
    /*用縮圖*/
	    /*更多條件開關*/

	    $('.search.mapBox .conditions').on('click',function(event){
	    	event.stopPropagation();
	    	if(!$('.search-box.searchPopup').hasClass('on')){
	    		$('.search-box.searchPopup').addClass('on');
	    		$('body,html').css({'overflow':'hidden'});
	    		$('.search-box.searchPopup').fadeIn();
	    		$(this).find('i').attr("class", "fa fa-angle-up");
	    		}else{
	    		$('body,html').css({'overflow':''});	
	    		$('.search-box.searchPopup').removeClass('on');
	    		$('.search_item_detail').removeClass('open');
	    		$('.search-box.searchPopup').fadeOut();
	    		$(this).find('i').attr("class", "fa fa-angle-down");
	    	}
	    });

	// $('body').not('.search.mapBox .search_item.conditions.open').on('click',function() {
	// 		console.info($(this));
	//     		$('body,html').css({'overflow':''});	
	//     		$('.search-box.searchPopup').removeClass('on');
	//     		$('.search_item_detail').removeClass('open');
	//     		$('.search-box.searchPopup').fadeOut();


	// });
	$('.contclose').on('click',function(){
	    		$('body,html').css({'overflow':''});	
	    		$('.search-box.searchPopup').removeClass('on');
	    		$('.search_item_detail').removeClass('open');
	    		$('.search-box.searchPopup').fadeOut();
	    });
//search 手機用 搜尋bar

	// var windowWidth = $(window).width();
	// var windowHeight = $(window).height();
	// $('#condition').click(function(){
	// 	if($(this).hasClass('this')){
	// 		$(this).removeClass('this');
	// 		$('.search-send').hide();
	// 		$('#condition > i').attr("class", "fa fa-angle-down");
	// 		$('body').css({'height': 'auto'});
	// 	}
	// 	else{
	// 		$('.search-mobile > a').removeClass('this');
	// 		$(this).addClass('this');
	// 		$('.search-send').show();
	// 		$('#condition > i').attr("class", "fa fa-angle-up");
	// 		$('#sequence > i').attr("class", "fa fa-angle-down");
	// 		$('body').css({'height': 0});
	// 	}
	// 	$('#sequence-open').hide();
	// 	$('#condition-open').slideToggle()
	//});//搜尋條件

//meeting 手機 價格方案用

		var windowHeight = $(window).height();
		$(".stepBox .mobile-plan-stecla > .plan-box").css({ height: windowHeight - 88 + 'px' });
		$(".stepBox .mobile-plan-stecla > .plan-box > .scroll").css({ height: windowHeight - 128 + 'px' });

		$('.stepBox .mobile-plan-stecla > a.first').click(function() {
			$(this).toggleClass('this');
			if($(this).hasClass('this')){
				$(this).find('i').html('確定明細');
				$('body,html').css({'overflow': 'hidden'});
			}else{
				$(this).find('i').html('查看明細');
				$('body,html').css({'overflow': ''});
			}
			$('.stepBox .mobile-plan-stecla > .plan-box').toggle();
		});
		$('.stepBox .mobile-plan-stecla > .plan-box > .scroll > ul > li > div > i').click(function() {
			$(this).parent().siblings('.text').slideToggle();
		});
    $(window).on('resize', function() {
		var windowHeight = $(window).height();
		$(".stepBox .mobile-plan-stecla > .plan-box").css({ height: windowHeight - 116 + 'px' });
		$(".stepBox .mobile-plan-stecla > .plan-box > .scroll").css({ height: windowHeight - 166 + 'px' });
   		
    });
    windowWidth = $(window).width();
	$(window).resize(function() {
		if(windowWidth != $(window).width() && $(window).width() <= 980 ){
			$('body,html').css({'overflow': ''});
		}else{
		}
	});
	///////////////////////////////////////////////
	//					1208					 //
	///////////////////////////////////////////////

	//四大保證 advantage.php
    $('.advantageTag li').on('click', function() {
        var st_current = $(this).index();
        $('.advantageTag li').removeClass('active');
        $(this).addClass('active');
        $('.advantageContent.active').removeClass('active');
        $('.advantageContent:eq(' + st_current + ')').addClass('active');
        console.log(st_current);
    });

	//職缺列表 recruiting.php
    $('.vacancylist li').on('click',function(){
    	if(!$(this).hasClass('active')){
    		 $('.vacancylist li').removeClass('active');
    		 $(this).addClass('active');
    		  $('.vacancylist .vacContent').stop().slideUp(function(){
    		  	$(this).prev().children('.vacTitle').addClass('borst');
    		  });
    		 $(this).children('.vacContent').stop().slideDown(400);
    	}else{
    		 $('.vacancylist li').removeClass('active');
    		 $('.vacancylist .vacContent').stop().slideUp(function(){
    		  	$(this).removeAttr('style');
    		  	$(this).prev().children('.vacTitle').removeClass('borst');
    		  });
    	}
    });
    $('.vacancylist li').hover(function(){
    	$(this).prev().children('.vacTitle').addClass('borst');
    },function(){
    	$(this).prev().children('.vacTitle').removeClass('borst');
    });




	//instructions.php
	$('.instructionsBox .sumber>li').on('click',function(){
		var  su_li = $('.instructionsBox .sumber>li'),
		     su_content =$('.instructionsBox .sumber .sumContent');

		if(! $(this).hasClass('open')){
		   su_li.removeClass('open');
		   $(this).addClass('open');
			 su_content.stop().slideUp(function(){
				$(this).removeAttr('style');
			});
			$(this).children('.sumContent').stop().slideDown(300);
		}else{
			su_li.removeClass('open');
			su_content.stop().slideUp(function(){
				$(this).removeAttr('style');
			});
		}
	});
	//application_1.php
	$('.applicationBox .sumber>li').on('click',function(){

		var  su_li = $('.applicationBox .sumber>li'),
		     su_content =$('.applicationBox .sumber .sumContent');

		if(! $(this).hasClass('open')){
		   su_li.removeClass('open');
		   $(this).addClass('open');
			 su_content.stop().slideUp(function(){
				$(this).removeAttr('style');
			});
			$(this).children('.sumContent').stop().slideDown(300);
		}else{
			su_li.removeClass('open');
			su_content.stop().slideUp(function(){
				$(this).removeAttr('style');
			});
		}
	});
	///////////////////////////////////////////////
	//					1213					 //
	///////////////////////////////////////////////


	//svg
	function myDraw(path, url, x, y, w, h, id){

	    //create clipPath Element
	  var clippath = document.createElementNS("http://www.w3.org/2000/svg","clipPath");  
	  clippath.setAttribute("id", id);
	  svgcanv.appendChild(clippath);

	  //draw the path
	  var cp=paper.path(path).translate(x, y).attr({stroke: 0});
	  $(cp.node).appendTo('#'+id+'');

	    //assoc clipPath with image
	  var img = paper.image(url,x,y,w,h);//.attr({fill:"#111",opacity:0.7});    
	    img.node.setAttribute("clip-path","url(#"+id+")");
	    img.node.setAttribute("class",id);
	} 
});




//meeting 手機 價格方案用

