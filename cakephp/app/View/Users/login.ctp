<?php echo $this->Html->css('style-login.css');?>
<style type="text/css">
.form-login label {
	    padding-bottom: 60px;
		font-family: 'OpenSans Semibold';
		color: #2c3e50;
		font-size: 18px;
		width: 100%;
		text-align: center;
		margin:-50px;
	}
</style>
<div class="color-bar-2 color-bg"></div>

<div class="row">
    <div class="span5 login"></div>
    <div class="span4 login1" style="padding-top: 50px;">
      <div class="login2">     
        <h2 class="title">Đăng nhập</h2>
        <form action="" method="POST"  class= "form-login" accept-charset="utf-8">
            <fieldset style="margin-top:1em;">
            <span>
              <i class='fa fa-user'></i>
            </span>
			<label>Email</label>
            <input placeholder='Email người dùng' type='text' name="username">
          </fieldset>
          <fieldset style="margin-top:1em;">
            <span>
              <i class='fa fa-lock'> </i>
            </span>
			<label>Mật khẩu</label>
            <input placeholder='Mật khẩu người dùng' type='password' name="password">
          </fieldset>
            <!-- in ra lỗi khi người dùng nhập sai -->
            <span style="color:red;text-align:justify-all;padding-top: 5px;"><?php echo $error; ?></span>
            <div class="row">
                <div class="span2">
                    <a data-toggle="modal" href="login.ctp#myModal"> Quên mật khẩu?</a>
                </div>
            </div>
            <div class="row" style="margin-top: -35px;">
                <div class="span4">
                    <input type="submit" class="" value="Đăng nhập" name='ok' style="margin-left: 1em; background-color:#1abc9c; color:#EEEEEE;">
                </div>
            </div>
            <!-- </form> -->
            </div>
    </div>
    <div class="span3"></div>
            <!-- Hiện 1 dialog để người dùng lấy lại mật khẩu -->

    <div aria-hidden ="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content" >
                <div class="modal-header">

                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

                     <h4 class="modal-title">Quên mật khẩu</h4>

                </div>
                <div class="modal-body">

                    <p>Nhập địa chỉ e-mail của bạn bên dưới để lấy lại mật khẩu.</p>

                    <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">

                </div>

                <div class="modal-footer">
                    <input class="btn btn-danger" type="submit" value="Hủy bỏ"></input>
                    <input class="btn btn-info" type="submit" value="Tiếp tục"></input>
                </div>
                
            </div>
        </div>
    </div>
</div>

<div class="color-bar-2 color-bg"></div>