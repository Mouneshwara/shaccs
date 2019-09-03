<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 /*
Template Name: Services

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
				<?php
		// Start the loop.
				 $args = array(
  'post_type'      => 'post',
  'order'          => 'ASC',
);
$query = new WP_Query( $args );

if ( $query->have_posts() ) {
    while ( $query->have_posts() ) { 
    $query->the_post();


		?>
<div class="row">
                <article class="two-col-service1 post-110 service type-service status-publish has-post-thumbnail hentry">
                    <div class="col-md-4">
                    <figure>
                     <?php  $featured_img_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' )[0];  ?>
                        <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
                    <img width="400" height="200" src="<?php echo $featured_img_url; ?>" class="attachment-service-gallery-thumb size-service-gallery-thumb wp-post-image" alt="" srcset="<?php echo $featured_img_url; ?> 848w, <?php echo $featured_img_url; ?> 300w, <?php echo $featured_img_url; ?> 732w, <?php echo $featured_img_url; ?> 111w" sizes="(max-width: 848px) 100vw, 848px">                </a>  <?php  ?>
                    </figure>
                    </div>
                    <div class="col-md-8 contents clearfix">
                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <div class="entry-content">
                            <p><?php the_excerpt(); ?></p>
                                

                        </div>
                        <a class="read-more" href="<?php the_permalink(); ?>">Read More</a>
                    </div>
                </article>
            </div>
		<?php
}
    wp_reset_postdata();
}
			// Include the page content template.
		

			// If comments are open or we have at least one comment, load up the comment template.
			

			// End of the loop.
		
		?>
		</div>
		</div>
		</div>
			<!-- </div> -->


			<!-- </div> -->

<?php get_footer(); ?>
