<?php get_header(); ?>
<main>
	<?php
	// カスタムフィールド 'vertical-jp' の値を取得します。
	// get_the_ID() は現在のページまたは投稿の ID を返します。
	$vertical_value = get_post_meta(get_the_ID(), 'vertical-jp', true);

	// 現在のページのタイトルを取得し、大文字に変換します。
	$page_title_uppercase = strtoupper(get_the_title());

	get_template_part('template-parts/vertical-category', null, array(
		'vertical' => $vertical_value, // カスタムフィールドの値
		'horizontal' => $page_title_uppercase, // 大文字に変換したページタイトル
	));
	?>

	<!-- about -->
	<section class="page-about">

		<div class="page-about__main">
			<h2 class="section-header page-about__title">about</h2>
			<div class="page-about__photo">
				<img src=<?= get_theme_file_uri('/assets/img/about-photo.webp'); ?> alt="PCを持っている眞坂ちかの手元が写っている写真" />
			</div>
		</div>

		<div class="page-about__info">
			<div class="page-about__content">
				<span class="page-about__content-label">Initiation</span>
				<h3 class="page-about__content-title">歯科衛生士からWebデザイナーへ</h3>
				<p class="page-about__content-text common__desc">長きにわたり、歯科衛生士として患者さんの健康をサポートしてまいりました。情報をお伝えする中で、さまざまな課題に直面しましたが、言葉だけではなく視覚的な手段がいかに重要かを学びました。<br>説明用リーフレットや院内ポスターを作成し、患者さんの理解を得ることができた時の喜びは、次第にデザイナーを目指すきっかけをもたらしました。</p>
			</div>
			<hr>
			<div class="page-about__content">
				<span class="page-about__content-label">Concept</span>
				<h3 class="page-about__content-title">使いやすさと理解しやすさを追求</h3>
				<p class="page-about__content-text common__desc">私は、見た目がシンプルでありながら深みのあるデザインを大切にしています。使いやすさを追求し、形やレイアウトにもこだわっています。<br>サイトを訪れた方が必要な情報を簡単に理解できるように工夫することを目指しています。</p>
			</div>
			<hr>
			<div class="page-about__content">
				<span class="page-about__content-label">Goals</span>
				<h3 class="page-about__content-title">誰でも情報にアクセスできるWebサイト</h3>
				<p class="page-about__content-text common__desc">ほとんど全ての人がWebサイトを訪れた際に、必要な情報に簡単にたどり着けるようなサイトを目指しています。<br>今後の取り組みとして、アクセシビリティにも対応したサイト制作に力を入れていきます。<br>これにより、より多くの人々が快適に利用できるWebサイトを提供したいと考えています。</p>
			</div>
		</div>
	</section>

	<section class="skills">
		<header class="section-subheader page-about__title">skills</header>
		<ul>
			<li class="skills__item">
				<div class="skills__icon"><img src="<?= get_theme_file_uri('/assets/img/html.png'); ?>" alt="html5 icon"></div><span>HTML</span>
			</li>
			<li class="skills__item">
				<div class="skills__icon"><img src="<?= get_theme_file_uri('/assets/img/css.png'); ?>" alt="css3 icon"></div><span>CSS</span>
			</li>
			<li class="skills__item">
				<div class="skills__icon"><img src="<?= get_theme_file_uri('/assets/img/scss.png'); ?>" alt="scss icon"></div><span>Scss</span>
			</li>
			<li class="skills__item">
				<div class="skills__icon"><img src="<?= get_theme_file_uri('/assets/img/javascript.png'); ?>" alt="javascript icon"></div><span>JavaScript</span>
			</li>
			<li class="skills__item">
				<div class="skills__icon"><img src="<?= get_theme_file_uri('/assets/img/wordpress.png'); ?>" alt="wordpress icon"></div><span>WordPress</span>
			</li>
			<li class="skills__item">
				<div class="skills__icon"><img src="<?= get_theme_file_uri('/assets/img/figma.png'); ?>" alt="figma icon"></div><span>Figma</span>
			</li>
			<li class="skills__item">
				<div class="skills__icon"><img src="<?= get_theme_file_uri('/assets/img/illustrater.png'); ?>" alt="illusutrater icon"></div><span>Illustrator</span>
			</li>
			<li class="skills__item">
				<div class="skills__icon"><img src="<?= get_theme_file_uri('/assets/img/photoshop.png'); ?>" alt="photoshop icon"></div><span>Photoshop</span>
			</li>
			<li class="skills__item">
				<div class="skills__icon"><img src="<?= get_theme_file_uri('/assets/img/bootstrap.png'); ?>" alt="Bootstrap icon"></div><span>Bootstrap</span>
			</li>
			<li class="skills__item">
				<div class="skills__icon"><img src="<?= get_theme_file_uri('/assets/img/git.png'); ?>" alt="git icon"></div><span>Git</span>
			</li>
		</ul>
		<img class="skills__img" src="<?= get_theme_file_uri('/assets/img/skills.webp'); ?>" alt="スキルをイメージしたパソコンとデザイナーの手元が写っている写真">
	</section>

	<section class="strengths">

		<header class="section-subheader strengths__title">strength</header>

		<div class="strengths__meticulous">
			<h2 class="strengths__header">Meticulous</h2>
			<p class="strengths__desc common__desc">ものづくりが得意で編み物やレジン小物、DIYなどをします。<br>
				製作において、素材の選択からプロセス全体にわたって細部にわたる注意を払い、精密さを重視しています。<br>製図や段取りが仕上がりを左右するため、各工程を根気よく丁寧に進めることが必要です。<br>
				これらの経験はサイト制作においても活かされると考えます。</p>
		</div>

		<div class="strengths__img">
			<picture class="strengths__img-photo"><img src="<?= get_theme_file_uri('/assets/img/strengths.webp'); ?>" alt="ベージュの毛糸で編まれた手編みのセーター"></picture>
		</div>

		<div class="strengths__certified">
			<h2 class="strengths__header">Certified</h2>
			<p class="strengths__desc common__desc">2003年 歯科衛生士免許取得<br>
				2023年 MOS Excel 365<br>
				2023年 MOS PowerPoint 365<br>
				2023年 色彩検定2級<br>
				2023年 日本手芸協会棒針編み講師</p>
		</div>
	</section>

</main>

<?php get_footer(); ?>