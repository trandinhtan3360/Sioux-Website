<html>
<?php 
	echo $this->Html->css('user-profile');
?>


<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" 
integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" 
integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


<style>

@media (min-width: 1200px){
	.span4 {
		width: 359px;
	}
}

</style>
<body>
	<div class="color-bar-2 color-bg"></div>
	<div class="container">
		<div class="row">
				<!-- Khu vực hiển thị thông tin người dùng -->
				<!-- Hiển thị left-sidebar -->
				<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
					<div class="profile-sidebar">
							<!-- Ảnh user -->
							<div class="profile-userpic">
								<img src="<?php echo $this->webroot.'files/user/image/'.$user['User']['id'].'/'.$user['User']['image']; ?>" class="img-responsive" alt="">
							</div>
							<!-- Kết thúc ảnh user -->
							<!-- Danh mục user -->
							<div class="profile-usertitle">
								<div class="profile-usertitle-name">
									<?php echo h($user['User']['full_name']); ?>
								</div>
								<div class="profile-usertitle-job">
									<?php //echo h($user['User']['role']); ?>
								</div>
							</div>
							<!-- END SIDEBAR USER TITLE -->
							<!-- SIDEBAR BUTTONS -->
							<div class="profile-userbuttons">
								<?php 
									if($this->Session->check("session")){
										
										if($user['User']['status'] == 1){
										
											echo "Người này đã có việc";
										}else {
										
											echo "<button type='submit' class='btn btn-success btn-sm'>Mời người này</button>";
										}
									}
									else {
										?>
										
										<a href='<?php echo $this->webroot;?>login' type='button' class='btn btn-success btn-sm'>Mời người này</a>
										
								<?php
									}
								?>
							</div>
							<!-- END SIDEBAR BUTTONS -->
							
					<!-- END MENU -->
					</div>
				</div>
				
				<!-- Hiển thị thông tin cá nhân -->
				<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
							<div class="profile-content">
								<!-- Thông tin liên lạc -->
								<table class="table table-hover">
									<thead>
										<tr>
											<th>Thông tin liên lạc</th>
										</tr>

									</thead>
									<tbody>
										<tr>
											<td>E-mail:</td>
											<td><?php echo h($user['User']['email']); ?></td>
										</tr>
										<tr>
											<td>Số điện thoại:</td>
											<td><?php echo h($user['User']['phone']); ?></td>
										</tr>
										<tr>
											<td>Địa chỉ:</td>
											<td><?php echo h($user['User']['address']); ?></td>
										</tr>
									</tbody>
								</table>
								<!-- Thông tin chung -->
								<table class="table table-hover">
									<thead>
										<tr>
											<th>Thông tin chung</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>Ngày sinh:</td>
											<td><?php echo h($user['User']['dob']); ?></td>
										</tr>
										
										<tr>
											<td>Công việc:</td>
											<td><?php //echo h($user['User']['job']); ?></td>
										</tr>
										<tr>
											<td>Trạng thái</td>
											<td><button class="btn btn-success btn-xs"><i class="fa fa-check">
												<?php 
													if($user['User']['status'] == 1){
														echo "Đã có việc";
													}
													else if($user['User']['status'] == 1){
														echo "Đang tìm việc";
													} else {
														echo "Đang cập nhật";
													}
												?>
											</i></button></td>
										</tr>
									</tbody>
								</table>
								<!-- Thông tin chung -->
								<tr>
									<td><label for="">Mô Tả</label>
									</td>
									<td colspan="" rowspan="" headers="">
										<blockquote>
										  <p>
											<?php echo h($user['User']['description']); ?>
											</p>
										</blockquote>
									</td>				
								</tr>						
							</div>
					</div> <!-- Col 9 -->
				</div><!-- Col 12 -->
			</div>
		</div>
	</body>
<html>
