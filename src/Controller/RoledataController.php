<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Roledata Controller
 *
 * @property \App\Model\Table\RoledataTable $Roledata
 */
class RoledataController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('roledata', $this->paginate($this->Roledata));
        $this->set('_serialize', ['roledata']);
    }

    /**
     * View method
     *
     * @param string|null $id Roledata id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $roledata = $this->Roledata->get($id, [
            'contain' => []
        ]);
        $this->set('roledata', $roledata);
        $this->set('_serialize', ['roledata']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $roledata = $this->Roledata->newEntity();
        if ($this->request->is('post')) {
            $roledata = $this->Roledata->patchEntity($roledata, $this->request->data);
            if ($this->Roledata->save($roledata)) {
                $this->Flash->success(__('The roledata has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The roledata could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('roledata'));
        $this->set('_serialize', ['roledata']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Roledata id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $roledata = $this->Roledata->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $roledata = $this->Roledata->patchEntity($roledata, $this->request->data);
            if ($this->Roledata->save($roledata)) {
                $this->Flash->success(__('The roledata has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The roledata could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('roledata'));
        $this->set('_serialize', ['roledata']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Roledata id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $roledata = $this->Roledata->get($id);
        if ($this->Roledata->delete($roledata)) {
            $this->Flash->success(__('The roledata has been deleted.'));
        } else {
            $this->Flash->error(__('The roledata could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }

    /**
     * @param $id - Roledata ID
     * List of item, equip, holyequip, holyman, soulcrystal linked to Roledata
     */
    public function equipment_list($id) {
        $this->loadModel('Item');
        $this->loadModel('Equip');
        $this->loadModel('Holyequip');
        $this->loadModel('Holyman');
        $this->loadModel('Soulcrystal');
        $this->set('id', $id);
        $this->set('itemList', $this->Item->getListRoledata($id));
        $this->set('equipList', $this->Equip->getListRoledata($id));
        $this->set('holyequipList', $this->Holyequip->getListRoledata($id));
        $this->set('holymanList', $this->Holyman->getListRoledata($id));
        $this->set('soulcrystalList', $this->Soulcrystal->getListRoledata($id));
    }
}
