<div class="container">		

		<div class="row">

<?php
    $users = $this->requestAction('users/detail_employees');
    foreach ($users as $user)
    {
      ?>
				<div class="col-sm-3">
					<div class="thumbnail">
						
				      <img src="<?php echo $this->webroot.'files/user/image/'.$user['User']['id'].'/'.$user['User']['image'];?>">

				      <div class="caption">
				        <h3><?php echo h($user['User']['full_name']); ?> </h3>
				        <?php echo $user['User']['dob']; //  25/04/1955 ?> 
		        			Tuổi: <?php $dob = explode('/', $user['User']['dob']); ?>
				        <p>  <?php echo date('Y') - date('Y', strtotime($dob[2].'-'.$dob[1].'-'. $dob[0])); // 1955-04-25;
				        //date('Y') => 2017
				        // date('Y', strtotime($dob[2].'-'.$dob[1].'-'. $dob[0])) =>  1955 
				        ?></p>

				        <p>Quê quán: <?php echo ($user['User']['address']); ?></p>
				        
				        <p><a href="#" class="btn btn-primary" value="button">Chọn</a> </p>
				      </div>
				  </div>
				</div>
				<?php
    }
?>
			</div>
</div>
