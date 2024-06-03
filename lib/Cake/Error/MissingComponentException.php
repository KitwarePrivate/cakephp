<?php
namespace Cake\Error;

/**
 * Used when a component cannot be found.
 *
 * @package       Cake.Error
 */
class MissingComponentException extends CakeException {

	protected $_messageTemplate = 'Component class %s could not be found.';

}
