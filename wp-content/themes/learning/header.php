<!DOCTYPE html>

<html <?php language_attributes(); ?>>
	<head charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width" />
		<title> <?php bloginfo('name'); ?></title>
		<?php wp_head(); ?>
	</head>

<body <?php body_class(); ?>>

	<div class="container">

		<!-- Site header -->
		<header class="site-header">
			<h1> <a href="<?php echo home_url(); ?>"> <?php bloginfo('name'); ?> </h1>
			<h5> <?php bloginfo('description'); ?> </h5>
		</header>
		
		<nav class="site-nav">
			<?php 
			
			$args = array( 'theme_location' => 'primary');
			wp_nav_menu($args); 
			
			?>
		</nav>
