<style>
  .margintop
  {
    margin-top: 25%!important;
  }
  .headerstyle
  {
    background-color: #0c786b!important;
    color: white!important;
  }
  .ausermodal
  {
    text-decoration: none!important;
    cursor: pointer!important;
    color: #0c786b!important;
  }
  .ausermodal:hover
  {
    text-decoration: none!important;
  }
  .btnuser
  {
    color: white!important;
    background-color: #29A79C!important;
    border-color: #29A79C!important;
  }
  .text-center
  {
    text-align: center!important;
  }
  #signupuser
  {
    display: none;
    margin-left: 35%!important;
    margin: 0;
    float: left;
  }
  #userotp
  {
    display: none;
  }
  #userfrgtsignup
  {
    display: none;
  }
  .userErrormsg
  {
    color: red;
    text-align: center;
    float: left;
    margin-left: 7%;
  }
  .error
  {
    color: red;
  }

  .useralrdyrgstrdnmbr
  {
    color: red;
    font-weight: 700;
    text-align: center;
  }
  .userErrmsg
  {
    margin-top: -28px;
    color: red;
    font-weight: 700;
    text-align: center;
  }
  .userotperror
  {
    color: red;
    font-weight: 700;
    margin-left: 5%;
  }
  .loginmblerror
  {
    color: red;
    font-weight: 700;
    list-style: none;
    display: inline-block;
    text-align: center;
    margin-left: 4%;
  }
  #login-error
  {
    color: red;
    font-weight: 700;
    list-style: none;
    display: inline-block;
    text-align: center;
    margin-left: 4%;
  }
  #usersendotp:hover
  {
    opacity:0.8;
  }
  .validation-message
  {
    color: red;
    font-weight: 700;
    list-style: none;
    float: left;
    margin-left: -12%;
  }
  form[name=signupformuser] input[type=text].validation-passed{ border: 1px solid #090; color: #090; }
  form[name=signupformuser] input[type=text].validation-failed{ border: 1px solid red; color: red; }
  form[name=signupformuser] input[type=password].validation-passed{ border: 1px solid #090; color: #090; }
  form[name=signupformuser] input[type=password].validation-failed{ border: 1px solid red; color: red; }

  form[name=userlogin] input[type=text].validation-passed{ border: 1px solid #090; color: #090; }
  form[name=userlogin] input[type=text].validation-failed{ border: 1px solid red; color: red; }
  form[name=userlogin] input[type=password].validation-passed{ border: 1px solid #090; color: #090; }
  form[name=userlogin] input[type=password].validation-failed{ border: 1px solid red; color: red; }
</style>
<!-- <script type="text/javascript" src="/GaramHaandi/ValidationJs/jqeryvlidate.js"></script> -->
<script type="text/javascript" src="/GaramHaandi/ValidationJs/verify.prompt.min.js"></script>

 <!-- Modal -->
  <div id="createacc" class="modal fade" role="dialog" >
    <div class="modal-dialog modal-sm">
      <div class="modal-content margintop">
        <form action="<?php echo HTTP_ROOT.'/Homes/user_register'?>" name="signupformuser" method="post" id="signup-frm">
        <div class="modal-header headerstyle">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title text-center"><b>Register</b></h4>
        </div>
        <div class="modal-body">
          <label><b>Name</b>
          </label>
          <i class="fa input-error"></i>
          <input type="text" class="form-control" validate="alpha" autocomplete="off" id="uregname" placeholder="Enter Full Name" name="data[User][name]" ng-model="input" onkeypress="return blockSpecialChar(event)" >
          <br>

          <label><b>Email</b>
          </label>
          <i class="fa input-error"></i>
          <input autocomplete="off" type="text" validate="email" class="form-control" id="useregemail" placeholder="Enter Your Email" name="data[User][email]">
          <br>

          <label><b>Password</b>
          </label>
          <div class="input-group">
            <input type="password" class="form-control uregpwd" validate="required" id="userpassword" autocomplete="off" name="data[User][password]" placeholder="Enter Password" value="" minlength="6" maxlength="10">
            <span class="input-group-btn">
              <button class="btn btn-default reveal" id="uregshowpwd" style="margin-top: 0px;border-top-right-radius: 5px;border-bottom-right-radius: 5px;width: 60px;" type="button">Show</button>
              <button class="btn btn-default reveal" id="ureghidepwd" style="margin-top: 0px;width: 60px!important" type="button">Hide</button>
            </span> 
          </div>
          <br>
          <div class="otpmobile">
          <label><b>Mobile Number</b></label>
            <i class="fa input-error"></i>
            <input class="form-control" type="text" validate="phone" id="signupmob" autocomplete="off" min="0" minlength="10" maxlength="10" placeholder="Enter Mobile Number" name="data[User][contact_no]" onkeyup="this.value=this.value.replace(/[^\d]/,'')">
            <p class="useralrdyrgstrdnmbr">This mobile number is already registered. Please enter another mobile number.</p>
          </div>
          <br>
          <input type="text" autocomplete="off" id="userotp" validate="required" class="form-control" name="otp" maxlength="6" placeholder="Enter OTP">
          <p class="userotperror">Please enter correct OTP.</p>
        </div>
        <div class="modal-footer text-center">
          <a type="submit" id="usersendotp" class="btn btn-default btnuser">Send OTP</a>
          <button type="submit" id="signupuser" class="submit btn btn-default btnuser">Submit</button>
        </div>
      </form>
      </div>
    </div>
  </div>
  <!-- Modal -->
  <div class="modal fade" id="forgotpass" role="dialog" >
    <div class="modal-dialog modal-sm">
      <div class="modal-content margintop">
        <form id="userforgot" method="post">
        <div class="modal-header headerstyle">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title text-center"><b>Forgot Password</b></h4>
        </div>
        <div class="modal-body">
          <label><b>Mobile Number</b>
          </label>
          <input class="form-control" validate="phone" autocomplete="off" min="0" minlength="10" maxlength="10" id="userforgetpass" placeholder="Enter Mobile Number" required onkeyup="this.value=this.value.replace(/[^\d]/,'')">
          <br>
          <div class="userfrgtenterotp">
          <label><b>Please Verify Your OTP</b></label>
          <input type="text" data-validate="required" autocomplete="off" id="forgetkitchenterotp" class="form-control" maxlength="6" placeholder="Enter Your OTP">
          <p class="frgtotperror">Please Enter Valid OTP.</p>
          </div>
        </div>
        <p class="userErrmsg">This mobile number is not registered with us.</p>
        <div class="modal-footer text-center">
          <a type="submit" id="userverifiedemail" class="btn btn-default btnuser">Send OTP</a>
          <a class="btn btn-default btnuser" id="userfrgtsignup" href="#" data-toggle="modal" data-backdrop="true" data-dismiss="modal" data-target="#createacc"><span>Create an account?</span></a>
          <a class="btn btn-default btnuser" id="usercrtnewpswrd" href="">Create New Password</a>
        </div>
      </form>
      </div>
    </div>
  </div>
  <!--User login modal start-->
     <div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content margintop">
        <form action="<?php echo HTTP_ROOT.'/Homes/user_login'?>" id="userlogin" method="post">
        <div class="modal-header headerstyle">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title text-center"><b>Login</b></h4>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-12">
              <p id="login-error">Authentication failed!! Please enter correct mobile no. or password.</p>
            </div>
          </div>
          <label><b>Mobile Number</b>
          </label>
          <input class="form-control required number" type="text" id="lginmbl" autocomplete="off" min="0" minlength="10" maxlength="10" placeholder="Enter Mobile Number" name="data[User][contact_no]"onkeyup="this.value=this.value.replace(/[^\d]/,'')">
          <p class="loginmblerror">This mobile number is not registered.</p>
          <br>
          <label><b>Password</b>
          </label>
          <div class="input-group">
            <input type="password" class="form-control pwd1 required" id="lginpwd" minlength="6" maxlength="10" autocomplete="off" name="data[User][password]" placeholder="Enter Password" value="">
            <span class="input-group-btn">
              <button class="btn btn-default reveal" id="ushowpwd" style="margin-top: 0px;border-top-right-radius: 5px;border-bottom-right-radius: 5px;width: 60px;" type="button">Show</button>
              <button class="btn btn-default reveal" id="uhidepwd" style="margin-top: 0px;width: 60px!important" type="button">Hide</button>
            </span>          
          </div>
          <br>
          <div class="row">
            <div class="col-md-6">
              <a class="ausermodal" href="#" data-toggle="modal" data-backdrop="true" data-dismiss="modal" data-target="#forgotpass"><span>Forgot Password</span></a>
            </div>
            <div class="col-md-6">
              <a class="ausermodal" href="#" data-toggle="modal" data-backdrop="true" data-dismiss="modal" data-target="#createacc"><span>Create an account?</span></a>
            </div>
          </div>
        </div>
        <div class="modal-footer text-center">
          <a type="" id="lginsbmt" class="btn btn-default btnuser">Submit</a>
        </div>
      </form>
      </div>
    </div>
  </div>
  <!--User login modal END-->
<!--Validation START-->
<script type="text/javascript">
$(function() {
   $('form[name=signupformuser]').nextVal({
   });
});
</script>
<!--Validation END-->
<script type="text/javascript" src="/GaramHaandi/js/common/jquery.validate.js"></script>
<script type="text/javascript">
  $('#userlogin').validate();
  $('#signup-frm').submit(function(){  
    $('.validation-message').remove();
  });
</script>

<!--SCRIPT TAG START-->
<script type="text/javascript">
  $(document).ready(function(){
    $('#lginpwd').bind('paste',function(e) {
    e.preventDefault();
    });
  })
</script>
<!--USER LOGIN CHECK NUMBER START-->
<script type="text/javascript">
  $(document).ready(function(){
    $('.loginmblerror').hide();
    $('#lginmbl').keyup(function(){
      var loginnmbr = $('#lginmbl').val();
      // console.log(loginnmbr);
      if($(this).val().length ==10)
      {
        $.ajax({
          data: {id: loginnmbr},
          type: 'post',
          url: "<?php echo HTTP_ROOT.'homes/userchcknmbr/'?>"+loginnmbr,
          success: function(resp)
          {
            if(resp == 'true')
            {
              $('.loginmblerror').hide();
            }
            else
            {
              $('.loginmblerror').show();
            }
          }
        })
      }
      else
      {
        $('.loginmblerror').hide();
        $('#login-error').hide();
      }
    })
  })
</script>
<script type="text/javascript">
  $(document).ready(function(){
    $('#login-error').hide();
    $('#lginsbmt').click(function(){
      var loginmbr = $('#lginmbl').val();
      var loginpswrd = $('#lginpwd').val();
      if(loginmbr !='')
      {
        $.ajax({
          data: {pswrd: loginpswrd, nmbr: loginmbr},
          type: 'post',
          url: "<?php echo HTTP_ROOT.'homes/user_login/'?>"+loginmbr+"/"+loginpswrd,
          success: function(resp)
          {
            console.log(resp);
            if(resp == 'true')
            {
              window.location.reload();
            }
            else
            {
              $('#login-error').show();
            }
          }
        })
      }
    })
  })
</script>
<!--USER LOGIN CHECK NUMBER END-->

<!--Forgot Password START-->
<script type="text/javascript">
  $(document).ready(function(){
    $('#usercrtnewpswrd').attr('disabled',true);
    $('.frgtotperror').hide();
    $('#usercrtnewpswrd').hide();
    $('#forgetkitchenterotp').keyup(function(){
      var frgtotpenter = $("#forgetkitchenterotp").val();
      // console.log(frgtotpenter);
      if(frgtotpenter !='')
      {
        $.ajax({
            data: {id: frgtotpenter},
            type: 'post',
            url: "<?php echo HTTP_ROOT.'homes/verifyotp/'?>"+frgtotpenter,
            success: function(resp)
            {
              if (resp == 'success')
              {
                $('.frgtotperror').hide();
                $('#usercrtnewpswrd').show();
                $('#usercrtnewpswrd').attr('disabled',false);
                $('#userverifiedemail').hide();
              }
              else
              {
                $('#usercrtnewpswrd').attr('disabled',true);
                $('.frgtotperror').show();
              }
            }
        })
      }
  })
  })
</script>

<script type="text/javascript">
  $(document).ready(function(){
    $('.userfrgtenterotp').hide();
    $('#userverifiedemail').click(function(){
      $('#userverifiedemail').hide();
      $('#usercrtnewpswrd').attr('disabled',true);
      $('#usercrtnewpswrd').show();
      var forgetnumber = $("#userforgetpass").val();
      // console.log(frgtnumber);
      if (forgetnumber !='')
      {
        $.ajax({
          data: {id: forgetnumber},
          type: 'post',
          url: "<?php echo HTTP_ROOT.'homes/user_forgot/'?>"+forgetnumber,
          success: function(resp)
          {
            //alert(resp);
            // var res = JSON.parse(resp);
            //console.log(res);

            var link = "<?php echo HTTP_ROOT.'homes/userforgotpwd/'?>"+resp;
            
            $("#usercrtnewpswrd").attr('href',link);
          }
        })
      }
      $('.userfrgtenterotp').show();
    })
  })
</script>

<script type="text/javascript">
  $(document).ready(function(){
    $('.userErrmsg').hide();
    $('#userfrgtotp').hide();
    $('.userfrgtotperror').hide();
    $('#userverifiedemail').show();
    $('#userverifiedemail').attr('disabled',true);
    $('#userforgetpass').keyup(function(){
      var frgtnumber = $("#userforgetpass").val();
      // console.log(frgtnumber);
      if($(this).val().length ==10)
      {
        // console.log('hi');
        $.ajax({
          data: {id: frgtnumber},
          type: 'post',
          url: "<?php echo HTTP_ROOT.'homes/userchcknmbr/'?>"+frgtnumber,
          success: function(resp)
          {
            if(resp == 'true')
            {
              $('#userverifiedemail').show();
              $('#userverifiedemail').attr('disabled',false);
              $('#userfrgtsignup').hide();
              $('.userErrmsg').hide();
            }
            else
            {
              $('.userErrmsg').show();
              $('#userverifiedemail').hide();
              $('#userfrgtsignup').show();
              $('#userverifiedemail').attr('disabled',true);
            }
          }
        })
      }
      else
      {
        $('#userverifiedemail').show();
        $('#userverifiedemail').attr('disabled',true);
        $('#userfrgtsignup').hide();
        $('.userErrmsg').hide();
        $('#usercrtnewpswrd').hide();
        $('.userfrgtenterotp').hide();
      }
    })
  })
</script>
<!--Forgot Password END-->

<!--User nmbr check on Registration START-->
  <script type="text/javascript">
    $(document).ready(function(){
      $('.useralrdyrgstrdnmbr').hide();
      $('#usersendotp').attr('disabled',true);
      $('#signupmob').keyup(function(){
        var number = $("#signupmob").val();
        // console.log(number);
        if($(this).val().length ==10)
        {
          // console.log('hi');
          $.ajax({
            data: {id: number},
            type: 'post',
            url: "<?php echo HTTP_ROOT.'homes/userchcknmbr/'?>"+number,
            success: function(resp)
            {
              if(resp == 'true')
              {
                $('.useralrdyrgstrdnmbr').show();
                $('#usersendotp').attr('disabled',true);
              }
              else
              {
                $('.useralrdyrgstrdnmbr').hide();
                // $('#signupmob').attr('readonly',true);
                $('#usersendotp').attr('disabled',false);
              }
            }
          });
        }
        else
        {
          $('.useralrdyrgstrdnmbr').hide();
          $('#userotp').hide();
          $('#usersendotp').attr('disabled',true);
          $('#signupuser').hide();
          $('.userotperror').hide();
          $('#usersendotp').show();
        }
      })
    })
  </script>
<!--User nmbr check on Registration END-->

<!--SEND OTP START-->
<script type="text/javascript">
  $(document).ready(function(){
    $('#usersendotp').click(function(){
      $('#userotp').css('display','block');
      $('#signupuser').css('display','block');
      $('#signupuser').attr('disabled',true);
      // $('#signupmob').attr('readonly',true);
      // $('#changenmbr').css('display','block');
      $('#usersendotp').hide();
      var letter = $("#signupmob").val();
      // console.log(letter);
      if(letter != '')
      {
        $.ajax({
          data: {id: letter},
          type: 'post',
          url: "<?php echo HTTP_ROOT.'homes/sendotpsms/'?>"+letter,
          success: function(resp)
          {
            //alert(resp);
            // var res = JSON.parse(resp);
            // console.log(res);
            
            // $("#cart-count").text(resp);
          }
        });
      }
    })
  });
</script>
<!--SEND OTP END-->

<!--VERIFY OTP START-->
<script type="text/javascript">
  $(document).ready(function(){
    $('.userotperror').hide();
    $('#userotp').keyup(function(){
      var letter = $("#userotp").val();
      // console.log(letter);
      if(letter != '')
      {
        $.ajax({
          data: {id: letter},
          type: 'post',
          url: "<?php echo HTTP_ROOT.'homes/verifyotp/'?>"+letter,
          success: function(resp)
          {
           if(resp == 'success')
            {
              $('#signupuser').attr('disabled',false);
              $('.userotperror').hide();
            }
            else
            {
              $('#signupuser').attr('disabled',true);
              // $('#changenmbr').show();
              $('.userotperror').show();
            }
            // $("#cart-count").text(resp);
          }
        });
      }
    })
  });
</script>
<!--VERIFY OTP END-->

<!--DISABLED BUTTON START-->
<script type="text/javascript">
 $(document).ready(function(){
    $('#usersendotp').attr('disabled',true);
    $('#userotp').keyup(function(){
        if($(this).val().length ==6)
        {
          $('#usersendotp').attr('disabled', false);
          // $('#signupmob').attr('readonly', true);
        }
        else
        {
          $('#usersendotp').attr('disabled',true);
        }
    })
});
</script>

<!--SHOW/HIDE Password START-->
<script type="text/javascript">
  $(document).ready(function(){
    $('#uhidepwd').hide();
  $("#ushowpwd").on('click',function() {
    //console.log('hi');
    $('#uhidepwd').show();
    $('#ushowpwd').hide();
    var $pwd = $(".pwd1");
    //console.log($(".pwd1").attr('type'));
    if ($pwd.attr('type') == 'password') {
        $pwd.attr('type', 'text');
        //console.log('hi1');
    } 
  });
  });
</script>
<script type="text/javascript">
  $(document).ready(function(){
    $('#uhidepwd').hide();
  $("#uhidepwd").on('click',function() {
    // console.log('hi');
    $('#uhidepwd').hide();
    $('#ushowpwd').show();
    var $pwd = $(".pwd1");
    // console.log($(".pwd1").attr('type'));
    if ($pwd.attr('type') == 'text') 
    {
      // console.log('hi');
      $pwd.attr('type', 'password');
    }
  });
  });
</script>

<!--SHOW/HIDE Password START-->
<script type="text/javascript">
  $(document).ready(function(){
    $('#ureghidepwd').hide();
  $("#uregshowpwd").on('click',function() {
    //console.log('hi');
    $('#ureghidepwd').show();
    $('#uregshowpwd').hide();
    var $pwd = $(".uregpwd");
    //console.log($(".pwd1").attr('type'));
    if ($pwd.attr('type') == 'password') {
        $pwd.attr('type', 'text');
        //console.log('hi1');
    } 
  });
  });
</script>
<script type="text/javascript">
  $(document).ready(function(){
    $('#ureghidepwd').hide();
  $("#ureghidepwd").on('click',function() {
    // console.log('hi');
    $('#ureghidepwd').hide();
    $('#uregshowpwd').show();
    var $pwd = $(".uregpwd");
    // console.log($(".pwd1").attr('type'));
    if ($pwd.attr('type') == 'text') 
    {
      // console.log('hi');
      $pwd.attr('type', 'password');
    }
  });
  });
</script>
<!--SHOW/HIDE Password END-->