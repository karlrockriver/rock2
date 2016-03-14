<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Rock
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">


<div class="area-white">
	<div class="container">
		<?php
		while ( have_posts() ) : the_post(); ?>
			
			<div class="row">
				<div class="col-xs-12 text-center">
					<h1 class="text-color-2"><?php the_title(); ?></h1>
					<h5 class="no-margin-padding"><?php echo the_time('l, F jS, Y'); ?></h5>
				</div>
			</div>
			
			<div class="row">
				<div class="col-xs-12 col-md-8 col-md-offset-2">
					<?php the_content(); ?>
				</div>
			</div>


		<div class="row">
			<div class="col-xs-12 col-md-8 col-md-offset-2">
			<?php the_post_navigation(); ?>
			</div>
		</div>


		<?php endwhile; // End of the loop.
		?>

		</div>
	</div>
</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
