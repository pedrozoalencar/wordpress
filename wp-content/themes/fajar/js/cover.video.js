/* Covervid [full screen video] */
!function(t){"use strict";jQuery.fn.extend({coverVid:function(r,e){function n(){var t=a.parent().height(),n=a.parent().width(),s=r,o=e,i=t/o,f=n/s;a.css({position:"absolute",top:"50%",left:"50%","-webkit-transform":"translate(-50%, -50%)","-moz-transform":"translate(-50%, -50%)","-ms-transform":"translate(-50%, -50%)","-o-transform":"translate(-50%, -50%)",transform:"translate(-50%, -50%)"}),a.parent().css("overflow","hidden"),a.css(f>i?{height:"auto",width:n}:{height:t,width:"auto"})}t(document).ready(n),t(window).resize(n);var a=this}})}(jQuery);
(function () {
    "use strict";
    jQuery('.covervid-video').each(function(){
        jQuery(this).coverVid(1920, 1080);
        jQuery(this).get(0).play();
    });
})(jQuery);