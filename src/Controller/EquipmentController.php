<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\I18n\I18n;

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
        $typeID = $this->request->data('typeID');
        $accountID = $this->request->data('account');
        $roleID = $this->request->data('roledata');
        $count = $this->request->data('count');
        $this->loadModel('Item');
        $this->autoRender = false;
        $item = $this->Item->find()->where(['typeID' => $typeID])->first();
        $item->AccountID = $accountID;
        $item->OwnerID = $roleID;
        $item->Num = $count;
        $item->SerialNum = '000';
        $item->TypeID = '0000';
        if ($this->Item->save($item)) {
            $this->set('response', true);
        } else {
            $this->set('response', false);
        }
    }
}
