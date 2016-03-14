<?php
/**
 * Template Name: My Account 2
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
					<h4 class="ls1 no-margin-padding"><?php the_field('account2_header'); ?></h4>
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

			<div class="col-xs-12 col-md-7 col-lg-5">
				
					<h1 class="text-color-2" style="margin-top: 1rem"><?php the_field('account2_edit_header'); ?></h1>
						<p><?php the_field('account2_text'); ?></p>
						<div class="sign-in-gray-1">
						<p style="margin: 0 auto"><b><?php the_field('account2_email'); ?></b></p>
						<input type="text" placeholder="tbd" class="sign-in-field">
						<p style="margin: 1rem 0 0 0"><b><?php the_field('account2_first_name'); ?></b></p>
						<input type="text" placeholder="tbd" class="sign-in-field">
						<p style="margin: 1rem 0 0 0"><b><?php the_field('account2_last_name'); ?></b></p>
						<input type="text" placeholder="tbd" class="sign-in-field">
						<p style="margin: 1rem 0 0 0"><b><?php the_field('account2_user_name'); ?></b></p>
						<input type="text" placeholder="tbd" class="sign-in-field">
						<p style="margin: 1rem 0 0 0"><b><?php the_field('account2_password'); ?></b></p>
						<input type="password" placeholder="tbd" class="sign-in-field">
						<p style="margin: 1rem 0 0 0"><b><?php the_field('account2_organization'); ?></b></p>
						<input type="text" placeholder="tbd" class="sign-in-field">
						<p style="margin: 1rem 0 0 0"><b><?php the_field('account2_job_title'); ?></b></p>
						<input type="text" placeholder="tbd" class="sign-in-field">
						<p style="margin: 1rem 0 0 0"><b><?php the_field('account2_phone'); ?></b></p>
						<input type="text" placeholder="tbd" class="sign-in-field">
						<button class="button-flat-full-color-2" style-"margin-bottom: 0">Update</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>



		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
