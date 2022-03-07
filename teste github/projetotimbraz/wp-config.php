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
define( 'DB_NAME', 'projetotimbraz' );

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
define( 'AUTH_KEY',         'j7*r!iL.ty<Yk-|r51Ubg9 B{APLWn5E$.g18xr?.rc!)v@kN<QL<##SbxF2&jp ' );
define( 'SECURE_AUTH_KEY',  'pfgc`{Nf!}M<p^(*x}T^qDb.7AAy}?u_!EBm?,Mcda0wz4R.nj-s}LtD]gWkT=%F' );
define( 'LOGGED_IN_KEY',    '!)gPQ7Ujx]DuS;h9;,B:6R~K~zzZaaK:)]i0k$`ea^%r?71A9ufLD_2,yh~|UIjp' );
define( 'NONCE_KEY',        '8D,Ct$f_UaPhcspEx)1g_fp8+zTsxTFp_Nr+]OEFwL71%6`fOmG:0Z#{]nepZa J' );
define( 'AUTH_SALT',        '~l`w7q+tAh)u j!VQn(&]/ hBIboCLt?s#mNE(1<XngvfX+t06bJ#2,RE)),6Mp6' );
define( 'SECURE_AUTH_SALT', '0y|*8G3HtJRUiBKbp//N.[AO1Q/FY)Xc]E#^.7*P|!_un?yh@$$4W^x+>N{]2sUB' );
define( 'LOGGED_IN_SALT',   'ftzG`4=6*RG3|D0V6bAXe L&)JyKey;+y>J/-vgj=uW:T.b^3[99_W:Q%nQA|8BE' );
define( 'NONCE_SALT',       '.et.pO:I$l/;6 ,>SLIm/:M4DQgA+c:,77O~gM4YUKNNRmql06B1F?y=9Y`P3#P>' );

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
