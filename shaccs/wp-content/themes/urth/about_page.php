<?php
/**
Template Name: About page Template
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
    
    
     <div class="home-testimonial  clearfix">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                            <div class="slogan-section animated fadeInUp clearfix">
                                <h2>What hospitals say <span>About SHACCS</span></h2><p></p>
                            </div>
                        </div>

                        <div class="col-lg-10 col-md-10 col-sm-10 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 text-center">
                            <div class="flexslider-three animated fadeInUp">
                                <ul class="slides">
                                   	<?php

$args = array( 'post_type' => 'testimonial', 'posts_per_page' => 10000 ,'order'=>'ASC');
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post();

?> 
                                     <?php  $featured_img_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' )[0];  ?>
                                    <li>
                                        <img width="130" height="130" src="<?php echo $featured_img_url; ?>" class="img-circle wp-post-image" alt="" srcset="<?php echo $featured_img_url; ?> 130w, <?php echo $featured_img_url; ?> 150w, <?php echo $featured_img_url; ?> 220w" sizes="(max-width: 130px) 100vw, 130px" />                           <blockquote>
                                        <p><?php the_content(); ?></p>
                                    </blockquote>
                                        <div class="testimonial-footer clearfix">
                                            <h3><?php the_title(); ?></h3>
                                            <div class="for-border"></div>
                                           
                                        </div>
                                    </li>
                                    
                                 <?php

endwhile;
?>   
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
    
    
</div>
	
<?php get_footer(); ?>
