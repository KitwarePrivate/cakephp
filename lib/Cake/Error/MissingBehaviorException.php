<?php
namespace Cake\Error;

/**
 * Used when a behavior cannot be found.
 *
 * @package       Cake.Error
 */
class MissingBehaviorException extends CakeException {

	protected $_messageTemplate = 'Behavior class %s could not be found.';

}
