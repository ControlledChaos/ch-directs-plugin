<?php
/**
 * Schema meta tags.
 *
 * @package    CH_Directs_Plugin
 * @subpackage Frontend\Meta_Tags
 * @since      controlled-chaos 1.0.0
 */

namespace CH_Directs_Plugin\Frontend\Meta_Tags;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
} ?>

<!-- Schema meta -->
<meta itemprop="url" content="<?php do_action( 'chd_meta_url_tag' ); ?>" />
<meta itemprop="name" content="<?php do_action( 'chd_meta_title_tag' ); ?>" />
<meta itemprop="description" content="<?php do_action( 'chd_meta_description_tag' ); ?>">
<meta itemprop="author" content="<?php do_action( 'chd_meta_author_tag' ); ?>" />
<meta itemprop="datePublished" content="<?php do_action( 'chd_meta_date_pub_tag' ); ?>" />
<meta itemprop="dateModified" content="<?php do_action( 'chd_meta_date_mod_tag' ); ?>" />
<meta itemprop="image" content="<?php do_action( 'chd_meta_image_tag' ); ?>" />
