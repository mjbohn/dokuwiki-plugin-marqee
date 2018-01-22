<?php
/**
 * english language file for marquee plugin
 *
 * @author Michael Bohn <mjbohn@gmail.com>
 */

$lang['allowCss3Support'] = "If you wish the plugin should animate always using jQuery animate method even if browser supporst CSS3 animations. Default is true";
$lang['css3easing']       = "Works when allowCss3Support is set to true - for full list see: http://www.w3.org/TR/2013/WD-css3-transitions-20131119/#transition-timing-function . Default is 'linear'";
$lang['easing']           = "Requires jQuery easing plugin http://gsgd.co.uk/sandbox/jquery/easing/. Default is 'linear'";
$lang['delayBeforeStart'] = "Time in milliseconds before the marquee starts animating. Default is 1000";
$lang['direction']        = "Direction towards which the marquee will animate 'left' / 'right' / 'up' / 'down'. Default is 'left'. Todo: need to change this to ltr/rtl etc";
$lang['duplicated']       = "Should the marquee be duplicated to show an effect of continuous flow. Use this only when the text is shorter than the container. Default is false";
$lang['duration']         = "Duration in milliseconds in which you want your element to travel. Default is 5000.";
$lang['speed']            = "Speed will override duration. Speed allows you to set a relatively constant marquee speed regardless of the width of the containing element. Speed is measured in pixels per second.";
$lang['gap']              = "Gap in pixels between the tickers. Will work only when the duplicated option is set to true. Default is 20. Note: 20 means 20px so no need to use '20px' as the value.";
$lang['pauseOnHover']     = "On hover pause the marquee. If browser supports CSS3 and allowCss3Support is set to true than it will be done using CSS3. Otherwise this will be done using jQuery plugin. Default is false.";
$lang['pauseOnCycle']     = "On cycle, pause the marquee for delayBeforeStart milliseconds.";
$lang['startVisible']     = "The marquee will be visible in the start if set to true.";