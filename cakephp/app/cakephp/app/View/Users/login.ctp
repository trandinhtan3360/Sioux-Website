
<div id="login-page">
	  	<div class="container">
	  	
		      <form class="form-login" method="POST" action="">

		        <h2 class="form-login-heading">Đăng nhập</h2>

		        <div class="login-wrap">

		            <input type="text" name="username" class="form-control" placeholder="Tài khoản" autofocus> </input>

		            <br>

		            <input type="password" name="password" class="form-control" placeholder="Mật khẩu"></input>

		            <p></p>

		            <!-- in ra lỗi khi người dùng nhập sai -->
		            <span style="color:red;text-align:justify-all;padding-top: 5px;"><?php echo $error; ?></span>

		            <label class="checkbox">

		                <span class="pull-right">

		                    <a data-toggle="modal" href="login.ctp#myModal"> Quên mật khẩu?</a>
		
		                </span>

		            </label>

		            <input class="btn btn-theme btn-block" value="Đăng nhập" type="submit" name='ok'></input>
		            

		            <hr>
		            
		            <div class="login-social-link centered">

		            	<p>Chưa có tài khoản?</p>

			                <button class="btn btn-primary" type="submit">Đăng kí</button>

			                <button class="btn btn-danger" type="submit">Trang chủ</button>
		            </div>
		
		        </div>
			  
		          <!-- Hiện 1 dialog để người dùng lấy lại mật khẩu -->

		          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">

		              <div class="modal-dialog">

		                  <div class="modal-content">

		                      <div class="modal-header">

		                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

		                          <h4 class="modal-title">Quên mật khẩu</h4>

		                      </div>

		                      <div class="modal-body">

		                          <p>Nhập địa chỉ e-mail của bạn bên dưới để lấy lại mật khẩu.</p>

		                          <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">
		
		                      </div>

		                      <div class="modal-footer">

		                          <button data-dismiss="modal" class="btn btn-default" type="button">Hủy bỏ</button>

		                          <input class="btn btn-theme" type="submit" value="Tiếp tục"></input>

		                      </div>

		                  </div>

		              </div>

		          </div>
		          <!-- Kết thúc dialog --> 	
	  		</form>
	  	</div>
	  </div>