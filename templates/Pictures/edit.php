<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Picture $picture
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $picture->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $picture->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Pictures'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="pictures form content">
            <?= $this->Form->create($picture) ?>
            <fieldset>
                <legend><?= __('Edit Picture') ?></legend>
                <?php
                    echo $this->Form->control('article_id', ['options' => $articles]);
                    echo $this->Form->control('path');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
