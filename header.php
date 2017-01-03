<!DOCTYPE html>
<html <?php bloginfo('html_type'); ?>>
	<head>
		<title><?php
if(wp_title('', false)) { echo ''; }
wp_title('&nbsp;','&nbsp;','&nbsp;');
bloginfo('name'); ?><?php wp_title();
?></title>
		<meta charset="<?php bloginfo('charset'); ?>"> 
		<link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo('template_url') ?>/css/font.css" />
		<link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo('stylesheet_url') ?>" />

		<script type="text/javascript" language="javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.min.js"></script>
		<script type="text/javascript" language="javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.cycle.all.latest.js"></script>
		<script type="text/javascript">
			$(document).ready(function() {
				$('.slideshow').cycle({
				fx: 'fade',
				pause: 1,
				prev: '#prev',
				next: '#next'
				});
			});
		</script>
	</head>
	<body>
		<div id="all">
			<header class="header background">
        		<div id="menuheader">
        			<ul>
						<a href="<?php bloginfo('url'); ?>"><li class="menuheederhome">خانه</li></a>
						<a href="#"><li>آموزشگاه</li></a>
						<a href="#"><li>فروشگاه</li></a>
						<a href="#"><li>شارژ</li></a>
						<a href="#"><li>پشتیانی</li></a>
						<a href="#"><li>درباره ما</li></a>
        			</ul>
        		</div>
        		<div id="slideshowContainer">
				<div class="slideshow">
					<img src="<?php bloginfo('template_url'); ?>/image/1.jpg" alt="" width="600" height="300" />
					<img src="<?php bloginfo('template_url'); ?>/image/2.jpg" alt="" width="600" height="300" />
					<img src="<?php bloginfo('template_url'); ?>/image/3.jpg" alt="" width="600" height="300" />
					<img src="<?php bloginfo('template_url'); ?>/image/4.jpg" alt="" width="600" height="300" />
					<img src="<?php bloginfo('template_url'); ?>/image/5.jpg" alt="" width="600" height="300" />
					<img src="<?php bloginfo('template_url'); ?>/image/6.jpg" alt="" width="600" height="300" />
				</div>
				<ul id="nav">
					<li id="prev"><a href="#"></a></li>
					<li id="next"><a href="#"></a></li>
				</ul>
			</div>
        	</header>