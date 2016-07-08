<a class="post teaser ajaxified <?php if ( has_post_thumbnail() ) { echo 'with-image'; }; ?>" href="<?php the_permalink(); ?>">
	<article class="post teaser">
		<?php if ( has_post_thumbnail() ) : ?>
			<div class="image">
				<?php the_post_thumbnail(); ?>
			</div>
		<?php endif; ?>

		<div class="content">
			<h2 class="post-title"><?php the_title(); ?></h2>
			<h5 class="post-meta"><label>Posted</label> <?php the_date(); ?> by <?php the_author(); ?></h5>

		  <?php the_excerpt(); ?>
		</div>
	</article><!-- /.post .single-->
</a>
