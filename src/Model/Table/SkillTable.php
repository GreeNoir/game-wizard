<?php
namespace App\Model\Table;

use App\Model\Entity\Skill;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Skill Model
 *
 */
class SkillTable extends Table
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

        $this->table('skill');
        $this->displayField('RoleID');
        $this->primaryKey(['RoleID', 'ID']);

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
            ->add('RoleID', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('RoleID', 'create');

        $validator
            ->add('ID', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('ID', 'create');

        $validator
            ->add('BiddenLevel', 'valid', ['rule' => 'numeric'])
            ->requirePresence('BiddenLevel', 'create')
            ->notEmpty('BiddenLevel');

        $validator
            ->add('SelfLevel', 'valid', ['rule' => 'numeric'])
            ->requirePresence('SelfLevel', 'create')
            ->notEmpty('SelfLevel');

        $validator
            ->add('Proficiency', 'valid', ['rule' => 'numeric'])
            ->requirePresence('Proficiency', 'create')
            ->notEmpty('Proficiency');

        $validator
            ->add('CoolDown', 'valid', ['rule' => 'numeric'])
            ->requirePresence('CoolDown', 'create')
            ->notEmpty('CoolDown');

        $validator
            ->add('active_time', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('active_time');

        return $validator;
    }
}
