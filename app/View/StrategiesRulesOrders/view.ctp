<div class="strategiesRulesOrders view">
<h2><?php  echo __('Strategies Rules Order'); ?></h2>
	<dl>
		<dt><?php echo __('Strategies Rules Orders Id'); ?></dt>
		<dd>
			<?php echo h($strategiesRulesOrder['StrategiesRulesOrder']['strategies_rules_orders_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Strategy'); ?></dt>
		<dd>
			<?php echo $this->Html->link($strategiesRulesOrder['Strategy']['strategy'], array('controller' => 'strategies', 'action' => 'view', $strategiesRulesOrder['Strategy']['strategy_id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rule'); ?></dt>
		<dd>
			<?php echo $this->Html->link($strategiesRulesOrder['Rule']['rule'], array('controller' => 'rules', 'action' => 'view', $strategiesRulesOrder['Rule']['rule_id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ruleorder'); ?></dt>
		<dd>
			<?php echo h($strategiesRulesOrder['StrategiesRulesOrder']['ruleorder']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comment'); ?></dt>
		<dd>
			<?php echo h($strategiesRulesOrder['StrategiesRulesOrder']['comment']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($strategiesRulesOrder['StrategiesRulesOrder']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($strategiesRulesOrder['StrategiesRulesOrder']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Strategies Rules Order'), array('action' => 'edit', $strategiesRulesOrder['StrategiesRulesOrder']['strategies_rules_orders_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Strategies Rules Order'), array('action' => 'delete', $strategiesRulesOrder['StrategiesRulesOrder']['strategies_rules_orders_id']), null, __('Are you sure you want to delete # %s?', $strategiesRulesOrder['StrategiesRulesOrder']['strategies_rules_orders_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Strategies Rules Orders'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Strategies Rules Order'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Strategies'), array('controller' => 'strategies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Strategy'), array('controller' => 'strategies', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Rules'), array('controller' => 'rules', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rule'), array('controller' => 'rules', 'action' => 'add')); ?> </li>
	</ul>
</div>
