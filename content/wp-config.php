<?php
/**
 * Baskonfiguration f�r WordPress.
 *
 * Denna fil inneh�ller f�ljande konfigurationer: Inst�llningar f�r MySQL,
 * Tabellprefix, S�kerhetsnycklar, WordPress-spr�k, och ABSPATH.
 * Mer information p� {@link http://codex.wordpress.org/Editing_wp-config.php 
 * Editing wp-config.php}. MySQL-uppgifter f�r du fr�n ditt webbhotell.
 *
 * Denna fil anv�nds av wp-config.php-genereringsskript under installationen.
 * Du beh�ver inte anv�nda webbplatsen, du kan kopiera denna fil direkt till
 * "wp-config.php" och fylla i v�rdena.
 *
 * @package WordPress
 */

// ** MySQL-inst�llningar - MySQL-uppgifter f�r du fr�n ditt webbhotell ** //
/** Namnet p� databasen du vill anv�nda f�r WordPress */
define('DB_NAME', 'gruppterapi');

/** MySQL-databasens anv�ndarnamn */
define('DB_USER', 'gruppterapi');

/** MySQL-databasens l�senord */
define('DB_PASSWORD', 'iparetppurg');

/** MySQL-server */
define('DB_HOST', 'localhost');

/** Teckenkodning f�r tabellerna i databasen. */
define('DB_CHARSET', 'utf8');

/** Kollationeringstyp f�r databasen. �ndra inte om du �r os�ker. */
define('DB_COLLATE', '');

/**#@+
 * Unika autentiseringsnycklar och salter.
 *
 * �ndra dessa till unika fraser!
 * Du kan generera nycklar med {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Du kan n�r som helst �ndra dessa nycklar f�r att g�ra aktiva cookies obrukbara, vilket tvingar alla anv�ndare att logga in p� nytt.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'T+s]@YhTJ0?v7ri#8(b+O;T,1O:RP+e8%D,&P:Eui*[2dE<z4s/}OQO>)078^N=~');
define('SECURE_AUTH_KEY',  '8W)J2faDg)?nqX6KZ_6%>RC1l;$n})~ge+<hVwf!v_Ck.v`j2(U>7xVi/{) >8i6');
define('LOGGED_IN_KEY',    'v=nw0ZYo,Ua;{Dz|=jzb6.#`]=;Nx>+jFFhq}4NJ?pg&3-s~&*Zq>3_C~?Mxr9a>');
define('NONCE_KEY',        ']UK4c#6^0A@KS+}shuF0Q>n,bZ-RAMtQ}dRMQ4`BnyU(p5a>u5Q|[3+-}1g*a`#o');
define('AUTH_SALT',        'y[^lf%9?02Pgbd-/cuHYq%e)L*#-XVr09G~:`$`+u9Z&#Z/4;=2lXFX|RT+.^z(U');
define('SECURE_AUTH_SALT', 'd~>tt`2 n/%:oJc{f#YNc :@{9@fDPma5[cNfs+uX#bp|+.{2T+3vcwws?c;:.qu');
define('LOGGED_IN_SALT',   '#@T##)1%UOu@b1:s*BK=)lcFdcM&^.o#G|h P=@COtzrC*^24|Z7Ln1b6Cn[Bi~*');
define('NONCE_SALT',       's--xu~T}k6ZnLz:4RWgm=7;NJhQ?Q|Ei}]e!+Z)iiWG=z<Jx~Ux-[G{~<IX]L9]k');

/**#@-*/

/**
 * Tabellprefix f�r WordPress Databasen.
 *
 * Du kan ha flera installationer i samma databas om du ger varje installation ett unikt
 * prefix. Endast siffror, bokst�ver och understreck!
 */
$table_prefix  = 'wp_';

/**
 * WordPress-spr�k, f�rinst�llt f�r svenska.
 *
 * Du kan �ndra detta f�r att �ndra spr�k f�r WordPress.  En motsvarande .mo-fil
 * f�r det valda spr�ket m�ste finnas i wp-content/languages. Exempel, l�gg till
 * sv_SE.mo i wp-content/languages och ange WPLANG till 'sv_SE' f�r att f� sidan
 * p� svenska.
 */
define('WPLANG', 'sv_SE');

/** 
 * F�r utvecklare: WordPress fels�kningsl�ge. 
 * 
 * �ndra detta till true f�r att aktivera meddelanden under utveckling. 
 * Det �r rekommderat att man som till�ggsskapare och temaskapare anv�nder WP_DEBUG 
 * i sin utvecklingsmilj�. 
 */ 
define('WP_DEBUG', false);

/* Det var allt, sluta redigera h�r! Blogga p�. */

/** Absoluta s�kv�g till WordPress-katalogen. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Anger WordPress-v�rden och inkluderade filer. */
require_once(ABSPATH . 'wp-settings.php');
