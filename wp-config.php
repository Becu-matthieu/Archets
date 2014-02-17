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
define('DB_NAME', 'WPbecu');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'becu');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'becu');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'info2');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '@<x%I!!aC@,A14)E6uzz)#@1ij,O@k~MW|4 +H;>5W8hO,5LbHsQP#iM3=asnw86');
define('SECURE_AUTH_KEY',  '`/EJ]j$InX.<]__@[0]U5F-R%4<<)b!d%U1}$U|*TuzM&osYnJz:c0 HU,^8Hlk9');
define('LOGGED_IN_KEY',    '/$<]:W}RUcf3{&F[QDHuH_<`PNehUR/(!iJv#(:Rm28JDC:<MuH!@>d0J`UVh^nC');
define('NONCE_KEY',        ':byM;@&I=n+#!+O3Dvq)~ig.ugHE67>_s(HSO2:eUa6bJueOaH?E<pPHH{RFKxck');
define('AUTH_SALT',        ']/o5|@jIR.h^R$oS-BrP]!)pNY]U2.%)<(0E6l}5pCtw;PB<N8zo>pa4VJBi0EsP');
define('SECURE_AUTH_SALT', '/7*^-aGM@N%28 tATgg#1Pc;s#uO0D6]hE[yu<)@_N|9.Q2h?Zh9jadYUSfn ~R4');
define('LOGGED_IN_SALT',   'cVggJe/MGvp<GMh%{vVg=x2{n&sd^AwL5FmSS ^*EW5]X @pv~hs-@x8)w:J$ OT');
define('NONCE_SALT',       'OPJ=Ts_c8RbW6j%<#8#n]Q*QU)&td!zmkN;a%|[HR7I G=#3JtnpvJS5DAgx,?oU');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique. 
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'wp_archets';

/**
 * Langue de localisation de WordPress, par défaut en Anglais.
 *
 * Modifiez cette valeur pour localiser WordPress. Un fichier MO correspondant
 * au langage choisi doit être installé dans le dossier wp-content/languages.
 * Par exemple, pour mettre en place une traduction française, mettez le fichier
 * fr_FR.mo dans wp-content/languages, et réglez l'option ci-dessous à "fr_FR".
 */
define('WPLANG', 'fr_FR');

/** 
 * Pour les développeurs : le mode deboguage de WordPress.
 * 
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de 
 * développement.
 */ 
define('WP_DEBUG', false); 

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
