<?php
echo $this->Html->script('jquery.dataTables.min'); 
echo $this->Html->css('jquery.dataTables');
?>

<style type="text/css">

</style>


<div class="users index">
 <h2><?php echo __('Danh sách công việc'); ?></h2>
 <table id="table_id" class='table table-bordered' style="width: 900px;
	    margin-left: auto;
	    margin-right: auto;">
 <thead>
 <tr>
   <th><?php echo __('Tiêu đề'); ?></th>
   <th><?php echo __('Ngày đăng'); ?></th>
   <th><?php echo __('Ngày hết hạn'); ?></th>
   <th class="actions"><?php echo __('Chức năng'); ?></th>
 </tr>
 </thead>
 <tbody>
 <?php 
$users = $this->requestAction('users/user_post_list');
 foreach ($users as $user): ?>
	<tr>
		<td><?php echo h($user['Post']['title']); ?>&nbsp;</td>
		<td><?php echo h($user['Post']['created']); ?>&nbsp;</td>
		<td><?php echo h($user['Post']['end_date']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Xem'), array('action' => 'user_view_post', $user['Post']['users_id'])); ?>
			<?php echo $this->Html->link(__('Sửa'), array('action' => 'user_edit_post', $user['Post']['users_id'])); ?>
			<?php echo $this->Form->postLink(__('Xóa'), array('action' => 'delete', $user['Post']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $user['Post']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
 </tbody>
 </table>
 <p>
 <?php
 echo $this->Paginator->counter(array(
 'format' => __('Trang {:page} trên {:pages}, hiển thị {:current} dữ liệu trong {:count} tổng, từ dữ liệu {:start}, đến {:end}')
 ));
 ?> </p>
</div>