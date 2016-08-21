<?php

namespace App\Model\Table;

use Cake\ORM\Table;

class ImagesTable extends Table
{

  public function initialize(array $config)
  {
    $this->table('tbl_img');
    $this->belongsTo('Items');
  }

  public function getImageList(){

    return $this->find()
    ->contain(['Items'])
    ->toArray();
  }

  public function detailFilter($item_id){
    return $this->find()
    ->contain(['Items'])
    ->where(['Items.item_id' => $item_id])
    ->toArray();
  }

  public function uploadImage($name, $path, $file_key)
  {
    return $this->query()
    ->insert(['img_name', 'img_path', 'file_key'])
    ->values(['img_name' => $name, 'img_path' => $path, 'file_key' => $file_key])
    ->execute();
  }




  public function cartLook($cart_id){
   $cart_id=json_decode($_COOKIE['cart_items']);

   // unset($cart_id['']);

   // $json=json_encode($cart_id);


   return $this->find('all', array('conditions' => array('Items.item_id IN' => $cart_id)))
   ->contain(['Items'])
   ->toArray();
 }

}
