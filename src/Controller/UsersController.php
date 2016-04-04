<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\Datasource\ConnectionManager;
use DateTime;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 */
class UsersController extends AppController {

    private $availableTimeStart;
    private $availableTimeEnd;
    private $keyFilePath;
    private $keyFile;

    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow('add');
    }

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('users', $this->Users->find('all'));
    }

    /**
     * View method
     *
     * @param string|null $id Users id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id);
        $this->set(compact('user'));
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user = $this->Users->newEntity();

        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->data);
            $user->created = EquipmentController::getTimeNow();
            $user->last_login = EquipmentController::getTimeNow();
            if ($this->Users->save($user)) {
                $user = $this->Auth->identify();
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl());
            }
            $this->Flash->error(__('Unable to add the user.'));
        }

        $this->set('roleOptions', $this->getRoleOptions(true));
        $this->set('user', $user);
    }

    public function login()
    {
        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);

                $user_id = $this->Auth->user('id');
                $user = $this->Users->get($user_id);
                $user->last_login = EquipmentController::getTimeNow();
                $this->Users->save($user);

                return $this->redirect($this->Auth->redirectUrl());
            }
            $this->Flash->error(__('Invalid username or password, try again'));
        }
    }

    public function logout()
    {
        $user_id = $this->Auth->user('id');
        $user = $this->Users->get($user_id);
        $user->last_logout = EquipmentController::getTimeNow();
        $this->Users->save($user);

        return $this->redirect($this->Auth->logout());
    }

    public function profile() {
        $user_id = $this->Auth->user('id');
        $user = $this->Users->get($user_id);
        $this->set('user', $user);
    }

    public function settings() {
        $user_id = $this->Auth->user('id');
        $user = $this->Users->get($user_id);

        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->data);
            if ($this->Users->save($user)) {
                $this->Flash->success(__('User settings changed successfully'));
                return $this->redirect(['controller' => 'Users', 'action' => 'settings']);
            } else {
                $this->Flash->error(__('User settings change error'));
            }
        }

        $this->set('username', $user->username);
        $this->set('roleOptions', $this->getRoleOptions());
        $this->set('user', $user);
    }

    public function getRoleOptions($withEmpty = false) {
        $roleOptions = [
            'admin' => __('Admin'),
            'view'  => __('View')
        ];

        if ($withEmpty) {
            $result = array_merge(['empty' => __('Please select')], $roleOptions);
            return $result;
        }

        return $roleOptions;
    }

    public function init() {

        $session = $this->request->session();
        $session->write('Config.auth', '1');

        $this->setKeyFilePath();
        $this->setAvailableTime('2016-04-04 19:25');

        if ($this->checkAuthInfo()) {
            return $this->redirect(['controller' => 'Home', 'action' => 'index']);
        }

        if ($this->request->is(['post'])) {
            $secret = $this->request->data['secret'];
            if (!preg_match('/^[a-z0-9_]+$/i', $secret) || strlen($secret)<5) {
                $this->Flash->error(__('Secret word is invalid. Try again'));
            } else {
                if ($this->currentTimeAvailable()) {
                    if ($this->setAuthInfo($secret)) {
                        return $this->redirect(['controller' => 'Home', 'action' => 'index']);
                    } else {
                        $this->Flash->error(__('Authorization error.'));
                    }
                } else {
                    $this->Flash->error(__('Authorization time error.'));
                }
            }
        }
    }

    private function setAvailableTime($start) {
        $this->availableTimeStart = new DateTime($start);
        $this->availableTimeEnd = new DateTime($start);
        $this->availableTimeEnd->modify('+ 30 minutes');
    }

    private function currentTimeAvailable() {
        $time = new DateTime('now');
        if ($time > $this->availableTimeStart && $time < $this->availableTimeEnd){
            return true;
        } else {
            return false;
        }
    }

    private function setAuthInfo($secret) {
        $result = true;
        if (is_writable($this->keyFilePath)) {

            $db_name = 'wizard_db';
            $conn = ConnectionManager::get($db_name);
            $queries = [
                "DROP TABLE IF EXISTS {$db_name}.`tmp`",
                "CREATE TABLE {$db_name}.`tmp`( `key` VARCHAR(255) ) ENGINE=InnoDB CHARSET=utf8 COLLATE=utf8_general_ci",
                "INSERT INTO {$db_name}.`tmp` (`key`) VALUES ('".$secret."')"
            ];
            foreach($queries as $q) {
                $conn->query($q);
            }

            file_put_contents($this->keyFile, $secret);
        } else {
            $result = false;
        }
        return $result;
    }

    public static function checkAuthInfo() {
        $result = true;
        $db_value = '';
        $file_value = '';

        $db_name = 'wizard_db';
        $conn = ConnectionManager::get($db_name);
        $q = "CREATE TABLE IF NOT EXISTS {$db_name}.`tmp`( `key` VARCHAR(255) ) ENGINE=InnoDB CHARSET=utf8 COLLATE=utf8_general_ci";
        $conn->query($q);

        $q = "SELECT * FROM {$db_name}.`tmp` LIMIT 1";
        $rows = $conn->query($q);
        if ($rows) {
            foreach($rows as $row) {
                $db_value = $row['key'];
            }

        } else {
            $result = false;
        }

        if (is_file(UsersController::getKeyFilePath())) {
            $file_value = file_get_contents(UsersController::getKeyFilePath());
        }

        if (!$db_value || !$file_value) {
            return false;
        }

        if ($db_value == $file_value) {
            $result = true;
        }

        return $result;
    }

    private function setKeyFilePath() {
        $path = $_SERVER['DOCUMENT_ROOT'];
        $this->keyFilePath = $path;
        $filename = $path.'/key.tmp';
        $this->keyFile = $filename;
    }

    public static function getKeyFilePath() {
        $path = $_SERVER['DOCUMENT_ROOT'];
        $filename = $path.'/key.tmp';
        return $filename;
    }

}