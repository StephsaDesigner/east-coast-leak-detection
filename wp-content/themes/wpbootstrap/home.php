<?php get_header(); ?>

<div class="row">
	<div class="span8">
    	<div class="box">
    	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<p><em><?php the_time('l, F jS, Y'); ?></em></p>	
		<?php the_content(); ?>

		<?php endwhile; else: ?>
			<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
		<?php endif; ?>
        </div>
	</div>
    
    <div class="span4">
    	<?php get_sidebar(); ?>
    </div>  
</div>

<?php get_footer(); ?>