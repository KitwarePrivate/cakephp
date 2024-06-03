<?php
namespace Cake\Error;

/**
 * Exception raised when a plugin could not be found
 *
 * @package       Cake.Error
 */
class MissingPluginException extends CakeException {

	protected $_messageTemplate = 'Plugin %s could not be found.';

}
