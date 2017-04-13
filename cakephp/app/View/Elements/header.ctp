
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
                    <li class=""><a href="<?php echo $this->webroot; ?>users/register1">Đăng kí</a></li>
                </ul>
                <ul class="nav">
                    <li class="active" style=""><a href="<?php echo $this->webroot;?>users/login">Đăng nhập</a></li>
                </ul>       
            </div>
        </div>

        <!-- Logo -->
        <div class="span5 logo">
            <a href="#"><img src="<?php echo $this->webroot.'/img/logo.jpg'; ?>" alt="" /></a>
            <h2>Tận tâm, uy tín</h2>
        </div>
        <!-- Main Navigation -->
        <div class="span7 navigation" style="margin-top: 10px;">
            
            <div class="navbar hidden-phone">
            <ul class="nav">
            <li class="active"><a href="<?php echo $this->webroot; ?>">Trang chủ</a></li>
            <li>
                <a href="#">Giới thiệu</a>
            </li>
             <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Dịch vụ 
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
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Tin tức <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="#">Người giúp việc</a></li>
                    <li><a href="#">Người tuyển dụng</a></li>
                </ul>
             </li>
             <li><a href="#">Liên hệ</a></li>
            </ul>
            
            </div>

        </div>

        <!-- Form Search-->

        <div class="span7 navigation" style="margin-top: 10px;">     
            <div class="row">
                <form role="form" id="form-buscar">
                    <div class="form-group">
                    <div class="input-group">
                        <input id="1" class="form-control" type="text" name="search" placeholder="Search..." required/>
                        <span class="input-group-btn">
                        <button class="btn btn-success" type="submit" style="height: 43px;">
                            <i class="glyphicon glyphicon-search" aria-hidden="true"></i> Tìm kiếm
                        </button>
                        </span>
                    </div>
                    </div>
                </form>
            </div>            
        </div>
        
      </div><!-- End Header -->

      <div class="row headline"><!-- Begin Headline -->
    
        <!-- Slider Carousel -->
        <div class="span8">
            <div class="flexslider">
              <ul class="slides">
                <li><a href="#"><img src="<?php echo $this->webroot.'/img/gallery/slide1.jpg'; ?>" alt="slider" /></a></li>
                <li><a href="#"><img src="<?php echo $this->webroot.'/img/gallery/slide2.jpg'; ?>" alt="slider" /></a></li>
                <li><a href="#"><img src="<?php echo $this->webroot.'/img/gallery/slide3.jpg'; ?>" alt="slider" /></a></li>
                <li><a href="#"><img src="<?php echo $this->webroot.'/img/gallery/slide5.jpg'; ?>" alt="slider" /></a></li>
              </ul>
            </div>
        </div>
        
        <!-- Headline Text -->
        <div class="span4">
            <h3>Welcome to Wonder. <br />
            Dịch vụ giúp việc.</h3>
            <p class="lead">Toàn thời gian.</p>
            <p class="lead">Bán thời gian.</p>
            <a href="#"><i class="icon-plus-sign"></i>Xem chi tiết</a> 
        </div>
    </div><!-- End Headline -->