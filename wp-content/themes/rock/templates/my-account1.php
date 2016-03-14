<?php
/**
 * Template Name: My Account 1
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
				<div class="container-header-color-4">
					<h4 class="ls1 no-margin-padding"><?php the_field('account1_header'); ?></h4>
				</div>
			</div>

			<div class="col-xs-12 col-md-3">
				<div class="sign-in-box">
					<a href="#"><button class="button-flat-full-color-1" style="margin-top: 0">Status</button></a>
					<a href="#"><button class="button-flat-full-color-1" style="margin-top: 0">Download History</button></a>
					<a href="#"><button class="button-flat-full-color-1" style="margin-top: 0">Lightboxes</button></a>
					<a href="#"><button class="button-flat-full-color-1" style="margin-top: 0">Edit Profile</button></a>
				</div>
			</div>

			<div class="col-xs-12 col-md-9">
				<h1 class="text-color-2" style="margin-top: 1rem"><?php the_field('account1_account_header'); ?></h1>
				<p><?php the_field('account1_account_text'); ?></p>
				<h1 class="text-color-2"><?php the_field('account1_download_header'); ?></h1>
				<?php the_field('account1_download_text'); ?>
			</div>
		</div>
	</div>
</div>



		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
