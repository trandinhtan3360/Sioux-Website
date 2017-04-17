<style type="text/css" media="screen">
	td {
		font-size: 16px;
		width: 150px;
		padding: 15px;
		border: 1px solid black;
	}
	h2 {
    background: #2da5be;
    color: #fff;
    font-size: 20px;
    color: #fff;
	}
	table {

	}
	p {
		font-size: 16px;
	}
	img {
		width: 100%;
		height: 100%;
	}
</style>




<div class="container">
	
<!-- <h1><?php echo __('Post'); ?></h1> -->
<div class="row">
<div class="posts view">
	<div class="row"><!-- Begin Bottom Section -->
    
        <!-- Blog Preview -->
        <div class="span6">

            <!-- <h5 class="title-bg">Về Công Việc
                <small>Toàn thời gian</small>
                <button id="btn-blog-next" class="btn btn-inverse btn-mini" type="button">&raquo;</button>
                <button id="btn-blog-prev" class="btn btn-inverse btn-mini" type="button">&laquo;</button>
            </h5> -->

        <div id="blogCarousel" class="carousel slide ">

            <!-- Carousel items -->
            <div class="carousel-inner">

            	<table style="padding: 15px;">
			<h2>THÔNG TIN CHUNG VỀ BÀI ĐĂNG</h2>
				<tbody>
					<tr>
						<td>Đăng vào ngày</td>
						<td><?php echo h($post['Post']['start_date']); ?>
						&nbsp;</td>
					</tr>
					<tr>
						<td>Danh mục</td>
			            <td><?php echo $this->Html->link($post['Categories']['name'], array('controller' => 'categories', 'action' => 'view', $post['Categories']['id'])); ?>
						&nbsp;</td>
		            </tr>
		            <tr>
			            <td>Lương</td>
			            <td><?php echo $this->Html->link($post['Salaries']['salaries'], array('controller' => 'salaries', 'action' => 'view', $post['Salaries']['id'])); ?>
						&nbsp;</td>

					</tr>
					<tr>
						<td>Nơi làm việc</td>
						<td><?php echo $this->Html->link($post['Countries']['city'], array('controller' => 'countries', 'action' => 'view', $post['Countries']['id'])); ?>
						&nbsp;</td>
					</tr>
				</tbody>
			</table>
                 <!-- Blog Item 1 -->
                <div class="active item">
                    <a href="blog-single.html"><img src="<?php echo $this->webroot.'img/gallery/blog1.jpg'; ?>" alt="" class="align-left blog-thumb-preview" /></a>
                    <!-- <div class="post-info clearfix">
                        <h4><a href="blog-single.html">Hiển thị bài Post</a></h4>
                        <ul class="blog-details-preview">
                            <li><i class="icon-calendar"></i><strong>Posted on:</strong> Sept 4, 2015<li>
                            <li><i class="icon-user"></i><strong>Posted by:</strong> <a href="#" title="Link">Admin</a><li>
                            <li><i class="icon-comment"></i><strong>Comments:</strong> <a href="#" title="Link">12</a><li>
                            <li><i class="icon-tags"></i> <a href="#">photoshop</a>, <a href="#">tutorials</a>, <a href="#">illustration</a>
                        </ul>
                    </div> -->
                    <p class="blog-summary">Hiển thị thông tin của bài Post. <a href="#">Read more</a><p>
                </div>
            </div>
            </div>  
        </div>
        <!-- Blog Preview -->
        <div class="span6">

            <!-- <h5 class="title-bg">Về Công Việc
                <small>Bán thời thời gian</small>
                <button id="btn-blog-next" class="btn btn-inverse btn-mini" type="button">&raquo;</button>
                <button id="btn-blog-prev" class="btn btn-inverse btn-mini" type="button">&laquo;</button>
            </h5> -->

        <div id="blogCarousel" class="carousel slide ">

            <!-- Carousel items -->
            <div class="carousel-inner">
            <h2><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                Mô tả về bài đăng</h2>
			<h3><?php echo h($post['Post']['title']); ?></h3>
            	<?php echo ($post['Post']['content']); ?>
                <p>Thông Tin Tuyển Dụng<br>
					Vị trí :<br>
					- Nhân Viên Tư Vấn Tín Dụng - Chăm Sóc Khách Hàng<br>
					- Nhân viên tuyển dụng nhân sự (hành chánh nhân sự)<br>
					- Nhân viên kinh doanh<br>
					- Nhân viên liên kết - phát triển thị trường<br>
					- Cộng Tác Viên<br>
					Số lượng :&nbsp;&nbsp; 10<br>
					Công Ty Tài Chính Prudential Việt Nam hoạt động trong lĩnh vực Cho vay tín chấp với 100% vốn nước ngoài, Với 4 phòng giao dịch ở TP.HCM và Nhiều chi nhánh tại các tỉnh thành trên cả nước<br>
					Kinh Nghiệm : Không yêu cầu ( Ưu tiên ứng viên có kinh nghiệm 》 1 năm )<br>
					Trình độ : Tối thiểu 12/12<br>
					Thời hạn nộp hồ sơ 31/05/2017 </p>
					<p>Quyền lợi :<br>
					- Được học tập , Thử thách và trao dồi kinh nghiệm trong môi trường làm việc chuyên nghiệp của ngành Tài Chính Ngân Hàng<br>
					- Được trải nghiệm công việc thực tế tại các bộ phận kinh doanh và cái nhìn toàn cảnh về công việc bán hàng<br>
					- Đươc đào tạo chuyên môn, nghiệp vụ.<br>
					- Làm việc trong môi trường năng động, chuyên nghiệp.<br>
					- Cơ hội là nhân viên chính thức trong ngành<br>
					- Cơ hội thăng tiến cao.<br>
					- Đươc tham gia đầy đủ các chế độ theo quy định của pháp luật. </p>
					<p>Thu nhập : ( Nhân viên hợp đồng)<br>
					- 5.000.000 vnd + Thưởng theo doanh số công việc.</p>
					<p>Thời gian làm việc :<br>
					- 7h/ngày&nbsp;<br>
					- Chiều T7, CN nghĩ</p>
					<p>Yêu cầu:<br>
					- Chăm chỉ và chịu khó với công việc<br>
					- Có thái độ chuyên nghiệp và sẳn sàng học hỏi<br>
					- Có kỹ năng giao tiếp<br>
					- CV ghi rõ ngày bắt đầu và thời gian có thể làm việc </p>
					<p>Ứng Viên có nhu cầu xin vui lòng gửi CV đến:<br>
					Email: prufco.ts.seal@prudentialfinance.com.vn<br>
					Email2: phamhoangtien0525@gmail.com<br>
					Hoặc liên hệ SDT : 0938025925 Gặp Mr. Tiến<br>
					( Viber + Zalo : 0938025925)</p>
					<p>Địa chỉ văn phòng: Tầng 14, Tòa nhà Pico Palaza, Số 20 Cộng Hòa, Phường 12, Quận Tân Bình, TP Hồ Chí Minh </p>
            
                 <!-- Blog Item 1 -->
                <!-- <div class="active item">
                    <a href="blog-single.html"><img src="img/gallery/blog2.jpg" alt="" class="align-left blog-thumb-preview" /></a>
                    <div class="post-info clearfix">
                        <h4><a href="blog-single.html">Hiển thị bài Posts</a></h4>
                        <ul class="blog-details-preview">
                            <li><i class="icon-calendar"></i><strong>Posted on:</strong> Sept 4, 2015<li>
                            <li><i class="icon-user"></i><strong>Posted by:</strong> <a href="#" title="Link">Admin</a><li>
                            <li><i class="icon-comment"></i><strong>Comments:</strong> <a href="#" title="Link">12</a><li>
                            <li><i class="icon-tags"></i> <a href="#">photoshop</a>, <a href="#">tutorials</a>, <a href="#">illustration</a>
                        </ul>
                    </div>
                    <p class="blog-summary">Hiển thị thông tin của bài Post. <a href="#">Read more</a><p>
                </div> -->
            </div>
            </div>  
        </div>
        
    </div><!-- End Bottom Section -->

