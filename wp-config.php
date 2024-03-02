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
define( 'DB_NAME', 'koukaki' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'Bahiya' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'Bahija6884' );

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
define( 'AUTH_KEY',         '8t1P8>^y11Wc{&MZoSEOHZ8{R/LM5pmeaH.`Awg#z>nln_*n~L9v;VJ~o7FS*!|b' );
define( 'SECURE_AUTH_KEY',  'yy+$mbw$1;pao0`&eCi&TkDJ(Q8|h{B|s~o=agGH?8$=~}s61zS#g?E5%utG!f}O' );
define( 'LOGGED_IN_KEY',    '%3_F/W(]PqV_MY4EuB+N5<):d,D VbE^wVh-:^ieks8m1f78~AQACJIpD`szG3)v' );
define( 'NONCE_KEY',        'lo6&!nAyS_j#A[ K&Z-J::k5J^R3c-Y#P`|[0i#xJG%d*5?d[0]TXHWb5u=b|Vyx' );
define( 'AUTH_SALT',        '7P]Gd!A{qFOr|;TjOYu1{LUJbi^ $PdDrno+w0*`S;gk.uf}n]WFP/{>)pf6_KK/' );
define( 'SECURE_AUTH_SALT', 'Wp{s]aW=%>O_iG&Q#YD>K+D$xT}Z=`m,rqo,ifU{(CjQV!O}Kb{|r0ud_jcM^Q9U' );
define( 'LOGGED_IN_SALT',   '%l:G3Cy#40&Zh7e^&!JyjLTdGmLQAm>pUlFZ71UfOHiMUQ+w~*eauu{|53=7ULu>' );
define( 'NONCE_SALT',       '*Sgu.DH4}}3^o{j,jix9G4foD{N+/@M>Ifsgb!,c$E^Y2pP5mMAj VXTlRwl!9hb' );
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
