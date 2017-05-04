<div class="users view">
<table  class="table table-striped table-advance table-hover">
	<caption><h2><?php echo __('Thông tin cá nhân'); ?></h2></caption>
	<thead>
		<tr>
			<th><dt><?php echo __('Id'); ?></dt></th>
			<th><dt><?php echo __('Họ và tên'); ?></dt></th>
			<th><dt><?php echo __('Mật khẩu'); ?></dt></th>
			<th><dt><?php echo __('Email'); ?></dt></th>
			<th><dt><?php echo __('Địa chỉ'); ?></dt></th>
			<th><dt><?php echo __('Dob'); ?></dt></th>
			<th><dt><?php echo __('Điện thoại'); ?></dt></th>
			<th><dt><?php echo __('Hình ảnh'); ?></dt></th>
			<th><dt><?php echo __('Sự miêu tả'); ?></dt></th>
			<th><dt><?php echo __('Vai trò'); ?></dt></th>
			<th><dt><?php echo __('Trạng thái'); ?></dt></th>

		</tr>
	</thead>	
	<tbody>
		<tr>
			<td><?php echo h($user['User']['id']); ?>
			&nbsp;</td>
			<Td><?php echo h($user['User']['full_name']); ?>
			&nbsp;</Td>
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
	<h3><?php echo __('Chức năng'); ?></h3>
	<ul>
		<li><?php echo $this->Form->postLink(__('Xóa'), array('action' => 'delete', $user['User']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $user['User']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('Danh sách'), array('action' => 'index')); ?> </li>
	</ul>
</div>
