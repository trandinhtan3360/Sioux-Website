<?php
echo $this->html->script('tinymce/tinymce.min');

?>
 
  <script type="text/javascript">
  tinymce.init({
    selector: 'textarea'
  });
  </script>

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Edit profile</title>
   <link rel="stylesheet" href=""> 
</head>

<style>
	.form-control {
		width: 94%;
	}
	h2{	
		color: #0066ff;
	}
</style>
<body>
	<div class="login">
		<div class="login-screen">
			<div class="app-title">
				<h2>Sửa thông tin cá nhân</h2><hr/>
			</div>

			<div class="edit-form">
				<div class="control-group">
				<h3>Nguyen Van Teo</h3>				
				</div>
				<div class="control-group">
				
				<?php echo $this->Form->input('Địa chỉ',array('class'=>'form-control'));?>
				</div>
				<div class="control-group">
				
				<?php echo $this->Form->input('Số điện thoại',array('class'=>'form-control'));?>
				</div>
				
				<div class="control-group">
				&nbsp; &nbsp; &nbsp;
				<?php echo $this->Form->input('công việc',array('class'=>'form-control'));?>
				</div>
				<div class="form-group">
				&nbsp;<label for="exampleInputFile"></label>
				<?php echo $this->Form->input('image',array('label' => 'Hình ảnh', 'class' => 'form-control','type'=>'file'));?>
				<p class="help-block"></p>&nbsp;
			  </div>
				<div class="control-group">
				 &nbsp; &nbsp; &nbsp;
				<?php echo $this->Form->input('Mô tả',array('class'=>'form-control', 'type'=>'textarea'));?>
				</div>
				<a class="btn btn-primary btn-large btn-block" href="#">Thay đổi</a>
				<a class="login-link" href="#">Quên mật khẩu?</a>
			</div>
		</div>
	</div>
</body>
</html>
