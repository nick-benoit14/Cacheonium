<?php 
/**
 * Cacheonium functions.
 *
 * 
 */

        add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
        function theme_enqueue_styles()
            {
                wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
        
            }
            
       require 'inc/template-tags.php'; //include template tags file
       require 'inc/navigation.php';
	   require 'inc/element-classes.php';
	   require 'inc/data-class.php';




if ( !function_exists( 'statement_defaults' ) ) :
	add_filter( 'generate_option_defaults','statement_defaults' );
	function statement_defaults()
	{
		$statement_defaults = array(
			'hide_title' => 'true',
			'hide_tagline' => 'true',
			'logo' => 'true',
			'container_width' => '1300',
			'header_layout_setting' => 'fluid-header',
			'center_header' => 'true',
			'center_nav' => 'true',
			'nav_alignment_setting' => 'center',
			'header_alignment_setting' => 'center',
			'nav_layout_setting' => 'fluid-nav',
			'nav_position_setting' => 'nav-below-header',
			'nav_search' => '',
			'content_layout_setting' => 'separate-containers',
			'layout_setting' => 'right-sidebar',
			'blog_layout_setting' => 'right-sidebar',
			'single_layout_setting' => 'right-sidebar',
			'post_content' => 'full',
			'footer_layout_setting' => 'fluid-footer',
			'footer_widget_setting' => '1',
			'background_color' => '#ffffff',
			'text_color' => '#3a3a3a',
			'link_color' => '#1da5bd',
			'link_color_hover' => '#000000',
			'link_color_visited' => '',
		);
		
		return $statement_defaults;
	}
endif;

/**
 * Set default options
 */



if ( !function_exists( 'statement_get_color_defaults' ) ) :
	add_filter( 'generate_color_option_defaults','statement_get_color_defaults' );
	function statement_get_color_defaults()
	{
		$statement_color_defaults = array(
			'header_background_color' => '#ffffff',
			'header_text_color' => '#ffffff',
			'header_link_color' => '#ffffff',
			'header_link_hover_color' => '#222222',
			'site_title_color' => '#ffffff',
			'site_tagline_color' => '#ffffff',
			'navigation_background_color' => '#ff3722',
			'navigation_text_color' => '#ffffff',
			'navigation_background_hover_color' => '#ffba22',
			'navigation_text_hover_color' => '#ffffff',
			'navigation_background_current_color' => '#1da4bd',
			'navigation_text_current_color' => '#ffffff',
			'subnavigation_background_color' => '#1da5bd',
			'subnavigation_text_color' => '#ffffff',
			'subnavigation_background_hover_color' => '#1da5bd',
			'subnavigation_text_hover_color' => '#222222',
			'subnavigation_background_current_color' => '#1da5bd',
			'subnavigation_text_current_color' => '#222222',
			'content_background_color' => '#FFFFFF',
			'content_text_color' => '#3a3a3a',
			'content_link_color' => '',
			'content_link_hover_color' => '',
			'content_title_color' => '',
			'blog_post_title_color' => '#222222',
			'blog_post_title_hover_color' => '#1da5bd',
			'entry_meta_text_color' => '#888888',
			'entry_meta_link_color' => '#666666',
			'entry_meta_link_color_hover' => '#1da5bd',
			'h1_color' => '',
			'h2_color' => '',
			'h3_color' => '',
			'sidebar_widget_background_color' => '#FFFFFF',
			'sidebar_widget_text_color' => '#3a3a3a',
			'sidebar_widget_link_color' => '',
			'sidebar_widget_link_hover_color' => '',
			'sidebar_widget_title_color' => '#000000',
			'footer_widget_background_color' => '#1da5bd',
			'footer_widget_text_color' => '#ffffff',
			'footer_widget_link_color' => '#ffffff',
			'footer_widget_link_hover_color' => '#222222',
			'footer_widget_title_color' => '#ffffff',
			'footer_background_color' => '#ffffff',
			'footer_text_color' => '#222222',
			'footer_link_color' => '#1da5bd',
			'footer_link_hover_color' => '#222222',
			'form_background_color' => '#ffffff',
			'form_text_color' => '#666666',
			'form_background_color_focus' => '#FFFFFF',
			'form_text_color_focus' => '#666666',
			'form_border_color' => '#CCCCCC',
			'form_border_color_focus' => '#BFBFBF',
			'form_button_background_color' => '#1da5bd',
			'form_button_background_color_hover' => '#847f67',
			'form_button_text_color' => '#FFFFFF',
			'form_button_text_color_hover' => '#FFFFFF'
		);
		
		return $statement_color_defaults;
	}
endif;

/*  Colors
 

.bright-yellow{background-color:#ffba22; color:white;}
.bright-green{background-color:#19bf45; color:white;}
.bright-blue{background-color:#1da4bd; color:white;}
.bright-red{background-color:#ff3722; color:white;}

*/



if ( !function_exists( 'get_color_style' ) ) :

	function get_color_style($color_num)
		{
			
			$num_colors = 4;
			
		  
			$selection = $color_num % $num_colors;
			

			
			if($selection == 0){return 'bright-yellow';}			
			else if($selection == 1){return 'bright-green';}
			else if($selection == 2){return 'bright-blue';}
			else if($selection == 3){return 'bright-red';}
			

			
		}
function get_button_style($num)
	{
		$style = " ";
		$style .= get_color_style($num) . " ";
		return $style;
	}


endif;





?>


