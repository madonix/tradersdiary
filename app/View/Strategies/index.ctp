<div class="strategies index">
	<h2><?php echo __('Strategies'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('strategy_id'); ?></th>
			<th><?php echo $this->Paginator->sort('strategy_category_id'); ?></th>
			<th><?php echo $this->Paginator->sort('strategy'); ?></th>
			<th><?php echo $this->Paginator->sort('comment'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($strategies as $strategy): ?>
	<tr>
		<td><?php echo h($strategy['Strategy']['strategy_id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($strategy['StrategyCategory']['category'], array('controller' => 'strategy_categories', 'action' => 'view', $strategy['StrategyCategory']['strategy_category_id'])); ?>
		</td>
		<td><?php echo h($strategy['Strategy']['strategy']); ?>&nbsp;</td>
		<td><?php echo h($strategy['Strategy']['comment']); ?>&nbsp;</td>
		<td><?php echo h($strategy['Strategy']['created']); ?>&nbsp;</td>
		<td><?php echo h($strategy['Strategy']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $strategy['Strategy']['strategy_id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $strategy['Strategy']['strategy_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $strategy['Strategy']['strategy_id']), null, __('Are you sure you want to delete # %s?', $strategy['Strategy']['strategy_id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Strategy'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Strategy Categories'), array('controller' => 'strategy_categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Strategy Category'), array('controller' => 'strategy_categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Strategies Rules Orders'), array('controller' => 'strategies_rules_orders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Strategies Rules Order'), array('controller' => 'strategies_rules_orders', 'action' => 'add')); ?> </li>
	</ul>
</div>
