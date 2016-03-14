<?php
/**
 * Template Name: My Account 4
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
					<h4 class="ls1 no-margin-padding"><?php the_field('account4_header'); ?></h4>
				</div>
			</div>

			<div class="col-xs-12 col-lg-3">
				<div class="sign-in-box">
					<a href="#"><button class="button-flat-full-color-1" style="margin-top: 0">Status</button></a>
					<a href="#"><button class="button-flat-full-color-1" style="margin-top: 0">Download History</button></a>
					<a href="#"><button class="button-flat-full-color-1" style="margin-top: 0">Lightboxes</button></a>
					<a href="#"><button class="button-flat-full-color-1" style="margin-top: 0">Edit Profile</button></a>
				</div>
			</div>

			<div class="col-xs-12 col-lg-9">
				<div class="row">
					<div class="col-xs-12">
						<table class="table-2" style="margin-top: 1rem">
							<thead>
							<tr>
								<th>File</th>
								<th>ID</th>
								<th>Date</th>
								<th>Fees</th>
								<th>License</th>
								<th>Size</th>
								<th>Type</th>
								<th>Download</th>
							</tr>
							</thead>
							<tbody>
							<tr>
								<td><img src="#"></td>
								<td>Resource/Name</td>
								<td>DD/MM/YYYY</td>
								<td>Subscription</td>
								<td><a href="#">Standard</a></td>
								<td>Format FileSize</td>
								<td>Photo/Video</td>
								<td><a href="#">Download</a></td>
							</tr>
							<tr>
								<td><img src="#"></td>
								<td>Resource/Name</td>
								<td>DD/MM/YYYY</td>
								<td>Subscription</td>
								<td><a href="#">Standard</a></td>
								<td>Format FileSize</td>
								<td>Photo/Video</td>
								<td><a href="#">Download</a></td>
							</tr>
							<tr>
								<td><img src="#"></td>
								<td>Resource/Name</td>
								<td>DD/MM/YYYY</td>
								<td>Subscription</td>
								<td><a href="#">Standard</a></td>
								<td>Format FileSize</td>
								<td>Photo/Video</td>
								<td><a href="#">Download</a></td>
							</tr>
							
							</tbody>
						</table>
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
