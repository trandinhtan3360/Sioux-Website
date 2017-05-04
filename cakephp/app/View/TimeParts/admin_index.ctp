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

<div class="timeParts index">
 <h2><?php echo __('Danh sách thời gian làm việc'); ?></h2>
 <table id="table_id" class='table table-bordered'>
 <thead>
 <tr>
   <th><?php echo __('id'); ?></th>
   <th><?php echo __('Loại'); ?></th>
   <th class="actions"><?php echo __('Chức năng'); ?></th>
 </tr>
 </thead>
 <tbody>
 <?php foreach ($timeParts as $timePart): ?>
 <tr>
 <td><?php echo h($timePart['TimePart']['id']); ?>&nbsp;</td>
  <td><?php echo h($timePart['TimePart']['type']); ?>&nbsp;</td>
  <td class="actions">
   <?php echo $this->Html->link(__('Xem'), array('action' => 'view', $timePart['TimePart']['id'])); ?>
   <?php echo $this->Html->link(__('Sửa'), array('action' => 'edit', $timePart['TimePart']['id'])); ?>
   <?php echo $this->Form->postLink(__('Xóa'), array('action' => 'delete', $timePart['TimePart']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $timePart['TimePart']['id']))); ?>
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