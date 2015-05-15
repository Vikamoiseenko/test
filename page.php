<?php get_header(); ?>
<!-- Begin Text -->
<div id="wid">

    <div id="widgets">
<?php get_sidebar('right'); ?>
    
        <section class="content-item">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); //start the loop ?>
        <h1><?php the_title(); //get the page or posting title ?></h1>
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