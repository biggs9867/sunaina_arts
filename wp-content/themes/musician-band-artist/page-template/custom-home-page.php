<?php
/**
 * Template Name: Custom Home Page
 */

get_header(); ?>

<main id="maincontent" role="main">
  <?php do_action( 'music_recording_studio_before_slider' ); ?>

  <?php if( get_theme_mod( 'music_recording_studio_slider_hide_show', false) != '' || get_theme_mod( 'music_recording_studio_resp_slider_hide_show', false) != '') { ?>
    <section id="slider">
      <?php if(get_theme_mod('music_recording_studio_slider_type', 'Default slider') == 'Default slider' ){ ?> 
      <div id="carouselExampleInterval" class="carousel carousel-fade" data-bs-ride="carousel" data-bs-interval="<?php echo esc_attr(get_theme_mod( 'music_recording_studio_slider_speed',4000)) ?>"> 
        <?php $music_recording_studio_pages = array();
          for ( $count = 1; $count <= 3; $count++ ) {
            $mod = intval( get_theme_mod( 'music_recording_studio_slider_page' . $count ));
            if ( 'page-none-selected' != $mod ) {
              $music_recording_studio_pages[] = $mod;
            }
          }
          if( !empty($music_recording_studio_pages) ) :
            $args = array(
              'post_type' => 'page',
              'post__in' => $music_recording_studio_pages,
              'orderby' => 'post__in'
            );
            $query = new WP_Query( $args );
            if ( $query->have_posts() ) :
              $i = 1;
        ?>     
        <div class="carousel-inner" role="listbox">
          <?php  while ( $query->have_posts() ) : $query->the_post(); ?>
            <div <?php if($i == 1){echo 'class="carousel-item active"';} else{ echo 'class="carousel-item"';}?>>
              <?php if(has_post_thumbnail()){
                the_post_thumbnail();
              } else{?>
                <img src="<?php echo esc_url(get_theme_file_uri()); ?>/inc/block-patterns/images/banner.png" alt="" />
              <?php } ?>
              <div class="carousel-caption">
                <div class="inner_carousel">
                  <h1 class="wow lightSpeedIn delay-1000" data-wow-duration="2s"><a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php echo the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
                  <?php if( get_theme_mod('music_recording_studio_slider_content_hide_show',true) == 1){ ?>
                    <p class="slider-text wow lightSpeedIn delay-1000" data-wow-duration="2s"><?php $excerpt = get_the_excerpt(); echo esc_html( music_recording_studio_string_limit_words( $excerpt, esc_attr(get_theme_mod('music_recording_studio_slider_excerpt_number','15')))); ?></p>
                  <?php } ?>
                  <?php if( get_theme_mod('musician_band_artist_slider_button_text','LEARN MORE') != ''){ ?>
                      <div class="more-btn mt-4 wow lightSpeedIn delay-1000" data-wow-duration="2s">              
                          <a href="<?php the_permalink(); ?>"><i class="me-2 <?php echo esc_attr(get_theme_mod('musician_band_artist_slider_btn_icon', 'fas fa-play')); ?>"></i><?php echo esc_html(get_theme_mod('musician_band_artist_slider_button_text',__('LEARN MORE','musician-band-artist')));?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('musician_band_artist_slider_button_text',__('LEARN MORE','musician-band-artist')));?></span></a>
                      </div>
                  <?php } ?>
                </div>
              </div>
            </div>
          <?php $i++; endwhile; 
          wp_reset_postdata();?>
        </div>
        <?php else : ?>
          <div class="no-postfound"></div>
        <?php endif;
        endif;?>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" id="prev" data-bs-slide="prev">
        <i class="fas fa-arrow-left"></i>
        <span class="screen-reader-text"><?php echo esc_html('Previous','musician-band-artist'); ?></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next" id="next">
        <i class="fas fa-arrow-right"></i>
        <span class="screen-reader-text"><?php echo esc_html('Next','musician-band-artist'); ?></span>
        </button>
      </div>
      <div class="clearfix"></div>
      <?php } else if(get_theme_mod('music_recording_studio_slider_type', 'Advance slider') == 'Advance slider'){?>
          <?php echo do_shortcode(get_theme_mod('music_recording_studio_advance_slider_shortcode')); ?>
        <?php } ?>
    </section>
  <?php }?>

  <?php do_action( 'music_recording_studio_after_slider' ); ?>

  <?php if(get_theme_mod('music_recording_studio_section_title') != '' || get_theme_mod('music_recording_studio_section_small_title') != '' || get_theme_mod('music_recording_studio_service_category') != '') {?>
    <section id="service-section" class="py-5">
      <div class="container">
        <div class="service-head text-center mb-5">
          <?php if( get_theme_mod('music_recording_studio_section_small_title') != '' ){ ?>
            <strong class="small-title"><?php echo esc_html(get_theme_mod('music_recording_studio_section_small_title'));?></strong>
          <?php }?>
          <?php if( get_theme_mod('music_recording_studio_section_title') != '' ){ ?>
            <h2><?php echo esc_html(get_theme_mod('music_recording_studio_section_title'));?></h2>
          <?php }?>
        </div>
        <div class="owl-carousel">
          <?php
          $music_recording_studio_catData = get_theme_mod('music_recording_studio_service_category');
          if($music_recording_studio_catData){
            $page_query = new WP_Query(array( 'category_name' => esc_html( $music_recording_studio_catData ,'musician-band-artist')));
            while( $page_query->have_posts() ) : $page_query->the_post(); ?>
              <div class="service-box wow text-center zoomIn delay-1000" data-wow-duration="2s">
                <div class="bx-image"><?php the_post_thumbnail(); ?></div>
                <div class="service-content">
                  <h3><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h3>
                </div>
              </div>
            <?php endwhile;
            wp_reset_postdata();
          } ?>
        </div>
      </div>
    </section>
  <?php }?>

  <?php do_action( 'music_recording_studio_after_service' ); ?>


  <section id="about-section" class="py-5 wow bounceInDown delay-1000" data-wow-duration="3s">
    <div class="container">
      <div class="about-head text-center mb-4">
      <?php if( get_theme_mod('musician_band_artist_section_small_title') != '' ){ ?>
          <strong class="small-title"><?php echo esc_html(get_theme_mod('musician_band_artist_section_small_title'));?></strong>
        <?php }?>
        <?php if( get_theme_mod('musician_band_artist_section_title') != '' ){ ?>
          <h2 class="mt-2"><?php echo esc_html(get_theme_mod('musician_band_artist_section_title'));?></h2>
        <?php }?>
      </div>
      <?php
      $musician_band_artist_about_post =  get_theme_mod('musician_band_artist_about_post');
      if($musician_band_artist_about_post){
        $args = array( 'name' => esc_html($musician_band_artist_about_post ,'musician-band-artist'));
        $query = new WP_Query( $args );
        if ( $query->have_posts() ) :
          $count = 0;
          while ( $query->have_posts() ) : $query->the_post(); ?>
            <div class="row">
              <?php if (has_post_thumbnail()){?>
                <div class="col-lg-6 col-md-6 col-12 align-self-center">
                  <?php the_post_thumbnail(); ?>
                </div>
              <?php }?>
              <div class="col-lg-6 col-md-6 col-12 align-self-center">
                <div class="abt-cont">
                  <div class="mb-4">
                  <?php if( get_theme_mod('musician_band_artist_about_serv_head') != '' ){ ?>
                    <i class="me-3 <?php echo esc_attr(get_theme_mod('musician_band_artist_about_list_icon', 'fas fa-smile')); ?>"></i> <span class="abt-serv"><?php echo esc_html(get_theme_mod('musician_band_artist_about_serv_head'));?></span>
                  <?php }?>
                  </div>
                  <div class="mb-4">
                  <?php if( get_theme_mod('musician_band_artist_about_serv_head_two') != '' ){ ?>
                    <i class="me-3 <?php echo esc_attr(get_theme_mod('musician_band_artist_about_list_icon', 'fas fa-search')); ?>"></i> <span class="abt-serv"><?php echo esc_html(get_theme_mod('musician_band_artist_about_serv_head_two'));?></span>
                  <?php }?>
                  </div>
                  <p class="mb-4"><?php $excerpt = get_the_excerpt(); echo esc_html( music_recording_studio_string_limit_words( $excerpt, 30)); ?></p>
                  <div class="seemore-btn">
                    <a target="_blank" href="<?php the_permalink(); ?>"><?php echo esc_html('BOOK OUR SERVICES', 'musician-band-artist'); ?><span class="screen-reader-text"><?php echo esc_html('BOOK OUR SERVICES', 'musician-band-artist'); ?></span></a>
                  </div>
                </div>
              </div>
            </div>
          <?php endwhile; 
          wp_reset_postdata();?>
        <?php else : ?>
          <div class="no-postfound"></div>
        <?php endif;
      }?>
    </div>
  </section>

  <?php do_action( 'music_recording_studio_after_about' ); ?>

  <div id="content-vw" class="py-3">
    <div class="container">
      <?php while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
      <?php endwhile; // end of the loop. ?>
    </div>
  </div>
</main>

<?php get_footer(); ?>