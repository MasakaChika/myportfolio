<?php get_header(); ?>

<main>
	<?php get_template_part('template-parts/vertical-category', null, array(
		'vertical' => '作品集',
		'horizontal' => 'works'
	)); ?>

	<section class="taxonomy-works">
		<header class="section-header taxonomy-works__title">
			<?php the_archive_title('<h1 class="page-title"></h1>'); ?>
		</header>
		<?php get_template_part('template-parts/archive', 'works-search'); ?>
	</section>

	<!-- loop -->
	<?php get_template_part('template-parts/archive', 'work-filtered') ?>

	<!-- pagenation -->
	<div class="pagenation">
		<?php get_template_part('template-parts/pagination', 'numbers'); ?>
	</div>
</main>

<?php get_footer(); ?>