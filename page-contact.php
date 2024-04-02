<?php get_header(); ?>
<main>
	<?php get_template_part('template-parts/vertical-category', null, array(
		'vertical' => 'お問い合わせ',
		'horizontal' => 'contact'
	)); ?>
</main>
<?php get_footer(); ?>