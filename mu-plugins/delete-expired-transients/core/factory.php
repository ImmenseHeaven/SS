<?php

// Subpackage namespace
namespace SuperCluster\DeleteExpiredTransients\Core;

// Aliased namespaces
use \SuperCluster\DeleteExpiredTransients\Transients;
use \SuperCluster\DeleteExpiredTransients\Helpers;

/**
 * Object Factory class
 *
 * @package Delete Expired Transients
 * @subpackage Core
 */
class Factory extends Helpers\Factory {



	/**
	 * Actions object
	 */
	protected function createCron() {
		return new Transients\Cron($this, $this->plugin);
	}


	/**
	 * Filters object
	 */
	protected function createTransients() {
		return new Transients\Transients;
	}



}