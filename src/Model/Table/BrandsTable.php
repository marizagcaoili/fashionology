<?php

namespace App\Model\Table;

use Cake\ORM\Table;

class BrandsTable extends Table
{
    public function initialize(array $config)
    {
        $this->table('tbl_brand');
    }
}