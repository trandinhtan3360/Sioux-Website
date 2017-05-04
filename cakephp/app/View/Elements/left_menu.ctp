      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
	 
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
              	  <p class="centered"><a href=""><img src="
				  <?php
					if($this->session->check('session1')){
						
						if( isset($admin_data['image'])){
							echo $this->webroot.'files/user/image/'.$admin_data['id'].'/'.$admin_data['image'];
						}
						
					}
					?>
					" class="img-circle" width="60"></a></p>
              	  <h5 class="centered">
                  
                  <?php 
					if($this->session->check('session1')){
						
						if( isset($admin_data['full_name'])){
							echo $admin_data['full_name'];
						}
					}	
                    
                  ?>
                    
                  </h5>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-desktop"></i>
                          <span>Quản lý tài khoản</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="<?php echo $this->webroot;?>admin/users/index">Tất cả các tài khoản</a></li>
                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-cogs"></i>
                          <span>Quản lý công việc</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="<?php echo $this->webroot;?>admin/categories/index">Danh mục công việc</a></li>
                          <li><a  href="<?php echo $this->webroot;?>admin/salaries/index">Lương</a></li>
                          <li><a  href="<?php echo $this->webroot;?>admin/timeParts/index">Thời gian</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-book"></i>
                          <span>Quản lý bài đăng</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="<?php echo $this->webroot;?>admin/posts/expired_post_list">Bài đăng hết hạn</a></li>
                          <li><a  href="<?php echo $this->webroot;?>admin/posts/post_list">Tất cả bài đăng</a></li>
                      </ul>
                  </li>
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
	 