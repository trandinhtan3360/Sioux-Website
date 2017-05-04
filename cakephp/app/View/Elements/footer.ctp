    <div class="footer-container"><!-- Begin Footer -->

        <div class="container">
            <div class="row footer-row">
                <div class="span4 footer-col">
                    <h5>Về chúng tôi</h5>
                   <img src="<?php echo $this->webroot.'img/logo.gif' ;?>" alt="wonder" /><br /><br />
				   <h6> 80B Lê Duẩn, Hải Châu, Đà Nẵng</h6>
				   <h6>Số điện thoại: 090 736 739</h6>
                    <ul class="social-icons">
                        <li><a href="#" class="social-icon facebook"></a></li>
                        <li><a href="#" class="social-icon twitter"></a></li>
                        <li><a href="#" class="social-icon dribble"></a></li>
                        <li><a href="#" class="social-icon rss"></a></li>
                        <li><a href="#" class="social-icon forrst"></a></li>
                    </ul>
                    </div>
                <div class="span4 footer-col">
                    <h5>Hiển thị bài đăng nổi bật</h5>
                     <ul class="post-list">

                    <?php
                    $posts = $this->requestAction('posts/index1');
                    foreach ($posts as $post)
                        {
                     ?>
                    <li><a href="<?php echo $this->webroot.'posts/view/'.$post['Post']['id'];?>">
                    <?php echo $post['Post']['title'];?></a></li>
                    <?php
                      }
                ?>
                
                    </ul>
                </div>
                <div class="span4 footer-col">
                    <h5>Hình ảnh liên quan</h5>
                    <ul class="img-feed">
                        <li><a href="#"><img src="<?php echo $this->webroot.'img/gallery/1.jpg'; ?>" alt="" /></a></li>
                        <li><a href="#"><img src="<?php echo $this->webroot.'img/gallery/2.jpg';?>" alt="" /></a></li>
                        <li><a href="#"><img src="<?php echo $this->webroot.'img/gallery/3.jpg'; ?>" alt="" /></a></li>
                        <li><a href="#"><img src="<?php echo $this->webroot.'img/gallery/4.jpg';?>" alt="" /></a></li>
                        <li><a href="#"><img src="<?php echo $this->webroot.'img/gallery/5.jpg'; ?>" alt="" /></a></li>
                        <li><a href="#"><img src="<?php echo $this->webroot.'img/gallery/6.jpg';?>" alt="" /></a></li>
                        <li><a href="#"><img src="<?php echo $this->webroot.'img/gallery/7.jpg'; ?>" alt="" /></a></li>
                        <li><a href="#"><img src="<?php echo $this->webroot.'img/gallery/8.jpg';?>" alt="" /></a></li>
                        <li><a href="#"><img src="<?php echo $this->webroot.'img/gallery/9.jpg'; ?>" alt="" /></a></li>
                        <li><a href="#"><img src="<?php echo $this->webroot.'img/gallery/10.jpg';?>" alt="" /></a></li>
                    </ul>
                </div>
            </div>
       
            <div class="row"><!-- Begin Sub Footer -->
                <div class="span12 footer-col footer-sub">
                    <div class="row no-margin">
                        <div class="span6"><span class="left">Wonder 2017</span></div>
                        <div class="span6">
                            <span class="right">
                            <a href="<?php echo $this->webroot;?>">Trang chủ</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="#">Giới thiệu</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="#">Dịch vụ</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="#">Tin tức</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="#">Liên hệ</a>
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
