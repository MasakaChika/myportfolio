<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="<?php bloginfo('description'); ?>" />
	<?php wp_head(); ?>
	<!-- Google tag (gtag.js) -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-NYGK6WLEF4"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'G-NYGK6WLEF4');
	</script>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<!-- header -->
	<header aria-label="サイトヘッダー" class="site-header">
		<div class="site-header__container">
			<h1 class="site-header__logo">
				<a href="<?= home_url() ?>">
					<img src="<?= get_template_directory_uri(); ?>/assets/img/logo.svg" alt="" />
					<span class="site-header__position" aria-label="Web Designer &amp; Developer">Web Designer &amp; Developer</span>
					<span class="site-header__name" aria-label="Masaka Chika">Masaka Chika</span>
				</a>
			</h1>

			<input type="checkbox" id="nav-toggle" class="site-nav-checkbox" />
			<label for="nav-toggle" class="site-nav-toggle">
				<span></span>
				<span></span>
				<span></span>
				<span class="site-nav-toggle__text"></span>
			</label>

			<nav class="site-nav site-header__gnav">
				<?php
				$args = [
					'menu' => 'grobal-navigation',
					'menu_class' => 'site-header__nav',
					'container' => false,
				];
				wp_nav_menu($args);
				?>

				<a href="https://www.instagram.com/i_am_masaka" target="_blank" class="site-header__link-icon">
					<svg id="icon-instagram" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
						<g id="openmoji:instagram">
							<path id="Vector" class="cls-1" d="M17.42.25H6.58C3.08.25.25,3.08.25,6.58v10.84c0,3.5,2.83,6.33,6.33,6.33h10.84c3.5,0,6.33-2.83,6.33-6.33V6.58c0-3.5-2.83-6.33-6.33-6.33Z" />
							<path id="Vector_2" data-name="Vector 2" class="cls-1" d="M12,17.67c3.13,0,5.67-2.54,5.67-5.67s-2.54-5.67-5.67-5.67-5.67,2.54-5.67,5.67,2.54,5.67,5.67,5.67Z" />
							<path id="Vector_3" data-name="Vector 3" class="cls-1" d="M18.89,6.33c.67,0,1.22-.54,1.22-1.22s-.54-1.22-1.22-1.22-1.22.54-1.22,1.22.54,1.22,1.22,1.22Z" />
						</g>
					</svg>
				</a>
			</nav>
		</div>
	</header>
	<!-- /.header -->