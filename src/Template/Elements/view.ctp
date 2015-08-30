<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Element'), ['action' => 'edit', $element->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Element'), ['action' => 'delete', $element->id], ['confirm' => __('Are you sure you want to delete # {0}?', $element->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Elements'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Element'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="elements view large-10 medium-9 columns">
    <h2><?= h($element->name) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Name') ?></h6>
            <p><?= h($element->name) ?></p>
            <h6 class="subheader"><?= __('Url') ?></h6>
            <p><?= h($element->url) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($element->id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($element->created) ?></p>
            <h6 class="subheader"><?= __('Modified') ?></h6>
            <p><?= h($element->modified) ?></p>
        </div>
    </div>
</div>
