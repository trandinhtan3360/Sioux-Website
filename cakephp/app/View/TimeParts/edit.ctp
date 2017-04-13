<div class="timeParts form">
<?php echo $this->Form->create('TimePart'); ?>
	<fieldset>
		<legend><?php echo __('Edit Time Part'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('type');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('TimePart.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('TimePart.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Time Parts'), array('action' => 'index')); ?></li>
	</ul>
</div>
