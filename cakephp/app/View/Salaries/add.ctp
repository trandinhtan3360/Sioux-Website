<div class="salaries form">
<?php echo $this->Form->create('Salary'); ?>
	<fieldset>
		<legend><?php echo __('Add Salary'); ?></legend>
	<?php
		echo $this->Form->input('salaries');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Salaries'), array('action' => 'index')); ?></li>
	</ul>
</div>
