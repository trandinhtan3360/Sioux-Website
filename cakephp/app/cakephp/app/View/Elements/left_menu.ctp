      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
              	  <p class="centered"><a href=""><img src="assets/img/ui-sam.jpg" class="img-circle" width="60"></a></p>
              	  <h5 class="centered">
                  
                  <?php 
                    if (isset($_post['ok'])) {
                      
                      
                    }

                  ?>
                    
                  </h5>
              	  	
                  <li class="mt">
                      <a class="active" href="">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-desktop"></i>
                          <span>Quản lý user</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="<?php echo $this->webroot;?>/admin/users/index">Admin</a></li>
                          <li><a  href="">Employees</a></li>
                          <li><a  href="">Employeers</a></li>
                          <li><a  href="">Tất cả</a></li>
                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-cogs"></i>
                          <span>Quản lý công việc</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="">Thêm công việc</a></li>
                          <li><a  href="">Danh mục công việc</a></li>
                          <li><a  href="">Thời gian</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-book"></i>
                          <span>Quản lý bài đăng</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="">Bài đăng mới</a></li>
                          <li><a  href="">Bài đăng hết hạn</a></li>
                          <li><a  href="">Tất cả bài đăng</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-tasks"></i>
                          <span>Khác</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="">Lương</a></li>
                          <li><a  href=""></a>Công việc</li>
                          <li><a  href=""></a>Địa điểm</li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-th"></i>
                          <span>Data Tables</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="">Basic Table</a></li>
                          <li><a  href="">Responsive Table</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class=" fa fa-bar-chart-o"></i>
                          <span>Biểu đồ</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="">Morris</a></li>
                          <li><a  href="">Chartjs</a></li>
                      </ul>
                  </li>

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>