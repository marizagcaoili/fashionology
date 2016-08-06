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

    public function addItem()
    {

    }
}