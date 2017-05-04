<?php
echo $this->Html->script('jquery.dataTables.min'); 
echo $this->Html->css('jquery.dataTables');
?>

<style type="text/css">

</style>

<script>
$(document).ready( function ()
 {
    $('#table_id').DataTable();
 } );
</script>

<div class="categories index">
 <h2><?php echo __('Danh sách công việc'); ?></h2>
 <table id="table_id" class='table table-bordered' style="width: 900px;
     margin-left: auto;
     margin-right: auto;">
 <thead>
 <tr>
   <th><?php echo __('id'); ?></th>
   <th><?php echo __('tên'); ?></th>
   <th class="actions"><?php echo __('Chức năng'); ?></th>
   <th class="actions"><?php echo __('Hành động'); ?></th>
 </tr>
 </thead>
 <tbody>
 <?php foreach ($categories as $category): ?>
 <tr>
  <td><?php echo h($category['Category']['id']); ?>&nbsp;</td>
  <td><?php echo h($category['Category']['name']); ?>&nbsp;</td>
  <td class="actions">
   <?php echo $this->Html->link(__('Xem'), array('action' => 'view', $category['Category']['id'])); ?>
   <?php echo $this->Html->link(__('Sửa'), array('action' => 'edit', $category['Category']['id'])); ?>
   <?php echo $this->Form->postLink(__('Xóa'), array('action' => 'delete', $category['Category']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $category['Category']['id']))); ?>
  </td>
  <td class="actions">
   <?php echo $this->Html->link(__('Thêm danh mục cha'), array('controller' => 'categories', 'action' => 'add')); ?><br>
   <?php echo $this->Html->link(__('Thêm danh mục công việc'),  array('action' => 'add')); ?><br>
   <?php echo $this->Form->postLink(__('Danh mục'), array('controller' => 'categories', 'action' => 'index')); ?>
  </td>
 </tr>
<?php endforeach; ?>
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