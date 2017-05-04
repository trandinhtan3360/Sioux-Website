<div class="users view">
<table  class="table table-striped table-advance table-hover">
	<caption><h2><?php echo __('User'); ?></h2></caption>
	<thead>
		<tr>
			<th><dt><?php echo __('Id'); ?></dt></th>
			<th><dt><?php echo __('Full Name'); ?></dt></th>
			<th><dt><?php echo __('Username'); ?></dt></th>
			<th><dt><?php echo __('Password'); ?></dt></th>
			<th><dt><?php echo __('Email'); ?></dt></th>
			<th><dt><?php echo __('Address'); ?></dt></th>
			<th><dt><?php echo __('Dob'); ?></dt></th>
			<th><dt><?php echo __('Phone'); ?></dt></th>
			<th><dt><?php echo __('Image'); ?></dt></th>
			<th><dt><?php echo __('Description'); ?></dt></th>
			<th><dt><?php echo __('Role'); ?></dt></th>
			<th><dt><?php echo __('Status'); ?></dt></th>

		</tr>
	</thead>	
	<tbody>
		<tr>
			<td><?php echo h($user['User']['id']); ?>
			&nbsp;</td>
			<Td><?php echo h($user['User']['full_name']); ?>
			&nbsp;</Td>
			<td><?php echo h($user['User']['username']); ?>
			&nbsp;</td>
			<td><?php echo h($user['User']['password']); ?>
			&nbsp;</td>
			<td><?php echo h($user['User']['email']); ?>
			&nbsp;</td>
			<td><?php echo h($user['User']['address']); ?>
			&nbsp;</td>
			<td><?php echo h($user['User']['dob']); ?>
			&nbsp;</td>
			<td><?php echo h($user['User']['phone']); ?>
			&nbsp;</td>
			<td><?php echo h($user['User']['image']); ?>
			&nbsp;</td>
			<td><?php echo h($user['User']['description']); ?>
			&nbsp;</td>
			<td><?php echo h($user['User']['role']); ?>
			&nbsp;</td>
			<td><?php echo h($user['User']['status']); ?>
			&nbsp;</td>
		</tr>
		<tr>
	</tbody>
</table>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $user['User']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?> </li>
	</ul>
</div>
