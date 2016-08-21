<?php
/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different URLs to chosen controllers and their actions (functions).
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

use Cake\Core\Plugin;
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;
use Cake\Routing\Route\DashedRoute;

/**
 * The default class to use for all routes
 *
 * The following route classes are supplied with CakePHP and are appropriate
 * to set as the default:
 *
 * - Route
 * - InflectedRoute
 * - DashedRoute
 *
 * If no call is made to `Router::defaultRouteClass()`, the class used is
 * `Route` (`Cake\Routing\Route\Route`)
 *
 * Note that `Route` does not do any inflections on URLs which will result in
 * inconsistently cased URLs when used with `:plugin`, `:controller` and
 * `:action` markers.
 *
 */
Router::defaultRouteClass(DashedRoute::class);

Router::scope('/', function (RouteBuilder $routes) {
    /**
     * Here, we are connecting '/' (base path) to a controller called 'Pages',
     * its action called 'display', and we pass a param to select the view file

     * to use (in this case, src/Template/Pages/home.ctp)...
     */




    /**
     * ...and connect the rest of 'Pages' controller's URLs.
     */
    $routes->connect('/pages/*', ['controller' => 'Pages', 'action' => 'display']);



    // Front

    
    $routes->connect('/', ['controller' => 'home', 'action' => 'index']);
    $routes->connect('/clothing', ['controller' => 'home', 'action' => 'clothing']);


    // Sample Data
    $routes->connect('/apitest', ['controller' => 'home', 'action' => 'apitest']);
    $routes->connect('/api/sum/', ['controller' => 'api', 'action' => 'apisum']);





    /**
     * Connect catchall routes for all controllers.
     *
     * Using the argument `DashedRoute`, the `fallbacks` method is a shortcut for
     *    `$routes->connect('/:controller', ['action' => 'index'], ['routeClass' => 'DashedRoute']);`
     *    `$routes->connect('/:controller/:action/*', [], ['routeClass' => 'DashedRoute']);`
     *
     * Any route class can be used with this method, such as:
     * - DashedRoute
     * - InflectedRoute
     * - Route
     * - Or your own route class
     *
     * You can remove these routes once you've connected the
     * routes you want in your application.
     */
    $routes->fallbacks('DashedRoute');
});

Router::prefix('Admin', function ($routes) {
    // Admin
    //Dashboard
    $routes->connect('/admin/dashboard', ['controller' => 'dashboard', 'action' => 'index']);

    $routes->connect('/admin/catalog/angularjs', ['controller' => 'catalog', 'action' => 'angularjs']);

    //Catalog

        //ITEM
    $routes->connect('/admin/catalog/item_form', ['controller' => 'catalog', 'action' => 'itemForm']);

    $routes->connect('/admin/catalog/edit_item', ['controller' => 'catalog', 'action' => 'editItem']);

    $routes->connect('/admin/catalog/add_item', ['controller' => 'catalog', 'action' => 'addItem']);

    $routes->connect('/admin/catalog/get_categorized', ['controller' => 'catalog', 'action' => 'getCategorizedItems']);

    $routes->connect('/admin/catalog/items', ['controller' => 'catalog', 'action' => 'items']);

    $routes->connect('/admin/catalog/get_items', ['controller' => 'catalog', 'action' => 'getItems']);

    $routes->connect('/admin/catalog/get_prefix', ['controller' => 'catalog', 'action' => 'getPrefix']);

    $routes->connect('/admin/catalog/get_details', ['controller' => 'catalog', 'action' => 'getDetails']);   
    
        //---/>ITEM


        //CATEGORY

    $routes->connect('/admin/catalog/categories', ['controller' => 'catalog', 'action' => 'categories']);

    $routes->connect('/admin/catalog/add_category', ['controller' => 'catalog', 'action' => 'addCategory']);   

    $routes->connect('/admin/catalog/get_categories', ['controller' => 'catalog', 'action' => 'getCategories']);

    $routes->connect('/admin/catalog/second_category', ['controller' => 'catalog', 'action' => 'secondCategory']);

    $routes->connect('/admin/catalog/top_category', ['controller' => 'catalog', 'action' => 'topCategory']);    

    $routes->connect('/admin/catalog/get_parents', ['controller' => 'catalog', 'action' => 'getParents']);


        //--/>CATEGORY

        //BRAND

    $routes->connect('/admin/catalog/brands', ['controller' => 'catalog', 'action' => 'brands']);

    $routes->connect('/admin/catalog/get_brands', ['controller' => 'catalog', 'action' => 'getBrands']);

    $routes->connect('/admin/catalog/add_brand', ['controller' => 'catalog', 'action' => 'addBrand']);

        //--/>BRAND

       
        //IMAGE

    $routes->connect('/admin/catalog/upload_image', ['controller' => 'catalog', 'action' => 'uploadImage']);

        //--/>

    //--/>Catalog

    $routes->fallbacks('DashedRoute');

});


/**
 * Load all plugin routes.  See the Plugin documentation on
 * how to customize the loading of plugin routes.
 */
Plugin::routes();
