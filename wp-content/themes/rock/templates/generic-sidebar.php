<?php
/**
 * Template Name: Generic w/Sidebar
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

	<div class="single-post-container">
		<div class="hero-thin" style="background-image: url(<?php the_field('generic_home_hero'); ?>)">
		</div>
		<div class="area-white">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-md-9">
						<h1 class="text-color-2" style="margin-top:0"><?php the_title(); ?></h1>
						<?php the_field('generic_wysiwyg'); ?>
					</div>
					<div class="col-xs-12 col-md-3 sidebar">
						<?php get_sidebar(); ?>
					</div>
				</div>
			</div>
		</div>  <!-- end of area-white -->
	</div>  <!-- end of single-post-container -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
