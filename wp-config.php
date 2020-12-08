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
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'jewerly' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'od`sEgo89gd>a 5tL(sD~dAA[k<=8^W^yt[?uHDC>ZuEg(jD(Iu_AUjd#$JZC:);' );
define( 'SECURE_AUTH_KEY',  'Ny)%4nA?O/z8Yq%[C]<4yf0=^vCB9{5jG{,@aXkbC)+<%:^CKo;d7qH{z. ZpfIG' );
define( 'LOGGED_IN_KEY',    '10.2[dVwWu1eINFlF$H3WC|qIFx6x6|IaO6p`SGE7AgJg7Vx77yE]*>MSs;/H@*g' );
define( 'NONCE_KEY',        '$qK#dJuc4]X})[`&dMu?OX0_+EN(m7@bkmM#Zy`%SrtLulNbNl77(@TJ L[ohg#E' );
define( 'AUTH_SALT',        'n#H-Dmk[.LK!DFzn9VZ2W67CQJ$!#2Bx(K?]Er(R1|(JiEm:QiEd@Qz;lE*jTz05' );
define( 'SECURE_AUTH_SALT', 'y}E8}M6~t|8k/J@/6<_@B*0RYf_]]r<cEg<gx,rIYfF{H}M4.v%%NgKr&Cqemyof' );
define( 'LOGGED_IN_SALT',   'w 1Ix2]Mi+f`UMHAjQRm2&(o9^<,eJx >*hiCC_o?lE#F`f[bapudQ7Xfkv)LrHa' );
define( 'NONCE_SALT',       'z(`yUGuRQNSwt[y8]+t&iu^4sbt>)hyUKo~mb!!(+6^-(?C*ssmmC5!*Q5>x.{v6' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
