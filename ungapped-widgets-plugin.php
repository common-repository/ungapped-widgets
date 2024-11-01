<?php
/*
Plugin Name:	Ungapped Widgets
Plugin URI:	ungapped.com
Description: 	Shortcode example: [ungapped-form surveyid="00000000-000000000-0000-000000000000"]
Version:      	1
Author:       	Ungapped
Author URI:	https://ungapped.com
License:	GPL
Text Domain:  	ungapped_widget_plugin
Domain Path:
*/

// Shortcode:
// [ungapped-form surveyid="79a808bd-c67b-4cce-95b7-9d2654aa5ad9" previllvalues="{ school: 'X', year: 'Y'} ]
// This will render the form with the id in place and if prefillvalues are passed will pass them along as if they came from the querystring.

// offsetTop can be in pixels like "100" or an element selector like ".navbar".

$hasForms = false;

function ug_forms_shortcode( $atts ) {
   $a = shortcode_atts(array(
      'surveyid' => '',
      'prefillvalues' => false,
	   'offsettop' => 0,
   ), $atts );

   global $hasForms;
   $hasForms = true;

   $params = 'surveyId: \'' . $a['surveyid'] . '\', offsetTop: \'' . $a['offsettop'] . '\'';
   
   if ($a['prefillvalues'] !== false) {
      $params = $params . ', prefillValues: ' . $a['prefillvalues'];
   }

   return '<ungapped-form params="' . $params . '"></ungapped-form>';
}
add_shortcode('ungapped-form', 'ug_forms_shortcode');

function load_ug_forms_js() {
   global $hasForms;

   if( $hasForms ) {
      wp_enqueue_script('ug-widget', 'https://ui.ungapped.com/widgets/ungapped.widget.js', array('jquery'));
      wp_add_inline_script('ug-widget', 'jQuery(document).ready(function($){ ungapped.init({ scripts: ["forms"] }); });');
   }
}
add_action('wp_footer', 'load_ug_forms_js');
?>