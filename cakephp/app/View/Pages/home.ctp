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


<div class="container">

<div id="content">
    <div class="row gallery-row"><!-- Begin Gallery Row --> 
      
        <div class="span12">
            <h5 class="title-bg">Người giúp việc nổi bật 
                <small>Là những người mà bạn mong đợi</small>
                <button class="btn btn-mini btn-inverse hidden-phone" type="button">View Portfolio</button>
            </h5>
        
        <!-- Gallery Thumbnails -->

            <div class="row clearfix">
                <ul class="gallery-post-grid holder">

                    <!-- Gallery Item 1 -->
                    <li class="span4 gallery-item" data-id="id-2" data-type="illustration">
                        <!-- <span class="gallery-hover-3col hidden-phone hidden-tablet">
                            <span class="gallery-icons">
                                <a href="img/gallery/gallery-img-1-full.jpg" class="item-zoom-link lightbox" title="Custom Illustration" data-rel="prettyPhoto"></a>
                                <a href="gallery-single.htm" class="item-details-link"></a>
                            </span>
                        </span> -->
                        <a href="gallery-single.htm"><img src="<?php echo $this->webroot.'img/gallery/helper1.jpg';  ?>" alt="Gallery"></a>
                        <span class="project-details">
                        <h5><center>A Nớt</center></h5>
                        <center>Sinh năm: 1997</center>
                        <center>Quê quán: Kon Tum<center>
                        <button type="button" class="btn btn-info">Mời</button>
                        <a href="#"><i class="icon-plus-sign"></i>Xem thêm</a>
                        </span>
                    </li>
                    <!-- Gallery Item 2 -->
                    <li class="span4 gallery-item" data-id="id-2" data-type="illustration">
                        <!-- <span class="gallery-hover-3col hidden-phone hidden-tablet">
                            <span class="gallery-icons">
                                <a href="img/gallery/gallery-img-1-full.jpg" class="item-zoom-link lightbox" title="Custom Illustration" data-rel="prettyPhoto"></a>
                                <a href="gallery-single.htm" class="item-details-link"></a>
                            </span>
                        </span> -->
                        <a href="gallery-single.htm"><img src="img/gallery/helper2.jpg" alt="Gallery"></a>
                        <span class="project-details">
                        <h5><center>A Nớt</center></h5>
                        <center>Sinh năm: 1997</center>
                        <center>Quê quán: Kon Tum<center>
                        <button type="button" class="btn btn-info">Mời</button>
                        <a href="#"><center><i class="icon-plus-sign"></i>Xem thêm</center></a>
                        </span>
                    </li>

                    <!-- Gallery Item 3 -->
                    <li class="span4 gallery-item" data-id="id-3" data-type="web">
                        <!-- <span class="gallery-hover-3col hidden-phone hidden-tablet">
                            <span class="gallery-icons">
                                <a href="img/gallery/gallery-img-1-full.jpg" class="item-zoom-link lightbox" title="Custom Illustration" data-rel="prettyPhoto"></a>
                                <a href="gallery-single.htm" class="item-details-link"></a>
                            </span>
                        </span> -->
                        <a href="gallery-single.htm"><img src="img/gallery/helper3.jpg" alt="Gallery"></a>
                        <span class="project-details">
                        <h5><center>A Nớt</center></h5>
                        <center>Sinh năm: 1997</center>
                        <center>Quê quán: Kon Tum<center>
                        <button type="button" class="btn btn-info">Mời</button>
                        <a href="#"><center><i class="icon-plus-sign"></i>Xem thêm</center></a>
                        </span>
                    </li>

                    <!-- Gallery Item 4 -->
                    <li class="span4 gallery-item" data-id="id-4" data-type="video">
                        <!-- <span class="gallery-hover-3col hidden-phone hidden-tablet">
                            <span class="gallery-icons">
                                <a href="img/gallery/gallery-img-1-full.jpg" class="item-zoom-link lightbox" title="Custom Illustration" data-rel="prettyPhoto"></a>
                                <a href="gallery-single.htm" class="item-details-link"></a>
                            </span>
                        </span> -->
                       <a href="gallery-single.htm"><img src="img/gallery/helper4.jpg" alt="Gallery"></a>
                        <span class="project-details">
                        <h5><center>A Nớt</center></h5>
                        <center>Sinh năm: 1997</center>
                        <center>Quê quán: Kon Tum<center>
                        <button type="button" class="btn btn-info">Mời</button>
                        <a href="#"><center><i class="icon-plus-sign"></i>Xem thêm</center></a>
                        </span>
                    </li>

                    <!-- Gallery Item 5 -->
                    <li class="span4 gallery-item" data-id="id-5" data-type="web illustration">
                        <!-- <span class="gallery-hover-3col hidden-phone hidden-tablet">
                            <span class="gallery-icons">
                                <a href="img/gallery/gallery-img-1-full.jpg" class="item-zoom-link lightbox" title="Custom Illustration" data-rel="prettyPhoto"></a>
                                <a href="gallery-single.htm" class="item-details-link"></a>
                            </span>
                        </span> -->
                        <a href="gallery-single.htm"><img src="img/gallery/helper5.jpg" alt="Gallery"></a>
                        <span class="project-details">
                        <h5><center>A Nớt</center></h5>
                        <center>Sinh năm: 1997</center>
                        <center>Quê quán: Kon Tum<center>
                        <button type="button" class="btn btn-info">Mời</button>
                        <a href="#"><center><i class="icon-plus-sign"></i>Xem thêm</center></a>
                        </span>
                    </li>

                    <!-- Gallery Item 6 -->
                    <li class="span4 gallery-item" data-id="id-6" data-type="illustration design">
                        <!-- <span class="gallery-hover-3col hidden-phone hidden-tablet">
                            <span class="gallery-icons">
                                <a href="img/gallery/gallery-img-1-full.jpg" class="item-zoom-link lightbox" title="Custom Illustration" data-rel="prettyPhoto"></a>
                                <a href="gallery-single.htm" class="item-details-link"></a>
                            </span>
                        </span> -->
                        <a href="gallery-single.htm"><img src="img/gallery/helper6.jpg" alt="Gallery"></a>
                        <span class="project-details">
                        <h5><center>A Nớt</center></h5>
                        <center>Sinh năm: 1997</center>
                        <center>Quê quán: Kon Tum<center>
                        <button type="button" class="btn btn-info">Mời</button>
                        <a href="#"><center><i class="icon-plus-sign"></i>Xem thêm</center></a>
                        </span>
                    </li>

                    <!-- Gallery Item 7 -->
                    <li class="span4 gallery-item" data-id="id-7" data-type="design">
                        <!-- <span class="gallery-hover-3col hidden-phone hidden-tablet">
                            <span class="gallery-icons">
                                <a href="img/gallery/gallery-img-1-full.jpg" class="item-zoom-link lightbox" title="Custom Illustration" data-rel="prettyPhoto"></a>
                                <a href="gallery-single.htm" class="item-details-link"></a>
                            </span>
                        </span> -->
                        <a href="gallery-single.htm"><img src="img/gallery/helper7.jpg" alt="Gallery"></a>
                        <span class="project-details">
                        <h5><center>A Nớt</center></h5>
                        <center>Sinh năm: 1997</center>
                        <center>Quê quán: Kon Tum<center>
                        <button type="button" class="btn btn-info">Mời</button>
                        <a href="#"><center><i class="icon-plus-sign"></i>Xem thêm</center></a>
                        </span>
                    </li>

                    <!-- Gallery Item 8 -->
                    <li class="span4 gallery-item" data-id="id-8" data-type="web video">
                        <!-- <span class="gallery-hover-3col hidden-phone hidden-tablet">
                            <span class="gallery-icons">
                                <a href="img/gallery/gallery-img-1-full.jpg" class="item-zoom-link lightbox" title="Custom Illustration" data-rel="prettyPhoto"></a>
                                <a href="gallery-single.htm" class="item-details-link"></a>
                            </span>
                        </span> -->
                        <a href="gallery-single.htm"><img src="img/gallery/helper8.jpg" alt="Gallery"></a>
                        <span class="project-details">
                        <h5><center>A Nớt</center></h5>
                        <center>Sinh năm: 1997</center>
                        <center>Quê quán: Kon Tum<center>
                        <button type="button" class="btn btn-info">Mời</button>
                        <a href="#"><center><i class="icon-plus-sign"></i>Xem thêm</center></a>
                        </span>
                    </li>

                    <!-- Gallery Item 9 -->
                    <li class="span4 gallery-item" data-id="id-9" data-type="design">
                        <!-- <span class="gallery-hover-3col hidden-phone hidden-tablet">
                            <span class="gallery-icons">
                                <a href="img/gallery/gallery-img-1-full.jpg" class="item-zoom-link lightbox" title="Custom Illustration" data-rel="prettyPhoto"></a>
                                <a href="gallery-single.htm" class="item-details-link"></a> 
                            </span>
                        </span> -->
                        <a href="gallery-single.htm"><img src="img/gallery/helper9.jpg" alt="Gallery"></a>
                        <span class="project-details">
                        <h5><center>A Nớt</center></h5>
                        <center>Sinh năm: 1997</center>
                        <center>Quê quán: Kon Tum<center>
                        <button type="button" class="btn btn-info">Mời</button>
                        <a href="#"><center><i class="icon-plus-sign"></i>Xem thêm</center></a>
                        </span>
                    </li>
                </ul>
            </div>
            </div>
 
    </div><!-- End Gallery Row -->
    
    
    <div class="row"><!-- Begin Bottom Section -->
    
        <!-- Blog Preview -->
        <div class="span6">

            <h5 class="title-bg">Về Công Việc
                <small>Toàn thời gian</small>
                <button id="btn-blog-next" class="btn btn-inverse btn-mini" type="button">&raquo;</button>
                <button id="btn-blog-prev" class="btn btn-inverse btn-mini" type="button">&laquo;</button>
            </h5>

        <div id="blogCarousel" class="carousel slide ">
        <?php 
            $posts = $this->requestAction('posts/');
            foreach ($posts as $post)

                    {

         ?>
            <!-- Carousel items -->
            <div class="carousel-inner">

                 <!-- Blog Item 1 -->
                <div class="active item">
                    <a href="blog-single.html"><img src="img/gallery/blog1.jpg" alt="" class="align-left blog-thumb-preview" /></a>
                    <div class="post-info clearfix">
                        <h4><a href="blog-single.html"><?php echo $this->Html->link($post['Post']['title'], array('controller' => 'posts', 'action' => 'view', $post['Post']['id'])); ?></a></h4>
                        <ul class="blog-details-preview">
                            <li><i class="icon-calendar"></i><strong>Posted on:</strong> <?php echo h($post['Post']['start_date']); ?>
                                        &nbsp;<li>
                            <li><i class="icon-calendar"></i><strong>Hết hạn:</strong> <?php echo h($post['Post']['end_date']); ?>
                                        &nbsp;<li>
                            <li><i class="icon-user"></i><strong>Posted by:</strong> <a href="#" title="Link"><?php echo h($post['Users']['full_name']); ?></a><li>
                            <!-- <li><i class="icon-comment"></i><strong>Comments:</strong> <a href="#" title="Link">12</a><li>
                            <li><i class="icon-tags"></i> <a href="#">photoshop</a>, <a href="#">tutorials</a>, <a href="#">illustration</a></li> -->
                        </ul>
                    </div>
                    <p class="blog-summary">Hiển thị thông tin của bài Post. <a href="#">Read more</a><p>
                </div>
            </div>

        <?php 
        } ?>
            </div>  
        </div>

        <!-- Blog Preview -->
        <div class="span6">

            <h5 class="title-bg">Về Công Việc
                <small>Bán thời thời gian</small>
                <button id="btn-blog-next" class="btn btn-inverse btn-mini" type="button">&raquo;</button>
                <button id="btn-blog-prev" class="btn btn-inverse btn-mini" type="button">&laquo;</button>
            </h5>

        <div id="blogCarousel" class="carousel slide ">

            <?php 
            $posts = $this->requestAction('posts/post_part_time');
            foreach ($posts as $post)

                    {

         ?>
            <!-- Carousel items -->
            <div class="carousel-inner">

                 <!-- Blog Item 1 -->
                <div class="active item">
                    <a href="blog-single.html"><img src="img/gallery/blog1.jpg" alt="" class="align-left blog-thumb-preview" /></a>
                    <div class="post-info clearfix">
                        <h4><a href="blog-single.html"><?php echo $this->Html->link($post['Post']['title'], array('controller' => 'posts', 'action' => 'view', $post['Post']['id'])); ?></a></h4>
                        <ul class="blog-details-preview">
                            <li><i class="icon-calendar"></i><strong>Posted on:</strong> <?php echo h($post['Post']['end_date']); ?>
                                        &nbsp;<li>
                            <li><i class="icon-user"></i><strong>Posted by:</strong> <a href="#" title="Link"><?php echo h($post['Users']['full_name']); ?></a><li>
                            <!-- <li><i class="icon-comment"></i><strong>Comments:</strong> <a href="#" title="Link">12</a><li>
                            <li><i class="icon-tags"></i> <a href="#">photoshop</a>, <a href="#">tutorials</a>, <a href="#">illustration</a></li> -->
                        </ul>
                    </div>
                    <p class="blog-summary">Hiển thị thông tin của bài Post. <a href="#">Read more</a><p>
                </div>
            </div>

        <?php } ?>
            </div>  
        </div>
    </div><!-- End Bottom Section -->
    </div>    
