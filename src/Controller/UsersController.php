<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 */
class UsersController extends AppController {

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

}