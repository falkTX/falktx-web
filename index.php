<?php

$DEFAULT_PAGE   = "home";
$POSSIBLE_PAGES = array("home", "myself", "projects", "social", "cv");

// local generator
if (isset($argv))
{
    $_GET["page"] = $argv[1];
    $_GET["anim"] = $argv[2];
}

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

<?php if ($page == "home") { ?>
<!-- ====================================================================== -->
<!-- Home Start -->

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

<img src="images/circle1.png" alt="" class="img_circle" id="circleR1"/>
<img src="images/circle1.png" alt="" class="img_circle" id="circleR2"/>
<img src="images/circle1.png" alt="" class="img_circle" id="circleR3"/>
<img src="images/circle1.png" alt="" class="img_circle" id="circleR4"/>
<img src="images/circle1.png" alt="" class="img_circle" id="circleR5"/>

<!-- Home End -->
<!-- ====================================================================== -->
<?php } else if ($page == "myself") { ?>
<!-- ====================================================================== -->
<!-- Myself Start -->

<div id="div_textArea" style="line-height: 150%;">
    <p style="font-size: 125%;">
      <img src="images/falk-logo_white.png" alt="FALK" style="float:left;padding-right:15px;"/>
<br/><br/>
Hello!<br/>
My name is Filipe Coelho, also known as <b>falkTX</b> on the internet.
    </p>
    <br/>
    <p>
I love programming and music.<br/>
I am a quiet person, but never afraid to speak up when needed.
    </p>
    <br/>
    <p>
I'm currently living in Viseu, Portugal.<br/>
    </p>
    <br/>
    <p>
If you want to contact me, the best ways are:
    </p>
    <ul>
        <li>E-mail: <a href="mailto:falktx@falktx.com">falktx@falktx.com</a></li>
        <li>IRC: #kxstudio channel on freenode</li>
    </ul>
</div>

<!-- Myself End -->
<!-- ====================================================================== -->
<?php } else if ($page == "projects") { ?>
<!-- ====================================================================== -->
<!-- Projects Start -->

<div id="div_textArea">
    <div id="div_proj_kxstudio" class="div_proj">
        <a href="http://kxstudio.sourceforge.net/" target="_blank">
            <img src="images/ico_kxstudio.png" alt="" class="div_proj_ico"/>
            <b>KXStudio</b>
        </a>
        is a collection of applications and plugins for professional audio production
        <br/>
        <ul>
            <li><a href="http://kxstudio.sourceforge.net/Applications" target="_blank">
                <img src="images/ico_kx_apps.png" alt="Applications"/><br/><b>Applications</b></a></li>
            <li><a href="http://kxstudio.sourceforge.net/Plugins" target="_blank">
                <img src="images/ico_kx_plugins.png" alt="Plugins"/><br/><b>Plugins</b></a></li>
            <li><a href="http://kxstudio.sourceforge.net/Repositories" target="_blank">
                <img src="images/ico_kx_repos.png" alt="Repositories"/><br/><b>Repositories</b></a></li>
        </ul>
    </div>

    <div id="div_proj_distrho" class="div_proj">
        <a href="http://distrho.sourceforge.net/" target="_blank"><img src="images/distrho-logo.png" alt=""/></a>
        <span>Open-source project that provides Cross-Platform Audio Plugins</span>
    </div>

    <div id="div_proj_qtsixa" class="div_proj">
        <ul>
          <li>
              <a href="http://qtsixa.sourceforge.net/" target="_blank"><img src="images/qtsixa.png" alt=""/></a>
          </li>
          <li>
            <span>
                <br/><br/>
                <a href="http://qtsixa.sourceforge.net/" target="_blank"><b>QtSixA</b></a>
                is a Sixaxis joystick manager.<br/>
                It can connect PS3 hardware to a Linux-compatible machine.
            </span>
        </li>
        </ul>
    </div>
</div>

<!-- Projects End -->
<!-- ====================================================================== -->
<?php } else if ($page == "social") { ?>
<!-- ====================================================================== -->
<!-- Social Start -->

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
<?php } else if ($page == "cv") { ?>
<!-- ====================================================================== -->
<!-- CV Start -->
<?php
$isPortuguese = TRUE; //(isset($_GET["lang"]) && htmlspecialchars($_GET["lang"]) == "pt");
?>

<div id="div_textAreaWhite">
    <!--<span id="span_lang"><a href="index.php?page=cv&lang=en">en</a> | <a href="index.php?page=cv&lang=pt">pt</a></span>-->
    <span id="span_download"><a href="files/FilipeCV.pdf">Download as PDF</a></span>
    <table>
        <!-- Title -->
        <tr>
            <td align="right" style="line-height: 150%;">Europass</td>
            <td align="left"><h4><span style="line-height: 150%;">Curriculum Vitae</span></h4></td>
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
            <td align="right">
                <img src="images/cv_photo.jpg" alt="photo" class="img_cv_photo"/>
            </td>
            <td align="left">
                <table id="table_inside_cv">
                  <tr><td>
                      <img src="images/cv_address.png" alt="" class="img_cv"/>
                  </td><td>
                      Bairro do Ranhados no 7, Quintela de Orgens, 3510-683 Orgens, Viseu (Portugal)
                  </td></tr>
                  <tr><td>
                      <img src="images/cv_phone.png" alt="" class="img_cv"/>
                  </td><td>
                      +351 963453117
                  </td></tr>
                  <tr><td>
                      <img src="images/cv_email.png" alt="" class="img_cv"/>
                  </td><td>
                      falktx@falktx.com
                  </td></tr>
                  <tr><td>
                      <img src="images/cv_webpage.png" alt="" class="img_cv"/>
                  </td><td>
                      falktx.com
                  </td></tr>
                  <tr><td>
                      <img src="images/cv_social.png" alt="" class="img_cv"/>
                  </td><td>
                      <span>IRC (Freenode)</span> falktx
                      <span>| Github</span> falkTX
                      <span>| Facebook</span> falktx
                      <span>| Skype</span> falktx
                  </td></tr>
                  <tr><td colspan="2" style="line-height: 50%;"><br/></td></tr>
                  <tr><td colspan="2">
                      <span>Sexo</span> Masculino
                      <span>| Data de nascimento</span> 4 de Abril de 1988
                      <span>| Nacionalidade</span> Portuguesa
                  </td></tr>
                </table>
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
            <td align="right" rowspan="2"><h4>Fevereiro de 2014 a Março de 2014</h4></td>
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
<!--         TODO: language -->

        <tr>
            <td align="right"><h4>Competências de comunicação</h4></td>
            <td align="left">
                Boa capacidade de comunicação, demonstrada por:<br/>
                <ul>
                    <li>Administrador de Forum e canal IRC, dedicado a suporte de produtos próprios</li>
                    <li>Colaboração em vários podcasts</li>
                    <li>Diversos trabalhos/projectos realizados em equipa</li>
                </ul>
            </td>
        </tr>
        <tr><td>&nbsp;</td><td></td></tr>
        <tr>
            <td align="right"><h4>Competências de programação</h4></td>
            <td align="left">
                <ul>
                    <li>Domínio de linguagens C, C++ e Python – com preferência em C++ e PyQt</li>
                    <li>Domínio de GUI toolkits Qt e Juce</li>
                    <li>Conhecimento básico de OpenGL</li>
                </ul>
            </td>
        </tr>
        <tr><td>&nbsp;</td><td></td></tr>
        <tr>
            <td align="right"><h4>Competências informáticas</h4></td>
            <td align="left">
                <ul>
                    <li>Domínio de software de produção de áudio (FL Studio e Renoise)</li>
                    <li>Bom conhecimento de Control Version Systems (svn e git)</li>
                    <li>Bom conhecimento de IDEs (QtCreator e Kdevelop)</li>
                    <li>Bom conhecimento de Sistemas Operativos (Windows, Mac e Linux)</li>
                    <li>Bom conhecimento de linguagens Web, nomeadamente HTML, CSS, JavaScript e PHP</li>
                    <li>Conhecimento básico de edição de imagem (GIMP)</li>
                </ul>
            </td>
        </tr>
        <tr><td>&nbsp;</td><td></td></tr>
        <tr>
            <td align="right"><h4>Outras competências</h4></td>
            <td align="left">
                <ul>
                    <li>Criador de uma Distribuição Linux própria (KXStudio)</li>
                    <li>Debian packaging</li>
                    <li>Produtor/Técnico de áudio</li>
                    <li>Reparação de Sistemas</li>
                </ul>
            </td>
        </tr>
        <tr><td>&nbsp;</td><td></td></tr>
        <tr>
            <td align="right"><h4>Carta de Condução</h4></td>
            <td align="left">
                Veículos Ligeiros (B)
            </td>
        </tr>
        <tr><td><br/><br/></td><td></td></tr>

        <!-- Extra Info -->
        <tr>
            <td align="right"><h4>INFORMAÇÃO ADICIONAL</h4><br/></td>
            <td align="left"></td>
        </tr>
        <tr>
            <td align="right"><h4>
                                  Projectos Pessoais<br/>
                                  <i>(Free/Libre/Open-Source Software)</i>
                              </h4></td>
            <td align="left">
                <p>
                    KXStudio – kxstudio.sf.net<br/>
                    &nbsp;&nbsp;&nbsp;Conjunto de aplicações multimédia e Distribuição Linux.<br/><br/>
                </p>
                <p>
                    DISTRHO – distrho.sf.net<br/>
                    &nbsp;&nbsp;&nbsp;Conjunto de plugins para produção de áudio.<br/><br/>
                </p>
                <p>
                    QtSixA – qtsixa.sf.net<br/>
                    &nbsp;&nbsp;&nbsp;Driver bluetooth de Sixaxis/DualShock3 para Linux<br/><br/>
                </p>
            </td>
        </tr>

    </table>
</div>

<!-- CV End -->
<!-- ====================================================================== -->
<?php } ?>

<!-- ====================================================================== -->
<!-- Buttons Start -->

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

<!-- Buttons End -->
<!-- ====================================================================== -->

</div> <!-- div_background -->

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
