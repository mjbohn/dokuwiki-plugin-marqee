/* DOKUWIKI:include_once jquery.marquee.js */

jQuery( document ).ready(function() {

 var $mq = jQuery('.plugin_marquee').marquee(JSINFO['plugin_marquee']);

    jQuery(".plugin_marquee").css("border-radius",JSINFO['plugin_marquee']['border-radius']);

    if(JSINFO['plugin_marquee']['showBorder']){
        jQuery(".plugin_marquee").css("border",JSINFO['plugin_marquee']['border']);
    }

    jQuery(".plugin_marquee ul").addClass('plugin_marquee');
    jQuery(".plugin_marquee li").addClass('plugin_marquee');

    jQuery(".plugin_marquee").css("width",JSINFO['plugin_marquee']['width']);
    jQuery(".plugin_marquee").css("height",JSINFO['plugin_marquee']['height']);
    // jQuery(".plugin_marquee").css("color",JSINFO['plugin_marquee']['textcolor']);
    jQuery(".plugin_marquee").css("background-color",JSINFO['plugin_marquee']['background-color']);
    jQuery('.plugin_marquee').click(function () {
        $mq.marquee('toggle');
    })
});
