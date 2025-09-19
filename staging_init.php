<?php
ini_set('display_errors', '0');

define('WP_DEBUG', true);
define('WP_DEBUG_DISPLAY', false);
define('WP_DEBUG_LOG', true);

require_once __DIR__ . '/wp-load.php';

add_option('pextest1', 'ok');
echo 'WP: Option added';