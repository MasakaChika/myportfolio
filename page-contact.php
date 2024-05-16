Ω<?php get_header(); ?>
<main>
	<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
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

		<?php endwhile; ?>
	<?php endif; ?>
	<section class="contact">
		<div class="contact__container">
			<header class="section-header contact__title">Contact</header>
			<form action="https://docs.google.com/forms/u/0/d/e/1FAIpQLSeMWEj_fwyidcP-HasVrFJXiYWt7KMOdkiP05HmHrK-5mG5SQ/formResponse" class="contact__form" target="hidden_iframe" onsubmit="submitted=true;">
				<!-- 会社名 -->
				<label class="form_block contact__campany-name">
					<div class="form_label">会社名</div>
					<input type="text" name="entry.1078744500" class="form_field" placeholder="会社名(任意)">
				</label>
				<!-- お名前 -->
				<label class="form_block contact__your-name">
					<div class="form_label">氏名<span class="form-required">必須</span></div>
					<input type="text" name="entry.565409250" class="form_field" placeholder="お名前" required>
				</label>
				<!-- メールアドレス -->
				<label class="form_block contact__your-email">
					<div class="form_label">メールアドレス<span class="form-required">必須</span></div>
					<input type="text" name="entry.1685602275" class="form_field" placeholder="メールアドレス" required>
				</label>
				<!-- 電話番号 -->
				<label class="form_block contact__phone-number">
					<div class="form_label">電話番号</div>
					<input type="text" name="entry.1721767794" class="form_field" placeholder="お電話番号(任意)">
				</label>
				<!-- お問い合わせ内容 -->
				<label class="form_block --textfield contact__your-message">
					<div class="form_label">お問い合わせ内容<span class="form-required">必須</span></div>
					<textarea name="entry.81957559" class="form_field --textfield" placeholder="お問い合わせ内容を入力してください" required></textarea>
				</label>
				<!-- プライバシーポリシー -->
				<div class="contact__privacy">
					<p>個人情報の取り扱いについては、<a href="'/privacy-policy/'">プライバシーポリシー</a>を遵守します。<br>
						<span>送信を押すとプライバシーポリシーに同意したことになります。<span>
					</p>
				</div>
				<!-- 送信ボタン -->
				<button type="submit" class="form-btn">send</button>
			</form>
			<iframe name="hidden_iframe" id="hidden_iframe" style="display:none;" onload="if(submitted) {window.location='/contact/thanks';}"></iframe>
		</div>
	</section>

</main>
<?php get_footer(); ?>