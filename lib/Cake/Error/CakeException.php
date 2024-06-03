<?php
namespace Cake\Error;

/**
 * CakeException is used a base class for CakePHP's internal exceptions.
 * In general framework errors are interpreted as 500 code errors.
 *
 * @package       Cake.Error
 */
class CakeException extends CakeBaseException {

	/**
	 * Array of attributes that are passed in from the constructor, and
	 * made available in the view when a development error is displayed.
	 *
	 * @var array
	 */
	protected $_attributes = array();

	/**
	 * Template string that has attributes sprintf()'ed into it.
	 *
	 * @var string
	 */
	protected $_messageTemplate = '';

	/**
	 * Constructor.
	 *
	 * Allows you to create exceptions that are treated as framework errors and disabled
	 * when debug = 0.
	 *
	 * @param string|array $message Either the string of the error message, or an array of attributes
	 *   that are made available in the view, and sprintf()'d into CakeException::$_messageTemplate
	 * @param int $code The code of the error, is also the HTTP status code for the error.
	 */
	public function __construct($message, $code = 500) {
		if (is_array($message)) {
			$this->_attributes = $message;
			$message = __d('cake_dev', $this->_messageTemplate, $message ?? '');
		}
		parent::__construct($message ?? '', $code);
	}

	/**
	 * Get the passed in attributes
	 *
	 * @return array
	 */
	public function getAttributes() {
		return $this->_attributes;
	}

}
