<?php

namespace App\Model\Table;

use App\Model\Entity\AccountCommon;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\ORM\TableRegistry;

/**
 * Soulcrystal Model
 *
 */
class SoulcrystalTable extends Table
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

        $this->table('soulcrystal');
        $this->primaryKey('SerialNum');
    }

    /**
     * @param $accountID - Account ID
     * Get list of soulcrystal from account $accountID
     * @return array
     */
    public function getList($accountID) {
        $soulcrystal = TableRegistry::get('soulcrystal');
        $result = $soulcrystal->find()
            ->select(['cSerialNum' => 'CONVERT (soulcrystal.SerialNum, CHAR)',
                'SoulLevel',
                'SoulQlty',
                'SoulSkillID',
                'SoulAttID1',
                'SoulAttID2',
                'SoulAttID3',
                'SoulAttID4',
                'SoulAttID5',
                'SoulAttID6',
                'SoulAttID7',
                'SoulAttID8'
            ])
            ->join([
                'i' => [
                    'table' => 'item',
                    'conditions' => [
                        'i.SerialNum = soulcrystal.SerialNum',
                    ]
                ]
            ])
            ->where(['i.AccountID' => $accountID])->toArray();
        return $result;
    }
}