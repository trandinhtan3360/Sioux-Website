<?php
echo $this->html->script('tinymce/tinymce.min');
?>
<script>tinymce.init({ selector:'textarea' });


</script>
<script>
	$(document).ready(function() {
		$('#datepicker').datepicker({
			format: 'mm-dd-yyyy'
		});
	});
</script>

<style type="text/css" media="screen">
	.form-control{
		width: 70%;
	}
	.mce-container-body .mce-stack-layout {
		width: 71%;
	}


.group:after {
  content: "";
  display: block;
  clear: both;
}

.landing-page {
  width: 882px;
  margin: 20px auto 0;  
}

.landing-page *,
.landing-page *:before,
.landing-page *:after {
	-webkit-box-sizing: border-box;
       -moz-box-sizing: border-box;
            box-sizing: border-box; 
}

.landing-page .module {
	border: 1px solid rgb(219, 219, 219);
	border-radius: 4px;
	float: left;
	padding: 2em;
	width: 48%;
}

.landing-page .module > *:last-child,
.landing-page .module > *:last-child > *:last-child,
.landing-page .module > *:last-child > *:last-child > *:last-child {
	margin: 0;
	padding: 0;
}

.landing-page .note {	
	background-color: rgb(236, 248, 236);
	border: 1px dashed;	
	border-radius: 4px;	
	color: rgb(115, 136, 96);
	font-family: georgia;	
	font-size: .9em;
	font-style: italic;
	margin: 20px auto;
	padding: 2em;
}

.form-appointment {
	padding: 2em;
	background-color: rgb(239, 252, 239);
	border-radius: 4px;
	border: 1px solid rgb(114, 124, 114);
	box-shadow: 2px 2px 4px 0px rgba(0, 0, 0, 0.1);
	font-family: 'PT Sans', Arial, sans-serif;
	margin: 20px auto;
}

.form-appointment input[type=text],
.form-appointment input[type=email],
.form-appointment input[type=tel],
.form-appointment textarea {	
	border: 1px solid rgb(114, 124, 114);
	border-radius: .2em;	
	font-family: 'PT Sans', Arial, sans-serif;
	font-size: 1.1em;
	padding: .4em 1em;
	margin: 0 0 .8em;
	width: 100%;
  box-shadow: 0 0 8px rgba(0,0,0,.08) inset;
}

.form-appointment input[type=text],
.form-appointment input[type=email],
.form-appointment input[type=tel],
.form-appointment input[type=submit],
.form-appointment textarea {	
	-webkit-transition: all .2s ease-in-out;
	   -moz-transition: all .2s ease-in-out;
	        transition: all .2s ease-in-out;
}

.form-appointment input[type=text]:active,
.form-appointment input[type=text]:focus,
.form-appointment input[type=email]:active,
.form-appointment input[type=email]:focus,
.form-appointment input[type=tel]:active,
.form-appointment input[type=tel]:focus,
.form-appointment textarea:active,
.form-appointment textarea:focus {	
  outline: 0;
  box-shadow: 0 0 6px rgb(176, 226, 188);
}

.form-appointment textarea {
	height: 160px;
}

.form-appointment input[type=submit] {
	background-color: rgb(114, 124, 114);
	border: 1px solid rgb(114, 124, 114);
	border-radius: 4px;
	color: rgb(255, 255, 255);
	cursor: pointer;
	font-family: inherit;
	font-size: 1.4em;
	padding: 10px 18px;
}

.form-appointment input[type=submit]:hover {
	background-color: white;
	color: rgb(114, 124, 114);
}

.form-appointment .wpcf7-list-item-label {
	color: rgb(130, 178, 136);
}

span.wpcf7-list-item {
	display: block;
	margin-left: -.02em;
}

.form-control {
	width: 305px;
}

</style>


<script src="/javascripts/application.js" type="text/javascript" charset="utf-8" async defer>
	$(document).ready(function () {
  	$('input[type=submit]').click(function () {
    $('input[type=submit]').toggleClass('red');
	  });
	});
</script>
<?php if($this->Session->check('session')){ 
$user_data = $this->Session->read('session');
?>
<div class="container">
<?php echo $this->Form->create('Post'); ?>
<h2><?php echo __('Sửa bài đăng'); ?></h2>
<div class="landing-page"><div class="form-appointment"><div class="wpcf7" id="wpcf7-f560-p590-o1">
<form method="post" class="wpcf7-form" novalidate="novalidate" _lpchecked="1">
		<div class="group">
			<div style="width: 48%; float: left;">
			<input type="hidden" name="data[Post][users_id]" value="<?php echo $user_data['id']; ?>">
				<span class="wpcf7-form-control-wrap text-680">
					<?php echo $this->Form->input('title', array('label' => 'Tiêu đề', 'class' => 'form-control'));?>
				</span>
				<input type="hidden" name="data[Post][phone]" value="<?php echo $user_data['phone']; ?>">
				<span class="wpcf7-form-control-wrap tel-630">
					<?php echo $this->Form->input('content', array('type' => 'textarea','label' => 'Nội dung', 'class' => 'form-control', 'required' => false)); ?>
				</span>
			</div>

				<div style="width: 48%; float: right;">
						<p>
							<span class="wpcf7-form-control-wrap radio-98">
								<span class="wpcf7-form-control wpcf7-radio">
									<span class="wpcf7-list-item">
										 

									</span>
									<span class="wpcf7-list-item">
											<?php echo $this->Form->input('time_parts_id', array('label' => 'Loại thời gian', 'options' => array('1'=>'Toàn thời gian','2'=>'Bán thời gian'), 'class' => 'form-control')); ?>
										
									</span>
									<!--

									-->
									<br>
									<span class="wpcf7-list-item">
										
											<?php echo $this->Form->input('countries_id', array('label' => 'Thành phố', 'options' => array('1' => 'Đà Nẵng'), 'class' => 'form-control')); ?>
										
									</span>
									<br>
									<span class="wpcf7-list-item">
										
											<?php echo $this->Form->input('categories_id', array('label' => 'Tên danh mục', 
											'options' => array('1' => 'Chăm sóc trẻ','2' => 'Chăm sóc người già',
											'3' => 'Làm việc toàn thời gian','4' => 'Làm việc bán thời gian',
											'5' => 'Giúp việc văn phòng'), 'class' => 'form-control')); ?>
										
									</span>
									<br>
									<span class="wpcf7-list-item">
										
											<?php echo $this->Form->input('end_date',array('label' => 'Ngày hết hạn bài đăng','type' => 'text',
											'id' => 'datepicker', 'class'=>'form-control')); ?>
										
									</span>
								</span>
							</span>
						</p>
					
					
					</div>
				</div>
				<div style="text-align: center; padding-top: 2em; border-top: 1px solid rgb(114, 124, 114); margin-top: 1em;">
					<?php echo $this->Form->end(__('Sửa')); ?>
					<img class="ajax-loader" src="http://www.professionalaudiologicalservices.com/wp-content/plugins/contact-form-7/images/ajax-loader.gif" alt="Sending ..." style="visibility: hidden;">
				</div>
			</form>
		</div>
	</div>
</div>

<?php 
}else {
	echo "đăng nhập đi cháu";
}

?>

