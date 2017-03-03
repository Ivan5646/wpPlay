<head>
  <meta charset="utf-8">
  <meta name="format-detection" content="telephone=no" />
  <link rel="icon" href="images/favicon.ico">
  <link rel="shortcut icon" href="images/favicon.ico" />
  <link rel="stylesheet" href="<?php bloginfo("template_directory"); ?>/css/booking.css">
  <link rel="stylesheet" href="<?php bloginfo("template_directory"); ?>/css/camera.css">
  <link rel="stylesheet" href="<?php bloginfo("template_directory"); ?>/css/owl.carousel.css">
  <link rel="stylesheet" href="<?php bloginfo("template_directory"); ?>/css/style.css">
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
  <script src="js/jquery.mobile.customized.min.js"></script>
  <!--<![endif]-->
  <script src="booking/js/booking.js"></script>
  <script>
    $(document).ready(function(){
    jQuery('#camera_wrap').camera({
      loader: false,
      pagination: false ,
      minHeight: '444',
      thumbnails: false,
      height: '48.375%',
      caption: true,
      navigation: true,
      fx: 'mosaic'
    });
    /*carousel*/
    var owl=$("#owl");
      owl.owlCarousel({
      items : 2, //10 items above 1000px browser width
      itemsDesktop : [995,2], //5 items between 1000px and 901px
      itemsDesktopSmall : [767, 2], // betweem 900px and 601px
      itemsTablet: [700, 2], //2 items between 600 and 0
      itemsMobile : [479, 1], // itemsMobile disabled - inherit from itemsTablet option
      navigation : true,
      pagination : false
      });
    $().UItoTop({ easingType: 'easeOutQuart' });
    });
  </script>
  <!--[if lt IE 8]>
  <div style=' clear: both; text-align:center; position: relative;'>
    <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
      <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
    </a>
  </div>
  <![endif]-->
  <!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
  <link rel="stylesheet" media="screen" href="css/ie.css">
  <![endif]-->
</head>

<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package myWp
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
