<div class="salaries view">
<h2><?php echo __('Salary'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($salary['Salary']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Salaries'); ?></dt>
		<dd>
			<?php echo h($salary['Salary']['salaries']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Salary'), array('action' => 'edit', $salary['Salary']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Salary'), array('action' => 'delete', $salary['Salary']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $salary['Salary']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Salaries'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Salary'), array('action' => 'add')); ?> </li>
	</ul>
</div>
