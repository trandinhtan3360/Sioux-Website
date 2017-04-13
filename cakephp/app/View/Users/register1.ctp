

<div id="login-page">
	  	<div class="container">
	  	
	      	<form class="form-login" method="POST" action="">

		        <h2 class="form-login-heading">Đăng kí</h2>

		         <div class="login-wrap" style="padding: 56px;">
				<div class="panel panel-info">
				<?php echo $this->Form->create(array('id'=>'appForm', 'inputDefaults'=>array('label'=>false, 'div'=>false))); ?>
				<div class="form-group">
					<span class="input-group-addon" id="basic-addon1">Họ và tên</span>
					<?php echo $this->Form->input('full_name', array('class'=>'form-control', 'placeholder'=>"Họ và tên", 'aria-describedby'=>"basic-addon1" )); ?>
				</div>
				<div class="form-group">
					<label>Tên tài khoản</label>
					<?php echo $this->Form->input('username', array('class'=>'form-control','placeholder'=>"Tên tài khoản", 'aria-describedby'=>"basic-addon1" )); ?> 
				</div>
				<div class="form-group" >
					<label>Email</label>
					<?php echo $this->Form->input('email', array('class'=>'form-control','placeholder'=>"Nhập email", 'aria-describedby'=>"basic-addon1" )); ?>
				</div>
				<div class="form-group">
					<label>Mật khẩu</label>
					<?php echo $this->Form->input('username', array('class'=>'form-control','placeholder'=>"Nhập mật khẩu", 'aria-describedby'=>"basic-addon1" )); ?>
				</div>
				<div class="form-group"s>
					<label >Nhập lại mật khẩu</label>
					<?php echo $this->Form->input('confirm_password', array('type'=>'password', 'class'=>'form-control','placeholder'=>"Nhập lại mật khẩu")); ?>
					</div>
				<div>
					<label>Vị trí của bạn</label>
					<select name="data[User][role]" id="UserRole" required="required">
						<option value="1">Người nội trợ</option>
						<option value="2">Người giúp việc</option>
					</select>
				</div>
				<input class="btn btn-theme btn-block" value="Đăng Kí" type="submit" name="ok" > 
				<?php echo $this->Form->end();?>
			</div>
			</div>
			</form>
</div>