</div>

    <div class="footer-container"><!-- Begin Footer -->

        <div class="container">
            <div class="row footer-row">
                <div class="span4 footer-col">
                    <h5>Về chúng tôi</h5>
                   <img src="<?php echo $this->webroot.'/img/logo.jpg'; ?>" alt="wonder" /><br /><br />
                    <ul class="social-icons">
                        <li><a href="#" class="social-icon facebook"></a></li>
                        <li><a href="#" class="social-icon twitter"></a></li>
                        <li><a href="#" class="social-icon dribble"></a></li>
                        <li><a href="#" class="social-icon rss"></a></li>
                        <li><a href="#" class="social-icon forrst"></a></li>
                    </ul>
                    </div>
                <div class="span4 footer-col">
                    <h5>Hiển thị bài Post nổi bật</h5>
                     <ul class="post-list">
                        <li><a href="#">Thông tin bài Post nổi bật</a></li>
                        <li><a href="#">Thông tin bài Post nổi bật</a></li>
                        <li><a href="#">Thông tin bài Post nổi bật</a></li>
                        <li><a href="#">Thông tin bài Post nổi bật</a></li>
                        <li><a href="#">Thông tin bài Post nổi bật</a></li>
                    </ul>
                </div>
                <div class="span4 footer-col">
                    <h5>Hình ảnh liên quan</h5>
                    <ul class="img-feed">
                        <li><a href="#"><img src="<?php echo $this->webroot.'/img/gallery/flickr-img-1.jpg'; ?>" alt="Image Feed"></a></li>
                        <li><a href="#"><img src="<?php echo $this->webroot.'/img/gallery/flickr-img-1.jpg'; ?>" alt="Image Feed"></a></li>
                        <li><a href="#"><img src="<?php echo $this->webroot.'/img/gallery/flickr-img-1.jpg'; ?>" alt="Image Feed"></a></li>
                        <li><a href="#"><img src="<?php echo $this->webroot.'/img/gallery/flickr-img-1.jpg'; ?>" alt="Image Feed"></a></li>
                        <li><a href="#"><img src="<?php echo $this->webroot.'/img/gallery/flickr-img-1.jpg'; ?>" alt="Image Feed"></a></li>
                        <li><a href="#"><img src="<?php echo $this->webroot.'/img/gallery/flickr-img-1.jpg'; ?>" alt="Image Feed"></a></li>
                        <li><a href="#"><img src="<?php echo $this->webroot.'/img/gallery/flickr-img-1.jpg'; ?>" alt="Image Feed"></a></li>
                        <li><a href="#"><img src="<?php echo $this->webroot.'/img/gallery/flickr-img-1.jpg'; ?>" alt="Image Feed"></a></li>
                        <li><a href="#"><img src="<?php echo $this->webroot.'/img/gallery/flickr-img-1.jpg'; ?>" alt="Image Feed"></a></li>
                        <li><a href="#"><img src="<?php echo $this->webroot.'/img/gallery/flickr-img-1.jpg'; ?>" alt="Image Feed"></a></li>
                    </ul>
                </div>
            </div>
       
            <div class="row"><!-- Begin Sub Footer -->
                <div class="span12 footer-col footer-sub">
                    <div class="row no-margin">
                        <div class="span6"><span class="left">Copyright 2017 Wonder Theme. All rights reserved.</span></div>
                        <div class="span6">
                            <span class="right">
                            <a href="#">Trang chủ</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="#">Giới thiệu</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="#">Dịch vụ</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="#">Tin tức</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="#">Liên hệ</a>
                            </span>
                        </div>
                    </div>
                </div>
            </div><!-- End Sub Footer -->
        </div>
    </div><!-- End Footer --> 
    
    <!-- Scroll to Top -->  
    <div id="toTop" class="hidden-phone hidden-tablet">Back to Top</div>
    </div>
