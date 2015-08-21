<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\I18n\I18n;

/**
 * AccountCommon Controller
 *
 * @property \App\Model\Table\AccountCommonTable $AccountCommon
 */
class AccountCommonController extends AppController {

    public $paginate = array(
        'limit' => 20
    );

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('accountCommonList', $this->paginate($this->AccountCommon->find('all')));
    }

    /**
     * View method
     *
     * @param string|null $id AccountCommon id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $accountCommon = $this->AccountCommon->get($id, [
            'contain' => []
        ]);
        $this->set('accountCommon', $accountCommon);
        $this->set('_serialize', ['accountCommon']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $nextID = $this->AccountCommon->getNewAccountID();
        $accountCommon = $this->AccountCommon->newEntity(['AccountID' => $nextID]);
        if ($this->request->is('post')) {
            $accountCommon = $this->AccountCommon->patchEntity($accountCommon, $this->request->data);
            if ($this->AccountCommon->save($accountCommon)) {
                $this->Flash->success(__('New account common has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The account common could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('accountCommon'));
        $this->set('_serialize', ['accountCommon']);
    }

    /**
     * Edit method
     *
     * @param string|null $id AccountCommon id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $accountCommon = $this->AccountCommon->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $accountCommon = $this->AccountCommon->patchEntity($accountCommon, $this->request->data);
            if ($this->AccountCommon->save($accountCommon)) {
                $this->Flash->success(__('The account common has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The account common could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('accountCommon'));
        $this->set('_serialize', ['accountCommon']);
    }

    /**
     * Delete method
     *
     * @param string|null $id AccountCommon id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $accountCommon = $this->AccountCommon->get($id);
        if ($this->AccountCommon->delete($accountCommon)) {
            $this->Flash->success(__('The Account Common has been deleted.'));
        } else {
            $this->Flash->error(__('The Account Common could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }

    public function roledata_list($id) {
        $list = $this->AccountCommon->getListRoledata($id);

        $this->set('id', $id);
        $this->set('roledataList', $list);
    }

}
