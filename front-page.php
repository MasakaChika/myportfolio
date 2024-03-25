<?php get_header(); ?>

<!-- main visual -->
<section class="mv">
	<div class="mv__inner">
		<video class="mv__video" src=<?= get_theme_file_uri('/assets/video/pcmv.mp4'); ?> autoplay muted></video>
	</div>
</section>
<div class="vertical-title__container">
	<div class="vertical-title__text">Web Creater Masaka Chika Portfolio</div>
</div>
<!-- /.main visual -->

<!-- main content -->
<div class="main-content">
	<!-- works -->
	<section class="works" id="works">
		<header class="section-header works__title">works</header>
		<div class="works__slider"></div>
		<div class="works__search">
			<span>search</span>
			<hr />
			<ul>
				<a href="#">
					<li class="works__seach-tag">Design</li>
				</a>
				<a href="#">
					<li class="works__seach-tag">Coding</li>
				</a>
				<a href="#">
					<li class="works__seach-tag">Logo</li>
				</a>
				<a href="#">
					<li class="works__seach-tag">Banner</li>
				</a>
				<a href="#">
					<li class="works__seach-tag">Icon</li>
				</a>
				<a href="#">
					<li class="works__seach-tag">HTML+CSS</li>
				</a>
				<a href="#">
					<li class="works__seach-tag">JavaScript</li>
				</a>
				<a href="#">
					<li class="works__seach-tag">WordPress</li>
				</a>
				<a href="#">
					<li class="works__seach-tag">Illustrator</li>
				</a>
				<a href="#">
					<li class="works__seach-tag">Photoshop</li>
				</a>
				<a href="#">
					<li class="works__seach-tag">Figma</li>
				</a>
				<a href="#">
					<li class="works__seach-tag">STUDIO</li>
				</a>
			</ul>
		</div>
		<div class="viewall works__all">
			<a href=""><span>View All</span></a>
		</div>
	</section>
	<!-- /.works -->

	<!-- about -->
	<section class="about" id="about">
		<header class="section-header about__title">about</header>
		<div class="about__name">
			<h2>眞坂千佳</h2>
			<p>Webデザイナー・コーダー志望</p>
		</div>
		<div class="about__desc">
			<p>歯科衛生士として18年ほど従事、2023年10月よりインタープランITスクールに通う、デザイナー・コーダーへの転身を希望</p>
		</div>
		<div class="about__photo"><img src=<?php echo get_theme_file_uri('/assets/img/photo.jpg'); ?> alt="眞坂千佳が写っている写真" /></div>
		<div class="about__text">
			<h3>シンプルながらも深みのあるデザインで、あなたの物語を語りたい</h3>
			<p>私の目標は、ユーザーに優しく、分かりやすい、効果的なウェブサイトを作ることです。<br />キャリアチェンジは大きな挑戦ですが、患者さんと共に歩んだ経験や緻密な作業の繰り返しは、どちらも大きな価値を持つと考えています。<br />クライアントとユーザーのニーズに寄り添い、直感的で理解しやすいサイトを作成することを目指していきます。</p>
		</div>
		<div class="viewall about__all">
			<a href=""><span>View All</span></a>
		</div>
	</section>
	<!-- /.about -->
</div>
<!-- /.main content -->

<?php get_footer(); ?>