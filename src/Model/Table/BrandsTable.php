<?php

namespace App\Model\Table;

use Cake\ORM\Table;

class BrandsTable extends Table
{

    public function initialize(array $config)
    {
        $this->table('tbl_brand');
    }

    public function getBrands()
    {
    	return $this->find()
    				->select(['brand_id','brand_name', 'brand_prefix'])
    				->toArray();
    }

    public function insertBrand($name, $prefix)
    {
    	return $this->query()->insert([ 'brand_name', 'brand_prefix'])
    				->values([ 'brand_name'=>$name, 'brand_prefix'=>$prefix])
    				->execute();
    }

    public function getBrandPrefix($prefix)
    {
        return $this->find()
                    ->select(['brand_id', 'brand_prefix', 'brand_name'])
                    ->where(['brand_id' => $prefix])
                    ->toArray();
    }
}
?>
