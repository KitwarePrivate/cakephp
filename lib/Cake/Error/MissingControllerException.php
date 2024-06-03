<?php
namespace Cake\Error;

/**
 * Missing Controller exception - used when a controller
 * cannot be found.
 *
 * @package       Cake.Error
 */
class MissingControllerException extends CakeException {

	protected $_messageTemplate = 'Controller class %s could not be found.';

//@codingStandardsIgnoreStart
	public function __construct($message, $code = 404) {
		parent::__construct($message, $code);
	}
//@codingStandardsIgnoreEnd

}
