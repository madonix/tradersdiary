<div class="strategiesRulesOrders index">
	<h2><?php echo __('Strategies Rules Orders'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('strategies_rules_orders_id'); ?></th>
			<th><?php echo $this->Paginator->sort('strategy_id'); ?></th>
			<th><?php echo $this->Paginator->sort('rule_id'); ?></th>
			<th><?php echo $this->Paginator->sort('ruleorder'); ?></th>
			<th><?php echo $this->Paginator->sort('comment'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($strategiesRulesOrders as $strategiesRulesOrder): ?>
	<tr>
		<td><?php echo h($strategiesRulesOrder['StrategiesRulesOrder']['strategies_rules_orders_id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($strategiesRulesOrder['Strategy']['strategy'], array('controller' => 'strategies', 'action' => 'view', $strategiesRulesOrder['Strategy']['strategy_id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($strategiesRulesOrder['Rule']['rule'], array('controller' => 'rules', 'action' => 'view', $strategiesRulesOrder['Rule']['rule_id'])); ?>
		</td>
		<td><?php echo h($strategiesRulesOrder['StrategiesRulesOrder']['ruleorder']); ?>&nbsp;</td>
		<td><?php echo h($strategiesRulesOrder['StrategiesRulesOrder']['comment']); ?>&nbsp;</td>
		<td><?php echo h($strategiesRulesOrder['StrategiesRulesOrder']['created']); ?>&nbsp;</td>
		<td><?php echo h($strategiesRulesOrder['StrategiesRulesOrder']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $strategiesRulesOrder['StrategiesRulesOrder']['strategies_rules_orders_id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $strategiesRulesOrder['StrategiesRulesOrder']['strategies_rules_orders_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $strategiesRulesOrder['StrategiesRulesOrder']['strategies_rules_orders_id']), null, __('Are you sure you want to delete # %s?', $strategiesRulesOrder['StrategiesRulesOrder']['strategies_rules_orders_id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Strategies Rules Order'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Strategies'), array('controller' => 'strategies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Strategy'), array('controller' => 'strategies', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Rules'), array('controller' => 'rules', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rule'), array('controller' => 'rules', 'action' => 'add')); ?> </li>
	</ul>
</div>
