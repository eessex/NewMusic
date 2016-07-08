<?php get_header(); ?>



      <div class="container">

        <?php	if ( have_posts() ) : while ( have_posts() ) : the_post();
    			get_template_part( 'content-teaser', get_post_format() );
    		endwhile; endif; ?>

        <nav>
          <ul class="pager">
            <li><?php next_posts_link( 'Older posts' ); ?></li>
            <li><?php previous_posts_link( 'Newer posts' ); ?></li>
          </ul>
        </nav>

      </div>


<?php get_footer(); ?>
