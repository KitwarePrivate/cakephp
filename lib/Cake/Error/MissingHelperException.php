<?php
namespace Cake\Error;

/**
 * Used when a helper cannot be found.
 *
 * @package       Cake.Error
 */
class MissingHelperException extends CakeException {

	protected $_messageTemplate = 'Helper class %s could not be found.';

}
