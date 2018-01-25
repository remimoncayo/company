<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Title Entity
 *
 * @property int $emp_no
 * @property string $title
 * @property \Cake\I18n\FrozenDate $from_date
 * @property \Cake\I18n\FrozenDate $to_date
 */
class Title extends Entity
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
        'to_date' => true
    ];
}
