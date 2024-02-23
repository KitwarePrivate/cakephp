<?php
namespace Cake\Error;

/**
 * Exception raised when a test loader could not be found
 *
 * @package       Cake.Error
 */
class MissingTestLoaderException extends CakeException {

	protected $_messageTemplate = 'Test loader %s could not be found.';

}
