<style type="text/css" media="screen">
	td {
		width: 150px;
		padding: 15px;
		border: 1px solid black;
	}
</style>
<?php echo $this->Html->script('bootstrap'); ?>
<div class="container">
	<div class="posts view">
<h2><?php echo __('Post'); ?></h2>
<div class="">
	<h2><?php echo h($post['Post']['title']); ?>
			&nbsp;</h2>
	<div class="container">
		<div class="col-md-4">
			<table class="" style="padding: 15px;">
			<h2>POST SUMMARY</h2>
				<tbody>
					<tr>
					<td>Đăng vào ngày</td>
					<td><?php echo h($post['Post']['start_date']); ?>
					&nbsp;</td>
					</tr>
					<tr>
					<td>Danh mục</td>
		             <td><?php echo $this->Html->link($post['Categories']['name'], array('controller' => 'categories', 'action' => 'view', $post['Categories']['id'])); ?>
					&nbsp;</td>
		            </tr>
		            <tr>
		            <td>Lương</td>
		            <td><?php echo $this->Html->link($post['Salaries']['salaries'], array('controller' => 'salaries', 'action' => 'view', $post['Salaries']['id'])); ?>
					&nbsp;</td>

					</tr>
				</tbody>
			</table>
		</div>
		<div class="col-md-8">
			<h2>JOB DESCRIPTION</h2>
			<td><?php echo h($post['Post']['title']); ?>
			&nbsp;</td>
	        <?php echo h($post['Post']['content']); ?>
			&nbsp;
			<td><?php echo $this->Html->link($post['TimeParts']['type'], array('controller' => 'time_parts', 'action' => 'view', $post['TimeParts']['id'])); ?>
			&nbsp;</td>
			<td><?php echo $this->Html->link($post['Countries']['city'], array('controller' => 'countries', 'action' => 'view', $post['Countries']['id'])); ?>
			&nbsp;</td>
		</div>
	</div>

</div>
	<!-- <dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($post['Post']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($post['Post']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Content'); ?></dt>
		<dd>
			<?php echo h($post['Post']['content']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Salaries'); ?></dt>
		<dd>
			<?php echo $this->Html->link($post['Salaries']['id'], array('controller' => 'salaries', 'action' => 'view', $post['Salaries']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Time Parts'); ?></dt>
		<dd>
			<?php echo $this->Html->link($post['TimeParts']['id'], array('controller' => 'time_parts', 'action' => 'view', $post['TimeParts']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Countries'); ?></dt>
		<dd>
			<?php echo $this->Html->link($post['Countries']['id'], array('controller' => 'countries', 'action' => 'view', $post['Countries']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Users'); ?></dt>
		<dd>
			<?php echo $this->Html->link($post['Users']['id'], array('controller' => 'users', 'action' => 'view', $post['Users']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Categories'); ?></dt>
		<dd>
			<?php echo $this->Html->link($post['Categories']['name'], array('controller' => 'categories', 'action' => 'view', $post['Categories']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Start Date'); ?></dt>
		<dd>
			<?php echo h($post['Post']['start_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('End Date'); ?></dt>
		<dd>
			<?php echo h($post['Post']['end_date']); ?>
			&nbsp;
		</dd>
	</dl> -->
</div>
<!-- <div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Post'), array('action' => 'edit', $post['Post']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Post'), array('action' => 'delete', $post['Post']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $post['Post']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Posts'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Post'), array('action' => 'add')); ?> </li>
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
</div> -->

</div>