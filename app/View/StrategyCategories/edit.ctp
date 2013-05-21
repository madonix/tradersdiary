<div class="strategyCategories form">
<?php echo $this->Form->create('StrategyCategory'); ?>
	<fieldset>
		<legend><?php echo __('Edit Strategy Category'); ?></legend>
	<?php
		echo $this->Form->input('strategy_category_id');
		echo $this->Form->input('category');
		echo $this->Form->input('comment');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('StrategyCategory.strategy_category_id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('StrategyCategory.strategy_category_id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Strategy Categories'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Strategies'), array('controller' => 'strategies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Strategy'), array('controller' => 'strategies', 'action' => 'add')); ?> </li>
	</ul>
</div>
