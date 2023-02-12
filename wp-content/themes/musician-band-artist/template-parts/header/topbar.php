<?php
/**
 * The template part for topbar
 *
 * @package Musician Band Artist
 * @subpackage musician_band_artist
 * @since Musician Band Artist 1.0
 */
?>

<?php if(get_theme_mod('musician_band_artist_topbar_faq') != '' || get_theme_mod('musician_band_artist_location') != '' || get_theme_mod('musician_band_artist_terms_condition') != '' || get_theme_mod('musician_band_artist_topbar_album_update') != '' || is_active_sidebar('social-widget')){?>
    <div id="topbar" class="p-2">
        <div class="container">
        	<div class="row">
                <div class="col-lg-4 col-md-4 align-self-center">
            		<?php if(get_theme_mod('musician_band_artist_topbar_faq') != '' || get_theme_mod('musician_band_artist_topbar_faq_url') != ''){ ?>
                        <a href="<?php echo esc_url(get_theme_mod('musician_band_artist_topbar_faq_url')) ?>" class="me-3"><?php echo esc_html(get_theme_mod('musician_band_artist_topbar_faq',''));?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('musician_band_artist_topbar_faq')) ?></span></a>
                    <?php }?>
                    <?php if(get_theme_mod('musician_band_artist_location') != '' || get_theme_mod('musician_band_artist_location_url') != ''){ ?>
                        <a href="<?php echo esc_url(get_theme_mod('musician_band_artist_location_url')) ?>" class="me-3"><?php echo esc_html(get_theme_mod('musician_band_artist_location',''));?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('musician_band_artist_location')) ?></span></a>
                    <?php }?>
                    <?php if(get_theme_mod('musician_band_artist_terms_condition') != '' || get_theme_mod('musician_band_artist_terms_condition_url') != ''){ ?>
                        <a href="<?php echo esc_url(get_theme_mod('musician_band_artist_terms_condition_url')) ?>" class="me-3"><?php echo esc_html(get_theme_mod('musician_band_artist_terms_condition',''));?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('musician_band_artist_terms_condition')) ?></span></a>
                    <?php }?>
                </div>
                <div class="col-lg-4 col-md-4 align-self-center">
                    <div class="text-end">
                    <span><?php echo esc_html(get_theme_mod('musician_band_artist_topbar_album_update','')); ?></span>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 align-self-center">
                    <div class="social-icons text-lg-end text-md-end text-center">
                        <?php dynamic_sidebar('social-widget'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php }?>