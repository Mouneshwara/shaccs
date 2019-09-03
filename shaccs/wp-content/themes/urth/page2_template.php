<?php
/**
Template Name: Page Second Template
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

<!-- .content-area -->
<!-- <div class="wrapper active_page" id="about_page"> -->
			<!-- <div class="section"> -->

<!-- <div class="breadcrumb onload">
					<p><a href="<?php echo site_url(); ?>">Home</a> / <a href=""><?php the_title(); ?></a></p>
				</div> -->
				<div class="faq-page  clearfix">
    <div class="container">
                     <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 ">
                    <div class="slogan-section clearfix">
                        <h2><?php the_title(); ?></h2>                   </div>
                </div>
            </div> 
            
        <div class="row">
                                
                                    
                       <?php
        // Start the loop.
        while ( have_posts() ) : the_post();

        ?>

        <?php

            // Include the page content template.
        the_content();

            // If comments are open or we have at least one comment, load up the comment template.
            

            // End of the loop.
        endwhile;
        ?>
                            </div>

    </div>
    
    
    
</div>
	
<?php get_footer(); ?>
