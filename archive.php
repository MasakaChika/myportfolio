<?php get_header(); ?>


<main>
	<!-- vertical category -->
	<div class="vertical-category">
		<div class="vertical-category__inner">
			<span class="vertical-category__vertical">作品集</span>
			<span class="vertical-category__cross"></span>
			<span class="vertical-category__horizontal">works</span>
		</div>
	</div>
	<!-- /.vertical category -->
	<?php if (have_posts()): ?>
	<!-- works -->
	<section class="archive-works">
		<header class="section-header archive-works__title">
			<?php the_archive_title('<h1 class="page-title"></h1>'); ?>
		works</header>,
		<div class="archive-works__search">
			<span>search</span>
			<hr />
			<ul>
				<li class="works__seach-tag"><a href="#">Design</a></li>
				<li class="works__seach-tag"><a href="#">Coding</a></li>
				<li class="works__seach-tag"><a href="#">Logo</a></li>
				<li class="works__seach-tag"><a href="#">Banner</a></li>
				<li class="works__seach-tag"><a href="#">Icon</a></li>
				<li class="works__seach-tag"><a href="#">JavaScript</a></li>
				<li class="works__seach-tag"><a href="#">WordPress</a></li>
				<li class="works__seach-tag"><a href="#">Illustrator</a></li>
				<li class="works__seach-tag"><a href="#">Photoshop</a></li>
				<li class="works__seach-tag"><a href="#">Figma</a></li>
				<li class="works__seach-tag"><a href="#">STUDIO</a></li>
			</ul>
		</div>
	</section>
	<!-- /.works -->


	<section class="archive-cards">
	<?php while (have_posts()): ?>
		<?php the_post();
		get_template_part('excerpt') ?>
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