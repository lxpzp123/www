<?php
/**
 * WordPress基础配置文件。
 *
 * 这个文件被安装程序用于自动生成wp-config.php配置文件，
 * 您可以不使用网站，您需要手动复制这个文件，
 * 并重命名为“wp-config.php”，然后填入相关信息。
 *
 * 本文件包含以下配置选项：
 *
 * * MySQL设置
 * * 密钥
 * * 数据库表名前缀
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/zh-cn:%E7%BC%96%E8%BE%91_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL 设置 - 具体信息来自您正在使用的主机 ** //
/** WordPress数据库的名称 */
define('DB_NAME', 'espp');

/** MySQL数据库用户名 */
define('DB_USER', 'root');

/** MySQL数据库密码 */
define('DB_PASSWORD', '');

/** MySQL主机 */
define('DB_HOST', 'localhost');

/** 创建数据表时默认的文字编码 */
define('DB_CHARSET', 'utf8mb4');

/** 数据库整理类型。如不确定请勿更改 */
define('DB_COLLATE', '');

/**#@+
 * 身份认证密钥与盐。
 *
 * 修改为任意独一无二的字串！
 * 或者直接访问{@link https://api.wordpress.org/secret-key/1.1/salt/
 * WordPress.org密钥生成服务}
 * 任何修改都会导致所有cookies失效，所有用户将必须重新登录。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'gJ&T60:h5?2<0`R4_4-o>zOU(DOQK0pAf5;Fw5[)Z=kWf@F@O go6Cj)5EM(QlSL');
define('SECURE_AUTH_KEY',  'vCvnnKl,K :~I8-,tLli5i+K,3$|R|aJ6AM2_@3QN6o)w>Y,1efv5?bgeXUvX{|c');
define('LOGGED_IN_KEY',    'kN8^DWCM9Q6+|4Q*,O;bNm+PrV R`H6ihoX?}D`@tSrx*G{fzVEiT.MzPVUFGOEL');
define('NONCE_KEY',        'u-A5cx~;`MRe&F`B|DX-6}MtCN//VA%n??{yX}@0D<t^?}V|[b&Dl2>(85j$w 0&');
define('AUTH_SALT',        '/yYa4)i(u}S6Y8>MF!80r[3Tdj`I,:h{=,R%3G*iuU=#B@6v k*./e~:PKF[;Xh-');
define('SECURE_AUTH_SALT', 'pv rTbT1Q8#T5#vyez:al|GK7E3Tk=DZs*cd)~xZnz#b:~|z&W9K$8e03t||Rft1');
define('LOGGED_IN_SALT',   '8 AZyEXQ3TC_p/[<*3H=L0TrM&p!u}c:Zy*?hGc{Cs<ywU_&bZG{RaS%c@ss[!?P');
define('NONCE_SALT',       '/$gq^8r1+a;z!}e-H6Rqik+N~3^o}$2f1.pKd[zzGiO|~ZyhH|AwC *Ri|j/F*;:');

/**#@-*/

/**
 * WordPress数据表前缀。
 *
 * 如果您有在同一数据库内安装多个WordPress的需求，请为每个WordPress设置
 * 不同的数据表前缀。前缀名只能为数字、字母加下划线。
 */
$table_prefix  = 'espp_';

/**
 * 开发者专用：WordPress调试模式。
 *
 * 将这个值改为true，WordPress将显示所有用于开发的提示。
 * 强烈建议插件开发者在开发环境中启用WP_DEBUG。
 *
 * 要获取其他能用于调试的信息，请访问Codex。
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/**
 * zh_CN本地化设置：启用ICP备案号显示
 *
 * 可在设置→常规中修改。
 * 如需禁用，请移除或注释掉本行。
 */
define('WP_ZH_CN_ICP_NUM', true);

/* 好了！请不要再继续编辑。请保存本文件。使用愉快！ */

/** WordPress目录的绝对路径。 */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** 设置WordPress变量和包含文件。 */
require_once(ABSPATH . 'wp-settings.php');
