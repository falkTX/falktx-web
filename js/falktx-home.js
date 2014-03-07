/* falktx-home.js */
//jQuery.fx.interval = 50;

/*
function animateCircleRandom($circle) {
    $circle
    .animate({
              top: Math.floor(Math.random() * 100) + "%",
              left: Math.floor(Math.random() * 100) + "%",
              opacity: 0.25 + (Math.random() / 0.75)
              },
              8000 + Math.floor(Math.random() * 2000), "linear");
}
*/

function animateCloseAll($nextPage) {
    $("#div_picButtonsArea").animate({"width":"0px"}, 500, function(){
        $("#div_picPhoto").fadeOut(500);
        $("#div_textLogo").fadeOut(500);
        $("#div_textAboutMe").fadeOut(500);
        $("#div_background").delay(500).queue(function(){
            window.location = "index.php?page=" . $nextPage;
        });
    });
}

//         $("#div_background").stopTime();
//         $("#circleR1").clearQueue();
//         $("#circleR2").clearQueue();
//         $("#circleR3").clearQueue();
//         $("#circleR4").clearQueue();
//         $("#circleR5").clearQueue();
//         $("#circleR1").stop();
//         $("#circleR2").stop();
//         $("#circleR3").stop();
//         $("#circleR4").stop();
//         $("#circleR5").stop();
//         $("#circleR1").fadeOut(500);
//         $("#circleR2").fadeOut(500);
//         $("#circleR3").fadeOut(500);
//         $("#circleR4").fadeOut(500);
//         $("#circleR5").fadeOut(500);

$(document).ready(function(){

// -------------------------------------------------------------------
// circle animation

/*
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
*/

// -------------------------------------------------------------------
// hide/show about text

// height needed to show about text area
var kHeightNeededForAboutText = 565;

// check if about-me area show be visible
var gAboutMeVisible = ($("#div_background").height() >= kHeightNeededForAboutText);

// hide it if needed
if (! gAboutMeVisible) {
    $("#div_textAboutMe").hide();
}

// -------------------------------------------------------------------
// resize function

$(window).resize(function(){
    if ($("#div_background").height() < kHeightNeededForAboutText)
    {
        if (gAboutMeVisible)
        {
            $("#div_textAboutMe").fadeOut(500);
            gAboutMeVisible = false;
        }
    }
    else if (! gAboutMeVisible)
    {
        $("#div_textAboutMe").fadeIn(500);
        gAboutMeVisible = true;
    }
});

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
