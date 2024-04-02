<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>></article>

<figure class="post-thumbnail">
	<!-- permalinkアイキャッチ出力 -->
	<a class="post-thumbnail-inner alignwide" href="<?php the_permalink(); ?>
<?php the_post_thumbnail() ?>
</a>
</figure>
<!-- .posit-thumbnail -->