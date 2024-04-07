<div class="post__pagination">
	<?php $prevpost = get_adjacent_post(false, '', true);
	if ($prevpost) : ?>
		<div class="post__pagination__prev">
			<a href="<?= get_permalink($prevpost->ID); ?>">
				<span class="post__pagination__prev-text pagenation-text"><?= esc_attr($prevpost->post_title); ?></span>
			</a>
		</div>
	<?php endif; ?>
	<?php $nextpost = get_adjacent_post(false, '', false);
	if ($nextpost) : ?>
		<div class="post__pagination__next">
			<a href="<?= get_permalink($nextpost->ID); ?>">
				<span class="post__pagination__next-text pagenation-text"><?= esc_attr($nextpost->post_title); ?></span>
			</a>
		</div>
	<?php endif; ?>
</div>