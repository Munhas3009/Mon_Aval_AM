<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Acos Model
 *
 * @property \App\Model\Table\ControllersTable|\Cake\ORM\Association\BelongsTo $Controllers
 * @property \App\Model\Table\ActionsTable|\Cake\ORM\Association\BelongsTo $Actions
 * @property \App\Model\Table\AcosrolesTable|\Cake\ORM\Association\HasMany $Acosroles
 *
 * @method \App\Model\Entity\Aco get($primaryKey, $options = [])
 * @method \App\Model\Entity\Aco newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Aco[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Aco|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Aco saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Aco patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Aco[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Aco findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class AcosTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('acos');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Controllers', [
            'foreignKey' => 'controller_id'
        ]);
        $this->belongsTo('Actions', [
            'foreignKey' => 'action_id'
        ]);
        $this->hasMany('Acosroles', [
            'foreignKey' => 'aco_id'
        ]);
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
            ->nonNegativeInteger('id')
            ->allowEmptyString('id', 'create');

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
        $rules->add($rules->existsIn(['controller_id'], 'Controllers'));
        $rules->add($rules->existsIn(['action_id'], 'Actions'));

        return $rules;
    }
}
