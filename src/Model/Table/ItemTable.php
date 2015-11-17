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
     * @param $roleID - Roledata ID
     * Get list of item from roledata $roleID
     * @return array
     */
    public function getListRoledata($roleID) {
        $item = TableRegistry::get('item');
        $query = $item->find()
            ->select(['cSerialNum' => 'CONVERT (item.SerialNum, CHAR)',
                'Num', 'TypeID', 'Bind', 'CreateTime', 'del_time',
                'Name' => 'item_name.name',
                'EquipType' =>
                "CASE
                WHEN equip.SerialNum IS NOT NULL THEN 'equip'
                WHEN holyequip.SerialNum IS NOT NULL THEN 'holyequip'
                WHEN holyman.SerialNum IS NOT NULL THEN 'holyman'
                WHEN soulcrystal.SerialNum IS NOT NULL THEN 'soulcrystal'
                ELSE 'not_set'
                END"
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
                'equip' => [
                    'table' => 'equip',
                    'type'  => 'LEFT',
                    'conditions' => [
                        'item.SerialNum = equip.SerialNum',
                    ]
                ]
            ])
            ->join([
                'holyequip' => [
                    'table' => 'holyequip',
                    'type'  => 'LEFT',
                    'conditions' => [
                        'item.SerialNum = holyequip.SerialNum',
                    ]
                ]
            ])
            ->join([
                'holyman' => [
                    'table' => 'holyman',
                    'type'  => 'LEFT',
                    'conditions' => [
                        'item.SerialNum = holyman.SerialNum',
                    ]
                ]
            ])
            ->join([
                'soulcrystal' => [
                    'table' => 'soulcrystal',
                    'type'  => 'LEFT',
                    'conditions' => [
                        'item.SerialNum = soulcrystal.SerialNum',
                    ]
                ]
            ])
            ->where(['OwnerID' => $roleID]);
        return $query;
    }

    /**
     * @param $serialNum
     * Get array of equipment owners
     * @return array
     */
    public function findItemOwners($serialNum) {
        $item = TableRegistry::get('item');
        $result = $item->find()
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
            ->having(['cSerialNum' => $serialNum])
            ->toArray();

        return $result;
    }
}