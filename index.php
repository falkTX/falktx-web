<?php

$DEFAULT_PAGE = "home";

if (isset($_GET["page"]))
{
    $page = htmlspecialchars($_GET["page"]);
    $possiblePages = array("home", "myself", "projects", "social", "cv");

    if (! in_array($page, $possiblePages))
        $page = $DEFAULT_PAGE;
}
else
    $page = $DEFAULT_PAGE;

$animHome = ($page == "home" && isset($_GET["anim"]));

include dirname(__FILE__) . DIRECTORY_SEPARATOR . "inc_header.php";
?>

<!-- ====================================================================== -->
<!-- Home Start -->
<?php if ($page == "home") { ?>
<div id="div_picPortrait">
    <img src="images/photo.jpg" alt="me"/>
</div>

<div id="div_textLogo">
    <p><i>falkTX</i></p>
</div>

<div id="div_textAboutMe">
    <p>
My name is Filipe Coelho, aka 'falkTX',<br/>
and welcome to my webpage!<br/>
<br/>
Here you can learn more about myself,<br/>
my projects and what I do in life.<br/>
<br/>
This webpage was created from scratch by me,<br/>
feel free to take a look around! ;)<br/>
    </p>
</div>

<img src="images/circle1.png" alt="" class="img_circle" id="circleR1"/>
<img src="images/circle1.png" alt="" class="img_circle" id="circleR2"/>
<img src="images/circle1.png" alt="" class="img_circle" id="circleR3"/>
<img src="images/circle1.png" alt="" class="img_circle" id="circleR4"/>
<img src="images/circle1.png" alt="" class="img_circle" id="circleR5"/>
<!-- Home End -->
<!-- ====================================================================== -->

