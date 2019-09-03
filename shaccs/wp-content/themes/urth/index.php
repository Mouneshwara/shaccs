 <?php /*Template Name:home page 1*/?>
 <?php get_header(); ?>
<style>
.home-slider .right1 {
    width: 100%;
    margin-top: 263px;
    padding-left: 600px;
}
.home-slider .right2 {
    width: 120%;
    margin-top: 16px;
    padding-left: 748px;
}
.single-feature p {
    text-align: justify !important;
}
.home-slider .left1 {
    width: 40%;
    margin-top: 215px;
}
.home-doctors .common-doctor {
    background-color: #fff;
    margin-bottom: 35px;
    height: 750px !important;
}
</style>
            <div class="home-slider clearfix">
                <div class="flexslider loading">
                    <ul class="slides">
                       <?php while( have_rows('slider_reap') ): the_row();
                       
                       ?> 
                       <?php $layer=get_sub_field('slider_text'); $image=get_sub_field('slider_image');  ?>
                        <li>
                              <img src="<?php echo $image; ?>" class="gallery-post-single" alt="<?php echo get_sub_field('slider_image'); ?>" />
                            <div class="content-wrapper clearfix">
                                <div class="container">
                                   <?php print_r($layer); ?>
                                </div>
                            </div>
                        </li>
                        <?php endwhile; ?>
                        <!--<li>-->
                        <!--      <img src="<?php echo get_template_directory_uri(); ?>/images/two.jpg" class="gallery-post-single" alt="Qualified Staff With <span>Expertise in Services We Offer</span>" />-->
                        <!--    <div class="content-wrapper clearfix">-->
                        <!--        <div class="container">-->
                        <!--            <div class="slide-content right1 clearfix ">-->
                        <!--                <h2 style="color: #30305a;"> <span style="color: #30305a;">Care</span> When <span style="color: #30305a;">You are Unaware</span></h2>-->
                                        
                                       
                        <!--            </div>-->
                        <!--        </div>-->
                        <!--    </div>-->
                        <!--</li>-->
                        <!--<li>-->
                        <!--     <img src="<?php echo get_template_directory_uri(); ?>/images/three.jpg" class="gallery-post-single" alt="Qualified Staff With <span>Expertise in Services We Offer</span>" />-->
                        <!--    <div class="content-wrapper clearfix">-->
                        <!--        <div class="container">-->
                        <!--            <div class="slide-content left1 clearfix ">-->
                        <!--                <h2 style="color: #ffffff;">Passionate team coming together <span style="color: #ffffff;">to serve better</span></h2>-->
                                       
                        <!--            </div>-->
                        <!--        </div>-->
                        <!--    </div>-->
                        <!--</li>-->
                        <!-- <li>-->
                        <!--     <img src="<?php echo get_template_directory_uri(); ?>/images/dc_ban.png" class="gallery-post-single" alt="Qualified Staff With <span>Expertise in Services We Offer</span>" />-->
                        <!--    <div class="content-wrapper clearfix">-->
                        <!--        <div class="container">-->
                        <!--            <div class="slide-content right2 clearfix ">-->
                        <!--                <h2 style="color: #30305a;">Dedication <span style="color: #30305a;">Beyond Measure</span></h2>-->
                                       
                        <!--            </div>-->
                        <!--        </div>-->
                        <!--    </div>-->
                        <!--</li>-->
                        
                        
                    </ul>
                </div>
                
            </div>
            <?php

$welcome = get_field('welcome');
$founder_text = get_field('founder_text');
$hospital_critical_care_services = get_field('hospital_&_critical_care_services');
$pain_management = get_field('pain_management');
$emergency = get_field('emergency');
$obstetrics = get_field('obstetrics');
// do something with $variable

