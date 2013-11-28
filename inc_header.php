<!DOCTYPE html>
<html lang="en">
<head>
    <title>falkTX</title>
    <meta charset="utf-8">
    <link type="text/css" rel="stylesheet" href="css/reset.css" media="all"/>
    <link type="text/css" rel="stylesheet" href="css/main.css" media="all"/>
<?php if ($animHome || $page != "home") { ?>
    <link type="text/css" rel="stylesheet" href="css/anim.css" media="all"/>
<?php } ?>
    <script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
<?php if ($page == "home") { ?>
    <script type="text/javascript" src="js/jquery.timers.js"></script>
    <script type="text/javascript" src="js/falktx-home.js"></script>
<?php } else { ?>
    <script type="text/javascript" src="js/falktx-various.js"></script>
<?php } ?>
</head>
<body>
<div id="div_background">
