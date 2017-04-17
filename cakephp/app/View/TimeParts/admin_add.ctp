<div class="timeParts form">
<?php echo $this->Form->create('TimePart'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Time Part'); ?></legend>
	<?php
		echo $this->Form->input('type');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Time Parts'), array('action' => 'index')); ?></li>
	</ul>
</div>
