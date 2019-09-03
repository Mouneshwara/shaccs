<?php
/**
 * The template for displaying all single posts and attachments
 *
 *
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>
<div class="banner clearfix" style="background-repeat: no-repeat; background-position: center top; background-image: url('<?php echo get_template_directory_uri(); ?>/themes/inspiry-medicalpress/images/banner.jpg'); background-size: cover;"></div>
<!-- .content-area -->
<!-- <div class="wrapper active_page" id="about_page"> -->
			<!-- <div class="section"> -->

<!-- <div class="breadcrumb onload">
					<p><a href="<?php echo site_url(); ?>">Home</a> / <a href=""><?php the_title(); ?></a></p>
				</div> -->
				

				<!-- <?php
				if ( has_post_thumbnail() ) {
   // the_post_thumbnail();
     $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); 
     ?><div class="banner clearfix" style="background-repeat: no-repeat; background-position: center top; background-image: url('<?php echo $featured_img_url; ?>'); background-size: cover;"></div>
     <?php
}else
{
	?> -->
	
	<!-- <?php
}
				 
				 ?> -->

<div class="page-top clearfix">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <h1 class="entry-title"><?php if ( is_singular( 'home_blog' ) ) {
	?>
   Blog
					<?php
}else{ ?> Services <?php } ?> - <?php the_title(); ?></h1>
                <nav class="bread-crumb">
                    <ul class="breadcrumb clearfix">
                        <li><a href="<?php echo site_url(); ?>/services"><?php if ( is_singular( 'home_blog' ) ) {
	?>
   Blog
							<?php
}else{ ?> Services <?php } ?></a><span class="divider"></span></li>
                        <li class="active"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
<div class="faq-page  clearfix">

    <div class="container">

        <div class="row">
			<?php if ( is_singular( 'home_blog' ) ) {
	?>
    <div class="col-md-5">
                    <figure>
                     <?php  $featured_img_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' )[0];  ?>
                        <a href="#" title="<?php the_title(); ?>">
                    <img style="width: 100%; height: 100%;"  src="<?php echo $featured_img_url; ?>" class="attachment-service-gallery-thumb size-service-gallery-thumb wp-post-image" alt="" srcset="<?php echo $featured_img_url; ?> 848w, <?php echo $featured_img_url; ?> 300w, <?php echo $featured_img_url; ?> 732w, <?php echo $featured_img_url; ?> 111w" sizes="(max-width: 848px) 100vw, 848px">                </a>  <?php  ?>
                    </figure>
                    </div>
							<?php
}else{ ?>  <?php } ?>
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<?php

			// Include the page content template.
		the_content();

			// If comments are open or we have at least one comment, load up the comment template.
			

			// End of the loop.
		
endwhile; ?>
<?php endif; ?>
	
		</div>
		</div>
		</div>
			<!-- </div> -->


			<!-- </div> -->

<?php get_footer(); ?>
