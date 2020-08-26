<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Article Entity
 *
 * @property int $id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property string $explanation
 * @property \Cake\I18n\FrozenTime $picture_created
 *
 * @property \App\Model\Entity\Picture[] $pictures
 * @property \App\Model\Entity\Thumbnail[] $thumbnails
 */
class Article extends Entity
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
        'created' => true,
        'modified' => true,
        'explanation' => true,
        'picture_created' => true,
        'pictures' => true,
        'thumbnails' => true,
    ];
}
