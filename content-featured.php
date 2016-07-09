	<div class="content <?php if ( has_post_thumbnail() ) { echo 'with-image'; }; ?>">
		<h2 class="post-title"><?php the_title(); ?></h2>
    <div class="body">
      <?php the_content(); ?>
    </div>
	</div>