?>
			<div class="container">
                    <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 ">
                    <div class="slogan-section animated fadeInUp clearfix">
                       <?php echo $welcome; ?>
                       
                                     </div>
                </div>
            </div>
			</div>
            <div class="home-features clearfix">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 ">
                <div class="features-intro clearfix">
                <figure>
                	<img src="<?php echo get_field('founder_image'); ?>" height="200" width="400">
                </figure>
                    <!--<h2><span>Founder </span></h2>-->

                    <?php echo $founder_text; ?>
                                
                    </div>
                     <a class="read-more" href="<?php echo site_url(); ?>/Physicians">View More</a>   
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12 ">
                <div class="row">

                    <div class="col-lg-6 col-md-6 col-sm-6 single-feature">
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-3 icon-wrapper">
                                  <img src="<?php echo get_template_directory_uri(); ?>/images/hospital.png">                           </div>
                            <div class="col-lg-9 col-md-9 col-sm-9">
                               <h3>Hospital & Critical Care Services</h3>
                                <?php echo $hospital_critical_care_services; ?>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6 single-feature">
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-3 icon-wrapper">
                               <img src="<?php echo get_template_directory_uri(); ?>/images/Pain-Management-icon.png">
                                </div>
                            <div class="col-lg-9 col-md-9 col-sm-9">
                              <h3>Pain Management</h3>
                               <?php echo $pain_management; ?>
                            </div>
                        </div>
                    </div>
                    <div class="visible-lg clearfix"></div>
                    <div class="visible-md clearfix"></div>
                    <div class="visible-sm clearfix"></div>
                    <div class="col-lg-6 col-md-6 col-sm-6 single-feature">
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-3 icon-wrapper">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/164d006a.png">                          </div>
                            <div class="col-lg-9 col-md-9 col-sm-9">
                                <h3>Emergency</h3>
                               <?php echo $emergency; ?>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6 single-feature">
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-3 icon-wrapper">
                                <!-- <i class="fa fa-user-md"></i>   -->
                                <img src="<?php echo get_template_directory_uri(); ?>/images/icon.png">                          </div>
                            <div class="col-lg-9 col-md-9 col-sm-9">
                                <h3>obstetrics</h3>
                               <?php echo $obstetrics; ?>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>




            <div class="home-doctors  clearfix">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 ">
                            <div class="slogan-section animated fadeInUp clearfix">
                                <h2>Meet our <span>Medical Specialists</span></h2>
                            </div>
                        </div>
                    </div>

                    <div class="row">

                    <?php

                       $args = array( 'post_type' => 'acme_product', 'post__in' => array( 140,136,350 ),'posts_per_page' => 3 ,'order'=>'ASC');
                       $loop = new WP_Query( $args );
                       while ( $loop->have_posts() ) : $loop->the_post();

                       ?>
                        <div class="col-lg-4 col-md-4 col-sm-6 text-center doctor-wrapper">
                            <div class="common-doctor animated fadeInUp clearfix">
                             <?php if(has_post_thumbnail()) { $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');   ?>
                                <figure>
                                    <a href="physicians.php" title="Dr.Mohseen">
                                        <img width="670" height="500" src="<?php echo $featured_img_url; ?>" class="attachment-gallery-post-single size-gallery-post-single wp-post-image" alt="" srcset="<?php echo $featured_img_url; ?> 670w, <?php echo $featured_img_url; ?> 300w" sizes="(max-width: 670px) 100vw, 670px" />
                                    </a>
                                </figure>
                                 <?php } ?>
                                <div class="text-content">
                            <h5><a href="physicians.php"><?php the_title(); ?></a></h5>
                            <div class="for-border"></div>
                            <?php the_content(); ?>
                        </div>
                            </div>
                            <a class="read-more" href="<?php echo site_url(); ?>/physicians">Read More</a>
                        </div>
                        <?php

                        endwhile;
                               ?>
                       <!--  <div class="col-lg-4 col-md-4 col-sm-6 text-center doctor-wrapper">
                            <div class="common-doctor animated fadeInUp clearfix">
                                <figure>
                                    <a href="#" title="Dr.Ashok">
                                        <img width="670" height="500" src="<?php echo get_template_directory_uri(); ?>/images/d3.jpg" class="attachment-gallery-post-single size-gallery-post-single wp-post-image" alt="" srcset="<?php echo get_template_directory_uri(); ?>/images/d3.jpg 670w, <?php echo get_template_directory_uri(); ?>/images/d3.jpg 300w" sizes="(max-width: 670px) 100vw, 670px" />
                                    </a>
                                </figure>
                                <div class="text-content">
                            <h5><a href="physicians.php">Dr.Ashok.M.S.</a></h5>
                            <div class="for-border"></div>
                            <p>Consultant Anesthesiologist</p>
                            <p> M.B.B.S., M.D.</p>

                            <p>Dr. Ashok has worked as Assistant Professor at MSR Care, Bangalore.</p>
                            <p>- Specialized in Regional Anesthesia and Labour Anesthesia</p>
                            <p>- Qualified in CTLS (Comprehensive Trauma Life Support)</p>
                            <p>- Instructor in American Heart Association- ACLS (Advanced Cardiac Life Support) course</p>
                            <p>- Fellowship in Regional Anesthesia</p>


                        </div>
                            </div>
                            <a class="read-more" href="physicians.php">Read More</a>
                        </div>
                        <div class="visible-sm clearfix"></div>
                        <div class="col-lg-3 col-md-3 col-sm-6 text-center doctor-wrapper">
                            <div class="common-doctor animated fadeInUp clearfix">
                                <figure>
                                    <a href="physicians.php" title="Dr. Sudhir Rao">
                                        <img width="670" height="500" src="<?php echo get_template_directory_uri(); ?>/images/d2.jpg" class="attachment-gallery-post-single size-gallery-post-single wp-post-image" alt="" srcset="<?php echo get_template_directory_uri(); ?>/images/d2.jpg 670w, <?php echo get_template_directory_uri(); ?>/images/d2.jpg 300w" sizes="(max-width: 670px) 100vw, 670px" />
                                    </a>
                                </figure>
                                <div class="text-content">
                            <h5><a href="physicians.php">Dr. Sudhir Rao. S.</a></h5>
                            <div class="for-border"></div>
                            <p> Consultant Anesthesiologist </p>
                            <p> M.B.B.S., M.D. </p>
                            <p>Dr. Sudhir Rao has worked as Assistant Professor at MSRamaiha Care, Bangalore. Experienced in Critical Care services. </p>

                        </div>
                            </div>
                            <a class="read-more" href="physicians.php">Read More</a>
                        </div>!
                        <div class="col-lg-4 col-md-4 col-sm-6 text-center doctor-wrapper">
                            <div class="common-doctor animated fadeInUp clearfix">
                                <figure>
                                    <a href="physicians.php" title="Dr.Sandhya">
                                        <img width="670" height="500" src="<?php echo get_template_directory_uri(); ?>/images/sandhya.jpg" class="attachment-gallery-post-single size-gallery-post-single wp-post-image" alt="" srcset="<?php echo get_template_directory_uri(); ?>/images/sandhya.jpg 670w, <?php echo get_template_directory_uri(); ?>/images/sandhya.jpg 300w" sizes="(max-width: 670px) 100vw, 670px" />
                                    </a>
                                </figure>
                                <div class="text-content">
                            <h5><a href="physicians.php">Dr.Sandhya.M.K.</a></h5>
                            <div class="for-border"></div>
                            <p>
                                Consultant Anesthesiologist</p>
                            <p>M.B.B.S., M.D.</p>
                            <p>Dr. Sandhya has worked as an Assistant Professor at Kannur Medical College. </p>
                            <p>- Completed a Fellowship in ultrasound guided Regional Anesthesia</p>
                            <p>- Especially skilled in endotracheal and nasal intubation and supraglottic airway devices</p>
                            <p>- Experience is handling high risk cases, Obstetric cases and Paediatric cases</p>
                            <p>- ACLS trained</p>
                        </div>
                            </div>
                            <a class="read-more" href="physicians.php">Read More</a>
                        </div> -->
                        <div class="visible-sm clearfix"></div>
                        <div class="hidden-sm clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="home-blog text-center clearfix">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="slogan-section animated fadeInUp clearfix">
                                <h2>Latest News from <span>Health and Medical</span></h2><p></p>
                            </div>
                            <div class="row">
                               
                                <div class="col-lg-4 col-md-4 col-sm-6 ">
                                    <article class="common-blog-post hentry animated fadeInRight clearfix">
                                         <div class="gallery gallery-slider clearfix loading">
                                            <ul class="slides">
                                                <li><a href="<?php echo get_template_directory_uri(); ?>/images/af1.jpg" title=""><img src="<?php echo get_template_directory_uri(); ?>/images/af1.jpg" alt="gallery-1" /></a></li>
                                                <li><a href="<?php echo get_template_directory_uri(); ?>/images/af2.jpg" title=""><img src="<?php echo get_template_directory_uri(); ?>/images/af2.jpg" alt="gallery-2" /></a></li>
                                                <li><a href="<?php echo get_template_directory_uri(); ?>/uploads/2014/05/af3.jpg" title=""><img src="<?php echo get_template_directory_uri(); ?>/uploads/2014/05/af3.jpg" alt="gallery-3" /></a></li>
                                                <!--<li><a href="<?php echo get_template_directory_uri(); ?>/uploads/2014/05/gallery-4.jpg" title=""><img src="<?php echo get_template_directory_uri(); ?>/uploads/2014/05/gallery-4.jpg" alt="gallery-4" /></a></li>-->
                                            </ul>
                                        </div>                       
                                        
                                        <div class="text-content clearfix">
                                            <h5 class="entry-title"><a href="affilates.php" rel="bookmark">Affiliates</a></h5>
                                            <div class="entry-meta">
                                                <time class="published updated" datetime="2014-05-16T10:51:31+00:00">16 May, 2017</time>,
                                                <span class="entry-author vcard">
                                                    by                                            <a class="url fn" href="#" title="View all posts by John Doe" rel="author">SHACCS</a>
                                                </span>
                                            </div>
                                            <div class="for-border"></div>
                                           <!--  <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat&hellip; </p> -->
                                        </div>
                                    </article>
                                    <a class="read-more" href="affilates.php">Read More</a>
                                </div>
                                 <div class="col-lg-4 col-md-4 col-sm-6 ">
                                    <article class="common-blog-post hentry animated fadeInRight clearfix">
                                        <figure>
                                            <a href="#" title="Image Post Format">
                                                <img width="732" height="447" src="<?php echo get_template_directory_uri(); ?>/images/faq.jpg" class="attachment-blog-post-thumb size-blog-post-thumb wp-post-image" alt="" srcset="<?php echo get_template_directory_uri(); ?>/images/faq.jpg 732w, <?php echo get_template_directory_uri(); ?>/images/faq.jpg 111w" sizes="(max-width: 732px) 100vw, 732px" />
                                            </a>
                                        </figure>
                                        <div class="text-content clearfix">
                                            <h5 class="entry-title"><a href="<?php echo get_option('siteurl');?>/faq" rel="bookmark">FAQ</a></h5>
                                            <div class="entry-meta">
                                                <time class="published updated" datetime="2014-05-20T10:55:42+00:00">20 May, 2017</time>,
                                                <span class="entry-author vcard">
                                                    by                                            <a class="url fn" href="#" title="View all posts by John Doe" rel="author">SHACCS</a>
                                                </span>
                                            </div>
                                            <div class="for-border"></div>
                                           <!--  <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat&hellip; </p> -->
                                        </div>
                                    </article>
                                    <a class="read-more" href="<?php echo get_option('siteurl');?>/faq">Read More</a>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6 ">
                                    <article class="common-blog-post hentry animated fadeInRight clearfix">
                                        <div class="video clearfix">
                                            <div class="video-wrapper clearfix">
                                                <iframe src="http://player.vimeo.com/video/75594702?title=0&amp;byline=0&amp;portrait=0" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                                            </div>
                                        </div>
                                        <div class="text-content clearfix">
                                            <h5 class="entry-title"><a href="#" rel="bookmark">Informative Video</a></h5>
                                            <div class="entry-meta">
                                                <time class="published updated" datetime="2014-05-12T10:41:56+00:00">1 March, 2018</time>,
                                                <span class="entry-author vcard">
                                                    by                                            <a class="url fn" href="#" title="View all posts by John Doe" rel="author">SHACCS</a>
                                                </span>
                                            </div>
                                            <div class="for-border"></div>
                                           <!--  <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat&hellip; </p> -->
                                        </div>
                                    </article>
                                    <a class="read-more" href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
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
           <!-- <div class="home-testimonial  clearfix">
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
                                    
                                    
                                    <li>
                                        <img width="130" height="130" src="<?php echo get_template_directory_uri(); ?>/uploads/2014/05/zion.png" class="img-circle wp-post-image" alt="" srcset="<?php echo get_template_directory_uri(); ?>/uploads/2014/05/zion.png 130w, <?php echo get_template_directory_uri(); ?>/uploads/2014/05/zion.png 150w, <?php echo get_template_directory_uri(); ?>/uploads/2014/05/zion.png 220w" sizes="(max-width: 130px) 100vw, 130px" />                           <blockquote>
                                        <p>Zion hospitals is a super-specialty hospital which aims at creating an integrated health care system by leveraging the best medical practices. It is a 45 bed hospital committed towards complete care.</p>
                                    </blockquote>
                                        <div class="testimonial-footer clearfix">
                                            <h3>Zion Hospitals</h3>
                                            <div class="for-border"></div>
                                           
                                        </div>
                                    </li>
                                    <li>
                                        <img width="130" height="130" src="<?php echo get_template_directory_uri(); ?>/uploads/2014/05/bos.png" class="img-circle wp-post-image" alt="" srcset="<?php echo get_template_directory_uri(); ?>/uploads/2014/05/bos.png 130w, <?php echo get_template_directory_uri(); ?>/uploads/2014/05/bos.png 150w, <?php echo get_template_directory_uri(); ?>/uploads/2014/05/bos.png 220w" sizes="(max-width: 130px) 100vw, 130px" />                           <blockquote>
                                        <p>Bangalore Orthopaedic and Surgical Hospital has a long history of providing high quality care & clinical excellence. It is a 30 bed hospital located in North Bangalore. It offers a wide range of specialty services and is known for its clinical excellence.</p>
                                    </blockquote>
                                        <div class="testimonial-footer clearfix">
                                            <h3>BOSH</h3>
                                            <div class="for-border"></div>
                                           
                                        </div>
                                    </li>
                                    <li>
                                        <img width="130" height="130" src="<?php echo get_template_directory_uri(); ?>/uploads/2014/05/test.jpg" class="img-circle wp-post-image" alt="" srcset="<?php echo get_template_directory_uri(); ?>/uploads/2014/05/test.jpg 130w, <?php echo get_template_directory_uri(); ?>/uploads/2014/05/test.jpg 150w, <?php echo get_template_directory_uri(); ?>/uploads/2014/05/test.jpg 220w" sizes="(max-width: 130px) 100vw, 130px" />              <blockquote>
                                        <p>Frontline is a Polyclinic and is an initiative of IMA (Monetary Advisory Council) and is committed towards providing highest quality medical care. </p>
                                    </blockquote>                    
                                        <div class="testimonial-footer clearfix">
                                            <h3>Frontline Multispecialty Hospital</h3>
                                            <div class="for-border"></div>
                                           
                                        </div>
                                    </li>
                                    <li>
                                        <img width="130" height="130" src="<?php echo get_template_directory_uri(); ?>/uploads/2014/05/3k.png" class="img-circle wp-post-image" alt="" srcset="<?php echo get_template_directory_uri(); ?>/uploads/2014/05/3k.png 130w, <?php echo get_template_directory_uri(); ?>/uploads/2014/05/3k.png 150w, <?php echo get_template_directory_uri(); ?>/uploads/2014/05/3k.png 220w" sizes="(max-width: 130px) 100vw, 130px" />                                   <blockquote>
                                        <p>3K Healthcare is an innovative organization that offers comprehensive primary health care services that focus on diagnosis which facilitates a better change towards recovery. The hospital offers super specialty healthcare services.</p>
                                    </blockquote>
                                        <div class="testimonial-footer clearfix">
                                            <h3>3K HealthCare</h3>
                                            <div class="for-border"></div>
                                           
                                        </div>
                                    </li>
                                    <li>
                                        <img width="130" height="130" src="<?php echo get_template_directory_uri(); ?>/uploads/2014/05/zion.png" class="img-circle wp-post-image" alt="" srcset="<?php echo get_template_directory_uri(); ?>/uploads/2014/05/test.jpg 130w, <?php echo get_template_directory_uri(); ?>/uploads/2014/05/test.jpg 150w, <?php echo get_template_directory_uri(); ?>/uploads/2014/05/test.jpg 220w" sizes="(max-width: 130px) 100vw, 130px" />                           <blockquote>
                                        <p>Bangalore Diabetes Center is a tertiary care diabetes center with state-of-the-art technology and provides sophisticated and specialized medical services at affordable costs in Diabetes and its related specialties.</p>
                                    </blockquote>
                                        <div class="testimonial-footer clearfix">
                                            <h3>BDC</h3>
                                            <div class="for-border"></div>
                                           
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>!-->
            <div class="home-blog text-center clearfix">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="slogan-section animated fadeInUp clearfix">
                                <h2>Recent <span>Blog</span></h2>
                            </div>
                            <div class="row">
								<?php

