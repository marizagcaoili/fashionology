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


class ApiController extends Controller
{

    public function initialize(){
        parent::initialize();
        $this->loadComponent('Cookie', ['expiry' => '1 day']);
    }

    public function apisum(){

        //disable ui rendering
        $this->autoRender = false ;
        header('Content-Type: application/json');


        $items = TableRegistry::get('Items'); // Create Table Object

        $result = $items->getItemList();

        echo json_encode($result);
        exit();
    }

    public function apiimage(){

      $this->autoRender=false;
      header('Content-Type: application/json');

      $images=TableRegistry::get('Images');

      $result=$images->getImageList();

      echo json_encode($result);
      exit();
  }

  // public function cartReveal(){
  //     $this->autoRender=false;
  //     header('Content-Type: application/json');


  //     $images=TableRegistry::get('Images');
  //     $result=$images->cartFilter();
  //     echo json_encode($result);
  //     exit();
  
  // }

  public function productviewer(){
     $this->autoRender = false ;
     header('Content-Type: application/json');


        $items = TableRegistry::get('Images'); // Create Table Object


        $item_id=$this->request->query('item_id');

        $result = $items->detailFilter($item_id);

        echo json_encode($result);
        exit();

    }

    public function addToCart()
    {
        $this->autoRender = false ;

        // Get item_id POST parameter
        $item_id = $this->request->data('item_id');

        // Check if Cart Cookie is existing
        if ($this->Cookie->read('cart_items') !== null) {
            // Update Cart Array
            $cart = $this->Cookie->read('cart_items');

            // Append new item to Cart Array
            $cart[] = array("item_id" => $item_id, "quantity" => 1);

            $this->Cookie->write('cart_items', $cart);
        } else { // New Cart Array
            $cart = array(array("item_id" => $item_id, "quantity" => 1));

            // Initialize new Cart Array
            $this->Cookie->write('cart_items', $cart);
        }

        var_dump($this->Cookie->read('cart_items'));

        exit();
    }




    public function removeToCart()
    {
        $this->autoRender = false ;

        $cart = $this->Cookie->read('cart_items');

        // Item_id to be removed from the Cart
        $item_id = $this->request->data('item_id');

        // Check if Cart Array is existing
        if ($cart) {
            // Iterate from the Cart Array
            foreach ($cart as $key => $item) {
                if ($item_id == $item['item_id']) {
                    // Remove Item from Cart
                    unset($cart[$key]);
                }
            }
        }

        // Update Cart Array
        $this->Cookie->write('cart_items', $cart);

        exit();
    }


    public function cartView(){

     // $this->autoRender = false ;
     // header('Content-Type: application/json');

     // $cart_id=json_decode($_COOKIE['cart_items']);


     header('Content-Type: application/json');

     $cart_id=json_decode($this->request->data('cart_items'));

     // foreach ($cart€€_id as $key => $value) {
     //     echo $value;
     // }

     

        $items = TableRegistry::get('Images'); // Create Table Object

        $result = $items->cartLook($cart_id);

        echo json_encode($result);

        exit();

    }

}
