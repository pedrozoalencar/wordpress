

jQuery(document).ready(function($) {

    jQuery("#red" ).click(function(){
        jQuery("#color" ).attr("href", "css/color-red.css");
        //jQuery(".navbar-brand img" ).attr("src", "images/logo-red.png");
        jQuery(".board-icon" ).attr("src", "images/board-red.png");
        jQuery(".umbrella-icon" ).attr("src", "images/umbrella-red.png");
        jQuery(".globe-icon" ).attr("src", "images/globe-icon-red.png");
        return false;
    });

    jQuery("#green" ).click(function(){
        jQuery("#color" ).attr("href", "css/color-green.css");
        //jQuery(".navbar-brand img" ).attr("src", "images/logo-green.png");
        jQuery(".board-icon" ).attr("src", "images/board-green.png");
        jQuery(".umbrella-icon" ).attr("src", "images/umbrella-green.png");
        jQuery(".globe-icon" ).attr("src", "images/globe-icon-green.png");
        return false;
    });

    jQuery("#orange" ).click(function(){
        jQuery("#color" ).attr("href", "css/color-orange.css");
        //jQuery(".navbar-brand img" ).attr("src", "images/logo-orange.png");
        jQuery(".board-icon" ).attr("src", "images/board-orange.png");
        jQuery(".umbrella-icon" ).attr("src", "images/umbrella-orange.png");
        jQuery(".globe-icon" ).attr("src", "images/globe-icon-orange.png");
        return false;
    });

    jQuery("#pink" ).click(function(){
        jQuery("#color" ).attr("href", "css/color-pink.css");
        // jQuery(".navbar-brand img" ).attr("src", "images/logo-pink.png");
        jQuery(".board-icon" ).attr("src", "images/board-pink.png");
        jQuery(".umbrella-icon" ).attr("src", "images/umbrella-pink.png");
        jQuery(".globe-icon" ).attr("src", "images/globe-icon-pink.png");
        return false;
    });

    jQuery("#default" ).click(function(){
        jQuery("#color" ).attr("href", "css/color-default.css");
        //jQuery(".navbar-brand img" ).attr("src", "images/logo.png");
        jQuery(".board-icon" ).attr("src", "images/board.png");
        jQuery(".umbrella-icon" ).attr("src", "images/umbrella.png");
        jQuery(".globe-icon" ).attr("src", "images/globe-icon.png");
        return false;
    });

    jQuery("#dark-blue" ).click(function(){
        jQuery("#color" ).attr("href", "css/color-dark-blue.css");
        //jQuery(".navbar-brand img" ).attr("src", "images/logo-dark-blue.png");
        jQuery(".board-icon" ).attr("src", "images/board-dark-blue.png");
        jQuery(".umbrella-icon" ).attr("src", "images/umbrella-dark-blue.png");
        jQuery(".globe-icon" ).attr("src", "images/globe-icon-dark-blue.png");
        return false;
    });

    jQuery("#light-blue" ).click(function(){
        jQuery("#color" ).attr("href", "css/color-light-blue.css");
        //jQuery(".navbar-brand img" ).attr("src", "images/logo-light-blue.png");
        jQuery(".board-icon" ).attr("src", "images/board-light-blue.png");
        jQuery(".umbrella-icon" ).attr("src", "images/umbrella-light-blue.png");
        jQuery(".globe-icon" ).attr("src", "images/globe-icon-light-blue.png");
        return false;
    });

    jQuery("#yellow" ).click(function(){
        jQuery("#color" ).attr("href", "css/color-yellow.css");
        //jQuery(".navbar-brand img" ).attr("src", "images/logo-yellow.png");
        jQuery(".board-icon" ).attr("src", "images/board-yellow.png");
        jQuery(".umbrella-icon" ).attr("src", "images/umbrella-yellow.png");
        jQuery(".globe-icon" ).attr("src", "images/globe-icon-yellow.png");
        return false;
    });

    jQuery("#dark-green" ).click(function(){
        jQuery("#color" ).attr("href", "css/color-dark-green.css");
        //jQuery(".navbar-brand img" ).attr("src", "images/logo-dark-green.png");
        jQuery(".board-icon" ).attr("src", "images/board-dark-green.png");
        jQuery(".umbrella-icon" ).attr("src", "images/umbrella-dark-green.png");
        jQuery(".globe-icon" ).attr("src", "images/globe-icon-dark-green.png");
        return false;
    });

    jQuery("#grey" ).click(function(){
        jQuery("#color" ).attr("href", "css/color-grey.css");
        //jQuery(".navbar-brand img" ).attr("src", "images/logo-grey.png");
        jQuery(".board-icon" ).attr("src", "images/board-grey.png");
        jQuery(".umbrella-icon" ).attr("src", "images/umbrella-grey.png");
        jQuery(".globe-icon" ).attr("src", "images/globe-icon-grey.png");
        return false;
    });


    jQuery("#purple" ).click(function(){
        jQuery("#color" ).attr("href", "css/color-purple.css");
        //jQuery(".navbar-brand img" ).attr("src", "images/logo-purple.png");
        jQuery(".board-icon" ).attr("src", "images/board-purple.png");
        jQuery(".umbrella-icon" ).attr("src", "images/umbrella-purple.png");
        jQuery(".globe-icon" ).attr("src", "images/globe-icon-purple.png");
        return false;
    });

    jQuery("#brown" ).click(function(){
        jQuery("#color" ).attr("href", "css/color-brown.css");
        //jQuery(".navbar-brand img" ).attr("src", "images/logo-brown.png");
        jQuery(".board-icon" ).attr("src", "images/board-brown.png");
        jQuery(".umbrella-icon" ).attr("src", "images/umbrella-brown.png");
        jQuery(".globe-icon" ).attr("src", "images/globe-icon-brown.png");
        return false;
    });


    jQuery(".switcher-dropdown .style-link").click(function(){
        //jQuery(".switcher-dropdown ul").slideUp();
        jQuery(this).parent(".switcher-dropdown").find("ul").slideToggle();
        jQuery(this).parent(".switcher-dropdown").siblings(".switcher-dropdown").find("ul").slideUp();

    });






    // picker buttton
    jQuery(".picker_close").click(function(){
        jQuery("#choose_color").toggleClass("position");
    });

    // boxed and wide layouts
    jQuery("#boxed-layout").click(function(){
        //location.reload();
        //jQuery("body").addClass("boxed-layout");
        //jQuery("body").addClass("bg1");


    });
    jQuery("#wide-layout").click(function(){
        jQuery("body").removeClass("boxed-layout");
        jQuery("body").removeClass("bg1");

    });

    var body_class_dark = $.cookie('body_class_dark');
    if(body_class_dark) {
        $('#theme-css').attr('href', body_class_dark);
        jQuery("#theme-dark").addClass("active");
        jQuery("#theme-light").removeClass("active");
        jQuery(".navbar-brand img" ).attr("src", "images/logo.png");
        jQuery(".navbar-brand img").removeClass("change-on-scroll");
        jQuery(window).scroll(function() {
            var scroll = jQuery(window).scrollTop();
            if (scroll >= 1) {
                jQuery(".navbar-brand img.change-on-scroll" ).attr("src", "images/logo.png");
            }
            else {
                jQuery("body").removeClass("smallHeader");
                jQuery(".navbar-brand img.change-on-scroll" ).attr("src", "images/logo.png");
            }
        });

    }
    $("#theme-dark").click(function() {
        $("#theme-css").attr("href", "css/dark.css");
        $.cookie('body_class_dark', $('#theme-css').attr('href'));
        jQuery("#theme-dark").addClass("active");
        jQuery("#theme-light").removeClass("active");
        jQuery(".navbar-brand img" ).attr("src", "images/logo.png");
        jQuery(".navbar-brand img").removeClass("change-on-scroll");
        $.removeCookie('body_class_light');
    });

    var body_class_light = $.cookie('body_class_light');
    if(body_class_light) {
        $('#theme-css').attr('href', body_class_light);
        jQuery("#theme-light").addClass("active");
        jQuery("#theme-dark").removeClass("active");
        jQuery(".navbar-brand img.remain-black" ).attr("src", "images/logo-colored.png");
        jQuery(".navbar-brand img.remain-black").removeClass("change-on-scroll");

        jQuery(window).scroll(function() {
            var scroll = jQuery(window).scrollTop();
            if (scroll >= 1) {
                jQuery(".navbar-brand img.change-on-scroll" ).attr("src", "images/logo-colored.png");
            }
            else {
                jQuery("body").removeClass("smallHeader");
                jQuery(".navbar-brand img.change-on-scroll" ).attr("src", "images/logo.png");
            }
        });

    }
    $("#theme-light").click(function() {
        $("#theme-css").attr("href", "css/light.css");
        $.cookie('body_class_light', $('#theme-css').attr('href'));
        jQuery("#theme-light").addClass("active");
        jQuery("#theme-dark").removeClass("active");
        jQuery(".navbar-brand img" ).attr("src", "images/logo.png");
        jQuery(".navbar-brand img").addClass("change-on-scroll");
        jQuery(".navbar-brand img.remain-black").removeClass("change-on-scroll");
        jQuery(".navbar-brand img.remain-black" ).attr("src", "images/logo-colored.png");
        $.removeCookie('body_class_dark');
        //location.reload();
    });


    var body_class_boxed = $.cookie('body_class_boxed');
    if(body_class_boxed) {
        $('body').attr('class', body_class_boxed);
        $("#our-work-demo, #feedback-sec-wide, #latest-work-slider-wide").hide();
        $("#our-work-container-demo, #feedback-sec-container, #latest-work-slider-container").show();
        $.removeCookie('body_class_wide');
    }
    $("#boxed-layout").click(function() {
        $("body").addClass("boxed-layout");
        $("body").addClass("bg2");
        $("#our-work-demo, #feedback-sec-wide, #latest-work-slider-wide").hide();
        $("#our-work-container-demo, #feedback-sec-container, #latest-work-slider-container").show();
        $.cookie('body_class_boxed', $('body').attr('class'));
        $.removeCookie('body_class_wide');
    });




    var body_class_wide = $.cookie('body_class_wide');
    if(body_class_wide) {
        $('body').attr('class', body_class_wide);
        $("#our-work-demo, #feedback-sec-wide, #latest-work-slider-wide").show();
        $("#our-work-container-demo, #feedback-sec-container, #latest-work-slider-container").hide();
        $.removeCookie('body_class_boxed');
    }
    //var  = $.cookie('body_class_wide');
    $("#wide-layout").click(function() {
        $("body").removeClass("boxed-layout");
        $("body").removeClass("bg2");
        $("#our-work-demo, #feedback-sec-wide, #latest-work-slider-wide").show();
        $("#our-work-container-demo, #feedback-sec-container, #latest-work-slider-container").hide();
        $.cookie('body_class_wide', $('body').attr('class'));
        $.removeCookie('body_class_boxed');
    });



    //theme
    /*jQuery("#theme-light, #light-version").click(function(){
     jQuery("#theme-css" ).attr("href", "css/light.css");
     });
     jQuery("#theme-dark, #dark-version").click(function(){
     jQuery("#theme-css" ).attr("href", "css/dark.css");
     });*/




    var body_classa = $.cookie('body_classa');
    if(body_classa) {
        $('body').attr('class', body_classa);
        $("body").find(".animations-on").addClass("animate-it");
        $.cookie('body_classa', $('body').attr('class'));
        $("#animations-on").addClass("active");
        $("#animations-off").removeClass("active");
        $.removeCookie('body_classo');
    }
    $("#animations-on").click(function() {
        $(".animations-on").addClass("animate-it");
        $("#animations-on").addClass("active");
        $("#animations-off").removeClass("active");
        $.cookie('body_classa', $('body').attr('class'));
        $.removeCookie('body_classo');
    });

    var body_classo = $.cookie('body_classo');
    if(body_classo) {
        $('body').attr('class', body_classo);
        $(".animations-on").removeClass("animate-it");
        $("#animations-off").addClass("active");
        $("#animations-on").removeClass("active");
        $.removeCookie('body_classa');
    }
    $("#animations-off").click(function() {
        $(".animations-on").removeClass("animate-it");
        $.cookie('body_classo', $('body').attr('class'));
        $("#animations-off").addClass("active");
        $("#animations-on").removeClass("active");
        $.removeCookie('body_classa');
    });








    //colors changing DEFAULT
    var body_class_def_col = $.cookie('body_class_def_col');
    if(body_class_def_col) {
        $('#color').attr("href", "css/color-default.css");
        $(".board-icon" ).attr("src", "images/board.png");
        $(".umbrella-icon" ).attr("src", "images/umbrella.png");
        $(".globe-icon" ).attr("src", "images/globe-icon.png");
    }
    $("#default").click(function() {
        $("#color" ).attr("href", "css/color-default.css");
        $(".board-icon" ).attr("src", "images/board.png");
        $(".umbrella-icon" ).attr("src", "images/umbrella.png");
        $(".globe-icon" ).attr("src", "images/globe-icon.png");
        $.cookie('body_class_def_col', $('#color').attr("href", "css/color-default.css"));
        $.removeCookie('body_class_brown_col');
        $.removeCookie('body_class_red_col');
        $.removeCookie('body_class_green_col');
        $.removeCookie('body_class_orange_col');
        $.removeCookie('body_class_pink_col');
        $.removeCookie('body_class_dark_blue_col');
        $.removeCookie('body_class_light_blue_col');
        $.removeCookie('body_class_purple_col');
        $.removeCookie('body_class_grey_col');
        $.removeCookie('body_class_dark_green_col');
        $.removeCookie('body_class_yellow_col');
    });

    //colors changing RED
    var body_class_red_col = $.cookie('body_class_red_col');
    if(body_class_red_col) {
        $('#red').attr("href", "css/color-red.css");
        $(".board-icon" ).attr("src", "images/board-red.png");
        $(".umbrella-icon" ).attr("src", "images/umbrella-red.png");
        $(".globe-icon" ).attr("src", "images/globe-icon-red.png");
    }
    $("#red").click(function() {
        $("#color" ).attr("href", "css/color-red.css");
        $(".board-icon" ).attr("src", "images/board-red.png");
        $(".umbrella-icon" ).attr("src", "images/umbrella-red.png");
        $(".globe-icon" ).attr("src", "images/globe-icon-red.png");
        $.cookie('body_class_red_col', $('#color').attr("href", "css/color-red.css"));
        $.removeCookie('body_class_brown_col');
        $.removeCookie('body_class_def_col');
        $.removeCookie('body_class_green_col');
        $.removeCookie('body_class_orange_col');
        $.removeCookie('body_class_pink_col');
        $.removeCookie('body_class_dark_blue_col');
        $.removeCookie('body_class_light_blue_col');
        $.removeCookie('body_class_purple_col');
        $.removeCookie('body_class_grey_col');
        $.removeCookie('body_class_dark_green_col');
        $.removeCookie('body_class_yellow_col');
    });

    //colors changing green
    var body_class_green_col = $.cookie('body_class_green_col');
    if(body_class_green_col) {
        $('#green').attr("href", "css/color-green.css");
        $(".board-icon" ).attr("src", "images/board-green.png");
        $(".umbrella-icon" ).attr("src", "images/umbrella-green.png");
        $(".globe-icon" ).attr("src", "images/globe-icon-green.png");
    }
    $("#green").click(function() {
        $("#color" ).attr("href", "css/color-green.css");
        $(".board-icon" ).attr("src", "images/board-green.png");
        $(".umbrella-icon" ).attr("src", "images/umbrella-green.png");
        $(".globe-icon" ).attr("src", "images/globe-icon-green.png");
        $.cookie('body_class_green_col', $('#color').attr("href", "css/color-green.css"));
        $.removeCookie('body_class_brown_col');
        $.removeCookie('body_class_def_col');
        $.removeCookie('body_class_red_col');
        $.removeCookie('body_class_orange_col');
        $.removeCookie('body_class_pink_col');
        $.removeCookie('body_class_dark_blue_col');
        $.removeCookie('body_class_light_blue_col');
        $.removeCookie('body_class_purple_col');
        $.removeCookie('body_class_grey_col');
        $.removeCookie('body_class_dark_green_col');
        $.removeCookie('body_class_yellow_col');
    });

    //colors changing orange
    var body_class_orange_col = $.cookie('body_class_orange_col');
    if(body_class_orange_col) {
        $('#color').attr("href", "css/color-orange.css");
        $(".board-icon" ).attr("src", "images/board-orange.png");
        $(".umbrella-icon" ).attr("src", "images/umbrella-orange.png");
        $(".globe-icon" ).attr("src", "images/globe-icon-orange.png");
    }
    $("#orange").click(function() {
        $("#color" ).attr("href", "css/color-orange.css");
        $(".board-icon" ).attr("src", "images/board-orange.png");
        $(".umbrella-icon" ).attr("src", "images/umbrella-orange.png");
        $(".globe-icon" ).attr("src", "images/globe-icon-orange.png");
        $.cookie('body_class_orange_col', $('#color').attr("href", "css/color-orange.css"));
        $.removeCookie('body_class_brown_col');
        $.removeCookie('body_class_def_col');
        $.removeCookie('body_class_green_col');
        $.removeCookie('body_class_red_col');
        $.removeCookie('body_class_pink_col');
        $.removeCookie('body_class_dark_blue_col');
        $.removeCookie('body_class_light_blue_col');
        $.removeCookie('body_class_purple_col');
        $.removeCookie('body_class_grey_col');
        $.removeCookie('body_class_dark_green_col');
        $.removeCookie('body_class_yellow_col');
    });

    //colors changing pink
    var body_class_pink_col = $.cookie('body_class_pink_col');
    if(body_class_pink_col) {
        $('#color').attr("href", "css/color-pink.css");
        $(".board-icon" ).attr("src", "images/board-pink.png");
        $(".umbrella-icon" ).attr("src", "images/umbrella-pink.png");
        $(".globe-icon" ).attr("src", "images/globe-icon-pink.png");
    }
    $("#pink").click(function() {
        $("#color" ).attr("href", "css/color-pink.css");
        $(".board-icon" ).attr("src", "images/board-pink.png");
        $(".umbrella-icon" ).attr("src", "images/umbrella-pink.png");
        $(".globe-icon" ).attr("src", "images/globe-icon-pink.png");
        $.cookie('body_class_pink_col', $('#color').attr("href", "css/color-pink.css"));
        $.removeCookie('body_class_brown_col');
        $.removeCookie('body_class_def_col');
        $.removeCookie('body_class_green_col');
        $.removeCookie('body_class_orange_col');
        $.removeCookie('body_class_red_col');
        $.removeCookie('body_class_dark_blue_col');
        $.removeCookie('body_class_light_blue_col');
        $.removeCookie('body_class_purple_col');
        $.removeCookie('body_class_grey_col');
        $.removeCookie('body_class_dark_green_col');
        $.removeCookie('body_class_yellow_col');
    });

    //colors changing dark-blue
    var body_class_dark_blue_col = $.cookie('body_class_dark_blue_col');
    if(body_class_dark_blue_col) {
        $('#color').attr("href", "css/color-dark-blue.css");
        $(".board-icon" ).attr("src", "images/board-dark-blue.png");
        $(".umbrella-icon" ).attr("src", "images/umbrella-dark-blue.png");
        $(".globe-icon" ).attr("src", "images/globe-icon-dark-blue.png");
    }
    $("#dark-blue").click(function() {
        $("#color" ).attr("href", "css/color-dark-blue.css");
        $(".board-icon" ).attr("src", "images/board-dark-blue.png");
        $(".umbrella-icon" ).attr("src", "images/umbrella-dark-blue.png");
        $(".globe-icon" ).attr("src", "images/globe-icon-dark-blue.png");
        $.cookie('body_class_dark_blue_col', $('#color').attr("href", "css/color-dark-blue.css"));
        $.removeCookie('body_class_brown_col');
        $.removeCookie('body_class_def_col');
        $.removeCookie('body_class_green_col');
        $.removeCookie('body_class_orange_col');
        $.removeCookie('body_class_pink_col');
        $.removeCookie('body_class_red_col');
        $.removeCookie('body_class_light_blue_col');
        $.removeCookie('body_class_purple_col');
        $.removeCookie('body_class_grey_col');
        $.removeCookie('body_class_dark_green_col');
        $.removeCookie('body_class_yellow_col');
    });

    //colors changing light-blue
    var body_class_light_blue_col = $.cookie('body_class_light_blue_col');
    if(body_class_light_blue_col) {
        $('#color').attr("href", "css/color-light-blue.css");
        $(".board-icon" ).attr("src", "images/board-light-blue.png");
        $(".umbrella-icon" ).attr("src", "images/umbrella-light-blue.png");
        $(".globe-icon" ).attr("src", "images/globe-icon-light-blue.png");
    }
    $("#light-blue").click(function() {
        $("#color" ).attr("href", "css/color-light-blue.css");
        $(".board-icon" ).attr("src", "images/board-light-blue.png");
        $(".umbrella-icon" ).attr("src", "images/umbrella-light-blue.png");
        $(".globe-icon" ).attr("src", "images/globe-icon-light-blue.png");
        $.cookie('body_class_light_blue_col', $('#color').attr("href", "css/color-light-blue.css"));
        $.removeCookie('body_class_brown_col');
        $.removeCookie('body_class_def_col');
        $.removeCookie('body_class_green_col');
        $.removeCookie('body_class_orange_col');
        $.removeCookie('body_class_pink_col');
        $.removeCookie('body_class_dark_blue_col');
        $.removeCookie('body_class_red_col');
        $.removeCookie('body_class_purple_col');
        $.removeCookie('body_class_grey_col');
        $.removeCookie('body_class_dark_green_col');
        $.removeCookie('body_class_yellow_col');
    });

    //colors changing yellow
    var body_class_yellow_col = $.cookie('body_class_yellow_col');
    if(body_class_yellow_col) {
        $('#color').attr("href", "css/color-yellow.css");
        $(".board-icon" ).attr("src", "images/board-yellow.png");
        $(".umbrella-icon" ).attr("src", "images/umbrella-yellow.png");
        $(".globe-icon" ).attr("src", "images/globe-icon-yellow.png");
    }
    $("#yellow").click(function() {
        $("#color" ).attr("href", "css/color-yellow.css");
        $(".board-icon" ).attr("src", "images/board-yellow.png");
        $(".umbrella-icon" ).attr("src", "images/umbrella-yellow.png");
        $(".globe-icon" ).attr("src", "images/globe-icon-yellow.png");
        $.cookie('body_class_yellow_col', $('#color').attr("href", "css/color-yellow.css"));
        $.removeCookie('body_class_brown_col');
        $.removeCookie('body_class_def_col');
        $.removeCookie('body_class_green_col');
        $.removeCookie('body_class_orange_col');
        $.removeCookie('body_class_pink_col');
        $.removeCookie('body_class_dark_blue_col');
        $.removeCookie('body_class_light_blue_col');
        $.removeCookie('body_class_purple_col');
        $.removeCookie('body_class_grey_col');
        $.removeCookie('body_class_dark_green_col');
        $.removeCookie('body_class_red_col');
    });

    //colors changing dark-green
    var body_class_dark_green_col = $.cookie('body_class_dark_green_col');
    if(body_class_dark_green_col) {
        $('#color').attr("href", "css/color-dark-green.css");
        $(".board-icon" ).attr("src", "images/board-dark-green.png");
        $(".umbrella-icon" ).attr("src", "images/umbrella-dark-green.png");
        $(".globe-icon" ).attr("src", "images/globe-icon-dark-green.png");
    }
    $("#dark-green").click(function() {
        $("#color" ).attr("href", "css/color-dark-green.css");
        $(".board-icon" ).attr("src", "images/board-dark-green.png");
        $(".umbrella-icon" ).attr("src", "images/umbrella-dark-green.png");
        $(".globe-icon" ).attr("src", "images/globe-icon-dark-green.png");
        $.cookie('body_class_dark_green_col', $('#color').attr("href", "css/color-dark-green.css"));
        $.removeCookie('body_class_brown_col');
        $.removeCookie('body_class_def_col');
        $.removeCookie('body_class_green_col');
        $.removeCookie('body_class_orange_col');
        $.removeCookie('body_class_pink_col');
        $.removeCookie('body_class_dark_blue_col');
        $.removeCookie('body_class_light_blue_col');
        $.removeCookie('body_class_purple_col');
        $.removeCookie('body_class_grey_col');
        $.removeCookie('body_class_red_col');
        $.removeCookie('body_class_yellow_col');
    });

    //colors changing grey
    var body_class_grey_col = $.cookie('body_class_grey_col');
    if(body_class_grey_col) {
        $('#color').attr("href", "css/color-grey.css");
        $(".board-icon" ).attr("src", "images/board-grey.png");
        $(".umbrella-icon" ).attr("src", "images/umbrella-grey.png");
        $(".globe-icon" ).attr("src", "images/globe-icon-grey.png");
    }
    $("#grey").click(function() {
        $("#color" ).attr("href", "css/color-grey.css");
        $(".board-icon" ).attr("src", "images/board-grey.png");
        $(".umbrella-icon" ).attr("src", "images/umbrella-grey.png");
        $(".globe-icon" ).attr("src", "images/globe-icon-grey.png");
        $.cookie('body_class_grey_col', $('#color').attr("href", "css/color-grey.css"));
        $.removeCookie('body_class_brown_col');
        $.removeCookie('body_class_def_col');
        $.removeCookie('body_class_green_col');
        $.removeCookie('body_class_orange_col');
        $.removeCookie('body_class_pink_col');
        $.removeCookie('body_class_dark_blue_col');
        $.removeCookie('body_class_light_blue_col');
        $.removeCookie('body_class_purple_col');
        $.removeCookie('body_class_red_col');
        $.removeCookie('body_class_dark_green_col');
        $.removeCookie('body_class_yellow_col');
    });

    //colors changing purple
    var body_class_purple_col = $.cookie('body_class_purple_col');
    if(body_class_purple_col) {
        $('#color').attr("href", "css/color-purple.css");
        $(".board-icon" ).attr("src", "images/board-purple.png");
        $(".umbrella-icon" ).attr("src", "images/umbrella-purple.png");
        $(".globe-icon" ).attr("src", "images/globe-icon-purple.png");
    }
    $("#purple").click(function() {
        $("#color" ).attr("href", "css/color-purple.css");
        $(".board-icon" ).attr("src", "images/board-purple.png");
        $(".umbrella-icon" ).attr("src", "images/umbrella-purple.png");
        $(".globe-icon" ).attr("src", "images/globe-icon-purple.png");
        $.cookie('body_class_purple_col', $('#color').attr("href", "css/color-purple.css"));
        $.removeCookie('body_class_brown_col');
        $.removeCookie('body_class_def_col');
        $.removeCookie('body_class_green_col');
        $.removeCookie('body_class_orange_col');
        $.removeCookie('body_class_pink_col');
        $.removeCookie('body_class_dark_blue_col');
        $.removeCookie('body_class_light_blue_col');
        $.removeCookie('body_class_red_col');
        $.removeCookie('body_class_grey_col');
        $.removeCookie('body_class_dark_green_col');
        $.removeCookie('body_class_yellow_col');
    });

    //colors changing brown
    var body_class_brown_col = $.cookie('body_class_brown_col');
    if(body_class_brown_col) {
        $('#color').attr("href", "css/color-brown.css");
        $(".board-icon" ).attr("src", "images/board-brown.png");
        $(".umbrella-icon" ).attr("src", "images/umbrella-brown.png");
        $(".globe-icon" ).attr("src", "images/globe-icon-brown.png");
    }
    $("#brown").click(function() {
        $("#color" ).attr("href", "css/color-brown.css");
        $(".board-icon" ).attr("src", "images/board-brown.png");
        $(".umbrella-icon" ).attr("src", "images/umbrella-brown.png");
        $(".globe-icon" ).attr("src", "images/globe-icon-brown.png");
        $.cookie('body_class_brown_col', $('#color').attr("href", "css/color-brown.css"));
        $.removeCookie('body_class_red_col');
        $.removeCookie('body_class_def_col');
        $.removeCookie('body_class_green_col');
        $.removeCookie('body_class_orange_col');
        $.removeCookie('body_class_pink_col');
        $.removeCookie('body_class_dark_blue_col');
        $.removeCookie('body_class_light_blue_col');
        $.removeCookie('body_class_purple_col');
        $.removeCookie('body_class_grey_col');
        $.removeCookie('body_class_dark_green_col');
        $.removeCookie('body_class_yellow_col');
    });








    jQuery("body").removeClass("smallHeader");







    // bg
    jQuery(".patterns li a").click(function(){
        jQuery("body").addClass("boxed-layout");
    });
    jQuery("#one").click(function(){
        jQuery("body").addClass("bg1");
        jQuery("body").removeClass("bg2 bg3 bg4 bg5 bg6 bg7 bg8 bg9 bg10 bg11 bg12");
    });
    jQuery("#two").click(function(){
        jQuery("body").addClass("bg2");
        jQuery("body").removeClass("bg1 bg3 bg4 bg5 bg6 bg7 bg8 bg9 bg10 bg11 bg12");
    });
    jQuery("#three").click(function(){
        jQuery("body").addClass("bg3");
        jQuery("body").removeClass("bg1 bg2 bg4 bg5 bg6 bg7 bg8 bg9 bg10 bg11 bg12");
    });
    jQuery("#four").click(function(){
        jQuery("body").addClass("bg4");
        jQuery("body").removeClass("bg1 bg2 bg3 bg5 bg6 bg7 bg8 bg9 bg10 bg11 bg12");
    });
    jQuery("#five").click(function(){
        jQuery("body").addClass("bg5");
        jQuery("body").removeClass("bg1 bg2 bg3 bg4 bg6 bg7 bg8 bg9 bg10 bg11 bg12");
    });
    jQuery("#six").click(function(){
        jQuery("body").addClass("bg6");
        jQuery("body").removeClass("bg2 bg3 bg4 bg5 bg1 bg7 bg8 bg9 bg10 bg11 bg12");
    });
    jQuery("#seven").click(function(){
        jQuery("body").addClass("bg7");
        jQuery("body").removeClass("bg2 bg3 bg4 bg5 bg6 bg1 bg8 bg9 bg10 bg11 bg12");
    });
    jQuery("#eight").click(function(){
        jQuery("body").addClass("bg8");
        jQuery("body").removeClass("bg2 bg3 bg4 bg5 bg6 bg1 bg1 bg9 bg10 bg11 bg12");
    });
    jQuery("#nine").click(function(){
        jQuery("body").addClass("bg9");
        jQuery("body").removeClass("bg2 bg3 bg4 bg5 bg6 bg1 bg8 bg1 bg10 bg11 bg12");
    });
    jQuery("#ten").click(function(){
        jQuery("body").addClass("bg10");
        jQuery("body").removeClass("bg2 bg3 bg4 bg5 bg6 bg1 bg8 bg9 bg1 bg11 bg12");
    });
    jQuery("#eleven").click(function(){
        jQuery("body").addClass("bg11");
        jQuery("body").removeClass("bg2 bg3 bg4 bg5 bg6 bg1 bg8 bg9 bg10 bg1 bg12");
    });
    jQuery("#twelve").click(function(){
        jQuery("body").addClass("bg12");
        jQuery("body").removeClass("bg2 bg3 bg4 bg5 bg6 bg1 bg8 bg9 bg10 bg11 bg1");
    });






    //footers

    //jQuery("#footer1").load("footer/footer1.html");
    // header switcher
    jQuery("#footer1").click(function(){
        jQuery("#footer-1").show();
        jQuery("#footer-1").removeClass("footer-boxed-light");
        jQuery("#footer-2.footer").find(".social").removeClass("dark");
        jQuery("#footer-1").find(".social").removeClass("dark");
        jQuery("#footer-2").hide();
        jQuery("#footer-3").hide();
    });

    jQuery("#footer2").click(function(){
        jQuery("#footer-1").show();
        jQuery("#footer-1").addClass("footer-boxed-light");
        jQuery("#footer-1.footer-boxed-light").find(".social").addClass("dark");
        jQuery("#footer-2").hide();
        jQuery("#footer-3").hide();
    });



    jQuery("#footer3").click(function(){
        jQuery("#footer-1").hide();
        jQuery("#footer-2").show();
        jQuery("#footer-2").addClass("footer-wide-light");
        jQuery("#footer-2.footer").find(".social").addClass("dark");
        jQuery("#footer-3").hide();
    });
    jQuery("#footer4").click(function(){
        jQuery("#footer-1").hide();
        jQuery("#footer-2").show();
        jQuery("#footer-2").removeClass("footer-wide-light");
        jQuery("#footer-2.footer").find(".social").removeClass("dark");
        jQuery("#footer-3").hide();
    });



    jQuery("#footer5").click(function(){
        jQuery("#footer-1").hide();
        jQuery("#footer-2").hide();
        jQuery("#footer-3").show();
        jQuery("#footer-3").removeClass("light");
    });
    jQuery("#footer6").click(function(){
        jQuery("#footer-1").hide();
        jQuery("#footer-2").hide();
        jQuery("#footer-3").show();
        jQuery("#footer-3").addClass("light");
    });






});
// Only for demo purpose
jQuery(document).ready(function(){
    //jQuery("#header-change-demo").load("header/header1.html",true);
    // header switcher

    jQuery("#header1").click(function(){
        jQuery("#header-1").show();
        jQuery("#header-2").hide();
        jQuery("#header-3").hide();
        jQuery("#header-4").hide();
        jQuery("#header-4").addClass("important");
        jQuery("#header-files" ).attr("src", "js/header1-rel-files.js");
    });


    jQuery("#header2").click(function(){
        jQuery("#header-1").hide();
        jQuery("#header-2").show();
        jQuery("#header-3").hide();
        jQuery("#header-4").hide();
        jQuery("#header-4").addClass("important");
        jQuery("#header-files" ).attr("src", "js/header2-rel-files.js");
        //jQuery(".navbar-brand img" ).hide();
        //jQuery(".navbar-brand img.logo-demo" ).show();
        //jQuery(".navbar-brand img.logo-demo" ).attr("src", "images/logo-colored.png");
    });
    jQuery("#header3").click(function(){
        jQuery("#header-1").hide();
        jQuery("#header-2").hide();
        jQuery("#header-3").show();
        jQuery("#header-4").hide();
        jQuery("#header-4").addClass("important");
        jQuery("#header-files" ).attr("src", "js/header3-rel-files.js");
        jQuery("#header-4").addClass("important");
    });
    jQuery("#header4").click(function(){
        jQuery("#header-1").hide();
        jQuery("#header-2").hide();
        jQuery("#header-3").hide();
        jQuery("#header-4").show();
        jQuery("#header-4").removeClass("important");
        jQuery("#header-files" ).attr("src", "js/header4-rel-files.js");
    });



    jQuery(".niceScroll").niceScroll();

});