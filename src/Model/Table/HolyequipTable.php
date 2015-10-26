<?php

namespace App\Model\Table;

use App\Model\Entity\AccountCommon;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\ORM\TableRegistry;

/**
 * Holyequip Model
 *
 */
class HolyequipTable extends Table
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

        $this->table('holyequip');
        $this->primaryKey('SerialNum');
    }

    /**
     * @param $accountID - Account ID
     * Get list of holyequip from account $accountID
     * @return array
     */
    public function getList($accountID) {
        $holyequip = TableRegistry::get('holyequip');
        $result = $holyequip->find()
            ->select(['cSerialNum' => 'CONVERT (holyequip.SerialNum, CHAR)',
                'CostHoly',
                'EnhanceCount',
                'HolyDmgChg',
                'HolyDefChg',
                'CritChg',
                'HolyCritRateChg',
                'ExDamageChg',
                'AttackTecChg',
                'NeglectToughnessChg'
            ])
            ->join([
                'i' => [
                    'table' => 'item',
                    'conditions' => [
                        'i.SerialNum = holyequip.SerialNum',
                    ]
                ]
            ])
            ->where(['i.AccountID' => $accountID])->toArray();
        return $result;
    }
}