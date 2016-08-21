<?php

namespace App\Model\Table;

use Cake\ORM\Table;

class ItemsTable extends Table
{

    public function initialize(array $config)
    {
        $this->table('tbl_items');
        $this->belongsTo('Brands');
    }

    public function getItemList()
    {
    	// Query
        return $this->find()
        ->contain(['Brands'])
        ->toArray();
    }

    public function getCategorized($category)
    {
        // Query
        return $this->find()
                    ->contain(['Brands'])
                    ->where(['category_id' => $category])
                    ->toArray();
    }

    public function getDetails($item_id)
    {
        return $this->find()
                    ->contain(['Brands'])
                    ->where(['item_id' => $item_id])
                    ->toArray();

    public function insertItem($item_code, $status, $brand, $quantity, $srp, $item_name, $desc, $categoryid)
    {
        return $this->query()
        ->insert(['item_code', 'item_status', 'brand_id', 'item_quantity', 'item_srp', 'item_name', 'item_description', 'category_id'])
        ->values(['item_code'=>$item_code, 'item_status'=>$status, 'brand_id'=>$brand, 'item_quantity'=>$quantity, 'item_srp'=>$srp, 'item_name'=>$item_name, 'item_description'=>$desc, 'category_id'=>$categoryid])
        ->execute();
    }
}
?>