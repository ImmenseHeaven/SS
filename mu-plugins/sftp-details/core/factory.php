<?php

// Subpackage namespace
namespace SuperCluster\SFTPDetails\Core;

// Aliased namespaces
use \SuperCluster\SFTPDetails\Helpers;
use \SuperCluster\SFTPDetails\Admin;

/**
 * Object Factory class
 *
 * @package sFTP Details
 * @subpackage Core
 */
class Factory extends Helpers\Factory {



	/**
	 * Dashboard admin object instance
	 */
	protected function createDashboard() {
		return Admin\Dashboard::instance($this->plugin);
	}



	/**
	 * Create SFTP values object
	 */
	protected function createConstants() {
		return new Admin\Constants;
	}



}