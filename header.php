<?php
/**
 * The Header template for our theme
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php do_action( 'woodmart_after_body_open' ); ?>
	
	<?php
	if( 'es' == ICL_LANGUAGE_CODE ) {
    ?>
	<div id="banners-footer">
	<?php echo do_shortcode('[rev_slider alias="banner-header"]'); ?>

</div>
        <?php
 //english
}
?>


	<?php
	if( 'en' == ICL_LANGUAGE_CODE ) {
    ?>
	<div id="banners-footer">
	<?php echo do_shortcode('[rev_slider alias="banner-headerENG"]'); ?>

</div>
        <?php
 //english
}
?>
	
	<div class="website-wrapper">

		<?php if ( woodmart_needs_header() ): ?>

			<!-- HEADER -->
			<header <?php woodmart_get_header_classes(); // location: inc/functions.php ?>>

				<?php 
					whb_generate_header();
				 ?>

			</header><!--END MAIN HEADER-->
			
			<?php woodmart_page_top_part(); ?>

		<?php endif ?>
