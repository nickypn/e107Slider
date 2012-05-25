<?php
/*
 * e107Slider Plugin v0.1
 *
 * Copyright (C) 2007-2012 Xen Themes (xenthemes.com)
 *
 * Dual licensed under the MIT (http://www.opensource.org/licenses/mit-license.php) or 
 * GPL Version 2 (http://www.gnu.org/licenses/gpl-2.0.txt) licenses
 *
 * $Source: 
 * $Revision: 1 $
 * $Date: 25/05/2012 $
 * $Author: leonlloyd $
 *
*/

if(basename($_SERVER['PHP_SELF'])=='admin_slider_settings.php' || basename($_SERVER['PHP_SELF'])=='admin_news_slider_settings.php' || basename($_SERVER['PHP_SELF'])=='admin_config.php' ) {
echo '<link rel="stylesheet" type="text/css" href="'.e_PLUGIN_ABS.'vanilla_slider/style.css" />';
}

if(basename($_SERVER['PHP_SELF'])=='admin_slider.php' ) {
echo '<link rel="stylesheet" type="text/css" href="'.e_PLUGIN_ABS.'vanilla_slider/style.css" />
<script type="text/javascript">
    function addtext(sc) {
      	document.forms.dataform.vs_image.value=sc;
    }
</script>';
}

global $pref;

echo "
	<link rel='stylesheet' type='text/css' href='".e_PLUGIN."vanilla_slider/css/responsiveslides.css' media='screen' />
	<script src='//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js'></script>
	<!--<script src='".e_PLUGIN."vanilla_slider/scripts/jquery-1.7.2.min.js'></script>-->
	<script src='".e_PLUGIN."vanilla_slider/scripts/responsiveslides.min.js'></script>
	<script type='text/javascript'>
		$(function () {

      		$(\".rslides1\").responsiveSlides({
      			auto: ".$pref['vs_slider_auto'].",
  				speed: ".$pref['vs_slider_speed'].",
  				timeout: ".$pref['vs_slider_timeout'].",
  				pager: ".$pref['vs_slider_pager'].",
  				nav: ".$pref['vs_slider_nav'].",
  				random: ".$pref['vs_slider_random'].",
  				pause: ".$pref['vs_slider_pause'].",
  				pauseControls: ".$pref['vs_slider_pauseControls']."
      		});
      		
      		$(\".rslides2\").responsiveSlides({
        		auto: ".$pref['vs_slider_news_auto'].",
  				speed: ".$pref['vs_slider_news_speed'].",
  				timeout: ".$pref['vs_slider_news_timeout'].",
  				pager: ".$pref['vs_slider_news_pager'].",
  				nav: ".$pref['vs_slider_news_nav'].",
  				random: ".$pref['vs_slider_news_random'].",
  				pause: ".$pref['vs_slider_news_pause'].",
  				pauseControls: ".$pref['vs_slider_news_pauseControls']."
      		});

    	});
	</script>";


