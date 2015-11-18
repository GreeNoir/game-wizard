<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Datasource\ConnectionManager;

/**
 * Roledata Controller
 *
 * @property \App\Model\Table\RoledataTable $Roledata
 */
class RoledataController extends AppController
{
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

    public function equipment_item($id) {
        if ($this->request->is('post')) {
            $equipType = $this->request->data('equipType');
            $this->request->session()->write('equipType', $equipType);
            return $this->redirect(['action' =>'equipment_item', $id]);
        }
        $equipType = $this->request->session()->read('equipType');
//        $this->request->session()->write('equipType', null);
        $this->loadModel('Item');
        $this->set('id', $id);
        $this->set('itemList', $this->paginate($this->Item->getListRoledata($id, ['equipType' => $equipType])));
        $this->set('itemListCount', $this->Item->getListRoledata($id, ['equipType' => $equipType])->count());
        $this->set('equipTypes', $this->Item->getEquipmentTypes());
        $this->set('selectedEquipType', $equipType);
        $this->set('_serialize', ['itemList']);
    }

    public function equipment_equip($id) {
        $this->loadModel('Equip');
        $this->set('id', $id);
        $this->set('equipList', $this->paginate($this->Equip->getListRoledata($id)));
        $this->set('equipListCount', $this->Equip->getListRoledata($id)->count());
        $this->set('_serialize', ['equipList']);
    }

    public function equipment_holyequip($id) {
        $this->loadModel('Holyequip');
        $this->set('id', $id);
        $this->set('holyequipList', $this->paginate($this->Holyequip->getListRoledata($id)));
        $this->set('holyequipListCount', $this->Holyequip->getListRoledata($id)->count());
        $this->set('_serialize', ['holyequipList']);
    }

    public function equipment_holyman($id) {
        $this->loadModel('Holyman');
        $this->set('id', $id);
        $this->set('holymanList', $this->paginate($this->Holyman->getListRoledata($id)));
        $this->set('holymanListCount', $this->Holyman->getListRoledata($id)->count());
        $this->set('_serialize', ['holymanList']);
    }

    public function equipment_soulcrystal($id) {
        $this->loadModel('Soulcrystal');
        $this->set('id', $id);
        $this->set('soulcrystalList', $this->paginate($this->Soulcrystal->getListRoledata($id)));
        $this->set('soulcrystalListCount', $this->Soulcrystal->getListRoledata($id)->count());
        $this->set('_serialize', ['soulcrystalList']);
    }

    public function del_equip() {
        $this->request->allowMethod(['post', 'delete']);
        $this->autoRender = false;
        $this->loadModel('Item');
        $serialNum = $this->request->data('serial');
        $typeID = $this->request->data('typeid');
        $roleID = $this->request->data('roleid');
        $base = $this->request->data('base');

        $db = ConnectionManager::get('sm_db');
        $del = 'DELETE FROM item WHERE TypeID='.$typeID.' AND OwnerID='.$roleID;
        $db->query($del);
        return $this->redirect(['action' => 'equipment_'.$base, $roleID]);
    }

    public function view_equip() {
        $type = $this->request->query['type'];
        $serial = $this->request->query['serial'];
        switch($type) {
            case 'equip':
                $this->loadModel('Equip');
                $equipItem = $this->Equip->findSerial($serial);
                $this->set('equipItem', $equipItem);
                break;
            case 'holyequip':
                $this->loadModel('Holyequip');
                $holyequipItem = $this->Holyequip->findSerial($serial);
                $this->set('holyequipItem', $holyequipItem);
                break;
            case 'holyman':
                $this->loadModel('Holyman');
                $holymanItem = $this->Holyman->findSerial($serial);
                $this->set('holymanItem', $holymanItem);
                break;
            case 'soulcrystal':
                $this->loadModel('Soulcrystal');
                $soulcrystalItem = $this->Soulcrystal->findSerial($serial);
                $this->set('soulcrystalItem', $soulcrystalItem);
                break;
        }
        $this->render('view_'.$type);
    }

    public function edit_equip() {

    }
}
