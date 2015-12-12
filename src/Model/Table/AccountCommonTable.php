<?php

namespace App\Model\Table;

use App\Model\Entity\AccountCommon;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\ORM\TableRegistry;

/**
 * AccountCommon Model
 *
 */
class AccountCommonTable extends Table
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

        $this->table('account_common');
        $this->primaryKey('AccountID');
    }

    public function getIndexList() {
        $account_common = TableRegistry::get('account_common');
        $query = $account_common->find()
            ->select(['AccountID', 'AccountName', 'LastUseRoleID', 'r.RoleName', 'BaiBaoYuanBao', 'WareSize', 'WareSilver', 'l.ip', 'l.mac'])
            ->hydrate(false)
            ->join([
                'l' => [
                        'table' => 'sm_login.login_log',
                        'conditions' => [
                            'l.accountID = account_common.AccountID',
                            'l.time = (SELECT MAX(time) FROM sm_login.login_log WHERE accountID=account_common.AccountID)']
                       ],
                'r' => [
                        'table' => 'roledata',
                        'conditions' => 'r.RoleID = account_common.LastUseRoleID']
            ])
            ->group(['account_common.AccountID']);
        return $query;
    }

    public function getNewAccountID() {
        $query = TableRegistry::get('AccountCommon')->find();
        $query->select(['count' => $query->func()->count('*')]);
        $count = 0;
        foreach($query as $row) {
            $count = $row->count;
        }

        $nextID = 0;
        if ($count > 0) {
            $query->select(['maxID' => $query->func()->max('AccountID')]);
            foreach ($query as $row) {
                $nextID = $row->maxID;
            }
        }
        $nextID ++;
        return $nextID;
    }

    public function getListRoledata($AccountID) {
        $result = TableRegistry::get('roledata')->find()
            ->select(['AccountID', 'RoleID', 'RoleName', 'Sex', 'MapID', 'X', 'Y', 'Z'])
            ->where(['AccountID' => $AccountID])->toArray();
        return $result;
    }

    public function getListRoledataAccounts() {
        $accountsList = TableRegistry::get('AccountCommon')->find()->select(['AccountID'])->toArray();
        $roledataLists = [];
        foreach($accountsList as $item) {
            $accountID = $item->AccountID;
            $roledataLists[$accountID] = $this->getListRoledata($accountID);
        }
        return $roledataLists;
    }

    /**
     * Delete account and all linked roledata
     * @param $accountID
     */
    public function deleteAccount($accountID) {

    }

}

