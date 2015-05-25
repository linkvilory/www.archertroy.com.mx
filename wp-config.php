<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', '/Applications/MAMP/htdocs/wordpress/www.archertroy.com.mx/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'archertroy');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'root');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
/* define('DB_HOST', 'localhost'); */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');


/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'C2iMbh8.wHWg5YPmyW<JR=xVc%!0DIRxD~xQ +cp2JTHros_Hb!f@Ij(`%!}^`e:'); // Cambia esto por tu frase aleatoria.
define('SECURE_AUTH_KEY', 'f)RIM-%o~4HF~Dl+O,_OV#CxYw|C6swX3$+5Nzu6%OlkUr_&hJ?RU&.`Rpem0Zyt'); // Cambia esto por tu frase aleatoria.
define('LOGGED_IN_KEY', '6>4It*ROx6Eo},39|i+FN<sm.<6U|saNN(S+S_M+d9V?H{8JM|j6WCwI6:RKu}|a'); // Cambia esto por tu frase aleatoria.
define('NONCE_KEY', '.l`:9$zWyTLcHBCs#<dm4.[>->Pbt853FdIc1-m-,cAQN9FZd6AN W!/&cXtGA)?'); // Cambia esto por tu frase aleatoria.
define('AUTH_SALT', 'RAlH/hv*][%/8aCCTVk.Rq^xh9mof>Gd#Y%,;2;90e)M| 6QLhzIHk;:O70R{8dc'); // Cambia esto por tu frase aleatoria.
define('SECURE_AUTH_SALT', 'VT4{rM9$pOj(A=7zG6DQ)&VhQiOQ>18|@agYY5l.DyQ|+0J9^Gv~X+C,S.G5&-N$'); // Cambia esto por tu frase aleatoria.
define('LOGGED_IN_SALT', '0Gq+`KkJ;P;uQ)+ Jnq=9K(XK^vGkIc:z}lI{l1L:t/~R|e3UcwN]yU3q7si`)Se'); // Cambia esto por tu frase aleatoria.
define('NONCE_SALT', 'u/PR+hS+.K|<Whx8r|3&O7UBU`#z+Iek&XHj+a6UG=~[PDa;r<BsJ0/lv^cf-0Da'); // Cambia esto por tu frase aleatoria.

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

