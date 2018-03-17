<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="page">
 *
 * @package Twin Brothers
 * @since 1.0.0
 */

?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page">
		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'twin-brothers' ); ?></a>

		<header class="pageHeader">
			<?php get_template_part( 'partial-templates/header/navbar' ); ?>
		</header>

		<div id="site-wrapper" class="container siteWrapper">
