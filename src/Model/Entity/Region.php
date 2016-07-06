<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Region Entity
 *
 * @property int $id
 * @property string $name
 * @property string $type
 * @property string $street
 * @property string $city
 * @property int $zip_code
 * @property string $website
 * @property string $direction
 * @property string $responsible_name
 * @property string $responsible_phone
 * @property string $responsible_email
 * @property string $management_body
 *
 * @property \App\Model\Entity\Accompaniment[] $accompaniments
 * @property \App\Model\Entity\CourseType[] $course_types
 * @property \App\Model\Entity\Identity[] $identities
 * @property \App\Model\Entity\Indicator[] $indicators
 * @property \App\Model\Entity\PreparedJob[] $prepared_jobs
 */
class Region extends Entity
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
