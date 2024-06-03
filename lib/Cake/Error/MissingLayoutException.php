<?php
namespace Cake\Error;

/**
 * Used when a layout file cannot be found.
 *
 * @package       Cake.Error
 */
class MissingLayoutException extends CakeException {

	protected $_messageTemplate = 'Layout file "%s" is missing.';

}
