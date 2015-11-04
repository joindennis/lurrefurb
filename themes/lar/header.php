<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage LAR
 * @since LAR 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=1200" /> 
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico" type="image/x-icon" />
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>

<link href='http://fonts.googleapis.com/css?family=Lato:400,300,700,900' rel='stylesheet' type='text/css'>




<!-- Add jQuery library -->
	 <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/lib/jquery-1.10.1.min.js"></script>  

  <!-- <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/baguetteBox.css"> -->
<style>

	/* IMAGE LIGHTBOX SELECTOR */

		#imagelightbox
		{
			cursor: pointer;
			position: fixed;
			z-index: 10000;

			-ms-touch-action: none;
			touch-action: none;

			-webkit-box-shadow: 0 0 3.125em rgba( 0, 0, 0, .75 ); /* 50 */
			box-shadow: 0 0 3.125em rgba( 0, 0, 0, .75 ); /* 50 */
		}


		/* ACTIVITY INDICATION */

		#imagelightbox-loading,
		#imagelightbox-loading div
		{
			border-radius: 50%;
		}
		#imagelightbox-loading
		{
			width: 2.5em; /* 40 */
			height: 2.5em; /* 40 */
			background-color: #444;
			background-color: rgba( 0, 0, 0, .5 );
			position: fixed;
			z-index: 10003;
			top: 50%;
			left: 50%;
			padding: 0.625em; /* 10 */
			margin: -1.25em 0 0 -1.25em; /* 20 */

			-webkit-box-shadow: 0 0 2.5em rgba( 0, 0, 0, .75 ); /* 40 */
			box-shadow: 0 0 2.5em rgba( 0, 0, 0, .75 ); /* 40 */
		}
			#imagelightbox-loading div
			{
				width: 1.25em; /* 20 */
				height: 1.25em; /* 20 */
				background-color: #fff;

				-webkit-animation: imagelightbox-loading .5s ease infinite;
				animation: imagelightbox-loading .5s ease infinite;
			}

			@-webkit-keyframes imagelightbox-loading
			{
				from { opacity: .5;	-webkit-transform: scale( .75 ); }
				50%	 { opacity: 1;	-webkit-transform: scale( 1 ); }
				to	 { opacity: .5;	-webkit-transform: scale( .75 ); }
			}
			@keyframes imagelightbox-loading
			{
				from { opacity: .5;	transform: scale( .75 ); }
				50%	 { opacity: 1;	transform: scale( 1 ); }
				to	 { opacity: .5;	transform: scale( .75 ); }
			}


		/* OVERLAY */

		#imagelightbox-overlay
		{
			background-color: #fff;
			background-color: rgba( 255, 255, 255, .9 );
			position: fixed;
			z-index: 9998;
			top: 0;
			right: 0;
			bottom: 0;
			left: 0;
		}


		/* "CLOSE" BUTTON */

		#imagelightbox-close
		{
			width: 2.5em; /* 40 */
			height: 2.5em; /* 40 */
			text-align: left;
			background-color: #666;
			border-radius: 50%;
			position: fixed;
			z-index: 10002;
			top: 2.5em; /* 40 */
			right: 2.5em; /* 40 */

			-webkit-transition: color .3s ease;
			transition: color .3s ease;
		}
			#imagelightbox-close:hover,
			#imagelightbox-close:focus
			{
				background-color: #111;
			}
			#imagelightbox-close:before,
			#imagelightbox-close:after
			{
				width: 2px;
				background-color: #fff;
				content: '';
				position: absolute;
				top: 20%;
				bottom: 20%;
				left: 50%;
				margin-left: -1px;
			}
			#imagelightbox-close:before
			{
				-webkit-transform: rotate( 45deg );
				-ms-transform: rotate( 45deg );
				transform: rotate( 45deg );
			}
			#imagelightbox-close:after
			{
				-webkit-transform: rotate( -45deg );
				-ms-transform: rotate( -45deg );
				transform: rotate( -45deg );
			}


		/* CAPTION */

		#imagelightbox-caption
		{
			text-align: center;
			color: #fff;
			background-color: #666;
			position: fixed;
			z-index: 10001;
			left: 0;
			right: 0;
			bottom: 0;
			padding: 0.625em; /* 10 */
		}


		/* NAVIGATION */

		#imagelightbox-nav
		{
			background-color: #444;
			background-color: rgba( 0, 0, 0, .5 );
			border-radius: 20px;
			position: fixed;
			z-index: 10001;
			left: 50%;
			bottom: 3.75em; /* 60 */
			padding: 0.313em; /* 5 */

			-webkit-transform: translateX( -50% );
			-ms-transform: translateX( -50% );
			transform: translateX( -50% );
		}
			#imagelightbox-nav button
			{
				width: 1em; /* 20 */
				height: 1em; /* 20 */
				background-color: transparent;
				border: 1px solid #fff;
				border-radius: 50%;
				display: inline-block;
				margin: 0 0.313em; /* 5 */
			}
			#imagelightbox-nav button.active
			{
				background-color: #fff;
			}


		/* ARROWS */

		.imagelightbox-arrow
		{
			width: 3.75em; /* 60 */
			height: 7.5em; /* 120 */
			background-color: #444;
			background-color: rgba( 0, 0, 0, .5 );
			vertical-align: middle;
			display: none;
			position: fixed;
			z-index: 10001;
			top: 50%;
			margin-top: -3.75em; /* 60 */
		}
		.imagelightbox-arrow:hover,
		.imagelightbox-arrow:focus
		{
			background-color: #666;
			background-color: rgba( 0, 0, 0, .75 );
		}
		.imagelightbox-arrow:active
		{
			background-color: #111;
		}
			.imagelightbox-arrow-left
			{
				left: 2.5em; /* 40 */
			}
			.imagelightbox-arrow-right
			{
				right: 2.5em; /* 40 */
			}
			.imagelightbox-arrow:before
			{
				width: 0;
				height: 0;
				border: 1em solid transparent;
				content: '';
				display: inline-block;
				margin-bottom: -0.125em; /* 2 */
			}
				.imagelightbox-arrow-left:before
				{
					border-left: none;
					border-right-color: #fff;
					margin-left: -0.313em; /* 5 */
				}
				.imagelightbox-arrow-right:before
				{
					border-right: none;
					border-left-color: #fff;
					margin-right: -0.313em; /* 5 */
				}

		#imagelightbox-loading,
		#imagelightbox-overlay,
		#imagelightbox-close,
		#imagelightbox-caption,
		#imagelightbox-nav,
		.imagelightbox-arrow
		{
			-webkit-animation: fade-in .25s linear;
			animation: fade-in .25s linear;
		}
			@-webkit-keyframes fade-in
			{
				from	{ opacity: 0; }
				to		{ opacity: 1; }
			}
			@keyframes fade-in
			{
				from	{ opacity: 0; }
				to		{ opacity: 1; }
			}

		@media only screen and (max-width: 41.250em) /* 660 */
		{
			#container
			{
				width: 100%;
			}
			#imagelightbox-close
			{
				top: 1.25em; /* 20 */
				right: 1.25em; /* 20 */
			}
			#imagelightbox-nav
			{
				bottom: 1.25em; /* 20 */
			}

			.imagelightbox-arrow
			{
				width: 2.5em; /* 40 */
				height: 3.75em; /* 60 */
				margin-top: -2.75em; /* 30 */
			}
			.imagelightbox-arrow-left
			{
				left: 1.25em; /* 20 */
			}
			.imagelightbox-arrow-right
			{
				right: 1.25em; /* 20 */
			}
		}

		@media only screen and (max-width: 20em) /* 320 */
		{
			.imagelightbox-arrow-left
			{
				left: 0;
			}
			.imagelightbox-arrow-right
			{
				right: 0;
			}
		}

	</style>
 <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-63557813-1', 'auto');
  ga('send', 'pageview');

</script>

</head>

<body>
	<div id="overlay_popup"
	
	style="
	width: 100%;
	height: 100%;
	z-index: 1100000;
	position: fixed;
	background-color: #000;
	opacity: 0.7;
	display: none;
	
	
	"
	
	
	></div>