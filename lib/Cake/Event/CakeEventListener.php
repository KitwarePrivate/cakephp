<?php
namespace Cake\Event;
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright	  Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link		  https://cakephp.org CakePHP(tm) Project
 * @package		  Cake.Observer
 * @since		  CakePHP(tm) v 2.1
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

/**
 * Objects implementing this interface should declare the `implementedEvents` function
 * to notify the event manager what methods should be called when an event is triggered.
 *
 * @package Cake.Event
 */
interface CakeEventListener {

/**
 * Returns a list of events this object is implementing. When the class is registered
 * in an event manager, each individual method will be associated with the respective event.
 *
 * ## Example:
 *
 * ```
 *	public function implementedEvents() {
 *		return array(
 *			'Order.complete' => 'sendEmail',
 *			'Article.afterBuy' => 'decrementInventory',
 *			'User.onRegister' => array('callable' => 'logRegistration', 'priority' => 20, 'passParams' => true)
 *		);
 *	}
 * ```
 *
 * @return array associative array or event key names pointing to the function
 * that should be called in the object when the respective event is fired
 */
	public function implementedEvents();

}
