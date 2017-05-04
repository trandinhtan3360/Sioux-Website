<!-- Gallery Items
        ================================================== --> 
        <div class="span12 gallery">
            <div class="row clearfix">
                <ul class="gallery-post-grid holder">
                    <?php
                    $users = $this->requestAction('users/employees');
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

            <!-- Pagination -->
            <div class="pagination">
                <ul>
                <li class="active"><a href="#">Prev</a></li>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">Next</a></li>
                </ul>
            </div>
   </div><!-- End gallery list-->

    </div><!-- End container row -->
    
    </div> <!-- End Container -->