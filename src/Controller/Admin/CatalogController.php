<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link      http://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller\Admin;

use Cake\Controller\Controller;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;

/**
 * Dashboard Controller
 */
class CatalogController extends Controller
{

    /**
     * Initialization hook method.
     *
     * @return void
     */

    //pages
    public function initialize()
    {
        parent::initialize();
    }

    public function items()
    {
        $items = TableRegistry::get('Items'); // Create Table Object

        $result = $items->getItemList();

        // Expose result to UI
        $this->set('items', $result);

        $this->render('item_list');
    }

    public function addItem()
    {
        $this->render('add_item');
    }

    public function category()
    {
        $this->render('category_list');
    }

    public function brands()
    {
        $this->render('brand_list');
    }
    //pages/>

    //display
}
