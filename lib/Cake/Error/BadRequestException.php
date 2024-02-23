<?php
namespace Cake\Error;

/**
 * Represents an HTTP 400 error.
 *
 * @package       Cake.Error
 */
class BadRequestException extends HttpException {

	/**
	 * Constructor
	 *
	 * @param string $message If no message is given 'Bad Request' will be the message
	 * @param int $code Status code, defaults to 400
	 */
	public function __construct($message = null, $code = 400) {
		if (empty($message)) {
			$message = 'Bad Request';
		}
		parent::__construct($message, $code);
	}

}
