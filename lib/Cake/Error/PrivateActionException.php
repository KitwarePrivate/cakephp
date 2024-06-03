<?php
namespace Cake\Error;

/**
 * Private Action exception - used when a controller action
 * starts with a  `_`.
 *
 * @package       Cake.Error
 */
class PrivateActionException extends CakeException {

	protected $_messageTemplate = 'Private Action %s::%s() is not directly accessible.';

//@codingStandardsIgnoreStart
	public function __construct($message, $code = 404, \Exception $previous = null) {
		parent::__construct($message, $code, $previous);
	}
//@codingStandardsIgnoreEnd

}
