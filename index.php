<?php

$DEFAULT_PAGE   = "home";
$POSSIBLE_PAGES = array("home", "myself", "projects", "social", "cv");

if (isset($_GET["page"]))
{
    $page = htmlspecialchars($_GET["page"]);

    if (! in_array($page, $POSSIBLE_PAGES))
        $page = $DEFAULT_PAGE;
}
else
{
    $page = $DEFAULT_PAGE;
}

$animateHome = ($page == "home" && isset($_GET["anim"]) && htmlspecialchars($_GET["anim"]) == "1");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>falkTX</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link type="text/css" rel="stylesheet" href="css/reset.css" media="all"/>
    <link type="text/css" rel="stylesheet" href="css/main.css" media="all"/>
<?php if ($animateHome || $page != "home") { ?>
    <link type="text/css" rel="stylesheet" href="css/anim.css" media="all"/>
<?php } ?>
    <script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
<?php if ($page == "home") { ?>
    <script type="text/javascript" src="js/jquery.timers.js"></script>
    <script type="text/javascript" src="js/falktx-home.js"></script>
<?php } else { ?>
    <script type="text/javascript" src="js/falktx-various.js"></script>
<?php } ?>
    <noscript>
        <link rel="stylesheet" href="css/noscript.css"/> <!-- TODO -->
    </noscript>
</head>
<body>
<div id="div_background">

<!-- ====================================================================== -->
<!-- Home Start -->

