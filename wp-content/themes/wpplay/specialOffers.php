<?php /* Template Name: specialOffers */ ?>

<head>
  <meta charset="utf-8">
  <meta name="format-detection" content="telephone=no" />
  <link rel="icon" href="<?php bloginfo("template_directory"); ?>/images/favicon.ico">
  <link rel="shortcut icon" href="<?php bloginfo("template_directory"); ?>/images/favicon.ico" />
  <link rel="stylesheet" href="<?php bloginfo("template_directory"); ?>/css/booking.css">
  <link rel="stylesheet" href="<?php bloginfo("template_directory"); ?>/css/camera.css">
  <link rel="stylesheet" href="<?php bloginfo("template_directory"); ?>/css/owl.carousel.css">
  <link rel="stylesheet" href="<?php bloginfo("template_directory"); ?>/css/style.css">
  <link rel="stylesheet" href="<?php bloginfo("template_directory"); ?>/css/ajax-form.css">
  <script src="<?php bloginfo("template_directory"); ?>/js/jquery.js"></script>
  <script src="<?php bloginfo("template_directory"); ?>/js/jquery-migrate-1.2.1.js"></script>
  <script src="<?php bloginfo("template_directory"); ?>/js/script.js"></script>
  <script src="<?php bloginfo("template_directory"); ?>/js/superfish.js"></script>
  <script src="<?php bloginfo("template_directory"); ?>/js/jquery.ui.totop.js"></script>
  <script src="<?php bloginfo("template_directory"); ?>/js/jquery.equalheights.js"></script>
  <script src="<?php bloginfo("template_directory"); ?>/js/jquery.mobilemenu.js"></script>
  <script src="<?php bloginfo("template_directory"); ?>/js/jquery.easing.1.3.js"></script>
  <script src="<?php bloginfo("template_directory"); ?>/js/owl.carousel.js"></script>
  <script src="<?php bloginfo("template_directory"); ?>/js/camera.js"></script>
  <!--[if (gt IE 9)|!(IE)]><!-->
  <script src="<?php bloginfo("template_directory"); ?>/js/jquery.mobile.customized.min.js"></script>
  <!--<![endif]-->
  <!-- <script src="<?php bloginfo("template_directory"); ?>/js/booking/js/booking.js"></script> -->
</head>

<?php get_header(); ?>

<div class="wrap">
  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

      <?php
      while ( have_posts() ) : the_post();
        the_content(); 
        get_template_part( 'template-parts/page/content', 'page' );
      endwhile; // End of the loop.
      ?>

    </main><!-- #main -->
  </div><!-- #primary -->
</div><!-- .wrap -->

<?php get_footer(); ?>


