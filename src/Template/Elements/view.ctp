<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Element'), ['action' => 'edit', $element->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Element'), ['action' => 'delete', $element->id], ['confirm' => __('Are you sure you want to delete # {0}?', $element->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Elements'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Element'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="elements view large-9 medium-8 columns content">
    <h3><?= h($element->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($element->name) ?></td>
        </tr>
        <tr>
            <th><?= __('Url') ?></th>
            <td><?= h($element->url) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($element->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($element->created) ?></tr>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($element->modified) ?></tr>
        </tr>
    </table>
</div>
