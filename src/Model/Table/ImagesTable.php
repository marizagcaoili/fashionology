<?php

namespace App\Model\Table;

use Cake\ORM\Table;

class ImagesTable extends Table
{
    public function initialize(array $config)
    {
        $this->table('tbl_img');
    }

    public function uploadImage($name, $path, $file_key)
    {
        return $this->query()
                    ->insert(['img_name', 'img_path', 'file_key'])
                    ->values(['img_name' => $name, 'img_path' => $path, 'file_key' => $file_key])
                    ->execute();
    }
}
?>