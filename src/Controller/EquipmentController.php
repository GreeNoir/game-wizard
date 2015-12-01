<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\I18n\I18n;
use Cake\ORM\TableRegistry;

/**
 * EquipmentCommon Controller
 *
 */
class EquipmentController extends AppController {

    public function start() {
    }

    /**
     * Allow to find item and his owner by SerialNumber
     * return array
     */
    public function find() {
        $serialNum = $this->request->query['serialNum'];
        $this->set('serialNum', $serialNum);
        $this->loadModel('Item');
        $this->viewClass = 'ajax';
        $this->set('ownersList', $this->Item->findItemOwners($serialNum));
    }

    public function addRoledataEquipment() {
        $this->loadModel('Item');

        $typeID = $this->request->data['typeID'];
        $accountID = $this->request->data['accountID'];
        $roleID = $this->request->data['roleID'];
        $count = $this->request->data['count'];
        $this->autoRender = false;
        $item = $this->Item->find()->where(['typeID' => $typeID])->first();

        $newItem = $this->Item->newEntity();
        $newItem = $item;
        $newItem->SerialNum = $this->Item->getNextSerialNum();
        $newItem->AccountID = $accountID;
        $newItem->OwnerID = $roleID;
        $newItem->Num = $count;
        $newItem->TypeID = $this->Item->getNextTypeID();
        $newItem = $this->Item->patchEntity($newItem, $newItem->toArray());
        $this->Item->save($newItem);
    }
}
