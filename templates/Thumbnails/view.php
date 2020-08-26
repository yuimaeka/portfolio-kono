<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Thumbnail $thumbnail
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Thumbnail'), ['action' => 'edit', $thumbnail->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Thumbnail'), ['action' => 'delete', $thumbnail->id], ['confirm' => __('Are you sure you want to delete # {0}?', $thumbnail->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Thumbnails'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Thumbnail'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="thumbnails view content">
            <h3><?= h($thumbnail->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Path') ?></th>
                    <td><?= h($thumbnail->path) ?></td>
                </tr>
                <tr>
                    <th><?= __('Article') ?></th>
                    <td><?= $thumbnail->has('article') ? $this->Html->link($thumbnail->article->id, ['controller' => 'Articles', 'action' => 'view', $thumbnail->article->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($thumbnail->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($thumbnail->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($thumbnail->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
