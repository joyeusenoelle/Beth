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
	<?php wp_head(); ?>
	<!-- script language="javascript" src="<?php bloginfo('template_url'); ?>/scripts/main.js"> </script -->
	<script language="javascript" src="<?php bloginfo('template_url'); ?>/scripts/bootstrap.min.js"></script>
    <script language="javascript" src="<?php bloginfo('template_url'); ?>/scripts/custom.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/styles/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/style.css" />
</head>
<body>
	<div id="main" class="container">
		<div id="header" class="row">
			<div class="jumbotron jumbotron-sm">
				<center>
                	<img src="<?php echo bloginfo('template_url');?>/header.png" id="headerimg" />
					<!-- h1><?php bloginfo('name'); ?></h1 -->
				</center>
			</div>
			<div class="col-xs-12">
				<?php wp_nav_menu(array('menu' => 'Header Menu', 'menu_class' => 'nav nav-pills nav-justified')); ?>
			</div>
        </div>
            <?php if(is_front_page()) :?>
		<div id="featuredCarousel" class="carousel slide" data-ride="carousel">
			<!-- indicators -->
			<ol class="carousel-indicators">
				<li data-target="#featuredCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#featuredCarousel" data-slide-to="1"></li>
				<li data-target="#featuredCarousel" data-slide-to="3"></li>
				<li data-target="#featuredCarousel" data-slide-to="3"></li>
			</ol>
			<!-- items -->
			<!-- these should be pulled from a menu in the dashboard but for now, static -->
			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<img src="<?php echo home_url(); ?>/wp-content/uploads/testimage01.jpg" />
				</div>
				<div class="item">
					<img src="<?php echo home_url(); ?>/wp-content/uploads/testimage02.jpg" />
				</div>
				<div class="item">
					<img src="<?php echo home_url(); ?>/wp-content/uploads/testimage03.jpg" />
				</div>
				<div class="item">
					Item 3
				</div>
			</div>
			<!-- controls -->
			<a class="left carousel-control" href="#featuredCarousel" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#featuredCarousel" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
			
		</div>
        <?php endif; ?>

        <div id="subcontainer" class="row">
