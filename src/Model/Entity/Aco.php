<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Aco Entity
 *
 * @property int $id
 * @property int|null $controller_id
 * @property int|null $action_id
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Controller $controller
 * @property \App\Model\Entity\Action $action
 * @property \App\Model\Entity\Acosrole[] $acosroles
 */
class Aco extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'controller_id' => true,
        'action_id' => true,
        'created' => true,
        'modified' => true,
        'controller' => true,
        'action' => true,
        'acosroles' => true
    ];
}
