<?php
echo $this->html->script('tinymce/tinymce.min');
?>
<script>tinymce.init({ selector:'textarea' });


</script>
<script>
	$(document).ready(function() {
    $('.datepicker').datepicker({
        format: 'mm-dd-yyyy'
    });
});
</script>
<style type="text/css" media="screen">
	.form-control{
		width: 70%;
	}
	.mce-container-body .mce-stack-layout {
		width: 71%;
	}
</style>
<div class="container">
	<div class="posts form">
	<?php echo $this->Form->create('Post'); ?>
	<fieldset>
		<legend><?php echo __('Thêm bài đăng'); ?></legend>
	<?php
		echo $this->Form->input('title', array('label' => 'Tiêu đề', 'class' => 'form-control'));
		
		?>
		<div style="width: 71%">
			<?php echo $this->Form->input('content', array('label' => 'Nội dung', 'class' => 'form-control', 'required' => false)); ?>
		</div>
		<?php



		echo "<label>Chọn lương</label>";
		echo '<select name="data[Post][salaries_id]" class="form-control" id="PostSalariesId" required="required">';
		if (0 < count($salaries)){
			foreach ($salaries as $key => $value) {
				echo '<option value="'. $value['Salaries']['id']  .'">' . $value['Salaries']['salaries'] . '</option>';
			}
		}
		echo '</select>';
		
		echo $this->Form->input('time_parts_id', array('label' => 'Loại thời gian', 'class' => 'form-control'));
		echo $this->Form->input('countries_id', array('label' => 'Thành phố', 'class' => 'form-control'));
		echo $this->Form->input('categories_id', array('label' => 'Tên danh mục', 'class' => 'form-control')); 
		echo $this->Form->input('end_date',array('type' =>'text' ,'div'=>false,'class'=>'form-control', 'class' => 'datepicker'));

		// echo "<label>Ngày hết hạn</label>";
		// echo $this->Form->input('end_date', array( 'class' => 'col-md-1'));
		// echo "<label>Ngày tạo</label>";
		// echo $this->Form->input('created', array( 'class' => 'col-md-1'));

	?>
</div>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

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
