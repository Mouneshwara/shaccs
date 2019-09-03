
<meta charset="utf-8" />
<meta name="MobileOptimized" content="320">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!-- <link href="<?=$baseurl;?>images/favicon.png" rel="icon">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/bxslider.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/responsive.css"> -->
 <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" type="image/x-icon"  />
    <!-- Pingback URL -->
    <link rel="pingback" href="xmlrpc.php" />
    <!-- RSS -->
     <!--  <script src="<?php echo get_template_directory_uri(); ?>/css/jquery.min.js"></script>  -->
    <link rel="alternate" type="application/rss+xml" title="" href="feed/index.html" />
    <link rel="alternate" type="application/atom+xml" title="" href="feed/atom/index.html" />
    <title><?php
        bloginfo('name');
        if (wp_title('', false)) {
            echo '|';
        } else {
            echo bloginfo('description');
        } wp_title('');
        ?></title>
    <link href="<?php echo get_template_directory_uri(); ?>/css/style.css" rel="stylesheet" />
    <link href="<?php echo get_template_directory_uri(); ?>/css/minu.css" rel="stylesheet" />
    <link rel='dns-prefetch' href='../fonts.googleapis.com/index.html' />
    <link rel='dns-prefetch' href='../s.w.org/index.html' />
    <link href="http://localhost:56547/<?php echo get_template_directory_uri(); ?>/css/style.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="stylesheet" id="google-droid-serif-css" href="http://fonts.googleapis.com/css?family=Droid+Serif%3A400%2C700%2C400italic%2C700italic&amp;ver=4.9.4" type="text/css" media="all">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="<?php echo get_template_directory_uri(); ?>/css/minu.css" rel="stylesheet" />
    <link rel="alternate" type="application/rss+xml" title=" &raquo; Feed" href="feed/index.html" />
    <link rel="alternate" type="application/rss+xml" title=" &raquo; Comments Feed" href="comments/feed/index.html" />
    <link rel="alternate" type="application/rss+xml" title=" &raquo; Home Comments Feed" href="home/feed/index.html" />
    <script type="text/javascript">
        window._wpemojiSettings = { "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/2.3\/72x72\/", "ext": ".png", "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/2.3\/svg\/", "svgExt": ".svg", "source": { "concatemoji": "http:\/\/medicalpress.inspirythemes.biz\/wp-includes\/js\/wp-emoji-release.min.js?ver=4.8.5" } };
        !function (a, b, c) { function d(a) { var b, c, d, e, f = String.fromCharCode; if (!k || !k.fillText) return !1; switch (k.clearRect(0, 0, j.width, j.height), k.textBaseline = "top", k.font = "600 32px Arial", a) { case "flag": return k.fillText(f(55356, 56826, 55356, 56819), 0, 0), b = j.toDataURL(), k.clearRect(0, 0, j.width, j.height), k.fillText(f(55356, 56826, 8203, 55356, 56819), 0, 0), c = j.toDataURL(), b !== c && (k.clearRect(0, 0, j.width, j.height), k.fillText(f(55356, 57332, 56128, 56423, 56128, 56418, 56128, 56421, 56128, 56430, 56128, 56423, 56128, 56447), 0, 0), b = j.toDataURL(), k.clearRect(0, 0, j.width, j.height), k.fillText(f(55356, 57332, 8203, 56128, 56423, 8203, 56128, 56418, 8203, 56128, 56421, 8203, 56128, 56430, 8203, 56128, 56423, 8203, 56128, 56447), 0, 0), c = j.toDataURL(), b !== c); case "emoji4": return k.fillText(f(55358, 56794, 8205, 9794, 65039), 0, 0), d = j.toDataURL(), k.clearRect(0, 0, j.width, j.height), k.fillText(f(55358, 56794, 8203, 9794, 65039), 0, 0), e = j.toDataURL(), d !== e } return !1 } function e(a) { var c = b.createElement("script"); c.src = a, c.defer = c.type = "text/javascript", b.getElementsByTagName("head")[0].appendChild(c) } var f, g, h, i, j = b.createElement("canvas"), k = j.getContext && j.getContext("2d"); for (i = Array("flag", "emoji4"), c.supports = { everything: !0, everythingExceptFlag: !0 }, h = 0; h < i.length; h++) c.supports[i[h]] = d(i[h]), c.supports.everything = c.supports.everything && c.supports[i[h]], "flag" !== i[h] && (c.supports.everythingExceptFlag = c.supports.everythingExceptFlag && c.supports[i[h]]); c.supports.everythingExceptFlag = c.supports.everythingExceptFlag && !c.supports.flag, c.DOMReady = !1, c.readyCallback = function () { c.DOMReady = !0 }, c.supports.everything || (g = function () { c.readyCallback() }, b.addEventListener ? (b.addEventListener("DOMContentLoaded", g, !1), a.addEventListener("load", g, !1)) : (a.attachEvent("onload", g), b.attachEvent("onreadystatechange", function () { "complete" === b.readyState && c.readyCallback() })), f = c.source || {}, f.concatemoji ? e(f.concatemoji) : f.wpemoji && f.twemoji && (e(f.twemoji), e(f.wpemoji))) }(window, document, window._wpemojiSettings);
    </script>
    <style type="text/css">
