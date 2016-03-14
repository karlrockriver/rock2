<?php
/**
 * Template Name: Asset Detail
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
			<div class="col-xs-12 col-md-5">
				<img src="<?php the_field('detail_image'); ?>">
				<div class="keyword-box">
					<h3 class="uc ls1 text-color-2">Keywords</h3>
					<hr class="hr-white">
					<hr class="hr-white">
					<div class="container-a">
						<a href="#">DoD</a><a href="#">Defense</a><a href="#">USAF</a><a href="#">Aircraft</a><a href="#">Airman</a><a href="#">Jet</a><a href="#">Plane</a><a href="#">Soldier</a><a href="#">Defense</a><a href="#">USAF</a><a href="#">Aircraft</a>
					</div>

					<h4 class="uc ls1 text-color-2">Indexed Terms:</h4>
					<div class="container-a">
						<a href="#">DoD</a><a href="#">Military</a><a href="#">Army</a><a href="#">Afghanistan</a><a href="#">Aircraft</a>
					</div>

					<h4 class="uc ls1 text-color-2">Related Terms:</h4>
					<div class="container-a">
						<a href="#">Plane</a><a href="#">Army</a><a href="#">DoD</a><a href="#">Flight Deck</a><a href="#">Carrier</a>
					</div>
				</div>  <!-- end of keyword box -->
			</div>

			<div class="col-xs-12 col-md-7">
				<h1 class="rc"><b>Asset Description (truncated)</b></h1>
				<div><p class="inline">Asset Title: </p><p class="inline"><b>15022-12-921498320</b></p></div>
				<div><p class="inline">Asset ID: </p><p class="inline"><b>1928374</b></p></div>
				<br>
				<div><p class="inline"></p><p class="inline">Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed odio dui. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur blandit tempus porttitor. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p></div>
				<br>
				<div><p class="inline">Status: </p>	<p class="inline"><b>Released</b></p></div>
				<div><p class="inline">Photographer: </p>	<p class="inline"><b>John Doe</b></p></div>
				<div><p class="inline">Date Taken: </p>	<p class="inline"><b>2015-02-22</b></p></div>
				<div><p class="inline">Location: </p>	<p class="inline"><b>AFghanistan</b></p></div>
				<br>
				<div><p class="inline">Owner: </p>	<p class="inline"><b>DoD</b></p></div>
				<div><p class="inline">Unit: </p>	<p class="inline"><b>Not Listed</b></p></div>
				<div><p class="inline">Command: </p>	<p class="inline"><b>Not Listed</b></p></div>
				<div><p class="inline">Service Documenting: </p>	<p class="inline"><b>Army</b></p></div>
				<button class="button-flat-color-2 uc rc" style="margin: 1rem 0">Add to Lightbox</button>
				<button class="button-flat-color-1 uc rc" style="margin: 1rem 0 1rem 1rem">Add to Cart</button>

			</div>
		</div>  <!-- end of row -->
	</div>  <!-- end of container -->
</div>  <!-- end of area-white -->


		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
