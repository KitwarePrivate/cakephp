<?php
namespace Cake\Error;

/**
 * Used when a datasource cannot be found.
 *
 * @package       Cake.Error
 */
class MissingDatasourceException extends CakeException {

	protected $_messageTemplate = 'Datasource class %s could not be found. %s';

}
