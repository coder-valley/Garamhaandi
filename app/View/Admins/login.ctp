<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="<?php echo HTTP_ROOT.'Admins/login'?>"><b>Admin</b>Login</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>

    <form action="" method="post" id="login-form">
      <div class="form-group has-feedback">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        <input type="text" class="form-control required" placeholder="Email" name="data[Admin][name]">
      </div>
      <div class="form-group has-feedback">

        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        <input type="password" class="form-control required" placeholder="Password" name="data[Admin][password]">
      </div>
      <?php if($this->Session->check('loginerror-msg')){?>
      <div class="row">
        <div class="col-xs-12">
          
          <p style="color:red;"><?php echo $this->Session->read('loginerror-msg');?></p>
          <?php unset($_SESSION['loginerror-msg']);?>
        </div>
        
      </div>
      <?php }?>
      <div class="row">
        <!-- <div class="col-xs-8">
          <div class="checkbox">
            <label>
              <input type="checkbox" name="data[remember]" value="1"> Remember Me
            </label>
          </div>
        </div> -->
        <!-- /.col -->
        <div class="col-xs-12">
          
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <!-- <div class="social-auth-links text-center">
      <p>- OR -</p>
      <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
        Facebook</a>
      <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
        Google+</a>
    </div> -->
    <!-- /.social-auth-links -->

    <a href="javascript:void(0)" data-toggle="modal" data-target="#forget-password">I forgot my password</a><br><!-- 
    <a href="register.html" class="text-center">Register a new membership</a> -->

  </div>
  <!-- /.login-box-body -->
</div>

</body>


<!-- Modal -->
<div id="forget-password" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Forgot Password</h4>
      </div>
      <div class="modal-body">
        <div class="login-box-body">
    

    <form action="<?php echo HTTP_ROOT.'Admins/forgetPassword'?>" method="post" id="forgotPassword-form">
      <div class="form-group has-feedback">

        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        <input type="email" class="form-control required email" placeholder="Email" name="email">
      </div>
      
      <?php if($this->Session->check('forgetpassword-msg')){?>
      <div class="row">
        <div class="col-xs-12">
          
          <p style="color:red;"><?php echo $this->Session->read('forgetpassword-msg');?></p>
          
        </div>
        
      </div>
      <?php }?>
      <div class="row">
       
        <div class="col-xs-12">
          
          <button type="submit" class="btn btn-primary btn-block btn-flat">Reset Password</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <!-- <div class="social-auth-links text-center">
      <p>- OR -</p>
      <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
        Facebook</a>
      <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
        Google+</a>
    </div> -->
    <!-- /.social-auth-links -->

    
  </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<!-- modal ends---------------->
