<?php // Used to display a single Post

get_header();

echo "<!-- The Loop! -->\n";

if (have_posts()) : while (have_posts()) : the_post();
?>

			<div class="post" id="post-<?php the_ID(); ?>">
            	<!-- Post header: title, date, and other info -->
            	<div class="post-head" id="post-head-<?php the_ID(); ?>">
                	<div class="post-title" id="post-title-<?php the_ID(); ?>">
                    	<?php the_title(); ?>
                    </div>
                    <div class="post-info" id="post-info-<?php the_ID(); ?>">
                    	<span class="postDate"><a class="title" href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent link to this post"><?php echo get_the_date('d F Y'); ?></a></span><br />
                    </div>
				</div>
                <br clear="all">
                <!-- Post content -->
                <div class="post-content" id="post-content-<?php the_ID(); ?>">
                	<?php the_content('More... &raquo'); ?>
                    <a name="comments">&nbsp;</a>
                    <?php comments_template(); ?>
                    <div class="post-navigation">
                        <?php previous_post_link('&laquo; %link'); ?>
                        <?php next_post_link('&sect; %link &raquo;'); ?>
                    </div>
                </div>
			</div>
                

<? 	endwhile; 
	else: ?>
			<div class="post" id="post-404">
            	<div class="post-head" id="post-head-404">
                	<div class="post-title" id="post-title-404">
                    	<a href="<?php bloginfo('url'); ?>" class="title">No posts here</a>
                    </div>
                </div>
                <br clear="all">
                <div class="post-content" id="post-content-404">
                	<p>No matching posts were found.</p>
                </div>
            </div>
<? endif; ?>
			<!-- Post navigation -->
            
<?php get_footer(); ?>