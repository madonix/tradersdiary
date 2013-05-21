<div class="strategies view">
<h2><?php  echo __('Strategy'); ?></h2>
	<dl>
		<dt><?php echo __('Strategy Id'); ?></dt>
		<dd>
			<?php echo h($strategy['Strategy']['strategy_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Strategy Category'); ?></dt>
		<dd>
			<?php echo $this->Html->link($strategy['StrategyCategory']['category'], array('controller' => 'strategy_categories', 'action' => 'view', $strategy['StrategyCategory']['strategy_category_id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Strategy'); ?></dt>
		<dd>
			<?php echo h($strategy['Strategy']['strategy']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comment'); ?></dt>
		<dd>
			<?php echo h($strategy['Strategy']['comment']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($strategy['Strategy']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($strategy['Strategy']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Strategy'), array('action' => 'edit', $strategy['Strategy']['strategy_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Strategy'), array('action' => 'delete', $strategy['Strategy']['strategy_id']), null, __('Are you sure you want to delete # %s?', $strategy['Strategy']['strategy_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Strategies'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Strategy'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Strategy Categories'), array('controller' => 'strategy_categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Strategy Category'), array('controller' => 'strategy_categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Strategies Rules Orders'), array('controller' => 'strategies_rules_orders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Strategies Rules Order'), array('controller' => 'strategies_rules_orders', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Strategies Rules Orders'); ?></h3>
	<?php if (!empty($strategy['StrategiesRulesOrder'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Strategies Rules Orders Id'); ?></th>
		<th><?php echo __('Strategy Id'); ?></th>
		<th><?php echo __('Rule Id'); ?></th>
		<th><?php echo __('Ruleorder'); ?></th>
		<th><?php echo __('Comment'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($strategy['StrategiesRulesOrder'] as $strategiesRulesOrder): ?>
		<tr>
			<td><?php echo $strategiesRulesOrder['strategies_rules_orders_id']; ?></td>
			<td><?php echo $strategiesRulesOrder['strategy_id']; ?></td>
			<td><?php echo $strategiesRulesOrder['rule_id']; ?></td>
			<td><?php echo $strategiesRulesOrder['ruleorder']; ?></td>
			<td><?php echo $strategiesRulesOrder['comment']; ?></td>
			<td><?php echo $strategiesRulesOrder['created']; ?></td>
			<td><?php echo $strategiesRulesOrder['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'strategies_rules_orders', 'action' => 'view', $strategiesRulesOrder['strategies_rules_orders_id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'strategies_rules_orders', 'action' => 'edit', $strategiesRulesOrder['strategies_rules_orders_id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'strategies_rules_orders', 'action' => 'delete', $strategiesRulesOrder['strategies_rules_orders_id']), null, __('Are you sure you want to delete # %s?', $strategiesRulesOrder['strategies_rules_orders_id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Strategies Rules Order'), array('controller' => 'strategies_rules_orders', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
