<?php
namespace App\Model\Table;

use App\Model\Entity\GuildSkill;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * GuildSkill Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Guilds
 * @property \Cake\ORM\Association\BelongsTo $Skills
 */
class GuildSkillTable extends Table
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

        $this->table('guild_skill');
        $this->displayField('guild_id');
        $this->primaryKey(['guild_id', 'skill_id']);
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
            ->add('progress', 'valid', ['rule' => 'numeric'])
            ->requirePresence('progress', 'create')
            ->notEmpty('progress');

        $validator
            ->add('level', 'valid', ['rule' => 'numeric'])
            ->requirePresence('level', 'create')
            ->notEmpty('level');

        $validator
            ->add('researching', 'valid', ['rule' => 'boolean'])
            ->requirePresence('researching', 'create')
            ->notEmpty('researching');

        $validator
            ->add('active', 'valid', ['rule' => 'boolean'])
            ->requirePresence('active', 'create')
            ->notEmpty('active');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['guild_id'], 'Guilds'));
        $rules->add($rules->existsIn(['skill_id'], 'Skills'));
        return $rules;
    }
}
