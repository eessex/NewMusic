<article class="post single">
	<div class="image">
		<?php if ( has_post_thumbnail() ) {
  		the_post_thumbnail();
		} ?>
	</div>
	<div class="content">
		<h2 class="post-title"><?php the_title(); ?></h2>
		<p class="post-meta"><label>Posted</label> <?php the_date(); ?> by <a href="#"><?php the_author(); ?></a></p>

	  <?php the_content(); ?>
	</div>
</article><!-- /.post .single-->
