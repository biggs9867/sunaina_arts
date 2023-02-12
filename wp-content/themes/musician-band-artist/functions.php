<?php
	if ( ! function_exists( 'musician_band_artist_setup' ) ) :

	function musician_band_artist_setup() {
		$GLOBALS['content_width'] = apply_filters( 'musician_band_artist_content_width', 640 );
		
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'woocommerce' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'align-wide' );
		add_theme_support( 'wp-block-styles' );
		add_theme_support( 'responsive-embeds' );
		add_theme_support( 'html5', array( 'comment-list', 'search-form', 'comment-form', ) );
		add_theme_support( 'custom-logo', array(
			'height'      => 240,
			'width'       => 240,
			'flex-height' => true,
		) );

		add_theme_support( 'custom-background', array(
			'default-color' => 'ffffff'
		) );

		/*
		 * This theme styles the visual editor to resemble the theme style,
		 * specifically font, colors, icons, and column width.
		 */
		add_editor_style( array( 'assets/css/editor-style.css', music_recording_studio_font_url() ) );

		// Theme Activation Notice
		global $pagenow;

		if (is_admin() && ('themes.php' == $pagenow) && isset( $_GET['activated'] )) {
			add_action('admin_notices', 'musician_band_artist_activation_notice');
		}
	}
	endif;

	add_action( 'after_setup_theme', 'musician_band_artist_setup' );

	// Notice after Theme Activation
	function musician_band_artist_activation_notice() {
		echo '<div class="notice notice-success is-dismissible welcome-notice">';
		echo '<p>'. esc_html__( 'Thank you for choosing Musician Band Artist Theme. Would like to have you on our Welcome page so that you can reap all the benefits of our Musician Band Artist Theme.', 'musician-band-artist' ) .'</p>';
		echo '<span><a href="'. esc_url( admin_url( 'themes.php?page=musician_band_artist_guide' ) ) .'" class="button button-primary">'. esc_html__( 'GET STARTED', 'musician-band-artist' ) .'</a></span>';
		echo '<span class="demo-btn""><a href="'. esc_url( 'https://www.vwthemes.net/vw-musician-band-artist/' ) .'" class="button button-primary" target=_blank>'. esc_html__( 'VIEW DEMO', 'musician-band-artist' ) .'</a></span>';
		echo '<span class="upgrade-btn"><a href="'. esc_url( 'https://www.vwthemes.com/themes/music-band-wordpress-theme/' ) .'" class="button button-primary" target=_blank>'. esc_html__( 'UPGRADE PRO', 'musician-band-artist' ) .'</a></span>';
		echo '</div>';
	}

	add_action( 'wp_enqueue_scripts', 'musician_band_artist_enqueue_styles' );
	function musician_band_artist_enqueue_styles() {
    	$parent_style = 'music-recording-studio-basic-style'; // Style handle of parent theme.
    	
		wp_enqueue_style( 'bootstrap-style', get_template_directory_uri().'/assets/css/bootstrap.css' );
		wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
		wp_enqueue_style( 'musician-band-artist-style', get_stylesheet_uri(), array( $parent_style ) );
		require get_theme_file_path( '/custom-style.php' );
		wp_add_inline_style( 'musician-band-artist-style',$music_recording_studio_custom_css );
		require get_parent_theme_file_path( '/custom-style.php' );
		wp_add_inline_style( 'music-recording-studio-basic-style',$music_recording_studio_custom_css );
		wp_enqueue_style( 'musician-band-artist-block-style', get_theme_file_uri('/assets/css/blocks.css') );
		wp_enqueue_script( 'owl.carousel-js', get_theme_file_uri(). '/assets/js/owl.carousel.js', array('jquery') ,'',true);
		wp_enqueue_script( 'musician-band-artist-custom-scripts', get_theme_file_uri() . '/assets/js/custom.js', array('jquery'),'' ,true );
		wp_enqueue_style( 'owl.carousel-style', get_theme_file_uri() . '/assets/css/owl.carousel.css' );
		wp_enqueue_style( 'musician-band-artist-block-patterns-style-frontend', get_theme_file_uri('/inc/block-patterns/css/block-frontend.css') );

		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}
		
	add_action( 'init', 'musician_band_artist_remove_parent_function');
	function musician_band_artist_remove_parent_function() {
		remove_action( 'admin_notices', 'music_recording_studio_activation_notice' );
		remove_action( 'admin_menu', 'music_recording_studio_gettingstarted' );
	}

	add_action( 'customize_register', 'musician_band_artist_customize_register', 11 );
	function musician_band_artist_customize_register($wp_customize) {
		global $wp_customize;
		$wp_customize->remove_section( 'music_recording_studio_go_pro' );
		$wp_customize->remove_section( 'music_recording_studio_get_started_link' );
		$wp_customize->remove_section( 'music_recording_studio_about' );

		$wp_customize->add_setting('musician_band_artist_slider_button_text',array(
			'default'=> '',
			'sanitize_callback'	=> 'sanitize_text_field'
		));
		$wp_customize->add_control('musician_band_artist_slider_button_text',array(
			'label'	=> __('Add Slider Button Text','musician-band-artist'),
			'input_attrs' => array(
	            'placeholder' => __( 'LEARN MORE', 'musician-band-artist' ),
	        ),
			'section'=> 'music_recording_studio_slidersettings',
			'type'=> 'text',
			'active_callback' => 'music_recording_studio_default_slider'
		));

		//Topbar Section
		$wp_customize->add_section( 'musician_band_artist_topbar', array(
	    	'title'      => __( 'Topbar Section', 'musician-band-artist' ),
			'panel' => 'music_recording_studio_homepage_panel',
			'priority' => 10,
		));

		$wp_customize->add_setting('musician_band_artist_topbar_faq',array(
			'default'=> '',
			'sanitize_callback'	=> 'sanitize_text_field'
		)); 
		$wp_customize->add_control('musician_band_artist_topbar_faq',array(
			'label'	=> esc_html__('Add FAQs','musician-band-artist'),
			'input_attrs' => array(
	            'placeholder' => esc_html__( 'Faqs', 'musician-band-artist' ),
	        ),
			'section'=> 'musician_band_artist_topbar',
			'type'=> 'text'
		));

		$wp_customize->add_setting('musician_band_artist_topbar_faq_url',array(
			'default'=> '',
			'sanitize_callback'	=> 'esc_url_raw'
		)); 
		$wp_customize->add_control('musician_band_artist_topbar_faq_url',array(
			'label'	=> esc_html__('Add FAQs URL','musician-band-artist'),
			'input_attrs' => array(
	            'placeholder' => esc_html__( 'www.example-info.com', 'musician-band-artist' ),
	        ),
			'section'=> 'musician_band_artist_topbar',
			'type'=> 'url'
		));

		$wp_customize->add_setting('musician_band_artist_location',array(
			'default'=> '',
			'sanitize_callback'	=> 'sanitize_text_field'
		)); 
		$wp_customize->add_control('musician_band_artist_location',array(
			'label'	=> esc_html__('Add Location','musician-band-artist'),
			'input_attrs' => array(
	            'placeholder' => esc_html__( 'Location', 'musician-band-artist' ),
	        ),
			'section'=> 'musician_band_artist_topbar',
			'type'=> 'text'
		));

		$wp_customize->add_setting('musician_band_artist_location_url',array(
			'default'=> '',
			'sanitize_callback'	=> 'esc_url_raw'
		)); 
		$wp_customize->add_control('musician_band_artist_location_url',array(
			'label'	=> esc_html__('Add Location URL','musician-band-artist'),
			'input_attrs' => array(
	            'placeholder' => esc_html__( 'www.example-info.com', 'musician-band-artist' ),
	        ),
			'section'=> 'musician_band_artist_topbar',
			'type'=> 'url'
		));

		$wp_customize->add_setting('musician_band_artist_terms_condition',array(
			'default'=> '',
			'sanitize_callback'	=> 'sanitize_text_field'
		)); 
		$wp_customize->add_control('musician_band_artist_terms_condition',array(
			'label'	=> esc_html__('Add Terms and Condition','musician-band-artist'),
			'input_attrs' => array(
	            'placeholder' => esc_html__( 'Terms and Condition', 'musician-band-artist' ),
	        ),
			'section'=> 'musician_band_artist_topbar',
			'type'=> 'text'
		));

		$wp_customize->add_setting('musician_band_artist_terms_condition_url',array(
			'default'=> '',
			'sanitize_callback'	=> 'esc_url_raw'
		)); 
		$wp_customize->add_control('musician_band_artist_terms_condition_url',array(
			'label'	=> esc_html__('Add Terms and Condition URL','musician-band-artist'),
			'input_attrs' => array(
	            'placeholder' => esc_html__( 'www.example-info.com', 'musician-band-artist' ),
	        ),
			'section'=> 'musician_band_artist_topbar',
			'type'=> 'url'
		));

		$wp_customize->add_setting('musician_band_artist_topbar_album_update',array(
			'default'=> '',
			'sanitize_callback'	=> 'sanitize_text_field'
		)); 
		$wp_customize->add_control('musician_band_artist_topbar_album_update',array(
			'label'	=> esc_html__('Add Album Update','musician-band-artist'),
			'input_attrs' => array(
	            'placeholder' => esc_html__( 'The Eagles: New Album Available Now', 'musician-band-artist' ),
	        ),
			'section'=> 'musician_band_artist_topbar',
			'type'=> 'text'
		));

		$wp_customize->add_setting('musician_band_artist_header_btn_text',array(
			'default'=> '',
			'sanitize_callback'	=> 'sanitize_text_field'
		));
		$wp_customize->add_control('musician_band_artist_header_btn_text',array(
			'label'	=> esc_html__('Add Button Text','musician-band-artist'),
			'input_attrs' => array(
	            'placeholder' => esc_html__( 'START NOW', 'musician-band-artist' ),
	        ),
			'section'=> 'musician_band_artist_topbar',
			'type'=> 'text'
		));

		$wp_customize->add_setting('musician_band_artist_header_btn_link',array(
			'default'=> '',
			'sanitize_callback'	=> 'esc_url_raw'
		));
		$wp_customize->add_control('musician_band_artist_header_btn_link',array(
			'label'	=> esc_html__('Add Button Link','musician-band-artist'),
			'input_attrs' => array(
	            'placeholder' => esc_html__( 'www.example-info.com', 'musician-band-artist' ),
	        ),
			'section'=> 'musician_band_artist_topbar',
			'type'=> 'url'
		));

		//About Section
		$wp_customize->add_section( 'musician_band_artist_about', array(
	    	'title'      => __( 'About Section', 'musician-band-artist' ),
			'panel' => 'music_recording_studio_homepage_panel',
			'priority' => 11,
		));

		$wp_customize->add_setting( 'musician_band_artist_section_small_title', array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field'
		) );
		$wp_customize->add_control( 'musician_band_artist_section_small_title', array(
			'label'    => __( 'Add Section Small Title', 'musician-band-artist' ),
			'input_attrs' => array(
	            'placeholder' => __( 'ABOUT US', 'musician-band-artist' ),
	        ),
			'section'  => 'musician_band_artist_about',
			'type'     => 'text'
		) );

		$wp_customize->add_setting('musician_band_artist_section_title',array(
			'default'=> '',
			'sanitize_callback'	=> 'sanitize_text_field'
		)); 
		$wp_customize->add_control('musician_band_artist_section_title',array(
			'label'	=> esc_html__('Add Heading','musician-band-artist'),
			'input_attrs' => array(
	            'placeholder' => esc_html__( 'WELCOME TO STUDIO', 'musician-band-artist' ),
	        ),
			'section'=> 'musician_band_artist_about',
			'type'=> 'text'
		));

		$args =  array('numberposts' => -1);
		$post_list = get_posts($args);
		$i = 0;
		$psts[]='Select';  
		foreach($post_list as $post){
			$psts[$post->post_title] = $post->post_title;
		}

		$wp_customize->add_setting('musician_band_artist_about_post',array(
			'default'	=> 'select',
			'sanitize_callback' => 'musician_band_artist_sanitize_choices',
		));
		$wp_customize->add_control('musician_band_artist_about_post',array(
			'type'    => 'select',
			'choices' => $psts,
			'label' => __('Select About Post','musician-band-artist'),
			'section' => 'musician_band_artist_about',
		));

		$wp_customize->add_setting('musician_band_artist_about_serv_head',array(
			'default'=> '',
			'sanitize_callback'	=> 'sanitize_text_field'
		)); 
		$wp_customize->add_control('musician_band_artist_about_serv_head',array(
			'label'	=> esc_html__('Add services','musician-band-artist'),
			'input_attrs' => array(
	            'placeholder' => esc_html__( 'We give 100% satisfaction', 'musician-band-artist' ),
	        ),
			'section'=> 'musician_band_artist_about',
			'type'=> 'text'
		));

		$wp_customize->add_setting('musician_band_artist_about_serv_head_two',array(
			'default'=> '',
			'sanitize_callback'	=> 'sanitize_text_field'
		)); 
		$wp_customize->add_control('musician_band_artist_about_serv_head_two',array(
			'label'	=> esc_html__('Add services','musician-band-artist'),
			'input_attrs' => array(
	            'placeholder' => esc_html__( 'Quality Work', 'musician-band-artist' ),
	        ),
			'section'=> 'musician_band_artist_about',
			'type'=> 'text'
		));
	}

	add_action( 'customize_register', 'musician_band_artist_typography_customize_register', 12 );
	function musician_band_artist_typography_customize_register( $wp_customize ) {
		$wp_customize->remove_control( 'music_recording_studio_second_color' );
	}

	define('MUSICIAN_BAND_ARTIST_FREE_THEME_DOC',__('https://www.vwthemesdemo.com/docs/free-musician-band-artist/','musician-band-artist'));
	define('MUSICIAN_BAND_ARTIST_SUPPORT',__('https://wordpress.org/support/theme/musician-band-artist/','musician-band-artist'));
	define('MUSICIAN_BAND_ARTIST_REVIEW',__('https://wordpress.org/support/theme/musician-band-artist/reviews','musician-band-artist'));
	define('MUSICIAN_BAND_ARTIST_BUY_NOW',__('https://www.vwthemes.com/themes/music-band-wordpress-theme/','musician-band-artist'));
	define('MUSICIAN_BAND_ARTIST_LIVE_DEMO',__('https://www.vwthemes.net/vw-musician-band-artist/','musician-band-artist'));
	define('MUSICIAN_BAND_ARTIST_PRO_DOC',__('https://www.vwthemesdemo.com/docs/vw-musician-band-artist-pro/','musician-band-artist'));
	define('MUSICIAN_BAND_ARTIST_FAQ',__('https://www.vwthemes.com/faqs/','musician-band-artist'));
	define('MUSICIAN_BAND_ARTIST_CONTACT',__('https://www.vwthemes.com/contact/','musician-band-artist'));
	define('MUSICIAN_BAND_ARTIST_CHILD_THEME',__('https://developer.wordpress.org/themes/advanced-topics/child-themes/','musician-band-artist'));
	define('MUSICIAN_BAND_ARTIST_CREDIT',__('https://www.vwthemes.com/themes/music-band-wordpress-theme/','musician-band-artist'));

	if ( ! function_exists( 'musician_band_artist_credit' ) ) {
		function musician_band_artist_credit(){
			echo "<a href=".esc_url(MUSICIAN_BAND_ARTIST_CREDIT)." target='_blank'>". esc_html__('Music Band Artist WordPress Theme','musician-band-artist') ."</a>";
		}
	}

	if ( ! defined( 'MUSIC_RECORDING_STUDIO_GETSTARTED_URL' ) ) {
		define( 'MUSIC_RECORDING_STUDIO_GETSTARTED_URL', 'themes.php?page=musician_band_artist_guide');
	}

	if ( ! defined( 'MUSIC_RECORDING_STUDIO_GO_PRO' ) ) {
		define( 'MUSIC_RECORDING_STUDIO_GO_PRO', 'https://www.vwthemes.com/themes/music-band-wordpress-theme/');
	}

	function musician_band_artist_sanitize_choices( $input, $setting ) {
	    global $wp_customize; 
	    $control = $wp_customize->get_control( $setting->id ); 
	    if ( array_key_exists( $input, $control->choices ) ) {
	        return $input;
	    } else {
	        return $setting->default;
	    }
	}

	function musician_band_artist_sanitize_dropdown_pages( $page_id, $setting ) {
	  	$page_id = absint( $page_id );
	  	return ( 'publish' == get_post_status( $page_id ) ? $page_id : $setting->default );
	}

	/**
	 * Enqueue block editor style
	 */
	function musician_band_artist_block_editor_styles() {
	    wp_enqueue_style( 'musician-band-artist-block-patterns-style-editor', get_theme_file_uri( '/inc/block-patterns/css/block-editor.css' ), false, '1.0', 'all' );
	    wp_enqueue_style( 'font-awesome-css', get_template_directory_uri().'/css/fontawesome-all.css' );
	}
	add_action( 'enqueue_block_editor_assets', 'musician_band_artist_block_editor_styles' );

	/* Theme Widgets Setup */

	function musician_band_artist_widgets_init() {
		register_sidebar( array(
			'name'          => __( 'Footer Navigation 1', 'musician-band-artist' ),
			'description'   => __( 'Appears on footer 1', 'musician-band-artist' ),
			'id'            => 'footer-1',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		) );

		register_sidebar( array(
			'name'          => __( 'Footer Navigation 2', 'musician-band-artist' ),
			'description'   => __( 'Appears on footer 2', 'musician-band-artist' ),
			'id'            => 'footer-2',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		) );

		register_sidebar( array(
			'name'          => __( 'Footer Navigation 3', 'musician-band-artist' ),
			'description'   => __( 'Appears on footer 3', 'musician-band-artist' ),
			'id'            => 'footer-3',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		) );

		register_sidebar( array(
			'name'          => __( 'Footer Navigation 4', 'musician-band-artist' ),
			'description'   => __( 'Appears on footer 4', 'musician-band-artist' ),
			'id'            => 'footer-4',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		) );

		register_sidebar( array(
			'name'          => __( 'Social Icon', 'musician-band-artist' ),
			'description'   => __( 'Appears on topbar', 'musician-band-artist' ),
			'id'            => 'social-widget',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		) );
	}
	add_action( 'widgets_init', 'musician_band_artist_widgets_init' );