/*    ul li {*/
/*    list-style: square;*/
/*}*/
.single-feature ul li {
    list-style: square;
}

.home-testimonial blockquote p {
    font-family: 'Droid Serif', serif;
    font-style: italic;
    font-size: 20px !important;
    line-height: 32px;
    font-weight: 400;
    color: #6a7177;
}
.home-testimonial .testimonial-footer h3 {
    margin: 0 0 10px;
    
    font-weight: 700 !important;
    font-size: 24px;
}
.pain li {
    list-style-type: none !important;
}
    #main-footer {
    margin-bottom: 0px !important;
}
    article.two-col-service.service.type-service.status-publish.has-post-thumbnail.hentry {
    height: 610px !important;
    border-bottom: 1px solid #000 !important;
}
article.hentry {
    line-height: 24px;
    font-size: 14px;
}
.two-col-service {
    background-color: #fff;
    margin-bottom: 30px;
}
    #header {
    padding: 15px 0 !important; 
    background: #fff;
}
.header-top {
    background-color: #60646d;
    padding: 5px 0 !important;
}
    .home-features .single-feature h3 {
    margin: 0 0 15px;
    font-size: 22px;
    font-family: 'Oswald', sans-serif;
    font-weight: bold !important;
    color: #524f4f;
}
    p {
    font-size: 14px !important;
    font-weight: 400 !important;
    margin: 0;
    font-family: 'Raleway', sans-serif !important;
    line-height: 24px !important;
}
h1, h2, h3, h4, h5, h6 {
    color: #3a3c41;
    font-family: 'Raleway', sans-serif !important;
}








    .nav > li > a:hover, .nav > li > a:focus {
    text-decoration: none;
    background-color: none !important;
}
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 .07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
        .bread-crumb {
    padding: 0;
    font-size: 14px;
    font-weight: 400;
    margin-top: 0px !important;
}
.faq-page {
    padding: 26px 0;
}
.post_square a:hover {
    background: none !important;
}
.doctors-posts .common-doctor p {
    margin-bottom: 9px !important;
}
li.flex-active-slide {
    margin-top: 0px !important;
}
    </style>
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/cache/wpfc-minified/7b0e14603013e01c80126810e9034ad4/1507873310index.css" media="all" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/cache/wpfc-minified/186ef885d2d4b7dae1a130092e46921b/1507873310index.css" media="all" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/cache/wpfc-minified/767deadd3cdd79e98a9a33d0cf296f81/1507873310index.css" media="only screen and (max-width: 768px)" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/cache/wpfc-minified/2677dcb331770610d5534bb12a7bda16/1507873310index.css" media="all" />
    <link rel='stylesheet' id='google-raleway-css' href='../fonts.googleapis.com/css7571.css?family=Raleway%3A400%2C100%2C200%2C300%2C500%2C600%2C700%2C800%2C900&amp;ver=4.8.5' type='text/css' media='all' />
    <link rel='stylesheet' id='google-droid-serif-css' href='../fonts.googleapis.com/css23d0.css?family=Droid+Serif%3A400%2C700%2C400italic%2C700italic&amp;ver=4.8.5' type='text/css' media='all' />
   
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/cache/wpfc-minified/16fc2a0ec4aae7ab9d89734d0304d6ee/1507873310index.css" media="all" />
    <script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/js/jquery/jqueryb8ff.js?ver=1.12.4'></script>
    <script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/js/jquery/jquery-migrate.min330a.js?ver=1.4.1'></script>
    <script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/plugins/revslider/public/assets/js/jquery.themepunch.tools.mind6ea.js?ver=5.0.9'></script>
    <script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/plugins/revslider/public/assets/js/jquery.themepunch.revolution.mind6ea.js?ver=5.0.9'></script>
    <link rel='https://api.w.org/' href='wp-json/index.html' />
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc0db0.php?rsd" />
    <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="<?php echo get_template_directory_uri(); ?>/wlwmanifest.xml" />
