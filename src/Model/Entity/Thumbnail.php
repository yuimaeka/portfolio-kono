<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Thumbnail Entity
 *
 * @property int $id
 * @property string $path
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property int $article_id
 *
 * @property \App\Model\Entity\Article $article
 */
class Thumbnail extends Entity
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
        'path' => true,
        'created' => true,
        'modified' => true,
        'article_id' => true,
        'article' => true,
    ];
}
