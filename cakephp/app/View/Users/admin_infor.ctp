<?php 
	echo $this->Html->css('user-profile');
?>

<meta charset = 'utf-8'>
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
	<div class="container-fluid" style="border-top: 1px solid black;">

		<div class="row">
				<!-- Khu v?c hi?n th? thông tin ngu?i dùng -->
				<!-- Hi?n th? left-sidebar -->
				<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
					<div class="profile-sidebar">
							<!-- ?nh user -->
							<div class="profile-userpic">
							
								<img src="<?php 
									if(isset($admin_data['image'])){
										
										echo $this->webroot.'files/user/image/'.$admin_data['id'].'/'.$admin_data['image'];
									}
								?>" class="img-responsive" alt="">
							</div>
							<!-- K?t thúc ?nh user -->
							<!-- Danh m?c user -->
							<div class="profile-usertitle">
								<div class="profile-usertitle-name">
									<?= isset($admin_data['full_name']) ? "Xin chào ".$admin_data['full_name'] : 'Khong co' ?>
								</div>
								<div class="profile-usertitle-job">
									<?php 
										if(isset($admin_data['role'])){
										
											if($admin_data['role'] == 1){
												print_r('Ngu?i tìm giúp vi?c');
											}
											else if($admin_data['role'] == 2){
												print_r('Ngu?i giúp vi?c');
											}
											
										}else{
											print_r('Không t?n t?i');
										}
									?>
								</div>
							</div>
							<!-- END SIDEBAR USER TITLE -->
							<!-- SIDEBAR BUTTONS -->
							<div class="profile-userbuttons">
								<?php 
										if(isset($admin_data['role'])){
										
											if($admin_data['role'] == 1){
												print_r("<a href = '<?php echo echo $this->webroot;?>/posts/add' class='btn btn-success btn-sm'>Ðang post</a>");
											}
											else if($admin_data['role'] == 2){
												echo $this->Html->link(__('Ðang profile',array('class' => 'btn btn-danger')), array('action' => 'edit', $admin_data['id']));
											}
											
										}else{
											echo "B?n c?n dang nhap";
										}
									?>
								
			                	
							</div>
							<!-- END SIDEBAR BUTTONS -->
							<!-- SIDEBAR MENU -->
							
					<!-- END MENU -->
					</div>
				</div>
				
				<!-- Hi?n th? thông tin cá nhân -->
				<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9" style='border-left: 1px solid black;'>
							<div class="profile-content">
								<!-- Thông tin liên l?c -->
								<table class="table table-hover">
									<thead>
										<tr>
											<th>Thông tin liên l?c</th>
										</tr>

									</thead>
									<tbody>
										<tr>
											<td>E-mail:</td>
											<td><?= isset($admin_data['email']) ? $admin_data['email'] : 'Khong co' ?></td>
										</tr>
										<tr>
											<td>S? di?n tho?i:</td>
											<td><?= isset($admin_data['phone']) ? $admin_data['phone'] : 'Khong co' ?></td>
										</tr>
										<tr>
											<td>Ð?a ch?:</td>
											<td><?= isset($admin_data['address']) ? $admin_data['address'] : 'Khong co' ?></td>
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
											<td><?= isset($admin_data['dob']) ? $admin_data['dob'] : 'Khong co' ?></td>
										</tr>
										
										<tr>
											<td>Công vi?c:</td>
											<td><?= isset($admin_data['job']) ? $admin_data['job'] : 'Khong co' ?></td>
										</tr>
										<tr>
											<td>Tr?ng thái</td>
											<td><button class="btn btn-success btn-xs"><i class="fa fa-check">
												<?php 
												if(isset($admin_data['status'])){
												
													if($admin_data['status'] == 1){
														print_r('Có vi?c');
													}
													else if($admin_data['status'] == 0){
														print_r('Chua có vi?c');
													}
													
												}else{
													print_r('b?n c?n ph?i dang nh?p');
												}
											?>
											</i></button></td>
										</tr>
									</tbody>
								</table>
								<!-- Thông tin chung -->
								<tr>
									<td><label for="">Mô T?</label>
									</td>
									<td colspan="" rowspan="" headers="">
										<blockquote>
										  <p>
											<?= isset($admin_data['description']) ? $admin_data['description'] : 'Khong co' ?>
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