<?php get_header(); ?>
<!-- Begin Flex Slider -->
<div id="cont">
<div id="content">
</div>
</div>
<!-- End Flex Slider -->
<!-- Begin Text -->
<div id="wid">
<div id="widgets">
	<?php get_sidebar(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); //start the loop ?>
<?php echo get_the_post_thumbnail($post->ID, 'thumbnail',
array('class' => "blogimg")); ?>
<h2><a href="<?php the_permalink(); ?>"><?php the_title(); //get the page or posting title ?></a></h2>
<small>Posted on <?php the_time('F j, Y'); //get the time ?> by <?php the_author(); //get author name ?> in <?php the_category(','); //get the category?></small>
<p class="read-more"><a href="<?php the_permalink(); //link to the page or posting?>">Read more &raquo;</a></p>
<?php the_excerpt(); //get page or posting written content //change the_content on the_excerpt ?>
<?php endwhile; endif; //end the loop ?>
<small>index.php</small>
</div>
</div>
<!-- End Text -->
<!-- Begin Sidebar -->
<!-- End Sidebar -->
<!-- Begin Footer -->
<?php get_footer(); ?>