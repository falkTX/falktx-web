/* falktx-home.js */
jQuery.fx.interval = 50;

function animateCircleRandom($circle) {
    $circle
    .animate({
              top: Math.floor(Math.random() * 100) + "%",
              left: Math.floor(Math.random() * 100) + "%",
              opacity: 0.25 + (Math.random() / 0.75)
              },
              8000 + Math.floor(Math.random() * 2000), "linear");
}

function animateCloseAll($nextPage) {
    $("#div_picButtons").animate({width:"0"}, 500, function(){
        $("#div_picPortrait").fadeOut(500);
        $("#div_textLogo").fadeOut(500);
        $("#div_textAboutMe").fadeOut(500);
        $("#div_background").stopTime();
        $("#circleR1").clearQueue();
        $("#circleR2").clearQueue();
        $("#circleR3").clearQueue();
        $("#circleR4").clearQueue();
        $("#circleR5").clearQueue();
        $("#circleR1").stop();
        $("#circleR2").stop();
        $("#circleR3").stop();
        $("#circleR4").stop();
        $("#circleR5").stop();
        $("#circleR1").fadeOut(500);
        $("#circleR2").fadeOut(500);
        $("#circleR3").fadeOut(500);
        $("#circleR4").fadeOut(500);
        $("#circleR5").fadeOut(500);
        $("#div_background").delay(500).queue(function(){
            window.location = "/" + $nextPage; // index.php?page=
        });
    });
}

$(document).ready(function(){

// -------------------------------------------------------------------
// circle animation

var x_circleR1 = $("#circleR1");
var x_circleR2 = $("#circleR2");
var x_circleR3 = $("#circleR3");
var x_circleR4 = $("#circleR4");
var x_circleR5 = $("#circleR5");

$("#div_background").everyTime(8000, function(){
    animateCircleRandom(x_circleR1);
    animateCircleRandom(x_circleR2);
    animateCircleRandom(x_circleR3);
    animateCircleRandom(x_circleR4);
    animateCircleRandom(x_circleR5);
});

animateCircleRandom(x_circleR1);
animateCircleRandom(x_circleR2);
animateCircleRandom(x_circleR3);
animateCircleRandom(x_circleR4);
animateCircleRandom(x_circleR5);

// -------------------------------------------------------------------
// hide/show about text

var x_aboutMeVisible = true;

$(window).resize(function(){
    if ($("#div_background").height() < 565 && x_aboutMeVisible)
    {
        $("#div_textAboutMe p").fadeOut(500);
        x_aboutMeVisible = false;
    }
    else if ($("#div_background").height() > 565 && ! x_aboutMeVisible)
    {
        $("#div_textAboutMe p").fadeIn(500);
        x_aboutMeVisible = true;
    }
});

if ($("#div_background").height() < 565)
{
    $("#div_textAboutMe p").hide();
    x_aboutMeVisible = false;
}

// -------------------------------------------------------------------
// button links animation

$(".div_picButton").hover(
    function() {
        $(this).addClass("div_picButtonHover");
    },
    function() {
        $(this).removeClass("div_picButtonHover");
    }
);

$("#div_picButtonMyself").click(function(){
    animateCloseAll("myself");
});

$("#div_picButtonProjects").click(function(){
    animateCloseAll("projects");
});

$("#div_picButtonSocial").click(function(){
    animateCloseAll("social");
});

$("#div_picButtonCV").click(function(){
    animateCloseAll("cv");
});

});
