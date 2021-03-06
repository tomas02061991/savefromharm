const themePath = "http://safefromharm.cryolab.dk/wp-content/themes/safefromharm/";

$(document).on("ready", function () {

    $('.bxslider').bxSlider({slideWidth:5000, maxSlides:1, minSlides:1, captions: true});

    $("#mapbtn").on("click", function(){
        if($(this).html() == "BEFORE"){
            $(this).html("AFTER");
            $("#map img").fadeOut(0.5, function(){$("#map img").attr("src", "http://safefromharm.cryolab.dk/wp-content/themes/safefromharm/images/themap_now.jpg");});
            $("#map img").fadeIn();
        } else{
            $(this).html("BEFORE");
            $("#map img").fadeOut(0.5, function(){$("#map img").attr("src", "");});
            $("#map img").fadeIn();
        }
    });

    $("#menu-primary").removeClass("menu");
    $("#menu-primary").addClass("nav navbar-nav");
	//når man klikker på knappen med id #to1, starter den funktion som vi beskriver inden i on()
	//dette er istedet for at skrive on("click", funktionsNavn), så kan man bare definere funktionen direkte i kaldet
    $(".navbar-brand").on("click", function() {
	    $('html, body').animate({
	        scrollTop: $("#ourmission").offset().top
	    }, 1500);
	});
	$("nav ul li a").on("click", function() {
        var target = $(this).attr("href");
	    $('html, body').stop().animate({
	        scrollTop: $(target).offset().top
	    }, 1500);
	});

    $(function(){
    $(window).bind('scroll', function() {

        var pos = $("#overview").position().top - $(window).scrollTop();
        if(pos <= 20){
                jQuery('.skillbar').each(function(){
                jQuery(this).find('.skillbar-bar').animate({
                 width:jQuery(this).attr('data-percent')
                },3000);
                });
        } 

        $('.page').each(function() {
            var page = $(this);
            var position = page.position().top - $(window).scrollTop();
            var bgColor = page.css("background-color");
            
            if (position <= 5 && bgColor == "rgb(0, 0, 0)") {
                $("nav").css("background-color", "rgba(0, 0, 0, .5)")
                $("nav ul li a").css("color", "#ffffff")
                $("nav .logo").attr("src", themePath+"images/logo_hvid.png")
                if($( window ).width() < 751){
                    $(".navbar-default .navbar-collapse, .navbar-default .navbar-form").css({"background-color": "rgba(0, 0, 0, .5)", "border-color":"#fff"});
                    $("#donate").css("color", "#ffffff")

                } else{
                     $(".navbar-default .navbar-collapse, .navbar-default .navbar-form").css({"background-color": "transparent", "border-color":"transparent"});
                     $("#donate").css("color", "#ffffff")

                }
            }
            if (position <= 5 && bgColor == "rgb(255, 255, 255)") {
                $("nav").css("background-color", "rgba(255, 255, 255, .5)")
                $("nav ul li a").css("color", "#010f1a")
                $("nav .logo").attr("src", themePath+"images/logo_sort.png")
                if($( window ).width() < 751){
                    $(".navbar-default .navbar-collapse, .navbar-default .navbar-form").css({"background-color": "rgba(255, 255, 255, .5)", "border-color":"#000"});
                    $("#donate").css("color", "#010f1a")
                } else{
                     $(".navbar-default .navbar-collapse, .navbar-default .navbar-form").css({"background-color": "transparent", "border-color":"transparent"});
                     $("#donate").css("color", "#ffffff")
                }

               
            }
        });        
    });
});

});