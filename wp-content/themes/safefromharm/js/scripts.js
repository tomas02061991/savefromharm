const themePath = "http://safefromharm.cryolab.dk/wp-content/themes/safefromharm/";

$(document).on("ready", function () {
	//når man klikker på knappen med id #to1, starter den funktion som vi beskriver inden i on()
	//dette er istedet for at skrive on("click", funktionsNavn), så kan man bare definere funktionen direkte i kaldet
    $("#logo").on("click", function() {
	    $('html, body').animate({
	        scrollTop: $("#home").offset().top
	    }, 1500);
	});
	$("#toone").on("click", function() {
	    $('html, body').animate({
	        scrollTop: $("#home").offset().top
	    }, 1500);
	});
	$("#totwo").on("click", function() {
    	$('html, body').animate({
        	scrollTop: $("#ourmission").offset().top
    	}, 1500);
	});
	$("#tothree").on("click", function() {
    	$('html, body').animate({
        	scrollTop: $("#overview").offset().top
    	}, 1500);
	});
	$("#tofour").on("click", function() {
    	$('html, body').animate({
        	scrollTop: $("#themap").offset().top
    	}, 1500);
	});
    $("#tofive").on("click", function() {
    	$('html, body').animate({
        	scrollTop: $("#whytheymatter").offset().top
    	}, 1500);
	});
    $("#tosix").on("click", function() {
    	$('html, body').animate({
        	scrollTop: $("#howwho").offset().top
    	}, 1500);
	});
    $("#toseven").on("click", function() {
    	$('html, body').animate({
        	scrollTop: $("#competition").offset().top
    	}, 1500);
	});
});


$(document).scroll(function(){
    $('.page').each(function() {
            var page = $(this);
            var position = post.position().top - $(window).scrollTop();
            var bgColor = page.css("background-color")
            
            if(position <= 0 && bgColor="#fff") {
                $("nav").css("background-color", "rgba(255, 255, 255, 0.5)")
                $(".botton").css("color", "#010f1a")
                $("nav .logo img").attr("src", themePath+"images/logo_sort.png")
            } 
            if(position <= 0 && bgColor="#000") {
                $("nav").css("background-color", "rgba(43, 43, 43, 0.0)")
                $(".botton").css("color", "#ffffff")
                $("nav .logo img").attr("src", themePath+"images/logo_hvid.png")
            }
        });    
    // var aboutTop = $("#overview").offset().top
    // if($(this).scrollTop()>0){
    //     $("nav").css("background-color", "rgba(43, 43, 43, 0.0)")
    //     $(".botton").css("color", "#ffffff")
    //     $("nav .logo img").attr("src", themePath+"images/logo_hvid.png")
    // }
    // if($(this).scrollTop() >= aboutTop){
    //     $("nav").css("background-color", "rgba(255, 255, 255, 0.5)")
    //     $(".botton").css("color", "#010f1a")
    //     $("nav .logo img").attr("src", themePath+"images/logo_sort.png")
    // }
});

