
 <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>

	<div class="row">
		<div class="col-lg-2 col-md-2 col-sm-2">
			<ul class="nav nav-pills nav-stacked">
			  <li role="presentation" class="active"><a href="#">Loại</a></li>
			  <li role="presentation"><a href="#">Full time</a></li>
			  <li role="presentation"><a href="#">Part time</a></li>
			</ul>
			<ul class="nav nav-pills nav-stacked">
			  <li role="presentation" class="active"><a href="#">Khu vực</a></li>
			  <li role="presentation"><a href="#">Đà Nẵng</a></li>
			  <li role="presentation"><a href="#">Hồ Chí Minh</a></li>
			  <li role="presenta

			  tion"><a href="#">Hà Nội</a></li>

			</ul>
			<ul class="nav nav-pills nav-stacked">
			  <h2>SUBSCRIBE TO OUR NEWSLETTER</h2>
			  <h5>and get the latest news and job offers
			</ul>
			<ul class="nav nav-pills nav-stacked">
			  <p><a href="#" class="btn btn-primary" role="Subscribe">Subscribe</a>
			</ul>
		</div>
		<div class="col-lg-10 col-md-10 col-sm-10">


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
					        		Tuổi:<?php $dob = explode('/', $user['User']['dob']); ?>
							        <p> <?php echo date('Y') - date('Y', strtotime($dob[2].'-'.$dob[1].'-'. $dob[0])); ?></p>

							        <p>Quê quán: <?php echo ($user['User']['address']); ?></p>
							        
							        <p><a href="#" class="btn btn-primary" value="button">Mời</a> </p>
							        <h6><a href="#"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>XEM THÊM</a></h6>

							      </div>
							  </div>
							</div>
							<?php
			    }
			?>
			</div>




			<!-- <div class="col-sm-4">
				<div class="thumbnail">
				      <img src="http://2.bp.blogspot.com/-NLOst2tUSzQ/U4MWp0WCBzI/AAAAAAAAAkE/Qt-jKKF87qA/s1600/phu-nu-hien-dai-cong-viec-noi-tro.jpg" alt="...">
				      <div class="caption">
				        <h3>Tên:<b>A tèo</b> </h3>
				        <p>Tuổi: 30  </p>
				        <p>Quê quán: Đà Nẵng</p>
				        
				        <p><a href="#" class="btn btn-primary" role="button">Chọn</a> </p>
				      </div>
				  </div>
				</div>

			<div class="col-sm-4">
				<div class="thumbnail">
				      <img src="http://2.bp.blogspot.com/-NLOst2tUSzQ/U4MWp0WCBzI/AAAAAAAAAkE/Qt-jKKF87qA/s1600/phu-nu-hien-dai-cong-viec-noi-tro.jpg" alt="...">
				      <div class="caption">
				        <h3>Tên:<b>A tèo</b> </h3>
				        <p>Tuổi: 30  </p>
				        <p>Quê quán: Đà Nẵng</p>
				        
				        <p><a href="#" class="btn btn-primary" role="button">Chọn</a> </p>
				      </div>
				  </div>
				</div>

			</div>

			<div class="row">
				<div class="col-sm-4">
					<div class="thumbnail">
				      <img src="http://2.bp.blogspot.com/-NLOst2tUSzQ/U4MWp0WCBzI/AAAAAAAAAkE/Qt-jKKF87qA/s1600/phu-nu-hien-dai-cong-viec-noi-tro.jpg" alt="...">
				      <div class="caption">
				        <h3>Tên:<b>A tèo</b> </h3>
				        <p>Tuổi: 30  </p>
				        <p>Quê quán: Đà Nẵng</p>
				        
				        <p><a href="#" class="btn btn-primary" role="button">Chọn</a> </p>
				      </div>
				  </div>
				</div>
			<div class="col-sm-4">
				<div class="thumbnail">
				      <img src="http://2.bp.blogspot.com/-NLOst2tUSzQ/U4MWp0WCBzI/AAAAAAAAAkE/Qt-jKKF87qA/s1600/phu-nu-hien-dai-cong-viec-noi-tro.jpg" alt="...">
				      <div class="caption">
				        <h3>Tên:<b>A tèo</b> </h3>
				        <p>Tuổi: 30  </p>
				        <p>Quê quán: Đà Nẵng</p>
				        
				        <p><a href="#" class="btn btn-primary" role="button">Chọn</a> </p>
				      </div>
				  </div>
				</div>
			<div class="col-sm-4">
				<div class="thumbnail">
				      <img src="http://2.bp.blogspot.com/-NLOst2tUSzQ/U4MWp0WCBzI/AAAAAAAAAkE/Qt-jKKF87qA/s1600/phu-nu-hien-dai-cong-viec-noi-tro.jpg" alt="...">
				      <div class="caption">
				        <h3>Tên:<b>A tèo</b> </h3>
				        <p>Tuổi: 30  </p>
				        <p>Quê quán: Đà Nẵng</p>
				        
				        <p><a href="#" class="btn btn-primary" role="button">Chọn</a> </p>
				      </div>
				  </div>
				</div>
			</div> -->
		</div>
	</div>
</body>
</html>