<?php
namespace Cake\Error;

/**
 * Used when no connections can be found.
 *
 * @package       Cake.Error
 */
class MissingConnectionException extends CakeException {

	protected $_messageTemplate = 'Database connection "%s" is missing, or could not be created.';

	/**
	 * Constructor
	 *
	 * @param string|array $message The error message.
	 * @param int $code The error code.
	 */
	public function __construct($message, $code = 500) {
		if (is_array($message)) {
			$message += array('enabled' => true);
		}
		parent::__construct($message, $code);
	}

}
