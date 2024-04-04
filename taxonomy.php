<?php get_header(); ?>


<main>
	<?php get_template_part('template-parts/vertical-category', null, array(
		'vertical' => '作品集',
		'horizontal' => 'works'
	)); ?>

	<?php if (have_posts()) : ?>

		<section class="taxonomy-works">
			<header class="section-header taxonomy-works__title">
				<?php the_archive_title('<h1 class="page-title"></h1>'); ?>
			</header>
			<?php get_template_part('template-parts/archive', 'works-search'); ?>
		</section>
		<!-- loop -->
		<?php while (have_posts()) : ?>
			<section class="archive-cards">
				<?php the_post();
				get_template_part('content-post') ?>
			</section>
		<?php endwhile; ?>


	<?php else : ?>
		投稿はありません
	<?php endif; ?>

	<div class="pagenation">
		<?php get_template_part('template-parts/pagination'); ?>
	</div>
</main>



<?php get_footer(); ?>