<?php wp_head(); ?>
<script>
    //Google Analytics
</script>
<?php

$custom_logo_id = get_theme_mod( 'custom_logo' );
$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
$custom_logo_id1 = get_theme_mod( 'm1_logo' );
$image1 = wp_get_attachment_image_src( $custom_logo_id1 , 'full' );
// $image[0];
 ?>
  <body data-spy="scroll" data-target="#navigation_bar">

        <div id="navigation_bar">
            <div class="container">
                <div class="inner_container" style="width:108%">
                    <div class="row">
                        <div class="col-md-5">
                            <ul class="nav">

                                <li class="post_square">
                                    <a href="">
                                        <img src="<?php echo get_theme_mod( 'm1_logo' ); ?>" />

                                    </a>
                                </li>



                            </ul>
                        </div>
                        <div class="col-md-7">
                            <div class="main-02" href="">
                                <p>
                                    <header-01>
                                        <nav-01>
                                            <input type="checkbox" id="css-toggle-menu" name="css-toggle-menu">
                                           <?php
									wp_nav_menu( array(
										'theme_location' => 'primary',
										'menu_class'     => '',
										'container'      =>  'ul',
										'depth'          => 1,
										
									) );
								?>
                                            <label for="css-toggle-menu" id="css-toggle-menu"></label>
                                        </nav-01>
                                    </header-01>
                                </p>
                            </div>
                        </div>
                    </div>
                    
                    
                    <div id="menu_icon">
                        <a href="#posts_index_anchor" title="Return to Index">
 <div class="logomain" style="text-align: center;">
<a href="<?php echo site_url(); ?>"><img src="<?php echo get_theme_mod( 'm1_logo' ); ?>"
 style=" width: 110px;  margin-top:-26px;"></a>
  
   

                     
                        </div>

                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div id="introduction">
            <div class="outer_container">
                <div class="inner_container">
                    <div class="header-top clearfix">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-5 col-md-5 ">

                                </div>
                                <div class="col-lg-7 col-md-7  text-right">
                                    <p>
                            Email : <span><?php echo get_theme_mod( 'themeslug_text_setting_id' ); ?></span><br class="visible-xs">&nbsp;&nbsp;Contact : <span><?php echo get_theme_mod( 'themeslug_text_setting_id1' ); ?></span>                        </p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        


        <div>

            <header id="header">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <!-- Website Logo -->
                            <div class="logo clearfix">
                                <a href="<?php echo site_url(); ?>">
                                    <img src="<?php echo $image[0]; ?>"
                                         alt="" />
                                </a>
                            </div>
                            <!-- Main Navigation -->
                            <nav class="main-menu">
                               
                                <?php
									wp_nav_menu( array(
										'theme_location' => 'primary',
										'menu_class'     => 'header-nav clearfix',
										'container'      =>  'ul',
										'depth'          => 1,
										
									) );
								?>
                            </nav>
                            <div id="responsive-menu-container"></div>
                        </div>
                    </div>
                </div>
            </header>