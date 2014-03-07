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
