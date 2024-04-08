<?php
get_template_part('functions/admin');
get_template_part('functions/loop');
get_template_part('functions/setting');

/*------------------------------------------
 *  titleが英語のみか日本語を含むかチェックする
 *----------------------------------------*/
function determine_language_class($post_id)
{
	$title = get_the_title($post_id);

	// 英語のみで構成されているかチェック（ASCII文字のみ）
	if (preg_match('/^[A-Za-z0-9 .,!?|]+$/', $title)) {
		return 'enFont';
	}
	// 日本語を含むかチェック（ひらがな、カタカナ、漢字）
	elseif (preg_match('/[\x{3040}-\x{30FF}\x{4E00}-\x{9FAF}]+/u', $title)) {
		return 'jpFont';
	}
	// どちらでもない場合はデフォルトクラスを返す
	else {
		return 'defaultFont';
	}
}
