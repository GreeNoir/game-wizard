<?php

namespace App\Model\Table;

use App\Model\Entity\AccountCommon;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\ORM\TableRegistry;

/**
 * BlackMac Model
 *
 */
class BlackMacTable extends Table
{
    public static function defaultConnectionName() {
        return 'sm_login';
    }
}