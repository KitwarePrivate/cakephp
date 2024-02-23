<?php
namespace Cake\Error;

/**
 * PDO exception - used when SecurityComponent detects any issue with the current request
 *
 * @package       Cake.Error
 */
class CakePDOException extends \PDOException {
	public ?string $queryString = null;
}
