<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa user o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações
// com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'mjvinnovation');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'N]CW2uq!J3YyxNw!d#<&%45FkZE#bo|Sg.[5Z0JCB0`~(~XJ,#8+-:bNtE(VaGM,');
define('SECURE_AUTH_KEY',  '_{eyB`+[<-}ybG!V+l;5D!Jl#u@fv{G6(mj}7}@;C-$l?O#PMB<s<V<O&>lCAN+[');
define('LOGGED_IN_KEY',    '2nx`V{bawp-dS@=BPdp3|U`|hf_ z@]3 Q]iW@Nf5C=O2NJU;Jvs9Hsaw%4$Qt;w');
define('NONCE_KEY',        '[?Cg7Jc:LsP}Z@$y=aP[CoW HFB||1AU}cmc&kr6pKv`$@l6K?-H]X9`1-+cj)~N');
define('AUTH_SALT',        '?~M8ID;m7}nVH0L0R5ndf79IS([W7`up%_L.+N,cWUr~-s{%]Ja k?}u[7]UvNI3');
define('SECURE_AUTH_SALT', '_r<L2|y+g(y:av;IhYtpU.`Yc*5vOWTzFlHE24?1d;?%3sO`x{kh,*)/:P[=hd>e');
define('LOGGED_IN_SALT',   'O*`Lz|udN/qQSU,w=<o#k!Q#PTA[]_:.[v%.Cg(}stFLyr`Kp$OFsN^>$qZamqO%');
define('NONCE_SALT',       'Zk_VawPBTC8tKIb+!krTogI=KZ.X_pXy=o=i]?g*; %HlVW!vAhWt86cJd4rsedj');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * para cada um um único prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'mjv_';

/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
