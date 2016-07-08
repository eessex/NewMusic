<article class="post single <?php if ( has_post_thumbnail() ) { echo 'with-image'; }; ?>">
	<?php if ( has_post_thumbnail() ) : ?>
		<div class="image">
			<?php the_post_thumbnail(); ?>
		</div>
	<?php endif; ?>
	<div class="content">
		<h2 class="post-title"><?php the_title(); ?></h2>
		<?php if ( !is_page() ) : ?>
			<h5 class="post-meta"><label>Posted</label> <?php the_date(); ?> by <a href="#"><?php the_author(); ?></a></h5>
		<?php endif; ?>
	  <?php the_content(); ?>
	</div>
</article>
