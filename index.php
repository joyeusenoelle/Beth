<?php get_header(); ?>

<?php 
	if(have_posts()) {
		while (have_posts()) {
			the_post();
?>
<!-- POST DISPLAY LOGIC GOES HERE -->
<?php
		}
	}
?>

<?php get_footer(); ?>