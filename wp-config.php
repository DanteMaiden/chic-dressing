<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'C:\wamp64\www\Chic-Dressing\wp-content\plugins\wp-super-cache/' );
define( 'DB_NAME', 'chic_dressing' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Q=gw9,v*6>T~1To.nyR.f)83E+[f&L6nd|QeKw2[vs<5(f/J43KB=hVA+*YYR^Wq' );
define( 'SECURE_AUTH_KEY',  'W6(Dz;^cu|Py%K:s~D0#^<I@JK,9?C>ge>&&z5yXsX~O0EE!reg=[TCt+m Z:E$l' );
define( 'LOGGED_IN_KEY',    'TQ5yAzBwm51Xc-LG$PQUBiNZn>+oD@P3/ZY*vSdERP:.}(oVUB=%9?] ,9|eQJe/' );
define( 'NONCE_KEY',        ' jZkGclU@`oXYgyUp+~nW@Dn5/gnW-gwcAo jt}(1wBbl|U5Jf]XB;SHpsH7Z63@' );
define( 'AUTH_SALT',        'R^./.3027qzD=HhOfv4(of |VZti7~c-g_`*wB4e[S<`Kv(Z~uRXhFkS8<5u[u:F' );
define( 'SECURE_AUTH_SALT', '3/kFc[NJdS{x.Ia;w9>Ow:?K;v&11v!5w,+R]5OGh>peLCWQ:V+sc<0pE4fr$HiB' );
define( 'LOGGED_IN_SALT',   'pdo|btJ1KoY!#G4<7=g}l9t)FpEPV`&~KZsZhlgxx)L|u8P??V5AbT32nZs=D~JG' );
define( 'NONCE_SALT',       ';3x;D{UM72qEU+pq|.i]{C:^!QvE,MV1Z)G!}i9<jHvFsLMkc2T~Bdg|VV$$ZsZg' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