<?php if ($page == "home") { ?>
<div id="div_picPhoto">
    <img src="images/photo.jpg" alt="me" width="250px" height="250px"/>
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

<!--
<img src="images/circle1.png" alt="" class="img_circle" id="circleR1"/>
<img src="images/circle1.png" alt="" class="img_circle" id="circleR2"/>
<img src="images/circle1.png" alt="" class="img_circle" id="circleR3"/>
<img src="images/circle1.png" alt="" class="img_circle" id="circleR4"/>
<img src="images/circle1.png" alt="" class="img_circle" id="circleR5"/>
-->

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

<!-- ====================================================================== -->
<!-- CV Start -->

<?php } else if ($page == "cv") {
$isPortuguese = (isset($_GET["lang"]) && htmlspecialchars($_GET["lang"]) == "pt");
?>

<div id="div_textAreaWhite">
    <span id="span_lang"><a href="index.php?page=cv&lang=en">en</a> | <a href="index.php?page=cv&lang=pt">pt</a></span>
    <table border="4">
        <!-- Title -->
        <tr>
            <td align="right">Europass</td>
            <td align="left"><h4><span>Curriculum Vitae</span></h4></td>
        </tr>
        <tr><td><br/><br/></td><td></td></tr>

        <!-- Info -->
        <tr>
<?php if ($isPortuguese) { ?>
            <td align="right"><h4>INFORMAÇÃO PESSOAL</h4></td>
<?php } else { ?>
            <td align="right"><h4>PERSONAL INFORMATION</h4></td>
<?php } ?>
            <td align="left"><h2>Filipe Alexandre Lopes Coelho</h2></td>
        </tr>
        <tr>
            <td align="right"></td>
            <td align="left"><img src="images/cv_address.png" alt=""/>Bairro do Ranhados no 7, Quintela de Orgens, 3510-683 Orgens, Viseu (Portugal)</td>
        </tr>
        <tr>
            <td align="right"></td>
            <td align="left"><img src="images/cv_phone.png" alt=""/>+351 963453117</td>
        </tr>
        <tr>
            <td align="right"></td>
            <td align="left"><img src="images/cv_email.png" alt=""/>falktx@falktx.com</td>
        </tr>
        <tr>
            <td align="right"></td>
            <td align="left"><img src="images/cv_webpage.png" alt=""/>falktx.com</td>
        </tr>
        <tr>
            <td align="right"></td>
            <td align="left"><img src="images/cv_social.png" alt=""/>
                <span>IRC (Freenode)</span> falktx
                <span>| Github</span> falkTX
                <span>| Facebook</span> falktx
                <span>| Skype</span> falktx</td>
        </tr>
        <tr>
            <td align="right"></td>
            <td align="left">
                <span>Sexo</span> Masculino
                <span>| Data de nascimento</span> 4 de Abril de 1988
                <span>| Nacionalidade</span> Portuguesa</td>
        </tr>
        <tr><td><br/><br/></td><td></td></tr>

        <!-- Experience -->
        <tr>
            <td align="right"><h4>EXPERIÊNCIA PROFISSIONAL</h4><br/></td>
            <td align="left"></td>
        </tr>
        <tr>
            <td align="right" rowspan="2"><h4>Dezembro de 2011 a Maio de 2012</h4></td>
            <td align="left"><h3>Programador</h3></td>
        </tr>
        <tr>
            <td align="left">
                TSI (Canadá, por vídeo-conferência)<br/>
                <ul>
                    <li>Programação de aplicações áudio (C++, VST, Qt)</li>
                </ul>
            </td>
        </tr>
        <tr><td>&nbsp;</td><td></td></tr>
        <tr>
            <td align="right" rowspan="2"><h4>Junho de 2011 a Novembro de 2011</h4></td>
            <td align="left"><h3>Web design (Estágio Profissional)</h3></td>
        </tr>
        <tr>
            <td align="left">
                auto.net – Rua Santa Isabel no 7, Repeses, 3500-726 Viseu (Portugal)<br/>
                <ul>
                    <li>Programação PHP</li>
                    <li>Web design</li>
                </ul>
            </td>
        </tr>
        <tr><td>&nbsp;</td><td></td></tr>
        <tr>
            <td align="right" rowspan="2"><h4>Abril de 2010 a Agosto de 2010</h4></td>
            <td align="left"><h3>Administrador de Sistemas (Estágio)</h3></td>
        </tr>
        <tr>
            <td align="left">
                Visabeira (Portugal)<br/>
                <ul>
                    <li>Administração de Sistemas</li>
                    <li>Instalação e Manutenção de Sistemas Linux</li>
                </ul>
            </td>
        </tr>
        <tr><td><br/><br/></td><td></td></tr>

        <!-- Education -->
        <tr>
            <td align="right"><h4>EDUCAÇÃO E FORMAÇÃO<h4><br/></td>
            <td align="left"></td>
        </tr>
        <tr>
            <td align="right" rowspan="2"><h4>Fevereiro de 2014 a Abril de 2014</h4></td>
            <td align="left"><h3>Criação de Sites Web</h3></td>
        </tr>
        <tr>
            <td align="left">
                UGT Viseu – Training Center<br/>
                <ul>
                    <li>Criação de Sites Web</li>
                </ul>
            </td>
        </tr>
        <tr><td>&nbsp;</td><td></td></tr>
        <tr>
            <td align="right" rowspan="2"><h4>Abril de 2009 a Setembro de 2010</h4></td>
            <td align="left"><h3>Desenvolvimento de Produtos Multimédia <span id="span_cet">Nível 4 CET</span></h3></td>
        </tr>
        <tr>
            <td align="left">
                Forino – Associação para A Escola de Novas Tecnologias (Portugal)<br/>
                <ul>
                    <li>Manipulação de Imagens</li>
                    <li>Criação de Páginas Web</li>
                    <li>Animações para a Web (Flash e Shockwave)</li>
                    <li>Desenvolvimento/Programação de Software multimédia</li>
                </ul>
            </td>
        </tr>
        <tr><td><br/><br/></td><td></td></tr>

        <!-- Skills -->
        <tr>
            <td align="right"><h4>COMPETÊNCIAS PESSOAIS</h4><br/></td>
            <td align="left"></td>
        </tr>
        <tr><td><br/><br/></td><td></td></tr>

        <!-- Extra Info -->
        <tr>
            <td align="right"><h4>INFORMAÇÃO ADICIONAL</h4><br/></td>
            <td align="left"></td>
        </tr>

    </table>
</div>

<!-- CV End -->
<!-- ====================================================================== -->

<?php } ?>

<!-- ====================================================================== -->

<div id="div_picButtonsArea">
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

<!-- ====================================================================== -->

</div>

<?php if ($animateHome) { ?>
<script type="text/javascript">
    $("#div_picButtonsArea").animate({"width":"391px"}, 500, function(){
        $("#div_picPhoto").fadeIn(1000);
        $("#div_textLogo").fadeIn(500);
        $("#div_textAboutMe").fadeIn(500);
        if ($("#div_background").height() < 565) {
            $("#div_textAboutMe").hide()
        }
    });
</script>
<?php } ?>

</body>
</html>
