<?php echo $this->Html->css('bootstrap.min.css'); ?>
<?php echo $this->Html->css('css/jquery.lightbox-0.5.css'); ?>
<?php echo $this->Html->css('css/custom-styles.css'); ?>
<?php echo $this->Html->css('bootstrap.min.css'); ?>
<style type="text/css" media="screen">
    
    .featured-job {
        background: #fff;
    }
    .featured-job-content:hover{
        color: #fff;
        background: #2da5be;
    }
    .featured-job-content a:hover{
        color: #fff;
        background: #2da5be;
        text-decoration: none;
    }
    .featured-job-content ul{
        list-style: none;
        padding: 0px;
        margin: 0px;
    }
    .featured-job-content ul li {
        display: inline;
    }
    .label-success {
        position: relative;
        left: 790px;
        bottom: 95px;
        padding: 6px;
    }
    @media (min-width: 320px ){
        .label-success {
            position: relative;
            left: 195px;
            bottom: 110px;
            padding: 6px;
        }
        #form-buscar >.form-group >.input-group > .form-control {
            height: 33px;
            margin-top: 10px;
            width: 184px;
        }
    }
    
    @media (min-width: 375px ){
        .label-success {
            position: relative;
            left: 241px;
            bottom: 110px;
            padding: 6px;
        }
        #form-buscar >.form-group >.input-group > .form-control {
            height: 33px;
            margin-top: 10px;
            width: 234px;
        }
    }
    @media (min-width: 425px ){
        .label-success {
            position: relative;
            left: 300px;
            bottom: 100;
            padding: 6px;
        }
        #form-buscar >.form-group >.input-group > .form-control {
            height: 33px;
            margin-top: 10px;
            width: 284px;
        }
    }
    @media (min-width: 768px ){
        .label-success {
            position: relative;
            left: 413px;
            bottom: 133px;
            padding: 6px;
        }
        #form-buscar >.form-group >.input-group > .form-control {
            height: 33px;
            margin-top: 10px;
            width: 621px;
        }
    }
    
    
    @media (min-width: 1024px){
        .label-success {
            position: relative;
            left: 780px;
            bottom: 134px;
            padding: 6px;
        }
        #form-buscar >.form-group >.input-group > .form-control {
            height: 33px;
            margin-top: 10px;
            width: 735px;
        }
    }
    @media (min-width: 1440px){
        .label-success {
            position: relative;
            left: 792px;
            bottom: 134px;
            padding: 6px;
        }
        #form-buscar >.form-group >.input-group > .form-control {
            height: 33px;
            margin-top: 10px;
            width: 566px;
        }
    }
    strong {
        color: ;
    }
    .row {
        margin-bottom: 0px;
    }
    
    @media (min-width: 1200px){
        .span4 {
            width: 350px;
        }
        .span7 .navigation{
            width: 0px;
        }
        .span12 {
            1153px;
        }
    }
    
    .footer-sub {
        position: relative;
        left: -29px;
    }

</style>
<div class="container">
<div class="row">

    <!-- Form Search-->
    <div class="span4 sidebar">
    </div>
    <div class="span4 sidebar">
    </div>
    <div class="span4 sidebar">

        <!--Search-->
            <section>
                <div class="input-append">
                    <form role="form" id="form-buscar" action="<?php echo Router::url('/Posts/search', true ); ?> " />
							<div class="input-group">
								<input id="1" class="form-control" type="text" name="q" placeholder="Nhập từ khóa tìm kiếm" style="height: 34px;" required/>
								 <button class="btn btn-success" type="button"><i class="icon-search"></i></button>
				   
							</div>
					</form>
                </div>
            </section>
    </div>

