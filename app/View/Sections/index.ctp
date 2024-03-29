<div class="sections index">
	<h2><?php echo __('Sections'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('section_id'); ?></th>
			<th><?php echo $this->Paginator->sort('section'); ?></th>
			<th><?php echo $this->Paginator->sort('comment'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($sections as $section): ?>
	<tr>
		<td><?php echo h($section['Section']['section_id']); ?>&nbsp;</td>
		<td><?php echo h($section['Section']['section']); ?>&nbsp;</td>
		<td><?php echo h($section['Section']['comment']); ?>&nbsp;</td>
		<td><?php echo h($section['Section']['created']); ?>&nbsp;</td>
		<td><?php echo h($section['Section']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $section['Section']['section_id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $section['Section']['section_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $section['Section']['section_id']), null, __('Are you sure you want to delete # %s?', $section['Section']['section_id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Section'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Rules'), array('controller' => 'rules', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rule'), array('controller' => 'rules', 'action' => 'add')); ?> </li>
	</ul>
</div>