<!-- ====================================================================== -->
<!-- Myself Start -->
<?php } else if ($page == "myself") { ?>
<div id="div_textArea">
    <p>
<img src="images/falk-logo_white.png" alt="FALK"/>
    </p>
    <p>
(This section is still TODO).
    </p>
</div>
<!-- Myself End -->
<!-- ====================================================================== -->

<!-- ====================================================================== -->
<!-- Projects Start -->
<?php } else if ($page == "projects") { ?>
<div id="div_textArea">
    <p class="p_textTitle">
        <img src="images/ico_kxstudio.png" alt=""/><a href="http://kxstudio.sourceforge.net/" target="_blank">KXStudio</a><br/>
    </p>
    <p class="p_textDescription">
        KXStudio is a collection of tools and tweaks, targeted at audio and video production.<br/>
        KXStudio is also a Linux Distribution, currently based on Ubuntu 12.04.
    </p>

    <p class="p_textTitle">
        <img src="images/ico_distrho.png" alt=""/><a href="http://distrho.sourceforge.net/" target="_blank">DISTRHO</a><br/>
    </p>
    <p class="p_textDescription">
        DISTRHO is an open-source project that provides Cross-Platform Audio Plugins, using Juce and Qt4.
    </p>

    <p class="p_textTitle">
        <img src="images/ico_qtsixa.png" alt=""/><a href="http://qtsixa.sourceforge.net/" target="_blank">QtSixA</a><br/>
    </p>
    <p class="p_textDescription">
        QtSixA is a Sixaxis joystick manager.<br/>
        It can connect PS3 hardware (Sixaxis/DualShock3 and Keypads) to a Linux-compatible machine.
    </p>
</div>
<!-- Projects End -->
<!-- ====================================================================== -->

<!-- ====================================================================== -->
<!-- Social Start -->
<?php } else if ($page == "social") { ?>
<div id="div_picsSocial">
    <div id="div_picsSocialTop"></div>
    <div id="div_picsSocialBottom"></div>
    <div id="div_picsSocialCenter">
        <a href="https://plus.google.com/u/0/116902712123643685540/posts" target="_blank"><img src="images/tile_gplus.png" alt="g+" width="64px" height="64px"/></a>
        <a href="https://twitter.com/#!/falktx" target="_blank"><img src="images/tile_twitter.png" alt="twitter" width="64px" height="64px"/></a>
        <a href="http://facebook.com/falktx" target="_blank"><img src="images/tile_facebook.png" alt="facebook" width="132px" height="64px"/></a>
        <a href="http://falktx.deviantart.com/" target="_blank"><img src="images/tile_deviantart.png" alt="deviantart" width="132px" height="64px"/></a>
        <a href="http://www.youtube.com/user/falkTX" target="_blank"><img src="images/tile_youtube.png" alt="youtube" width="132px" height="64px"/></a>
        <a href="https://github.com/falkTX" target="_blank"><img src="images/tile_github.png" alt="github" width="132px" height="64px"/></a>
        <a href="http://www.jamendo.com/en/artist/falkTX" target="_blank"><img src="images/tile_jamendo.png" alt="jamendo" width="132px" height="64px"/></a>
    </div>
</div>
<!-- Social End -->

<!-- ====================================================================== -->
<!-- CV Start -->
<?php } else if ($page == "cv") { ?>
<div id="div_textAreaWhite">
    <table border="4">
        <!-- Title -->
        <tr>
            <td><h2>Europass Curriculum Vitae</h2></td>
            <td>&nbsp;&nbsp;</td>
            <td align="left"></td>
        </tr>

        <!-- Info -->
        <tr>
            <td align="right"><h5>Personal information</h5></td>
            <td>&nbsp;&nbsp;</td>
            <td align="left"></td>
        </tr>
        <tr>
            <td align="right"><b>Name:</b></td>
            <td>&nbsp;&nbsp;</td>
            <td align="left">Filipe Alexandre Lopes Coelho</td>
        </tr>
        <tr>
            <td align="right"><b>Address:</b></td>
            <td>&nbsp;&nbsp;</td>
            <td align="left">Bairro do Ranhados no. 7, Quintela de Orgens<br/>
                             3510-683 Orgens<br/>
                             Portugal</td>
        </tr>
        <tr>
            <td align="right"><b>Cell Phone:</b></td>
            <td>&nbsp;&nbsp;</td>
            <td align="left">+351 963 328 388</td>
        </tr>
        <tr>
            <td align="right"><b>E-mail:</b></td>
            <td>&nbsp;&nbsp;</td>
            <td align="left">falktx@falktx.com</td>
        </tr>
        <tr>
            <td align="right"><b>Nationality:</b></td>
            <td>&nbsp;&nbsp;</td>
            <td align="left">Portuguese</td>
        </tr>
        <tr>
            <td align="right"><b>Birthday:</b></td>
            <td>&nbsp;&nbsp;</td>
            <td align="left">April 4th, 1988</td>
        </tr>
        <tr>
            <td align="right"><b>Sex:</b></td>
            <td>&nbsp;&nbsp;</td>
            <td align="left">Male</td>
        </tr>

        <!-- Experience -->
        <tr>
            <td align="right"><h5></h5></td>
            <td>&nbsp;&nbsp;</td>
            <td align="left"></td>
        </tr>
        <tr>
            <td align="right"><b>...</b></td>
            <td>&nbsp;&nbsp;</td>
            <td align="left">(This section is still TODO)</td>
        </tr>
    </table>
</div>
<!-- CV End -->
<!-- ====================================================================== -->

<?php } ?>

<div id="div_picButtons">
<?php if ($page == "home") { ?>
    <div class="div_picButton" id="div_picButtonMyself">
        <a href="#"><p>About Myself</p></a>
    </div>
    <div class="div_picButton" id="div_picButtonProjects">
        <a href="#"><p>My Projects</p></a>
    </div>
    <div class="div_picButton" id="div_picButtonSocial">
        <a href="#"><p>Me in the Internet</p></a>
    </div>
    <div class="div_picButton" id="div_picButtonCV">
        <a href="#"><p>Curriculum Vitae</p></a>
    </div>
<?php } else { ?>
    <div class="div_picButton" id="div_picButtonBack">
        <a href="#"><p>Back</p></a>
    </div>
<?php } ?>
</div>

<?php
include dirname(__FILE__) . DIRECTORY_SEPARATOR . "inc_footer.php";
?>