</div><!-- End Search form -->
    <div class="row">

        <div class="col-md-3 col-sm-4">
                    <div class="sidebar">
                        <div class="widget widget-access">
                            <div class="widget-body">
                                <div class="list-group">
                                    <h3><span class="wc-editable" data-pk="ws_featured_employers" data-type="text"><a class="list-group-item active" href="" title="">Danh sách công việc</a></span></h3>
                                    <?php  

                                $categories = $this->requestAction('categories/');
                                    foreach ($categories as $category)
                                    {
                                ?>
                                    <a class="list-group-item" href="" title=""><?php echo $category['Category']['name']; ?></a>
                                    <?php 

                                }
                                     ?>
                                </div>

                                <div class="list-group">
                                    <h3><span class="wc-editable" data-pk="ws_featured_employers" data-type="text"><a class="list-group-item active" href="" title="">Loại</a></span></h3>

                                    <?php  

                                $timeParts = $this->requestAction('timeParts/');
                                    foreach ($timeParts as $timePart)
                                    {
                                ?>
                                    <a class="list-group-item" href="" title=""><?php echo $timePart['TimePart']['type']; ?></a>
                                    <?php 

                                }
                                     ?>
                                </div>

                                <div class="list-group">

                                <h3><span class="wc-editable" data-pk="ws_featured_employers" data-type="text"><a class="list-group-item active" href="" title="">Khu vực</a></span></h3>

                                <?php  

                                $countries = $this->requestAction('countries/');
                                    foreach ($countries as $country)
                                    {
                                ?>
                                    <a class="list-group-item" href="<?php echo $this->webroot.'countries/index'; ?>" title=""><?php echo $country['Country']['city']; ?></a>
                                    <?php 

                                }
                                     ?>
                                </div>
                                    </div><!-- /.widget-body -->
                                </div><!-- /.widget -->
                                <br>
                            </div><!-- /.sidebar -->
                        </div><!-- /.col-sm-3 -->


        <div class="col-md-9 col-sm-8">
            <div class="content featured-jobs">
                <h2><span class="wc-editable" data-pk="ws_featured_jobs" data-type="text">KẾT QUẢ TÌM KIẾM</span></h2>

                <?php 
                    $keyword = $this->requestAction('posts/'); ?>
                    <?php $i = 0;?>

                    <?php if(count($posts) > 0) 
                        { 
                            foreach($posts as $keyword=>$value):?>
                        <div class="featured-job">
                        <div class="row">
                            <div class="col-md-2 col-sm-3 featured-job-image">
                                <img style="height: 136px;" 
                                src="<?php echo $this->webroot.'files/user/image/'.$value['Users']['id'].'/'.$value['Users']['image']; ?>">
                            </div><!-- /.col-sm-3 -->

                            <div class="col-md-10 col-sm-9 featured-job-content">
                            <h3><?php echo $this->Html->link($value['Post']['title'], array('controller' => 'posts', 'action' => 'view', $value['Post']['id'])); ?></h3>

                                <div><span class="wc-editable" data-pk="front_label_company_name" data-type="text">
                                Người đăng</span>: <strong>
                                <?php h($value['Users']['username']);?></strong></div>
                                <div class="pull-right"><span class="wc-editable" data-pk="front_label_company_name" data-type="text">Số điện thoại liên hệ</span>: <strong>
                                <?php echo h($value['Users']['phone']);?></strong></div>
                                <div class="pull-left"><span class="wc-editable" data-pk="front_label_company_name" data-type="text">Địa chỉ</span>: <strong>
                                <?php echo h($value['Users']['address']);?></strong></div><br>
                                
                                <div class="pull-left"><span class="wc-editable" data-pk="front_post_on" data-type="text">Ngày đăng</span>: <strong>
                                <?php echo h($value['Post']['created']); ?>
                                        &nbsp;</strong></div><br>
                                <div class="pull-left"><span class="wc-editable" data-pk="front_label_company_name" data-type="text">Lương</span>: <strong>
                                <?php echo h($value['Salaries']['salaries']); ?></strong> VNĐ</div>
                                
                                <div class="pull-right"><span class="wc-editable" data-pk="front_location" data-type="text">Địa điểm</span>: <strong>
                                <?php echo h($value['Countries']['city']); ?></strong></div></div><!-- /.col-sm-9 -->
                                
                            </div><!-- /.row -->
                        </div><!-- /.featured-job -->
                        <div class="rght-text"><span class="label label-success"><?php echo h($value['TimeParts']['type']); ?></span></div>

        <?php endforeach; 
    }
    else{
        echo "<h2>"."<center>" .'Không có kết quả'."</center>" ."</h2>";
        } ?> 


                    <!-- <div class="text-center">
                        <a href="jobs.html" class="btn btn-primary">Browse All Jobs</a>                         </div> -->
                        <!-- /.text-center -->
                    </div><!-- /.content -->
                </div><!-- /.col-sm-9 -->

                
                    </div><!-- /.row -->
                </div>