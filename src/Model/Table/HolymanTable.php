<?php

namespace App\Model\Table;

use App\Model\Entity\AccountCommon;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\ORM\TableRegistry;

/**
 * Holyman Model
 *
 */
class HolymanTable extends Table
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

        $this->table('holyman');
        $this->primaryKey('SerialNum');
    }

    /**
     * @param $accountID - Account ID
     * Get list of holyman from account $accountID
     * @return array
     */
    public function getList($accountID) {
        $holyman = TableRegistry::get('holyman');
        $result = $holyman->find()
            ->select(['cSerialNum' => 'CONVERT (holyman.SerialNum, CHAR)',
                'DevourNum',
                'EquipmentNumber',
                'ToDayDevourNum',
                'EquipSerialIDs',
                'CostHoly',
                'CoValue',
                'HolyDmg',
                'HolyDef',
                'Crit',
                'HolyCritRate',
                'ExDamage',
                'AttackTec',
                'NeglectToughness',
                'HolyValue',
                'MaxDevourNum'
            ])
            ->join([
                'i' => [
                    'table' => 'item',
                    'conditions' => [
                        'i.SerialNum = holyman.SerialNum',
                    ]
                ]
            ])
            ->where(['i.AccountID' => $accountID])->toArray();
        return $result;
    }
}