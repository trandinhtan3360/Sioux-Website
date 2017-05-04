<body>
    <div class="content"> 

    <div class="row"><!--Container row-->
    <div class="span1 blog">
    </div>
        <div class="span8 blog">
        <?php
        if(0< count($posts)){
           $posts = $this->requestAction('posts/');
            foreach ($posts as $post)
            {
            ?>
          <!-- Blog Post 1 -->
            <article class="clearfix">
                <img style="width: 180px; height: 200px;" src="<?php echo $this->webroot.'files/user/image/'.$post['Users']['id'].'/'.$post['Users']['image'];?>" alt="Post Thumb" class="align-left">
                <h4 class="title-bg"><a href="<?php echo $this->webroot.'posts/view/'.$post['Post']['id']; ?>"><?php echo ($post['Post']['title']);?></a></h4>
                    <p><?php echo (substr ( ($post['Post']['content']) , 0,100))?></p>

                     <span> <a href="<?php echo $this->webroot.'posts/post_list/'.$post['Post']['id']; ?>">
                      <i class="icon-plus-sign"></i>Xem thêm</a>
                        </span>
                    <div class="post-summary-footer">
                        <ul class="post-data-3">
                            <li><i class="icon-calendar"></i><?php echo ($post['Post']['created'])?></li>
                            <li><i class="icon-user"></i> <a href="#"><?php echo ($post['Users']['full_name']); ?></a></li>
                            <li><i class="icon-map-marker"></i> <a href="#"><?php echo ($post['Countries']['city']); ?></a></li>
                            <li><i class="icon-gift"></i> <?php echo h($post['Salaries']['salaries']); ?></li>
                        </ul>
                    </div>
            </article>
            <?php
            }
        }
        ?>
        </div>

        <div class="span3 sidebar">

            <!--Search-->
            <section>
                <div class="input-append">
                    <form action="#">
                        <input id="1" size="16" type="text" placeholder="Nhập từ khóa tìm kiếm"><button class="btn btn-success" type="button"><i class="icon-search"></i></button>
                    </form>
                </div>
            </section>

            <!--Categories-->
            <h5 class="title-bg">Tin tức</h5>
            <?php  

                $categories = $this->requestAction('categories/');
                    foreach ($categories as $category)
                    {
                ?>
             
            <ul class="post-category-list">
                <li><i class="icon-plus-sign"></i><a href="<?php echo $this->webroot.'categories/view/'.$category['Category']['id']; ?>">
                    <?php echo $category['Category']['name'];?></a></li>
            </ul>
            <?php 

                }
                     ?>
            <!--Popular Posts-->
            <h5 class="title-bg">Một số bài đăng</h5>
            <ul class="popular-posts">
            <?php
                $posts = $this->requestAction('posts/post_sidebar');
                foreach ($posts as $post)
                {
                    ?>
                <li>
                    <img style="height: 80px;" src="<?php echo $this->webroot.'files/user/image/'.$post['Users']['id'].'/'.$post['Users']['image']; ?>">
                    <h6><a href="#"><?php echo ($post['Post']['title']); ?></a></h6>
                    <em><?php echo ($post['Post']['created']); ?></em><p>
                    <em><?php echo ($post['Users']['full_name']); ?></em>
                </li>
                    <?php
                    }
                    ?>

            </ul>
        </div>

    </div>
    
    </div> <!-- End Container -->
        
    </div>
    <!-- Scroll to Top -->  
    <div id="toTop" class="hidden-phone hidden-tablet">Back to Top</div>
    
</body>
