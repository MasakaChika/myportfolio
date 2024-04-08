<?php

/**------------------------------------------
 *  サイドメニューで非表示にする
 *------------------------------------------*/
function remove_menus()
{
	remove_menu_page('edit.php'); // 投稿
	remove_menu_page('edit-comments.php'); // コメント
}
add_action('admin_menu', 'remove_menus', 999);
