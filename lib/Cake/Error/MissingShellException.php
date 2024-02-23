<?php
namespace Cake\Error;

/**
 * Used when a shell cannot be found.
 *
 * @package       Cake.Error
 */
class MissingShellException extends CakeException {

	protected $_messageTemplate = 'Shell class %s could not be found.';

}
