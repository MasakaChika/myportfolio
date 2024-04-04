<div class="workcard">
	<a href="<?php the_permalink() ?>">
		<?php if (has_post_thumbnail()) : ?>
			<?php the_post_thumbnail('midium'); ?>
		<?php else : ?>
			<img src="<?= get_template_directory_uri(); ?>assets/img/noimage.png" alt="">
		<?php endif; ?>
	</a>
</div>