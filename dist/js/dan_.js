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
        // $(".pic").imgLiquid();
        /*預定切換*/
	    $('.example').on('click',function(){
	    	
	    	if( ! $(this).hasClass('active')){
	    		$(this).addClass('active');
	    	}else{
	    		$(this).removeClass('active');
	    	}
	    });
	    /*更多條件開關*/

	    $('.search.mapBox .search_item.conditions').on('click',function(event){
	    	 event.stopPropagation();
	    	if(!$('.search-box.searchPopup').hasClass('on')){
	    		
	    		$('.search-box.searchPopup').addClass('on');
	    		$('body,html').css({'overflow':'hidden'});
	    		$('.search-box.searchPopup').stop().fadeIn();
	    		}else{
	    		$('body,html').css({'overflow':''});	
	    		$('.search-box.searchPopup').removeClass('on');
	    		$('.search_item_detail').removeClass('open');
	    		$('.search-box.searchPopup').stop().fadeOut();
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

//meeting 手機 價格方案用

		var windowHeight = $(window).height();
		$(".stepBox .mobile-plan-stecla > .plan-box").css({ height: windowHeight - 116 + 'px' });
		$(".stepBox .mobile-plan-stecla > .plan-box > .scroll").css({ height: windowHeight - 166 + 'px' });

		$('.stepBox .mobile-plan-stecla > a.first').click(function() {
			$(this).toggleClass('this');
			if($(this).hasClass('this')){
				$(this).find('i').html('確定明細');
				$('body').css({'height': 0});
			}else{
				$(this).find('i').html('查看明細');
				$('body').css({'height':'auto'});
			}
			$('.stepBox .mobile-plan-stecla > .plan-box').slideToggle();
		});
		$('.stepBox .mobile-plan-stecla > .plan-box > .scroll > ul > li > div > i').click(function() {
			$(this).parent().siblings('.text').slideToggle();
		});
    $(window).on('resize', function() {
		var windowHeight = $(window).height();
		$(".stepBox .mobile-plan-stecla > .plan-box").css({ height: windowHeight - 116 + 'px' });
		$(".stepBox .mobile-plan-stecla > .plan-box > .scroll").css({ height: windowHeight - 166 + 'px' });
    });
});




//meeting 手機 價格方案用

