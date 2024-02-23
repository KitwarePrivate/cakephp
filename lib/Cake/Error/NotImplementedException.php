<?php
namespace Cake\Error;

/**
 * Not Implemented Exception - used when an API method is not implemented
 *
 * @package       Cake.Error
 */
class NotImplementedException extends CakeException {

	protected $_messageTemplate = '%s is not implemented.';

//@codingStandardsIgnoreStart
	public function __construct($message, $code = 501) {
		parent::__construct($message, $code);
	}
//@codingStandardsIgnoreEnd

}
