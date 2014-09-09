<!DOCTYPE html5>
<?php
/**
 * Theme header
 *
 * Displays all of the <head> section and everything up till <div id="main"> and the is_front_page conditional
 *
 * @package WordPress
 * @subpackage Elizabeth_McCoy
 * @since Elizabeth McCoy 0.1
 */
?>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>
		<?php bloginfo("name"); wp_title('|', true, ''); ?>
	</title>
	<?php wp_enqueue_script('jquery'); ?>
    <?php $scripturl = get_bloginfo('template_url') . "/javascript/main.js";
 	wp_enqueue_script($scripturl); ?>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/style.css" />
	<?php wp_head(); ?>
</head>
<body>
	<div id="container">
		<div id="header">
			<?php wp_nav_menu(array('menu' => 'Header Menu', 'container_class' => 'header-nav-menu')); ?>
        </div>
        <div id="subcontainer">
            <div id="main">
            <?php if(is_front_page()) :?>
                <?php // Eyecatch/latest-book ad goes here ?>
            <?php endif; ?>