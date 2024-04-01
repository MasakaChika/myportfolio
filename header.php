<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<!-- <title><?php bloginfo('name'); ?></title> -->
	<meta name="discription" content="Webデザイナー・コーダー" />
	<!-- Google Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com" />
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
	<link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@400;700&family=Noto+Sans+JP:wght@100..900&family=Noto+Serif+JP:wght@400;500&display=swap" rel="stylesheet" />

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<!-- header -->
	<header class="site-header">
		<div class="site-header__container">
			<h1 class="site-header__logo">
				<a href="<?= home_url() ?>">
					<img src="<?= get_template_directory_uri(); ?>/assets/img/logo.png" alt="ロゴ" />
					<span class="site-header__position">Web Designer / Coder</span><span class="site-header__name">MasakaChika</span>
				</a>
			</h1>
			<input type="checkbox" id="nav-toggle" class="site-nav-checkbox" />
			<label for="nav-toggle" class="site-nav-toggle">
				<span></span>
			</label>

			<div class="site-nav site-header__nav-container">
				<nav class="site-header__gnav">
					<ul class="site-header__nav">
						<li>
							<a href="<?= home_url() ?>">home</a>
						</li>
						<li>
							<a href="<?= home_url('/works/') ?>">works</a>
						</li>
						<li>
							<a href="<?= home_url('/about/') ?>">about</a>
						</li>
						<li>
							<a href="<?= home_url('/contact/') ?>">contact</a>
						</li>
					</ul>
					<div class="site-header__sns">
						<a href="https://www.instagram.com/masaka_chika" target="_blank">
							<svg id="icon-instagram" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
								<g id="openmoji:instagram">
									<path id="Vector" class="cls-1" d="M17.42.25H6.58C3.08.25.25,3.08.25,6.58v10.84c0,3.5,2.83,6.33,6.33,6.33h10.84c3.5,0,6.33-2.83,6.33-6.33V6.58c0-3.5-2.83-6.33-6.33-6.33Z" />
									<path id="Vector_2" data-name="Vector 2" class="cls-1" d="M12,17.67c3.13,0,5.67-2.54,5.67-5.67s-2.54-5.67-5.67-5.67-5.67,2.54-5.67,5.67,2.54,5.67,5.67,5.67Z" />
									<path id="Vector_3" data-name="Vector 3" class="cls-1" d="M18.89,6.33c.67,0,1.22-.54,1.22-1.22s-.54-1.22-1.22-1.22-1.22.54-1.22,1.22.54,1.22,1.22,1.22Z" />
								</g>
							</svg>
						</a>
					</div>
				</nav>
			</div>
		</div>
	</header>
	<!-- /.header -->