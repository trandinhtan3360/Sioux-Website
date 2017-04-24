<!-- <style type="text/css" media="screen">
body{
	font-size: 20px;
}
	th {
	border:0;
	border-bottom:0px solid #555;
	text-align: left;
	padding:4px;
}
    table tr td {
	padding: 6px;
	text-align: left;
	vertical-align: top;
	border-bottom:0px solid #ddd;
}
.image{
	height: 200px;
	width: 200px;
}

</style> -->
<div class="users view">
<h2><?php echo __('Tài khoản của tôi'); ?></h2>
	<table class= "table table-hover" style="background-color: #dff0d8;">
		
	<!-- 		<dt><?php echo __('Id'); ?></dt>
			<dd>
				<?php echo h($user['User']['id']); ?>
				&nbsp;
			</dd> -->
			<tr class="">
				<th><?php echo __('Hình ảnh'); ?></th> 
 				<td>
					<?php echo h($user['User']['image']); ?>
					&nbsp;
				</td>
			</tr>
			<tr>
				<th><?php echo __('Tên người dùng'); ?></th>
				<td>
					<?php echo h($user['User']['full_name']); ?>
					&nbsp;
				</td>
			</tr>
			<tr>
				<th><?php echo __('Tài khoản'); ?></th>
				<td>
					<?php echo h($user['User']['username']); ?>
					&nbsp;
				</td>
			</tr>
			<tr class="warning">
				<th><?php echo __('Mật khẩu'); ?></th>
				<td>
					<?php echo h($user['User']['password']); ?>
					&nbsp;
				</td>
			</tr>
			<tr class="">
				<th><?php echo __('Email'); ?></th>
				<td>
					<?php echo h($user['User']['email']); ?>
					&nbsp;
				</td>
			</tr>
			<tr class="">
				<th><?php echo __('Địa chỉ'); ?></th>
				<td>
					<?php echo h($user['User']['address']); ?>
					&nbsp;
				</td>
			</tr>
			<tr class="">
				<th><?php echo __('Ngày sinh'); ?></th>
				<td>
					<?php echo h($user['User']['dob']); ?>
					&nbsp;
				</td>
			</tr>
			<tr class="">
				<th><?php echo __('Số điện thoại'); ?></th>
				<td>
					<?php echo h($user['User']['phone']); ?>
					&nbsp;
				</td>
			</tr>
			
			<tr class="">
				<th><?php echo __('Mô tả'); ?></th>
				<td>
					<?php echo h($user['User']['description']); ?>
					&nbsp;
				</td>
			</tr>
			<tr class="">
				<th><?php echo __('Ngày đăng kí'); ?></th>
				<td>
					<?php echo h($user['User']['created']); ?>
					&nbsp;
				</td>
			</tr>
			<tr class="">
				<th><?php echo __('Vai Trò'); ?></th>
			<td>
				<?php echo h($user['User']['role']); ?>
				&nbsp;
			</td> 
			</tr>
			<tr>
				<th><?php echo __('Status'); ?></th>
				<td>
					<?php echo h($user['User']['status']); ?>
					&nbsp;
				</td>
			</tr>
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
