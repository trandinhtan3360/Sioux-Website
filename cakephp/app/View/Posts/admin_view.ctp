<div class="posts view">
<h2><?php echo __('Post'); ?></h2>
<table class="table table-bordered">
	<thead>
		<tr>
			<th>Id</th>
			<th>Tiêu đề</th>
			<th>Nội dung</th>
			<th>Mã lương</th>
			<th>Mã thời gian</th>
			<th>Mã thành phố</th>
			<th>Mã người dùng</th>
			<th>Mã danh mục</th>
			<th>Ngày tạo</th>
			<th>Ngày kết thúc</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><?php echo h($post['Post']['id']); ?>
			&nbsp;
			</td>
			<td><?php echo h($post['Post']['title']); ?>
			&nbsp;</td>
			<td><?php echo ($post['Post']['content']); ?>
			&nbsp;</td>
			<td><?php echo $this->Html->link($post['Salaries']['id'], array('controller' => 'salaries', 'action' => 'view', $post['Salaries']['id'])); ?>
			&nbsp;</td>
			<td><?php echo $this->Html->link($post['TimeParts']['id'], array('controller' => 'time_parts', 'action' => 'view', $post['TimeParts']['id'])); ?>
			&nbsp;</td>
			<td><?php echo $this->Html->link($post['Countries']['id'], array('controller' => 'countries', 'action' => 'view', $post['Countries']['id'])); ?>
			&nbsp;</td>
			<td><?php echo $this->Html->link($post['Users']['id'], array('controller' => 'users', 'action' => 'view', $post['Users']['id'])); ?>
			&nbsp;</td>
			<td><?php echo $this->Html->link($post['Categories']['name'], array('controller' => 'categories', 'action' => 'view', $post['Categories']['id'])); ?>
			&nbsp;</td>
			<td><?php echo h($post['Post']['start_date']); ?>
			&nbsp;</td>
			<td><?php echo h($post['Post']['end_date']); ?>
			&nbsp;</td>
		</tr>
	</tbody>
</table>
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
			<?php echo ($post['Post']['content']); ?>
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
<div class="actions">
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
</div>
