$(document).ready(function(){
    $(window).scroll(function () {
        let currentScroll = $(window).scrollTop();
        if(currentScroll > 70){
            $("header").addClass("bg-w-70");
        }else{
            $("header").removeClass("bg-w-70");
        }
    });
});