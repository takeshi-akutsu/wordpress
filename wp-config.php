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
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link http://wpdocs.sourceforge.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
 *
 * @package WordPress
 */

// 注意: 
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.sourceforge.jp/Codex:%E8%AB%87%E8%A9%B1%E5%AE%A4 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'wp-01');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'root');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'root');

/** MySQL のホスト名 */
define('DB_HOST', 'localhost');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8mb4');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'PTTsN{Nz}$b]_h8T_zm,H+[=$o93jNwJ:PB~I>fmk%w0k3aRW@+M+Ci/;l&5OF)t');
define('SECURE_AUTH_KEY',  'J4J}g`M%$Km=)q0(0 B?/EHsxkp6KD[$3f>IKE$)}q{/lOfV65F0K}l?9NNrwD22');
define('LOGGED_IN_KEY',    '&9N_gzg 6kHhcv~cj%!dm05;NA>J_m@dCO/MvV].4J2D?FQAXa7vk/=g;jqNvcM%');
define('NONCE_KEY',        '$vihmv +T^<3;}^[xnW}O8ex:-q Xe,_y{OQY}%Ckk[67PBU-T6:.NMYvaK]`3 0');
define('AUTH_SALT',        'm}7 3=Y*BpUm::JEp<ImpPHakhF+3`a6E+/AHZ*&DjjFnI.#Zb<ZhpxMM`D%0Jo_');
define('SECURE_AUTH_SALT', 'G $858=g(Ela:Jr`ySb0NW=-_-+2]B7;iSgVS()yQKcBCT}v;G##G?R)1Ylujv~%');
define('LOGGED_IN_SALT',   '_@^+^o[|V~v2!bfW+%:I8/h_0t9IwL!aJ-AD]9ks`~5.2|EvSb%+P<X~F`f>%:1.');
define('NONCE_SALT',       'ED99>2},DBJmbPizx04v]j_Il%^ ){simY|}9q37&2n$k4w-9Q X|w/wnXccY#U2');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数については Codex をご覧ください。
 *
 * @link http://wpdocs.osdn.jp/WordPress%E3%81%A7%E3%81%AE%E3%83%87%E3%83%90%E3%83%83%E3%82%B0
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
