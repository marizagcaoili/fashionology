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

        $this->render('item_list');
    }


    public function angularjs()
    {

        $this->render('angularjs');
    }


    public function getItems()
    {
        $this->autoRender = false;
        header('Content-Type: application/json');

        $items = TableRegistry::get('Items'); // Create Table Object

        $result = $items->getItemList();

        // Expose result to UI
        // $this->set('items', $result);  
        echo json_encode($result);
        exit(); 
    }
    
    public function addItem()
    {

        $this->autoRender = false;
        header('Content-Type: application/json');

        $item = TableRegistry::get('Items');
        //$add = $brand->query();

        $item_code   = $this->request->data('item_code');
        $status  = $this->request->data('status');
        $brand  = $this->request->data('brand');
        $quantity   = $this->request->data('quantity');
        $srp   = $this->request->data('srp');
        $item_name = $this->request->data('item_name');
        $desc = $this->request->data('desc');
        $categoryid = $this->request->data('categoryid');

        $item->insertItem($item_code, $status, $brand, $quantity, $srp, $item_name, $desc, $categoryid);

        exit();
    }
    
    public function itemForm()
    {
        $this->render('add_item');
    }


    public function getParents()
    {
        $this->autoRender = false;
        header('Content-Type: application/json');

        $category= TableRegistry::get('Categories');
        
        $categories= $category->getParents();

        echo json_encode($categories);
        exit();
    }

    public function getCategories()
    {
        $this->autoRender = false;
        header('Content-Type: application/json');

        $category= TableRegistry::get('Categories');
        
        $categories= $category->getCategories();

        echo json_encode($categories);
        exit();
    }

    public function secondCategory()
    {

        $this->autoRender = false;
        header('Content-Type: application/json');

        $category = TableRegistry::get('Categories');

        $parent = $this->request->query('parent_id');
       
        $categories = $category->getCategoryByParent($parent);

        echo json_encode($categories);
        exit();

    }

    public function addCategory()
    {
        //disable ui rendering
        $this->autoRender = false;
        header('Content-Type: application/json');

        $category = TableRegistry::get('Categories');
        //$add = $brand->query();

        $name   = $this->request->data('category_name');
        $parent = $this->request->data('parent_id');
        $top = $this->request->data('top_parent');

        $category->insertCategory($name, $parent, $top);

        exit();
    }

    public function topCategory()
    {
        //disable ui rendering
        $this->autoRender = false;
        header('Content-Type: application/json');

        $category = TableRegistry::get('Categories');

        $top = $this->request->query('top_parent');
       
        $categories = $category->getCategoryByTop($top);

        echo json_encode($categories);
        exit();
    }

    public function categories()
    {
        $this->render('category_list');
    }

    public function addBrand()
    {
        //disable ui rendering
        $this->autoRender = false;
        header('Content-Type: application/json');

        $brand = TableRegistry::get('Brands');
        //$add = $brand->query();

        $name   = $this->request->data('brand_name');
        $prefix = $this->request->data('brand_prefix');

        $brand->insertBrand($name, $prefix);

        exit();
    }

    public function getBrands()
    {
        //disable ui rendering
        $this->autoRender = false;
        header('Content-Type: application/json');

        $brand = TableRegistry::get('Brands');

        $brands = $brand->getBrands();

        echo json_encode($brands);
        exit();
    }


    public function getPrefix()
    {

        $this->autoRender = false;
        header('Content-Type: application/json');

        $brand = TableRegistry::get('Brands');

        $prefix = $this->request->query('brand_id');
       
        $brands = $brand->getBrandPrefix($prefix);

        echo json_encode($brands);
        exit();

    }

    public function brands()
    {
        $this->render('brand_list');
    }

    public function uploadImage()
    {
        $this->autoRender = false;
        header('Content-Type: application/json');
        $image = TableRegistry::get('Images');

        $name   = $this->request->data('name');
        $file   = $this->request->data('file');

        $imageFileType= pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION);
        $imageFileName= pathinfo($_FILES["file"]["name"], PATHINFO_FILENAME);

        $fileKey= md5(microtime().$imageFileName).".".$imageFileType;
        
        $path = basename($_FILES['file']['name']);
        print_r($_FILES);

        $target_file = IMAGE_DIR . $fileKey;
        move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);

        $image->uploadImage($name, $path, $fileKey);

        exit();

    }

    //pages/>

    //display
}



?>
