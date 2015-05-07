<?php get_header(); ?>
<!-- Begin Flex Slider -->
<div id="cont">
<div id="content">
 <div class="flexslider">
<ul class="slides">
<li><img src="<?php bloginfo('template_directory'); ?>/images/m.jpg" width="940" height="300" alt="Image One"></li>
<li><img src="<?php bloginfo('template_directory'); ?>/images/strawberry.jpg" width="940" height="300" alt="Image Two"></li>
<li><img src="<?php bloginfo('template_directory'); ?>/images/sandwich.jpg" width="940" height="300" alt="Image Three"></li>
</ul>
</div>
</div>
</div>
<!-- End Flex Slider -->
<!-- Begin Text -->
<div id="wid">
<div id="widgets">
<section class="widget-item">
<h1><a href="<?php the_permalink(); ?>"><?php the_title(); //get the page or posting title ?></a></h1>
<?php the_content(''); //get page or posting written content ?>
<p>The page is not found</p>
<?php get_search_form(); ?>
<small>404.php</small>
</section>
</div>
</div>
<!-- End Text -->
<!-- Begin Sidebar -->
<!-- End Sidebar -->
<!-- Begin Footer -->
<?php get_footer(); ?>