<?php

namespace App\Model\Table;

use App\Model\Entity\AccountCommon;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\ORM\TableRegistry;

/**
 * Itam Model
 *
 */
class ItemTable extends Table{

    public static function defaultConnectionName() {
        return 'sm_db';
    }

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('item');
        $this->primaryKey('SerialNum');
    }

    /**
     * @param $accountID - Account ID
     * Get list of item from account $accountID
     * @return array
     */
    public function getListAccount($accountID) {
        $item = TableRegistry::get('item');
        $result = $item->find()
            ->select(['cSerialNum' => 'CONVERT (item.SerialNum, CHAR)',
                'Num', 'TypeID', 'Bind', 'OwnerID', 'CreateTime', 'del_time'])
            ->where(['AccountID' => $accountID])->toArray();
        return $result;
    }

    /**
     * @param $roleID - Roledata ID
     * Get list of item from roledata $roleID
     * @return array
     */
    public function getListRoledata($roleID) {
        $item = TableRegistry::get('item');
        $result = $item->find()
            ->select(['cSerialNum' => 'CONVERT (item.SerialNum, CHAR)',
                'Num', 'TypeID', 'Bind', 'CreateTime', 'del_time'])
            ->where(['OwnerID' => $roleID])->toArray();
        return $result;
    }

    /**
     * @param $serialNum
     * Get array of equipment owners
     * @return array
     */
    public function getItemOwners($serialNum) {
        $item = TableRegistry::get('item');
        $listAll = $item->find()
            ->select(['cSerialNum' => 'CONVERT (item.SerialNum, CHAR)',
                'Num', 'TypeID',
                'Name' => "IF(item_name.name <> '', item_name.name, equip_name.name)",
                'AccountID', 'AccountName' => 'a.AccountName', 'OwnerID', 'RoleName' => 'r.RoleName'])
            ->join([
                'a' => [
                    'table' => 'account_common',
                    'conditions' => [
                        'a.AccountID = item.AccountID',
                    ]
                ]
            ])
            ->join([
                'r' => [
                    'table' => 'roledata',
                    'conditions' => [
                        'r.RoleID = item.OwnerID'
                    ]
                ]
            ])
            ->join([
                'item_name' => [
                    'table' => 'wizard_db.item_name',
                    'type'  => 'LEFT',
                    'conditions' => [
                        'item_name.id = item.TypeID'
                    ]
                ]
            ])
            ->join([
                'equip_name' => [
                    'table' => 'wizard_db.equip_name',
                    'type'  => 'LEFT',
                    'conditions' => [
                        'equip_name.id = item.TypeID'
                    ]
                ]
            ])
            ->toArray();

        if (count($listAll) > 0) {
            foreach($listAll as $item) {
                if ($item->cSerialNum == $serialNum) {
                    $result[] = ['AccountID' => $item->AccountID, 'Num' => $item->Num, 'TypeID' => $item->TypeID, 'Name' => $item->Name, 'AccountName' => $item->AccountName, 'OwnerID' => $item->OwnerID, 'RoleName' => $item->RoleName];
                    return $result;
                }
            }
        }
        return [];
    }
}