/* DOKUWIKI:include_once jquery.marquee.js */

jQuery( document ).ready(function() {

 var $mq = jQuery('.marquee').marquee(JSINFO['plugin_marquee']);

    jQuery('.marquee').css('overflow','hidden');
    jQuery('.marquee').css('background-color','lightsteelblue');
    jQuery('.marquee').click(function () {
        $mq.marquee('toggle');
    })
});
