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