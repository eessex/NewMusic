<?php get_header(); ?>

<div class="page home">
  <article class="page featured about">
    <?php $about = new WP_Query("page_id=6"); while($about->have_posts()) : $about->the_post();
      get_template_part( 'content-featured', get_post_format() );
      endwhile; ?>
    <?php wp_reset_query(); ?>
  </article>

  <article class="page featured fonts">
    <?php $fonts = new WP_Query("page_id=9"); while($fonts->have_posts()) : $fonts->the_post();
      get_template_part( 'content-featured', get_post_format() );
      endwhile; ?>
    <?php wp_reset_query(); ?>
  </article>

  <div class="container teasers">
    <h2 class="section-title">From the Blog</h2>
    <?php	if ( have_posts() ) : while ( have_posts() ) : the_post();
  		get_template_part( 'content-teaser', get_post_format() );
  	 endwhile; endif; ?>
  </div>
  </div>

  <?php if ( is_active_sidebar( 'footer' ) ) : ?>
    <div id="footer" class="widget-area" role="complementary">
      <?php dynamic_sidebar( 'footer' ); ?>
    </div>
  <?php endif; ?>
  
<?php get_footer(); ?>
