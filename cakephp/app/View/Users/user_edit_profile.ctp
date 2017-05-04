<?php
echo $this->html->script('tinymce/tinymce.min');

?>
 
  <script type="text/javascript">
  tinymce.init({
    selector: 'textarea'
  });
  </script>
  <script>
	$(document).ready(function() {
		$('#datepicker').datepicker({
			format: 'mm-dd-yyyy'
		});
	});
</script>

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
		<h2>Cập nhật thông tin cá nhân</h2>
	</div>

<div id="login-page">
	
	<div class="form" >
		<?php echo $this->Form->create('User',array('type'=>'file','novalidate','class'=>"register-form default-fadein",'ng-hide'=>"hiddenreg", 'ng-class'=>"{fadein: startFadein}")); ?>
		<?php
			echo $this->Form->input('id',array('class'=>'form-control'));
			echo $this->Form->input('full_name',array('class'=>'form-control','label' => 'Họ và tên'));
			echo $this->Form->input('email',array('class'=>'form-control','label' => 'Địa chỉ email'));
			echo $this->Form->input('address',array('class'=>'form-control','label' => 'Địa chỉ'));
			echo $this->Form->input('dob',array('class'=>'form-control','id'=>'datepicker','label' => 'Ngày sinh'));
			echo $this->Form->input('phone',array('class'=>'form-control','label' => 'Điện thoại'));
			$categories = $this->requestAction('categories/');
			foreach ($categories as $category)
			{
			  ?>
		   
				<input type="checkbox" name="data[User][job]" value="<?php echo $category['Category']['name'];?>" ><?php echo $category['Category']['name'];?>
			

			  <?php
			}
	

			echo $this->Form->input('image',array('label' => 'Ảnh đại diện', 'class' => 'form-control','type'=>'file'));
			echo $this->Form->input('description',array('class'=>'form-control','type'=>'textarea','label' => 'Mô tả'));
		?>
		
		<?php echo $this->Form->button('Cập nhật',array('class'=>'login-button'));?> 
	</div>
	
</div>
</div>

<!-- //echo $this->Form->input('username',array('label'=>'Tên tài khoản','placeholder'=>"Tên tài khoản",'ng-model'=>"Account.username"));?> -->

