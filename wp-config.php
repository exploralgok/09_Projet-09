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
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'p9' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

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
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '_eyPgz}{snTAvO=3dse!~dG#Ke#.>UpGIrCIt>/K04|Zb<MH!N8rY}D^@g~z>qIV' );
define( 'SECURE_AUTH_KEY',  'APz-TLa5Vpy$^|ug`8^jqr`Y`*+@oJAU/[/:!5`3RRlg&U,j9[&-~Y>p.Y,#otCs' );
define( 'LOGGED_IN_KEY',    'q=e1|Pw++Z~Q )6Ib/&@?Y4!j:{w{bZpF^ePZC#dL;@4GdOpf@|`>`zZrw/2[dk#' );
define( 'NONCE_KEY',        'LVT?%/$f0su;c0t.wP]_,:,|0Q20qkexu:&sF_uIKoqtycL*T++cqxX?Qk1$mi/X' );
define( 'AUTH_SALT',        'j;mJ(kGT;N;?Q.8dqyXgB!#V[@!oqilmTb!:E#D.1nP,70+]4#{WLZu#0VbUqy^=' );
define( 'SECURE_AUTH_SALT', 'To9`3+c]6$E[/3qM^>,+u5%_P9pa)]BnXUfM&6tka:)^ap)t<s-n}q9UmnD>2-.V' );
define( 'LOGGED_IN_SALT',   'm;)tb=!]nc|!$5=6iYDI}y?-T|K_!mAPYvgE@cc9k9`Y=4W(7v@fsb6<c%uU-|2a' );
define( 'NONCE_SALT',       '(#skOipcUDowFSGw4ej:-Nr (9b}*;E!xfC7Dk|U#YWN71m@r(Ez[kA*V}Vl}o,Y' );
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
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
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
