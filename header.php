<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="<?php echo get_bloginfo('charset'); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="alternate" href="<?php echo get_home_url(); ?>" hreflang="en-gb" />
		<link rel="shortcut icon" type="image/x-icon" href="<?php echo get_home_url(); ?>/favicon.ico">
		<link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,400;0,500;0,600;1,400;1,900&family=Bebas+Neue&display=swap" rel="stylesheet" />
		<link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.6.0/css/lightgallery.min.css" /> 
		<?php wp_head(); ?>
		<?php echo sixth_google_analytics('XXXXXXXXXX'); ?>
	</head>

	<body <?php body_class(); ?>>
	
		<header class="c-header js-header">
			<div class="o-large-container">
				<div class="row align-items-center">
					<div class="col-3">
						<a href="<?php echo get_home_url(); ?>">
							<?php echo get_inline_svg('logo.svg'); ?>
						</a>
					</div>
					<div class="col-9">
						<?php
							wp_nav_menu([
								'menu'              => 'Main Menu',
								'theme_location'    => 'Main Menu',
								'container_class' 	=> 'c-header-menu c-mobile-menu js-menu',
								'depth' 			=> 2,
								'walker' 			=> new SixthStory_Walker()
							]);
						?>
						<button class="c-mobile-menu__toggle js-menu-toggle">
							Close
							<i class="fal fa-times menu-open-icon"></i>
						</button>
						<button class="c-header__toggle js-menu-toggle">
							Menu
							<i class="fal fa-bars menu-closed-icon"></i>
						</button>
					</div>
				</div>
			</div>
		</header>