<?php /* Template Name: Blog */ ?>
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

<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter43761934 = new Ya.Metrika({
                    id:43761934,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/43761934" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

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
</head>

<?php if( !is_page(2) ) get_header(); ?> <!-- if page id is not 2, get_header() -->

<div class="blogContent">
<?php if( is_page(78) ) get_sidebar(); ?>

  <div id="primary" class="content-area postsContent">
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
</div><!-- .blogContent --> 

<?php get_footer(); ?>

<script src="<?php bloginfo("template_directory"); ?>/js/common.js"></script>


