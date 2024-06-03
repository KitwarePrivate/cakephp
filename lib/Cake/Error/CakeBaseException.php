<?php
namespace Cake\Error;

/**
 * Base class that all Exceptions extend.
 *
 * @package       Cake.Error
 */
class CakeBaseException extends \RuntimeException {

	/**
	 * Array of headers to be passed to CakeResponse::header()
	 *
	 * @var array
	 */
	protected $_responseHeaders = null;

	/**
	 * Get/set the response header to be used
	 *
	 * @param string|array $header An array of header strings or a single header string
	 *  - an associative array of "header name" => "header value"
	 *  - an array of string headers is also accepted
	 * @param string $value The header value.
	 * @return array
	 * @see CakeResponse::header()
	 */
	public function responseHeader($header = null, $value = null) {
		if ($header) {
			if (is_array($header)) {
				return $this->_responseHeaders = $header;
			}
			$this->_responseHeaders = array($header => $value);
		}
		return $this->_responseHeaders;
	}

}

