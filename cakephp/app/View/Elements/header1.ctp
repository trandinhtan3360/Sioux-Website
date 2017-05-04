 <style>
 .header, .footer {
    min-height: 60px;
    padding: 0 15px;
}

.header {
    position: fixed;
    left: 0;
    right: 0;
    z-index: 1002;
}

.black-bg {
    background: #ffd777;
    border-bottom: 1px solid #c9aa5f;
}

.wrapper {
    display: inline-block;
    margin-top: 60px;
    padding-left: 15px;
    padding-right: 15px;
    padding-bottom: 15px;
    padding-top: 0px;
    width: 100%;
}

a.logo {
    font-size: 20px;
    color: #ffffff;
    float: left;
    margin-top: 15px;
    text-transform: uppercase;
}

a.logo b {
    font-weight: 900;
}

a.logo:hover, a.logo:focus {
    text-decoration: none;
    outline: none;
}

a.logo span {
    color: #68dff0;
}


/*notification*/
#top_menu .nav > li, ul.top-menu > li {
    float: left;
}

.notify-row {
    float: left;
    margin-top: 15px;
    margin-left: 92px;
}

.notify-row .notification span.label {
    display: inline-block;
    height: 18px;
    width: 20px;
    padding: 5px;
}

ul.top-menu > li > a {
    color: #666666;
    font-size: 16px;
    border-radius: 4px;
    -webkit-border-radius: 4px;
    border:1px solid #666666 !important;
    padding: 2px 6px;
    margin-right: 15px;
}

ul.top-menu > li > a:hover, ul.top-menu > li > a:focus {
    border:1px solid #b6b6b6 !important;
    background-color: transparent !important;
    border-color: #b6b6b6 !important;
    text-decoration: none;
    border-radius: 4px;
    -webkit-border-radius: 4px;
    color: #b6b6b6 !important;
}

.notify-row .badge {
    position: absolute;
    right: -10px;
    top: -10px;
    z-index: 100;
}

.dropdown-menu.extended {
    max-width: 300px !important;
    min-width: 160px !important;
    top: 42px;
    width: 235px !important;
    padding: 0;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.176) !important;
    border: none !important;
    border-radius: 4px;
    -webkit-border-radius: 4px;
}
 </style>
 <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="" class="logo"><b>WONDER</b></a>
            <!--logo end-->
            <div class="nav notify-row" id="top_menu">
                <!--  notification start -->
                <!--  notification end -->
            </div>
            <div class="top-menu">
            	<ul class="nav navbar-nav navbar-right">     
                    
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color:black;">Profile<span class="caret"></span></a>
                      <ul class="dropdown-menu">
					  <?php 
					  if($this->Session->check('session1')){
						  echo "<li><a href='users/infor'> Xem profile</a></li>";
					  }
                        
						?>
                        <li role="separator" class="divider"></li>
                        <li><a href="<?php echo $this->webroot;?>users/logout">Đăng xuất</a></li>
                      </ul>
                    </li>
                </ul>
            </div>
        </header>
      <!--header end-->