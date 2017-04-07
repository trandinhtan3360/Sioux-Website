<div class="posts form">
<?php echo $this->Form->create('Post'); ?>
	<fieldset>
		<legend><?php echo __('Administrator sửa bài đăng'); ?></legend>
	<?php
		echo $this->Form->input('title', array('label' => 'Tiêu đề', 'class' => 'form-control'));
		echo $this->Form->input('content', array('label' => 'Nội dung', 'class' => 'form-control'));
		echo $this->Form->input('salaries_id', array('label' => 'Mã lương', 'class' => 'form-control'));
		echo $this->Form->input('time_parts_id', array('label' => 'Mã khung giờ', 'class' => 'form-control'));
		echo $this->Form->input('countries_id', array('label' => 'Mã thành phố', 'class' => 'form-control'));
		echo $this->Form->input('users_id', array('label' => 'Mã người dùng', 'class' => 'form-control'));
		echo $this->Form->input('categories_id', array('label' => 'Mã danh mục', 'class' => 'form-control'));
		echo $this->Form->input('start_date', array('label' => 'Ngày tạo', 'class' => 'form-control'));
		echo $this->Form->input('end_date', array('label' => 'Ngày hết hạn', 'class' => 'form-control'));
	?>
	</fieldset>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Post.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Post.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Posts'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Salaries'), array('controller' => 'salaries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Salaries'), array('controller' => 'salaries', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Time Parts'), array('controller' => 'time_parts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Time Parts'), array('controller' => 'time_parts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Countries'), array('controller' => 'countries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Countries'), array('controller' => 'countries', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Users'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Categories'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
	</ul>
</div>
