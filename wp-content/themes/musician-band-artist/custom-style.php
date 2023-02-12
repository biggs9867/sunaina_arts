<?php

	/*------------ First highlight color --------------*/

	$music_recording_studio_first_color = get_theme_mod('music_recording_studio_first_color');

	$music_recording_studio_custom_css = '';

	if($music_recording_studio_first_color != false){
		$music_recording_studio_custom_css .='.header-btn a, .seemore-btn a, .abt-cont i,.post-categories li a ,.post-categories li a:hover{';
			$music_recording_studio_custom_css .='background: '.esc_attr($music_recording_studio_first_color).';';
		$music_recording_studio_custom_css .='}';
	}

	if($music_recording_studio_first_color != false){
		$music_recording_studio_custom_css .='#topbar .social-icons .widget a:hover, p.site-title a:hover, .logo h1 a:hover{';
			$music_recording_studio_custom_css .='color: '.esc_attr($music_recording_studio_first_color).';';
		$music_recording_studio_custom_css .='}';
	}

	/*-------------- Width Layout -------------------*/

	$music_recording_studio_theme_lay = get_theme_mod( 'music_recording_studio_width_option','Full Width');
    if($music_recording_studio_theme_lay == 'Boxed'){
		$music_recording_studio_custom_css .='body{';
			$music_recording_studio_custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
		$music_recording_studio_custom_css .='}';
		$music_recording_studio_custom_css .='.page-template-custom-home-page .main-header{';
			$music_recording_studio_custom_css .='width: 100%;';
		$music_recording_studio_custom_css .='}';
		$music_recording_studio_custom_css .='.scrollup i{';
			$music_recording_studio_custom_css .='right: 100px;';
		$music_recording_studio_custom_css .='}';
		$music_recording_studio_custom_css .='.scrollup.left i{';
			$music_recording_studio_custom_css .='left: 100px;';
		$music_recording_studio_custom_css .='}';
	}else if($music_recording_studio_theme_lay == 'Wide Width'){
		$music_recording_studio_custom_css .='body{';
			$music_recording_studio_custom_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$music_recording_studio_custom_css .='}';
		$music_recording_studio_custom_css .='.page-template-custom-home-page .main-header{';
			$music_recording_studio_custom_css .='width: 100%;';
		$music_recording_studio_custom_css .='}';
		$music_recording_studio_custom_css .='.scrollup i{';
			$music_recording_studio_custom_css .='right: 30px;';
		$music_recording_studio_custom_css .='}';
		$music_recording_studio_custom_css .='.scrollup.left i{';
			$music_recording_studio_custom_css .='left: 30px;';
		$music_recording_studio_custom_css .='}';
	}else if($music_recording_studio_theme_lay == 'Full Width'){
		$music_recording_studio_custom_css .='body{';
			$music_recording_studio_custom_css .='max-width: 100%;';
		$music_recording_studio_custom_css .='}';
	}

	$music_recording_studio_header_menus_color = get_theme_mod('music_recording_studio_header_menus_color');
	if($music_recording_studio_header_menus_color != false){
		$music_recording_studio_custom_css .='.main-navigation a, .page-template-custom-home-page .main-navigation a{';
			$music_recording_studio_custom_css .='color: '.esc_attr($music_recording_studio_header_menus_color).';';
		$music_recording_studio_custom_css .='}';
	}

	$music_recording_studio_header_menus_hover_color = get_theme_mod('music_recording_studio_header_menus_hover_color');
	if($music_recording_studio_header_menus_hover_color != false){
		$music_recording_studio_custom_css .='.main-navigation ul li a:hover{';
			$music_recording_studio_custom_css .='color: '.esc_attr($music_recording_studio_header_menus_hover_color).'!important;';
		$music_recording_studio_custom_css .='}';
	}

	$music_recording_studio_header_submenus_color = get_theme_mod('music_recording_studio_header_submenus_color');
	if($music_recording_studio_header_submenus_color != false){
		$music_recording_studio_custom_css .='.main-navigation ul ul a{';
			$music_recording_studio_custom_css .='color: '.esc_attr($music_recording_studio_header_submenus_color).'!important;';
		$music_recording_studio_custom_css .='}';
	}

	$music_recording_studio_header_submenus_hover_color = get_theme_mod('music_recording_studio_header_submenus_hover_color');
	if($music_recording_studio_header_submenus_hover_color != false){
		$music_recording_studio_custom_css .='.main-navigation ul.sub-menu a:hover{';
			$music_recording_studio_custom_css .='color: '.esc_attr($music_recording_studio_header_submenus_hover_color).'!important;';
		$music_recording_studio_custom_css .='}';
	}


	/*--------- Preloader Background Color  -------------------*/

	$music_recording_studio_preloader_bg_color = get_theme_mod('music_recording_studio_preloader_bg_color');
	if($music_recording_studio_preloader_bg_color != false){
		$music_recording_studio_custom_css .='#preloader{';
			$music_recording_studio_custom_css .='background-color: '.esc_attr($music_recording_studio_preloader_bg_color).';';
		$music_recording_studio_custom_css .='}';
	}

	$music_recording_studio_preloader_border_color = get_theme_mod('music_recording_studio_preloader_border_color');
	if($music_recording_studio_preloader_border_color != false){
		$music_recording_studio_custom_css .='.loader-line{';
			$music_recording_studio_custom_css .='border-color: '.esc_attr($music_recording_studio_preloader_border_color).'!important;';
		$music_recording_studio_custom_css .='}';
	}

	$music_recording_studio_footer_background_color = get_theme_mod('music_recording_studio_footer_background_color');
	if($music_recording_studio_footer_background_color != false){
		$music_recording_studio_custom_css .='#footer{';
			$music_recording_studio_custom_css .='background-color: '.esc_attr($music_recording_studio_footer_background_color).';';
		$music_recording_studio_custom_css .='}';
	}

	// Slider CSS
	if(get_theme_mod('music_recording_studio_slider_hide_show') == false){
		$music_recording_studio_custom_css .=' .page-template-custom-home-page .main-navigation a{';
				$music_recording_studio_custom_css .=' color: #000;';
		$music_recording_studio_custom_css .='}';
	}

		/*---------------------------Slider Height ------------*/

	$music_recording_studio_slider_height = get_theme_mod('music_recording_studio_slider_height');
	if($music_recording_studio_slider_height != false){
		$music_recording_studio_custom_css .='#slider img{';
			$music_recording_studio_custom_css .='height: '.esc_attr($music_recording_studio_slider_height).';';
		$music_recording_studio_custom_css .='}';
	}