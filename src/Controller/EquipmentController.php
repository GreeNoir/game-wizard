<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\I18n\I18n;
use Cake\ORM\TableRegistry;
use Cake\Datasource\ConnectionManager;

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

        $typeID = $this->Item->getNextTypeID();

        $newItem = $this->Item->newEntity();
        $newItem->SerialNum = 0;
        $newItem->AccountID = $accountID;
        $newItem->OwnerID = $roleID;
        $newItem->Num = $count;
        $newItem->TypeID = $typeID;

        $newItem->Bind = $item->Bind;
	    $newItem->LockStat = $item->LockStat;
	    $newItem->UnlockTime = $item->UnlockTime;
	    $newItem->UseTimes = $item->UseTimes;
	    $newItem->FirstGainTime = $item->FirstGainTime;
	    $newItem->CreateMode = $item->CreateMode;
	    $newItem->CreateID = $item->CreateID;
	    $newItem->CreatorID = $item->CreatorID;
	    $newItem->CreateTime = date('Y-m-d H:i:s');
	    $newItem->ContainerTypeID = $item->ContainerTypeID;
	    $newItem->Suffix = $item->Suffix;
	    $newItem->NameID = $item->NameID;
	    $newItem->ItemSpecVal1 = $item->ItemSpecVal1;
	    $newItem->ItemSpecVal2 = $item->ItemSpecVal2;
	    $newItem->del_time = $item->del_time;

        $newItem = $this->Item->patchEntity($newItem, $newItem->toArray());
        $this->Item->save($newItem);

        $conn = ConnectionManager::get('sm_db');
        $query = "UPDATE item SET SerialNum='".$this->Item->getNextSerialNum()."' WHERE TypeID=".$typeID;
        $conn->query($query);
    }
}
