<?php
	add_shortcode('TS_VCSC_Icon_Wings_Button', 'TS_VCSC_Icon_Wings_Button_Function');
	function TS_VCSC_Icon_Wings_Button_Function ($atts) {
		global $VISUAL_COMPOSER_EXTENSIONS;
		ob_start();

		extract( shortcode_atts( array(
			// Button Scope
			'button_scope'				=> 'single',
			'button_wing1'				=> 'true',
			'button_wing2'				=> 'true',
			// Link Data #1
			'button_link1'				=> '',
			'button_text1'				=> 'Read More 1',
			'button_icon1'				=> '',
			'button_place1'				=> 'left',
			// Link Data #2
			'button_link2'				=> '',
			'button_text2'				=> 'Read More 2',
			'button_icon2'				=> '',
			'button_place2'				=> 'left',
			// Link Data #3
			'button_link3'				=> '',
			'button_text3'				=> 'Read More 3',
			'button_icon3'				=> '',
			'button_place3'				=> 'left',
			// General Styling
			'button_align'				=> 'ts-wings-buttons-center',
			'button_width'				=> 100,
			// Corner Radius
			'radius_button'				=> 'ts-wings-buttons-radius-none',
			'radius_wing1'				=> 'ts-wings-buttons-radius-none',
			'radius_wing2'				=> 'ts-wings-buttons-radius-none',
			// Scroll Settings
			'scroll_navigate1'			=> 'false',
			'scroll_target1'			=> '',
			'scroll_speed1'				=> 2000,
			'scroll_effect1'			=> 'linear',
			'scroll_offset1'			=> 'desktop:0px;tablet:0px;mobile:0px',
			'scroll_hashtag1'			=> 'false',
			'scroll_navigate2'			=> 'false',
			'scroll_target2'			=> '',
			'scroll_speed2'				=> 2000,
			'scroll_effect2'			=> 'linear',
			'scroll_offset2'			=> 'desktop:0px;tablet:0px;mobile:0px',
			'scroll_hashtag2'			=> 'false',
			'scroll_navigate3'			=> 'false',
			'scroll_target3'			=> '',
			'scroll_speed3'				=> 2000,
			'scroll_effect3'			=> 'linear',
			'scroll_offset3'			=> 'desktop:0px;tablet:0px;mobile:0px',
			'scroll_hashtag3'			=> 'false',
			// Segment Styling
			'main_standard_background'	=> '#f9f9f9',
			'main_standard_fontcolor'	=> '#696969',
			'main_standard_border'		=> '#ededed',
			'main_hover_background'		=> '#f9f9f9',
			'main_hover_fontcolor'		=> '#696969',
			'main_hover_border'			=> '#ededed',
			'wing1_standard_background'	=> '#000000',
			'wing1_standard_fontcolor'	=> '#ffffff',
			'wing1_hover_background'	=> '#000000',
			'wing1_hover_fontcolor'		=> '#ffffff',
			'wing2_standard_background'	=> '#000000',
			'wing2_standard_fontcolor'	=> '#ffffff',
			'wing2_hover_background'	=> '#000000',
			'wing2_hover_fontcolor'		=> '#ffffff',
			// Tooltip Settings
			'tooltip_content1'			=> '',
			'tooltip_content2'			=> '',
			'tooltip_content3'			=> '',
			'tooltip_position'			=> 'ts-simptip-position-right',
			'tooltip_style1'			=> 'ts-simptip-style-black',
			'tooltip_style2'			=> 'ts-simptip-style-black',
			'tooltip_style3'			=> 'ts-simptip-style-black',
			'tooltip_animation1'		=> 'swing',
			'tooltip_animation2'		=> 'swing',
			'tooltip_animation3'		=> 'swing',
			'tooltipster_offsetx'		=> 0,
			'tooltipster_offsety'		=> 0,
			// Other Settings
			'margin_top'				=> 20,
			'margin_bottom'				=> 20,
			'el_id' 					=> '',
			'el_class' 					=> '',
			'css'						=> '',
		), $atts ));
		
		//if (($animation_button1 != '') || ($animation_button2 != '') || ($separator_animation != '') || ($button_animation != '')) {
			wp_enqueue_style('ts-extend-animations');
			if ($VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_LoadFrontEndWaypoints == "true") {
				if (wp_script_is('waypoints', $list = 'registered')) {
					wp_enqueue_script('waypoints');
				} else {
					wp_enqueue_script('ts-extend-waypoints');
				}
			}
		//}
		wp_enqueue_style('ts-extend-tooltipster');
		wp_enqueue_script('ts-extend-tooltipster');	
		wp_enqueue_style('ts-extend-buttonsdual');
		if ((($scroll_navigate1 == "true") && ($scroll_target1 != '')) || (($scroll_navigate2 == "true") && ($scroll_target2 != '')) || (($scroll_navigate3 == "true") && ($scroll_target3 != ''))) {
			wp_enqueue_script('jquery-easing');
		}
		wp_enqueue_style('ts-visual-composer-extend-front');
		wp_enqueue_script('ts-visual-composer-extend-front');
		
		$output 						= '';
		$style_body						= '';
		
		// ID
		if (!empty($el_id)) {
			$button_id					= $el_id;
		} else {
			$button_id					= 'ts-vcsc-wingsbutton-' . mt_rand(999999, 9999999);
		}
		
		// Link Values
		if (($scroll_navigate1 == "true") && ($scroll_target1 != '')) {
			$scroll_target1				= str_replace("#", "", $scroll_target1);
			$a1_href					= "#" . $scroll_target1;
			$a1_title 					= "";
			$a1_target 					= "_parent";
			$a1_rel						= 'rel="bookmark"';
		} else {
			$button_link1 				= TS_VCSC_Advancedlinks_GetLinkData($button_link1);
			$a1_href					= $button_link1['url'];
			$a1_title 					= $button_link1['title'];
			$a1_target 					= $button_link1['target'];
			$a1_rel 					= $button_link1['rel'];
			if (!empty($a1_rel)) {
				$a1_rel 				= 'rel="' . esc_attr(trim($a1_rel)) . '"';
			}
		}		
		if (($scroll_navigate2 == "true") && ($scroll_target2 != '')) {
			$scroll_target2				= str_replace("#", "", $scroll_target2);
			$a2_href					= "#" . $scroll_target2;
			$a2_title 					= "";
			$a2_target 					= "_parent";
			$a2_rel						= 'rel="bookmark"';
		} else {
			$button_link2 				= TS_VCSC_Advancedlinks_GetLinkData($button_link2);
			$a2_href					= $button_link2['url'];
			$a2_title 					= $button_link2['title'];
			$a2_target 					= $button_link2['target'];
			$a2_rel 					= $button_link2['rel'];
			if (!empty($a2_rel)) {
				$a2_rel 				= 'rel="' . esc_attr(trim($a2_rel)) . '"';
			}
		}
		if (($scroll_navigate3 == "true") && ($scroll_target3 != '')) {
			$scroll_target3				= str_replace("#", "", $scroll_target3);
			$a3_href					= "#" . $scroll_target3;
			$a3_title 					= "";
			$a3_target 					= "_parent";
			$a3_rel						= 'rel="bookmark"';
		} else {
			$button_link3 				= TS_VCSC_Advancedlinks_GetLinkData($button_link3);
			$a3_href					= $button_link3['url'];
			$a3_title 					= $button_link3['title'];
			$a3_target 					= $button_link3['target'];
			$a3_rel 					= $button_link3['rel'];
			if (!empty($a3_rel)) {
				$a3_rel 				= 'rel="' . esc_attr(trim($a3_rel)) . '"';
			}
		}
		
		// Scroll Navigation
		if (($scroll_navigate1 == "true") && ($scroll_target1 != '')) {
			$scroll_offset1 			= explode(';', $scroll_offset1);			
			$offsetDesktop1				= explode(':', $scroll_offset1[0]);
			$offsetDesktop1				= str_replace("px", "", $offsetDesktop1[1]);
			$offsetTablet1				= explode(':', $scroll_offset1[1]);
			$offsetTablet1				= str_replace("px", "", $offsetTablet1[1]);
			$offsetMobile1				= explode(':', $scroll_offset1[2]);
			$offsetMobile1				= str_replace("px", "", $offsetMobile1[1]);	
			$scroll_class1				= 'ts-button-page-navigator';			
			$scroll_data1				= 'data-scroll-target="' . $scroll_target1 . '" data-scroll-speed="' . $scroll_speed1 . '" data-scroll-effect="' . $scroll_effect1 . '" data-scroll-offsetdesktop="' . $offsetDesktop1 . '" data-scroll-offsettablet="' . $offsetTablet1 . '" data-scroll-offsetmobile="' . $offsetMobile1 . '" data-scroll-hashtag="' . $scroll_hashtag1 . '"';
		} else {
			$scroll_class1				= '';
			$scroll_data1				= '';
		}
		if (($scroll_navigate2 == "true") && ($scroll_target2 != '')) {
			$scroll_offset2 			= explode(';', $scroll_offset2);			
			$offsetDesktop2				= explode(':', $scroll_offset2[0]);
			$offsetDesktop2				= str_replace("px", "", $offsetDesktop2[1]);
			$offsetTablet2				= explode(':', $scroll_offset2[1]);
			$offsetTablet2				= str_replace("px", "", $offsetTablet2[1]);
			$offsetMobile2				= explode(':', $scroll_offset2[2]);
			$offsetMobile2				= str_replace("px", "", $offsetMobile2[1]);	
			$scroll_class2				= 'ts-button-page-navigator';			
			$scroll_data2				= 'data-scroll-target="' . $scroll_target2 . '" data-scroll-speed="' . $scroll_speed2 . '" data-scroll-effect="' . $scroll_effect2 . '" data-scroll-offsetdesktop="' . $offsetDesktop2 . '" data-scroll-offsettablet="' . $offsetTablet2 . '" data-scroll-offsetmobile="' . $offsetMobile2 . '" data-scroll-hashtag="' . $scroll_hashtag2 . '"';
		} else {
			$scroll_class2				= '';
			$scroll_data2				= '';
		}
		if (($scroll_navigate3 == "true") && ($scroll_target3 != '')) {
			$scroll_offset3 			= explode(';', $scroll_offset3);			
			$offsetDesktop3				= explode(':', $scroll_offset3[0]);
			$offsetDesktop3				= str_replace("px", "", $offsetDesktop3[1]);
			$offsetTablet3				= explode(':', $scroll_offset3[1]);
			$offsetTablet3				= str_replace("px", "", $offsetTablet3[1]);
			$offsetMobile3				= explode(':', $scroll_offset3[2]);
			$offsetMobile3				= str_replace("px", "", $offsetMobile3[1]);	
			$scroll_class3				= 'ts-button-page-navigator';			
			$scroll_data3				= 'data-scroll-target="' . $scroll_target3 . '" data-scroll-speed="' . $scroll_speed3 . '" data-scroll-effect="' . $scroll_effect3 . '" data-scroll-offsetdesktop="' . $offsetDesktop3 . '" data-scroll-offsettablet="' . $offsetTablet3 . '" data-scroll-offsetmobile="' . $offsetMobile3 . '" data-scroll-hashtag="' . $scroll_hashtag3 . '"';
		} else {
			$scroll_class3				= '';
			$scroll_data3				= '';
		}
		
		// Tooltip
		$tooltipclasses					= 'ts-has-tooltipster-tooltip';		
		$tooltip_position				= TS_VCSC_TooltipMigratePosition($tooltip_position);
		$tooltip_style1					= '';
		$tooltip_style2					= TS_VCSC_TooltipMigrateStyle($tooltip_style2);
		$tooltip_style3					= TS_VCSC_TooltipMigrateStyle($tooltip_style3);
		$Tooltip_Content1				= '';
		$Tooltip_Class1					= '';
		if (strlen($tooltip_content2) != 0) {
			$Tooltip_Content2			= 'data-tooltipster-html="true" data-tooltipster-title="" data-tooltipster-text="' . strip_tags($tooltip_content2) . '" data-tooltipster-image="" data-tooltipster-position="top" data-tooltipster-touch="false" data-tooltipster-arrow="true" data-tooltipster-theme="' . $tooltip_style2 . '" data-tooltipster-animation="' . $tooltip_animation2 . '" data-tooltipster-trigger="hover" data-tooltipster-offsetx="' . $tooltipster_offsetx . '" data-tooltipster-offsety="' . $tooltipster_offsety . '"';
			$Tooltip_Class2				= $tooltipclasses;
		} else {
			$Tooltip_Content2			= '';
			$Tooltip_Class2				= '';
		}
		if (strlen($tooltip_content3) != 0) {
			$Tooltip_Content3			= 'data-tooltipster-html="true" data-tooltipster-title="" data-tooltipster-text="' . strip_tags($tooltip_content3) . '" data-tooltipster-image="" data-tooltipster-position="bottom" data-tooltipster-touch="false" data-tooltipster-arrow="true" data-tooltipster-theme="' . $tooltip_style3 . '" data-tooltipster-animation="' . $tooltip_animation3 . '" data-tooltipster-trigger="hover" data-tooltipster-offsetx="' . $tooltipster_offsetx . '" data-tooltipster-offsety="' . $tooltipster_offsety . '"';
			$Tooltip_Class3				= $tooltipclasses;
		} else {
			$Tooltip_Content3			= '';
			$Tooltip_Class3				= '';
		}
		
		// Icon Settings
		if (($button_icon1 != "") && ($button_icon1 != "transparent")) {
			$button_icon1				= '<i class="ts-wings-button-icon ' . $button_icon1 . ' ts-wings-button-' . $button_place1 . '"></i>';
		} else {
			$button_icon1				= '';
		}
		if (($button_icon2 != "") && ($button_icon2 != "transparent")) {
			$button_icon2				= '<i class="ts-wings-button-icon ' . $button_icon2 . ' ts-wings-button-' . $button_place2 . '"></i>';
		} else {
			$button_icon2				= '';
		}
		if (($button_icon3 != "") && ($button_icon3 != "transparent")) {
			$button_icon3				= '<i class="ts-wings-button-icon ' . $button_icon3 . ' ts-wings-button-' . $button_place3 . '"></i>';
		} else {
			$button_icon3				= '';
		}
		
		if (function_exists('vc_shortcode_custom_css_class')) {
			$css_class 					= apply_filters(VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, ' ' . vc_shortcode_custom_css_class($css, ' '), 'TS_VCSC_Icon_Wings_Button', $atts);
		} else {
			$css_class					= '';
		}

		if ($button_scope == "single") {
			$output .= '<div id="' . $button_id . '" class="ts-wings-button-container ' . $css_class . '" style="display: block; width: 100%; margin-top: ' . $margin_top . 'px; margin-bottom: ' . $margin_bottom . 'px;">';
				$output .= '<div class="ts-wings-button-inner clearFixMe">';
					if ($button_wing1 == "true") {
						$output .= '<div class="ts-wings-button-top ' . $radius_wing1 . ' ' . $Tooltip_Class2 . '" ' . $Tooltip_Content2 . '>' . ($button_place2 == "left" ? $button_icon2 : "") . $button_text2 . ($button_place2 == "right" ? $button_icon2 : "") . '</div>';
					}
					if ($button_wing2 == "true") {
						$output .= '<div class="ts-wings-button-bottom ' . $radius_wing2 . ' ' . $Tooltip_Class3 . '" ' . $Tooltip_Content3 . '>' . ($button_place3 == "left" ? $button_icon3 : "") . $button_text3 . ($button_place3 == "right" ? $button_icon3 : "") . '</div>';
					}
					$output .= '<div class="ts-wings-button-main ' . $radius_button . ' ' . $Tooltip_Class1 . '" ' . $Tooltip_Content1 . '><a class="ts-wings-button-link" href="' . $a1_href . '" target="' . $a1_target . '" title="' . $a1_title . '" ' . $a1_rel . '>' . ($button_place1 == "left" ? $button_icon1 : "") . $button_text1 . ($button_place1 == "right" ? $button_icon1 : "") . '</a></div>';
				$output .= '</div>';
			$output .= '</div>';
		}
		if ($button_scope == "dual") {
			$output .= '<div id="' . $button_id . '" class="ts-wings-button-container ' . $css_class . '" style="display: block; width: 100%; margin-top: ' . $margin_top . 'px; margin-bottom: ' . $margin_bottom . 'px;">';
				$output .= '<div class="ts-wings-button-inner clearFixMe">';
					$output .= '<div class="ts-wings-button-top ' . $radius_wing1 . ' ' . $Tooltip_Class2 . '" ' . $Tooltip_Content2 . '><a class="ts-wings-button-wing1" href="' . $a2_href . '" target="' . $a2_target . '" title="' . $a2_title . '" ' . $a2_rel . '>' . ($button_place2 == "left" ? $button_icon2 : "") . $button_text2 . ($button_place2 == "right" ? $button_icon2 : "") . '</a></div>';
					$output .= '<div class="ts-wings-button-bottom ' . $radius_wing2 . ' ' . $Tooltip_Class3 . '" ' . $Tooltip_Content3 . '><a class="ts-wings-button-wing2" href="' . $a3_href . '" target="' . $a3_target . '" title="' . $a3_title . '" ' . $a3_rel . '>' . ($button_place3 == "left" ? $button_icon3 : "") . $button_text3 . ($button_place3 == "right" ? $button_icon3 : "") . '</a></div>';
					$output .= '<div class="ts-wings-button-main ' . $radius_button . ' ' . $Tooltip_Class1 . '" ' . $Tooltip_Content1 . '>' . ($button_place1 == "left" ? $button_icon1 : "") . $button_text1 . ($button_place1 == "right" ? $button_icon1 : "") . '</div>';
				$output .= '</div>';
			$output .= '</div>';
		}
		if ($button_scope == "triple") {
			$output .= '<div id="' . $button_id . '" class="ts-wings-button-container ' . $css_class . '" style="display: block; width: 100%; margin-top: ' . $margin_top . 'px; margin-bottom: ' . $margin_bottom . 'px;">';
				$output .= '<div class="ts-wings-button-inner clearFixMe">';
					$output .= '<div class="ts-wings-button-top ' . $radius_wing1 . ' ' . $Tooltip_Class2 . '" ' . $Tooltip_Content2 . '><a class="ts-wings-button-wing1" href="' . $a2_href . '" target="' . $a2_target . '" title="' . $a2_title . '" ' . $a2_rel . '>' . ($button_place2 == "left" ? $button_icon2 : "") . $button_text2 . ($button_place2 == "right" ? $button_icon2 : "") . '</a></div>';
					$output .= '<div class="ts-wings-button-bottom ' . $radius_wing2 . ' ' . $Tooltip_Class3 . '" ' . $Tooltip_Content3 . '><a class="ts-wings-button-wing2" href="' . $a3_href . '" target="' . $a3_target . '" title="' . $a3_title . '" ' . $a3_rel . '>' . ($button_place3 == "left" ? $button_icon3 : "") . $button_text3 . ($button_place3 == "right" ? $button_icon3 : "") . '</a></div>';
					$output .= '<div class="ts-wings-button-main ' . $radius_button . ' ' . $Tooltip_Class1 . '" ' . $Tooltip_Content1 . '><a class="ts-wings-button-link" href="' . $a1_href . '" target="' . $a1_target . '" title="' . $a1_title . '" ' . $a1_rel . '>' . ($button_place1 == "left" ? $button_icon1 : "") . $button_text1 . ($button_place1 == "right" ? $button_icon1 : "") . '</a></div>';
				$output .= '</div>';
			$output .= '</div>';
		}

		echo $output;
		
		$myvariable = ob_get_clean();
		return $myvariable;
	}
?>