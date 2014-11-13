<div class="box">

<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('sidebar')) : else : ?>

	<div class="pre-widget">
		<p><strong>Widgetized Sidebar</strong></p>
		<p>This panel is active and ready for you to add some widgets via the WP Admin</p>
	</div>

<?php endif; ?>

<form>
  <fieldset>
    <legend>Schedule a Consultation</legend>
   	<?php echo do_shortcode('[contact-form-7 id="70" title="Contact"]');?>
  </fieldset>
</form>
</div>