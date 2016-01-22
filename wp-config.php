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
define('DB_NAME', 'newreason');

/** Имя пользователя MySQL */
define('DB_USER', 'admin');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '123');

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
define('AUTH_KEY',         'p$<Lu.],|[!#.#f?1jC-(JC:}-*^hg;G*k%y|h+tuhf,[OK)1jEQ9GPqjko:_-+m');
define('SECURE_AUTH_KEY',  '+SJ[_pyct}:eI8q}K|EeaKaJ])l5<~7U+rz7jt]>]/A;~R/:?~J)Klt~<-Wja`Q{');
define('LOGGED_IN_KEY',    '|aC_bO]M6&X4?%>|Z.?(z?*#y?n7{CD+.F#T-XyD)Oi$E vtWl/LOv7bW!9SS0rn');
define('NONCE_KEY',        'Xe%T=D:MQ|ALf;/4w [<a[+[}O7o%m!cbK8EknXL4~ko/k7*(Vvj.7}=9m^U:gkP');
define('AUTH_SALT',        'LQE3al?8rX-?u=(g_E<k ~5? #v.d_-+^~(-XF{l<1d|J-2p(#qBn>YhTODz3R-<');
define('SECURE_AUTH_SALT', 'c0rI+#-,v+bpBP(&%8a}5q>H-+=f13%d2NHMe)Exr3H|i]&W!iayunnz*m !1^_0');
define('LOGGED_IN_SALT',   'Qp^-jfc;-I+yQ2AWUY $A[L&=-k7sP-M?BP`V_S^7K#]<r!gyO=8;VA|tos6WEC#');
define('NONCE_SALT',       'ea@U|;omw`y$(.?%BxGCN=P9us-HM5|smBl!}p;uP?3yJ{z.X4/Yr+!H$&=M>k)+');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'nr_';

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
