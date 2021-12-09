<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://book.cakephp.org/2.0/en/development/testing.html
 * @package       Cake.Error
 * @since         CakePHP(tm) v 2.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */
namespace Cake\Error;

/**
 * Used when no connections can be found.
 *
 * @package       Cake.Error
 */
class MissingConnectionException extends CakeException
{
    protected $_messageTemplate = 'Database connection "%s" is missing, or could not be created.';
    /**
     * Constructor
     *
     * @param string|array $message The error message.
     * @param int $code The error code.
     */
    public function __construct($message, $code = 500)
    {
        if (is_array($message)) {
            $message += array('enabled' => true);
        }
        parent::__construct($message, $code);
    }
}
