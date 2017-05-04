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

<div class="container">
<?php echo $this->Form->create('Post'); ?>
<h2><?php echo __('Thêm bài đăng'); ?></h2>
<div class="landing-page"><div class="form-appointment"><div class="wpcf7" id="wpcf7-f560-p590-o1">
<form method="post" class="wpcf7-form" novalidate="novalidate" _lpchecked="1">
		<div style="display: none;">
			<input type="hidden" name="_wpcf7" value="560">
			<input type="hidden" name="_wpcf7_version" value="3.5">
			<input type="hidden" name="_wpcf7_locale" value="">
			<input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f560-p590-o1">
			<input type="hidden" name="_wpnonce" value="dbb28877d5">
		</div>
		<div class="group">
			<div style="width: 48%; float: left;">
				<span class="wpcf7-form-control-wrap text-680">
					<?php echo $this->Form->input('title', array('label' => 'Tiêu đề', 'class' => 'form-control'));?>
				</span>
				<span class="wpcf7-form-control-wrap email-680">
					<?php echo $this->Form->input('phone', array('label' => 'Nhập số điện thoại', 'class' => 'form-control')); ?>
				</span>
				<span class="wpcf7-form-control-wrap tel-630">
					<?php echo $this->Form->input('content', array('type' => 'textarea','label' => 'Nội dung', 'class' => 'form-control', 'required' => false)); ?>
				</span>
			</div>

				<div style="width: 48%; float: right;">
						<p>
							<span class="wpcf7-form-control-wrap radio-98">
								<span class="wpcf7-form-control wpcf7-radio">
									<span class="wpcf7-list-item">
										<?php



						echo "<label>Chọn mức lương</label>";
						echo '<select name="data[Post][salaries_id]" class="form-control" id="PostSalariesId" required="required">';
						if (0 < count($salaries)){
							foreach ($salaries as $key => $value) {
								echo '<option value="'. $value['Salaries']['id']  .'">' . $value['Salaries']['salaries'] . '</option>';
							}
						}
						echo '</select>';
?>
									</span>
									<span class="wpcf7-list-item">
										<label>
											<?php echo $this->Form->input('time_parts_id', array('label' => 'Loại thời gian', 'options' => array('1'=>'Toàn thời gian','2'=>'Bán thời gian'), 'class' => 'form-control')); ?>
										</label>
									</span>
									<br>
									<span class="wpcf7-list-item">
										<label>
											<?php echo $this->Form->input('countries_id', array('label' => 'Thành phố', 'options' => array('1' => 'Đà Nẵng', '2' => 'Hồ Chí Minh', '3' => 'Hà Nội'), 'class' => 'form-control')); ?>
										</label>
									</span>
									<br>
									<span class="wpcf7-list-item">
										<label>
											<?php echo $this->Form->input('categories_id', array('label' => 'Tên danh mục', 'class' => 'form-control')); ?>
										</label>
									</span>
									<br>
									<span class="wpcf7-list-item">
										<label>
											<?php echo $this->Form->input('end_date',array('label' => 'Ngày hết hạn bài đăng','type' => 'text','id' => 'datepicker', 'class'=>'form-control')); ?>
										</label>
									</span>
								</span>
							</span>
						</p>
					
					
					</div>
				</div>

				<div style="text-align: center; padding-top: 2em; border-top: 1px solid rgb(114, 124, 114); margin-top: 1em;">
					<?php echo $this->Form->end(__('Đăng')); ?>
					<img class="ajax-loader" src="http://www.professionalaudiologicalservices.com/wp-content/plugins/contact-form-7/images/ajax-loader.gif" alt="Sending ..." style="visibility: hidden;">
				</div>
				<div class="wpcf7-response-output wpcf7-display-none"></div>
			</form>
		</div>
	</div>
</div>





				<!-- <div class="posts form">
					<?php echo $this->Form->create('Post'); ?>

					<fieldset>
						<legend><?php echo __('Thêm bài đăng'); ?></legend>


<?php echo $this->Form->input('title', array('label' => 'Tiêu đề', 'class' => 'form-control'));?>
						<div style="width: 71%">
							<?php echo $this->Form->input('content', array('label' => 'Nội dung', 'class' => 'form-control', 'required' => false)); ?>
						</div>
						<?php



						echo "<label>Chọn lương</label>";
						echo '<select name="data[Post][salaries_id]" class="form-control" id="PostSalariesId" required="required">';
						if (0 < count($salaries)){
							foreach ($salaries as $key => $value) {
								echo '<option value="'. $value['Salaries']['id']  .'">' . $value['Salaries']['salaries'] . '</option>';
							}
						}
						echo '</select>';
?>

<?php
						echo $this->Form->input('time_parts_id', array('label' => 'Loại thời gian', 'class' => 'form-control'));
						echo $this->Form->input('countries_id', array('label' => 'Thành phố', 'class' => 'form-control'));
						echo $this->Form->input('categories_id', array('label' => 'Tên danh mục', 'class' => 'form-control'));
						echo $this->Form->input('phone', array('label' => 'Nhập số điện thoại', 'class' => 'form-control'));
						echo $this->Form->input('end_date',array( 'type' => 'text','id' => 'datepicker', 'class'=>'form-control'));

		// echo "<label>Ngày hết hạn</label>";
		// echo $this->Form->input('end_date', array( 'class' => 'col-md-1'));
		// echo "<label>Ngày tạo</label>";
		// echo $this->Form->input('created', array( 'class' => 'col-md-1'));

						?>
					</div>
				</fieldset>
				<?php echo $this->Form->end(__('Đăng')); ?>
			</div>
			<div class="actions">
				<h3><?php echo __('Actions'); ?></h3>
				<ul>

					<li><?php echo $this->Html->link(__('List Posts'), array('action' => 'index')); ?></li>
					<li><?php echo $this->Html->link(__('List Salaries'), array('controller' => 'salaries', 'action' => 'index')); ?> </li>
					<li><?php echo $this->Html->link(__('New Salaries'), array('controller' => 'salaries', 'action' => 'add')); ?> </li>
					<li><?php echo $this->Html->link(__('List Time Parts'), array('controller' => 'time_parts', 'action' => 'index')); ?> </li>
					<li><?php echo $this->Html->link(__('New Time Parts'), array('controller' => 'time_parts', 'action' => 'add')); ?> </li>
					<li><?php echo $this->Html->link(__('List Countries'), array('controller' => 'countries', 'action' => 'index')); ?> </li>
					<li><?php echo $this->Html->link(__('New Countries'), array('controller' => 'countries', 'action' => 'add')); ?> </li>
					<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
					<li><?php echo $this->Html->link(__('New Users'), array('controller' => 'users', 'action' => 'add')); ?> </li>
					<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
					<li><?php echo $this->Html->link(__('New Categories'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
				</ul>
			</div>

		</div> -->
