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
<h1>About Us</h1>
<?php while( have_posts() ): the_post(); //start loop 1?>
<?php the_content(''); //get the home page content?>
<?php endwhile; //end loop 1?>
</section>
<section class="widget-item">
<h1>Our Coffee</h1>
<?php rewind_posts(); //stop loop 1?> 
<?php query_posts('showposts=4') //give directions to loop 2?>
<ul>
<?php while( have_posts() ) : the_post(); ?>
<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
<?php endwhile; //end loop 2?>
</ul>
</section>
<section class="widget-item">
<h1>Blog</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum </p>
<a href="blog.php">Our Blog</a>
</section>
</div>
</div>
<small>front-page.php</small>
</section>
</div>
</div>
<!-- End Text -->
<!-- Begin Sidebar -->
<!-- End Sidebar -->
<!-- Begin Footer -->
<?php get_footer(); ?>