<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'cursodewp' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Xb6hMx]()($fvPEUCf]6:b-18ecN{[j][c?>&sl3^ #A^Yjlw]0<at%d19ws)x`H' );
define( 'SECURE_AUTH_KEY',  'snaf<=+653f]NU[p`y@e:- I3FV6k]|jpPyw#rmr?Jf9r},_?f!QnF(i{<VYR,Pq' );
define( 'LOGGED_IN_KEY',    '?%mg4gLi/_tJ1i]UJ2PM^Ecr2BsVrD,6#}.A(wV.n|$LdJZa!JCP!ahG~s)1TpDq' );
define( 'NONCE_KEY',        'Gh11+-nrgiog90*O)2Gs%4i$!TcG|BFol3<5O`=G]e,&N}u >Ig1PaONaclOu>&>' );
define( 'AUTH_SALT',        'WnBD2NU$}kl?XzuJ7R)k2A*_OG5Ar`EV]CBHqP^mnv.[fhu$7K%TVw5kFj>]5tT7' );
define( 'SECURE_AUTH_SALT', 'z?X#@SG2QNq)F2bkEujtjsp-g[K2fM]m5K>WzdgY/2qc${_Hf`|Fevk!4E%H+|k]' );
define( 'LOGGED_IN_SALT',   '8D (z)?&KT/,3Feb=j9$.R+k:(^Vtx+GQk4;%?:e0|<L&J2o]~^OR[[-6 V]6o0k' );
define( 'NONCE_SALT',       'Q?DB[4LC+@S{W.Y#0Af}lb5pFjS}RW-=77eQ$UN(|Gw_aK3LSFt%ukzTH#7%4oQp' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'cev_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
