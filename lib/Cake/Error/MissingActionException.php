<?php
namespace Cake\Error;

/**
 * Missing Action exception - used when a controller action
 * cannot be found.
 *
 * @package       Cake.Error
 */
class MissingActionException extends CakeException {

	protected $_messageTemplate = 'Action %s::%s() could not be found.';

//@codingStandardsIgnoreStart
	public function __construct($message, $code = 404) {
		parent::__construct($message, $code);
	}
//@codingStandardsIgnoreEnd

}
