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
define('DB_NAME', 'cream');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'zw7SY5Esd}>*cSi@g^%.5Gc>#o_q/W7F*EBQYUTYNZ%56g{:~6mX=0fnakTQGG6u');
define('SECURE_AUTH_KEY',  'OAm6-[[.>-ZrwxhA+$_@xuV)kQ YC8{^#%lixNY]{`Uvy ~lO>22pD!pIK6cCz*P');
define('LOGGED_IN_KEY',    '.IV(kt=XeI%Lb4:Lyx}<zNwG*RYyH^7,,;Oi,a^k!nNgQA`(+O<s,/TfCRzPn4-J');
define('NONCE_KEY',        'k}$nna$$Y_^Wx82ny3aS7=~;3$BHhCbi&2tC:wf1v&Qf]!5A.2xl=6c)87yMhlt&');
define('AUTH_SALT',        'c0y?5{09CAU K6:u.`(e+Sz|`@; *Oai^:_]<Qq6qTef&{O+_}RXmhiJz,65Mf8p');
define('SECURE_AUTH_SALT', '?eV?L%OzIV]sC,}A;Ntum=IU8AWB 2`!F:zd)+;~o`FGbYsw0`#40T6l*y&: 4#B');
define('LOGGED_IN_SALT',   's(^XDYf$=FHI1sP6<5i(Sc8&H-C<YC,;l89ietz<(~u=h)uX0-fhrmLf`g8>@=X2');
define('NONCE_SALT',       '+Y`%LtW3@*zWbuGyd{jDfVI7 >/[1mU[h>?cTa_;vR/)0J#Rxoc/?F<JnyL%Lhg{');

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
