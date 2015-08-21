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

        $lang = $this->request->query('lang');
        if (!$lang) {
            $lang = 'en';
        }

        I18n::locale($lang);

        $session = $this->request->session();
        $session->write('Config.language', $lang);
        $this->set('lang', $lang);
    }
}