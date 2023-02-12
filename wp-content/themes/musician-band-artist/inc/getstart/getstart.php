<?php
//about theme info
add_action( 'admin_menu', 'musician_band_artist_gettingstarted' );
function musician_band_artist_gettingstarted() {    	
	add_theme_page( esc_html__('About Musician Band Artist', 'musician-band-artist'), esc_html__('About Musician Band Artist', 'musician-band-artist'), 'edit_theme_options', 'musician_band_artist_guide', 'musician_band_artist_mostrar_guide');   
}

// Add a Custom CSS file to WP Admin Area
function musician_band_artist_admin_theme_style() {
   wp_enqueue_style('musician-band-artist-custom-admin-style', esc_url(get_theme_file_uri()) . '/inc/getstart/getstart.css');
   wp_enqueue_script('musician-band-artist-tabs', esc_url(get_theme_file_uri()) . '/inc/getstart/js/tab.js');
}
add_action('admin_enqueue_scripts', 'musician_band_artist_admin_theme_style');

//guidline for about theme
function musician_band_artist_mostrar_guide() { 
	//custom function about theme customizer
	$return = add_query_arg( array()) ;
	$theme = wp_get_theme( 'musician-band-artist' );
?>

<div class="wrapper-info">
    <div class="col-left">
    	<h2><?php esc_html_e( 'Welcome to Musician Band Artist Theme', 'musician-band-artist' ); ?> <span class="version">Version: <?php echo esc_html($theme['Version']);?></span></h2>
    	<p><?php esc_html_e('All our WordPress themes are modern, minimalist, 100% responsive, seo-friendly,feature-rich, and multipurpose that best suit designers, bloggers and other professionals who are working in the creative fields.','musician-band-artist'); ?></p>
    </div>
    <div class="col-right">
    	<div class="logo">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/final-logo.png" alt="" />
		</div>
		<div class="update-now">
			<h4><?php esc_html_e('Buy Music Band Artist at 20% Discount','musician-band-artist'); ?></h4>
			<h4><?php esc_html_e('Use Coupon','musician-band-artist'); ?> ( <span><?php esc_html_e('vwpro20','musician-band-artist'); ?></span> ) </h4> 
			<div class="info-link">
				<a href="<?php echo esc_url( MUSICIAN_BAND_ARTIST_BUY_NOW ); ?>" target="_blank"> <?php esc_html_e( 'Upgrade to Pro', 'musician-band-artist' ); ?></a>
			</div>
		</div>
    </div>

    	
    <div class="tab-sec">
		<div class="tab">
		  	<button class="tablinks" onclick="musician_band_artist_open_tab(event, 'lite_theme')"><?php esc_html_e( 'Setup With Customizer', 'musician-band-artist' ); ?></button>
		  	<button class="tablinks" onclick="musician_band_artist_open_tab(event, 'gutenberg_editor')"><?php esc_html_e( 'Setup With Gutunberg Block', 'musician-band-artist' ); ?></button>
		  	<button class="tablinks" onclick="musician_band_artist_open_tab(event, 'block_pattern')"><?php esc_html_e( 'Setup With Block Pattern', 'musician-band-artist' ); ?></button>
		  	<button class="tablinks" onclick="musician_band_artist_open_tab(event, 'product_addons_editor')"><?php esc_html_e( 'Woocommerce Product Addons', 'musician-band-artist' ); ?></button>
		  	<button class="tablinks" onclick="musician_band_artist_open_tab(event, 'theme_pro')"><?php esc_html_e( 'Get Premium', 'musician-band-artist' ); ?></button>
		  	<button class="tablinks" onclick="musician_band_artist_open_tab(event, 'free_pro')"><?php esc_html_e( 'Support', 'musician-band-artist' ); ?></button>
		</div>
		
		<?php
			$musician_band_artist_plugin_custom_css = '';
			if(class_exists('Ibtana_Visual_Editor_Menu_Class')){
				$musician_band_artist_plugin_custom_css ='display: block';
			}
		?>
		<div id="lite_theme" class="tabcontent open">
			<?php if(!class_exists('Ibtana_Visual_Editor_Menu_Class')){ 
				$plugin_ins = Musician_Band_Artist_Plugin_Activation_Settings::get_instance();
				$musician_band_artist_actions = $plugin_ins->recommended_actions;
				?>
				<div class="musician-band-artist-recommended-plugins">
				    <div class="musician-band-artist-action-list">
				        <?php if ($musician_band_artist_actions): foreach ($musician_band_artist_actions as $key => $musician_band_artist_actionValue): ?>
				                <div class="musician-band-artist-action" id="<?php echo esc_attr($musician_band_artist_actionValue['id']);?>">
			                        <div class="action-inner">
			                            <h3 class="action-title"><?php echo esc_html($musician_band_artist_actionValue['title']); ?></h3>
			                            <div class="action-desc"><?php echo esc_html($musician_band_artist_actionValue['desc']); ?></div>
			                            <?php echo wp_kses_post($musician_band_artist_actionValue['link']); ?>
			                            <a class="ibtana-skip-btn" get-start-tab-id="lite-theme-tab" href="javascript:void(0);"><?php esc_html_e('Skip','musician-band-artist'); ?></a>
			                        </div>
				                </div>
				            <?php endforeach;
				        endif; ?>
				    </div>
				</div>
			<?php } ?>
			<div class="lite-theme-tab" style="<?php echo esc_attr($musician_band_artist_plugin_custom_css); ?>">
				<h3><?php esc_html_e( 'Lite Theme Information', 'musician-band-artist' ); ?></h3>
				<hr class="h3hr">
			  	<p><?php esc_html_e('Musician Band Artist is a theme based on music and art. This theme is a great deal for artists, audio, band, music artist, music label, music players, music stores, and more websites related to the music world. It is a responsive WP theme with multiple features. Features like different sections and layouts. The theme is secure and clean-coded, and users do not need to know any coding language to operate it. Multiple layouts and 100+ google fonts are available for customization. Users can easily customize the theme for their site and requirement. The theme is completely stunning and user-friendly. With this theme, the users will be beneficial for all the musicians and the music industry as it has sophisticated sections such as the Team section, Testimonial section, Services section, and other types of sections with custom post type. Also, it has a slider with an unlimited number of slides option. All Musician Band Artists, music events, music festivals, music labels, music producers, and music shop websites can use this theme. This easy-to-use theme comes with social icons so users can showcase their products and services to the world and grow their business worldwide.','musician-band-artist'); ?></p>
			  	<div class="col-left-inner">
			  		<h4><?php esc_html_e( 'Theme Documentation', 'musician-band-artist' ); ?></h4>
					<p><?php esc_html_e( 'If you need any assistance regarding setting up and configuring the Theme, our documentation is there.', 'musician-band-artist' ); ?></p>
					<div class="info-link">
						<a href="<?php echo esc_url( MUSICIAN_BAND_ARTIST_FREE_THEME_DOC ); ?>" target="_blank"> <?php esc_html_e( 'Documentation', 'musician-band-artist' ); ?></a>
					</div>
					<hr>
					<h4><?php esc_html_e('Theme Customizer', 'musician-band-artist'); ?></h4>
					<p> <?php esc_html_e('To begin customizing your website, start by clicking "Customize".', 'musician-band-artist'); ?></p>
					<div class="info-link">
						<a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e('Customizing', 'musician-band-artist'); ?></a>
					</div>
					<hr>				
					<h4><?php esc_html_e('Having Trouble, Need Support?', 'musician-band-artist'); ?></h4>
					<p> <?php esc_html_e('Our dedicated team is well prepared to help you out in case of queries and doubts regarding our theme.', 'musician-band-artist'); ?></p>
					<div class="info-link">
						<a href="<?php echo esc_url( MUSICIAN_BAND_ARTIST_SUPPORT ); ?>" target="_blank"><?php esc_html_e('Support Forum', 'musician-band-artist'); ?></a>
					</div>
					<hr>
					<h4><?php esc_html_e('Reviews & Testimonials', 'musician-band-artist'); ?></h4>
					<p> <?php esc_html_e('All the features and aspects of this WordPress Theme are phenomenal. I\'d recommend this theme to all.', 'musician-band-artist'); ?>  </p>
					<div class="info-link">
						<a href="<?php echo esc_url( MUSICIAN_BAND_ARTIST_REVIEW ); ?>" target="_blank"><?php esc_html_e('Reviews', 'musician-band-artist'); ?></a>
					</div>
			  		<div class="link-customizer">
						<h3><?php esc_html_e( 'Link to customizer', 'musician-band-artist' ); ?></h3>
						<hr class="h3hr">
						<div class="first-row">
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-buddicons-buddypress-logo"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[control]=custom_logo') ); ?>" target="_blank"><?php esc_html_e('Upload your logo','musician-band-artist'); ?></a>
								</div>
								<div class="row-box2">
									<span class="dashicons dashicons-slides"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=music_recording_studio_slidersettings') ); ?>" target="_blank"><?php esc_html_e('Slider Settings','musician-band-artist'); ?></a>
								</div>
							</div>
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-welcome-write-blog"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=musician_band_artist_topbar') ); ?>" target="_blank"><?php esc_html_e('Topbar Settings','musician-band-artist'); ?></a>
								</div>
								<div class="row-box2">
									<span class="dashicons dashicons-editor-table"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=musician_band_artist_about') ); ?>" target="_blank"><?php esc_html_e('About Section','musician-band-artist'); ?></a>
								</div>
							</div>
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-menu"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=nav_menus') ); ?>" target="_blank"><?php esc_html_e('Menus','musician-band-artist'); ?></a>
								</div>
								<div class="row-box2">
									<span class="dashicons dashicons-screenoptions"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=widgets') ); ?>" target="_blank"><?php esc_html_e('Footer Widget','musician-band-artist'); ?></a>
								</div>
							</div>

							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-format-gallery"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=music_recording_studio_post_settings') ); ?>" target="_blank"><?php esc_html_e('Post settings','musician-band-artist'); ?></a>
								</div>
								 <div class="row-box2">
									<span class="dashicons dashicons-align-center"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=music_recording_studio_service_section') ); ?>" target="_blank"><?php esc_html_e('Services Section','musician-band-artist'); ?></a>
								</div> 
							</div>
							
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-admin-generic"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=music_recording_studio_left_right') ); ?>" target="_blank"><?php esc_html_e('General Settings','musician-band-artist'); ?></a>
								</div>
								<div class="row-box2">
									<span class="dashicons dashicons-text-page"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=music_recording_studio_footer') ); ?>" target="_blank"><?php esc_html_e('Footer Text','musician-band-artist'); ?></a>
								</div>
							</div>
						</div>
					</div>
			  	</div>
				<div class="col-right-inner">
					<h3 class="page-template"><?php esc_html_e('How to set up Home Page Template','musician-band-artist'); ?></h3>
				  	<hr class="h3hr">
					<p><?php esc_html_e('Follow these instructions to setup Home page.','musician-band-artist'); ?></p>
	                <ul>
	                  	<p><span class="strong"><?php esc_html_e('1. Create a new page :','musician-band-artist'); ?></span><?php esc_html_e(' Go to ','musician-band-artist'); ?>
					  	<b><?php esc_html_e(' Dashboard >> Pages >> Add New Page','musician-band-artist'); ?></b></p>

	                  	<p><?php esc_html_e('Name it as "Home" then select the template "Custom Home Page".','musician-band-artist'); ?></p>
	                  	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/home-page-template.png" alt="" />
	                  	<p><span class="strong"><?php esc_html_e('2. Set the front page:','musician-band-artist'); ?></span><?php esc_html_e(' Go to ','musician-band-artist'); ?>
					  	<b><?php esc_html_e(' Settings >> Reading ','musician-band-artist'); ?></b></p>
					  	<p><?php esc_html_e('Select the option of Static Page, now select the page you created to be the homepage, while another page to be your default page.','musician-band-artist'); ?></p>
	                  	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/set-front-page.png" alt="" />
	                  	<p><?php esc_html_e(' Once you are done with this, then follow the','musician-band-artist'); ?> <a class="doc-links" href="https://www.vwthemesdemo.com/docs/free-musician-band-artist/" target="_blank"><?php esc_html_e('Documentation','musician-band-artist'); ?></a></p>
	                </ul>
			  	</div>
			</div>
		</div>	

		<div id="block_pattern" class="tabcontent">
			<?php if(!class_exists('Ibtana_Visual_Editor_Menu_Class')){ 
				$plugin_ins = Musician_Band_Artist_Plugin_Activation_Settings::get_instance();
				$musician_band_artist_actions = $plugin_ins->recommended_actions;
				?>
				<div class="musician-band-artist-recommended-plugins">
				    <div class="musician-band-artist-action-list">
				        <?php if ($musician_band_artist_actions): foreach ($musician_band_artist_actions as $key => $musician_band_artist_actionValue): ?>
				                <div class="musician-band-artist-action" id="<?php echo esc_attr($musician_band_artist_actionValue['id']);?>">
			                        <div class="action-inner">
			                            <h3 class="action-title"><?php echo esc_html($musician_band_artist_actionValue['title']); ?></h3>
			                            <div class="action-desc"><?php echo esc_html($musician_band_artist_actionValue['desc']); ?></div>
			                            <?php echo wp_kses_post($musician_band_artist_actionValue['link']); ?>
			                            <a class="ibtana-skip-btn" href="javascript:void(0);" get-start-tab-id="gutenberg-editor-tab"><?php esc_html_e('Skip','musician-band-artist'); ?></a>
			                        </div>
				                </div>
				            <?php endforeach;
				        endif; ?>
				    </div>
				</div>
			<?php } ?>
			<div class="gutenberg-editor-tab" style="<?php echo esc_attr($musician_band_artist_plugin_custom_css); ?>">
				<div class="block-pattern-img">
				  	<h3><?php esc_html_e( 'Block Patterns', 'musician-band-artist' ); ?></h3>
					<hr class="h3hr">
					<p><?php esc_html_e('Follow the below instructions to setup Home page with Block Patterns.','musician-band-artist'); ?></p>
	              	<p><b><?php esc_html_e('Click on Below Add new page button >> Click on "+" Icon >> Click Pattern Tab >> Click on homepage sections >> Publish.','musician-band-artist'); ?></span></b></p>
	              	<div class="musician-band-artist-pattern-page">
				    	<a href="javascript:void(0)" class="vw-pattern-page-btn button-primary button"><?php esc_html_e('Add New Page','musician-band-artist'); ?></a>
				    </div>
	              	<img src="<?php echo esc_url(get_theme_file_uri()); ?>/inc/getstart/images/block-pattern.png" alt="" />	
	            </div>

	            <div class="block-pattern-link-customizer">
		            <div class="link-customizer-with-block-pattern">
							<h3><?php esc_html_e( 'Link to customizer', 'musician-band-artist' ); ?></h3>
							<hr class="h3hr">
							<div class="first-row">
								<div class="row-box">
									<div class="row-box1">
										<span class="dashicons dashicons-buddicons-buddypress-logo"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[control]=custom_logo') ); ?>" target="_blank"><?php esc_html_e('Upload your logo','musician-band-artist'); ?></a>
									</div>
									<div class="row-box2">
										<span class="dashicons dashicons-slides"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_health_coaching_slidersettings') ); ?>" target="_blank"><?php esc_html_e('Slider Settings','musician-band-artist'); ?></a>
									</div>
								</div>
								<div class="row-box">
									<div class="row-box1">
										<span class="dashicons dashicons-menu"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=nav_menus') ); ?>" target="_blank"><?php esc_html_e('Menus','musician-band-artist'); ?></a>
									</div>
									
									<div class="row-box2">
										<span class="dashicons dashicons-text-page"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_health_coaching_footer') ); ?>" target="_blank"><?php esc_html_e('Footer Text','musician-band-artist'); ?></a>
									</div>
								</div>

								<div class="row-box">
									<div class="row-box1">
										<span class="dashicons dashicons-format-gallery"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_health_coaching_post_settings') ); ?>" target="_blank"><?php esc_html_e('Post settings','musician-band-artist'); ?></a>
									</div>
									 <div class="row-box2">
										<span class="dashicons dashicons-align-center"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_health_coaching_woocommerce_section') ); ?>" target="_blank"><?php esc_html_e('WooCommerce Layout','musician-band-artist'); ?></a>
									</div> 
								</div>
								
								<div class="row-box">
									<div class="row-box1">
										<span class="dashicons dashicons-admin-generic"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_health_coaching_left_right') ); ?>" target="_blank"><?php esc_html_e('General Settings','musician-band-artist'); ?></a>
									</div>
									 <div class="row-box2">
										<span class="dashicons dashicons-screenoptions"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=widgets') ); ?>" target="_blank"><?php esc_html_e('Footer Widget','musician-band-artist'); ?></a>
									</div> 
								</div>
							</div>
						</div>
					</div>		
	        </div>
		</div>	

		<div id="gutenberg_editor" class="tabcontent">
			<?php if(!class_exists('Ibtana_Visual_Editor_Menu_Class')){ 
			$plugin_ins = Musician_Band_Artist_Plugin_Activation_Settings::get_instance();
			$musician_band_artist_actions = $plugin_ins->recommended_actions;
			?>
				<div class="musician-band-artist-recommended-plugins">
				    <div class="musician-band-artist-action-list">
				        <?php if ($musician_band_artist_actions): foreach ($musician_band_artist_actions as $key => $musician_band_artist_actionValue): ?>
				                <div class="musician-band-artist-action" id="<?php echo esc_attr($musician_band_artist_actionValue['id']);?>">
			                        <div class="action-inner plugin-activation-redirect">
			                            <h3 class="action-title"><?php echo esc_html($musician_band_artist_actionValue['title']); ?></h3>
			                            <div class="action-desc"><?php echo esc_html($musician_band_artist_actionValue['desc']); ?></div>
			                            <?php echo wp_kses_post($musician_band_artist_actionValue['link']); ?>
			                        </div>
				                </div>
				            <?php endforeach;
				        endif; ?>
				    </div>
				</div>
			<?php }else{ ?>
				<h3><?php esc_html_e( 'Gutunberg Blocks', 'musician-band-artist' ); ?></h3>
				<hr class="h3hr">
				<div class="musician-band-artist-pattern-page">
			    	<a href="<?php echo esc_url( admin_url( 'admin.php?page=ibtana-visual-editor-templates' ) ); ?>" class="vw-pattern-page-btn ibtana-dashboard-page-btn button-primary button"><?php esc_html_e('Ibtana Settings','musician-band-artist'); ?></a>
			    </div>

			    <div class="link-customizer-with-guternberg-ibtana">
						<h3><?php esc_html_e( 'Link to customizer', 'musician-band-artist' ); ?></h3>
						<hr class="h3hr">
						<div class="first-row">
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-buddicons-buddypress-logo"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[control]=custom_logo') ); ?>" target="_blank"><?php esc_html_e('Upload your logo','musician-band-artist'); ?></a>
								</div>
								<div class="row-box2">
									<span class="dashicons dashicons-slides"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=music_recording_studio_slidersettings') ); ?>" target="_blank"><?php esc_html_e('Slider Settings','musician-band-artist'); ?></a>
								</div>
							</div>
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-menu"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=nav_menus') ); ?>" target="_blank"><?php esc_html_e('Menus','musician-band-artist'); ?></a>
								</div>
								
								<div class="row-box2">
									<span class="dashicons dashicons-text-page"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=music_recording_studio_footer_section') ); ?>" target="_blank"><?php esc_html_e('Footer Text','musician-band-artist'); ?></a>
								</div>
							</div>

							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-format-gallery"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=music_recording_studio_post_settings') ); ?>" target="_blank"><?php esc_html_e('Post settings','musician-band-artist'); ?></a>
								</div>
								 <div class="row-box2">
									<span class="dashicons dashicons-align-center"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=music_recording_studio_woocommerce_section') ); ?>" target="_blank"><?php esc_html_e('WooCommerce Layout','musician-band-artist'); ?></a>
								</div> 
							</div>
							
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-admin-generic"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=music_recording_studio_left_right') ); ?>" target="_blank"><?php esc_html_e('General Settings','musician-band-artist'); ?></a>
								</div>
								 <div class="row-box2">
									<span class="dashicons dashicons-screenoptions"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=widgets') ); ?>" target="_blank"><?php esc_html_e('Footer Widget','musician-band-artist'); ?></a>
								</div> 
							</div>
						</div>
				</div>
			<?php } ?>
		</div>

		<div id="product_addons_editor" class="tabcontent">
			<?php if(!class_exists('IEPA_Loader')){
				$plugin_ins = Musician_Band_Artist_Plugin_Activation_Woo_Products::get_instance();
				$musician_band_artist_actions = $plugin_ins->recommended_actions;
				?>
				<div class="musician-band-artist-recommended-plugins">
					    <div class="musician-band-artist-action-list">
					        <?php if ($musician_band_artist_actions): foreach ($musician_band_artist_actions as $key => $musician_band_artist_actionValue): ?>
					                <div class="musician-band-artist-action" id="<?php echo esc_attr($musician_band_artist_actionValue['id']);?>">
				                        <div class="action-inner plugin-activation-redirect">
				                            <h3 class="action-title"><?php echo esc_html($musician_band_artist_actionValue['title']); ?></h3>
				                            <div class="action-desc"><?php echo esc_html($musician_band_artist_actionValue['desc']); ?></div>
				                            <?php echo wp_kses_post($musician_band_artist_actionValue['link']); ?>
				                        </div>
					                </div>
					            <?php endforeach;
					        endif; ?>
					    </div>
				</div>
			<?php }else{ ?>
				<h3><?php esc_html_e( 'Woocommerce Products Blocks', 'musician-band-artist' ); ?></h3>
				<hr class="h3hr">
				<div class="musician-band-artist-pattern-page">
					<p><?php esc_html_e('Follow the below instructions to setup Products Templates.','musician-band-artist'); ?></p>
					<p><b><?php esc_html_e('1. First you need to activate these plugins','musician-band-artist'); ?></b></p>
						<p><?php esc_html_e('1. Ibtana - WordPress Website Builder ','musician-band-artist'); ?></p>
						<p><?php esc_html_e('2. Ibtana - Ecommerce Product Addons.','musician-band-artist'); ?></p>
						<p><?php esc_html_e('3. Woocommerce','musician-band-artist'); ?></p>

					<p><b><?php esc_html_e('2. Go To Dashboard >> Ibtana Settings >> Woocommerce Templates','musician-band-artist'); ?></span></b></p>
	              	<div class="musician-band-artist-pattern-page-btn">
			    		<a href="<?php echo esc_url( admin_url( 'admin.php?page=ibtana-visual-editor-woocommerce-templates&ive_wizard_view=parent' ) ); ?>" class="vw-pattern-page-btn ibtana-dashboard-page-btn button-primary button"><?php esc_html_e('Woocommerce Templates','musician-band-artist'); ?></a>
			    	</div>
	              	<p><?php esc_html_e('You can create a template as you like.','musician-band-artist'); ?></span></p>
			    </div>
			<?php } ?>
		</div>

		<div id="theme_pro" class="tabcontent">
		  	<h3><?php esc_html_e( 'Premium Theme Information', 'musician-band-artist' ); ?></h3>
			<hr class="h3hr">
		    <div class="col-left-pro">
		    	<p><?php esc_html_e('Music Band WordPress Theme is an ideal WordPress theme that can be used for bands websites, artists sites, beat producers, label websites, live performances, music websites, and websites for performances. It’s the ideal platform to share your thoughts and to share your thoughts, experiences as well as your deep-rooted music-related knowledge. Music Band WordPress theme is the doorway into your inner world. Music can refer to everything and anything. Imagine you’re an artist, DJ or Performer, Agency Musician, Artist Vocalist, Producer, or recording artist. You can showcase your talents to the world in your online portfolio. If you’re interested in music, showcase your expertise to others who will be impressed by your presence. Additionally, the theme can be translated into many other languages. It’s cross-browser compatible using its RTL feature. There are unlimited slides that can be added to the site. The sliders, headers, and footer can be filled with widgets of various types.','musician-band-artist'); ?></p>
		    	<div class="pro-links">
			    	<a href="<?php echo esc_url( MUSICIAN_BAND_ARTIST_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'musician-band-artist'); ?></a>
					<a href="<?php echo esc_url( MUSICIAN_BAND_ARTIST_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Buy Pro', 'musician-band-artist'); ?></a>
					<a href="<?php echo esc_url( MUSICIAN_BAND_ARTIST_PRO_DOC ); ?>" target="_blank"><?php esc_html_e('Pro Documentation', 'musician-band-artist'); ?></a>
				</div>
		    </div>
		    <div class="col-right-pro">
		    	<img src="<?php echo esc_url(get_theme_file_uri()); ?>/inc/getstart/images/responsive.png" alt="" />
		    </div>
		    <div class="featurebox">
			    <h3><?php esc_html_e( 'Theme Features', 'musician-band-artist' ); ?></h3>
				<hr class="h3hr">
				<div class="table-image">
					<table class="tablebox">
						<thead>
							<tr>
								<th></th>
								<th><?php esc_html_e('Free Themes', 'musician-band-artist'); ?></th>
								<th><?php esc_html_e('Premium Themes', 'musician-band-artist'); ?></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><?php esc_html_e('Theme Customization', 'musician-band-artist'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Responsive Design', 'musician-band-artist'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Logo Upload', 'musician-band-artist'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Social Media Links', 'musician-band-artist'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Slider Settings', 'musician-band-artist'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Number of Slides', 'musician-band-artist'); ?></td>
								<td class="table-img"><?php esc_html_e('4', 'musician-band-artist'); ?></td>
								<td class="table-img"><?php esc_html_e('Unlimited', 'musician-band-artist'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Template Pages', 'musician-band-artist'); ?></td>
								<td class="table-img"><?php esc_html_e('3', 'musician-band-artist'); ?></td>
								<td class="table-img"><?php esc_html_e('6', 'musician-band-artist'); ?></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Home Page Template', 'musician-band-artist'); ?></td>
								<td class="table-img"><?php esc_html_e('1', 'musician-band-artist'); ?></td>
								<td class="table-img"><?php esc_html_e('1', 'musician-band-artist'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Theme sections', 'musician-band-artist'); ?></td>
								<td class="table-img"><?php esc_html_e('2', 'musician-band-artist'); ?></td>
								<td class="table-img"><?php esc_html_e('14', 'musician-band-artist'); ?></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Contact us Page Template', 'musician-band-artist'); ?></td>
								<td class="table-img">0</td>
								<td class="table-img"><?php esc_html_e('1', 'musician-band-artist'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Blog Templates & Layout', 'musician-band-artist'); ?></td>
								<td class="table-img">0</td>
								<td class="table-img"><?php esc_html_e('3(Full width/Left/Right Sidebar)', 'musician-band-artist'); ?></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Page Templates & Layout', 'musician-band-artist'); ?></td>
								<td class="table-img">0</td>
								<td class="table-img"><?php esc_html_e('2(Left/Right Sidebar)', 'musician-band-artist'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Color Pallete For Particular Sections', 'musician-band-artist'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Global Color Option', 'musician-band-artist'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Section Reordering', 'musician-band-artist'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Demo Importer', 'musician-band-artist'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Allow To Set Site Title, Tagline, Logo', 'musician-band-artist'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Enable Disable Options On All Sections, Logo', 'musician-band-artist'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Full Documentation', 'musician-band-artist'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Latest WordPress Compatibility', 'musician-band-artist'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Woo-Commerce Compatibility', 'musician-band-artist'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Support 3rd Party Plugins', 'musician-band-artist'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Secure and Optimized Code', 'musician-band-artist'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Exclusive Functionalities', 'musician-band-artist'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Section Enable / Disable', 'musician-band-artist'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Section Google Font Choices', 'musician-band-artist'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Gallery', 'musician-band-artist'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Simple & Mega Menu Option', 'musician-band-artist'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Support to add custom CSS / JS ', 'musician-band-artist'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Shortcodes', 'musician-band-artist'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Custom Background, Colors, Header, Logo & Menu', 'musician-band-artist'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Premium Membership', 'musician-band-artist'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Budget Friendly Value', 'musician-band-artist'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Priority Error Fixing', 'musician-band-artist'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Custom Feature Addition', 'musician-band-artist'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('All Access Theme Pass', 'musician-band-artist'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Seamless Customer Support', 'musician-band-artist'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td></td>
								<td class="table-img"></td>
								<td class="update-link"><a href="<?php echo esc_url( MUSICIAN_BAND_ARTIST_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Upgrade to Pro', 'musician-band-artist'); ?></a></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>

		<div id="free_pro" class="tabcontent">
		  	<div class="col-3">
		  		<h4><span class="dashicons dashicons-star-filled"></span><?php esc_html_e('Pro Version', 'musician-band-artist'); ?></h4>
				<p> <?php esc_html_e('To gain access to extra theme options and more interesting features, upgrade to pro version.', 'musician-band-artist'); ?></p>
				<div class="info-link">
					<a href="<?php echo esc_url( MUSICIAN_BAND_ARTIST_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Get Pro', 'musician-band-artist'); ?></a>
				</div>
		  	</div>
		  	<div class="col-3">
		  		<h4><span class="dashicons dashicons-cart"></span><?php esc_html_e('Pre-purchase Queries', 'musician-band-artist'); ?></h4>
				<p> <?php esc_html_e('If you have any pre-sale query, we are prepared to resolve it.', 'musician-band-artist'); ?></p>
				<div class="info-link">
					<a href="<?php echo esc_url( MUSICIAN_BAND_ARTIST_CONTACT ); ?>" target="_blank"><?php esc_html_e('Question', 'musician-band-artist'); ?></a>
				</div>
		  	</div>
		  	<div class="col-3">		  		
		  		<h4><span class="dashicons dashicons-admin-customizer"></span><?php esc_html_e('Child Theme', 'musician-band-artist'); ?></h4>
				<p> <?php esc_html_e('For theme file customizations, make modifications in the child theme and not in the main theme file.', 'musician-band-artist'); ?></p>
				<div class="info-link">
					<a href="<?php echo esc_url( MUSICIAN_BAND_ARTIST_CHILD_THEME ); ?>" target="_blank"><?php esc_html_e('About Child Theme', 'musician-band-artist'); ?></a>
				</div>
		  	</div>

		  	<div class="col-3">
		  		<h4><span class="dashicons dashicons-admin-comments"></span><?php esc_html_e('Frequently Asked Questions', 'musician-band-artist'); ?></h4>
				<p> <?php esc_html_e('We have gathered top most, frequently asked questions and answered them for your easy understanding. We will list down more as we get new challenging queries. Check back often.', 'musician-band-artist'); ?></p>
				<div class="info-link">
					<a href="<?php echo esc_url( MUSICIAN_BAND_ARTIST_FAQ ); ?>" target="_blank"><?php esc_html_e('View FAQ','musician-band-artist'); ?></a>
				</div>
		  	</div>

		  	<div class="col-3">
		  		<h4><span class="dashicons dashicons-sos"></span><?php esc_html_e('Support Queries', 'musician-band-artist'); ?></h4>
				<p> <?php esc_html_e('If you have any queries after purchase, you can contact us. We are eveready to help you out.', 'musician-band-artist'); ?></p>
				<div class="info-link">
					<a href="<?php echo esc_url( MUSICIAN_BAND_ARTIST_SUPPORT ); ?>" target="_blank"><?php esc_html_e('Contact Us', 'musician-band-artist'); ?></a>
				</div>
		  	</div>
		</div>
		
	</div>
</div>
<?php } ?>