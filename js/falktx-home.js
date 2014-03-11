/* falktx-home.js */
jQuery.fx.interval = 50;

function animateCircleRandom($circle) {
    var delay = 8000 + Math.floor(Math.random() * 2000)

    $circle.animate({
            top:  "" + Math.floor(Math.random() * 100.0) + "%",
            left: "" + Math.floor(Math.random() * 100.0) + "%",
            opacity: 0.25 + (Math.random() / 0.75)
        },
        delay, "linear");

    $("#div_background").oneTime(delay, function(){
        animateCircleRandom($circle);
    });
}

function animateCloseAll($nextPage) {
    $("#div_picButtonsArea").animate({"width":"0px"}, 500, function(){
        $("#div_picPhoto").fadeOut(500);
        $("#div_textLogo").fadeOut(500);
        $("#div_textAboutMe").fadeOut(500);

        $("#div_background").clearQueue();
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
            window.location = $nextPage;
        });
    });
}

$(document).ready(function(){

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

// -------------------------------------------------------------------
// start circle animation

animateCircleRandom($("#circleR1"));
animateCircleRandom($("#circleR2"));
animateCircleRandom($("#circleR3"));
animateCircleRandom($("#circleR4"));
animateCircleRandom($("#circleR5"));

});
