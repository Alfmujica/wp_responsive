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
define( 'DB_NAME', 'wp_prueba' );

/** Tu nombre de usuario de MySQL */
define( 'DB_USER', 'root' );

/** Tu contraseña de MySQL */
define( 'DB_PASSWORD', '' );

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define( 'DB_HOST', 'localhost' );

/** Codificación de caracteres para la base de datos. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY', 'TN(@p?t36(et<2$Dz(,r0h*U]t;+enaR}ND9B kVTOT*lv 1+Ky8)Z7*y>1Yx ]R' );
define( 'SECURE_AUTH_KEY', '~]$s+6?uK:>LaRQnyl%*&~/5vTI)0n>qqsx$t1a1//Pr08+Zk]&oxgyvc#*?0:Cz' );
define( 'LOGGED_IN_KEY', '3z;mWGoS^HCx`N~1?gQBEFZ@i:sc#sp]$r*Xo+/@_y^c24CKG=^wK54F:pR[NkzR' );
define( 'NONCE_KEY', 'ES/6[`wyndWBYQAHQ8Uxz(sCR#*3d;/?smlx/L)Uvi7)r@l90n4mJL7T1, d|[LB' );
define( 'AUTH_SALT', '8X3dLVE|d}JlH^x^?q6wuW#6AOts>([Uxt|BD Z0IHS#;xep?-5W;UKj}q)k,B`{' );
define( 'SECURE_AUTH_SALT', ',tu/SVBqWVapVKIyW6.u|3@b5o(?{P10&&d~.M#W-Q/i/RWJMjgubtY|260J:aA)' );
define( 'LOGGED_IN_SALT', '/G<?hiMxA9{6R 2_f%yY)3M$dlxv#Gwh#gt[vw!fiw5p(u^@)Ed!7ZQFv_8N,,4C' );
define( 'NONCE_SALT', 'pr/:94.r*oY^M7%pQ@e/xWz9N%TOW|bfKgEQkCM/r/dk3w[%DIi<Y1Wv/P|*%|+7' );

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix = 'wp_';


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

