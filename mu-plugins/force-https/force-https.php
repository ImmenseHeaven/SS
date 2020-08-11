<?php
/*
Plugin Name: Force HTTPS
Plugin URI: https://www.supercluster.io
Description: Redirects all HTTP requests to the HTTPS version and fixes insecure links and resources without altering the database (also works with CloudFlare).
Version: 1.4.0
Author: SuperCluster
Author URI: https://www.supercluster.io
License: GPLv3
License URI: https://www.gnu.org/licenses/gpl-3.0.html
PBP Version: 1.2.0
WC requires at least: 3.3
WC tested up to: 3.5
Prefix: FHTTPS
*/

// Plugin namespace
namespace SuperCluster\ForceHTTPS;

// Plugin constants
const FILE = __FILE__;
const PREFIX = 'fhttps';
const VERSION = '1.4.0';
const REPO = 'supercluster/force-https';

// Boot
require_once dirname(FILE).'/helpers/boot.php';
Helpers\Boot::instance(FILE);