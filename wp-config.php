<?php
/**
 * Основне поставке Вордпреса.
 *
 * Ова датотека се користи од стране скрипте за прављење wp-config.php током
 * инсталирања. Не морате да користите веб место, само умножите ову датотеку
 * у "wp-config.php" и попуните вредности.
 *
 * Ова датотека садржи следеће поставке:
 * * MySQL подешавања
 * * тајне кључеве
 * * префикс табеле
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL подешавања - Можете добити ове податке од свог домаћина ** //
/** Име базе података за Вордпрес */
define( 'DB_NAME', 'sajtwp' );

/** Корисничко име MySQL базе */
define( 'DB_USER', 'sajtwp' );

/** Лозинка MySQL базе */
define( 'DB_PASSWORD', 'sajtwp' );

/** MySQL домаћин */
define( 'DB_HOST', 'localhost' );

/** Скуп знакова за коришћење у прављењу табела базе. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Не мењајте ово ако сте у сумњи. */
define( 'DB_COLLATE', '' );

/**#@+
 * Јединствени кључеви за аутентификацију.
 *
 * Промените ово у различите јединствене изразе!
 * Можете направити ово користећи {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org услугу тајних кључева}
 * Ово можете променити у сваком тренутку да бисте поништили све постојеће колачиће.
 * Ово ће натерати кориснике да се поново пријаве.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Dxj-1s2Ly|2M@;)PLP#~8<Q>+jk7&jv:2Pp6>GL4za#SwUBTo_{m%Ne2?9Tg({+j' );
define( 'SECURE_AUTH_KEY',  'nW^(r{aw8-6}#~_=Xj9fJGu?xKjFz=vV<KRll-d:Px6VYrE6]]L]<cr%als{,TzY' );
define( 'LOGGED_IN_KEY',    ':mm!]tG|c T6.{)uCy@V3#S[CJjOt9pVDws1u#W.147cvqTASrd@;%|k|nh])JRT' );
define( 'NONCE_KEY',        'h3JuXTl_#nsE1LOSj7d@qC4@JV/f5(+CIchgMVncHyDQqontY~IsC8C~B1TBc,>h' );
define( 'AUTH_SALT',        'ldfvc*:.*7X]]+Il4BOF.Y:Jv!;^p5iTM@@A{S:28@bJoxCy}*5YWq?:Fy0X45A]' );
define( 'SECURE_AUTH_SALT', 'v@^8!:z9y7H1U)Due+?33U(+z;DrW#pju)#-HH1/P;CR{EV34,E`Qy630j)1tI>o' );
define( 'LOGGED_IN_SALT',   '@hs`#+@?+<9< mGg69h4aLrG9W,k`6]~XnY~$j^q>j6&i/>?R6.Z-LT{0A+Le:S@' );
define( 'NONCE_SALT',       'CBW@|<y<#N>z^bj&Wm/4sumwi[aP]4]TRjA7(19/_,dO<ixj:L4<$!_6-eW9-h}@' );

/**#@-*/

/**
 * Префикс табеле Вордпресове базе података.
 *
 * Можете имати више инсталација Вордпреса у једној бази уколико
 * свакој дате јединствени префикс. Само бројеви, слова и доње цртице!
 */
$table_prefix = 'wp_';

/**
 * За градитеље: исправљање грешака у Вордпресу ("WordPress debugging mode").
 *
 * Промените ово у true да бисте омогућили приказ напомена током градње.
 * Веома се препоручује да градитељи тема и додатака користе WP_DEBUG
 * у својим градитељским окружењима.
 *
 * За више података о осталим константама које могу да се
 * користе током отклањања грешака, посетите Документацију.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* То је све, престаните са уређивањем! Срећно објављивање. */

/** Апсолутна путања ка Вордпресовом директоријуму. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Поставља Вордпресове променљиве и укључене датотеке. */
require_once( ABSPATH . 'wp-settings.php' );
