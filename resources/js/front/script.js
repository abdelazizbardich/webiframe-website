import "../bootstrap";
import "./functions";
import axios from '../axios'
$(document).ready(function(){
    // header scroll controller
    if($(window).scrollTop() > 70){$("header").addClass("bg-w-70");}
    $(window).scroll(function () {
        let currentScroll = $(window).scrollTop();
        if(currentScroll > 70){
            $("header").addClass("bg-w-70");
        }else{
            $("header").removeClass("bg-w-70");
        }
    });

    // auto scroll to section
    $("a").click(function(e){
        let target = $(this).attr('href');
        if(target.includes("#")){
            e.preventDefault();
            console.log($(target));
            $('html, body').animate({
                scrollTop: $(target).offset().top-100
            },500);
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

    // chek for domaine avaliablity
    $("#check-for-domain").on('click',function(e){
        e.preventDefault()
        $(".domain-alert").hide();
        $("#check-for-domain").attr("disabled",true)
        $(".form-holder").addClass("frozen")
        let domain = $('input[name="domain"]').val()+$('select[name="extention"]').val()
        axios.get('domain-name/check/'+domain).then(response=>{
            $("#check-for-domain").attr("disabled",false)
            $(".form-holder").removeClass("frozen")
            console.log(response);
            if(response.status == 200 && response.data.success == true && response.data.available){
                $('#your-domain').val(domain)
                $(".domain-alert.alert-success").find("span").html(response.data.message);
                $(".domain-alert.alert-success").show();
            }else if(!response.data.valide){
                $(".alert-invalide").find("span").html(response.data.message);
                $(".alert-invalide").show();
            }
            else{
                $(".domain-alert.alert-danger").find("span").html(response.data.message);
                $(".domain-alert.alert-danger").show();
            }
        })

    });
    $("#i-have-mine").change(function(e){
        if($('#i-have-mine').prop('checked')){
            $('#check-for-domain-from').slideUp('fast')
            $('#your-domain').slideDown('fast')
        }else{
            $('#your-domain').slideUp('fast')
            $('#check-for-domain-from').slideDown('fast')
        }
    })
});
