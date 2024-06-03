<?php
namespace Cake\Error;

/**
 * Used when a view file cannot be found.
 *
 * @package       Cake.Error
 */
class MissingViewException extends CakeException {

	protected $_messageTemplate = 'View file "%s" is missing.';

}
