<style>
  .margintop{
    margin-top: 25%!important;
  }
  .headerstyle{
    background-color: #0c786b!important;
    color: white!important;
  }
  .ausermodal{
    text-decoration: none!important;
    cursor: pointer!important;
    color: #0c786b!important;
  }
  .ausermodal:hover{
    text-decoration: none!important;
  }
  .btnuser{
    color: white!important;
    background-color: #29A79C!important;
    border-color: #29A79C!important;
  }
  /*.btnuser123
  {
    color: white!important;
    background-color: #29A79C!important;
    border-color: #29A79C!important;
    margin-bottom: 0;
    margin-top: -56px!important;
  }*/
  .text-center{
    text-align: center!important;
  }

  #kitfrgtsignup
  {
    display: none;
  }

  #kitverifiedemail
  {
    display: none;
  }

  #signupkit
  {
    display: none;
    margin-left: 35%!important;
    margin: 0;
    float: left;
  }

  #kitmobilechange
  {
    float: right;
    display: none;
  }

  #kitchenterotp
  {
    display: none;
  }

  .Errmsg
  {
    display: none;
    margin-top: -28px;
    color: red;
    font-weight: 700;
    text-align: center;
  }

  .otperror
  {
    color: red;
    font-weight: 700;
    margin-left: 5%;
  }

  .frgtotperror
  {
    color: red;
    font-weight: 700;
    margin-left: 5%;
  }
  .passwordeye
  {
    margin-left: 70% !important;
    margin-top: -11.3% !important;
    position: fixed;
  }

  .uloginmblerror
  {
    color: red;
    font-weight: 700;
    list-style: none;
    display: inline-block;
    text-align: center;
    margin-left: 4%;
  }
  #ulogin-error
  {
    color: red;
    font-weight: 700;
    list-style: none;
    display: inline-block;
    text-align: center;
    margin-left: 4%;
  }
  #kitsendotp:hover
  {
    opacity: .8!important;
  }
  .kitalrdyrgstrdnmbr
  {
    color: red;
    font-weight: 700;
    text-align: center;
  }
  form[name=kitchenloginfform] input[type=text].validation-passed{ border: 1px solid #090; color: #090; }
  form[name=kitchenloginfform] input[type=text].validation-failed{ border: 1px solid red; color: red; }

  form[name=kitchensignupform] input[type=password].validation-passed{ border: 1px solid #090; color: #090; }
  form[name=kitchensignupform] input[type=password].validation-failed{ border: 1px solid red; color: red; }
</style>
<!-- <script type="text/javascript" src="/GaramHaandi/js/custom.js"></script> -->

  <!--SIGNUP Modal -->
  <div id="kitsiignmodal" class="modal fade" role="dialog" >
    <div class="modal-dialog modal-sm">
      <div class="modal-content margintop">
        <form class="" action="<?php echo HTTP_ROOT.'/Homes/kitchen_register'?>" name="kitchensignupform" id="kitsignup" method="post">
        <div class="modal-header headerstyle">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title text-center"><b>Register</b></h4>
        </div>
        <div class="modal-body">
          <label><b>Name</b>
          </label>
          <i class="fa input-error"></i>
          <input type="text" class="form-control" validate="alpha" autocomplete="off" id="kituname" placeholder="Enter Full Name" name="data[Kitchen][name]" ng-model="input" onkeypress="return blockSpecialChar(event)">
          <br>
        
          <label><b>Email</b>
          </label>
          <i class="fa input-error"></i>
          <input autocomplete="off" type="text" validate="email" class="form-control" id="kituemail" placeholder="Enter Your Email" name="data[Kitchen][email]">
          <br>

          <label><b>Password</b></label>
            <!-- <i class="fa input-error"></i> -->
            
            <input type="password" validate="required" class="form-control regpwd" id="kitpwd" autocomplete="off" name="data[Kitchen][password]" placeholder="Enter Password" value="" minlength="6" maxlength="10">
            <span class="passwordeye">
              <button class="btn btn-default reveal" id="kitregshowpwd" style="margin-top: 0px;border-top-right-radius: 5px;border-bottom-right-radius: 5px;width: 60px;" type="button">Show</button>
              <button class="btn btn-default reveal" id="kitreghidepwd" style="margin-top: 0px;width: 60px!important" type="button">Hide</button>
            </span>          
          <br>
          <div>
          <label><b>Mobile Number</b>
          </label>

          <i class="fa input-error"></i>
          <input class="form-control" data-validate="required,number" autocomplete="off" type="text" id="kitmblotp" min="0" minlength="10" maxlength="10" placeholder="Enter Mobile Number" name="data[Kitchen][contact_no]">
          <p class="kitalrdyrgstrdnmbr">This mobile number is already registered. Please enter another mobile number.</p>
          </div>
          <br>
          <input type="text" data-validate="required" autocomplete="off" id="kitchenterotp" class="form-control" maxlength="6" placeholder="Enter Your OTP">
          <p class="otperror">Please Enter Valid OTP.</p>
        </div>
        <div class="modal-footer text-center">
          <a id="kitsendotp" class="btn btn-default btnuser">Send OTP</a>
          <button type="submit" id="signupkit" class="btn btn-default btnuser">Submit</button>
        </div>
      </form>
      </div>
    </div>
  </div>

  <!--FORGOT Modal START-->
  <div class="modal fade" id="kitforgotpass" role="dialog" >
    <div class="modal-dialog modal-sm">
      <div class="modal-content margintop">
        <form action="" method="post">
        <div class="modal-header headerstyle">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title text-center"><b>Forgot Password</b></h4>
        </div>
        <div class="modal-body">
          <label><b>Mobile Number</b>
          </label>
          <input class="form-control" data-validate="required,number" autocomplete="off" min="0" minlength="10" id="kitchenforgetpwd" maxlength="10" placeholder="Enter Mobile Number" required onkeyup="this.value=this.value.replace(/[^\d]/,'')">
          <br>
          <div class="frgtenterotp">
          <label><b>Please Verify Your OTP</b></label>
          <input type="text" data-validate="required" autocomplete="off" id="forgetkitchenterotp" class="form-control" maxlength="6" placeholder="Enter Your OTP">
          <p class="frgtotperror">Please Enter Valid OTP.</p>
          </div>
        </div>
        <p class="Errmsg">This mobile number is not registered with us.</p>
        <div class="modal-footer text-center">
          <a type="submit" id="kitverifiedemail" class="btn btn-default btnuser">Send OTP</a>
          <a class="btn btn-default btnuser" id="kitfrgtsignup" href="#" data-toggle="modal" data-backdrop="true" data-dismiss="modal" data-target="#kitsiignmodal"><span>Create an account?</span></a>
          <a class="btn btn-default btnuser" id="crtnewpswrd" href="">Create New Password</a>
        </div>
      </form>
      </div>
    </div>
  </div>
  <!--FORGOT Modal END-->

    <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content margintop">
        <form action="<?php echo HTTP_ROOT.'/Homes/kitchen_login'?>" id="kitchenloginfform" method="post">
        <div class="modal-header headerstyle">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title text-center"><b>Login</b></h4>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-12">
              <p id="ulogin-error">Authentication failed!! Please enter correct mobile no. or password.</p>
            </div>
          </div>
          <label><b>Mobile Number</b>
          </label>
          <i class="fa input-error"></i>
          <input class="form-control required number" type="text" id="kitlgin" autocomplete="off" min="0" minlength="10" maxlength="10" placeholder="Enter Mobile Number" name="data[Kitchen][contact_no]" onkeyup="this.value=this.value.replace(/[^\d]/,'')">
          <p class="uloginmblerror">This mobile number is not registered.</p>
          <br>
          <label><b>Password</b></label>
          <div class="input-group">
            <input type="password" class="form-control pwd123 required" id="kitlginpswrd" minlength="6" maxlength="10" autocomplete="off" name="data[Kitchen][password]" placeholder="Enter Password" value="">
            <span class="input-group-btn">
              <button class="btn btn-default reveal" id="kitshowpwd" style="margin-top: 0px;border-top-right-radius: 5px;border-bottom-right-radius: 5px;width: 60px;" type="button">Show</button>
              <button class="btn btn-default reveal" id="kithidepwd" style="margin-top: 0px;width: 60px!important" type="button">Hide</button>
            </span>          
          </div>
          <br>
          <div class="row">
            <div class="col-md-6">
              <a class="ausermodal" href="#" data-toggle="modal" data-backdrop="true" data-dismiss="modal" data-target="#kitforgotpass"><span>Forgot Password</span></a>
            </div>
            <div class="col-md-6">
              <a class="ausermodal" href="#" data-toggle="modal" data-backdrop="true" data-dismiss="modal" data-target="#kitsiignmodal"><span>Create an account?</span></a>
            </div>
          </div>
        </div>
        <div class="modal-footer text-center">
          <a type="" id="kitlginsbmt" class="btn btn-default btnuser">Submit</a>
        </div>
      </form>
      </div>
    </div>
  </div>
<!--SCRIPT tag START-->
<script type="text/javascript">
  $('#kitchenloginfform').validate();
  $('#kitsignup').submit(function(){  
    $('.validation-message').remove();
  });
</script>
<script type="text/javascript">
  $(document).ready(function(){
    $('#kitlginpswrd').bind('paste',function(e) {
    e.preventDefault();
    });
  })
</script>
<!--USER LOGIN CHECK NUMBER START-->
<script type="text/javascript">
  $(document).ready(function(){
    $('.uloginmblerror').hide();
    $('#kitlgin').keyup(function(){
      var uloginnmbr = $('#kitlgin').val();
      // console.log(uloginnmbr);
      if($(this).val().length ==10)
      {
        $.ajax({
          data: {id: uloginnmbr},
          type: 'post',
          url: "<?php echo HTTP_ROOT.'homes/kitchcknmbr/'?>"+uloginnmbr,
          success: function(resp)
          {
            if(resp == 'true')
            {
              $('.uloginmblerror').hide();
            }
            else
            {
              $('.uloginmblerror').show();
            }
          }
        })
      }
      else
      {
        $('.uloginmblerror').hide();
        $('#ulogin-error').hide();
      }
    })
  })
</script>
<script type="text/javascript">
  $(document).ready(function(){
    $('#ulogin-error').hide();
    $('#kitlginsbmt').click(function(){
      var uloginmbr = $('#kitlgin').val();
      var uloginpswrd = $('#kitlginpswrd').val();
      // console.log(uloginmbr);
      if(uloginmbr !='')
      {
        $.ajax({
          data: {pswrd: uloginpswrd, nmbr: uloginmbr},
          type: 'post',
          url: "<?php echo HTTP_ROOT.'homes/kitchen_login/'?>"+uloginmbr+"/"+uloginpswrd,
          success: function(resp)
          {
            // console.log(resp);
            if(resp == 'true')
            {
              window.location.reload();
            }
            else
            {
              $('#ulogin-error').show();
            }
          }
        })
      }
    })
  })
</script>

<!--USER LOGIN CHECK NUMBER END-->
<!--Validation START-->
<script type="text/javascript">
$(function() {
   $('form[name=kitchensignupform]').nextVal({
   });
});
</script>
<!--Validation END-->

<!--Forgot Password START-->
<script type="text/javascript">
  $(document).ready(function(){
    $('#crtnewpswrd').attr('disabled',true);
    $('.frgtotperror').hide();
    $('#crtnewpswrd').hide();
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
                $('#crtnewpswrd').show();
                $('#crtnewpswrd').attr('disabled',false);
                $('#kitverifiedemail').hide();
              }
              else
              {
                $('#crtnewpswrd').attr('disabled',true);
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
    $('.frgtenterotp').hide();
    $('#kitverifiedemail').click(function(){
      $('#kitverifiedemail').hide();
      $('#crtnewpswrd').attr('disabled',true);
      $('#crtnewpswrd').show();
      var forgetnumber = $("#kitchenforgetpwd").val();
      // console.log(frgtnumber);
      if (forgetnumber !='')
      {
        $.ajax({
          data: {id: forgetnumber},
          type: 'post',
          url: "<?php echo HTTP_ROOT.'homes/kitchen_forgot/'?>"+forgetnumber,
          success: function(resp)
          {
            //alert(resp);
            // var res = JSON.parse(resp);
            //console.log(res);

            var link = "<?php echo HTTP_ROOT.'homes/kitchenforgotpwd/'?>"+resp;
            
            $("#crtnewpswrd").attr('href',link);
          }
        })
      }
      $('.frgtenterotp').show();
    })
  })
</script>

<script type="text/javascript">
  $(document).ready(function(){
    $('.Errmsg').hide();
    $('#userfrgtotp').hide();
    $('.userfrgtotperror').hide();
    $('#kitverifiedemail').show();
    $('#kitverifiedemail').attr('disabled',true);
    $('#kitchenforgetpwd').keyup(function(){
      var frgtnumber = $("#kitchenforgetpwd").val();
      // console.log(frgtnumber);
      if($(this).val().length ==10)
      {
        // console.log('hi');
        $.ajax({
          data: {id: frgtnumber},
          type: 'post',
          url: "<?php echo HTTP_ROOT.'homes/kitchcknmbr/'?>"+frgtnumber,
          success: function(resp)
          {
            if(resp == 'true')
            {
              $('#kitverifiedemail').show();
              $('#kitverifiedemail').attr('disabled',false);
              // $('#kitchenforgetpwd').attr('disabled',true);
              $('#kitfrgtsignup').hide();
              $('.Errmsg').hide();
            }
            else
            {
              $('.Errmsg').show();
              $('#kitverifiedemail').hide();
              $('#kitfrgtsignup').show();
              $('#userverifiedemail').attr('disabled',true);
            }
          }
        })
      }
      else
      {
        $('#kitverifiedemail').show();
        $('#kitverifiedemail').attr('disabled',true);
        $('#kitfrgtsignup').hide();
        $('#crtnewpswrd').hide();
        $('.frgtenterotp').hide();
        $('.Errmsg').hide();
      }
    })
  })
</script>
<!--Forgot Password END-->

<!--Nmbr Check on Resgistration START-->
  <script type="text/javascript">
    $(document).ready(function(){
      $('.kitalrdyrgstrdnmbr').hide();
      $('#kitsendotp').attr('disabled',true);
      $('#kitmblotp').keyup(function(){
        var kitnumber = $("#kitmblotp").val();
        // console.log(kitnumber);
        if($(this).val().length==10)
        {
          $.ajax({
            data: {id: kitnumber},
            type: 'post',
            url: "<?php echo HTTP_ROOT.'homes/kitchcknmbr/'?>"+kitnumber,
            success: function(resp)
            {
              if(resp == 'true')
              {
                $('.kitalrdyrgstrdnmbr').show();
                $('#kitsendotp').attr('disabled',true);
              }
              else
              {
                $('.kitalrdyrgstrdnmbr').hide();
                $('#kitsendotp').attr('disabled',false);
              }
            }
          })
        }
        else
        {
          $('.kitalrdyrgstrdnmbr').hide();
          $('#kitsendotp').attr('disabled',true);
          $('#kitchenterotp').hide();
          $('#signupkit').hide();
          $('.otperror').hide();
          $('#kitsendotp').show();
        }
      })
    })
  </script>
<!--Nmbr Check on Resgistration END-->

<!--SEND OTP START-->
<script type="text/javascript">
  $(document).ready(function(){
    $('#kitsendotp').click(function(){
      $('#kitchenterotp').css('display','block');
      $('#signupkit').css('display','block');
      $('#signupkit').attr('disabled',true);
      $('#kitmobilechange').css('display','block');
      // $('#kitmblotp').attr('readonly',true);
      $('#kitsendotp').hide();
      var letter = $("#kitmblotp").val();
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
            var res = JSON.parse(resp);
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
    $('.otperror').hide();
    $('#kitchenterotp').keyup(function(){
      var letter = $("#kitchenterotp").val();
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
              $('#signupkit').attr('disabled',false);
              $('#kitmobilechange').hide();
              $('.otperror').hide();
            }
            else
            {
              $('#signupkit').attr('disabled',true);
              $('#kitmobilechange').show();
              $('.otperror').show();
            }
            // $("#cart-count").text(resp);
          }
        });
      }
    })
  });
