<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />

<meta name="viewport" content="width=device-width" />

<title><?php bloginfo('name'); ?> - <?php bloginfo('description'); ?></title>

<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_directory' ); ?>/styles/reset.css" />

<?php 
//Necessary in <head> for JS and plugins to work. 
//I like it before style.css loads so the master stylesheet is more specific than all others.
wp_head();  ?>

<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<!-- HTML5 shiv -->
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

</head>

<body <?php body_class(); ?>>
<div id="wrapper" class="clearfix"> 
	<header role="banner">
		<h1 class="site-name"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="AwesomeCo" rel="home"> 
			<?php bloginfo('name'); ?> 
		</a></h1>
		<h2 class="site-description"> <?php bloginfo('description'); ?> </h2>
		
		<?php get_search_form(); ?>
		
		<ul class="utilities">
		  <?php //check to see if the main nav area has a menu assigned to it 
			 if( has_nav_menu('utilities') ):
			 	wp_nav_menu( array(
					'theme_location' => 'utilities',
					'container' => false, //remove the div
					'items_wrap' => '%3$s' //see codex. remove ul, leave just li's
				) );
			 else:
			 	wp_list_pages('title_li=&include=2,146');
			 endif;
			  ?>
		</ul>
		
		<nav>
		  <ul>
			 <?php //check to see if the main nav area has a menu assigned to it 
			 if( has_nav_menu('main_menu') ):
			 	wp_nav_menu( array(
					'theme_location' => 'main_menu',
					'container' => false, //remove the div
					'items_wrap' => '%3$s' //see codex. remove ul, leave just li's
				) );
			 else:
			 	wp_list_pages('title_li=&exclude=2,146');
			 endif;
			  ?>
		  </ul>
		</nav>
	</header><!-- end header -->