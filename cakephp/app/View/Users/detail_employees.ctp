<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" 
integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<style>

@media (min-width: 1200px) {
	[class*="span"] {
		float: left;
		min-height: 1px;
		margin-left: 10px;
	  }
	
	span12 {
		width: 1137px;
	}
}
</style>
</head>

<body>

	<div class="row">
		<div class="col-lg-3 col-md-3 col-sm-3">
			<ul class="nav nav-pills nav-stacked">
			  <li role="presentation" class="active"><a href="#">Loại</a></li>
			  <li role="presentation"><a href="#">Full time</a></li>
			  <li role="presentation"><a href="#">Part time</a></li>
			</ul>
			<ul class="nav nav-pills nav-stacked">
			  <li role="presentation" class="active"><a href="#">Khu vực</a></li>
			  <li role="presentation"><a href="#">Đà Nẵng</a></li>
			  <li role="presentation"><a href="#">Hồ Chí Minh</a></li>
			  <li role="presentation"><a href="#">Hà Nội</a></li>

			</ul>
			<ul class="nav nav-pills nav-stacked">
			  <h2>SUBSCRIBE TO OUR NEWSLETTER</h2>
			  <h5>and get the latest news and job offers
			</ul>
			<ul class="nav nav-pills nav-stacked">
			  <p><a href="#" class="btn btn-primary" role="Subscribe">Subscribe</a>
			</ul>
		</div>
		<div class="col-lg-8 col-md-8 col-sm-8">


			<div class="row">

<?php
    $users = $this->requestAction('users/detail_employees');
    foreach ($users as $user)
    {
      ?>
				<div class="col-sm-4">
					<div class="thumbnail">
						
				      <img src="<?php echo $this->webroot.'files/user/image/'.$user['User']['id'].'/'.$user['User']['image'];?>">

				      <div class="caption">
				        <h3>Tên: <?php echo h($user['User']['full_name']); ?> </h3>
		        		<?php $dob = explode('/', $user['User']['dob']); ?>
				        <p> <?php echo date('Y') - date('Y', strtotime($dob[2].'-'.$dob[1].'-'. $dob[0])); ?>Tuổi</p>

				        <p>Quê quán: <?php echo ($user['User']['address']); ?></p>
				        
				        <p><a href="#" class="btn btn-primary" value="button">Chọn</a> </p>
				      </div>
				  </div>
				</div>
				<?php
    }
?>
			</div>			
		</div>
	</div>
</body>
</html>
