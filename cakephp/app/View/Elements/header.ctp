<style type="text/css" media="screen">
    .header_login {

    }
    .header_register {

    }
</style>
<?php

        echo $this->Html->meta('icon');

        echo $this->fetch('meta');
        echo $this->fetch('css');
        echo $this->fetch('script');

        //echo $this->Html->css('cake.generic');
        echo $this->Html->css('bootstrap');
        echo $this->Html->css('custom-styles');
        
        echo $this->Html->css('flexslider');
        echo $this->Html->script('bootstrap');
        echo $this->Html->script('jquery.prettyPhoto');
        echo $this->Html->script('jquery.flexslider');
        echo $this->Html->script('jquery.custom');
        
        echo $this->Html->css('bootstrap-responsive');
        
    ?>
    <!-- Color Bars (above header)-->
        
        
        <div class="container">
            <div class="col-lg-8">
                
            </div>
            <div class="col-lg-2">
                <div class="header_register">
                    <a href="#" class="">Đăng ký</a>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="header_login">
                    <a href="#" class="">Đăng nhập</a>
                </div>
            </div>
        </div>
    <div class="container">
    
      <div class="row header"><!-- Begin Header -->
      
        <!-- Logo -->
        <div class="span5 logo">
            <a href="index.htmll"><img src="<?php echo $this->webroot.'/img/logo.jpg'; ?>" alt="" /></a>
            <h2>Tận tâm, uy tín</h2>
        </div>
        
        <!-- Main Navigation -->
        <div class="span7 navigation">
            <div class="navbar hidden-phone">
            
            <ul class="nav">
            <li class="active"><a href="#">Trang chủ</a></li>
            <li>
                <a href="#">Giới thiệu</a>
            </li>
             <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Dịch vụ <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="#">Giúp việc nhà</a></li>
                    <li><a href="#">Chăm em bé</a></li>
                    <li><a href="#">Giúp việc nhà theo giờ</a></li>
                    <li><a href="#">Giữ em bé</a></li>
                    <li><a href="#">Chăm người nhà</a></li>
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
			 <li><a href="<?php echo $this->webroot.'posts/add'; ?>">Đăng bài post</a></li>
			 <li></li>
            </ul>
           
            </div>
        </div>

                <!-- Form Search-->

        <div class="col-md-6 col-md-offset-3">     
            <div class="row">
                <form role="form" id="form-buscar">
                    <div class="form-group">
                    <div class="input-group">
                        <input id="1" class="form-control" type="text" name="search" placeholder="Search..." required/>
                        <span class="input-group-btn">
                        <button class="btn btn-success" type="submit" style="height: 43px;">
                            <i class="glyphicon glyphicon-search" aria-hidden="true"></i> Search
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
            <a href="#"><i class="icon-plus-sign"></i>Read More</a> 
        </div>
    </div><!-- End Headline -->
