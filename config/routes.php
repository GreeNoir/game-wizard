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
use Cake\Routing\Router;

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
 * If no call is made to `Router::defaultRouteClass`, the class used is
 * `Route` (`Cake\Routing\Route\Route`)
 *
 * Note that `Route` does not do any inflections on URLs which will result in
 * inconsistently cased URLs when used with `:plugin`, `:controller` and
 * `:action` markers.
 *
 */

Router::defaultRouteClass('Route');

Router::addUrlFilter(function ($params, $request) {
    if (isset($request->params['lang']) && !isset($params['lang'])) {
        $params['lang'] = $request->params['lang'];
    } elseif (!isset($params['lang'])) {
        $params['lang'] = Router::getRequest()->session()->read('lang'); // set your default language here
    }
    return $params;
});


$lang = 'en';
if (Router::getRequest()->session()->check('Config.language')) {
    $lang = Router::getRequest()->session()->read('Config.language');
}

Router::redirect('/', "/$lang/");

Router::connect('/:lang/', ['controller' => 'Home', 'action' => 'index']);

Router::connect('/:lang/:controller', ['action' => 'index']);

Router::connect('/:lang/:controller/add', ['action' => 'add']);

Router::connect('/:lang/:controller/view/:id', ['action' => 'view'],  ['id' => '\d+', 'pass' => ['id']]);

Router::connect('/:lang/:controller/edit/:id', ['action' => 'edit'],  ['id' => '\d+', 'pass' => ['id']]);

Router::connect('/:lang/:controller/delete/:id', ['action' => 'delete'],  ['id' => '\d+', 'pass' => ['id']]);

Router::connect('/:lang/:controller/roledata_list/:id', ['action' => 'roledata_list'], ['id' => '\d+', 'pass' => ['id']]);

Router::connect('/:lang/:controller/login', ['action' => 'login']);

Router::connect('/:lang/:controller/logout', ['action' => 'logout']);

Router::connect('/:lang/:controller/accountLog', ['action' => 'accountLog']);

Plugin::routes();
