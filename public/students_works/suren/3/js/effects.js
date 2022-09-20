$(document).ready(function () {

    // search open
    $("#search").click(function (){
        $("#_search").animate({
            width: "800px"
        });
        $("#find").toggle();
        $(".nav-elem").toggle();
        $("._close").toggle();
    });

    // search close
    $("#quite").click(function () {
        $("#_search").animate({
            width: "-800px"
        });
        $("#find").toggle();
        $(".nav-elem").toggle();
        $("._close").toggle();
        $("#_search").fadeOut();
    });

    // search function
    $("#find").click(function () {
        let find = $("#_search").val();
        if (find.length > 0) {
            $("button:contains(" + find + ")").css("background-color", "yellow");
        }
        $("#_search").val("");
    });

    // add to cart
    $(".addcart").click(function () {
        let payment = $(this).text();
        $("#my-cart").append(payment + "</br>");
        let find = $("#_search").val();
        $("button:contains(" + find + ")").css("background-color", "lightblue");
    });

    // pay from cart
    $("#pay").click(function () {
        $("#my-cart").text("");
    });

    // reg & cart
    $("#_cart").click(function () { 
        $("#cart").animate({height: "toggle"});
    });

    // responsive design
    $("#hidshow").click(function () { 
        $(".nav-bar ul li").animate({height: "toggle"});
        $("#cart").animate({height: "toggle"});
    });

    // responsive scroll
    $(window).scroll(function () { 
        if ($(this).scrollTop() > 500 && $(window).width() < 1024) {
            $(".nav-bar ul li").fadeOut();
            $("#cart").fadeOut();
        }
    });

    $(window).resize(function () { 
        if ($(window).width() > 1024 && $(window).width() < 1200) {
            $(".nav-bar ul li").fadeIn();
            $("#cart").fadeIn();
        } else if ($(window).width() > 1200) {
            $(".nav-bar ul li").fadeIn();
            $("#cart").fadeOut();
        } else if ($(window).width() < 1024) {
            $("#cart").fadeOut();
        }
    });
    
    // header img slider
    let slider = ["media/img/connect.jpg", "media/img/maxresdefault.jpg", "media/img/rsz_tomasz-frankowski-198764_1.jpg", "media/img/Technology Future.jpg"];
    setInterval(() => {
        let x = slider.pop();
        slider.unshift(x);
        for (let i = 0; i < slider.length; i++) {
            $("#slider_img").fadeOut(3000);
            document.getElementById("slider_img").src = slider[i];
            $("#slider_img").fadeIn(3000);
        }        
    }, 3000);

});