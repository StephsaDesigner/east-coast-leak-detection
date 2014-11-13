<hr>
	<div class="span10">
    <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('footer')) : else : ?>

	<div class="pre-widget">
    	<footer>
		<p><strong>Widgetized Footer</strong></p>
		<p>This panel is active and ready for you to add some widgets via the WP Admin</p>
        </footer>
	</div>

	<?php endif; ?>
    </div>
    
    <div class="span10">  
      <nav id="bottomNav">
      <ul>
		<?php wp_nav_menu( array( 'theme_location' => 'footer-menu' ) ); ?>
      </ul>
      </nav>
    </div>

    </div> <!-- /container -->

    <?php wp_footer(); ?>
  </body>
</html>