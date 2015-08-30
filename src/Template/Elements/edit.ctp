<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $element->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $element->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Elements'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="elements form large-9 medium-8 columns content">
    <?= $this->Form->create($element) ?>
    <fieldset>
        <legend><?= __('Edit Element') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('url');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
