<?php
/**
 * Template Name: Gallery - Invdividual Collection
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Rock
 */

get_header();
get_header('search'); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">



<div class="area-white">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<img src="<?php the_field('gallery_hero'); ?>">
			</div>
		</div>
		<div class="row" style="margin-top: 2rem;">
			<div class="col-xs-12 col-md-4">
				<h1 class="text-center text-color-2"><?php the_field('gallery_header'); ?></h1>
			</div>
			<div class="col-xs-12 col-sm-8">
				<p class="no-margin-padding"><?php the_field('gallery_text'); ?></p>
			</div>
		</div>
	</div>
</div>





		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
