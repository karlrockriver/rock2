<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Rock
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">


<div class="container">

	<div class="row no-margin-padding text-white">
		<div class="col-xs-12 col-md-3 no-margin-padding">
			<img src="images/logo.png">
		</div>
		<div class="col-xs-12 col-md-4 col-md-offset-3 middle-xs" style="margin-top: 1rem">
			<nav class="footer-nav">
				<?php wp_nav_menu( array( 'menu' => 'Footer Menu' ) ); ?>
			</nav>
		</div>
		<div class="col-xs-12 col-md-2 middle-xs" style="margin-top: 1rem">social</div>
	</div>

	<div class="row text-white" style="padding: .5rem 0">
		<div class="col-xs-12 col-md-6">
			<p class="rc no-margin-padding">The Official Media Library of the U.S. Department of Defense</p>
		</div>
		<div class="col-xs-12 col-md-6">
			<p class="rc no-margin-padding float-right-lg">1.800.444.3333  •  support@imagesoffreedom.com</p>
		</div>
	</div>

	<div class="row">
		<div class="footer-email-container">
			<div class="col-xs-12">
				<div class="row middle-xs">
					<div class="col-xs-12 col-md-6 text-white">
						<h3 class="uc">Subscribe to our mailing list</h3>
						<p class="rc no-margin-padding">Get archive news delivered directly to your inbox.</p>
					</div>
					<div class="col-xs-12 col-md-6 text-white middle-xs">
						<input type="text" placeholder="Name" class="inline" style="margin-right: .5rem"><input type="email" placeholder="Email" class="inline" style="margin-right: .5rem"><button class="button-flat-color-1 inline uc rc" style="margin:0" type="submit">Subscribe</button>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="row text-white">
		<div class="col-xs-12">
			<p style="font-size: 12px">Privacy Policy   |   Terms of Use   |   ©2015 DIMOC</p>
		</div>
	</div>

</div>

			
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
