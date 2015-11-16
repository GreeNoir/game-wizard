<?php

namespace App\Model\Table;

use App\Model\Entity\AccountCommon;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\ORM\TableRegistry;

/**
* Equip Model
*
*/
class EquipTable extends Table
{
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

        $this->table('equip');
        //$this->primaryKey('SerialNum');
    }

    /**
     * @param $roleID - Roledata ID
     * Get list of equip from roledata $roleID
     * @return array
     */
    public function getListRoledata($roleID) {
        $equip = TableRegistry::get('equip');
        $query = $equip->find()
            ->select(['cSerialNum' => 'CONVERT (equip.SerialNum, CHAR)',
                'Quality',
                'MinUseLevel',
                'MaxUseLevel',
                'WuHun',
                'MinDmg',
                'MaxDmg',
                'Armor',
                'PotVal',
                'PotValUsed',
                'typeID' => 'i.TypeID',
                'num' => 'i.Num',
            ])
            ->join([
                'i' => [
                    'table' => 'item',
                    'conditions' => [
                        'i.SerialNum = equip.SerialNum',
                    ]
                ]
            ])
            ->where(['i.OwnerID' => $roleID]);
        return $query;
    }

    public function findSerial($serialNum) {
        $equip = TableRegistry::get('equip');
        $entity = $equip->find()
            ->select(['SerialNum' => 'CONVERT (equip.SerialNum, CHAR)'])
            ->having(['SerialNum' => $serialNum])->first();
        return $entity;
    }
}