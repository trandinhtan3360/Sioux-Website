<?php echo $this->Html->css('style-register.css');?>

<style>

	#login-page input {
		margin-left: 10px;
		padding: 15px 10px;
		width: 90%;
		border-radius: 2px;
		border: 1px solid #1abc9c;
		box-sizing: border-box;
		color: #1abc9c;
		font-family: sans-serif;
	}
	 #header-wrapper {
    width: 360px;
    margin: 0 auto;
    background-color: #1abc9c;
    padding: 20px 10px;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
    border-bottom: 5px solid #1abc9c;
  }

  #header-wrapper h2 {
    font-family: 'OpenSans Semibold';
    color: #EEEEEE;
    text-align: center;
  }
</style>

<div class="color-bar-2 color-bg"></div>
<div id="wrapper">
	<div id="header-wrapper">
		<h2>Đăng ký</h2>
	</div>

<div id="login-page">
	
	<div class="form" >
		<?php echo $this->Form->create('User',array('class'=>"register-form default-fadein",'ng-hide'=>"hiddenreg", 'ng-class'=>"{fadein: startFadein}")); ?>
		<?php echo $this->Form->input('full_name',array('label'=>'Họ và tên','placeholder'=>"Họ và tên",'ng-model'=>"Account.full_name"));?>
		<?php echo $this->Form->input('email',array('placeholder'=>"Nhập email của bạn",'ng-model'=>"Account.email"));?>
		<?php echo $this->Form->input('password',array('label'=>'Mật khẩu','placeholder'=>"Nhập mật khẩu",'ng-model'=>"Account.password"));?>
		<?php echo $this->Form->input('confirm_password',array('label'=>'Xác nhận mật khẩu','placeholder'=>"Nhập lại mật khẩu",'ng-model'=>"Account.confirm_password",'type'=>'password'));?>
			<span class="input-group-addon" id="basic-addon1" style="">Bạn là:</span>
				<select name="data[User][role]" id="UserRole" required="required">
					<option value="1">Nhà nội trợ</option>
					<option value="2">Người tìm việc</option>
				</select> 
		<?php echo $this->Form->button('Đăng ký',array('class'=>'login-button'));?> 
	</div>
	
</div>
</div>

<!-- //echo $this->Form->input('username',array('label'=>'Tên tài khoản','placeholder'=>"Tên tài khoản",'ng-model'=>"Account.username"));?> -->
