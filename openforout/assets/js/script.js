$(function(){
	var screen_w = $(window).width();
	$(window).resize(function() {
		console.log(screen_w);
	});
	// function isElemInView(elem) {
	//     var elemTop = elem.offset().top;
	//     var elemBottom = elemTop + elem.height();
	//     // console.log(elemTop);
	//     // console.log(elemBottom);

	//     // Only completely visible elements return true:
	//     var isVisible = (elemTop >= 0) && (elemBottom <= $(document).height());
	//     console.log((elemBottom));
	//     console.log(window.innerHeight);
	//     // Partially visible elements return true:
	//     //isVisible = elemTop < window.innerHeight && elemBottom >= 0;
	//     return isVisible;
	// }
	// $(window).scroll(function(event){
	// 	var st = $(this).scrollTop();
	// 	// console.log(st);
	//      if (isElemInView($('._item._t1 ._mainTitle'))) {
	//      	console.log('y');
	//      };
	// });

	inView('._item._t1:not(._sawit) ._mainTitle').on('enter', function(){
		$('._item._t1').addClass('_sawit');
	});
	inView('._item._t2:not(._sawit) ._mainTitle').on('enter', function(){
		$('._item._t2').addClass('_sawit');
	});
	inView('._item._t3:not(._sawit) ._mainTitle').on('enter', function(){
		$('._item._t3').addClass('_sawit');
	});
	inView('._item._t4:not(._sawit) ._mainTitle').on('enter', function(){
		$('._item._t4').addClass('_sawit');
	});
	inView('._item._t5:not(._sawit) ._mainTitle').on('enter', function(){
		$('._item._t5').addClass('_sawit');
	});
	inView('._item._t6:not(._sawit) ._mainTitle').on('enter', function(){
		$('._item._t6').addClass('_sawit');
	});
	inView('._item._t7:not(._sawit) ._mainTitle').on('enter', function(){
		$('._item._t7').addClass('_sawit');
	});
	inView('._item._t8:not(._sawit) ._mainTitle').on('enter', function(){
		$('._item._t8').addClass('_sawit');
	});
	inView('._item._t9:not(._sawit) ._mainTitle').on('enter', function(){
		$('._item._t9').addClass('_sawit');
	});

	// $("#_close").on('click', '._bottom li a', function() {
	// 	var elem = $(this).attr('data-scroll');
	// 	var position = $("#" + elem).offset().top;
	// 	$("html, body").animate({
	// 		scrollTop: position - 100
	// 	}, {
	//         duration: 350,
	//         easing: 'linear'
	//     });
	// });
});
