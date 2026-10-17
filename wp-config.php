<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'petrovich' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'Admin' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'giveme5' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '9csnyIxho*DA3Wm-IZO^B2R_2L: {4/fQlz8,h:*A=! iK&+4b5WwcQY,5_Ay1V9' );
define( 'SECURE_AUTH_KEY',  '?4)H&Ss,xz(romPW#~1 Fwnc8os/E2g5V9cw9YSF|`cp-y~H@T]CAVmC%YOq5{&<' );
define( 'LOGGED_IN_KEY',    '#~x)Z*zjD1 jHZOAL3^6u.s/Xt3u{XDFEebwu9,M<AIWKiK6@EZ}OFkL.U1#<uEK' );
define( 'NONCE_KEY',        'O3s*[-}[ep!:?5yLy-(u`E/S.XSiZq|!+?9TBF-aV8+hv,@X@`t{j]H,I(4%7(<~' );
define( 'AUTH_SALT',        '0P9v{m`~-/Cv2G!D6o!y)d`lwlb;WQiYT.h,48f~RNJG1pK_P|d;WKl!!m&CvGXS' );
define( 'SECURE_AUTH_SALT', 'hDO] 1Aka~yA6_7AR]D!d;OFR8cJ:#Oy%h(HDK`|]4?>Bmw6_bj5=<7mF#aKO/)E' );
define( 'LOGGED_IN_SALT',   'bE7aF3#uGmoST.qD}R9PS.-3wIohT@DK&-SRg>]c+;b?vBQ-ALx9 8z|cnon?,ar' );
define( 'NONCE_SALT',       'p{Z8vDQ28sQO<[7n][|.jBiso+j/iqoe$Ay&X@zpxvu>?FG1JZuTqn}=S3QZ*bdt' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 *
 * В процессе установки указанный префикс добавляется к именам таблиц базы данных.
 * Если изменить это значение после установки WordPress, то сайт снова перейдёт
 * в режим установки.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
