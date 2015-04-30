<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title><?php bloginfo('description'); ?> | <?php bloginfo('name'); ?></title>
<!-- Begin meta -->
 <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0" />
<!-- Remy Sharp Shim --> 
<!--[if lt IE 9]>
<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script> 
<![endif]-->
<!-- Stylesheet goes here -->

<!-- Mike Was Here (poop) -->


<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" type="text/css" />
<link href="<?php bloginfo('template_directory'); ?>/css/flexslider.css" rel="stylesheet" type="text/css" />
<!-- End Styles -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.flexslider.js"></script>
<!-- Begin Flex Slider -->
<script type="text/javascript">
$(window).load(function() { // enable function upon window load
$(".flexslider").flexslider(); // call flexslider function
});
</script>
<!-- End Flex Slider -->
<!-- Begin Toggle Menu -->
<script>
$(window).load(function() {// enable function upon window load
	$("#toggle").click(function () {// when toggle is clicked...
		$(".main").toggle();// ... open or close the navigation
	});
});
</script>
<!-- End Toggle Menu -->

<!-- Start WP Head -->
<?php wp_head(); ?>
<!-- End WP Head -->
</head>
<body <?php body_class(); ?>>
<!-- Begin Header -->
<div id="mike">
<header id="header">
<div id="logo">
<!-- Begin Header -->
<a href="../wordpress/"><img src="<?php bloginfo('template_directory'); ?>/images/cafeK.png" alt="Cafe Kopi"/></a>
<img id="toggle" src="<?php bloginfo('template_directory'); ?>/images/img-toggle.png" width="25" height="25"	alt="Toggle Menu">
</div>
<!-- End Header -->
<!-- Begin Navigation -->
<div class="navigationitems">
<nav id="mainnav" class="main">
<ul>
<li class="current"><a href="index.html">Home</a></li>
<li ><a href="about.php">About Us</a></li>
<li ><a href="menu.html">Menu</a>
<ul>
<li ><a href="breakfast.html">Breakfast</a></li>
<li ><a href="#">Sandwiches</a></li>
<li ><a href="#">Rice Bowl</a></li>
<li ><a href="#">Cofee</a></li>
<li ><a href="#">Fresh Juices</a></li>
<li ><a href="#">Pastries and cookies</a></li>
<li ><a href="#">Special of the day!</a></li>
</ul>
</li>
<li ><a href="#">Blog</a></li>
<li ><a href="contact.php">Contact Us</a></li>
</ul>
</nav>
</div>
<!-- End Navigation -->
<!-- Begin Content -->
</header>
</div>
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
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); //start the loop ?>
<h1><a href="<?php the_permalink(); ?>"><?php the_title(); //get the page or posting title ?></a></h1>
<?php the_content(''); //get page or posting written content ?>
<?php endwhile; endif; //end the loop ?>
</section>
</div>
</div>
<!-- End Text -->
<!-- Begin Sidebar -->
<!-- End Sidebar -->

<!-- Begin Footer -->
<div id="footer">
<footer id="foot">
<div id="footer_content">
<ul>
<li class="footer_title">Cafe Info</li>
<li>8056 Lake City Way NE</li>
<li>Seattle, WA, 98115 </li>
<li>(206) 523 - 6197</li>
<li><a href="#">cafekopi@gmail.com</a></li>
</ul>

<ul>
<li class="footer_title">Hours</li>
<li>Tuesday - Friday: <br />
7:00am - 5:00pm</li>
<li>Saturday - Sunday: <br />
8:00am - 3:00pm</li>
</ul>

<ul id="follow_us">
<li class="footer_title">Follow Us</li>
<li id="facebook"><a href="https://www.facebook.com/pages/Cafe-Kopi/870754269622769?ref=br_tf"><img src="images/Facebook-256.png" alt="Follow Us On Facebook" title="Facebook" /></a></li>
<li id="instagram"><a href="https://instagram.com/cafekopi_2014"><img src="images/Instagram.png" alt="Follow Us On Instagram" title="Instagram" /></a></li>
<li id="yelp"><a href="http://www.yelp.com/biz/caf%C3%A9-kopi-seattle-3"><img src="images/Yelp.png" alt="Follow Us On Yelp" title="Yelp" /></a></li>
</ul>

<ul class="footer_title">
<li class="footer_title">Inside Our Site</li>
<li><a href="index.html">Home</a></li>
<li><a href="about.php">About Us</a></li>
<li><a href="menu.html">Menu</a></li>
<li><a href="blog.php">Blog</a></li>
<li><a href="contact.php">Contact Us</a></li>
</ul>
        
<div class="clear">&nbsp;</div>
</div> <!--closed footer_content -->
<ul>
<li class="footer_title">&copy;2015 Cafe Kopi. All rights reserved.</li>
<li class="footer_title"> <a href="http://jigsaw.w3.org/css-validator/check/referer">Valid CSS</a> and <a href="http://validator.w3.org/check/referer">Valid HTML5</a></li>
</ul>
<!-- End Footer -->
</footer>
</div>
<!-- Start WP footer -->
<?php wp_footer(); ?>
<!-- Start WP footer -->

</body>
</html>
