<?php
namespace Cake\Error;

/**
 * Represents a fatal error
 *
 * @package       Cake.Error
 */
class FatalErrorException extends CakeException {

	/**
	 * Constructor
	 *
	 * @param string $message The error message.
	 * @param int $code The error code.
	 * @param string $file The file the error occurred in.
	 * @param int $line The line the error occurred on.
	 */
	public function __construct($message, $code = 500, $file = null, $line = null) {
		parent::__construct($message, $code);
		if ($file) {
			$this->file = $file;
		}
		if ($line) {
			$this->line = $line;
		}
	}

}
