<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * データベース設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link https://ja.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** データベース設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define( 'DB_NAME', 'tuweiiwp' );

/** データベースのユーザー名 */
define( 'DB_USER', 'tuweiiwp' );

/** データベースのパスワード */
define( 'DB_PASSWORD', 'magictuweii' );

/** データベースのホスト名 */
define( 'DB_HOST', 'mysql' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8mb4' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define( 'DB_COLLATE', '' );

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'iy3`f`O@YM?.T287%cSPZ}A?mwaCL-?>o.2Iip4Xd!k|K&p [nM>xpwQV`ayq.F2' );
define( 'SECURE_AUTH_KEY',  'W~WU~r$vs?cf2iMAf; i?&HM_`QFD@.P6P1s^;m 9jYQ<<7R4;8$xk{/(.%.R_!&' );
define( 'LOGGED_IN_KEY',    'lPl4wl_:jCK,IPQUe/AEQ91S[yV}E7_b2|rAo%^S`XK14b+qY)GXx/*r<XIur~,]' );
define( 'NONCE_KEY',        '9Dxp`RX6D]yjQ [d7)s,x1*CLjSG,Id1yUjxcm3*9ry)9/LQm1X<:@-l0q>T@]*_' );
define( 'AUTH_SALT',        '/661JnZVI+Omv|a<jJ>n2Hrq~X>-+9JPjUN|(p]>#_#uIP]4h63$ Z7VMS(^9uyc' );
define( 'SECURE_AUTH_SALT', 'uk-G!a,GpS#7%Q(w5ET,Ph85VD^irh86)UXK95eWs3:]Lh+R`$L*Dh$;&G-}p4(_' );
define( 'LOGGED_IN_SALT',   'zy2N3RX{KmY`Vn5b }c3IT+Z$fJ#$oF!YE`gZ20S!?>=/emxn^AV@(&z}iw `#j!' );
define( 'NONCE_SALT',       'T745{hYBU4W87|dHo@~A&NX`VLc2E]z{,K)wj,c6ZBMn~;HAs3(GHLeaN#7YQeG;' );

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数についてはドキュメンテーションをご覧ください。
 *
 * @link https://ja.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* カスタム値は、この行と「編集が必要なのはここまでです」の行の間に追加してください。 */



/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
