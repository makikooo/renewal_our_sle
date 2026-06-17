<?php
/**
 * SMTP 送信設定のサンプル。
 *
 * 使い方:
 *   1. このファイルを同じフォルダに mail-config.php という名前でコピーする。
 *   2. 値を実際の SMTP 情報に書き換える。
 *   3. mail-config.php は Git 管理外（.gitignore 済み）。コミットしないこと。
 *
 * 設定があるときだけ wp_mail() が SMTP 送信になります（functions.php の
 * oursle_configure_smtp）。ファイルが無ければ通常の PHP mail() のままです。
 *
 * Gmail を使う場合は「2段階認証」を有効にしたうえで
 * 「アプリ パスワード」を発行し、SMTP_PASS にそれを設定してください。
 * （通常のログインパスワードでは送信できません）
 */
return array(
	'SMTP_HOST'      => 'smtp.gmail.com',
	'SMTP_PORT'      => 587,
	'SMTP_SECURE'    => 'tls',            // 'tls'（587）または 'ssl'（465）
	'SMTP_USER'      => 'your@gmail.com',
	'SMTP_PASS'      => 'xxxx xxxx xxxx xxxx', // Gmail のアプリパスワード
	'MAIL_FROM'      => 'your@gmail.com',  // 差出人（認証アカウントに揃える）
	'MAIL_FROM_NAME' => 'わたしたちのSLE',
	'ADMIN_EMAIL'    => 'your@gmail.com',  // 問い合わせの受信先
);
