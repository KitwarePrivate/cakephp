<?php
namespace Cake\Error;

/**
 * Parent class for all of the HTTP related exceptions in CakePHP.
 *
 * All HTTP status/error related exceptions should extend this class so
 * catch blocks can be specifically typed.
 *
 * @package       Cake.Error
 */
class HttpException extends CakeBaseException {
}
