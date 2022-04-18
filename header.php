<!DOCTYPE html>
<html <?php language_attributes(); ?>> 
<head>

    <!-- Basic Page Needs
  ================================================== -->
	<meta charset="<?php bloginfo('charset'); ?>">
	<title>zBoomMusic Free Html5 Responsive Template</title>
	<meta name="description" content="Free Html5 Templates and Free Responsive Themes Designed by Kimmy | zerotheme.com">
	<meta name="author" content="www.zerotheme.com">
	
    <!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
	<link href='<?php echo esc_url( get_template_directory_uri() ) ?> /assets/images/favicon.ico' rel='icon' type='image/x-icon'/>

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<!--------------Header--------------->
<header>
	<div class="wrap-header zerogrid">
		<div id="logo"><a href="<?php esc_url(bloginfo('home')) ?>"><img src="<?php echo esc_url( get_template_directory_uri() ) ?> /assets/images/logo.png"/></a></div>
		
		<div id="search">
			<form action="<?php esc_url(bloginfo('home')) ?>" method="get">
				<div class="button-search"></div>
				<input name="s" type="text" value="Search..." onfocus="if (this.value == &#39;Search...&#39;) {this.value = &#39;&#39;;}" onblur="if (this.value == &#39;&#39;) {this.value = &#39;Search...&#39;;}">
			</form>
		</div>


	</div>
</header>

<nav>
	<div class="wrap-nav zerogrid">
		<div class="menu">
			<?php
				if (function_exists('wp_nav_menu')) {
					// Header Menu 
					wp_nav_menu( array(
						'theme_location'		=>	'primary-menu',
					) );
				}
			
			?>
			<!-- <ul>
				<li class="current"><a href="index.html">Home</a></li>
				<li><a href="blog.html">Blog</a></li>
				<li><a href="gallery.html">Gallery</a></li>
				<li><a href="single.html">About</a></li>
				<li><a href="contact.html">Contact</a></li>
			</ul> -->
		</div>
		
		<div class="minimenu"><div>MENU</div>
			<select onchange="location=this.value">
				<option></option>
				<option value="index.html">Home</option>
				<option value="blog.html">Blog</option>
				<option value="gallery.html">Gallery</option>
				<option value="single.html">About</option>
				<option value="contact.html">Contact</option>
			</select>
		</div>		
	</div>
</nav>