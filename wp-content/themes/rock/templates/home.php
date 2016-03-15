<?php
/**
 * Template Name: Home
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

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">


<div class="home-hero" style="background-image: url(<?php the_field('home_hero_image'); ?>)">
	<div class="container-fluid" style="padding: 0">
		<div class="row">
			<div class="col-xs-12 col-md-8 col-md-offset-2">
				<div class="search-container-dark-trans">
					<div class="search-container">
						<input type="search" placeholder="Search here">
							<div class="type-selector">
								<label style="display: inline-block">
									<input name="photos" checked="checked" type="checkbox"><p class="hidden-xs-inline no-margin-padding" style="margin: 0 .5rem">Photos</p>
								</label>
								<label style="display: inline-block">
									<input name="videos" checked="checked" type="checkbox"><p class="hidden-xs-inline no-margin-padding" style="margin: 0 .5rem">Videos</p>
								</label>
							</div>
					<button class="button-search-submit">icon</button>
					</div>
				</div>
			</div>
		</div>
		<div class="hero-container-color-2-trans ">
			<div class="container">
				<div class="row middle-xs">
					<div class="col-xs-12">
						<h3 class="rc text-white no-margin-padding"><?php the_field(home_hero_header); ?></h3>
						<p class="rc text-white no-margin-padding"><?php the_field('home_hero_subheader'); ?></p>
					</div>
				</div>
			</div>
		</div>
	</div>  <!-- end of container-fluid -->
</div>  <!--end of home-hero -->


<div class="area-warm-1">
	<div class="container">
		<div class="row middle-xs"> <!-- header for collections -->
			<div class="col-xs-12">
				<div class="container-header-color-4">
					<h4 class="ls1 no-margin-padding shadow-none"><?php the_field('home_collection-1-header'); ?></h4>
				</div>
			</div>
		</div>

		<!-- Start of thumbnails -->
		<div class="row">
			<div class="col-xs-12 col-md-4">
				<a href="#">
					<div class="home-thumbnail" style="background-image: url(<?php the_field('home_hero_image'); ?>)">
						<div class="thumbnail-container">
							<h4 class="rc no-margin-padding">Category Name</h4>
						</div>
					</div>
				</a>
			</div>
			<div class="col-xs-12 col-md-4">
				<a href="#">
					<div class="home-thumbnail" style="background-image: url(<?php the_field('home_hero_image'); ?>)">
						<div class="thumbnail-container">
							<h4 class="rc no-margin-padding">Category Name</h4>
						</div>
					</div>
				</a>
			</div>
			<div class="col-xs-12 col-md-4">
				<a href="#">
					<div class="home-thumbnail" style="background-image: url(<?php the_field('home_hero_image'); ?>)">
						<div class="thumbnail-container">
							<h4 class="rc no-margin-padding">Category Name</h4>
						</div>
					</div>
				</a>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-md-4">
				<a href="#">
					<div class="home-thumbnail" style="background-image: url(<?php the_field('home_hero_image'); ?>)">
						<div class="thumbnail-container">
							<h4 class="rc no-margin-padding">Category Name</h4>
						</div>
					</div>
				</a>
			</div>
			<div class="col-xs-12 col-md-4">
				<a href="#">
					<div class="home-thumbnail" style="background-image: url(<?php the_field('home_hero_image'); ?>)">
						<div class="thumbnail-container">
							<h4 class="rc no-margin-padding">Category Name</h4>
						</div>
					</div>
				</a>
			</div>
			<div class="col-xs-12 col-md-4">
				<a href="#">
					<div class="home-thumbnail" style="background-image: url(<?php the_field('home_hero_image'); ?>)">
						<div class="thumbnail-container">
							<h4 class="rc no-margin-padding">Category Name</h4>
						</div>
					</div>
				</a>
			</div>
		</div>
		<!-- End of thumbnails -->

		<!-- Header for Browse Collections -->
		<div class="row middle-xs">
			<div class="col-xs-12 text-center">
				<h4 class="uc ls1 text-color-3" style="margin: 2rem 0"><?php the_field('home_browse_header'); ?></h4>
			</div>
		</div>

		<!-- Start of browse categories -->
		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-3 col-lg-2">
				<h4 class="shadow-color-1 text-center uc text-color-4 ls1">header</h4>
					<hr>
						<ul class="browse-list">
							<a href="#"><li class="browse-list-item rc">items</li></a>
						</ul>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-3 col-lg-2">
				<h4 class="shadow-color-1 text-center uc text-color-4 ls1">header</h4>
					<hr>
						<ul class="browse-list">
							<li class="browse-list-item rc"></li>
						</ul>	
			</div>
			<div class="col-xs-12 col-sm-6 col-md-3 col-lg-2">
				<h4 class="shadow-color-1 text-center uc text-color-4 ls1">header</h4>
					<hr>
						<ul class="browse-list">
							<li class="browse-list-item rc"></li>
						</ul>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-3 col-lg-2">
				<h4 class="shadow-color-1 text-center uc text-color-4 ls1">header</h4>
					<hr>
						<ul class="browse-list">
							<li class="browse-list-item rc"></li>
						</ul>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-3 col-lg-2">
				<h4 class="shadow-color-1 text-center uc text-color-4 ls1">header</h4>
					<hr>
						<ul class="browse-list">
							<li class="browse-list-item rc"></li>
						</ul>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-3 col-lg-2">
				<a href="#" style="text-decoration: none"><div class="browse-bg-image text-center" style="display: flex; align-items: center; background-image:linear-gradient(to bottom, rgba(28,81,127, .7) 0%, rgba(75,125,180,0.8) 100%), url(<?php the_field('home_hero_image'); ?>)">
					<h4 class="uc ls1">Browse all collections</h4>
				</div></a>
			</div>
		</div>  <!-- end of row -->
	</div>  <!-- end of container -->
</div>  <!-- end of area-warm -->


<div class="area-color-2">
	<div class="container">
		<div class="row middle-xs">
			<div class="col-xs-12 col-md-3">
				<h1 class="text-white text-center"><?php the_field('home_video_header'); ?></h1>
				<p class="text-gray-3"><?php the_field('home_video_text'); ?></p>
			</div>
					
		</div>
	</div>
</div>








<div class="area-warm">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="lightbox-modal on-gray">
					<h2 class="text-color-3 text-center">Add to Lightbox</h2>
					<hr class="hr-white">
					<hr class="hr-white">
					<p class="text-center no-margin-padding">Your Lightboxes:</p>
					
					<select name="lightbox" class="search-drop" style="margin-top: .5rem">
				    <option value="Lightbox Name">Lightbox Name</option>
				    <option value="Option 1">Option 1</option>
				    <option value="Option 2">Option 2</option>
				    <option value="Option 3">Option 3</option>
					</select>

					<button class="button-flat-color-4 uc">Save</button>

					<p class="text-center no-margin-padding">Or Create New Lightbox:</p>
					<input type="text">
					
					<button class="button-flat-color-4 uc">Create</button>
				</div>
			</div>
		</div>
	</div>
</div>


<div class="container">
	<div class="row">
		<div class="col-xs-12">
			<hr class="star-color-1">
		</div>
	</div>
</div>




<div class="vid">
	<div class="vid-content">            
	    <video autoplay loop muted class="vid-video">
			<source src="assets/Strum-Away.webm" type="video/webm"/>
			<source src="http://localhost:8888/rock/wp-content/uploads/2016/03/trees-movie.mp4" type="video/mp4"/>
	        Your browser does not support the HTML5 video tag.
		</video>
		<div class="vid-text">
			<h1>DIMOC Videos</h1>
			<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>
			<a href="#"><button class="button-flat-color-4">Explore</button></a>        
		</div><!-- end hero-text--> 
	</div><!--end hero content-->
</div><!--end hero -->





<!-- start of instagram feed -->
<div class="area-white">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="container-instagram">
					<h4 class="uc ls1 text-color-1 shadow-white"><?php the_field('home_instagram_header'); ?></h4>
					<hr class="hr-white">
					<hr class="hr-white">
					<?php echo do_shortcode('[instagram-feed]'); ?>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end of instagram feed -->



		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();