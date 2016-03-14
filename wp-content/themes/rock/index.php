<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
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
		<div class="row middle-xs">
			<div class="col-xs-12">
				<h1 class="text-center text-color-2">Blog</h1>
			</div>
		</div>
		<div class="row middle-xs">
			<div class="col-xs-12 col-md-8 col-md-offset-2">
				<div class="blog-categories">
<?php 
    $args = array(
	'show_option_all'    => '',
	'orderby'            => 'name',
	'order'              => 'ASC',
	'style'              => 'none',
	'hierarchical'       => 1,
	'title_li'           => '',
	'show_option_none'   => __( '' ),
	'number'             => null,
	'echo'               => '1',
	'depth'              => 0,
	'current_category'   => 0,
	'pad_counts'         => 0,
	'taxonomy'           => 'category',
    );
    wp_list_categories( $args ); 
?>

				</div>
			</div>
		</div>
	</div>

<div class="container">
      
          <?php 
          /*
            Start with variables to help with row creation;
          */
            $startRow = true;
            $postCounter = 0;
          ?>
          <?php
          /*
            Start the loop
          */
            if (have_posts()) : while (have_posts()) : the_post();  
          ?>

            <?php
            /*
              Check whether we need to add the start of a new row.
              If true, echo a div with the "row" class and set the startRow variable to false 
              If false, do nothing. 
            */
            if ($startRow) {
              echo '<!-- START OF INTERNAL ROW --><div class="row">';
              $startRow = false;
            }  
            ?>
            <?php
            /* Add one to the counter because a new post is being added to your page.  */ 
              $postCounter += 1; 
            ?>
            <!-- This div serves as the template for each post returned within the loop -->
            <div class="col-xs-12 col-md-4">
            	<div class="blog-card">
            		<!-- get thumbnail as bg image -->
					<?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' ); ?>
					<a href="<?php the_permalink(); ?>"><div class="blog-card-bg" style="background-image: url(<?php echo $src[0]; ?> ) ;"></div></a>
            	<div class="blog-card-bottom">
	            	<a href="<?php the_permalink(); ?>"><h1 class="blog-h1"><?php the_title(); ?></h1></a>
	                      <h5 class="uc text-gray-6" style="margin-bottom: 0">Posted on <?php echo the_time('l, F jS, Y'); ?></h5>
	                  <?php the_excerpt(); ?>
                </div>
              </div>
            </div>
            <?php 
            /*
            Check whether the counter has hit 3 posts.  
            If true, close the "row" div.  Also reset the $startRow variable so that before the next post, a new "row" div is being created. Finally, reset the counter to track the next set of three posts.
            If false, do nothing. 
            */
            if ( 3 === $postCounter ) {
                echo '</div><!-- END OF INTERNAL ROW -->';
                $startRow = true;
                $postCounter = 0;
            }
            ?>
            <?php 
            /* END THE WHILE LOOP*/
            endwhile;
            ?>
            <?php 
            /* If you are returning an odd number of posts (i.e., anything other than a multiple of 3), we will need to close the row div.*/
            if ($postCounter !== 0 ) {
              echo '</div><!-- END OF INTERNAL ROW -->';
            }
            ?>
            <?php else:  ?>
              <div class="page-header"><h1>Uh Oh!</h1></div>
              <p>Sorry, for some reason the contents of this page isn't displaying.</p>
            <?php endif; ?>


<h4 class="uc ls1" style="margin: 2rem 0 0 0"><?php the_posts_navigation(); ?></h4>
     
    </div><!-- END OF CONTAINER -->


</div>  <!--end of area-white -->


		</main><!-- #main -->
	</div><!-- #primary -->


<?php
get_footer();
