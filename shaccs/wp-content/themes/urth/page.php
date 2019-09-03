<?php
/**
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
			<!-- </div> -->


			<!-- </div> -->
<?php// get_sidebar(); ?>
<?php get_footer(); ?>
