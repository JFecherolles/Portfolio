<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'portfolio' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'portfolio' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'portfolio' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'hd3V|0Vw%n6V,?4)c9NVAKE8::=y{Ty+[Nk/#qfaQ?,hOg;?. [`BQ:G_@wr79I%' );
define( 'SECURE_AUTH_KEY',  'OHr<AY(GaF[siUNa1n}`8b[uMt%6)sjUJ7d(n8)_%C~P4n!O%wOm>7HC*yy2sD/o' );
define( 'LOGGED_IN_KEY',    '!R}O]r_` Cd`:+fQOJHU_Fu)Jt{`xXMC}jhIHKEC?6aAp]ygNnN<b>EG~/fc,JJ*' );
define( 'NONCE_KEY',        'Yk?<zpZ,o%hfhkJh)C0B?u6Dcn>v@J5n/~Z-g9oIVKGTg=S;HTvC.-[!Uv?WuC4a' );
define( 'AUTH_SALT',        'eepp(,|e|_@cmsyMeped*a5YPLBCtPIA_9k?ZHqr-UT/,H9_~H2~[1k{9n.U.@z ' );
define( 'SECURE_AUTH_SALT', 'qYV_vLQa+[Y)r/dKN*)#AD!3>@$HZ/QQK@b[;1ijgcO8Mu(++yuL2FiL(GF^(2E!' );
define( 'LOGGED_IN_SALT',   'r)5Nn=:Pc_3Ms]T0F8.B_?RRR*RX5L:%6|D:%%K5Ca$4blbQg`Qc(qyxgil5Y09#' );
define( 'NONCE_SALT',       '%RN_8W5XLdE(kj=!U0jS305#ZaYV$wI^,!aA(H)lDuG[r/`5iC`WJ05wjc<cygt[' );
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
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );

define('FS_METHOD', 'direct');
