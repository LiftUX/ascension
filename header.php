<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Ascension
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>

<?php do_action( 'primer_body_inside' ); ?>

<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'ascension' ); ?></a>

	<?php do_action( 'primer_header_before' ); ?>

	<header id="masthead" class="site-header" role="banner">

		<div class="site-header-wrapper">

			<?php do_action( 'primer_header' ); ?>

		</div>

	</header><!-- #masthead -->

	<?php do_action( 'primer_header_after' ); ?>

		<?php
			if( ! is_404() && ! is_page_template( 'templates/page-builder-default-header.php' ) ) {
				get_template_part( 'templates/parts/hero' );
			}
		?>

		<div id="content" class="site-content">
