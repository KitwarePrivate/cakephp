<?php
namespace Cake\Error;

/**
 * Exception class to be thrown when a database table is not found in the datasource
 *
 * @package       Cake.Error
 */
class MissingTableException extends CakeException {

	protected $_messageTemplate = 'Table %s for model %s was not found in datasource %s.';

}
