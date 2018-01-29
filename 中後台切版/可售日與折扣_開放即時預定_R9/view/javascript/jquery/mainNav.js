$(function() {
    /*-------------------------------*/
    /*---手機選單---*/
    /*-------------------------------*/
    var RWD = navigator.userAgent,
        winWidth = $(window).width(),
        anoWidth = 0,
        nowstatus = 0,// 0 = mobile / 1 = desktop
        nowIndex,
        body = $("html, body"); 
    var $blackMask = $('<div class="blackMask"></div>').hide();
    $('#pushContainer,#pushTopNav').after($blackMask);

    if (RWD.match(/iPhone|iPad|iPod|Android|BlackBerry/i)) {
        $('#navToggle').on('touchstart', MENU);
        $('.blackMask').on('touchstart', MENU);
    } else {
        $('#navToggle').on('click', MENU);
        $('.blackMask').on('click', MENU);
    }

    BGIMG();



    $(window).resize(function() {
        $blackMask.hide();
        $('#navToggle').removeClass('show');
        $('#pushContainer,#pushTopNav').removeClass('show');
        $('html,body').removeClass('show');
        $('#nav').removeClass('show');
        $('.mainNav').removeClass('open');
        delay(function() {
            BGIMG();
        }, 300);
    })

    function MENU() {
        $blackMask.fadeToggle(300);
        $('#pushContainer,#pushTopNav').toggleClass('show');
        $('html,body').toggleClass('show');
        $('#navToggle').toggleClass('show');
        $('#nav').toggleClass('show');
        return false;
    }

    $('.mainNav').on('click', mainMenu);

    function mainMenu() {
        if (nowstatus === 0) {
            $(this).toggleClass('open').find('.subMenu').slideToggle();
            $(this).siblings('.mainNav').removeClass('open').find('.subMenu').slideUp();
        }
    }

    function MENUMODE(e) {
        if (e < 1170) {
            nowstatus = 0;
            console.log('mobile menu');
        } else {
            nowstatus = 1;
            console.log('desktop menu');
        }

    }


    /*-------------------------------*/
    /*---editor---*/
    /*-------------------------------*/
    if ($('.edit').size() !== 0) {
        $('.edit img').removeAttr('style');
        $('img.big').unwrap('p');
        //
    }
    if ($('.section-nav').size() !== 0 ){
        var cna = $('.section-nav');
        var cnah = 0 - cna.outerHeight()/2;
        console.log(cnah);
        cna.css('margin-top',cnah);
        $('.section-nav').on('click', 'a', goSECTION);
    }

    var delay = (function() {
        var timer = 0;
        return function(callback, ms) {
            clearTimeout(timer);
            timer = setTimeout(callback, ms);
        };
    })();


    function BGIMG() {
        winWidth = $(window).width();
        MENUMODE(winWidth);
        if ($('.bg').size() !== 0 && winWidth > 842) {
            console.log('winWidth = ' + winWidth + 'screen width:' + anoWidth);
            $('.bg').each(function(index, el) {
                var bgpic = 'url("' + $(this).find('img').attr('data-src') + '")';
                $(this).css({
                    'background-image': bgpic
                });
                console.log(index + '/' + bgpic);
            });
        } else {
            $('.bg').removeAttr('style');
            console.log('winWidth = ' + winWidth + 'screen width:' + anoWidth);
        }

    }


})
