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
        $conn = ConnectionManager::get('sm_db');
        $this->loadModel('Item');
        $this->loadModel('Equip');
        $this->loadModel('Holyequip');
        $this->loadModel('Holyman');
        $this->loadModel('Soulcrystal');

        $serialNum = $this->request->data['serial'];
        $typeID = $this->request->data['typeID'];
        $accountID = $this->request->data['accountID'];
        $roleID = $this->request->data['roleID'];
        $count = $this->request->data['count'];
        $this->autoRender = false;

        $item = $this->Item
            ->find()
            ->autoFields(true)
            ->hydrate(false)
            ->where(['typeID' => $typeID])->first();

        $typeID = $this->Item->getNextTypeID();
        $newSerialNum = $this->Item->getNextSerialNum();

        $newItem = $this->Item->newEntity($item);
        $newItem->set([
            'SerialNum' => 0,
            'AccountID' => $accountID,
            'OwnerID' => $roleID,
            'Num' => $count,
            'TypeID' => $typeID,
            'CreateTime' => $this->getTimeNow()]);

        $newItem = $this->Item->patchEntity($newItem, $newItem->toArray());
        $this->Item->save($newItem);

        $query = "UPDATE item SET SerialNum='".$newSerialNum."' WHERE TypeID=".$typeID;
        $conn->query($query);

        $linkedEquip = $this->Equip->findSerial($serialNum, false);
        $linkedHolyequip = $this->Holyequip->findSerial($serialNum, false);
        $linkedHolyman = $this->Holyman->findSerial($serialNum, false);
        $linkedSoulcrystal = $this->Soulcrystal->findSerial($serialNum, false);

        if ($linkedEquip) {
            $newEquip = $this->Equip->newEntity($linkedEquip);
            $newEquip->set(['SerialNum' => 0]);
            $this->Equip->save($newEquip);
            $query = "UPDATE equip SET SerialNum='".$newSerialNum."' WHERE SerialNum=0";
            $conn->query($query);
        }

        if ($linkedHolyequip) {
            $newHolyequip = $this->Holyequip->newEntity($linkedHolyequip);
            $newHolyequip->set(['SerialNum' => 0]);
            $this->Holyequip->save($newHolyequip);
            $query = "UPDATE holyequip SET SerialNum='".$newSerialNum."' WHERE SerialNum=0";
            $conn->query($query);
        }

        if ($linkedHolyman) {
            $newHolyman = $this->Holyman->newEntity($linkedHolyman);
            $newHolyman->set(['SerialNum' => 0]);
            $this->Holyman->save($newHolyman);
            $query = "UPDATE holyman SET SerialNum='".$newSerialNum."' WHERE SerialNum=0";
            $conn->query($query);
        }

        if ($linkedSoulcrystal) {
            $newSoulcrystal = $this->Soulcrystal->newEntity($linkedSoulcrystal);
            $newSoulcrystal->set(['SerialNum' => 0]);
            $this->Soulcrystal->save($newSoulcrystal);
            $query = "UPDATE soulcrystal SET SerialNum='".$newSerialNum."' WHERE SerialNum=0";
            $conn->query($query);
        }
    }

    private function getTimeNow() {
        $conn = ConnectionManager::get('sm_db');
        $result = $conn->query('select now()')->fetch();
        return $result[0];
    }

}
