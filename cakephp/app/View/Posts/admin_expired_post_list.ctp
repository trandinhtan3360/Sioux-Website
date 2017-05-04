<?php echo $this->Html->css('bootstrap.min.css'); ?>
<style type="text/css" media="screen">
	
	.featured-job {
		background: #fff;
	}
	.featured-job-content:hover{
		color: #fff;
		background: #2da5be;
	}
	.featured-job-content a:hover{
		color: #fff;
		background: #2da5be;
		text-decoration: none;
	}
	.featured-job-content ul{
		list-style: none;
		padding: 0px;
		margin: 0px;
	}
	.featured-job-content ul li {
		display: inline;
	}
	.label-success {
		position: relative;
		left: 790px;
		bottom: 95px;
		padding: 6px;
	}
	@media (min-width: 320px ){
		.label-success {
			position: relative;
			left: 195px;
			bottom: 110px;
			padding: 6px;
		}
		#form-buscar >.form-group >.input-group > .form-control {
			height: 33px;
			margin-top: 10px;
			width: 184px;
		}
	}
	
	@media (min-width: 375px ){
		.label-success {
			position: relative;
			left: 241px;
			bottom: 110px;
			padding: 6px;
		}
		#form-buscar >.form-group >.input-group > .form-control {
			height: 33px;
			margin-top: 10px;
			width: 234px;
		}
	}
	@media (min-width: 425px ){
		.label-success {
			position: relative;
			left: 300px;
			bottom: 100;
			padding: 6px;
		}
		#form-buscar >.form-group >.input-group > .form-control {
			height: 33px;
			margin-top: 10px;
			width: 284px;
		}
	}
	@media (min-width: 768px ){
		.label-success {
			position: relative;
			left: 413px;
			bottom: 133px;
			padding: 6px;
		}
		#form-buscar >.form-group >.input-group > .form-control {
			height: 33px;
			margin-top: 10px;
			width: 621px;
		}
	}
	
	
	@media (min-width: 1024px){
		.label-success {
			position: relative;
			left: 780px;
			bottom: 134px;
			padding: 6px;
		}
		#form-buscar >.form-group >.input-group > .form-control {
			height: 33px;
			margin-top: 10px;
			width: 735px;
		}
	}
	@media (min-width: 1440px){
		.label-success {
			position: relative;
			left: 792px;
			bottom: 134px;
			padding: 6px;
		}
		#form-buscar >.form-group >.input-group > .form-control {
			height: 33px;
			margin-top: 10px;
			width: 566px;
		}
	}
	strong {
		color: ;
	}
	.row {
		margin-bottom: 0px;
	}
	
	@media (min-width: 1200px){
		.span4 {
			width: 350px;
		}
		.span7 .navigation{
			width: 0px;
		}
		.span12 {
			1153px;
		}
	}
	
	.footer-sub {
		position: relative;
		left: -29px;
	}
	.delete-bt a {
		text-decoration: none;
		color: #fff;
	}

</style>
<div class="container">
	<div class="row">


		<div class="col-md-9 col-sm-8">
			<div class="content featured-jobs">
				<h2><span class="wc-editable" data-pk="ws_featured_jobs" data-type="text">DANH SÁCH BÀI ĐĂNG</span></h2>

				<?php
				$posts = $this->requestAction('posts/expired_post');
				if (is_array($posts)) {
					
				
				foreach ($posts as $post)
				{
					?>

					<div class="featured-job">
						<div class="row">
							<div class="col-md-2 col-sm-3 featured-job-image">
								<img style="height: 136px; width: 133px;" 
								src="<?php echo $this->webroot.'files/user/image/'.$post['Users']['id'].'/'.$post['Users']['image']; ?>">
							</div><!-- /.col-sm-3 -->

							<div class="col-md-10 col-sm-9 featured-job-content">
							<h3><?php echo $this->Html->link($post['Post']['title'], array('controller' => 'posts', 'action' => 'view', $post['Post']['id'])); ?></h3>

								<div><span class="wc-editable" data-pk="front_label_company_name" data-type="text">Người đăng</span>: <strong>
								<?php echo h($post['Users']['full_name']); ?></strong></div>
								<div class="pull-right"><span class="wc-editable" data-pk="front_label_company_name" data-type="text">Liên hệ số điện thoại</span>: <strong>
								<?php echo h($post['Post']['phone']); ?></strong></div>
								<div class="pull-left"><span class="wc-editable" data-pk="front_label_company_name" data-type="text">Địa chỉ</span>: <strong>
								<?php echo h($post['Users']['address']); ?></strong></div><br>
								
								<div class="pull-left"><span class="wc-editable" data-pk="front_post_on" data-type="text">Ngày đăng</span>: <strong>
								<?php echo h($post['Post']['created']); ?>
										&nbsp;</strong></div><br>
										<div class="pull-left"><span class="wc-editable" data-pk="front_post_on" data-type="text">Ngày hết hạn</span>: <strong>
								<?php echo h($post['Post']['end_date']); ?>
										&nbsp;</strong></div><br>
								<div class="pull-left"><span class="wc-editable" data-pk="front_label_company_name" data-type="text">Lương</span>: <strong>
								<?php echo h($post['Salaries']['salaries']); ?></strong> VNĐ</div>
								
								<div class="pull-right"><span class="wc-editable" data-pk="front_location" data-type="text">Địa điểm</span>: <strong>
								<?php echo h($post['Countries']['city']); ?></strong></div></div><!-- /.col-sm-9 -->
								
							</div><!-- /.row -->
						</div><!-- /.featured-job -->
						<div class="rght-text"><span class="label label-success"><?php echo h($post['TimeParts']['type']); ?></span></div>
							<div class="delete-bt"><span class="label label-danger"><?php echo $this->Form->postLink(__('Xóa bài đăng'), array('action' => 'delete', $post['Post']['id']),
							array('confirm' => __('Bạn có chắc là bạn muốn xóa # %s?', $post['Post']['id']))); ?></span></div>

						<?php
					}
					}
					?>


					<!-- <div class="text-center">
						<a href="jobs.html" class="btn btn-primary">Browse All Jobs</a>							</div> -->
						<!-- /.text-center -->
					</div><!-- /.content -->
				</div><!-- /.col-sm-9 -->

				
					</div><!-- /.row -->
				</div>