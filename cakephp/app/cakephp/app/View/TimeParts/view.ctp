<div class="timeParts view">
<h2><?php echo __('Time Part'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($timePart['TimePart']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Type'); ?></dt>
		<dd>
			<?php echo h($timePart['TimePart']['type']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Time Part'), array('action' => 'edit', $timePart['TimePart']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Time Part'), array('action' => 'delete', $timePart['TimePart']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $timePart['TimePart']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Time Parts'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Time Part'), array('action' => 'add')); ?> </li>
	</ul>
</div>
