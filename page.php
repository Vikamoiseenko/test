<?php get_header(); ?>
<!-- Begin Text -->
<div id="wid">

    <div id="widgets">
    
    <?php
    if ($post->post_parent) { // if the page has a parent...
    	get_sidebar('right');
    } else if (get_pages('child_of='.$post->ID)){
		get_sidebar('right');
		}
	else { // if the page does not have a parent...
	}
    ?>
        <section class="content-item">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); //start the loop ?>
       <!-- <h2><?php the_title(); //get the page or posting title ?></h2> -->
        <?php the_content(''); //get page or posting written content ?>
        <?php endwhile; endif; //end the loop ?>
        <small>page.php</small>
        </section>
    
    </div>
    
</div>
<!-- End Text -->
<!-- Begin Sidebar -->
<!-- End Sidebar -->
<!-- Begin Footer -->
<?php get_footer(); ?>