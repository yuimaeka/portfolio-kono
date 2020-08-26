<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Thumbnail[]|\Cake\Collection\CollectionInterface $thumbnails
 */
?>
<div class="thumbnails index content">
    <?= $this->Html->link(__('New Thumbnail'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Thumbnails') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('path') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th><?= $this->Paginator->sort('article_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($thumbnails as $thumbnail): ?>
                <tr>
                    <td><?= $this->Number->format($thumbnail->id) ?></td>
                    <td><?= h($thumbnail->path) ?></td>
                    <td><?= h($thumbnail->created) ?></td>
                    <td><?= h($thumbnail->modified) ?></td>
                    <td><?= $thumbnail->has('article') ? $this->Html->link($thumbnail->article->id, ['controller' => 'Articles', 'action' => 'view', $thumbnail->article->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $thumbnail->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $thumbnail->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $thumbnail->id], ['confirm' => __('Are you sure you want to delete # {0}?', $thumbnail->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
