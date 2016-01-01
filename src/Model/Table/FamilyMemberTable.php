<?php
namespace App\Model\Table;

use App\Model\Entity\Family;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * FamilyMember Model
 *
 */
class FamilyMemberTable extends Table
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

        $this->table('family_member');
        $this->belongsTo('roledata', [
            'className' => 'Roledata',
            'foreignKey' => 'RoleID',
            'joinType'  => 'INNER'
        ]);
        $this->belongsTo('family', [
            'className' => 'Family',
            'foreignKey' => 'FamilyID',
            'joinType'  => 'INNER'
        ]);
    }
}