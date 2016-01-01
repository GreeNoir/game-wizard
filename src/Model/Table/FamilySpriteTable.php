<?php
namespace App\Model\Table;

use App\Model\Entity\FamilySprite;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * FamilySprite Model
 *
 */
class FamilySpriteTable extends Table
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

        $this->table('family_sprite');
        $this->displayField('FamilyID');
        $this->primaryKey('FamilyID');

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
            ->add('Level', 'valid', ['rule' => 'numeric'])
            ->requirePresence('Level', 'create')
            ->notEmpty('Level');

        $validator
            ->requirePresence('Exp', 'create')
            ->notEmpty('Exp');

        $validator
            ->requirePresence('Name', 'create')
            ->notEmpty('Name');

        $validator
            ->add('HP', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('HP');

        $validator
            ->add('EXAttack', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('EXAttack');

        $validator
            ->add('InAttack', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('InAttack');

        $validator
            ->add('EXDefense', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('EXDefense');

        $validator
            ->add('InDefense', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('InDefense');

        $validator
            ->add('EXAttackDeeper', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('EXAttackDeeper');

        $validator
            ->add('InAttackDeeper', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('InAttackDeeper');

        $validator
            ->add('EXAttackResistance', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('EXAttackResistance');

        $validator
            ->add('InAttackResistance', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('InAttackResistance');

        $validator
            ->add('Toughness', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('Toughness');

        $validator
            ->add('CritDes', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('CritDes');

        $validator
            ->add('ControleffectDeepen', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('ControleffectDeepen');

        $validator
            ->add('ControleffectResistance', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('ControleffectResistance');

        $validator
            ->add('SlowingeffectDeepen', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('SlowingeffectDeepen');

        $validator
            ->add('SlowingeffectResistance', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('SlowingeffectResistance');

        $validator
            ->add('FixedeffectDeepen', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('FixedeffectDeepen');

        $validator
            ->add('FixedeffectResistance', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('FixedeffectResistance');

        $validator
            ->add('AgingeffectDeepen', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('AgingeffectDeepen');

        $validator
            ->add('AgingeffectResistance', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('AgingeffectResistance');

        return $validator;
    }
}
