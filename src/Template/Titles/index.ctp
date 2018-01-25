<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Title[]|\Cake\Collection\CollectionInterface $titles
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Title'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="titles index large-9 medium-8 columns content">
    <h3><?= __('Titles') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('emp_no') ?></th>
                <th scope="col"><?= $this->Paginator->sort('title') ?></th>
                <th scope="col"><?= $this->Paginator->sort('from_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('to_date') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($titles as $title): ?>
            <tr>
                <td><?= $this->Number->format($title->emp_no) ?></td>
                <td><?= h($title->title) ?></td>
                <td><?= h($title->from_date) ?></td>
                <td><?= h($title->to_date) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $title->emp_no]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $title->emp_no]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $title->emp_no], ['confirm' => __('Are you sure you want to delete # {0}?', $title->emp_no)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
