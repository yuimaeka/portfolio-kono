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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $thumbnail->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $thumbnail->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Thumbnails'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="thumbnails form content">
            <?= $this->Form->create($thumbnail) ?>
            <fieldset>
                <legend><?= __('Edit Thumbnail') ?></legend>
                <?php
                    echo $this->Form->control('path');
                    echo $this->Form->control('article_id', ['options' => $articles]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
