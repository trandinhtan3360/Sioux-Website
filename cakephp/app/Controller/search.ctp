<?php 
$keyword = $this->requestAction('posts/'); ?>
<?php $i = 0;?>

<?php  foreach($posts as $keyword=>$value): ?>
	<div class="panel panel-primary">
        <div class="pull">
         <b></b><small><?php echo "<h4>" . $value['Post']['title'] ."</h4>";?></small>
        </div>
        <div class="pull">
         <b></b><small><?php echo "<h4>" . $value['Post']['content'] ."</h4>";?></small>
        </div>
        <br>
        <b>Nội dung</b><a href="" title=""><?php echo "<p>" . $value['Post']['content'] . "</p>"; ?></a>
        <div class="pull">
         <b>Lương:</b><small><?php echo "<p>" . h($value['Salaries']['salaries'] ) . "</p>" ;?></small>
        </div>
        <div class="alert alert-success" role="alert">
         <b>Thời Gian <small><?php echo "<p>" .h($value['TimeParts']['type'])."</p>"?></small></b>
        </div>
	       
	</div>
	<?php endforeach; ?>
