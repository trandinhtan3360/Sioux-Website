<div class="salaries form">
<?php echo $this->Form->create('Salary'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Salary'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('salaries');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Salary.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Salary.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Salaries'), array('action' => 'index')); ?></li>
	</ul>
</div>
