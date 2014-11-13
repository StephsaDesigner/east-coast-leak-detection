<?php get_header(); ?>


	<!-- Main hero unit for a primary marketing message or call to action -->
      <div class="hero-unit">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					
         				<?php the_content(); ?>
        
						<?php endwhile; else: ?>
							<p><?php _e('Sorry, this page does not exist.'); ?></p>
						<?php endif; ?>
        <div class="clear"></div>
      </div>
      
      <div class="row">
       <div class="span4">
       <div class="circle" id="underground">
       <a href="index.php?page_id=8">
       <h2>Underground<br /> Water Leaks</h2>
       <img id="pipe" src="http://localhost:8888/eastcoast-leak-detection.dev/wp-content/uploads/2014/04/pipe-icon.png" alt="pipe leaking icon" class="alignnone size-full wp-image-79" /> 
        </a>      
       </div><!--For circle-->
       </div>
       <div class="span4">
       <div class="circle" id="aboveground">
       <a href="http://localhost:8888/eastcoast-leak-detection.dev/?p=10">
          <h2>Above Ground<br/> Water Leaks</h2>
          <img src="http://localhost:8888/eastcoast-leak-detection.dev/wp-content/uploads/2014/04/water_droplet_white.png" alt="water droplet icon" class="alignnone size-full wp-image-72" />
       </a>
       </div><!--For circle-->
       </div>
        <div class="span4">
          <div class="circle" id="electrical">
          <a href="http://localhost:8888/eastcoast-leak-detection.dev/?p=87">
          <h2>Underground<br /> Electrical Wire Breaks</h2>
          <img src="http://localhost:8888/eastcoast-leak-detection.dev/wp-content/uploads/2014/04/thunder-bolt.png" alt="thunder bold icon" class="alignnone size-full wp-image-77" />
           </a>
          </div>
        </div>
      </div>



<?php get_footer(); ?>