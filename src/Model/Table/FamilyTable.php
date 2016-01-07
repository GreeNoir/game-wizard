<?php
namespace App\Model\Table;

use App\Model\Entity\Family;
use Cake\Form\Schema;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Family Model
 *
 */
class FamilyTable extends Table
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

        $this->table('family');
        $this->displayField('FamilyID');
        $this->primaryKey('FamilyID');
        $this->schema()->columnType('FamilyID', 'float');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->add('FamilyID', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('FamilyID', 'create');

        $validator
            ->requirePresence('FamilyName', 'create')
            ->notEmpty('FamilyName');

        $validator
            ->add('LeaderID', 'valid', ['rule' => 'numeric'])
            ->requirePresence('LeaderID', 'create')
            ->notEmpty('LeaderID');

        $validator
            ->add('FounderID', 'valid', ['rule' => 'numeric'])
            ->requirePresence('FounderID', 'create')
            ->notEmpty('FounderID');

        $validator
            ->add('Active', 'valid', ['rule' => 'numeric'])
            ->requirePresence('Active', 'create')
            ->notEmpty('Active');

        $validator
            ->add('CreateTime', 'valid', ['rule' => 'datetime'])
            ->requirePresence('CreateTime', 'create')
            ->notEmpty('CreateTime');

        return $validator;
    }
}
