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
define('DB_NAME', 'portfoliowp');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'ppe');

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
define('AUTH_KEY',         '+L)2yPB>J,EMJr9l%+C_4lC|f9@)>|MoN}~CQ&GDhF7GEOr*[R3?1EV#wJUlx?]A');
define('SECURE_AUTH_KEY',  'Ga~MH}6=RSu2w *;V!uZNEG?iX&pK4Wo2Z-m{;O~j6,j.-Ghry%v1l::1p$~@/Y*');
define('LOGGED_IN_KEY',    'ZFC*Lgi{d?`.,~;m{,YO-SwR3qf4a 8,,(}_-qV%@]]?x Qa;v78mp~!}wr|WArQ');
define('NONCE_KEY',        '+Rr@r{slOn5zqj0|vECV~.Zkl>kjR&-CHq~lMR%D+j$C3i(+>uA;e6/)Do>Uj>/O');
define('AUTH_SALT',        'e#o[? `Fu~PkUlBbx?>g_e%+i]y*{E*2.!fqOX{@?Ibi+b_tRLmFP :>dU$QUS |');
define('SECURE_AUTH_SALT', 'x,y M{Oc.-]M;Ww^Nz!V&Yt2>V#tVVChSVV5!%$/H.EVs.ahhBk/|jLge|~u<gvW');
define('LOGGED_IN_SALT',   'yH7Q5^RFGf3>5-8vp<t.t`vDtS!?$<FC7~|TqjhZS]*XTo*]Fp0^hR%X8tsw5-SY');
define('NONCE_SALT',       '.0xsnv>rMKAiI;~EzLAFZdR`DAeq_#^}wv{SN|!>_/y!BcOpZ9G4I8&L_,6ednS]');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'wp_';

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