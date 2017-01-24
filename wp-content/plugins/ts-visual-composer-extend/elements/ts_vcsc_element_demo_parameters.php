<?php
    global $VISUAL_COMPOSER_EXTENSIONS;
	
	// Custom Parameter Showcase
	$VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_VisualComposer_Element = array(
		"name"                      	=> __( "TS Parameter Showcase", "ts_visual_composer_extend" ),
		"base"                      	=> "TS_VCSC_Parameter_Showcase",
		"icon" 	                    	=> "ts-composer-element-icon-demo-elements",
		"class"                     	=> "",
		"category"                  	=> ($VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_EditorElementFilter == "true" ? __( "VC Extensions", "ts_visual_composer_extend" ) : __( 'VC Demos', "ts_visual_composer_extend" )),
		"description"               	=> __("Place a showcase of custom parameters", "ts_visual_composer_extend"),
		"admin_enqueue_js"        		=> "",
		"admin_enqueue_css"       		=> "",
		"params"                    	=> array(
			array(
				"type"              	=> "messenger",
				"param_name"        	=> "messenger",
				"color"					=> "#006BB7",
				"size"					=> "14",
				"message"            	=> __( "This element will showcase the final output of all custom setting parameters.", "ts_visual_composer_extend" ),
			),
			array(
				"type"              	=> "dropdown",
				"heading"           	=> __( "Custom Parameter", "ts_visual_composer_extend" ),
				"param_name"        	=> "demo_parameter",
				"width"             	=> 300,
				"value"             	=> array(
					__( 'Switch Button', "ts_visual_composer_extend" )      	=> "switch_button",
					__( 'NoUiSlider', "ts_visual_composer_extend" )      		=> "nouislider",
					__( 'Fonts Manager', "ts_visual_composer_extend" )			=> "fontsmanager",
					__( 'Padding Definition', "ts_visual_composer_extend" )		=> "advanced_padding",
					__( 'Margin Definition', "ts_visual_composer_extend" )		=> "advanced_margin",
					__( 'Border Definition', "ts_visual_composer_extend" )		=> "advanced_border",
					__( 'CSS3 Animation', "ts_visual_composer_extend" )			=> "css3animations",
					__( 'Image Selector', "ts_visual_composer_extend" )			=> "image_selector",
					__( 'Tag Editor', "ts_visual_composer_extend" )				=> "tag_editor",
				),
				"admin_label"			=> true,
				"description"			=> __( "Select the custom parameter you want to showcase.", "ts_visual_composer_extend" ),
			),
			// Switch Button
			array(
				"type"					=> "switch_button",
				"heading"				=> __( "Switch Button", "ts_visual_composer_extend" ),
				"param_name"			=> "demo_switch_button",
				"value"					=> "true",
				"description"			=> __( "This parameter will either return a 'true' or 'false', based on selected switch position.", "ts_visual_composer_extend" ),
				"dependency"			=> array( 'element' => "demo_parameter", 'value' => 'switch_button' ),
			),
			// NoUiSlider
			array(
				"type"					=> "nouislider",
				"heading"				=> __( "NoUiSlider Input", "ts_visual_composer_extend" ),
				"param_name"			=> "demo_nouislider",
				"value"					=> "5000",
				"min"					=> "1000",
				"max"					=> "20000",
				"step"					=> "100",
				"unit"					=> 'ms',
				"description"			=> __( "This parameter will provide a visual interface to determine a numeric value, with min/max settings and step increases.", "ts_visual_composer_extend" ),
				"dependency"			=> array( 'element' => "demo_parameter", 'value' => 'nouislider' ),
			),
			// Fonts Manager
			array(
				"type"					=> "fontsmanager",
				"heading"				=> __( "Font Family", "ts_visual_composer_extend" ),
				"param_name"			=> "demo_fonttype",
				"value"					=> "Default:regular",
				"default"				=> "true",
				"connector"				=> "title_fontmatch",
				"description"			=> __( "This parameter will provide an interface to easily select a custom font (including Google Fonts) to be used for an element.", "ts_visual_composer_extend" ),
				"dependency"			=> array( 'element' => "demo_parameter", 'value' => 'fontsmanager' ),
			),
			array(
				"type"					=> "hidden_input",
				"param_name"			=> "demo_fontmatch",
				"value"					=> "default",
				"dependency"			=> array( 'element' => "demo_parameter", 'value' => 'fontsmanager' ),
			),
			// Padding Settings
			array(
				"type"					=> "advanced_styling",
				"heading"				=> __("Paddings", "ts_visual_composer_extend"),
				"param_name"			=> "demo_padding",
				"style_type"			=> "padding",
				"show_main"				=> "false",
				"show_preview"			=> "false",
				"show_width"			=> "true",
				"show_style"			=> "false",
				"show_radius"			=> "false",					
				"show_color"			=> "false",
				"show_unit_width"		=> "false",
				"show_unit_radius"		=> "false",
				"label_width"			=> "",
				"override_all"			=> "false",
				"default_positions"		=> array(
					//"All"							=> array("string" => __("All", "ts_visual_composer_extend"),	"width" => "1", "unitwidth" => "px", "style" => "solid", "color" => "#000000", "radius" => "0", "unitradius" => "px"),
					"Top"							=> array("string" => __("Top", "ts_visual_composer_extend"),	"width" => "0", "unitwidth" => "px", "style" => "solid", "color" => "#000000", "radius" => "0", "unitradius" => "px"),
					"Right"							=> array("string" => __("Right", "ts_visual_composer_extend"),	"width" => "0", "unitwidth" => "px", "style" => "solid", "color" => "#000000", "radius" => "0", "unitradius" => "px"),
					"Bottom"						=> array("string" => __("Bottom", "ts_visual_composer_extend"),	"width" => "0", "unitwidth" => "px", "style" => "solid", "color" => "#000000", "radius" => "0", "unitradius" => "px"),
					"Left"							=> array("string" => __("Left", "ts_visual_composer_extend"),	"width" => "0", "unitwidth" => "px", "style" => "solid", "color" => "#000000", "radius" => "0", "unitradius" => "px"),
				),
				"value"					=> "padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;",
				"description"			=> __( "This selector will provide quick inputs to easily define all padding settings.", "ts_visual_composer_extend" ),
				"dependency"			=> array( 'element' => "demo_parameter", 'value' => 'advanced_padding' ),
			),
			// Margin Settings
			array(
				"type"					=> "advanced_styling",
				"heading"				=> __("Margins", "ts_visual_composer_extend"),
				"param_name"			=> "demo_margin",
				"style_type"			=> "margin",
				"show_main"				=> "false",
				"show_preview"			=> "false",
				"show_width"			=> "true",
				"show_style"			=> "false",
				"show_radius"			=> "false",					
				"show_color"			=> "false",
				"show_unit_width"		=> "false",
				"show_unit_radius"		=> "false",
				"label_width"			=> "",
				"override_all"			=> "false",
				"default_positions"		=> array(
					//"All"							=> array("string" => __("All", "ts_visual_composer_extend"),	"width" => "1", "unitwidth" => "px", "style" => "solid", "color" => "#000000", "radius" => "0", "unitradius" => "px"),
					"Top"							=> array("string" => __("Top", "ts_visual_composer_extend"),	"width" => "0", "unitwidth" => "px", "style" => "solid", "color" => "#000000", "radius" => "0", "unitradius" => "px"),
					"Right"							=> array("string" => __("Right", "ts_visual_composer_extend"),	"width" => "0", "unitwidth" => "px", "style" => "solid", "color" => "#000000", "radius" => "0", "unitradius" => "px"),
					"Bottom"						=> array("string" => __("Bottom", "ts_visual_composer_extend"),	"width" => "0", "unitwidth" => "px", "style" => "solid", "color" => "#000000", "radius" => "0", "unitradius" => "px"),
					"Left"							=> array("string" => __("Left", "ts_visual_composer_extend"),	"width" => "0", "unitwidth" => "px", "style" => "solid", "color" => "#000000", "radius" => "0", "unitradius" => "px"),
				),
				"value"					=> "margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px;",
				"description"			=> __( "This selector will provide quick inputs to easily define all margin settings.", "ts_visual_composer_extend" ),
				"dependency"			=> array( 'element' => "demo_parameter", 'value' => 'advanced_margin' ),
			),
			// Border Settings
			array(
				"type"					=> "advanced_styling",
				"heading"				=> __("Border Settings", "ts_visual_composer_extend"),
				"param_name"			=> "demo_border",
				"style_type"			=> "border",
				"show_main"				=> "false",
				"show_preview"			=> "true",
				"show_width"			=> "true",
				"show_style"			=> "true",
				"show_radius"			=> "true",					
				"show_color"			=> "true",
				"show_unit_width"		=> "true",
				"show_unit_radius"		=> "true",
				"override_all"			=> "true",
				"default_positions"		=> array(
					"All"							=> array("string" => __("All", "ts_visual_composer_extend"),	"width" => "1", "unitwidth" => "px", "style" => "solid", "color" => "#cccccc", "radius" => "0", "unitradius" => "px"),
					"Top"							=> array("string" => __("Top", "ts_visual_composer_extend"),	"width" => "0", "unitwidth" => "px", "style" => "solid", "color" => "#cccccc", "radius" => "0", "unitradius" => "px"),
					"Right"							=> array("string" => __("Right", "ts_visual_composer_extend"),	"width" => "0", "unitwidth" => "px", "style" => "solid", "color" => "#cccccc", "radius" => "0", "unitradius" => "px"),
					"Bottom"						=> array("string" => __("Bottom", "ts_visual_composer_extend"),	"width" => "0", "unitwidth" => "px", "style" => "solid", "color" => "#cccccc", "radius" => "0", "unitradius" => "px"),
					"Left"							=> array("string" => __("Left", "ts_visual_composer_extend"),	"width" => "0", "unitwidth" => "px", "style" => "solid", "color" => "#cccccc", "radius" => "0", "unitradius" => "px"),
				),
				"description"			=> __( "This selector will provide quick inputs to easily define all border settings.", "ts_visual_composer_extend" ),
				"dependency"			=> array( 'element' => "demo_parameter", 'value' => 'advanced_border' ),
			),
			// CSS3 Animation Setting
			array(
				"type"					=> "css3animations",
				"class"					=> "",
				"heading"				=> __("CSS3 Animation", "ts_visual_composer_extend"),
				"param_name"			=> "demo_animationcss3",
				"standard"				=> "false",
				"prefix"				=> "",
				"connector"				=> "demo_animationin",
				"noneselect"			=> "true",
				"default"				=> "",
				"value"					=> "",
				"description"			=> __( "This parameter will allow for the easy selection of a CSS3 animation with included preview (also triggerable via hover).", "ts_visual_composer_extend" ),
				"dependency"			=> array( 'element' => "demo_parameter", 'value' => 'css3animations' ),
			),
			array(
				"type"					=> "hidden_input",
				"heading"				=> __( "CSS3 Animation", "ts_visual_composer_extend" ),
				"param_name"			=> "demo_animationin",
				"value"					=> "",
				"dependency"			=> array( 'element' => "demo_parameter", 'value' => 'css3animations' ),
			),
			// Image Selector
			array(
				"type"					=> "image_selector",
				"heading"				=> __( "Image Selector", "ts_visual_composer_extend" ),
				"param_name"			=> "demo_image_selector",
				"template"				=> "alignfull",
				"value"					=> "center",
				"description"			=> __( "This parameter will allow for a visual (image based) selection of otherwise text string values.", "ts_visual_composer_extend" ),
				"dependency"			=> array( 'element' => "demo_parameter", 'value' => 'image_selector' ),
			),
			// Tag / Class / Group Input
			array(
				"type"					=> "tag_editor",
				"heading"				=> __( "Tag Editor", "ts_visual_composer_extend" ),
				"param_name"			=> "demo_tageditor",
				"value"					=> "",
				"dependency"			=> array( 'element' => "demo_parameter", 'value' => 'tag_editor' ),
			),
		)
	);
	
	if ($VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_VisualComposer_LeanMap == "true") {
		return $VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_VisualComposer_Element;
	} else {			
		vc_map($VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_VisualComposer_Element);
	}
?>