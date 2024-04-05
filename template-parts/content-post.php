<?php if (have_posts()) : ?>
	<ul class="works__archive">
		<?php while (have_posts()) : the_post(); ?>
			<li>
				<div class="works__archive-card">
					<a href="<?php the_permalink(); ?>">
						<?php if (has_post_thumbnail()) : ?>
							<?php the_post_thumbnail('medium'); ?>
						<?php else : ?>
							<img src="<?= get_template_directory_uri(); ?>/assets/img/noimage.png" alt="">
						<?php endif; ?>
					</a>
				</div>
			</li>
		<?php endwhile; ?>
	</ul>

	<?php the_posts_navigation(); ?>
<?php else : ?>
	<p>投稿が見つかりませんでした。</p>
<?php endif; ?>