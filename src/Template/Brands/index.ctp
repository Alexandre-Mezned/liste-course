<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Brand'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="brands index large-9 medium-8 columns content">
    <h3><?= __('Brands') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('brand_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('brand_name') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($brands as $brand): ?>
            <tr>
                <td><?= $brand->has('brand') ? $this->Html->link($brand->brand->brand_id, ['controller' => 'Brands', 'action' => 'view', $brand->brand->brand_id]) : '' ?></td>
                <td><?= h($brand->brand_name) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $brand->brand_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $brand->brand_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $brand->brand_id], ['confirm' => __('Are you sure you want to delete # {0}?', $brand->brand_id)]) ?>
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
