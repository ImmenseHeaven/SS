<?php
/*
Plugin Name: Disable Gutenberg
Plugin URI: https://www.supercluster.io
Description: Completely disables the Gutenberg block editor and enables the classic WordPress post editor (TinyMCE aka WYSIWYG) for lighter coding and simplicity.
Version: 1.1.0
Author: SuperCluster
Author URI: https://www.supercluster.io
License: GPLv3
License URI: https://www.gnu.org/licenses/gpl-3.0.html
PBP Version: 1.2.0
WC requires at least: 3.3
WC tested up to: 3.5
Prefix: DSBGTB
*/

// Plugin namespace
namespace SuperCluster\DisableGutenberg;

// Plugin constants
const FILE = __FILE__;
const PREFIX = 'dsbgtb';
const VERSION = '1.1.0';
const REPO = 'supercluster/disable-gutenberg';

// Boot
require_once dirname(FILE).'/helpers/boot.php';
Helpers\Boot::instance(FILE);