<a class="post teaser ajaxified col-1-3" href="<?php the_permalink(); ?>">
	<article class="post teaser <?php if ( has_post_thumbnail() ) { echo 'with-image'; }; ?>">
		<?php if ( has_post_thumbnail() ) : ?>
			<div class="image">
				<?php the_post_thumbnail(); ?>
			</div>
		<?php endif; ?>

		<div class="content">
			<h2 class="post-title"><?php the_title(); ?></h2>

			<?php if ( !has_post_thumbnail() ) : ?>
				<?php the_excerpt(); ?>
			<?php endif; ?>

			<?php if ( !is_page($post_id )  ) : ?>
				<h5 class="post-meta"><?php the_date(); ?></h5>
			<?php endif; ?>
		</div>
	</article>
</a>
