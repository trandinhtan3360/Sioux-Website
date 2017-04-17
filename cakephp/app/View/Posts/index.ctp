<div class="posts index">
	<h2><?php echo __('Bài đăng'); ?></h2>
	<table cellpadding="0" cellspacing="0" class="table table-hover table-bordered">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('title'); ?></th>
			<th><?php echo $this->Paginator->sort('content'); ?></th>
			<th><?php echo $this->Paginator->sort('salaries_id'); ?></th>
			<th><?php echo $this->Paginator->sort('time_parts_id'); ?></th>
			<th><?php echo $this->Paginator->sort('countries_id'); ?></th>
			<th><?php echo $this->Paginator->sort('users_id'); ?></th>
			<th><?php echo $this->Paginator->sort('categories_id'); ?></th>
			<th><?php echo $this->Paginator->sort('start_date'); ?></th>
			<th><?php echo $this->Paginator->sort('end_date'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php 
	foreach ($posts as $post): ?>
	<tr>
		<td><?php echo h($post['Post']['id']); ?>&nbsp;</td>
		<td><?php echo h($post['Post']['title']); ?>&nbsp;</td>
		<td><?php echo ($post['Post']['content']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($post['Salaries']['salaries'], array('controller' => 'salaries', 'action' => 'view', $post['Salaries']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($post['TimeParts']['type'], array('controller' => 'time_parts', 'action' => 'view', $post['TimeParts']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($post['Countries']['city'], array('controller' => 'countries', 'action' => 'view', $post['Countries']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($post['Users']['full_name'], array('controller' => 'users', 'action' => 'view', $post['Users']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($post['Categories']['name'], array('controller' => 'categories', 'action' => 'view', $post['Categories']['id'])); ?>
		</td>
		<td><?php echo h($post['Post']['start_date']); ?>&nbsp;</td>
		<td><?php echo h($post['Post']['end_date']); ?>&nbsp;</td>
		<td class="actions" style="width: 300px;">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $post['Post']['id']), array('class' => 'btn btn-primary')); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $post['Post']['id']), array('class' => 'btn btn-primary')); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $post['Post']['id']), array('class' => 'btn btn-danger'), array('confirm' => __('Are you sure you want to delete # %s?', $post['Post']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Post'), array('action' => 'add')); ?></li>
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
