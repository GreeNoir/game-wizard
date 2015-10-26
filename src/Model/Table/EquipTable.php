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
        $this->primaryKey('SerialNum');
    }

    /**
     * @param $accountID - Account ID
     * Get list of equip from account $accountID
     * @return array
     */
    public function getList($accountID) {
        $equip = TableRegistry::get('equip');
        $result = $equip->find()
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
                'roleID' => 'i.OwnerID'
            ])
            ->join([
                'i' => [
                    'table' => 'item',
                    'conditions' => [
                        'i.SerialNum = equip.SerialNum',
                    ]
                ]
            ])
            ->where(['i.AccountID' => $accountID])->toArray();
        return $result;
    }
}