</script>
<!--VERIFY OTP END-->

<!--SHOW/HIDE Password START-->
<script type="text/javascript">
  $(document).ready(function(){
    $('#kithidepwd').hide();
  $("#kitshowpwd").on('click',function() {
    // console.log('hi');
    $('#kithidepwd').show();
    $('#kitshowpwd').hide();
    var $pwd = $(".pwd123");
    // console.log($(".pwd1").attr('type'));
    if ($pwd.attr('type') == 'password') {
        $pwd.attr('type', 'text');
        // console.log('hi1');
    } 
  });
  });
</script>
<script type="text/javascript">
  $(document).ready(function(){
    $('#kithidepwd').hide();
  $("#kithidepwd").on('click',function() {
    // console.log('hi');
    $('#kithidepwd').hide();
    $('#kitshowpwd').show();
    var $pwd = $(".pwd123");
    // console.log($(".pwd1").attr('type'));
    if ($pwd.attr('type') == 'text') 
    {
      // console.log('hi');
      $pwd.attr('type', 'password');
    }
  });
  });
</script>

<script type="text/javascript">
  $(document).ready(function(){
    $('#kitreghidepwd').hide();
  $("#kitregshowpwd").on('click',function() {
    // console.log('hi');
    $('#kitreghidepwd').show();
    $('#kitregshowpwd').hide();
    var $pwd = $(".regpwd");
    // console.log($(".pwd1").attr('type'));
    if ($pwd.attr('type') == 'password') {
        $pwd.attr('type', 'text');
        // console.log('hi1');
    } 
  });
  });
</script>
<script type="text/javascript">
  $(document).ready(function(){
    $('#kitreghidepwd').hide();
  $("#kitreghidepwd").on('click',function() {
    // console.log('hi');
    $('#kitreghidepwd').hide();
    $('#kitregshowpwd').show();
    var $pwd = $(".regpwd");
    // console.log($(".pwd1").attr('type'));
    if ($pwd.attr('type') == 'text') 
    {
      // console.log('hi');
      $pwd.attr('type', 'password');
    }
  });
  });
</script>

<!--SHOW/HIDE PASSWORD END-->