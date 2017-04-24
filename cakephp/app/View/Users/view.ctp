<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<!-- Khu vực hiển thị thông tin người dùng -->
				<nav class="navbar navbar" role="navigation">
					<div class="container-fluid">
						<!-- Brand and toggle get grouped for better mobile display -->
						
				
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse navbar-ex1-collapse">
							<ul class="nav navbar-nav">
								<li><a href="#">TRANG CÁ NHÂN</a></li>
								<li><a href="#">Đăng bài post</a></li>
								<li><a href="#">Tin nhắn<span class="badge">1</span></a></li>
								
							</ul>
							
							<ul class="nav navbar-nav navbar-right">
								
								<li><a href="#">Đăng xuất</a></li>
							</ul>
						</div><!-- /.navbar-collapse -->
					</div>
				</nav>
<!-- Hiển thị left-sidebar -->
				<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">

					<div class="list-group">
						  <a href="#" class="list-group-item list-group-item-info">
						    Thông tin cá nhân
						  	</a>
						  <a href="#" class="list-group-item">
						    Đổi thông tin cá nhân
						  </a>
						  <a href="#" class="list-group-item">
						    Đổi mật khẩu
						  </a>
						  <a href="#" class="list-group-item">
						    Danh sách lời mời
						    <span class="badge">14</span>
						  </a>
						  <a href="#" class="list-group-item">
						    Danh sách bài đăng
						    <span class="badge">14</span>
						  </a>
					</div>
					
				</div>
<!-- Hiển thị thông tin cá nhân -->
				<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9" style='border-left: 1px solid black;'>
					<legend><h2><?php echo __('Tài khoản của tôi'); ?></h2>
					Thông tin cá nhân</legend>
					<div class="row">
						<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
							<th><?php echo __(''); ?></th><!-- hinh anh -->
							<td >
								<img src="<?php echo h($user['User']['image']); ?>
								&nbsp;" class="img-circle" width="150" height="180">
							</td>
						</div>
						<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
							<th><label for=""><?php echo __('Mô tả: '); ?></th>
							<td>
								<?php echo h($user['User']['description']); ?>
								&nbsp;
							</td></label>
						</div>
					</div>
					<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
						<table class="table table-hover">
							<thead>		
								<tr>
								<th class="active"><?php echo __('Họ và tên'); ?></th>
								
								</tr>
								<tr>
									<th class="active"><?php echo __('Tên đăng nhập'); ?></th>
									
								</tr>
								<tr>
									<th class="active"><?php echo __('Mật khẩu'); ?></th>
									
								</tr>
								<tr>
									<th class="active"><?php echo __('Email'); ?></th>
									
								</tr>
								<tr>
									<th class="active"><?php echo __('Số điện thoại'); ?></th>
									
								</tr>
								
								<tr>
									<th class="active"><?php echo __('Địa chỉ'); ?></th>
									
								</tr>
								<tr>
									<th class="active"><?php echo __('Vai trò'); ?></th>
									
								</tr>
							</thead>
						</table>
						</div>
						<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
							<table class="table table-hover">
								<tr>
									<th>
										<?php echo h($user['User']['full_name']); ?>
										&nbsp;
									</th>

								</tr>
								<tr>
									<th>
										<?php echo h($user['User']['username']); ?>
										&nbsp;
									</th>
								</tr>
								<tr>
									<th><
										<?php echo h($user['User']['password']); ?>
										&nbsp;
									</th>
								</tr>
								<tr>
									<th>
										<?php echo h($user['User']['email']); ?>
										&nbsp;
									</th>
								</tr>
								<tr>
									<th>
										<?php echo h($user['User']['phone']); ?>
										&nbsp;
									</th>
								</tr>
								<tr>
									<th>
										<?php echo h($user['User']['address']); ?>
										&nbsp;
									</th>
								</tr>
								<tr>
									<th>
										<?php echo h($user['User']['role']); ?>
										&nbsp;
									</th>
								</tr>
							</table>
					</div>
					
				</div>
			</div>
		</div>	
	</div>
</div>
</table>





