<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package quick_start_pack
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<!-- <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'qsp' ); ?></a> -->




	<header class="header-area-wrapper">
		<div class="container">
			<div class="row">
				<div class="col-auto">
					<div class="site-logo">
						<a href="<?php echo esc_url(home_url( '/' ));?>">
							<?php $logo_img = get_theme_mod ('custom_logo');
							if(!empty($logo_img)) : the_custom_logo(); else : ?>
								<h2><?php bloginfo('name'); ?></h2>
							<?php endif; ?>
						</a>
					</div>
				</div>
				<div class="col">
					<nav class="nav-ber">
						<?php
							wp_nav_menu( array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu',
							) );
						?>
					</nav>
				</div>
			</div>
		</div>
	</header>

	<div id="content" class="site-content">


		<div class="container">
			<div class="row">
				<div class="col">
					
				
