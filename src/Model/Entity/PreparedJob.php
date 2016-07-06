<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * PreparedJob Entity
 *
 * @property int $id
 * @property int $region_id
 * @property string $frequent_jobs
 * @property string $others
 *
 * @property \App\Model\Entity\Region $region
 */
class PreparedJob extends Entity
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
