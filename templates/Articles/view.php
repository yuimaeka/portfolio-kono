<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Article $article
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Article'), ['action' => 'edit', $article->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Article'), ['action' => 'delete', $article->id], ['confirm' => __('Are you sure you want to delete # {0}?', $article->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Articles'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Article'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="articles view content">
            <h3><?= h($article->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Explanation') ?></th>
                    <td><?= h($article->explanation) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($article->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($article->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($article->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Picture Created') ?></th>
                    <td><?= h($article->picture_created) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Pictures') ?></h4>
                <?php if (!empty($article->pictures)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Article Id') ?></th>
                            <th><?= __('Path') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($article->pictures as $pictures) : ?>
                        <tr>
                            <td><?= h($pictures->id) ?></td>
                            <td><?= h($pictures->article_id) ?></td>
                            <td><?= h($pictures->path) ?></td>
                            <td><?= h($pictures->created) ?></td>
                            <td><?= h($pictures->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Pictures', 'action' => 'view', $pictures->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Pictures', 'action' => 'edit', $pictures->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Pictures', 'action' => 'delete', $pictures->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pictures->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Thumbnails') ?></h4>
                <?php if (!empty($article->thumbnails)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Path') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th><?= __('Article Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($article->thumbnails as $thumbnails) : ?>
                        <tr>
                            <td><?= h($thumbnails->id) ?></td>
                            <td><?= h($thumbnails->path) ?></td>
                            <td><?= h($thumbnails->created) ?></td>
                            <td><?= h($thumbnails->modified) ?></td>
                            <td><?= h($thumbnails->article_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Thumbnails', 'action' => 'view', $thumbnails->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Thumbnails', 'action' => 'edit', $thumbnails->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Thumbnails', 'action' => 'delete', $thumbnails->id], ['confirm' => __('Are you sure you want to delete # {0}?', $thumbnails->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
