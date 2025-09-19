<?php
// PHP-level suppression
ini_set('display_errors', '0');
ini_set('log_errors', '1');
error_reporting(E_ERROR | E_CORE_ERROR | E_COMPILE_ERROR | E_USER_ERROR | E_RECOVERABLE_ERROR);

// WordPress debug constants
define('WP_DEBUG', false);
define('WP_DEBUG_DISPLAY', false);
define('WP_DEBUG_LOG', true);

require_once __DIR__ . '/wp-load.php';

// Your logic
add_option('pextest1', 'ok');
echo 'WP: Option added' . PHP_EOL;
