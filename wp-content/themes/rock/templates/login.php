<?php
/**
 * Template Name: Login
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
						<div class="col-xs-12 col-sm-6 col-lg-4 col-lg-offset-2">
							<div class="sign-in-box">
								<h1 class="text-color-2"><?php the_field('sign_in_header'); ?></h1>
								<p><?php the_field('sign_in_text'); ?></p>
								<p style="margin: 0 auto"><b>Username</b></p>
								<input type="text" placeholder="tbd" class="sign-in-field">
								<p style="margin: 1rem 0 0 0"><b>Password</b></p>
								<input type="text" placeholder="tbd" class="sign-in-field">
								<button class="button-flat-full-color-1">Sign In</button>
							</div>
						</div>

						<div class="col-xs-12 col-sm-6 col-lg-4" style="padding: 1rem">
							<h1 class="text-color-2"><?php the_field('sign_up_header'); ?></h1>
							<?php the_field('sign_up_text'); ?>
							<button class="button-flat-full-color-1">Register</button>
						</div>
					</div>
				</div>
			</div>



		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