// Customizer Pro
load_template( ABSPATH . WPINC . '/class-wp-customize-section.php' );

class Musician_Band_Artist_Customize_Section_Pro extends WP_Customize_Section {
	public $type = 'musician-band-artist';
	public $pro_text = '';
	public $pro_url = '';
	public function json() {
		$json = parent::json();
		$json['pro_text'] = $this->pro_text;
		$json['pro_url']  = esc_url( $this->pro_url );
		return $json;
	}
	protected function render_template() { ?>
		<li id="accordion-section-{{ data.id }}" class="accordion-section control-section control-section-{{ data.type }} cannot-expand">
			<h3 class="accordion-section-title">
				{{ data.title }}
				<# if ( data.pro_text && data.pro_url ) { #>
					<a href="{{ data.pro_url }}" class="button button-secondary alignright" target="_blank">{{ data.pro_text }}</a>
				<# } #>
			</h3>
		</li>
	<?php }
}

final class Musician_Band_Artist_Customize {
	public static function get_instance() {
		static $instance = null;
		if ( is_null( $instance ) ) {
			$instance = new self;
			$instance->setup_actions();
		}
		return $instance;
	}
	private function __construct() {}
	private function setup_actions() {
		// Register panels, sections, settings, controls, and partials.
		add_action( 'customize_register', array( $this, 'sections' ) );
		// Register scripts and styles for the controls.
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
	}
	public function sections( $manager ) {
		// Register custom section types.
		$manager->register_section_type( 'Musician_Band_Artist_Customize_Section_Pro' );
		// Register sections.
		$manager->add_section( new Musician_Band_Artist_Customize_Section_Pro( $manager, 'musician_band_artist_upgrade_pro_link',
		array(
			'priority'   => 1,
			'title'    => esc_html__( 'MUSICIAN BAND PRO', 'musician-band-artist' ),
			'pro_text' => esc_html__( 'UPGRADE PRO', 'musician-band-artist' ),
			'pro_url'  => esc_url('https://www.vwthemes.com/themes/music-band-wordpress-theme/'),
		) ) );

		// Register sections.
		$manager->add_section(new Musician_Band_Artist_Customize_Section_Pro($manager,'musician_band_artist_get_started_link',array(
			'priority'   => 1,
			'title'    => esc_html__( 'DOCUMENTATION', 'musician-band-artist' ),
			'pro_text' => esc_html__( 'DOCS', 'musician-band-artist' ),
			'pro_url'  => esc_url('https://www.vwthemesdemo.com/docs/free-musician-band-artist/'),
		)));
	}
	public function enqueue_control_scripts() {
		wp_enqueue_script( 'musician-band-artist-customize-controls', get_stylesheet_directory_uri() . '/assets/js/customize-controls-child.js', array( 'customize-controls' ) );
		wp_enqueue_style( 'musician-band-artist-customize-controls', get_stylesheet_directory_uri() . '/assets/css/customize-controls-child.css' );
	}
}
Musician_Band_Artist_Customize::get_instance();

/* getstart */
require get_theme_file_path('/inc/getstart/getstart.php');

/* Plugin Activation */
require get_theme_file_path() . '/inc/getstart/plugin-activation.php';

/* Tgm */
require get_theme_file_path() . '/inc/tgm/tgm.php';

/* Block Pattern */
require get_theme_file_path('/inc/block-patterns/block-patterns.php');