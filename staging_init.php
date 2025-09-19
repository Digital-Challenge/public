<?php
ini_set('display_errors', '1');
ini_set('log_errors', '1');
error_reporting(E_ERROR | E_CORE_ERROR | E_COMPILE_ERROR | E_USER_ERROR | E_RECOVERABLE_ERROR);


define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);

require_once __DIR__ . '/wp-load.php';

add_option('pextest1', 'ok');