<?php

return [



	/**
	 * Admin notices configuration
	 */
	'admin-notices' => [

		/**
		 * Plugin suggestions
		 * The %plugin% mark reflects the plugin name
		 */
		'days_dismissing_suggestions' 	=> 180, // 6 months reappear
		'suggestions_message' 			=> '%plugin% recommends the following free plugins:',
		'suggestions'					=> [

			'cf-supercluster' => [
				'name' => 'CloudFlare',
				'desc' => 'Easily connect your WordPress website to free optimization features from CloudFlare, including one-click options to purge cache and enable dev mode.',
				'filename' => 'cloudflare.php',
			],

			'force-https-supercluster' => [
				'name' => 'Force HTTPS',
				'desc' => 'Redirects all HTTP requests to the HTTPS version and fixes all insecure static resources without altering the database (also works with CloudFlare).',
				'filename' => 'force-https.php',
			],

			'server-status-supercluster' => [
				'name' => 'Server Status',
				'desc' => 'Useful statistics about the server OS, CPU, RAM, load average, memory usage, IP address, hostname, timezone, disk space, PHP, MySQL, caches, etc.',
				'filename' => 'server-status.php',
			],

			'custom-functions-supercluster' => [
				'name' => 'Custom Functions',
				'desc' => 'Enables the ability to input custom WordPress functions such as filters in a centralized place to avoid the dependence on a theme functions.php file.',
				'filename' => 'custom-functions.php',
			],

			'duplicate-post-supercluster' => [
				'name' => 'Duplicate Post',
				'desc' => 'Easily duplicate (clone) any post, custom post, or page which are then saved in Draft mode, saving you tons of time and headache (no settings page).',
				'filename' => 'duplicate-post.php',
			],

		], // End of suggestions

	], // End of admin-notices



	'admin-notices-ms' => [

		/**
		 * Custom message
		 * The %plugin% mark reflects the plugin name
		 */
		'message' => 'Sorry! For performance reasons, WordPress Multisite is not supported by <strong>%plugin%</strong>.',

	], // End of admin-notices-ms



]; // End of main array
