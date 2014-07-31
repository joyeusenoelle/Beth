<?php get_header(); ?>

<?php 
	get_posts();
	while (have_posts()) {
		the_post();
	}
?>

<?php get_footer(); ?>