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
		left: 645px;
		bottom: 103px;
		padding: 6px;
	}
	strong {
		color: ;
	}
</style>
<div class="container">
	<div class="row">
		<div class="col-md-9 col-sm-8">
			<div class="content featured-jobs">
				<h2><span class="wc-editable" data-pk="ws_featured_jobs" data-type="text">Featured Jobs</span></h2>

				<?php
				$posts = $this->requestAction('posts/');
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
									<li><span class="wc-editable" data-pk="front_post_on" data-type="text">Ngày đăng</span>: <strong><?php echo h($post['Post']['start_date']); ?>
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


					<div class="text-center">
						<a href="jobs.html" class="btn btn-primary">Browse All Jobs</a>							</div><!-- /.text-center -->
					</div><!-- /.content -->
				</div><!-- /.col-sm-9 -->

				<div class="col-md-3 col-sm-4">
					<div class="sidebar">
						<div class="widget widget-access">
							<h3><span class="wc-editable" data-pk="ws_featured_employers" data-type="text">Featured Employers</span></h3>

							<div class="widget-body">
								<ul class="featured-list">
									<li>
										<a href="index.php?controller=pjWebsite&amp;action=pjActionJobs&amp;employer_id=4" class="featured-list-img"><img style="width: 29px; height: 24px;" src="http://vevs.website/demo/job-portal-website/app/web/upload/logos/4_4ce67a3bb7833113d47b33450c7f1a7d.jpg" alt=""></a>
										<a class="featured-list-content" href="index.php?controller=pjWebsite&amp;action=pjActionJobs&amp;employer_id=4">Adecco</a>
									</li>
									<li>
										<a href="index.php?controller=pjWebsite&amp;action=pjActionJobs&amp;employer_id=5" class="featured-list-img"><img style="width: 29px; height: 24px;" src="http://vevs.website/demo/job-portal-website/app/web/upload/logos/5_57e5c1b1832f86d007e72d4aa51b0b64.jpg" alt=""></a>
										<a class="featured-list-content" href="index.php?controller=pjWebsite&amp;action=pjActionJobs&amp;employer_id=5">Kent Pharmaceuticals</a>
									</li>
									<li>
										<a href="index.php?controller=pjWebsite&amp;action=pjActionJobs&amp;employer_id=8" class="featured-list-img"><img style="width: 29px; height: 24px;" src="http://vevs.website/demo/job-portal-website/app/web/upload/logos/8_1079490a927a26a4d62d4023c25bcd68.jpg" alt=""></a>
										<a class="featured-list-content" href="index.php?controller=pjWebsite&amp;action=pjActionJobs&amp;employer_id=8">Midtown</a>
									</li>
									<li>
										<a href="index.php?controller=pjWebsite&amp;action=pjActionJobs&amp;employer_id=12" class="featured-list-img"><img style="width: 29px; height: 24px;" src="http://vevs.website/demo/job-portal-website/app/web/upload/logos/12_a8412469b60cd187d51ff4d4592cce46.jpg" alt=""></a>
										<a class="featured-list-content" href="index.php?controller=pjWebsite&amp;action=pjActionJobs&amp;employer_id=12">BMI Kings Park Hospital</a>
									</li>
									<li>
										<a href="index.php?controller=pjWebsite&amp;action=pjActionJobs&amp;employer_id=13" class="featured-list-img"><img style="width: 29px; height: 24px;" src="http://vevs.website/demo/job-portal-website/app/web/upload/logos/13_cb1ef34e82ca6852176e50d2c38de14e.jpg" alt=""></a>
										<a class="featured-list-content" href="index.php?controller=pjWebsite&amp;action=pjActionJobs&amp;employer_id=13">Fingertips preschool</a>
									</li>
									<li>
										<a href="index.php?controller=pjWebsite&amp;action=pjActionJobs&amp;employer_id=15" class="featured-list-img"><img style="width: 29px; height: 24px;" src="http://vevs.website/demo/job-portal-website/app/web/upload/logos/15_50cc30c5bff509ebe8a62cd41a110906.jpg" alt=""></a>
										<a class="featured-list-content" href="index.php?controller=pjWebsite&amp;action=pjActionJobs&amp;employer_id=15">Lingwood Food Services Ltd</a>
									</li>
									<li><a href="index.php?controller=pjWebsite&amp;action=pjActionJobs&amp;employer_id=56" class="featured-list-img"><img style="width: 29px; height: 24px;" src="http://vevs.website/demo/job-portal-website/app/web/upload/logos/56_fe15572f75ab763dfa140540f68eb125.jpg" alt=""></a>
										<a class="featured-list-content" href="index.php?controller=pjWebsite&amp;action=pjActionJobs&amp;employer_id=56">Lloyd Herbert &amp; Jones</a></li><li>
										<a href="index.php?controller=pjWebsite&amp;action=pjActionJobs&amp;employer_id=59" class="featured-list-img"><img style="width: 29px; height: 24px;" src="http://vevs.website/demo/job-portal-website/app/web/upload/logos/59_e79d9280dc599216ad50971eea96b358.jpg" alt=""></a>
										<a class="featured-list-content" href="index.php?controller=pjWebsite&amp;action=pjActionJobs&amp;employer_id=59">Cannon Guards Security Ltd</a></li></ul>
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
					</div><!-- /.row -->
				</div>