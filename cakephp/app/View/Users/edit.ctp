<div class="users form">
<?php echo $this->Form->create('User',array('type'=>'file')); ?>
	<fieldset>
		<legend><?php echo __('Edit User'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('full_name',array('label' => 'Tên đầy đủ', 'class' => 'form-control'));
		echo $this->Form->input('password',array('label' => 'Hình ảnh', 'class' => 'form-control'));
		echo $this->Form->input('email',array('label' => 'Hình ảnh', 'class' => 'form-control'));
		echo $this->Form->input('address',array('label' => 'Hình ảnh', 'class' => 'form-control'));
		echo $this->Form->input('dob',array('label' => 'Hình ảnh', 'class' => 'form-control'));
		echo $this->Form->input('phone', array('label' => 'Hình ảnh', 'class' => 'form-control'));
		echo $this->Form->input('image', array('label' => 'Hình ảnh', 'class' => 'form-control','type'=>'file'));
		echo $this->Form->input('description',array('label' => 'Hình ảnh', 'class' => 'form-control'));
		echo $this->Form->input('role',array('label' => 'Hình ảnh', 'class' => 'form-control'));
		echo $this->Form->input('status',array('label' => 'Hình ảnh', 'class' => 'form-control'));
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
