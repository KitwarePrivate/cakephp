<?php
namespace Cake\Error;

/**
 * Exception class to be thrown when a datasource configuration is not found
 *
 * @package       Cake.Error
 */
class MissingDatasourceConfigException extends CakeException {

	protected $_messageTemplate = 'The datasource configuration "%s" was not found in database.php';

}
