<?php
/*
Plugin Name: Disable Embeds
Plugin URI: https://wordpress.org/plugins/disable-embeds-supercluster/
Description: Disables both external and internal embedding functions to avoid slow page render, instability and SEO issues, and to improve overall loading speed.
Version: 1.3.0
Author: SuperCluster
Author URI: https://www.supercluster.io
License: GPLv3
License URI: http://www.gnu.org/licenses/gpl-3.0.html
PBP Version: 1.1.0
WC requires at least: 3.3
WC tested up to: 3.5
Prefix: DSBEBD
*/

// Plugin namespace
namespace SuperCluster\DisableEmbeds;

// Plugin constants
const FILE = __FILE__;
const PREFIX = 'dsbebd';
const VERSION = '1.3.0';

// Boot
require_once dirname(FILE).'/helpers/boot.php';
Helpers\Boot::instance(FILE);