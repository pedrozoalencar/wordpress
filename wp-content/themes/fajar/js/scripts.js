(function () {
    "use strict";
    /* ------------------------------------------------------------------------ */
    /* LOADER *///
    /* ------------------------------------------------------------------------  */
    jQuery(window).load(function() { // makes sure the whole site is loaded
        jQuery('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website.
        jQuery('body').delay(350).css({'overflow-x':'hidden', 'overflow-y':'visible'});
    });
    /* ------------------------------------------------------------------------ 
     TOOLTIP
     ------------------------------------------------------------------------ */
    jQuery('[data-toggle="tooltip"]').tooltip();
    /* ------------------------------------------------------------------------ 
     TOGGLE SEARCH CUSTOM FUNCTION
     ------------------------------------------------------------------------ */
    jQuery("#show-search").on("click", function(){
        jQuery("#search").fadeIn();
        return false;
    });
    jQuery("#close-search").on("click", function(){
        jQuery("#search").fadeOut();
        return false;
    });
    /* ------------------------------------------------------------------------ 
     OUR WORK 
     ------------------------------------------------------------------------ */
    jQuery(".our-work, .our-work-container").owlCarousel({
        items: 4,
        itemsDesktop: [1199, 4],
        itemsDesktopSmall: [979, 3],
        itemsTablet: [768, 2],
        itemsMobile: [479, 1]
    });
    /* ------------------------------------------------------------------------ 
     TEXT SLIDER 
     ------------------------------------------------------------------------ */
    jQuery(".text-slider").owlCarousel({
        singleItem: true
    });
    /* ------------------------------------------------------------------------ 
     IMAGE ROTATER
     ------------------------------------------------------------------------ */
    jQuery(".img-slider, .image-slider").owlCarousel({
        navigation: true,
        singleItem: true
    });
    /* ------------------------------------------------------------------------ 
     LATEST WORK SLIDER
     ------------------------------------------------------------------------ */
    jQuery(".latest-work-slider").owlCarousel({
        singleItem: true,
        navigation: true,
        transitionStyle : "fade"
    });




    /* ------------------------------------------------------------------------ 
     RECENT WORK
     ------------------------------------------------------------------------ */
    jQuery(".recent-work").owlCarousel({
        items: 3,
        itemsDesktop: [1199, 3],
        itemsDesktopSmall: [979, 3],
        itemsTablet: [768, 2],
        itemsMobile: [479, 1],
        navigation: true
    });



    /* ------------------------------------------------------------------------ 
     IMG SLIDER
     ------------------------------------------------------------------------ */
    jQuery(".img-slider-with-thumbs").responsiveSlides({
        manualControls: '.img-slider-with-thumbs-pager',
        maxwidth: 1000
    });




    /* ------------------------------------------------------------------------ 
     HISTORY SLIDER
     ------------------------------------------------------------------------ */
    jQuery("#history-slider").responsiveSlides({
        maxwidth: 1200,
        manualControls: '#history-slider-pager',
        timeout: 10000E3,
        speed: 700
    });




    /* ------------------------------------------------------------------------ 
     TWEET SLIDER
     ------------------------------------------------------------------------ */
    jQuery(".tweet-slider").responsiveSlides({
        maxwidth: 550
    });




    /* ------------------------------------------------------------------------ 
     LOGOS CAROUSEL
     ------------------------------------------------------------------------ */
    jQuery(".logos-carousel, .logos-carousel-demo").owlCarousel({
        items: 4,
        itemsDesktop: [1199, 4],
        itemsDesktopSmall: [979, 3],
        itemsTablet: [768, 2],
        itemsMobile: [479, 1]
    });

    jQuery(".logos-carousel-5-items").owlCarousel({
        items: 1,
        itemsDesktop: [1199, 1],
        itemsDesktopSmall: [979, 1],
        itemsTablet: [768, 1],
        itemsMobile: [479, 1]
    });




    /* ------------------------------------------------------------------------ 
     COMPANY PARTNERS
     ------------------------------------------------------------------------ */
    jQuery(".company-partners-carousel").owlCarousel({
        items: 3,
        itemsDesktop: [1199, 3],
        itemsDesktopSmall: [979, 3],
        itemsTablet: [768, 2],
        itemsMobile: [479, 1]
    });





    /* ------------------------------------------------------------------------ 
     LOGO SLIDER 1
     ------------------------------------------------------------------------ */
    jQuery(".logo1-rotater").responsiveSlides({
        maxwidth: 1000,
        timeout: 3E3,
        speed: 700
    });




    /* ------------------------------------------------------------------------ 
     LOGO SLIDER 2
     ------------------------------------------------------------------------ */
    jQuery(".logo2-rotater").responsiveSlides({
        maxwidth: 1000,
        timeout: 4E3,
        speed: 700
    });




    /* ------------------------------------------------------------------------ 
     LOGO SLIDER 3
     ------------------------------------------------------------------------ */
    jQuery(".logo3-rotater").responsiveSlides({
        maxwidth: 1000,
        timeout: 2E3,
        speed: 700
    });




    /* ------------------------------------------------------------------------ 
     LOGO SLIDER 4
     ------------------------------------------------------------------------ */
    jQuery(".logo4-rotater").responsiveSlides({
        maxwidth: 1000,
        timeout: 5E3,
        speed: 700
    });




    /* ------------------------------------------------------------------------ 
     LOGO SLIDER 5
     ------------------------------------------------------------------------ */
    jQuery(".logo5-rotater").responsiveSlides({
        maxwidth: 1000,
        timeout: 6E3,
        speed: 700
    });



    /* ------------------------------------------------------------------------ 
     COMPANY ENVIORNMENT SLIDER
     ------------------------------------------------------------------------ */
    jQuery("#company-environment-slider").responsiveSlides({
        maxwidth: 1170,
        pager: true
    });




    /* ------------------------------------------------------------------------ 
     COMPANY PARTNERS TABS
     ------------------------------------------------------------------------ */
    jQuery('.company-partners-tabs, .careers-tabs').easyResponsiveTabs({
        type: 'default', //Types: default, vertical, accordion           
        width: 'auto', //auto or any width like 600px
        fit: true,   // 100% fit in a container
        closed: 'accordion' // Start closed if in accordion view
    });

    /* ------------------------------------------------------------------------
     BG IMG SLIDER
     ------------------------------------------------------------------------ */
    jQuery(".bg-image-slides").responsiveSlides({
        maxwidth: 10000,
        nav: true
    });



    /* ------------------------------------------------------------------------ 
     FORM VALIDATION [use id to identify]
     ------------------------------------------------------------------------ */
    jQuery("#subscribe").validationEngine();
    /* ------------------------------------------------------------------------ 
     FULL WIDTH EMBEDED VIDEO
     ------------------------------------------------------------------------ */
    var jQueryallVideos = jQuery("iframe[src^='http://player.vimeo.com'], iframe[src^='http://www.youtube.com'], object, embed"),
        jQueryfluidEl = jQuery("figure");

    jQueryallVideos.each(function() {
        jQuery(this)
            // jQuery .data does not work on object/embed elements
            .attr('data-aspectRatio', this.height / this.width)
            .removeAttr('height')
            .removeAttr('width');
    });
    jQuery(window).resize(function() {
        var newWidth = jQueryfluidEl.width();
        jQueryallVideos.each(function() {

            var jQueryel = jQuery(this);
            jQueryel
                .width(newWidth)
                .height(newWidth * jQueryel.attr('data-aspectRatio'));

        });
    }).resize();
    /* ------------------------------------------------------------------------ 
     TEXT ROTATORS 
     ------------------------------------------------------------------------ */
    jQuery(".text-rotator .rotate").textrotator({
        animation: "flipUp",
        speed: 1750
    });




    /* ------------------------------------------------------------------------ 
     PARALLAX 
     ------------------------------------------------------------------------ */
    var mobiles = jQuery(window).width();
    if (mobiles >= 992) {
        jQuery.stellar({
            horizontalScrolling: false,
            verticalOffset: 0
        });
    }




    /* ------------------------------------------------------------------------ 
     CHECK OUT CUSTOM FUNCTION
     ------------------------------------------------------------------------ */
    jQuery("#checkout-btn").on("click", function(){
        jQuery("#checkout").addClass("opened");
        return false;
    });
    jQuery("#checkout-close-btn").on("click", function(){
        jQuery("#checkout").removeClass("opened");
        return false;
    });




    /* ------------------------------------------------------------------------ 
     TOGGLE FAQ
     ------------------------------------------------------------------------ */
    jQuery(".toggle h3").on("click", function(){
        jQuery(this).parent(".toggle").find(".toggle-content").slideToggle();
        jQuery(this).parent(".toggle").toggleClass("active");
        return false;
    });

    /* ------------------------------------------------------------------------
     RECENT NEWS
     ------------------------------------------------------------------------ */
    jQuery(".recent-news-carousel").owlCarousel({
        items: 3,
        itemsDesktop: [1199, 3],
        itemsDesktopSmall: [979, 3],
        itemsTablet: [768, 2],
        itemsMobile: [479, 1]
    });



    /* ------------------------------------------------------------------------ */
    /* ANIMATIONS *///
    /* ------------------------------------------------------------------------ */
    jQuery('.animate-it').appear();
    jQuery(document.body).on('appear', '.animate-it', function(e, jQueryaffected) {
        var fadeDelayAttr;
        var fadeDelay;
        jQuery(this).each(function(){
            if (jQuery(this).data("delay")) {
                fadeDelayAttr = jQuery(this).data("delay")
                fadeDelay = fadeDelayAttr;
            } else {
                fadeDelay = 0;
            }
            jQuery(this).delay(fadeDelay).queue(function(){
                jQuery(this).addClass('animated').clearQueue();
            });
        })
    });





    /* ------------------------------------------------------------------------ 
     SMOOTH SCROLLING
     ------------------------------------------------------------------------ */
    jQuery('.scroll').each( function() {
        var jQuerythis = jQuery(this),
            target = this.hash;
        jQuery(this).click(function (e) {
            e.preventDefault();
            if( jQuerythis.length > 0 ) {
                if(jQuerythis.attr('href') == '#' ) {
                } else {
                    jQuery('html, body').animate({
                        scrollTop: (jQuery(target).offset().top) - -1
                    }, 1000);
                }
            }
        });
    });




    /* ------------------------------------------------------------------------ 
     TESTIMONIALS CAROUSEL
     ------------------------------------------------------------------------ */
    jQuery(".testimonial-carousel, .testimonial-carousel-demo").owlCarousel({
        singleItem: true
    });




    /* ------------------------------------------------------------------------ 
     FANCYBOX
     ------------------------------------------------------------------------ */
    jQuery('.fancybox').fancybox({
        maxWidth	: 600,
        maxHeight	: 800,
        fitToView	: false,
        width		: '100%',
        height		: '70%',
        autoSize	: false,
        autoHeight : true,
        closeClick	: false,
        openEffect	: 'none',
        closeEffect	: 'none'
    });





    /* ------------------------------------------------------------------------ 
     FANCYBOX MEDIA
     ------------------------------------------------------------------------ */
    jQuery('.fancybox-media').fancybox({
        openEffect  : 'none',
        closeEffect : 'none',
        helpers : {
            media : {}
        }
    });





    /* ------------------------------------------------------------------------ 
     OUR PROCESS TABS
     ------------------------------------------------------------------------ */
    jQuery('.our-process-tab').easyResponsiveTabs({
        type: 'default', //Types: default, vertical, accordion           
        width: 'auto', //auto or any width like 600px
        fit: true,   // 100% fit in a container
        closed: 'accordion' // Start closed if in accordion view
    });




    /* ------------------------------------------------------------------------ 
     NORMAL TABS
     ------------------------------------------------------------------------ */
    jQuery('.normal-tabs').easyResponsiveTabs({
        type: 'default', //Types: default, vertical, accordion           
        width: 'auto', //auto or any width like 600px
        fit: true,   // 100% fit in a container
        closed: 'accordion' // Start closed if in accordion view
    });




    /* ------------------------------------------------------------------------ 
     NORMAL TABS [with bordered nav]
     ------------------------------------------------------------------------ */
    jQuery('.normal-tabs-bordered-btns').easyResponsiveTabs({
        type: 'default', //Types: default, vertical, accordion           
        width: 'auto', //auto or any width like 600px
        fit: true,   // 100% fit in a container
        closed: 'accordion' // Start closed if in accordion view
    });




    /* ------------------------------------------------------------------------ 
     VERTICAL TABS [with bordered nav]
     ------------------------------------------------------------------------ */
    jQuery('#verticalTab').easyResponsiveTabs({
        type: 'vertical',
        width: 'auto',
        fit: true
    });




    /* ------------------------------------------------------------------------ 
     MY PROFILE TABS 
     ------------------------------------------------------------------------ */
    jQuery('#my-profile').easyResponsiveTabs({
        type: 'default', //Types: default, vertical, accordion           
        width: 'auto', //auto or any width like 600px
        fit: true,   // 100% fit in a container
        closed: 'accordion' // Start closed if in accordion view
    });











    /* ------------------------------------------------------------------------ 
     PORTFOLIO WIDGET
     ------------------------------------------------------------------------ */
    jQuery('#Container-portfolio').mixItUp();





    /* ------------------------------------------------------------------------ 
     SKILLS WIDGET
     ------------------------------------------------------------------------ */
    jQuery('.skills-widget').appear();
    jQuery(document.body).on('appear', '.skills-widget', function(e, jQueryaffected) {
        var fadeDelayAttr;
        var fadeDelay;

        jQuery(this).each(function(){

            if (jQuery(this).data("delay")) {
                fadeDelayAttr = jQuery(this).data("delay")
                fadeDelay = fadeDelayAttr;
            } else {
                fadeDelay = 0;
            }
            jQuery(this).delay(fadeDelay).queue(function(){
                jQuery('.skills-widget .progress').each(function(){
                    jQuery(this).css('width', jQuery(this).attr('data-width') + '%'), jQuery(this).find('.progress-bar').css('overflow', 'visible')
                });

            });
        })
    });





    /* ------------------------------------------------------------------------ 
     RANGE SLIDER [price filter]
     ------------------------------------------------------------------------ */
    jQuery( "#slider-range" ).slider({
        range: true,
        min: 24781,
        max: 50000,
        values: [ 28781,45000],

        slide: function( event, ui ) {

            jQuery( "#amount" ).val( "jQuery" + ui.values[ 0 ] + " - jQuery" + ui.values[ 1 ] );
        },

        stop: function(event, ui) {
            jQuery( "#sort_price_max" ).val(ui.values[ 1 ] );
            jQuery( "#sort_price_min" ).val(ui.values[ 0 ] );
        }
    });
    jQuery( "#amount" ).val( "jQuery" + jQuery( "#slider-range" ).slider( "values", 0 ) +
        " - jQuery" + jQuery( "#slider-range" ).slider( "values", 1 ) );





    /* ------------------------------------------------------------------------ 
     ITEM COUNTER CUSTOM SCRIPT
     ------------------------------------------------------------------------ */
    jQuery('.pluss-item').each(function(){
        jQuery(this).on("click", function() {
            var itemcount= jQuery(this).prev().val();
            itemcount++;
            jQuery(this).prev().val(itemcount);
            return false;
        });
    });

    jQuery('.less-item').each(function(){
        jQuery(this).on("click", function() {
            var itemcount= jQuery(this).next().val();
            itemcount--;
            jQuery(this).next().val(itemcount);
            return false;
        });
    });



    jQuery('.verticalTab').easyResponsiveTabs({
        type: 'vertical',
        width: 'auto',
        fit: true
    });

    /* ------------------------------------------------------------------------ 
     DELETE LIST [my orders list delete list custom function]
     ------------------------------------------------------------------------ */
    jQuery(".hide-btn").on("click", function(){
        jQuery(this).parent().parent(".hide-this").hide();
        return false;
    });
    /* ------------------------------------------------------------------------
     MASONARY
     ------------------------------------------------------------------------ */
    jQuery(window).load( function() {
        jQuery('#container').BlocksIt({
            numOfCol: 3,
            offsetX: 15,
            offsetY: 19
        });
    });



    //window resize
    var currentWidth = 1170;
    jQuery(window).resize(function() {
        var winWidth = jQuery(window).width();
        var conWidth;
        var col;


        if(winWidth < 480) {
            conWidth = 320;
            col = 1
        } else if(winWidth < 660) {
            conWidth = 440;
            col = 2
        } else if(winWidth < 880) {
            conWidth = 660;
            col = 3
        } else if(winWidth < 1100) {
            conWidth = 880;
            col = 3;
        } else {
            conWidth = 1700;
            col = 3;
        }

        if(conWidth != currentWidth) {
            currentWidth = conWidth;
            jQuery('#container').width(conWidth);
            jQuery('#container').BlocksIt({
                numOfCol: col,
                offsetX: 15,
                offsetY: 19
            });
        }
    });
    // Search Widgets
    // Prepend Search Class
    jQuery('.sidebar-widget .searchform').each(function(){
        jQuery(this).addClass('search-widget');
    });
    jQuery('.sidebar-widget .woocommerce-product-search').each(function(){
        jQuery(this).addClass('search-widget');
    });
    // Search Placeholder
    jQuery('.sidebar-widget .searchform input[type=text]').each(function(){
        jQuery(this).attr('placeholder','Search here');
    });
    jQuery('.sidebar-widget .woocommerce-product-search input[type=search]').each(function(){
        jQuery(this).attr('placeholder','Search product');
    });
    // Search Button
    jQuery('.sidebar-widget .searchform #searchsubmit').each(function(){
        jQuery(this).addClass('search-icon');
    });
    jQuery('.sidebar-widget .woocommerce-product-search input[type=submit]').each(function(){
        jQuery(this).addClass('search-icon');
    });
    jQuery('.wpcf7-submit').each(function(){
        jQuery(this).addClass('btn btn-medium btn-dark btn-square');
    });
    /* ------------------------------------------------------------------------
     PORTFOLIO LOAD MORE
     ------------------------------------------------------------------------ */
    jQuery("#load-more-portfolio-btn").click(function(){
        jQuery('.d-none').each(function(){
            jQuery(this).removeClass('d-none');
        });
        jQuery(this).hide();
    });
    /* Change Stars For Review */
    jQuery(document).ready(function(){
        jQuery('p.comment-form-rating p.stars span').html('<a class="star-5" href="#">5</a><a class="star-4" href="#">4</a><a class="star-3" href="#">3</a><a class="star-2" href="#">2</a><a class="star-1" href="#">1</a>');
    });
    /* ------------------------------------------------------------------------
     ADD REVIEW CUSTOM SCRIPT [open/close]
     ------------------------------------------------------------------------ */
    jQuery("#add-review-btn").click(function(){
        jQuery(".add-review-form").slideDown();
    });
    jQuery(".review-form-close").click(function(){
        jQuery(".add-review-form").slideUp();
    });
    /* ------------------------------------------------------------------------
     PRODUCT DETAIL
     ------------------------------------------------------------------------ */
    jQuery("#product-detail-slider").responsiveSlides({
        maxwidth: 1000,
        timeout: 3E3,
        pager: true,
        speed: 700
    });
    /* Get Count & Embed Star in Sidebar Widget */
    jQuery(document).ready(function(){
        jQuery('.star-rating .rating').each(function(){
            var star_value = jQuery(this).text();
            if(star_value % 1 != 0){
                var loopa = Math.floor(star_value);
                var loopa_half = 'true';
            } else {
                var loopa = star_value;
                var loopa_half = 'false';
            }
            var conc = '<div class="ratings">';
            for(var i = 0; i < loopa; i++) {
                conc = conc +'<i class="fa fa-star"></i>';
            }
            if(loopa_half == 'true'){
                conc = conc +'<i class="fa fa-star-half-o"></i>';
            }
            conc = conc + '</div>';
            jQuery(this).text('');
            jQuery(this).parent().html(conc);

        });
    });
    /* Contact Info & History li Counts **/
    jQuery(document).ready(function(){
        // Contact
        var li_count = jQuery('.contact-info-widget-boxed li').length;
        jQuery('.contact-info-widget-boxed li').each(function(){
            var percent = 100/li_count;
            jQuery(this).css('width',percent+'%');
        });
        // History Slider
        var hli_count = jQuery('#history-slider-pager li').length;
        jQuery('#history-slider-pager li').each(function(){
            var percent = 100/hli_count;
            jQuery(this).css('width',percent+'%');
        });
        // Partners
        var pli_count = jQuery('.partners-name li').length;
        jQuery('.partners-name li').each(function(){
            var percent = 100/pli_count;
            jQuery(this).css('width',percent+'%');
        });

    });
    jQuery(document).ready(function(){
        /* Headers */
        // Center Menu
        jQuery('.header-center ul.sub-menu').each(function(){
            jQuery(this).addClass('dropdown-menu');
            jQuery(this).attr("role","menu");
        });
        jQuery('.header-center li.menu-item-has-children').each(function(){
            jQuery(this).addClass('dropdown');
        });
        jQuery('.header-center li.menu-item-has-children > a').each(function(){
            jQuery(this).addClass('dropdown-toggle');
            jQuery(this).attr("data-toggle","dropdown");
        });
        jQuery('.header-center li.menu-item-has-children a').each(function(){
            jQuery(this).append('<i class="icon-angle-right"></i>');
        });
        jQuery('.navbar-nav.header-four > li > a').each(function(){
            var texto = jQuery(this).text();
            jQuery(this).html('<span>'+texto+'</span>');
        });
        /* Footers */
        // Footer 4
        jQuery('.footer.footer-wide-light').find('.social').each(function(){
            jQuery(this).addClass('dark');
        });
        // Footer 2
        jQuery('footer .ufl').find('.menu').each(function(){
            jQuery(this).addClass('list-unstyled footer-nav-widget');
        });
        jQuery('footer .footer-nav-widget li a').each(function(){
            jQuery(this).append('<i class="icon-angle-right"></i>');
        });
        if(jQuery('header').hasClass('navbar-bottom')){
            jQuery('.sub-page.control-page-smallHeader').css('padding-top','120px');
        }
    });

})(jQuery);