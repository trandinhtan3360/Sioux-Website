<style type="text/css" media="screen">
	.form-control{
		width: 70%;
	}
</style>
<div class="container">
	<div class="posts form">
<?php echo $this->Form->create('Post'); ?>
	<fieldset>
		<legend><?php echo __('Sửa bài đăng'); ?></legend>
	<?php
		echo $this->Form->input('title', array('label' => 'Tiêu đề', 'class' => 'form-control'));
		echo $this->Form->input('content', array('label' => 'Nội dung', 'class' => 'form-control'));
		echo "<label>Chọn lương</label>";
		echo '<select name="data[Post][salaries_id]" class="form-control" id="PostSalariesId" required="required">';
		if(0 < count($salaries)){
			foreach ($salaries as $key => $value) {
				echo '<option value="'. $value['Salaries']['id']  .'">' . $value['Salaries']['salaries'] . '</option>';
			}
		}
		echo '</select>';
		
		echo $this->Form->input('time_parts_id', array('label' => 'Loại thời gian', 'class' => 'form-control'));
		echo $this->Form->input('countries_id', array('label' => 'Thành phố', 'class' => 'form-control'));
		
		echo $this->Form->input('users_id', array('label' => 'Mã người dùng', 'class' => 'form-control'));
		echo $this->Form->input('categories_id', array('label' => 'Tên danh mục', 'class' => 'form-control'));
		echo "<label>Ngày đăng</label>";
		echo $this->Form->input('start_date', array('class' => 'col-md-1')); 
		echo "<label>Ngày hết hạn</label>";
		echo $this->Form->input('end_date', array( 'class' => 'col-md-1'));
	?>
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

</div>