<?php
namespace Cake\Error;

/**
 * Represents an HTTP 401 error.
 *
 * @package       Cake.Error
 */
class UnauthorizedException extends HttpException {

	/**
	 * Constructor
	 *
	 * @param string $message If no message is given 'Unauthorized' will be the message
	 * @param int $code Status code, defaults to 401
	 */
	public function __construct($message = null, $code = 401) {
		if (empty($message)) {
			$message = 'Unauthorized';
		}
		parent::__construct($message, $code);
	}

}
