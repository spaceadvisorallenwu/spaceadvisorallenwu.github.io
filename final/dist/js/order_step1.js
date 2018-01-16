$(window).bind('load', function () {
				var val_width = 0;
				$('.valuation>div>span:nth-child(2)').each(function (idx, obj) {
						if ($(obj).width() > val_width) val_width = $(obj).width();
				}).css('width', val_width + 'px');
		})

$(window).bind('load', function () {
				var val_width2 = 0;
				$('.appointment_detail span.odr_price b').each(function (idx, obj) {
						if ($(obj).width() > val_width2) val_width2 = $(obj).width();
				}).css('width', val_width2 + 'px');

		})

$(window).bind('load', function () {
				var val_width = 0;
				$('.valuation>div>span:nth-child(2)').each(function (idx, obj) {
						if ($(obj).width() > val_width) val_width = $(obj).width();
				}).css('width', val_width + 'px');
		})
