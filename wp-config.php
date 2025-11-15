<?php
define('DB_NAME', 'wordpress');
define('DB_USER', 'user');
define('DB_PASSWORD', 'password');
define('DB_HOST', 'db');
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');

define('AUTH_KEY',         '_nnE6OZA/0neEy+&DIqS|E2L+qCZ=kAWb.YHsa#Er+BJA5-H9[>z0[tYl#X;xXPW');
define('SECURE_AUTH_KEY',  '+3vts?x#O4 9vH0L7M:@h!S7)@E7eLx$4GKb44r[3B7*7<mP_wZ,hE]-#XfB{qyr');
define('LOGGED_IN_KEY',    'x++9/-Q*s1yUcr5{k^;-TtFc7L6]DsST#)c2wFU({LDnw4Z5Swn1l P<+--Z<$kq');
define('NONCE_KEY',        '@!0#sA~C-#bcTw3Y^<+7q%T!ppc-3^=>^q`-mgT{D+xE;<##+/zK8cmA|_f<p1-<');
define('AUTH_SALT',        'f,IIu/Sq.V22a_4-Q-r%o?x0!4>V~W3c<M@]LE3,^)th Mhkq/o/-*,Kv$[Hjub7');
define('SECURE_AUTH_SALT', ' $XSg8QK3o|J}.~ww>No`OiY) 3_~L5C}8m-lQSeWjJY#F[)_MgWI;3A)oon:rC=');
define('LOGGED_IN_SALT',   'f|4%8~9zBEfTe:6o&?GB~5.cEF*I|S;j2GNmQ69@0AKN9Y}>Id}Wzx]z4v}3zG ;');
define('NONCE_SALT',       ']aA#W+-4`j~mPf*9C%+3 MDt|%WwRrm7Gd|P16GNob4=w_@j-p3x(6%xa^KdV5,A');

$table_prefix = 'wp_';

define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', true);
@ini_set('display_errors', 0);

if (!defined('ABSPATH')) {
    define('ABSPATH', dirname(__FILE__) . '/');
}

require_once ABSPATH . 'wp-settings.php';
