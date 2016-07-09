<div class="sidebar">
  <div class="container">
    <div class="menu <?php if ( is_active_sidebar( 'sidebar' ) ) : ?>wigitized<?php endif; ?>">
    <nav class="main-nav">
       <!-- Primary navigation menu. -->
      <?php wp_nav_menu( array('theme_location' => 'primary') ); ?>
    </nav>

    <?php get_search_form(); ?>
    </div>
    <?php if ( is_active_sidebar( 'sidebar' ) ) : ?>
	    <div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
		    <?php dynamic_sidebar( 'sidebar' ); ?>
	    </div>
    <?php endif; ?>
  </div>
</div><!-- /. sidebar -->
