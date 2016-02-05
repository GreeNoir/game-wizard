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
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;
use Cake\I18n\I18n;
use Cake\Routing\Router;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link http://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{

    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * @return void
     */
    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('Flash');
        $this->loadComponent('Auth', [
            'authorize' => ['Controller'],
            'loginRedirect' => [
                'controller' => 'Home',
                'action' => 'index'
            ],
            'logoutRedirect' => [
                'controller' => 'Home',
                'action' => 'index'
            ]
        ]);
    }

    public function beforeFilter(Event $event) {
        parent::beforeFilter($event);

        $session = $this->request->session();
        $lang = 'en';

        if (isset($thihs->request->params['lang'])) {
            $lang = $this->request->params['lang'];
        } else {
            if ($session->check('Config.language')) {
                $lang = $session->read('Config.language');

            }
        }

        $session->write('Config.language', $lang);

        // Change current language by post request
        if ($this->request->is('post') && isset($this->request->data['language'])) {
            $newLang = $this->request->data['language'];
            $transUrl = $this->translateUrl($newLang);
            $this->redirect($transUrl);
        }

        $this->set('lang', $lang);
        $this->set('controller', $this->name);

        I18n::locale($lang);

        $this->Auth->config([
            'unauthorizedRedirect' => false
        ]);
        $this->Auth->allow(['index', 'view', 'display', 'login']);

        $user = $this->Auth->user();

        if (isset($user)){
            $username = $user['username'];
            $this->set([
                'is_authorized' => true,
                'username'      => $username,
            ]);
        } else {
            $this->set('is_authorized', false);
        }
    }

    public function isAuthorized($user)
    {
        // Admin can access every action
        if (isset($user['role']) /*&& $user['role'] === 'admin'*/) {
            return true;
        }

        // Default deny
        return false;
    }

    private function translateUrl($newLang) {
        $transUrl = Router::url([
            'controller' => $this->request->params['controller'],
            'action'     => $this->request->params['action'],
            'lang'       => $newLang,
            'id'         => $this->request->params['id'],
            '?'          => $this->request->query
        ]);
        return $transUrl;
    }

}
