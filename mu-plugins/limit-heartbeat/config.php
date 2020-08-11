<?php

return [



	/**
	 * Boot check PHP configuration
	 */
	'boot-check-php' => [

		/**
		 * Enables the PHP validation
		 */
		'enabled' => true,

		/**
		 * PHP minimum version
		 * Uses version_compare function: http://php.net/manual/en/function.version-compare.php
		 */
		'version-required' => '5.6.0',

		/**
		 * Aborts the plugin activation on WP sandbox generating an error output message
		 */
		'prevent-activation' => false,

		/**
		 * PHP error message
		 *
		 * Used to trigger a user error: It is limited to 1024 bytes in length. Any additional characters beyond 1024 bytes will be truncated
		 * (from PHP documentation: http://php.net/manual/en/function.trigger-error.php)
		 *
		 * Supported variables: %php_current_version% and %php_version_required%
		 */
		'version-message' => '<strong>%plugin%</strong> does not support your outdated PHP version (%php_current_version%). Please update your PHP to at least version 7.0',

	], // End of boot check PHP



	/**
	 * Admin Notices configuration
	 */
	'admin-notices' => [

		/**
		 * Enables the Admin Notices execution
		 */
		'enabled' => false,

		/**
		 * Plugin suggestions
		 * The %plugin% mark reflects the plugin name
		 */
		'days_dismissing_suggestions' 	=> 180, // 6 months reappear
		'suggestions_message' 			=> '%plugin% recommends the following free plugins:',
		'suggestions'					=> [

			'disable-wc-status-supercluster' => [
				'name' => 'Disable WooCommerce Status',
				'desc' => 'Completely disables the WooCommerce Status widget in the WP Admin dashboard to greatly improve backend performance on high traffic WooCommerce shops.',
				'filename' => 'disable-woocommerce-status.php',
			],

			'disable-wc-styles-supercluster' => [
				'name' => 'Disable WooCommerce Styles',
				'desc' => 'Completely disables all of the CSS stylesheets that are loaded by WooCommerce in order that styling can be better managed by a single style.css file.',
				'filename' => 'disable-woocommerce-styles.php',
			],

			'delete-expired-transients-supercluster' => [
				'name' => 'Delete Expired Transients',
				'desc' => 'Deletes all expired transients upon activation and on a daily basis thereafter via WP Cron to maintain a cleaner database and improve performance.',
				'filename' => 'delete-expired-transients.php',
			],

			'disable-jq-migrate-supercluster' => [
				'name' => 'Disable jQuery Migrate',
				'desc' => 'Easily prevent the jQuery migrate script that is included with WordPress core from being loaded to slim down source code (for advanced users only).',
				'filename' => 'disable-jquery-migrate.php',
			],

			'remove-query-strings-supercluster' => [
				'name' => 'Remove Query Strings',
				'desc' => 'Removes all query strings from static resources meaning that proxy servers and beyond can better cache your site content (plus, better SEO scores).',
				'filename' => 'remove-query-strings.php',
			],

		], // End of suggestions

	], // End of admin-notices



	/**
	 * Admin Notices configuration for WordPress MultiSite
	 */
	'admin-notices-ms' => [

		/**
		 * Enables the Admin Notices execution
		 */
		'enabled' => true,

		/**
		 * Disables plugin execution on detected multisited installs
		 */
		'abort-on-multisite' => false,

		/**
		 * Custom message
		 * The %plugin% mark reflects the plugin name
		 */
		'message' => 'For performance reasons, <strong>%plugin%</strong> does not support Multisite.',

	], // End of admin-notices-ms



]; // End of main array
