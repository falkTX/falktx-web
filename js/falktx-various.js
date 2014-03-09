/* falktx-others.js */
$(document).ready(function(){

// -------------------------------------------------------------------
// back button animation

$(".div_picButton").hover(
    function() {
        $(this).addClass("div_picButtonHover");
    },
    function() {
        $(this).removeClass("div_picButtonHover");
    }
);

$("#div_picButtonBack").click(function(){
    $("#div_picButtonsArea").animate({"width":"0px"}, 500, function(){
        $("#div_textArea").fadeOut(500);
        $("#div_textAreaWhite").fadeOut(500);
        $("#div_picsSocial").fadeOut(500);
        $("#div_background").delay(500).queue(function(){
            window.location = "index.php?anim=1";
        });
    });
});

$("#div_picButtonsArea").animate({"width":"391px"}, 500, function(){
    $("#div_textArea").fadeIn(500);
    $("#div_textAreaWhite").fadeIn(500);
    $("#div_picsSocial").fadeIn(500);
});

// -------------------------------------------------------------------
// social

var gFadeAnim = false;

function fadeAnimSocial($img)
{
    $img.fadeTo(300, 0.1, function(){
        $img.fadeTo(300, 0.9, function() {
            if (gFadeAnim)
                fadeAnimSocial($img);
        });
    });
}

$("#div_picsSocialCenter img").hover(
    function() {
        gFadeAnim = true;
        fadeAnimSocial($(this));
    },
    function() {
        gFadeAnim = false;
        $(this).stop();
        $(this).fadeTo(300, 1.0);
    }
);

});
