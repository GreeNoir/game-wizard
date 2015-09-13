<?php

namespace App\Controller;

use Cake\Core\Configure;
use Cake\Network\Exception\NotFoundException;
use Cake\Network\Session;
use Cake\View\Exception\MissingTemplateException;
use Cake\I18n\I18n;

class HomeController extends AppController
{
    public function index() {

        if ($this->request->is('post')) {
            $lang = $this->request->data['language'];
            $this->redirect('/'.$lang.'/');
        } else {
            $lang = $this->request->params['lang'];

            I18n::locale($lang);

            $session = $this->request->session();
            $session->write('Config.language', $lang);
            $this->set('lang', $lang);

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
    }
}