</div>

	<!-- <dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($post['Post']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($post['Post']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Content'); ?></dt>
		<dd>
			<?php echo h($post['Post']['content']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Salaries'); ?></dt>
		<dd>
			<?php echo $this->Html->link($post['Salaries']['id'], array('controller' => 'salaries', 'action' => 'view', $post['Salaries']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Time Parts'); ?></dt>
		<dd>
			<?php echo $this->Html->link($post['TimeParts']['id'], array('controller' => 'time_parts', 'action' => 'view', $post['TimeParts']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Countries'); ?></dt>
		<dd>
			<?php echo $this->Html->link($post['Countries']['id'], array('controller' => 'countries', 'action' => 'view', $post['Countries']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Users'); ?></dt>
		<dd>
			<?php echo $this->Html->link($post['Users']['id'], array('controller' => 'users', 'action' => 'view', $post['Users']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Categories'); ?></dt>
		<dd>
			<?php echo $this->Html->link($post['Categories']['name'], array('controller' => 'categories', 'action' => 'view', $post['Categories']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Start Date'); ?></dt>
		<dd>
			<?php echo h($post['Post']['start_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('End Date'); ?></dt>
		<dd>
			<?php echo h($post['Post']['end_date']); ?>
			&nbsp;
		</dd>
	</dl> -->
</div>
<!-- <div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Post'), array('action' => 'edit', $post['Post']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Post'), array('action' => 'delete', $post['Post']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $post['Post']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Posts'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Post'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Salaries'), array('controller' => 'salaries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Salaries'), array('controller' => 'salaries', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Time Parts'), array('controller' => 'time_parts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Time Parts'), array('controller' => 'time_parts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Countries'), array('controller' => 'countries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Countries'), array('controller' => 'countries', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Users'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Categories'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
	</ul>
</div> -->

</div>