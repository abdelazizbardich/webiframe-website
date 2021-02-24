$(document).ready(function(){
    // header scroll controller
    $(window).scroll(function () {
        let currentScroll = $(window).scrollTop();
        if(currentScroll > 70){
            $("header").addClass("bg-w-70");
        }else{
            $("header").removeClass("bg-w-70");
        }
    });

    // Header search bar cntroller
    $('.header-s i').click(function () {
       $('.s-box').toggleClass("show"); 
    });
    $('main').click(function () {
        $('.s-box').removeClass("show"); 
     });

    // Show mobile nav
    $('.show-m-nav').click(function () {
        $(this).toggleClass('open');
        $('.nav').toggleClass('show');
    });
    // nav links manager
    $('.nav li').click(function(){
        $('.show-m-nav').toggleClass('open');
        $(this).parents('.nav').toggleClass('show');
    });

});