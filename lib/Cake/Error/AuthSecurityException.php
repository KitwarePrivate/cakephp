<?php
namespace Cake\Error;

/**
 * Auth Security exception - used when SecurityComponent detects any issue with the current request
 *
 * @package       Cake.Error
 */
class AuthSecurityException extends SecurityException {

	/**
	 * Security Exception type
	 * @var string
	 */
	protected $_type = 'auth';

}
