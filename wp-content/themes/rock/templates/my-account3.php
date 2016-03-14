<?php
/**
 * Template Name: My Account 3
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
					<h4 class="ls1 no-margin-padding"><?php the_field('account3_header'); ?></h4>
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
						<table class="table-1" style="margin-top: 1rem">
							<thead>
							<tr>
								<th>Name</th>
								<th>Public</th>
								<th># Files</th>
								<th>Created</th>
								<th>Users</th>
								<th>Admin</th>
							</tr>
							</thead>
							<tbody>
							<tr>
								<td>Lightbox Name</td>
								<td>Yes</td>
								<td>30</td>
								<td>DD/MM/YYYY</td>
								<td><a href="#">Standard</a></td>
								<td><a href="#">Edit</a><a href="#">Delete</a><a href="#">Create Collection</a><a href="#">Download Lightbox</a></td>
							</tr>
							<tr>
								<td>Lightbox Name #2</td>
								<td>Yes</td>
								<td>30</td>
								<td>DD/MM/YYYY</td>
								<td><a href="#">Standard</a></td>
								<td><a href="#">Edit</a><a href="#">Delete</a><a href="#">Create Collection</a><a href="#">Download Lightbox</a></td>
							</tr>
							<tr>
								<td>Lightbox Name</td>
								<td>Yes</td>
								<td>30</td>
								<td>DD/MM/YYYY</td>
								<td><a href="#">Standard</a></td>
								<td><a href="#">Edit</a><a href="#">Delete</a><a href="#">Create Collection</a><a href="#">Download Lightbox</a></td>
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
