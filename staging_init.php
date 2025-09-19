<?php
// PHP-level suppression
ini_set('display_errors', '0');
ini_set('log_errors', '0');
error_reporting(0);


// WordPress debug constants
define('WP_DEBUG', true);
define('WP_DEBUG_DISPLAY', false);
define('WP_DEBUG_LOG', true);

require_once __DIR__ . '/wp-load.php';

$functions = [
	'dc_staging_enable_coming_soon',
];


// Your logic
echo "\n";

foreach ($functions as $function) {
	ob_start();

	try {
		call_user_func( $function );
	} catch ( \Throwable $e ) {
		echo "Exception in {$function}: {$e->getMessage()}\nTrace:\n{$e->getTraceAsString()}";
	}

	$echo = ob_get_clean();
	echo "-> WP: $echo";
	echo "\n";
	echo "\n";
}

function dc_staging_enable_coming_soon(){

	// Fully qualified class name
	$fqcn = '\Automattic\WooCommerce\Admin\API\LaunchYourStore';
	$method = 'initialize_coming_soon';

	if ( !class_exists( $fqcn ) || !method_exists( $fqcn , $method ) ) {
		echo "Coming Soon not enabled. Use plugin or htaccess for this scope";
		return;
	}

	$return1 = update_option( 'woocommerce_coming_soon', 'yes' );
	$return2 = update_option( 'woocommerce_store_pages_only', 'no' );

	if ( $return1 && $return2 ) {
		echo "Coming Soon initialized successfully";
	} else {
		echo "Coming Soon not enabled. Use plugin or htaccess for this scope";
	}
}

