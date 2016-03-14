<?php
/**
 * Template Name: Register
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
						<div class="col-xs-12 col-sm-6 col-lg-4 col-lg-offset-1">
							<div class="sign-in-box">
								<h1 class="text-color-2"><?php the_field('register_header'); ?></h1>
								<p><?php the_field('register_text'); ?></p>
								<p style="margin: 0 auto"><b><?php the_field('register_email'); ?></b></p>
								<input type="text" placeholder="tbd" class="sign-in-field">
								<p style="margin: 1rem 0 0 0"><b><?php the_field('register_first_name'); ?></b></p>
								<input type="text" placeholder="tbd" class="sign-in-field">
								<p style="margin: 1rem 0 0 0"><b><?php the_field('register_last_name'); ?></b></p>
								<input type="text" placeholder="tbd" class="sign-in-field">
								<p style="margin: 1rem 0 0 0"><b><?php the_field('register_user_name'); ?></b></p>
								<input type="text" placeholder="tbd" class="sign-in-field">
								<input type="checkbox" class="inline"><p class="inline" style="font-size: .9rem; margin-left: .5rem"><?php the_field('register_user_text'); ?></p>
								<p style="margin: 1rem 0 0 0"><b><?php the_field('register_password_1'); ?></b></p>
								<input type="password" placeholder="tbd" class="sign-in-field">
								<p style="font-size: .9rem; margin: 0"><?php the_field('register_password_text'); ?></p>
								<p style="margin: 1rem 0 0 0"><b><?php the_field('register_password_2'); ?></b></p>
								<input type="password" placeholder="tbd" class="sign-in-field">
								<p style="margin: 1rem 0 0 0"><b><?php the_field('register_organization'); ?></b></p>
								<input type="text" placeholder="tbd" class="sign-in-field">
								<p style="margin: 1rem 0 0 0"><b><?php the_field('register_job_title'); ?></b></p>
								<input type="text" placeholder="tbd" class="sign-in-field">
								<p style="margin: 1rem 0 0 0"><b><?php the_field('register_phone'); ?></b></p>
								<input type="text" placeholder="tbd" class="sign-in-field">
								<input type="checkbox" class="inline" checked><p class="inline" style="font-size: .9rem; margin-left: .5rem"><?php the_field('register_list_signup'); ?></p>
								<div style="font-size: .9rem; margin: 1rem 0 0 0"><?php the_field('register_acceptance'); ?></div>
								<button class="button-flat-full-color-1" style="margin-top: 0">Create Account</button>
							</div>
						</div>

						<div class="col-xs-12 col-sm-6 col-lg-6" style="padding: 1rem">
							<h1 class="text-color-2"><?php the_field('sign_in_header'); ?></h1>
							<?php the_field('sign_in_text'); ?>
							<h1 class="text-color-2"><?php the_field('company_header'); ?></h1>
							<p><?php the_field('company_text'); ?></p>
							<h1 class="text-color-2"><?php the_field('benefits_header'); ?></h1>
							<?php the_field('benefits_text'); ?>
							
						</div>
					</div>
				</div>
			</div>



		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
