<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package quick_start_pack
 */

get_header();
?>


<?php if(!is_front_page()) : ?>

		</div>
	</div>
</div>


<div class="brandicum-section" style="background-image: url(<?php echo the_post_thumbnail_url('large');?>);">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="brandicum-desc">
					<h2><?php the_title(); ?></h2>

					<?php if(class_exists('breadcrumb_navxt')){
						bcn_display();
					} ?>
				</div>
			</div>
		</div>
	</div>
</div>



<div class="container">
	<div class="row">
		<div class="col">


<?php endif; ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
