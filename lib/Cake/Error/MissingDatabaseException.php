<?php
namespace Cake\Error;

/**
 * Runtime Exceptions for ConnectionManager
 *
 * @package       Cake.Error
 */
class MissingDatabaseException extends CakeException {

	protected $_messageTemplate = 'Database connection "%s" could not be found.';

}
