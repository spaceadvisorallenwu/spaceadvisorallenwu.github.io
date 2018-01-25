//index 類型收合用
$(function(){
	$('.bookList .buttons .payment .btn').click(function() {
		$(this).parents('.bookList').find('.paymentInformation').toggle();
	});
	$('.bookList .buttons .comment .btn').click(function(){
		$('.bookList .buttons .comment .comment_list').toggle();
	});
	$('#style-open1').click(function() {
		$('.style-other1').slideToggle(0);
	});
	$('#style-open2').click(function() {
		$('.style-other2').slideToggle(0);
	});
	$('.evaluate li a').click(function(){
		$('.evaluate li ul').slideToggle(0);
	});
	$('[name="payselect"]').each(function(idx,obj){
		$(obj).on('click',function(event){
			$('.payment .pay-select:visible').not($(event.target).parentsUntil('li').parent().find('.pay-select')).slideToggle(0);
			$(event.target).parentsUntil('li').parent().find('.pay-select:not(:visible)').slideToggle(0);
		});
	});
	$('[name="invoiceselect"]').each(function(idx,obj){
		$(obj).on('click',function(event){
			$('.invoice .invoice-sub:visible').not($(event.target).parentsUntil('li').parent().find('.invoice-sub')).slideToggle(0);
			$(event.target).parentsUntil('li').parent().find('.invoice-sub:not(:visible)').slideToggle(0);
		});
	});
});

function setBlur(obj,target2){
	var target =document.getElementById(target2);
	if( obj.value.length ==obj.getAttribute('maxlength')){
		target.focus();
	}
	return;
}

/* 輸入資料錯誤提示 */
$(function(){
	$(".checkerr>div:nth-child(1)").prepend('<i class="fa fa-exclamation-circle error" aria-hidden="true"></i>');
	$(".checkerr>div:nth-child(2) input").addClass("input-field-error");
});


/* 場地規劃-桌型排法 */
$(function(){
	$(".site_table-menu>ul>li>a").click(function(){
		var n = $(this).attr("id");
		$(".site_table-contect img").attr("src", "dist/images/table-contect0" + n + ".png");
	});
});

//評價
// $('.eval-star').each(function(idx2,obj2){
// 	$(obj2).find('i').each(function(idx,obj){
// 		var remtxt = ["糟透了", "差", "一般", "好", "很棒"];
// 		$(obj).on('mouseover click',function(e){
// 			if (e.type=="click") $(e.target).parent().find('i').off('mouseover');
// 			$(e.target).parent().parent().find(".remtxt").text(remtxt[idx]);
// 			for (i = 0; i <=idx; i++){
// 				$(e.target).parent().find('i').removeClass('fa-star').addClass("fa-star-o").filter(':lt('+(i+1)+')').removeClass('fa-star-o').addClass("fa-star");
// 			}
// 		});
// 		;
// 	});
// });
