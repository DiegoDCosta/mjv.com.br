<?php
    global $VISUAL_COMPOSER_EXTENSIONS;
	
    $VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_VisualComposer_Element = array(
		"name"                      => __( "TS Wave Fill Gauge", "ts_visual_composer_extend" ),
		"base"                      => "TS_VCSC_Wave_Gauge",
		"icon" 	                    => "ts-composer-element-icon-wave-gauge",
		"class"                     => "",
		"category"                  => __( "VC Extensions", "ts_visual_composer_extend" ),
		"description"               => __("Place a wave fill gauge element", "ts_visual_composer_extend"),
		"admin_enqueue_js"        	=> "",
		"admin_enqueue_css"       	=> "",
		"params"                    => array(
			// Gauge Values
			array(
				"type"              => "seperator",
				"param_name"        => "seperator_1",
				"seperator"         => "Gauge Values",
			),
			array(
				"type"              => "nouislider",
				"heading"           => __( "Main Gauge Level", "ts_visual_composer_extend" ),
				"param_name"        => "gauge_value",
				"value"             => "0",
				"min"               => "0",
				"max"               => "100",
				"step"              => "1",
				"unit"              => '%',
				"description"       => __( "Define the main level (value) for the liquid gauge.", "ts_visual_composer_extend" ),
				"admin_label"       => true,
			),
			array(
				"type"				=> "switch_button",
				"heading"           => __( "Change Value on Click", "ts_visual_composer_extend" ),
				"param_name"        => "gauge_click",
				"value"             => "false",
				"admin_label"       => true,
				"description"       => __( "Switch the toggle if the gauge level should be changed when clicking on the gauge.", "ts_visual_composer_extend" )
			),
			array(
				"type"              => "nouislider",
				"heading"           => __( "Alternate Gauge Level", "ts_visual_composer_extend" ),
				"param_name"        => "gauge_second",
				"value"             => "0",
				"min"               => "0",
				"max"               => "100",
				"step"              => "1",
				"unit"              => '%',
				"description"       => __( "Define the alternate level (value) for the liquid gauge.", "ts_visual_composer_extend" ),
				"dependency"        => array( 'element' => "gauge_click", 'value' => 'true' )
			),
			array(
				"type"				=> "switch_button",
				"heading"           => __( "Show Percent Character", "ts_visual_composer_extend" ),
				"param_name"        => "gauge_percent",
				"value"             => "true",
				"description"       => __( "Switch the toggle if the gauge should show a percent character next to the value shown inside the gauge.", "ts_visual_composer_extend" )
			),
			array(
				"type"				=> "switch_button",
				"heading"           => __( "Value CountUp", "ts_visual_composer_extend" ),
				"param_name"        => "gauge_countup",
				"value"             => "true",
				"description"       => __( "Switch the toggle if the gauge should count up to the value shown inside the gauge.", "ts_visual_composer_extend" ),
			),
			array(
				"type"				=> "switch_button",
				"heading"			=> __( 'Add Tooltip', "ts_visual_composer_extend" ),
				"param_name"		=> "tooltip_allow",
				"value"				=> "false",
				"description"		=> __( "Switch the toggle if you want to add an advanced tooltip to the element.", "ts_visual_composer_extend" ),
			),
			// Gauge Styling
			array(
				"type"              => "seperator",
				"param_name"        => "seperator_2",
				"seperator"         => "Gauge Styling",
				"group"				=> "Gauge Styling",
			),
			array(
				"type"              => "nouislider",
				"heading"           => __( "Maximum Gauge Size", "ts_visual_composer_extend" ),
				"param_name"        => "circle_sizemax",
				"value"             => "360",
				"min"               => "100",
				"max"               => "1024",
				"step"              => "1",
				"unit"              => 'px',
				"description"       => __( "Define the maximum size for the gauge; otherwise, column width will be used.", "ts_visual_composer_extend" ),
				"group"				=> "Gauge Styling",
			),
			array(
				"type"              => "dropdown",
				"heading"           => __( "Gauge Position", "ts_visual_composer_extend" ),
				"param_name"        => "circle_position",
				"width"             => 150,
				"value"             => array(
					__( "Center", "ts_visual_composer_extend" )                        => "center",
					__( "Float Left", "ts_visual_composer_extend" )                    => "left",
					__( "Float Right", "ts_visual_composer_extend" )                   => "right",					
				),
				"description"       => __( "Select how the gauge should be positioned inside the column.", "ts_visual_composer_extend" ),
				"group"				=> "Gauge Styling",
			),
			array(
				"type"              => "colorpicker",
				"heading"           => __( "Gauge Circle Color", "ts_visual_composer_extend" ),
				"param_name"        => "circle_color",
				"value"             => "#178BCA",
				"description"       => __( "Define the circle color around the gauge.", "ts_visual_composer_extend" ),
				"group"				=> "Gauge Styling",
			),
			array(
				"type"              => "nouislider",
				"heading"           => __( "Gauge Circle Thickness", "ts_visual_composer_extend" ),
				"param_name"        => "circle_thick",
				"value"             => "10",
				"min"               => "1",
				"max"               => "25",
				"step"              => "1",
				"unit"              => '%',
				"description"       => __( "Define the thickness of the circle around the gauge, based on the overall gauge width.", "ts_visual_composer_extend" ),
				"group"				=> "Gauge Styling",
			),
			array(
				"type"              => "nouislider",
				"heading"           => __( "Gauge Circle Gap", "ts_visual_composer_extend" ),
				"param_name"        => "circle_gap",
				"value"             => "5",
				"min"               => "1",
				"max"               => "10",
				"step"              => "1",
				"unit"              => '%',
				"description"       => __( "Define the thickness of the gap betwenn the circle and the gauge, based on the overall gauge width.", "ts_visual_composer_extend" ),
				"group"				=> "Gauge Styling",
			),
			array(
				"type"              => "colorpicker",
				"heading"           => __( "Gauge Text Color", "ts_visual_composer_extend" ),
				"param_name"        => "circle_text",
				"value"             => "#045681",
				"description"       => __( "Define the main text color for the label inside the gauge.", "ts_visual_composer_extend" ),
				"group"				=> "Gauge Styling",
			),
			// Wave Styling
			array(
				"type"              => "seperator",
				"param_name"        => "seperator_3",
				"seperator"         => "Wave Styling",
				"group"				=> "Wave Styling",
			),
			array(
				"type"              => "nouislider",
				"heading"           => __( "Number of Waves", "ts_visual_composer_extend" ),
				"param_name"        => "wave_count",
				"value"             => "1",
				"min"               => "1",
				"max"               => "7",
				"step"              => "1",
				"unit"              => '',
				"description"       => __( "Define the number of waves that should be shown inside the gauge.", "ts_visual_composer_extend" ),
				"admin_label"       => true,
				"group"				=> "Wave Styling",
			),
			array(
				"type"              => "nouislider",
				"heading"           => __( "Maximum Wave Height", "ts_visual_composer_extend" ),
				"param_name"        => "wave_height",
				"value"             => "10",
				"min"               => "1",
				"max"               => "25",
				"step"              => "1",
				"unit"              => '%',
				"description"       => __( "Define the maximum wave height, based on the overall gauge width.", "ts_visual_composer_extend" ),
				"group"				=> "Wave Styling",
			),
			array(
				"type"              => "colorpicker",
				"heading"           => __( "Wave Background Color", "ts_visual_composer_extend" ),
				"param_name"        => "wave_color",
				"value"             => "#178BCA",
				"description"       => __( "Define the background color for the wave that indicates the gauge level.", "ts_visual_composer_extend" ),
				"edit_field_class"	=> "vc_col-sm-6 vc_column",
				"group"				=> "Wave Styling",
			),
			array(
				"type"              => "colorpicker",
				"heading"           => __( "Wave Text Color", "ts_visual_composer_extend" ),
				"param_name"        => "wave_text",
				"value"             => "#A4DBf8",
				"description"       => __( "Define the font color for the label part that is covered by the wave.", "ts_visual_composer_extend" ),
				"edit_field_class"	=> "vc_col-sm-6 vc_column",
				"group"				=> "Wave Styling",
			),
			array(
				"type"              => "nouislider",
				"heading"           => __( "Wave Rise Time", "ts_visual_composer_extend" ),
				"param_name"        => "wave_rise_time",
				"value"             => "2000",
				"min"               => "100",
				"max"               => "10000",
				"step"              => "100",
				"unit"              => 'ms',
				"description"       => __( "Define the amount of time in milliseconds for the wave to rise from 0 to it's final height.", "ts_visual_composer_extend" ),
				"group"				=> "Wave Styling",
			),
			array(
				"type"              => "nouislider",
				"heading"           => __( "Wave Travel Time", "ts_visual_composer_extend" ),
				"param_name"        => "wave_animate_time",
				"value"             => "10000",
				"min"               => "1000",
				"max"               => "50000",
				"step"              => "100",
				"unit"              => 'ms',
				"description"       => __( "Define amount of time in milliseconds for a full wave to enter the wave circle.", "ts_visual_composer_extend" ),
				"group"				=> "Wave Styling",
			),
			// Tooltip Settings
			array(
				"type"				=> "seperator",
				"param_name"		=> "seperator_4",
				"seperator"			=> "Tooltip Settings",
				"dependency"    	=> array( "element" => "tooltip_allow", "value" => "true" ),
				"group" 			=> "Tooltip Settings",
			),
			array(
				"type"              => "textarea_raw_html",
				"heading"           => __( "Tooltip Content", "ts_visual_composer_extend" ),
				"param_name"        => "tooltip_advanced",
				"value"             => base64_encode(""),
				"description"      	 => __( "Enter the tooltip content here; HTML code can be used.", "ts_visual_composer_extend" ),
				"dependency"    	=> array( "element" => "tooltip_allow", "value" => "true" ),
				"group" 			=> "Tooltip Settings",
			),
			array(
				"type"				=> "dropdown",
				"class"				=> "",
				"heading"			=> __( "Tooltip Position", "ts_visual_composer_extend" ),
				"param_name"		=> "tooltip_position",
				"value"				=> array(
					__( "Top", "ts_visual_composer_extend" )                            => "ts-simptip-position-top",
					__( "Bottom", "ts_visual_composer_extend" )                         => "ts-simptip-position-bottom",
				),
				"description"		=> __( "Select the tooltip position in relation to the image.", "ts_visual_composer_extend" ),
				"dependency"    	=> array( "element" => "tooltip_allow", "value" => "true" ),
				"group" 			=> "Tooltip Settings",
			),
			array(
				"type"				=> "dropdown",
				"class"				=> "",
				"heading"			=> __( "Tooltip Style", "ts_visual_composer_extend" ),
				"param_name"		=> "tooltip_style",
				"value"             => array(
					__( "Black", "ts_visual_composer_extend" )                          => "ts-simptip-style-black",
					__( "Gray", "ts_visual_composer_extend" )                           => "ts-simptip-style-gray",
					__( "Green", "ts_visual_composer_extend" )                          => "ts-simptip-style-green",
					__( "Blue", "ts_visual_composer_extend" )                           => "ts-simptip-style-blue",
					__( "Red", "ts_visual_composer_extend" )                            => "ts-simptip-style-red",
					__( "Orange", "ts_visual_composer_extend" )                         => "ts-simptip-style-orange",
					__( "Yellow", "ts_visual_composer_extend" )                         => "ts-simptip-style-yellow",
					__( "Purple", "ts_visual_composer_extend" )                         => "ts-simptip-style-purple",
					__( "Pink", "ts_visual_composer_extend" )                           => "ts-simptip-style-pink",
					__( "White", "ts_visual_composer_extend" )                          => "ts-simptip-style-white"
				),
				"description"		=> __( "Select the tooltip style.", "ts_visual_composer_extend" ),
				"dependency"    	=> array( "element" => "tooltip_allow", "value" => "true" ),
				"group" 			=> "Tooltip Settings",
			),
			array(
				"type"				=> "dropdown",
				"class"				=> "",
				"heading"			=> __( "Tooltip Animation", "ts_visual_composer_extend" ),
				"param_name"		=> "tooltip_animation",
				"value"				=> array(
					__("Swing", "ts_visual_composer_extend")                    => "swing",
					__("Fall", "ts_visual_composer_extend")                 	=> "fall",
					__("Grow", "ts_visual_composer_extend")                 	=> "grow",
					__("Slide", "ts_visual_composer_extend")                 	=> "slide",
					__("Fade", "ts_visual_composer_extend")                 	=> "fade",
				),
				"description"		=> __( "Select how the tooltip entry and exit should be animated once triggered.", "ts_visual_composer_extend" ),
				"group"				=> "Tooltip Settings",
				"dependency"		=> array( 'element' => "tooltip_allow", 'value' => 'true' ),
			),
			array(
				"type"				=> "nouislider",
				"heading"			=> __( "Tooltip X-Offset", "ts_visual_composer_extend" ),
				"param_name"		=> "tooltipster_offsetx",
				"value"				=> "0",
				"min"				=> "-100",
				"max"				=> "100",
				"step"				=> "1",
				"unit"				=> 'px',
				"description"		=> __( "Define an optional X-Offset for the tooltip position.", "ts_visual_composer_extend" ),
				"dependency"    	=> array( "element" => "tooltip_allow", "value" => "true" ),
				"group" 			=> "Tooltip Settings",
			),
			array(
				"type"				=> "nouislider",
				"heading"			=> __( "Tooltip Y-Offset", "ts_visual_composer_extend" ),
				"param_name"		=> "tooltipster_offsety",
				"value"				=> "0",
				"min"				=> "-100",
				"max"				=> "100",
				"step"				=> "1",
				"unit"				=> 'px',
				"description"		=> __( "Define an optional Y-Offset for the tooltip position.", "ts_visual_composer_extend" ),
				"dependency"    	=> array( "element" => "tooltip_allow", "value" => "true" ),
				"group" 			=> "Tooltip Settings",
			),
			// Viewport Animation
			array(
				"type"              => "seperator",
				"param_name"        => "seperator_5",
				"seperator"         => "Viewport Animation",
				"group"				=> "Other Settings",
			),
			array(
				"type"				=> "switch_button",
				"heading"           => __( "Use Viewport Animation", "ts_visual_composer_extend" ),
				"param_name"        => "viewport_trigger",
				"value"             => "true",
				"description"       => __( "Switch the toggle if the gauge should be rendered and animated only after the element entered the browser viewport.", "ts_visual_composer_extend" ),
				"admin_label"       => true,
				"group"				=> "Other Settings",
			),
			array(
				"type" 				=> "viewport_offset",
				"class" 			=> "",
				"heading" 			=> __( "Viewport Offset", "ts_visual_composer_extend"),
				"param_name" 		=> "viewport_offset",
				"value" 			=> 'bottom-in-view',
				"description" 		=> __("Define the offset (top of screen) that should trigger the viewport animation.", "ts_visual_composer_extend"),
				"dependency" 		=> array("element" => "viewport_trigger", "value" => "true"),
				"group"				=> "Other Settings",
			),
			array(
				"type"              => "nouislider",
				"heading"           => __( "Viewport Delay", "ts_visual_composer_extend" ),
				"param_name"        => "viewport_delay",
				"value"             => "0",
				"min"               => "0",
				"max"               => "10000",
				"step"              => "100",
				"unit"              => 'ms',
				"description"       => "Define the delay in ms after which the animation should start, once initially triggered.",
				"dependency" 		=> array("element" => "viewport_trigger", "value" => "true"),
				"group"				=> "Other Settings",
			),
			array(
				"type"				=> "switch_button",
				"heading"           => __( "Viewport Animation on Mobile", "ts_visual_composer_extend" ),
				"param_name"        => "viewport_mobile",
				"value"             => "false",
				"description"       => __( "Switch the toggle if the viewport animation should also be used on mobile devices.", "ts_visual_composer_extend" ),
				"dependency" 		=> array("element" => "viewport_trigger", "value" => "true"),
				"group"				=> "Other Settings",
			),
			// Other Settings
			array(
				"type"              => "seperator",
				"param_name"        => "seperator_6",
				"seperator"         => "Other Settings",
				"group"				=> "Other Settings",
			),
			array(
				"type"              => "nouislider",
				"heading"           => __( "Margin: Top", "ts_visual_composer_extend" ),
				"param_name"        => "margin_top",
				"value"             => "0",
				"min"               => "-50",
				"max"               => "500",
				"step"              => "1",
				"unit"              => 'px',
				"description"       => __( "Select the top margin for the element.", "ts_visual_composer_extend" ),
				"group" 			=> "Other Settings",
			),
			array(
				"type"              => "nouislider",
				"heading"           => __( "Margin: Bottom", "ts_visual_composer_extend" ),
				"param_name"        => "margin_bottom",
				"value"             => "0",
				"min"               => "-50",
				"max"               => "500",
				"step"              => "1",
				"unit"              => 'px',
				"description"       => __( "Select the bottom margin for the element.", "ts_visual_composer_extend" ),
				"group" 			=> "Other Settings",
			),
			array(
				"type"              => "textfield",
				"heading"           => __( "Define ID Name", "ts_visual_composer_extend" ),
				"param_name"        => "el_id",
				"value"             => "",
				"description"       => __( "Enter an unique ID for the element.", "ts_visual_composer_extend" ),
				"group" 			=> "Other Settings",
			),
			array(
				"type"				=> "tag_editor",
				"heading"			=> __( "Extra Class Names", "ts_visual_composer_extend" ),
				"param_name"		=> "el_class",
				"value"				=> "",
				"description"      	=> __( "Enter additional class names for the element.", "ts_visual_composer_extend" ),
				"group" 			=> "Other Settings",
			),
		)
	);
	
	if ($VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_VisualComposer_LeanMap == "true") {
		return $VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_VisualComposer_Element;
	} else {			
		vc_map($VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_VisualComposer_Element);
	}
?>