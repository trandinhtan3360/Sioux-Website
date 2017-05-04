


    <!-- Color Bars (above header)-->
    <div class="color-bar-1"></div>
    <div class="color-bar-2 color-bg"></div>

    <!-- <div class="collapsed">
    <a class="btn btn-danger btn-outline btn-circle collapsed">Đăng kí</a>
    </div>
    <div class="collapsed1" style="margin-top: -30px; margin-left: 530px;">
    <a class="btn btn-info btn-outline btn-circle collapsed">Đăng nhập</a>
    </div> -->
    <div class="container">
    
      <div class="row header"><!-- Begin Header -->

        <div class="span5 logo">  
        </div>
        <!-- Login and register -->
        <div class="span7 navigation" style="margin-top: 10px;">            
            <div class="navbar">
				<ul class="nav"> 
						<?php 
						if($this->Session->check("session")){
							$user_data = $this->Session->read('session');
							?>
							<li class="active"><a href='<?php
											if(isset($user_data['id']))
											{
											echo $this->webroot.'users/user_view_profile/'.$user_data['id'];}?>' >
											Trang cá nhân
										</a>
							<li>
							<li><a href='<?php echo $this->webroot;?>logout' >Đăng xuất</a><li>
						<?php
						
						}else {
							?>
								<li class='active' ><a href='<?php echo $this->webroot;?>register' > Đăng ký</a></li>
								<li ><a href='<?php echo $this->webroot;?>login' > Đăng nhập</a></li>
						<?php		
						}
						?>
				</ul>

            </div>
        </div>

        <!-- Logo -->
        <div class="span5 logo" style="margin-top:0px;">
            <a href="<?php echo $this->webroot;?>"><img src="<?php echo $this->webroot.'img/logo.gif'; ?>" alt="" /></a>
            <h2>Tận tâm, uy tín</h2>
        </div>
        <!-- Main Navigation -->
        <div class="span7 navigation" style="margin-top: 10px;">
            
            <div class="navbar hidden-phone">
            <ul class="nav">
            <li class="active"><a href="<?php echo $this->webroot; ?>">Trang chủ</a></li>
             <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Danh mục 
                <b class="caret"></b></a>
                <ul class="dropdown-menu">
                
                <?php
                    $categories = $this->requestAction('categories/');
                    foreach ($categories as $category)
                    {
                ?>
                    <li><a href="<?php echo $this->webroot;?>categories/view/
                    <?php echo $category['Category']['id'];?>">
                    <?php echo $category['Category']['name'];?></a></li>
                    <?php
                      }
                ?>
                
                   <!--  <li><a href="#">Giúp việc nhà</a></li>
                    <li><a href="#">Chăm em bé</a></li>
                    <li><a href="#">Giúp việc nhà theo giờ</a></li>
                    <li><a href="#">Giữ em bé</a></li>
                    <li><a href="#">Chăm người nhà</a></li> -->
                </ul>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Dịch vụ <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="<?php echo $this->webroot.'users/employees/'; ?>">Người giúp việc</a></li>
                    <li><a href="<?php echo $this->webroot.'posts/post_information/'; ?>">Thông tin tuyển dụng</a></li>
                </ul>
			</li>
				<?php 
						if($this->Session->check("session")){
							$user_data = $this->Session->read('session');
							?>
			<li>
			
				<a href="<?php echo $this->webroot.'users/publish_post'; ?>">Đăng bài</a>
				
				<?php } ?>
            </li>
			<li><a href="<?php echo $this->webroot.'posts/post_list'; ?>">Danh sách bài đăng</a></li>
            </ul>
            
            </div>
			</div>
			</div>
        </div>

        