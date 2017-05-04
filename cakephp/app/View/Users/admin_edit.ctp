<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit User'); ?></legend>
	<?php
		echo $this->Form->input('id',array('class'=>'form-control'));
		echo $this->Form->input('full_name',array('class'=>'form-control'));
		echo $this->Form->input('password',array('class'=>'form-control'));
		echo $this->Form->input('confirm_password',array('class'=>'form-control','type'=>'password'));
		echo $this->Form->input('email',array('class'=>'form-control'));
		echo $this->Form->input('address',array('class'=>'form-control'));
		echo $this->Form->input('dob',array('class'=>'form-control'));
		echo $this->Form->input('phone',array('class'=>'form-control'));
		echo $this->Form->input('image',array('label' => 'Hình ảnh', 'class' => 'form-control','type'=>'file'));
		echo $this->Form->input('role',array('class'=>'form-control'));
		echo $this->Form->input('description',array('class'=>'form-control'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('User.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('User.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?></li>
	</ul>
</div>
