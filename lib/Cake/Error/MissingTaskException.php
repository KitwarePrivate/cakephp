<?php
namespace Cake\Error;

/**
 * Used when a Task cannot be found.
 *
 * @package       Cake.Error
 */
class MissingTaskException extends CakeException {

	protected $_messageTemplate = 'Task class %s could not be found.';

}
