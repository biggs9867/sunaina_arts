<?php
/**
 * The template part for header
 *
 * @package Musician Band Artist 
 * @subpackage musician_band_artist
 * @since Musician Band Artist 1.0
 */
?>
<div class="main-header">
  <div class="main-header-inner">
    <div class="header-menu">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-4 col-12 align-self-center">
            <div class="logo text-lg-start text-md-start text-center mb-3 mb-lg-0 mb-md-0">
              <div class="logo-inner">
                <?php if ( has_custom_logo() ) : ?>
                  <div class="site-logo"><?php the_custom_logo(); ?></div>
                <?php endif; ?>
                <?php $blog_info = get_bloginfo( 'name' ); ?>
                  <?php if ( ! empty( $blog_info ) ) : ?>
                    <?php if ( is_front_page() && is_home() ) : ?>
                      <?php if( get_theme_mod('music_recording_studio_logo_title_hide_show',true) == 1){ ?>
                        <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                      <?php } ?>
                    <?php else : ?>
                      <?php if( get_theme_mod('music_recording_studio_logo_title_hide_show',true) == 1){ ?>
                        <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                      <?php } ?>
                    <?php endif; ?>
                  <?php endif; ?>
                  <?php
                    $description = get_bloginfo( 'description', 'display' );
                    if ( $description || is_customize_preview() ) :
                  ?>
                  <?php if( get_theme_mod('music_recording_studio_tagline_hide_show',false) == 1){ ?>
                    <p class="site-description">
                      <?php echo esc_html($description); ?>
                    </p>
                  <?php } ?>
                <?php endif; ?>
              </div>
            </div>
          </div>

          <div class="col-lg-7 col-md-3 col-3 align-self-center">
            <?php get_template_part( 'template-parts/header/navigation' ); ?>
          </div>
          <div class="col-lg-2 col-md-4 col-9 align-self-center">
            <div class="header-btn text-lg-center text-md-end text-center py-3">
              <?php if( get_theme_mod('musician_band_artist_header_btn_link') != '' || get_theme_mod('musician_band_artist_header_btn_text') != '' ){ ?>
                <a target="_blank" href="<?php echo esc_url(get_theme_mod('musician_band_artist_header_btn_link',''));?>"><?php echo esc_html(get_theme_mod('musician_band_artist_header_btn_text',''));?></a>
              <?php }?>
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </div>
</div>