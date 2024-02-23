<?php
namespace Cake\Error;

/**
 * Represents an HTTP 500 error.
 *
 * @package       Cake.Error
 */
class InternalErrorException extends HttpException {

	/**
	 * Constructor
	 *
	 * @param string $message If no message is given 'Internal Server Error' will be the message
	 * @param int $code Status code, defaults to 500
	 */
	public function __construct($message = null, $code = 500) {
		if (empty($message)) {
			$message = 'Internal Server Error';
		}
		parent::__construct($message, $code);
	}

}
