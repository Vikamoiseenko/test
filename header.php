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
<!-- 
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
</nav>-->
<!-- End Navigation -->

<!-- Begin new Navigation -->
<?php wp_nav_menu(
array(
'theme_location' => 'main-menu',
'container' => 'nav',
'container_class' => 'main',
'container_id' => 'mainnav'
)
); 
?>
</div> 

<!-- End new Navigation -->

<!-- Begin Content -->
</header>
</div>