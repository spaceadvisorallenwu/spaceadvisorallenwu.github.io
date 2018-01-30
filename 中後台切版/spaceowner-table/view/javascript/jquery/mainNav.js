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


    $(window).resize(function() {
        $blackMask.hide();
        $('#navToggle').removeClass('show');
        $('#pushContainer,#pushTopNav').removeClass('show');
        $('html,body').removeClass('show');
        $('#nav').removeClass('show');
        $('.mainNav').removeClass('open');
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

    var delay = (function() {
        var timer = 0;
        return function(callback, ms) {
            clearTimeout(timer);
            timer = setTimeout(callback, ms);
        };
    })();

})
