<!Doctype html>
<html <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
<title>

    <?php

	    $siteName  =  get_bloginfo('name');
	    $titleBlog =  get_the_title();
	    $blogName  =  get_field('blog_tab_name', 'option');

		     if(is_front_page() || is_home()){
		        	
		        echo $blogName. ''.$siteName;

		    } else{
		        
		    	echo $titleBlog. ' - '.$siteName;

    }?>
</title>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="https://cdn.iconmonstr.com/1.3.0/css/iconmonstr-iconic-font.min.css">
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">




<!-- UBACIVANJE FAVICONS na sajt -->
<?php $faviconicon = get_field( 'favicon','option'); ?>



<link rel="apple-touch-icon" sizes="180x180" href="<?php echo $faviconicon['sizes']['apple-touch-icon']; ?>">
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo $faviconicon['sizes']['favicon36']; ?>">
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo $faviconicon['sizes']['favicon16']; ?>">

<link rel="manifest" href="/site.webmanifest">
<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#ffffff">


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- AOS - ANIMATION ON SCROLL -->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>



	
	<?php wp_head(); ?>
</head>



<body <?php body_class(); ?>>

	<div class="body-wrap">
	<!-- BODY PAGE -->
		<header>

	<!-- LOGO -->			
		<div class="h-logo-cont">
		<?php $image = get_field('menu_logo','option');

			if( !empty($image) ): ?>

				<a href="<?php home_url(); ?>"><img class="text" src="<?php echo $image['sizes']['logo']; ?>" alt="<?php echo $image['alt']; ?>" /></a>

			<?php endif; ?>
		</div>
	<!-- END: LOGO -->

	<!-- NAVIGATION -->
		<?php $glavnanavigacija = array(
		    'theme_location'  => 'headermenu',
		    'menu'            => 'headermenu',
		    'container'       => 'nav',
		    'container_class' => 'menu-nav overlay',
		   	'container_id'	  => 'overlay',	
		);

		 wp_nav_menu( $glavnanavigacija ); ?>
	<!-- END: NAVIGATION -->

	<!-- RESPONSIVE -->

	<div class="hamburger-responsive-container" id="myHeader">
		<div class="container-hamburger" id="toggle" >
		  <div class="bar1"></div>
		  <div class="bar2"></div>
		  <div class="bar3"></div>
		</div>
	</div>

	<!-- END: RESPONSIVE -->

		</header>
		<main class="">
	