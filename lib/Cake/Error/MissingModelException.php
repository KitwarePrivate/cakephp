<?php
namespace Cake\Error;

/**
 * Exception raised when a Model could not be found.
 *
 * @package       Cake.Error
 */
class MissingModelException extends CakeException {

	protected $_messageTemplate = 'Model %s could not be found.';

}
