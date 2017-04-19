<?php echo $this->Html->css('bootstrap.min.css'); ?>
<style type="text/css" media="screen">
	.span5 {
		width: 0px;
	}
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
		left: 660px;
		bottom: 95px;
		padding: 6px;
	}
	strong {
		color: ;
	}
</style>
<div class="container">
	<div class="row">

		<div class="col-md-3 col-sm-4">
					<div class="sidebar">
						<div class="widget widget-access">
							

							<div class="widget-body">
								<div class="list-group">
									<h3><span class="wc-editable" data-pk="ws_featured_employers" data-type="text"><a class="list-group-item active" href="" title="">Danh sách công việc</a></span></h3>
									<?php  

								$categories = $this->requestAction('categories/');
									foreach ($categories as $category)
									{
								?>
									<a class="list-group-item" href="<?php echo $this->webroot.'countries/index'; ?>" title=""><?php echo $category['Category']['name']; ?></a>
									<?php 

								}
									 ?>
								</div>

								<div class="list-group">
									<h3><span class="wc-editable" data-pk="ws_featured_employers" data-type="text"><a class="list-group-item active" href="" title="">Loại</a></span></h3>

									<?php  

								$timeParts = $this->requestAction('timeParts/');
									foreach ($timeParts as $timePart)
									{
								?>
									<a class="list-group-item" href="<?php echo $this->webroot.'countries/index'; ?>" title=""><?php echo $timePart['TimePart']['type']; ?></a>
									<?php 

								}
									 ?>
								</div>

								<div class="list-group">

								<h3><span class="wc-editable" data-pk="ws_featured_employers" data-type="text"><a class="list-group-item active" href="" title="">Khu vực</a></span></h3>

								<?php  

								$countries = $this->requestAction('countries/');
									foreach ($countries as $country)
									{
								?>
									<a class="list-group-item" href="<?php echo $this->webroot.'countries/index'; ?>" title=""><?php echo $country['Country']['city']; ?></a>
									<?php 

								}
									 ?>
								</div>
									</div><!-- /.widget-body -->
								</div><!-- /.widget -->

								<div class="widget widget-newsletter">
									<h3><span class="wc-editable" data-pk="ws_subscribe_to_newsletter" data-type="text">Subscribe to Our Newsletter</span></h3>

									<div class="widget-body">
										<p><span class="wc-editable" data-pk="ws_subscribe_to_newsletter_desc" data-type="textarea">and get the latest news and job offers.</span></p>
									</div><!-- /.widget-body -->

									<div class="newsletter">
										<input type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#myModal" value="Subscribe">


									</div>
								</div><!-- /.widget -->
							</div><!-- /.sidebar -->
						</div><!-- /.col-sm-3 -->


		<div class="col-md-9 col-sm-8">
			<div class="content featured-jobs">
				<h2><span class="wc-editable" data-pk="ws_featured_jobs" data-type="text">Featured Jobs</span></h2>

				<?php
				$posts = $this->requestAction('posts/post_list');
				foreach ($posts as $post)
				{
					?>

					<div class="featured-job">
						<div class="row">
							<div class="col-md-2 col-sm-3 featured-job-image">
								<a href="security-officer-luxury-retail-60.html"><img src="http://vevs.website/demo/job-portal-website/app/web/upload/logos/59_e79d9280dc599216ad50971eea96b358.jpg" alt=""></a>
							</div><!-- /.col-sm-3 -->

							<div class="col-md-10 col-sm-9 featured-job-content">
							<h3><?php echo $this->Html->link($post['Post']['title'], array('controller' => 'posts', 'action' => 'view', $post['Post']['id'])); ?></h3>

								<span class="wc-editable" data-pk="front_label_company_name" data-type="text">Người đăng</span>: <strong><?php echo h($post['Users']['full_name']); ?></strong>

								<ul>
									<li><span class="wc-editable" data-pk="front_post_on" data-type="text">Ngày đăng</span>: <strong><?php echo h($post['Post']['end_date']); ?>
										&nbsp;</strong></li>
										<li><span class="wc-editable" data-pk="front_label_company_name" data-type="text">Lương</span>: <strong><?php echo h($post['Salaries']['salaries']); ?></strong></li>
										<li><span class="wc-editable" data-pk="front_location" data-type="text">Location</span>: <strong>

										<?php echo h($post['Countries']['city']); ?></strong></li>
									</ul>

									<span class="label label-success"><?php echo h($post['TimeParts']['type']); ?></span>
								</div><!-- /.col-sm-9 -->
							</div><!-- /.row -->
						</div><!-- /.featured-job -->


						<?php
					}
					?>


					<!-- <div class="text-center">
						<a href="jobs.html" class="btn btn-primary">Browse All Jobs</a>							</div> -->
						<!-- /.text-center -->
					</div><!-- /.content -->
				</div><!-- /.col-sm-9 -->

				
					</div><!-- /.row -->
				</div>