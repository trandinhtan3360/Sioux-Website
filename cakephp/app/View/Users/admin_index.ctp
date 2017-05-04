<?php
echo $this->Html->script('jquery.dataTables.min'); 
echo $this->Html->css('jquery.dataTables');
?>

<script>
$(document).ready( function ()
 {
    $('#table_id').DataTable();
 } );
</script>

<div class="users index">
 <h2><?php echo __('Danh sách người dùng'); ?></h2>
 <table id="table_id" class='table table-bordered'>
 <thead>
 <tr>
  <th>STT</th>
   <th><?php echo __('id'); ?></th>
   <th><?php echo __('Họ và tên'); ?></th>
   <th><?php echo __('email'); ?></th>
   <th><?php echo __('Địa chỉ'); ?></th>
   <th><?php echo __('Ngày sinh'); ?></th>
   <th><?php echo __('Số điện thoại'); ?></th>
   <th><?php echo __('Hình ảnh'); ?></th>
   <th><?php echo __('Mô tả'); ?></th>
   <th><?php echo __('Vai trò'); ?></th>
   <th><?php echo __('Trạng thái'); ?></th>
   <th class="actions"><?php echo __('Actions'); ?></th>
 </tr>
 </thead>
 <tbody>
 <?php $i=1;
 foreach ($users as $User): ?>

 <tr>
  <td><?php echo $i; ?>&nbsp;</td>
  <td><?php echo h($User['User']['id']); ?>&nbsp;</td>
  <td><?php echo h($User['User']['full_name']); ?>&nbsp;</td>
  <td><?php echo h($User['User']['email']); ?>&nbsp;</td>
  <td><?php echo h($User['User']['address']); ?>&nbsp;</td>
  <td><?php echo h($User['User']['dob']); ?>&nbsp;</td>
  <td><?php echo h($User['User']['phone']); ?>&nbsp;</td>
  <td><?php echo h($User['User']['image']); ?>&nbsp;</td>
  <td><?php echo h($User['User']['description']); ?>&nbsp;</td>
  <td><?php echo h($User['User']['role']); ?>&nbsp;</td>
  <td><?php echo h($User['User']['status']); ?>&nbsp;</td>
  <td class="actions">
   <?php echo $this->Html->link(__('Xem'), array('action' => 'view', $User['User']['id'])); ?>
   <?php echo $this->Html->link(__('Sửa'), array('action' => 'edit', $User['User']['id'])); ?>
   <?php echo $this->Form->postLink(__('Xóa'), array('action' => 'delete', $User['User']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $User['User']['id']))); ?>
  </td>
 </tr>

<?php $i++;
 endforeach; ?>
 </tbody>
 </table>
  <p>
 <?php
 echo $this->Paginator->counter(array(
 'format' => __('Trang {:page} trên {:pages}, hiển thị {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
 ));
 ?> </p>
 
 <?php 
  echo $this->Paginator->prev('« Previous ', null, null, array('class' => 'disabled')); //Shows the next and previous links
    echo " | ".$this->Paginator->numbers()." | "; //Shows the page numbers
    echo $this->Paginator->next(' Next »', null, null, array('class' => 'disabled')); //Shows the next and previous links
    echo " Page ".$this->Paginator->counter(); // prints X of Y, where X is current page and Y is number of pages 
 ?>

</div>