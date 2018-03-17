<?php
/**
 * Partial Template Name: Header Navigation Bar
 *
 * Display Navigation Bar
 *
 * @package Twin Brothers
 * @since 1.0.0
 */

?>
<nav class="navbar d-flex">
	<div class="navbarLogo">
		<?php if ( has_custom_logo() ) : ?>
			<?php the_custom_logo(); ?>
		<?php else : ?>
			<img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/logo.png' ) ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" width="304" height="420" />
		<?php endif; ?>
	</div>

	<div class="navbarTitle">
		<?php if ( is_home() ) : ?>
		<h1>
			<a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" class="siteTitle"><?php bloginfo( 'name' ); ?></a>
		</h1>
		<?php else : ?>
		<a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" class="siteTitle"><?php bloginfo( 'name' ); ?></a>
		<?php endif; ?>

		<div class="navbarDescription siteDescription">
			<?php bloginfo( 'description' ); ?>
		</div>
	</div>

	<?php
		wp_nav_menu( array(
			'theme_location' => 'primary',
			'menu_class'     => 'navbarMenu',
			'container'      => '',
			'depth'          => 1,
			'walker'         => new Primary_Menu_Nav_Walker(),
		) );
	?>
</nav>
