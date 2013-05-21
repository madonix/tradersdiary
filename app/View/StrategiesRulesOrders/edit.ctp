<div class="strategiesRulesOrders form">
<?php echo $this->Form->create('StrategiesRulesOrder'); ?>
	<fieldset>
		<legend><?php echo __('Edit Strategies Rules Order'); ?></legend>
	<?php
		echo $this->Form->input('strategies_rules_orders_id');
		echo $this->Form->input('strategy_id');
		echo $this->Form->input('rule_id');
		echo $this->Form->input('ruleorder');
		echo $this->Form->input('comment');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('StrategiesRulesOrder.strategies_rules_orders_id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('StrategiesRulesOrder.strategies_rules_orders_id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Strategies Rules Orders'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Strategies'), array('controller' => 'strategies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Strategy'), array('controller' => 'strategies', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Rules'), array('controller' => 'rules', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rule'), array('controller' => 'rules', 'action' => 'add')); ?> </li>
	</ul>
</div>
