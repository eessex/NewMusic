<div class="sidebar">
  <div class="container">
    <?php if ( is_active_sidebar( 'sidebar' ) ) : ?>
	    <div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
		    <?php dynamic_sidebar( 'sidebar' ); ?>
	    </div>
    <?php endif; ?>
    <div class="sidebar-module sidebar-module-inset">
  		<h4>About</h4>
  		<p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
  	</div>
  	<div class="sidebar-module">
  		<h4>Archives</h4>
  		<ol class="list-unstyled">
  			<?php wp_get_archives('type=monthly'); ?>
  		</ol>
  	</div>
  	<div class="sidebar-module">
  		<h4>Elsewhere</h4>
  		<ol class="list-unstyled">
  			<li><a href="https://github.com/eessex" target="_blank" >GitHub</a></li>
  			<li><a href="#">Twitter</a></li>
  			<li><a href="#">Facebook</a></li>
  		</ol>
  	</div>
  </div>
</div><!-- /. sidebar -->
