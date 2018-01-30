
$(document).ready(function(e) {
    var $win = $(window),
        $navBtn = $('.subnavTitle'),
        $navCate = $('.subnavList');
    $win.on('resize orientationchange init', function(e) {
        var innerWidth = $(this).innerWidth();
        winH = $win.height();
        if (innerWidth >= 991) {
            $navCate[0] ? $navCate.show() : ''
        }
    }).trigger('init');
    if ($navBtn[0]) {
        $navBtn.data('status', 'open').on('click', function() {
            var $ele = jQuery(this);
            if ($ele.data('status') == 'open') {
                $ele.data('status', 'close');
                $ele.find('.fa-plus').fadeOut(300);
                $ele.find('.fa-minus').fadeIn(300);
                $navCate.slideDown()
            } else {
                $ele.data('status', 'open');
                $ele.find('.fa-plus').fadeIn(300);
                $ele.find('.fa-minus').fadeOut(300);
                $navCate.slideUp()
            }
        })
    }
});