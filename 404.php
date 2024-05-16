<?php get_header(); ?>
<main>
	<section class="notfound">
		<div class="notfound__container">
			<header class="section-header notfound__title">
				404
				<span class="section-subheader">not found</span>
			</header>

			<div class="notfound__body">
				<p>ご指定のページが見つかりません</p>
				<div class="notfound__msg">
					<p>申し訳ございません。お探しのページが見つかりませんでした。</p>
					<p>削除されたか、入力されたURLに間違っている可能性があります。</p>
				</div>
			</div>
			<div class="notfound__btn">
				<a href="<?= home_url(); ?>" class="form-btn">home</a>
			</div>
		</div>
	</section>
</main>
<?php get_footer(); ?>