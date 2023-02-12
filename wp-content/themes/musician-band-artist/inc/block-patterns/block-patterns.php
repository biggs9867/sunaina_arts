<?php
/**
 * Musician Band Artist: Block Patterns
 *
 * @package Musician Band Artist
 * @since   1.0.0
 */

/**
 * Register Block Pattern Category.
 */
if ( function_exists( 'register_block_pattern_category' ) ) {

	register_block_pattern_category(
		'musician-band-artist',
		array( 'label' => __( 'Musician Band Artist', 'musician-band-artist' ) )
	);
}

/**
 * Register Block Patterns.
 */
if ( function_exists( 'register_block_pattern' ) ) {
	register_block_pattern(
		'musician-band-artist/banner-section',
		array(
			'title'      => __( 'Banner Section', 'musician-band-artist' ),
			'categories' => array( 'musician-band-artist' ),
			'content'    => "<!-- wp:cover {\"url\":\"" . get_theme_file_uri() . "/inc/block-patterns/images/banner.png\",\"id\":153,\"dimRatio\":20,\"align\":\"full\",\"className\":\"main-banner-section\"} -->\n<div class=\"wp-block-cover alignfull main-banner-section\"><span aria-hidden=\"true\" class=\"wp-block-cover__background has-background-dim-20 has-background-dim\"></span><img class=\"wp-block-cover__image-background wp-image-153\" alt=\"\" src=\"" . get_theme_file_uri() . "/inc/block-patterns/images/banner.png\" data-object-fit=\"cover\"/><div class=\"wp-block-cover__inner-container\"><!-- wp:group -->\n<div class=\"wp-block-group\"><!-- wp:columns -->\n<div class=\"wp-block-columns\"><!-- wp:column {\"width\":\"66.66%\"} -->\n<div class=\"wp-block-column\" style=\"flex-basis:66.66%\"><!-- wp:heading {\"textAlign\":\"left\",\"level\":1,\"style\":{\"typography\":{\"fontSize\":\"40px\",\"textTransform\":\"uppercase\"}},\"className\":\"text-md-start text-center\"} -->\n<h1 class=\"has-text-align-left text-md-start text-center\" style=\"font-size:40px;text-transform:uppercase\">TALES OF THE BRAVE ULYSSES</h1>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph {\"style\":{\"typography\":{\"fontSize\":\"15px\"}}} -->\n<p style=\"font-size:15px\">Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:buttons {\"className\":\"justify-content-md-start  justify-content-center\",\"layout\":{\"type\":\"flex\"}} -->\n<div class=\"wp-block-buttons justify-content-md-start  justify-content-center\"><!-- wp:button {\"textColor\":\"white\",\"style\":{\"border\":{\"radius\":\"50px\"},\"color\":{\"background\":\"#de3960\"},\"typography\":{\"fontSize\":\"18px\"}}} -->\n<div class=\"wp-block-button has-custom-font-size\" style=\"font-size:18px\"><a class=\"wp-block-button__link has-white-color has-text-color has-background\" style=\"border-radius:50px;background-color:#de3960\">LEARN MORE</a></div>\n<!-- /wp:button --></div>\n<!-- /wp:buttons --></div>\n<!-- /wp:column -->\n\n<!-- wp:column {\"width\":\"33.33%\"} -->\n<div class=\"wp-block-column\" style=\"flex-basis:33.33%\"></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns --></div>\n<!-- /wp:group --></div></div>\n<!-- /wp:cover -->",
		)
	);

	register_block_pattern(
		'musician-band-artist/about-section',
		array(
			'title'      => __( 'About Section', 'musician-band-artist' ),
			'categories' => array( 'musician-band-artist' ),
			'content'    => "<!-- wp:group {\"className\":\"about-us-section pt-4 pt-md-5\"} -->\n<div class=\"wp-block-group about-us-section pt-4 pt-md-5\"><!-- wp:paragraph {\"align\":\"center\",\"style\":{\"color\":{\"text\":\"#ff8257\"},\"typography\":{\"fontSize\":\"15px\"}},\"className\":\"about-section-para\"} -->\n<p class=\"has-text-align-center about-section-para has-text-color\" style=\"color:#ff8257;font-size:15px\"><strong>About Us</strong></p>\n<!-- /wp:paragraph -->\n\n<!-- wp:heading {\"textAlign\":\"center\",\"style\":{\"typography\":{\"textTransform\":\"uppercase\",\"fontSize\":\"30px\"}}} -->\n<h2 class=\"has-text-align-center\" style=\"font-size:30px;text-transform:uppercase\">WELCOME TO STUDIO</h2>\n<!-- /wp:heading -->\n\n<!-- wp:columns {\"className\":\"pt-md-4 pt-3\"} -->\n<div class=\"wp-block-columns pt-md-4 pt-3\"><!-- wp:column {\"verticalAlignment\":\"center\",\"width\":\"40.33%\"} -->\n<div class=\"wp-block-column is-vertically-aligned-center\" style=\"flex-basis:40.33%\"><!-- wp:image {\"align\":\"left\",\"id\":187,\"sizeSlug\":\"full\",\"linkDestination\":\"none\"} -->\n<figure class=\"wp-block-image alignleft size-full\"><img src=\"" . get_theme_file_uri() . "/inc/block-patterns/images/music-record.png\" alt=\"\" class=\"wp-image-187\"/></figure>\n<!-- /wp:image --></div>\n<!-- /wp:column -->\n\n<!-- wp:column {\"width\":\"60.33%\"} -->\n<div class=\"wp-block-column\" style=\"flex-basis:60.33%\"><!-- wp:paragraph {\"style\":{\"typography\":{\"fontSize\":\"22px\"}},\"className\":\"about-us-section-satisfaction\"} -->\n<p class=\"about-us-section-satisfaction\" style=\"font-size:22px\">WE GIVE 100% SATISFACTION</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph {\"style\":{\"typography\":{\"fontSize\":\"22px\"}},\"className\":\"about-us-section-quality \"} -->\n<p class=\"about-us-section-quality\" style=\"font-size:22px\">QUALITY WORK</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph {\"style\":{\"typography\":{\"fontSize\":\"16px\"}}} -->\n<p style=\"font-size:16px\">Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:buttons {\"layout\":{\"type\":\"flex\"}} -->\n<div class=\"wp-block-buttons\"><!-- wp:button {\"textColor\":\"white\",\"style\":{\"border\":{\"radius\":\"50px\"},\"color\":{\"background\":\"#de3960\"},\"typography\":{\"fontSize\":\"18px\"}}} -->\n<div class=\"wp-block-button has-custom-font-size\" style=\"font-size:18px\"><a class=\"wp-block-button__link has-white-color has-text-color has-background\" style=\"border-radius:50px;background-color:#de3960\">BOOK OUR SERVICES</a></div>\n<!-- /wp:button --></div>\n<!-- /wp:buttons --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns --></div>\n<!-- /wp:group -->",
		)
	);
}
