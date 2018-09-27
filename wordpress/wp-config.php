<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'Red_on db');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'root');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Y,tp:lx)M3zVF.ag)p,G3;kiq`x!.cR .;+:M%qJ-6=r/R6T9@)g0t_i ;9vp1qa');
define('SECURE_AUTH_KEY',  'iAY}X]WA[p:I+bt0dwS2j]$[V$ZhBAOqc}2`OFf[_btM kp@hM^ ;T?kyzw1/_Re');
define('LOGGED_IN_KEY',    '}#laf<-Gfnc&oAoQK+&.>WeFyV-$gKp1z)85cHy_n|JG/)A`Ygh5P%bz5:RW0r#p');
define('NONCE_KEY',        'Ie?9d@A%yBwd06|+rnm5LT1kjQR9gtB6uaS$_E)W5N15GhPP(.-cOCkV60HKXlv8');
define('AUTH_SALT',        '.`g51@`mx;V30Q!22 ,>I]@%@2uX-6LcHdzv>vj2D!]:N%{8ZV!r#U8i?UE`J,X<');
define('SECURE_AUTH_SALT', 'vf>t?igd%;UCGN=>TD[bMf3=~er74(Lyk93FgbyebMh9Pal`Ej;1_@<}XP}NxlwF');
define('LOGGED_IN_SALT',   ' x3Z{77<kT^}!tQ;]{90W6^{f`tD?*^Q~o5ZAUE1rBUiateSh.>CnlYa`s|k2@zN');
define('NONCE_SALT',       'y{qy9j%*zb39MNgK6]c$[1o;|u(GYd,)Mb 8y e-~r8G[1Z1 rrC<1z@&uA5L-J*');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
