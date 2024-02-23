<?php
namespace Cake\Error;

/**
 * Exception raised when a Dispatcher filter could not be found
 *
 * @package       Cake.Error
 */
class MissingDispatcherFilterException extends CakeException {

	protected $_messageTemplate = 'Dispatcher filter %s could not be found.';

}

