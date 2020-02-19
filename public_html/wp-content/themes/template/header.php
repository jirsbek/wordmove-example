<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, viewport-fit=cover">

	<title><?php bloginfo('name'); ?></title>

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/public/css/header.min.css" media="screen">
	<header class="header" role="banner">

		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/public/css/container.min.css" media="screen">
		<div class="container">

			<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/public/css/heading.min.css" media="screen">
			<h1 class="heading">
				Wordmove Example &nbsp;
				<?php if (substr($_SERVER['REMOTE_ADDR'], 0, 4) == '192.') : ?>
					💻
				<?php else : ?>
					🚀
				<?php endif; ?>
			</h1>
		</div>
	</header>
