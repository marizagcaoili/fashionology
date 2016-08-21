<?php

namespace App\Model\Table;

use Cake\ORM\Table;

class CategoriesTable extends Table
{
 
    public function initialize(array $config)
    {
        $this->table('tbl_category');
    }

    public function getCategories()
    {
    	return $this->find()
    				->select(['category_id', 'category_name', 'parent_id'])
    				->toArray();
    }

    public function getParents()
    {
        return $this->find()
                    ->select(['category_id', 'category_name', 'parent_id'])
                    ->where(['parent_id' => 0])
                    ->toArray();
    }

    public function getCategoryByParent($parent)
    {
        return $this->find()
                    ->select(['category_id', 'category_name'])
                    ->where(['parent_id' => $parent])
                    ->toArray();
    }

    public function getCategoryByTop($top)
    {
        return $this->find()
                    ->select(['category_id', 'category_name'])
                    ->where(['top_parent' => $top])
                    ->toArray();
    }


    public function insertCategory($name, $parent, $top)
    {
        return $this->query()
                    ->insert(['category_name', 'parent_id', 'top_parent'])
                    ->values(['category_name'=>$name, 'parent_id'=>$parent, 'top_parent'=>$top])
                    ->execute();
    }

}

?>