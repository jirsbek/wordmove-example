<?php get_header(); ?>

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/public/css/main.min.css" media="screen">
<main class="main" role="main">

	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/public/css/container.min.css" media="screen">
	<div class="container">
		<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
				<?php the_content(); ?>
				<?php edit_post_link(__('Edit'), '<div class="text-right">', '</div>'); ?>
			<?php endwhile; ?>
		<?php endif; ?>
	</div>
</main>

<?php get_footer(); ?>
