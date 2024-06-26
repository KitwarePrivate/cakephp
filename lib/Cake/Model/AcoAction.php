<?php
namespace Cake\Model;
use AppModel;
use Cake\Core\App;

/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @package       Cake.Model
 * @since         CakePHP(tm) v 0.2.9
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

App::uses('AppModel', 'Model');

/**
 * Action for Access Control Object
 *
 * @package       Cake.Model
 */
class AcoAction extends AppModel {

/**
 * Model name
 *
 * @var string
 */
	public $name = 'AcoAction';

/**
 * ACO Actions belong to ACOs
 *
 * @var array
 */
	public $belongsTo = array('Aco');
}
