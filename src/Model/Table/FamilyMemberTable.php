<?php
namespace App\Model\Table;

use App\Model\Entity\FamilyMember;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\ORM\TableRegistry;

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

    /**
     * Delete member from family
     * @param $roleID
     * @param $memberID
     */
    public function deleteMember($roleID, $familyID) {
        $query =  TableRegistry::get('family_member')->query();
        $query->delete()
            ->where(['RoleID' => $roleID, 'FamilyID' => $familyID])
            ->execute();
    }
}