$args = array( 'post_type' => 'home_blog', 'posts_per_page' => 10000 ,'order'=>'ASC');
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post();
$home_video = get_field('home_video', $post->ID);
preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $home_video, $match);
 $youtube_id = $match[1];
?>
                                <div class="col-lg-4 col-md-4 col-sm-6 ">
                                    <article class="common-blog-post hentry animated fadeInRight clearfix">
                                        <figure>
                                            <a href="#" title="Image Post Format">
                                               <!-- <img width="732" height="447" src="<?php echo get_template_directory_uri(); ?>/uploads/2014/05/news-2-732x447.jpg" class="attachment-blog-post-thumb size-blog-post-thumb wp-post-image" alt="" srcset="<?php echo get_template_directory_uri(); ?>/uploads/2014/05/news-2-732x447.jpg 732w, <?php echo get_template_directory_uri(); ?>/uploads/2014/05/news-2-111x69.jpg 111w" sizes="(max-width: 732px) 100vw, 732px" />-->
												
												<iframe id="video" width="400" height="315" src="//www.youtube.com/embed/<?php echo $youtube_id; ?>?rel=0" frameborder="0" allowfullscreen></iframe>
                                            </a>
                                        </figure>
                                        <div class="text-content clearfix">
                                            <h5 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?>                      </a></h5>
                                            <div class="entry-meta">
                                                <time class="published updated" datetime="2014-05-20T10:55:42+00:00"><?php echo get_the_date(); ?></time>,
                                                <span class="entry-author vcard">
                                                    by                                            <a class="url fn" href="<?php the_permalink(); ?>" title="View all posts by John Doe" rel="author">SHACCS  </a>
                                                </span>
                                            </div>
                                            <div class="for-border"></div>
                                            
                                        </div>
                                    </article>
                                    <a class="read-more" href="<?php the_permalink(); ?>">Read More</a>
                                </div>
								<?php

endwhile;
?>
                           
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php get_footer(); ?>