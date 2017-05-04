
<div class="container">

<div id="content">
	
		<!-- Form search -->
    <div class="row">
    <div class="span4 sidebar">
    </div>

    <div class="span4 sidebar">

            <section>
                <div class="input-append">
                    <form action="<?php echo Router::url('/Posts/search', true ); ?> ">
                        <input id="appendedInputButton" size="16" type="text" placeholder="Nhập từ khóa tìm kiếm">
                        <button class="btn btn-success" type="submit"><i class="icon-search"></i></button>
                    </form>
                </div>
            </section>
    </div>

	</div><!-- End Search form -->     
     

      <div class="row headline"><!-- Begin Headline -->
    
        <!-- Slider Carousel -->
        <div class="span8">
            <div class="flexslider">
              <ul class="slides">
                <li><a href="#"><img src="<?php echo $this->webroot.'img/gallery/slide1.jpg'; ?>" alt="slider" /></a></li>
                <li><a href="#"><img src="<?php echo $this->webroot.'img/gallery/slide2.jpg'; ?>" alt="slider" /></a></li>
                <li><a href="#"><img src="<?php echo $this->webroot.'img/gallery/slide3.jpg'; ?>" alt="slider" /></a></li>
                <li><a href="#"><img src="<?php echo $this->webroot.'img/gallery/slide5.jpg'; ?>" alt="slider" /></a></li>
              </ul>
            </div>
        </div>
        
        <!-- Headline Text -->
        <div class="span4">
            <h3>Chào mừng bạn đến với <br />
            dịch vụ giúp việc Wonder</h3>

            <p class="lead">Toàn thời gian</p>
            <p class="lead">Bán thời gian</p>
        </div>
    </div><!-- End Headline -->
    </div>
	
    <div class="row gallery-row"><!-- Begin Gallery Row --> 
      
        <div class="span12">
            <h5 class="title-bg">Người giúp việc nổi bật 
                <small>Là những người mà bạn mong đợi</small>
                
            </h5>
        
        <!-- Gallery Thumbnails -->

            <div class="row clearfix">
			
                <ul class="gallery-post-grid holder">
				
				<?php
					$users = $this->requestAction('users/detail_employees');
					foreach ($users as $user)
					{
				?>
                    <!-- Gallery Item 1 -->
                    <li class="span3 gallery-item" data-id="id-2" data-type="illustration">

                        <center><img src="<?php echo $this->webroot.'files/user/image/'.$user['User']['id'].'/'.$user['User']['image'];?>"></center>
                        <span class="project-details">
                        <h5><center> <strong><?php echo h($user['User']['full_name']); ?></strong></center></h5>
						<?php $dob = explode('/', $user['User']['dob']); ?>
						<center>Tuổi: <?php echo date('Y') - date('Y', strtotime($dob[2].'-'.$dob[1].'-'. $dob[0])); ?></center>
                        <center>Quê quán: <?php echo ($user['User']['address']); ?><center>
                        <a href="<?php echo $this->webroot.'users/view/'.$user['User']['id']; ?>"><i class="icon-plus-sign"></i>Xem thêm</a>
                        </span>
                    </li>
					<?php
						}
					?>
                </ul>
            </div>
        </div>
 
    </div><!-- End Gallery Row -->
    
    
    <div class="row"><!-- Begin Bottom Section -->
    
        <!-- Blog Preview -->
        <div class="span6">

            <h5 class="title-bg">Về Công Việc
                <small>Toàn thời gian</small>
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
                    <a href="#"><img src="img/gallery/blog1.jpg" alt="" class="align-left blog-thumb-preview" /></a>
                    <div class="post-info clearfix">
                        <h4><?php echo $this->Html->link($post['Post']['title'], array('controller' => 'posts', 'action' => 'view', $post['Post']['id'])); ?></h4>
                        <ul class="blog-details-preview">
                            <li><i class="icon-calendar"></i><strong>Ngày đăng:</strong> <?php echo h($post['Post']['created']); ?>
                                        &nbsp;<li>
							<li><i class="icon-calendar"></i><strong>Hết hạn:</strong> <?php echo h($post['Post']['end_date']); ?>
                                        &nbsp;<li>
                            <li><i class="icon-user"></i><strong>Đăng bởi:</strong> <a href="#" title="Link"><?php echo h($post['Users']['full_name']); ?></a><li>
                            
                            <!-- <li><i class="icon-tags"></i> <a href="#">photoshop</a>, <a href="#">tutorials</a>, <a href="#">illustration</a> -->
                        </ul>
                    </div>
                    <p class="blog-summary">Hiển thị thông tin của bài viết. <a href="<?php echo $this->webroot.'posts/view/'.$post['Post']['id']; ?>">Xem chi tiết</a><p>
                </div>
            </div>
			
			<?php } ?>
            </div>  
        </div>
		
        <!-- Blog Preview -->
        <div class="span6">

            <h5 class="title-bg">Về Công Việc
                <small>Bán thời thời gian</small>
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
                    <a href="#"><img src="img/gallery/blog1.jpg" alt="" class="align-left blog-thumb-preview" /></a>
                    <div class="post-info clearfix">
                        <h4><?php echo $this->Html->link($post['Post']['title'], array('controller' => 'posts', 'action' => 'view', $post['Post']['id'])); ?></h4>
                        <ul class="blog-details-preview">
                            <li><i class="icon-calendar"></i><strong>Ngày đăng:</strong> <?php echo h($post['Post']['created']); ?>
                                        &nbsp;<li>
							<li><i class="icon-calendar"></i><strong>Hết hạn:</strong> <?php echo h($post['Post']['end_date']); ?>
                                        &nbsp;<li>
                            <li><i class="icon-user"></i><strong>Đăng bởi:</strong> <a href="#" title="Link"><?php echo h($post['Users']['full_name']); ?></a><li>
                            
                            <!-- <li><i class="icon-tags"></i> <a href="#">photoshop</a>, <a href="#">tutorials</a>, <a href="#">illustration</a> -->
                        </ul>
                    </div>
                    <p class="blog-summary">Hiển thị thông tin của bài viết. <a href="<?php echo $this->webroot.'posts/view/'.$post['Post']['id']; ?>">Xem chi tiết</a><p>
                </div>
            </div>
			
			<?php } ?>
            </div>  
        </div>
        
    </div><!-- End Bottom Section -->
    </div>    
</div>
