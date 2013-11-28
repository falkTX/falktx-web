</div>
<?php if ($animHome) { ?>
<script type="text/javascript">
    $("#div_picButtons").animate({width:"391"}, 500, function(){
        $("#div_picPortrait").fadeIn(1000);
        $("#div_textLogo").fadeIn(500);
        $("#div_textAboutMe").fadeIn(500);
        if ($("#div_background").height() < 565) {
            $("#div_textAboutMe p").hide()
        }
    });
</script>
<?php } ?>
</body>
</html>
