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
define( 'DB_NAME', 'shopshop' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'kImrEm}}IN_F@W])ZhyS2wr51j>N5nWhCP_3aRM#T&&ezJ|LV*1;&kwExX~Of*Mt' );
define( 'SECURE_AUTH_KEY',  'hvY=aQn)o[$%rU3AY@KKY/$MyZ=d]LYvv9ZL%D[==-Qde+/[R9~K1q&p$W-P0E9F' );
define( 'LOGGED_IN_KEY',    'Jw Aj(a!Q(u8<|F|~MLY40~]g-X(PXF8L&<[AM@/sn4vTCe~B>i=CrV;.33Q}vQR' );
define( 'NONCE_KEY',        '7 M-gy6={o=XMYk]QKF=h!0F9uHR`P87K=P:_!4SU4>a(Gz-rLP ,(Uy>*815{F2' );
define( 'AUTH_SALT',        '@/8;1?Bz6$P{On5rNvv9Vm:g,yDX`W)b!itA%ClR:0(RdHqCRn}Vcjy#n18Ivdbi' );
define( 'SECURE_AUTH_SALT', '{NO^(4h~q_X1dr.y$<l:deglm1<5w=W[wcpLMhYVn>H <KneUN,fF4/|XHvN|pKG' );
define( 'LOGGED_IN_SALT',   'OqSo(^4z^AGz}4nmkJY|Wv[SNftNWG{IQE{4sq(Y|V4q&C*?)Qu0<zem. UUw|nA' );
define( 'NONCE_SALT',       'H;/xnEx4BCImsgc=]iA}GM3WW}IP}9^=>O#6*qU9>+r_4{:K=cd8*D_t~*f3Lc&?' );
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
 * Il est fortemment recommandé que les développeurs d’extensions et
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
