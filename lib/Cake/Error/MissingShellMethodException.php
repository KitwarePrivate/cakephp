<?php
namespace Cake\Error;

/**
 * Used when a shell method cannot be found.
 *
 * @package       Cake.Error
 */
class MissingShellMethodException extends CakeException {

	protected $_messageTemplate = "Unknown command %1\$s %2\$s.\nFor usage try `cake %1\$s --help`";

}
