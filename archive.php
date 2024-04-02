<?php get_header(); ?>


<main>
	<?php get_template_part('template-parts/vertical-category', null, array(
		'vertical' => '作品集',
		'horizontal' => 'works'
	)); ?>

	<?php if (have_posts()) : ?>
		<!-- works -->
		<section class="archive-works">
			<header class="section-header archive-works__title">
				<?php the_archive_title('<h1 class="page-title"></h1>'); ?>
			</header>
			<?php get_template_part('template-parts/archive', 'works-search'); ?>

		</section>
		<!-- /.works -->

		<section class="archive-cards">
			<?php while (have_posts()) : ?>
				<?php the_post();
				get_template_part('excerpt') ?>
			<?php endwhile; ?>
			<div class="card">
				<div class="card__thumbnail"></div>
			</div>
			<div class="card">
				<div class="card__thumbnail"></div>
			</div>
			<div class="card">
				<div class="card__thumbnail"></div>
			</div>
			<div class="card">
				<div class="card__thumbnail"></div>
			</div>
			<div class="card">
				<div class="card__thumbnail"></div>
			</div>
			<div class="card">
				<div class="card__thumbnail"></div>
			</div>
			<div class="card">
				<div class="card__thumbnail"></div>
			</div>
			<div class="card">
				<div class="card__thumbnail"></div>
			</div>
			<div class="card">
				<div class="card__thumbnail"></div>
			</div>
			<div class="card">
				<div class="card__thumbnail"></div>
			</div>
			<div class="card">
				<div class="card__thumbnail"></div>
			</div>
			<div class="card">
				<div class="card__thumbnail"></div>
			</div>
		</section>
	<?php else : ?>
		投稿はありません
	<?php endif; ?>

	<div class="pagenation">
		<?php
		$args = array(
			'mid_size' => 1,
			'prev_text' => '&lt;&lt;前へ',
			'next_text' => '次へ&gt;&gt;',
			'screen_reader_text' => ' ',
		);
		the_posts_pagination($args);
		?>
	</div>
</main>



<?php get_footer(); ?>