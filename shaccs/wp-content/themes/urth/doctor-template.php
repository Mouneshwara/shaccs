<?php
/**
 * The template for displaying pages
 *
 Template Name: Doctor Template
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
				

				<?php
				if ( has_post_thumbnail() ) {
   // the_post_thumbnail();
     $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); 
     ?><div class="banner clearfix" style="background-repeat: no-repeat; background-position: center top; background-image: url('<?php echo $featured_img_url; ?>'); background-size: cover;"></div>
     <?php
}else
{
	?>
	<div class="banner clearfix" style="background-repeat: no-repeat; background-position: center top; background-image: url('<?php echo get_template_directory_uri(); ?>/themes/inspiry-medicalpress/images/banner.jpg'); background-size: cover;"></div>
	<?php
}
				 
				 ?>

<div class="page-top clearfix">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <h1 class="entry-title"><?php the_title(); ?></h1>
                <nav class="bread-crumb">
                    <ul class="breadcrumb clearfix">
                        <li><a href="<?php echo site_url(); ?>">Safe Hands</a><span class="divider"></span></li>
                        <li class="active"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
<div class="doctors-posts doctors-page clearfix">

    <div class="container">

        <div class="row">
        <article class="two-col-service1 post-110 service type-service status-publish has-post-thumbnail hentry">
                <div class="col-md-4" style="margin-top: 29px;">

                    <figure>
                        <a href="#" title="Founder">
                    
                    <?php 

$image = get_field('doctor_image');

if( !empty($image) ): ?>

	
<img width="400" height="200" src="<?php echo $image['url']; ?>" class="attachment-service-gallery-thumb size-service-gallery-thumb wp-post-image" alt="<?php echo $image['alt']; ?>" srcset="<?php echo $image['url']; ?> 848w, <?php echo $image['url']; ?> 300w, <?php echo $image['url']; ?> 732w, <?php echo $image['url']; ?> 111w" sizes="(max-width: 848px) 100vw, 848px">
<?php endif; ?>
                                    </a>
                    </figure>
                </div>
                <?php  $doctor = get_field( "doctor_name" );  $doctor_description = get_field( "doctor_description" ); ?>
                <div class="col-md-8 contents clearfix">
                    <h3>Founder</h3>
                    <div class="entry-content pgap">
                        <h5><a href="#"><?php echo $doctor; ?></a></h5>
 
                          
 
                         <?php echo $doctor_description; ?>


                    </div>

                </div>
                <div class="clearfix"></div>
            </article>
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="blog-page-single clearfix">
                    <article id="post-60" class=" clearfix post-60 page type-page status-publish hentry">
                        <div class="full-width-contents">
                            <div class="entry-content">
                                <h2 style="text-align: center;">Meet Our Physicians</h2>
                                <p style="text-align: center;">
                                    <!-- Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. -->
                                </p>
                            </div>
                        </div>
                    </article>
                </div>
            </div>

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
		 <div class="container isotope-wrapper text-center">
        <div class="row">
            <div id="isotope-container" class="clearfix" style="position: relative; height: 1206.22px;">

<?php

$args = array( 'post_type' => 'acme_product', 'posts_per_page' => 10000 ,'order'=>'ASC');
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post();

?>
<div class="isotope-item cardiac-clinic primary-health-care col-lg-4 col-md-4 col-sm-6 " >
                    <article class="common-doctor clearfix hentry">
                    <?php if(has_post_thumbnail()) { $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');   ?>
                        <figure>
                            <a href="#"><img src="<?php echo $featured_img_url; ?>" style="width: 100%; "></a>
                        </figure>
                      <?php } ?>
                        <div class="text-content">
                            <h5><a href="#"><?php the_title(); ?></a></h5>
                            <div class="for-border"></div>
                           <?php the_content(); ?>


                        </div>
                    </article>
                </div>
<?php

endwhile;
?>
           



                </div>
                 
            </div>
        </div>
		</div>

			<!-- </div> -->


			<!-- </div> -->

<?php get_footer(); ?>
