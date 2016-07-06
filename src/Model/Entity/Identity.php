<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Identity Entity
 *
 * @property int $id
 * @property int $region_id
 * @property \Cake\I18n\Time $creation_date
 * @property string $management_body
 * @property string $financing
 * @property string $intervention_zone
 * @property string $youngs_number
 * @property string $handicap_situation
 * @property string $provenance
 * @property string $team
 * @property \Cake\I18n\Time $modified
 *
 * @property \App\Model\Entity\Region $region
 */
class Identity extends Entity
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
        '*' => true,
        'id' => false
    ];
}
