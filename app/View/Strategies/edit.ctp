<div class="strategies form">
<?php echo $this->Form->create('Strategy'); ?>
	<fieldset>
		<legend><?php echo __('Edit Strategy'); ?></legend>
	<?php
		echo $this->Form->input('strategy_id');
		echo $this->Form->input('strategy_category_id');
		echo $this->Form->input('strategy');
		echo $this->Form->input('comment');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Strategy.strategy_id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Strategy.strategy_id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Strategies'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Strategy Categories'), array('controller' => 'strategy_categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Strategy Category'), array('controller' => 'strategy_categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Strategies Rules Orders'), array('controller' => 'strategies_rules_orders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Strategies Rules Order'), array('controller' => 'strategies_rules_orders', 'action' => 'add')); ?> </li>
	</ul>
</div>
