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

    public function index() {

    }

    /**
     * Allow to find item and his owner by SerialNumber
     * return array
     */
    public function find() {
        $serialNum = $this->request->query['serialNum'];
        $this->set('serialNum', $serialNum);
        $this->loadModel('Item');
        $this->set('ownersList', $this->Item->getItemOwners($serialNum));
    }
}
