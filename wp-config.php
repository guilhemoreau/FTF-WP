<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'wp_ftf');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N'y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'nUXlZI@Ch}Q*dty2):F]W)yZ~YoNge}.v@7:sHBm6d/D4}rzN8iG9NGhT1u)Mu01');
define('SECURE_AUTH_KEY',  '`?GR2j-evV.4,YYpy4M~&3Wu20M.)LJ/GZg/$KEcyWu0]SJ$82>[(E#+gW<wI2 *');
define('LOGGED_IN_KEY',    ']8A@EEjL>a$aAQ{Hda7}iwD_i3X`L[DNy[ktD2HN$gjQQq0f]RMxDq9!ek<(]z-H');
define('NONCE_KEY',        'n0q6C}]|v]Akop|`~t <:{!X&P-mYrOQ7Q;B#+2L+o]Sg6m~P8G|IRpK9~O1m#5N');
define('AUTH_SALT',        'x9~sSdqw4hO6g)`g1%6$YzOX>RiMT`3rCMfvL+(v4 Cv^ZZd8m^/rc.]S2HO~c*~');
define('SECURE_AUTH_SALT', '1)#/pqql GoN4ZGSjKWS4pm,Ke%DugtC9]hM4ma}.QmJA8KAj},40x*:~fA_DZ?D');
define('LOGGED_IN_SALT',   'sbbLqM|v>Gu4wnbLdGId)eAhTJyX?Qp4[Ury[oO6A `f5 |qA?#+l9wKF!);6|.,');
define('NONCE_SALT',       '`1cxYM7mh!iUwzC|PrNUk2f}kcL7|3+hTKAs|%jM}_#~yyVN>g(TvaBO#7qqpb(r');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'wp_ftf_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d'information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 * 
 * @link https://codex.wordpress.org/Debugging_in_WordPress 
 */
define('WP_DEBUG', false);

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');