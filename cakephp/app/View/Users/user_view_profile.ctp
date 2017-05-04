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
		<?php if(isset($user_data)){
			//echo $user_data['id'];
			if($user_data['id'] == $user['User']['id'])
			{

		?>
		<div class="row">
				<!-- Khu vực hiển thị thông tin người dùng -->
				<!-- Hiển thị left-sidebar -->
				<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
					<div class="profile-sidebar">
							<!-- Ảnh user -->
							<div class="profile-userpic">
							
								<img src="<?php if(!empty($user['User']['image'])){
									echo $this->webroot.'files/user/image/'.$user['User']['id'].'/'.$user['User']['image'];
								} else {
									echo $this->webroot.'img/user-avatar.jpg';
								}
										
								?>" class="img-responsive" alt="">
							</div>
							<!-- Kết thúc ảnh user -->
							<!-- Danh mục user -->
							<div class="profile-usertitle">
								<div class="profile-usertitle-name">
									<?php echo h($user['User']['full_name']); ?>
								</div>
								<div class="profile-usertitle-job">
									<?php 
										
											if($user['User']['role'] == 1){
												print_r('Người tìm giúp việc');
											}
											else if($user['User']['role'] == 2){
												print_r('Người giúp việc');
											}else {
												print_r('Đang cập nhật');
											}

									?>
								</div>
							</div>
							<!-- END SIDEBAR USER TITLE -->
							<!-- SIDEBAR BUTTONS -->
							<div class="profile-userbuttons">
								<?php 
										if(isset($user['User']['role'])){
										
											if($user['User']['role'] == 1){
												echo $this->Html->link(__('Đăng bài', array('class' => 'btn btn-success btn-sm')), array('action' => 'publish_post', $user['User']['id']));
											}
											else if($user['User']['role'] == 2){
												echo $this->Html->link(__('Đăng profile',array('class' => 'btn btn-danger')), array('action' => 'user_edit_profile', $user['User']['id']));
											}
											
										}else{
											echo "Bạn cần đăng nhập";
										}
									?>
								
			                	
							</div>
							<!-- END SIDEBAR BUTTONS -->
							<!-- SIDEBAR MENU -->
							<div class="profile-usermenu">
								<ul class="nav">
									<li class="active">
			
										<?php echo $this->Html->link(__('Cập nhật thông tin cá nhân',array('class' => 'glyphicon glyphicon-home')), array('action' => 'user_edit_profile', $user['User']['id'])); ?>
									</li>
									<li>
										<?php echo $this->Html->link(__('Danh sách bài đăng',array('class' => 'glyphicon glyphicon-home')), 
										array('action' => 'user_post_list', $user['User']['id'])); ?>
									</li>
									<!--
									<li>
										<a href="..\admin dashboard\employee-change-password.html">
										<i class="glyphicon glyphicon-user"></i>
										Đổi mật khẩu</a>
									</li>
									
									<li>
										<a href="" target="_blank">
										<i class="glyphicon glyphicon-ok"></i>
										Xem lời mời</a>
									</li>  -->
									
									
								
								</ul>
							</div>
					<!-- END MENU -->
					</div>
				</div>
				
				<!-- Hiển thị thông tin cá nhân -->
				<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9" style='border-left: 1px solid black;'>
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
											<td><?= isset($user['User']['email']) ? $user['User']['email'] : 'Cập nhật thêm' ?></td>
										</tr>
										<tr>
											<td>Số điện thoại:</td>
											<td><?= isset($user['User']['phone']) ? $user['User']['phone'] : 'Cập nhật thêm' ?></td>
										</tr>
										<tr>
											<td>Địa chỉ:</td>
											<td><?= isset($user['User']['address']) ? $user['User']['address'] : 'Cập nhật thêm' ?></td>
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
											<td><?= isset($user['User']['dob']) ? $user['User']['dob'] : 'Cập nhật thêm' ?></td>
										</tr>
										
										<tr>
										<?php
											if($user_data['role'] == 2)
											{
												
										?>
											<td>Công việc:</td>
											<td><?= isset($user['User']['job']) ? $user['User']['job'] : 'Cập nhật thêm' ?></td>
										</tr>
										<?php
											} else {
										?>
											<td>Công việc cần tuyển:</td>
											<td><?= isset($user['User']['job']) ? $user['User']['job'] : 'Cập nhật thêm' ?></td>
										<?php
											}
										?>
										<tr>
										<?php
											if($user_data['role'] == 2) {

										?>
											<td>Trạng thái</td>
											<td><button class="btn btn-success btn-xs"><i class="fa fa-check">
												<?php 
												if(isset($user['User']['status'])){
												
													if($user['User']['status'] == 1){
														print_r('Có việc');
													}

													
												}else{
													print_r('Chưa có việc');
												}
											?>
											</i></button></td>
											<?php 
											}
											?>
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
											<?= isset($user['User']['description']) ? $user['User']['description'] : 'Cập nhật thêm' ?>
											</p>
										</blockquote>
									</td>				
								</tr>						
							</div>
					</div> <!-- Col 9 -->
				</div><!-- Col 12 -->
			<?php 
				
				} else {
					echo $this->element('404');
				}
			}else{
				echo $this->element('404');
				
			}
			?>
			</div>
		</div>
	</body>
<html>