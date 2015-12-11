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
        'limit' => 20,
        'sortWhitelist' => [
            'SerialNum', 'TypeID', 'Num', 'EquipType'
        ]
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
            $subaction = $this->request->data('subaction');
            $this->request->session()->write('subaction', $subaction);
            if ($subaction == 'change') {   //filter
                $equipType = $this->request->data('equipType');
                $this->request->session()->write('equipType', $equipType);
                return $this->redirect(['action' =>'equipment_item', $id]);
            } else {   //sorting
                return $this->redirect(['action' =>'equipment_item', $id]);
            }
        }

        $this->loadModel('Item');
        $this->loadModel('AccountCommon');
        $this->loadModel('Roledata');
        $this->set('id', $id);
        $this->set('accountID', $this->Roledata->getRoledataInfo($id)->AccountID);
        $this->set('accountName', $this->Roledata->getRoledataInfo($id)->AccountName);
        $this->set('roleName', $this->Roledata->getRoledataInfo($id)->RoleName);

        $subaction = $this->request->session()->read('subaction');
        $this->request->session()->write('subaction', '');

        $sort = $this->request->query('sort');
        $direction = $this->request->query('direction');
        $hiddenDirection = 'desc';
        if ($sort == 'EquipType') {
            $hiddenDirection = $direction;
        }

        if ($subaction == 'change') {
            $equipType = $this->request->session()->read('equipType');
            $this->set('itemList', $this->paginate($this->Item->getListRoledata($id, ['equipType' => $equipType])));
            $this->set('itemListCount', $this->Item->getListRoledata($id, ['equipType' => $equipType])->count());
        } else {
            $equipType = 'all';
            $this->set('itemList', $this->paginate($this->Item->getListRoledata($id)));
            $this->set('itemListCount', $this->Item->getListRoledata($id)->count());

        }

        $this->set('accountCommonList', $this->AccountCommon->find()->order(['AccountName']));
        $this->set('roledataAccountsList', json_encode($this->AccountCommon->getListRoledataAccounts()));
        $this->set('equipTypes', $this->Item->getEquipmentTypes());
        $this->set('selectedEquipType', $equipType);
        $this->set('hiddenDirection', $hiddenDirection);
        $this->set('_serialize', ['itemList']);
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

    public function edit_equipment() {
        $conn = ConnectionManager::get('sm_db');
        $type = $this->request->query['type'];
        $serial = $this->request->query['serial'];
        $roleID = $this->request->query['roleID'];

        if ($this->request->is(['patch', 'post', 'put'])) {
            $this->request->data['SerialNum'] = $this->request->data['cSerialNum'];
            unset($this->request->data['cSerialNum']);

            $this->loadModel($type);
            $equip = $this->{$type}->findSerial($serial, false);
            $equipCopy = $this->{$type}->newEntity($equip);
            $equipCopy->set($this->request->data);
            $equipCopy->set(['SerialNum' => 0]);
            $equipCopy = $this->{$type}->patchEntity($equipCopy, $equipCopy->toArray());

            if ($this->{$type}->save($equipCopy)) {
                $query = "DELETE FROM ".strtolower($type)." WHERE SerialNum='".$serial."'";
                $conn->query($query);
                $query = "UPDATE ".strtolower($type)." SET SerialNum='".$serial."' WHERE SerialNum=0";
                $conn->query($query);
                $this->Flash->success(__("The {$type} has been saved."));
                return $this->redirect(['action' => 'edit_equipment', '?' => ['type' =>$type, 'serial' => $serial, 'roleID' => $roleID]]);
            } else {
                $this->Flash->error(__("The {$type} could not be saved. Please, try again."));
            }
        }

        $this->loadModel($type);
        $oEquip = $this->{$type}->findSerial($serial, true);
        $aEquip = $this->{$type}->findSerial($serial, false);
        $this->set('oEquip', $oEquip);
        $this->set('aEquip', $aEquip);
        $this->set('type', $type);
        $this->set('roleID', $roleID);
        $this->set('serial', $serial);
    }

}
