<?php get_header(); ?>

<main>

	<?php get_template_part('template-parts/vertical-category', null, array(
		'vertical' => '作品集',
		'horizontal' => 'works'
	)); ?>

	<section class="archive-works">
		<header class="section-header archive-works__title">
			<?php the_archive_title('<h1 class="page-title"></h1>'); ?>
		</header>
		<?php get_template_part('template-parts/tag', 'selecter'); ?>
	</section>

	<!-- loop -->
	<?php get_template_part('template-parts/archive', 'work-filtered') ?>

	<!-- pagenation -->
	<nav class="pagination">
		<?php get_template_part('template-parts/pagination', 'numbers'); ?>
	</nav>
</main>

<?php get_footer(); ?>