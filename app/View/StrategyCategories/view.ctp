<div class="strategyCategories view">
<h2><?php  echo __('Strategy Category'); ?></h2>
	<dl>
		<dt><?php echo __('Strategy Category Id'); ?></dt>
		<dd>
			<?php echo h($strategyCategory['StrategyCategory']['strategy_category_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Category'); ?></dt>
		<dd>
			<?php echo h($strategyCategory['StrategyCategory']['category']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comment'); ?></dt>
		<dd>
			<?php echo h($strategyCategory['StrategyCategory']['comment']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($strategyCategory['StrategyCategory']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($strategyCategory['StrategyCategory']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Strategy Category'), array('action' => 'edit', $strategyCategory['StrategyCategory']['strategy_category_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Strategy Category'), array('action' => 'delete', $strategyCategory['StrategyCategory']['strategy_category_id']), null, __('Are you sure you want to delete # %s?', $strategyCategory['StrategyCategory']['strategy_category_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Strategy Categories'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Strategy Category'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Strategies'), array('controller' => 'strategies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Strategy'), array('controller' => 'strategies', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Strategies'); ?></h3>
	<?php if (!empty($strategyCategory['Strategy'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Strategy Id'); ?></th>
		<th><?php echo __('Strategy Category Id'); ?></th>
		<th><?php echo __('Strategy'); ?></th>
		<th><?php echo __('Comment'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($strategyCategory['Strategy'] as $strategy): ?>
		<tr>
			<td><?php echo $strategy['strategy_id']; ?></td>
			<td><?php echo $strategy['strategy_category_id']; ?></td>
			<td><?php echo $strategy['strategy']; ?></td>
			<td><?php echo $strategy['comment']; ?></td>
			<td><?php echo $strategy['created']; ?></td>
			<td><?php echo $strategy['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'strategies', 'action' => 'view', $strategy['strategy_id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'strategies', 'action' => 'edit', $strategy['strategy_id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'strategies', 'action' => 'delete', $strategy['strategy_id']), null, __('Are you sure you want to delete # %s?', $strategy['strategy_id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Strategy'), array('controller' => 'strategies', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
