//index 類型收合用
$(function(){
	$('.bookList .buttons .payment .btn').click(function() {
		$(this).parents('.bookList').find('.paymentInformation').toggle();
	});
	$('.bookList .buttons .comment .btn').click(function(){
		$('.bookList .buttons .comment .comment_list').toggle();
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