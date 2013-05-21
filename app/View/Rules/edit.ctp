<div class="rules form">
<?php echo $this->Form->create('Rule'); ?>
	<fieldset>
		<legend><?php echo __('Edit Rule'); ?></legend>
	<?php
		echo $this->Form->input('rule_id');
		echo $this->Form->input('section_id');
		echo $this->Form->input('rule');
		echo $this->Form->input('comment');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Rule.rule_id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Rule.rule_id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Rules'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Sections'), array('controller' => 'sections', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Section'), array('controller' => 'sections', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Strategies Rules Orders'), array('controller' => 'strategies_rules_orders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Strategies Rules Order'), array('controller' => 'strategies_rules_orders', 'action' => 'add')); ?> </li>
	</ul>
</div>
