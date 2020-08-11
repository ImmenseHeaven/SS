<?php

// Subpackage namespace
namespace SuperCluster\LimitHeartbeat\Core;

// Aliased namespaces
use \SuperCluster\LimitHeartbeat\Helpers;
use \SuperCluster\LimitHeartbeat\Heartbeat;

/**
 * Object Factory class
 *
 * @package Limit Heartbeat
 * @subpackage Core
 */
class Factory extends Helpers\Factory {



	/**
	 * Disabler object instance
	 */
	protected function createDisabler() {
		return new Heartbeat\Disabler($this->context());
	}



	/**
	 * Setup object instance
	 */
	protected function createSetup() {
		return new Heartbeat\Setup($this->context());
	}



}