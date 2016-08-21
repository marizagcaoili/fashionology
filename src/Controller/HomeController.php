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

namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;

/**
 * Static content controller
 *
 * This controller will render views from Template/Pages/
 *
 * @link http://book.cakephp.org/3.0/en/controllers/pages-controller.html
 */


class HomeController extends Controller
{
    public function initialize(){
        parent::initialize();
        $this->loadComponent('Cookie', ['expiry' => '1 day']);
    }

    public function index(){

        $this->render('home');
    }

    public function clothing(){
        // $items = array(array("item_id" => 1, "quantity" => 1), array("item_id" => 2, "quantity" => 1));
        // // Add new
        // $this->Cookie->write('test', $items);


        // // Update remove cookie
        // $o_items = $this->Cookie->read('test');
        // $to_remove = 1;
        // foreach ($o_items as $key => $item) {
        //     if($item['item_id'] == $to_remove) {
        //         unset($o_items[$key]); // Remove item from cookie
        //     }
        // }

        // $this->Cookie->write('test', $o_items);

        // // Update add cookie
        // $o_items = $this->Cookie->read('test');
        // $to_add = 3;
        // $to_add_qty = 1;
        // $o_items[] = array("item_id" => 3, "quantity" => 1);var
        // $this->Cookie->write('test', $o_items);

     // $cart_id=json_decode($_COOKIE['cart_items']);

     // unset($cart_id['']);

     // $json=json_encode($cart_id);





    // var_dump($json);     



       // $ids=arr[$cart_id];

       //  var_dump($ids);       

        // $str_tmp="";


        // $result=Hash::remove($cart_id,'int');
        // var_dump($result);



        $this->render('clothing');
    }

    public function apitest(){
        $this->render('apitest');
    }

    public function productview(){
       $this->render('productview');


   }

   public function register(){
    $this->render('accountregister');
}


public function login(){
    $this->render('accountlogin');
}

public function checkout(){
    $this->render('checkout');
}

}
