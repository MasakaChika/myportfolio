<?php get_header(); ?>
<main>
	<?php get_template_part('template-parts/vertical-category', null, array(
		'vertical' => 'プライバシーポリシー',
		'horizontal' => 'privacy policy'
	)); ?>

	<section class="privacy-policy">
		<header class="section-header privacy-policy__title">Privacy Policy
		</header>



		<div class="privacy-policy__container">
			<p class="privacy-policy__introduction">
				Masaka Chika Portfolio Site（以下、「当サイト」といいます。）は、当サイトの提供するサービス（以下、「本サービス」といいます。）において、ユーザーのプライバシーを尊重し、個人情報の保護に努めます。<br>
				以下に、本サービスのプライバシーポリシー（以下、「本ポリシー」といいます。）を定めます。<br>
			</p>

			<div class="privacy-policy__section">
				<h2 class="privacy-policy__heading">1. 収集する個人情報</h2>
				<p class="privacy-policy__text">本サービスでは、ユーザーが問い合わせフォームを通じて以下の個人情報を提供する場合があります。</p>
				<ul class="privacy-policy__list">
					<li class="privacy-policy__item">会社名</li>
					<li class="privacy-policy__item">氏名</li>
					<li class="privacy-policy__item">電話番号</li>
					<li class="privacy-policy__item">メールアドレス</li>
					<li class="privacy-policy__item">お問い合わせ内容</li>
				</ul>
			</div>

			<div class="privacy-policy__section">
				<h2 class="privacy-policy__heading">2. 個人情報の利用目的</h2>
				<p class="privacy-policy__text">ユーザーから提供された個人情報は、以下の目的で利用されます。</p>
				<ul class="privacy-policy__list">
					<li class="privacy-policy__item">お問い合わせへの対応</li>
					<li class="privacy-policy__item">必要に応じた連絡の実施</li>
					<li class="privacy-policy__item">当サイトのサービス改善に関する参考情報</li>
				</ul>
			</div>

			<div class="privacy-policy__section">
				<h2 class="privacy-policy__heading">3. 個人情報の第三者への提供</h2>
				<p class="privacy-policy__text">当サイトは、以下の場合を除き、ユーザーの同意なく個人情報を第三者に提供しません。</p>
				<ul class="privacy-policy__list">
					<li class="privacy-policy__item">法律に基づく場合</li>
					<li class="privacy-policy__item">ユーザーの生命、身体、または財産の保護のために必要がある場合</li>
					<li class="privacy-policy__item">公衆衛生の向上または児童の健全な育成の推進に特に必要がある場合</li>
				</ul>
			</div>

			<div class="privacy-policy__section">
				<h2 class="privacy-policy__heading">4. 個人情報の管理</h2>
				<p class="privacy-policy__text">当サイトは、ユーザーの個人情報の正確性を保ち、安全に管理します。不正アクセス、紛失、破壊、改ざん、漏洩などのリスクから個人情報を保護するため、適切なセキュリティ対策を講じます。</p>
			</div>

			<div class="privacy-policy__section">
				<h2 class="privacy-policy__heading">5. 個人情報の照会、修正、削除</h2>
				<p class="privacy-policy__text">ユーザーは、自己の個人情報に関して、照会、修正、または削除を希望する場合、当サイトの指定する連絡先にその旨を申し出ることができます。確認手続きの上、適切に対応します。</p>
			</div>

			<div class="privacy-policy__section">
				<h2 class="privacy-policy__heading">6. プライバシーポリシーの変更</h2>
				<p class="privacy-policy__text">本ポリシーの内容は、法令の改正、その他の理由により、予告なく変更されることがあります。変更後の本ポリシーについては、当サイトが別途定める場合を除き、当サイトに掲載した時点から効力を生じるものとします。</p>
			</div>

			<div class="privacy-policy__section privacy-policy__section--contact">
				<h2 class="privacy-policy__heading">7. お問い合わせ</h2>
				<?php
				$contactPageUrl = "https://masakachika.com/contact/";
				?>
				<p class="privacy-policy__text">本ポリシーに関するお問い合わせは、<a href="<?= $contactPageUrl; ?>" class="privacy-policy__link">こちら</a>より、ご連絡ください。</p>
			</div>
		</div>

		<button class="privacy-policy__button" onclick="goBack()">back</button>

	</section>


</main>
<?php get_footer(); ?>