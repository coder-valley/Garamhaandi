//Validation Login Border red color of USER START
  $(document).ready(function(){
    $('#lginsbmt').click(function(){
       var lginmbr =$("#lginpwd").val();
        if(lginmbr !='')
        {
          $('#lginpwd').css('border-color','green');
        }
        else
        {
          $('#lginpwd').css('border-color','red');
        }
    });
      $('#lginpwd').focusout(function(){
      var lginmbr =$("#lginpwd").val();
        if(lginmbr !='')
        {
          $('#lginpwd').css('border-color','green');
        }
        else
        {
          $('#lginpwd').css('border-color','red');
        }
    });
    $('#lginpwd').keyup(function(){
        var lginmbr =$("#lginpwd").val();
        if(lginmbr !='')
        {
          $('#lginpwd').css('border-color','green');
        }
        else
        {
          $('#lginpwd').css('border-color','red');
        }
      });
        $('#lginsbmt').click(function(){
       var lginmbr =$("#lginmbl").val();
        if(lginmbr !='')
        {
          $('#lginmbl').css('border-color','green');
        }
        else
        {
          $('#lginmbl').css('border-color','red');
        }
    });
    $('#lginmbl').keyup(function(){
        var lginmbr =$("#lginmbl").val();
        if(lginmbr !='')
        {
          $('#lginmbl').css('border-color','green');
        }
        else
        {
          $('#lginmbl').css('border-color','red');
        }
    });
    $('#lginmbl').focusout(function(){
      var lginmbr =$("#lginmbl").val();
        if(lginmbr !='')
        {
          $('#lginmbl').css('border-color','green');
        }
        else
        {
          $('#lginmbl').css('border-color','red');
        }
    });
    $('#uregname').focusout(function(){
      var usernmbr =$("#uregname").val();
        if(usernmbr !='')
        {
          $('#uregname').css('border-color','green');
        }
        else
        {
          $('#uregname').css('border-color','red');
        }
    });
    $('#uregname').keyup(function(){
        var usernmbr =$("#uregname").val();
        if(usernmbr !='')
        {
          $('#uregname').css('border-color','green');
        }
        else
        {
          $('#uregname').css('border-color','red');
        }
    });
    $('#uregemail').keyup(function(){
        var useremail =$("#uregemail").val();
        // console.log(uregemail);
        if(useremail !='')
        {
          $('#uregemail').css('border-color','green');
        }
        else
        {
          $('#uregemail').css('border-color','red');
        }
    });
    $('#useregemail').focusout(function(){
      var useremail =$("#useregemail").val();
      // console.log('hi');
        if(useremail !='')
        {
          $('#useregemail').css('border-color','green');
        }
        else
        {
          $('#useregemail').css('border-color','red');
        }
    });
    $('#userpassword').focusout(function(){
      var userpaswrd =$("#userpassword").val();
      // console.log('hi');
        if(userpaswrd !='')
        {
          $('#userpassword').css('border-color','green');
        }
        else
        {
          $('#userpassword').css('border-color','red');
        }
    });
    $('#userpassword').keyup(function(){
        var userpaswrd =$("#userpassword").val();
        // console.log(userpaswrd);
        if(userpaswrd !='')
        {
          $('#userpassword').css('border-color','green');
        }
        else
        {
          $('#userpassword').css('border-color','red');
        }
    });
    $('#signupmob').focusout(function(){
      var userpmob =$("#signupmob").val();
      // console.log('hi');
        if(userpmob !='')
        {
          $('#signupmob').css('border-color','green');
        }
        else
        {
          $('#signupmob').css('border-color','red');
        }
    });
    $('#userotp').focusout(function(){
      var userpotp =$("#userotp").val();
      // console.log('hi');
        if(userpotp !='')
        {
          $('#userotp').css('border-color','green');
        }
        else
        {
          $('#userotp').css('border-color','red');
        }  
    });
    $('#signupuser').click(function(){
       var signupinmbr =$("#uregname").val();
       // console.log(signupinmbr)
        if(signupinmbr !='')
        {
          $('#uregname').css('border-color','green');
        }
        else
        {
          $('#uregname').css('border-color','red');
        }
    });
    $('#signupuser').click(function(){
       var signupemail =$("#useregemail").val();
       // console.log(signupemail)
        if(signupemail !='')
        {
          $('#useregemail').css('border-color','green');
        }
        else
        {
          $('#useregemail').css('border-color','red');
        }
    });
    $('#signupuser').click(function(){
       var signuppwd =$("#userpassword").val();
       // console.log(signuppwd)
        if(signuppwd !='')
        {
          $('#userpassword').css('border-color','green');
        }
        else
        {
          $('#userpassword').css('border-color','red');
        }
    });
//Validation Login Border red color of USER END

// Validation Of KITCHEN BORDER COLOR RED START
    $('#kitlginsbmt').click(function(){
       var lginmbr =$("#kitlgin").val();
        if(lginmbr !='')
        {
          $('#kitlgin').css('border-color','green');
        }
        else
        {
          $('#kitlgin').css('border-color','red');
        }
    });
      $('#kitlgin').focusout(function(){
      var lginmbr =$("#kitlgin").val();
        if(lginmbr !='')
        {
          $('#kitlgin').css('border-color','green');
        }
        else
        {
          $('#kitlgin').css('border-color','red');
        }
    });
    $('#kitlgin').keyup(function(){
        var lginmbr =$("#kitlgin").val();
        if(lginmbr !='')
        {
          $('#kitlgin').css('border-color','green');
        }
        else
        {
          $('#kitlgin').css('border-color','red');
        }
    });
    $('#kitlginsbmt').click(function(){
       var kitpswrd =$("#kitlginpswrd").val();
        if(kitpswrd !='')
        {
          $('#kitlginpswrd').css('border-color','green');
        }
        else
        {
          $('#kitlginpswrd').css('border-color','red');
        }
    });
    $('#kitlginpswrd').focusout(function(){
      var kitpswrd =$("#kitlginpswrd").val();
        if(kitpswrd !='')
        {
          $('#kitlginpswrd').css('border-color','green');
        }
        else
        {
          $('#kitlginpswrd').css('border-color','red');
        }
    });
    $('#kitlginpswrd').keyup(function(){
        var kitpswrd =$("#kitlginpswrd").val();
        if(kitpswrd !='')
        {
          $('#kitlginpswrd').css('border-color','green');
        }
        else
        {
          $('#kitlginpswrd').css('border-color','red');
        }
      });
// Validation of KItchen Register START
    $('#signupkit').click(function(){
       var kitregunme =$("#kituname").val();
        if(kitregunme !='')
        {
          $('#kituname').css('border-color','green');
        }
        else
        {
          $('#kituname').css('border-color','red');
        }
    });
    $('#kituname').focusout(function(){
      var kitregunme =$("#kituname").val();
        if(kitregunme !='')
        {
          $('#kituname').css('border-color','green');
        }
        else
        {
          $('#kituname').css('border-color','red');
        }
    });
    $('#kituname').keyup(function(){
        var kitregunme =$("#kituname").val();
        if(kitregunme !='')
        {
          $('#kituname').css('border-color','green');
        }
        else
        {
          $('#kituname').css('border-color','red');
        }
      });
    $('#signupkit').click(function(){
       var kitregemail =$("#kituemail").val();
        if(kitregemail !='')
        {
          $('#kituemail').css('border-color','green');
        }
        else
        {
          $('#kituemail').css('border-color','red');
        }
    });
    $('#kituemail').focusout(function(){
      var kitregemail =$("#kituemail").val();
        if(kitregemail !='')
        {
          $('#kituemail').css('border-color','green');
        }
        else
        {
          $('#kituemail').css('border-color','red');
        }
    });
    $('#kituemail').keyup(function(){
        var kitregemail =$("#kituemail").val();
        if(kitregemail !='')
        {
          $('#kituemail').css('border-color','green');
        }
        else
        {
          $('#kituemail').css('border-color','red');
        }
    });
    $('#signupkit').click(function(){
       var kitregpwd =$("#kitpwd").val();
        if(kitregpwd !='')
        {
          $('#kitpwd').css('border-color','green');
        }
        else
        {
          $('#kitpwd').css('border-color','red');
        }
    });
    $('#kitpwd').focusout(function(){
      var kitregpwd =$("#kitpwd").val();
        if(kitregpwd !='')
        {
          $('#kitpwd').css('border-color','green');
        }
        else
        {
          $('#kitpwd').css('border-color','red');
        }
    });
    $('#kitpwd').keyup(function(){
        var kitregpwd =$("#kitpwd").val();
        if(kitregpwd !='')
        {
          $('#kitpwd').css('border-color','green');
        }
        else
        {
          $('#kitpwd').css('border-color','red');
        }
    });
    $('#kitmblotp').focusout(function(){
      var kitregpwd =$("#kitmblotp").val();
        if(kitregpwd !='')
        {
          $('#kitmblotp').css('border-color','green');
        }
        else
        {
          $('#kitmblotp').css('border-color','red');
        }
    });
    $('#kitchenterotp').focusout(function(){
      var kitpotp =$("#kitchenterotp").val();
      // console.log('hi');
        if(kitpotp !='')
        {
          $('#kitchenterotp').css('border-color','green');
        }
        else
        {
          $('#kitchenterotp').css('border-color','red');
        }
    });

// Validation of KItchen Register START
// Validation Of KITCHEN BORDER COLOR RED START
  })
