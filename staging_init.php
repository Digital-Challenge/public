<?php
// PHP-level suppression
ini_set('display_errors', '0');
ini_set('log_errors', '0');
error_reporting(0);


// WordPress debug constants
define('WP_DEBUG', false);
define('WP_DEBUG_DISPLAY', false);
define('WP_DEBUG_LOG', true);

require_once __DIR__ . '/wp-load.php';

// Your logic
add_option('pextest1', 'ok');
echo 'WP: Option added' . PHP_EOL;
