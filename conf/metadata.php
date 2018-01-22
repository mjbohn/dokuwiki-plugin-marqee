<?php
/**
 * Options for the marquee plugin
 *
 * @author Michael Bohn <mjbohn@gmail.com>
 */


//$meta['allowCss3Support'] = array('onoff');
//$meta['css3easing']       = array('string');
//$meta['easing']           = array('string');
$meta['delayBeforeStart'] = array('numeric');
$meta['direction']        = array('multichoice', _choices => array('left', 'right', 'up', 'down'));
$meta['duplicated']       = array('onoff');
$meta['duration']         = array('numeric');
$meta['speed']            = array('numeric');
$meta['gap']              = array('numeric');
$meta['pauseOnHover']     = array('onoff');
$meta['pauseOnCycle']     = array('onoff');
$meta['startVisible']     = array('onoff');

$meta['showBorder']    = array('onoff');
$meta['border']        = array('string');
$meta['border-radius'] = array('string');
$meta['width']         = array('string');
$meta['height']        = array('string');
$meta['background-color'] = array('string');