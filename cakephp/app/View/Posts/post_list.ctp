<style>
	.blog h4 {
		position: relative;
		left: 45px;
		line-height: 26px;
	}
	.paging span {
		border: 1px solid #fff;
		padding: 10px;
		padding-left: 5px;
	}
	.paging span a {
		text-decoration: none;
	}

</style>

<body>
    <div class="content"> 

    <div class="row"><!--Container row-->
    <div class="span1 blog">
        
    </div>
        <div class="span8 blog">
        <?php
			$paginator = $this->Paginator;
                //$posts = $this->requestAction('posts/post_list');
                foreach ($posts as $post)
                {
                    ?>
          <!-- Blog Post 1 -->
            <article class="clearfix">
			
                <div style="float: left;" class="col-xs-4">
					<img style="width: 180px; height: auto;" src="<?php echo $this->webroot.'files/user/image/'.$post['Users']['id'].'/'.$post['Users']['image']; ?>">
				</div>
				
                <div style="float: left;" class="col-xs-8">
					<h4 class="title-bg">
					<?php echo $this->Html->link($post['Post']['title'], array('controller' => 'posts', 'action' => 'view', $post['Post']['id'])); ?></h4>
					<div class="post-summary-footer">
						<ul class="post-data-3">
							<li><i class="icon-calendar"></i>Ngày đăng: <strong><?php echo($post['Post']['created'])?></strong></li>
						</ul><br>
						<ul class="post-data-3">
							<li><i class="icon-user"></i>Người đăng: <strong><?php echo($post['Users']['full_name']); ?></strong></li>
							<li><i class="icon-map-marker"></i> Địa điểm: <strong><?php echo($post['Countries']['city']); ?></strong></li>
						</ul><br>
						<ul class="post-data-3">
							<li><i class="icon-earphone"></i>Liên hệ số điện thoại: <strong><?php echo h($post['Post']['phone']); ?></strong></li>
						</ul>
					</div>
				</div>
				
            </article>
			
            <?php
            }
			echo "<div style='text-align: center;' class='paging'>";
 
			// the 'first' page button
			echo $paginator->first(" Đầu tiên ");
			 
			// 'prev' page button, 
			// we can check using the paginator hasPrev() method if there's a previous page
			// save with the 'next' page button
			if($paginator->hasPrev()){
				echo $paginator->prev(" Trước ");
			}
			 
			// the 'number' page buttons
			echo $paginator->numbers(array('modulus' => 2));
			 
			// for the 'next' button
			if($paginator->hasNext()){
			
				echo $paginator->next(" Tiếp ");
			}
			 
			// the 'last' page button
			echo $paginator->last(" Cuối cùng ");
     
			echo "</div>";
			 
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
                    <img style="height: 80px;" 
                        src="<?php echo $this->webroot.'files/user/image/'.$post['Users']['id'].'/'.$post['Users']['image']; ?>">
                    <h6><a href="#"><?php echo($post['Post']['title']); ?></a></h6>
                    <em><?php echo($post['Post']['created']); ?></em><p>
                    <em><?php echo($post['Users']['full_name']); ?></em>
                </li>
                    <?php
                    }
                    ?>

            </ul>
        </div>

    </div>
    <!-- Pagination -->
            <!-- <div class="pagination">

                <ul>
                <li class="active"><a href="#">Prev</a></li>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li>
				<?php echo $this->Html->link('Xem thêm','/nguoi-giup-viec')?></li>
                </ul>
            </div> -->
    </div> <!-- End Container -->
        
    </div>
    <!-- Scroll to Top -->  
    <div id="toTop" class="hidden-phone hidden-tablet">Back to Top</div>
    
</body>
