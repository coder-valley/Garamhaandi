<style type="text/css">
  .subsborder{
    border-right: solid 1px;
    border-color: lightgrey;
    margin-left: 7%;
    text-decoration: none!important;
  }
  .asubs:hover{
    text-decoration: none;
  }
  .asubs{
    color: #0c786b!important;
  }
  .asubs, select{
    text-decoration: none!important;
  }
  .spanhoversubs:hover{
    border:solid 1px;
    border-color: #0c786b;
    border-radius: 5px;
    padding-left: 44px;
  }
  .asubs:visited{
    color: red;
  }
  


  input[type=text] {
    
    
    margin: 8px 0;
    display: inline-block;
    border-bottom: 1px solid #ccc;
    border-top: none;
    border-left: none;
    border-right: none; 
    border-radius: 4px;
    outline: none!important;
    
  }
  .offerimage{
    min-height: 200px;
  }



  .button1234 {
  display: inline-block;
  border-radius: 4px;
  background-color: #0c786b!important;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 16px;
  padding: 7px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button1234 .span1234 {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button1234 .span1234:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button1234:hover .span1234 {
  padding-right: 25px;
}

.button1234:hover .span1234:after {
  opacity: 1;
  right: 0;
}
.button-clicked{
  border:solid 1px;
  border-color: #0c786b;
  border-radius: 5px;
  padding-left: 44px;
}
.button-clicked:active{
  border:solid 1px;
  border-color: #0c786b;
  border-radius: 5px;
  padding-left: 44px;
}

 
</style>
<div>
  <img src="<?php echo HTTP_ROOT?>img/Kitchen1.jpg">
</div>


<section>
  <div class="row">
  <div class="col-md-12 text-center">
    
    <hr>
  </div>
</div>
<div class="row">
  <div class="col-md-2 subsborder" >
    <div class="spanhoversubs button-clicked" id="buttonsubsonclick"><a class="asubs" href="#"><h4><b>Basic Details</b></h4></a></div><br>
    <div class="spanhoversubs"><a class="asubs" href="<?php echo HTTP_ROOT.'/Homes/subscribe1'?>"><h4><b>Select Meal</b></h4></a></div><br>
    <div class="spanhoversubs"><a class="asubs" href="<?php echo HTTP_ROOT.'/Homes/subscribe2'?>"><h4><b>Payment</b></h4></a></div><br>
  </div>
  <div class="col-md-9">
    <div class="row" style="padding-left: 127px;padding-bottom: 30px;">
      <div class="col-md-6">
        <h6>Name</h6>
        <h4>XYSSSSSS</h4><br><br>
        <h6>Select Locality</h6>
        <h4><input type="text" row="2" name="" placeholder="Start typing here...."></h4><br><br>
      </div>
      <div class="col-md-6">
        <h6>Mobile Number</h6>
        <h4>123456789</h4><br><br>
        <h6>Delivery Address</h6>
        <h4><input type="text" row="2" name=""></h4>
        
        
        <a href="<?php echo HTTP_ROOT.'/Homes/subscribe1'?>"><button class="btn btn-primary buttoncolor" style="vertical-align:middle; width: 20%;"><span><b>Next </b></span></button></a>
      </div>
    </div>
  </div>
</div>
</section>


<script type="text/javascript">
  $("#buttonsubsonclick").click(function() {
  $("#buttonsubsonclick").addClass('button-clicked');
});
</script>













































<!-- <style type="text/css">
  body {
  margin: 0;
  font-family: inherit;
  font-size: 14px;
  
}

/*h3 {
  color: #fff;
  font-size: 24px;
  text-align: center;
  margin-top: 30px;
  padding-bottom: 30px;
  border-bottom: 1px solid #eee;
  margin-bottom: 30px;
  font-weight: 300;
}*/

.container {
  max-width: 970px;
}



.wrap {
  box-shadow: 0px 2px 2px 0px rgba(0, 0, 0, 0.14), 0px 3px 1px -2px rgba(0, 0, 0, 0.2), 0px 1px 5px 0px rgba(0, 0, 0, 0.12);
  border-radius: 4px;
}

a:focus,
a:hover,
a:active {
  outline: 0;
  text-decoration: none;
}

.panel {
  border-width: 0 0 1px 0;
  border-style: solid;
  border-color: #fff;
  background: none;
  box-shadow: none;
}

.panel:last-child {
  border-bottom: none;
}

.panel-group > .panel:first-child .panel-heading {
  border-radius: 4px 4px 0 0;
}

.panel-group .panel {
  border-radius: 0;
}

.panel-group .panel + .panel {
  margin-top: 0;
}

.panel-heading {
  background-color: #009688;
  border-radius: 0;
  border: none;
  color: #fff;
  padding: 0;
}

.panel-title a {
  display: block;
  color: #fff;
  padding: 15px;
  position: relative;
  font-size: 16px;
  font-weight: 400;
}

.panel-body {
  background: #fff;
}

.panel:last-child .panel-body {
  border-radius: 0 0 4px 4px;
}

.panel:last-child .panel-heading {
  border-radius: 0 0 4px 4px;
  transition: border-radius 0.3s linear 0.2s;
}

.panel:last-child .panel-heading.active {
  border-radius: 0;
  transition: border-radius linear 0s;
}
/* #bs-collapse icon scale option */

.panel-heading a:before {
  position: absolute;
  font-family: 'Material Icons';
  right: 5px;
  top: 10px;
  font-size: 24px;
  transition: all 0.5s;
  transform: scale(1);
}

.panel-heading.active a:before {
  content: ' ';
  transition: all 0.5s;
  transform: scale(0);
}

#bs-collapse .panel-heading a:after {
  content: ' ';
  font-size: 24px;
  position: absolute;
  font-family: 'Material Icons';
  right: 5px;
  top: 10px;
  transform: scale(0);
  transition: all 0.5s;
}

#bs-collapse .panel-heading.active a:after {
  content: '\e909';
  transform: scale(1);
  transition: all 0.5s;
}
/* #accordion rotate icon option */

#accordion .panel-heading a:before {
  
  font-size: 24px;
  position: absolute;
  font-family: 'Material Icons';
  right: 5px;
  top: 10px;
  transform: rotate(180deg);
  transition: all 0.5s;
}

#accordion .panel-heading.active a:before {
  transform: rotate(0deg);
  transition: all 0.5s;
}

.paddingfull{
  padding: 100px 30px;
}
.textbox{
  border: solid 1px;
  border-color: lightgrey;
  padding: 7px 11px;
  border-radius: 5px;
  width: 70%;
}

#owl-demo .item{
  background: #29a79c;
  padding: 30px 0px;
  margin: 10px;
  color: #FFF;
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  border-radius: 3px;
  text-align: center;
}
.h3address{
  margin-left: 0px;
  margin-top: -30px;
}
.item:hover{
  border:solid 2px;
  border-color: #0c786b;
  cursor: pointer;
}



.buttonsubs {
  display: inline-block;
  border-radius: 4px;
  background-color: inherit;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 23px;
  padding: 24px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.buttonsubs .spansubs {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.buttonsubs .spansubs:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.buttonsubs:hover .spansubs {
  padding-right: 25px;
}

.buttonsubs:hover .spansubs:after {
  opacity: 1;
  right: 0;
}

.dropbtn 
{
  color: grey;
  font-size: 27px;
  cursor: pointer;
  width: 303px;
  margin-top: 0px;
}

.dropdown 
{
  position: relative;
  display: inline-block;
}

.dropdown-content 
{
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 303px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a 
{
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content 
{
  display: block;
}

.dropdown:hover .dropbtn 
{
  background-color: white;
}

.buttonsubs1
{
  background-color: white !important;
  border-color: #29a79c;
  color: black
}
.buttonsubs1:hover{
  background-color: #29a79c !important;
  border-color: #29a79c;
  color: white;
}
.buttonsubs1:after{
  background-color: #29a79c;
}

.buttonsubs1, select{
  color: black!important;
}

.buttonmenu{
  background-color: #29a79c!important;
  border-color: #29a79c!important;
}
.buttonmenu:hover{
  background-color: #29a79c!important;
  border-color: #29a79c!important;
}


</style>





<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.css">
 

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.css">
 

<script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
 

<script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.js"></script>



<div class="row">
   <div class="col-md-4 paddingfull">
    <h2>HOW IT WORKS?</h2>
    <ol type="1">
      <h3><li>Choose your address</li></h3>
      <h3><li>Select your meal minimum 5, maximum 7</li></h3>
      <h3><li>Select time for delivery</li></h3>
      <h3><li>Pay</li></h3>
    </ol> 
    <h2><b>Easy & hassle free ordering</b></h2> 
  </div> 
  <div class="col-md-6 col-sm-12 paddingfull">
   
    <div class="panel-group wrap" id="accordion" role="tablist" aria-multiselectable="true">
      <div class="panel">
        <div class="panel-heading" role="tab" id="headingOne">
          <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Basic Details
        </a>
      </h4>
        </div>
        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
          <div class="panel-body">
            <div class="row">
              <div class="col-md-6">
                <div class="row">
                  <div class="col-md-3">
                    <h4><b>Name</b></h4>
                  </div>
                  <div class="col-md-9">
                    <h4><input class="textbox" type="text" name="name" value="<?php echo $uinfo['User']['name']; ?>" readonly></h4>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="row">
                  <div class="col-md-3">
                    <h4><b>Mobile</b></h4>
                  </div>
                  <div class="col-md-9">
                    <h4><input class="textbox" type="text" name="mobile" value="<?php echo $uinfo['User']['contact_no']; ?>" readonly></h4>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
               <div class="form-group">
                 <h4><label for="comment">Write Your Address</label></h4>
                 <textarea class="form-control" rows="5" id="comment" placeholder="Write your address here"></textarea>
               </div>
              </div>
              <div class="col-md-6">
                
              </div>
              <div class="row">

                <div class="col-md-12">
                  <div id="owl-demo" class="owl-carousel owl-theme">
                    <div class="item">
                      <div class="h3address"><h3 class="text-center">Address 1</h3></div>
                      <span>C-164,<br>Beta-1,<br>Greater Noida,<br>U.P (201308)</span>
                    </div>
                    <div class="item">
                      <div class="h3address"><h3>Address 2</h3></div>
                      <span>C-164,<br>Sector-31,<br>Noida,<br>U.P (201301)</span>
                    </div>
                    <div class="item">
                      <button class="buttonsubs" style="vertical-align:middle"><span class="spansubs">Add address </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      

      <div class="panel">
        <div class="panel-heading" role="tab" id="headingTwo">
          <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Select Your Choice
        </a>
      </h4>
        </div>
        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
          <div class="panel-body">
            <div class="row">
              <div class="col-md-6">
                <div class="row">
                  <div class="col-md-5">
                    <h4><b>Food Preferences </b></h4>
                  </div>
                  <div class="col-md-7">
                    <h4>
                      <form>
                      <div class="form-group" style="margin-top: -23px;">
                        <label for="sel1"></label>
                        <select class="form-control" id="sel1">
                          <option>Vegetarian</option>
                          <option>Non-Vegetarian</option>
                        </select>
                      
                      </div>
                      </form>
                    </h4>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="row">
                  <div class="col-md-5">
                    <h4><b>Meal Type</b></h4>
                  </div>
                  <div class="col-md-7">
                    <h4>
                      <form>
                      <div class="form-group" style="margin-top: -23px;">
                        <label for="sel1"></label>
                        <select class="form-control" id="sel1">
                          <option>Breakfast</option>
                          <option>Lunch</option>
                          <option>Dinner</option>
                        </select>
                      
                      </div>
                      </form>
                    </h4>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <h4><b>Menu For 7 Days</b></h4>
                <div>
                  <div class="container">
                      <div class="row">
                        <div class="col-md-4">
                                <div class="well">
                                <h2 class="muted">Menu 1</h2>
                                <p><span class="label">POPULAR</span></p>
                                <div class="row">
                                  <div class="col-md-3">
                                    <b>Monday</b><br>
                                    <b>Tuesday</b><br>
                                    <b>Wednesday</b><br>
                                    <b>Thursday</b><br>
                                    <b>Friday</b><br>
                                    <b>Saturday</b><br>
                                    <b>Sunday</b><br>
                                  </div>
                                  <div class="col-md-9">
                                    <ul>
                                      <li>Omlette</li>
                                      <li>Toast</li>
                                      <li>Sausage links</li>
                                      <li>Turkey sausage</li>
                                      <li>Canadian bacon</li>
                                      <li>Sausage patties</li>
                                      <li>Sandwich</li>
                                    </ul>    
                                  </div>
                                </div>
                                      
                                <p>List goes from monday to sunday</p>
                                <hr>
                                <h3>₹600 / week</h3>
                                <hr>
                                <p><a class="btn btn-large btn-primary buttonmenu" href="#"><i class="icon-ok"></i> Select Menu</a></p>
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="well">
                                <h2 class="text-warning">Menu 2</h2>
                                <p><span class="label label-success">POPULAR</span></p>
                                <div class="row">
                                  <div class="col-md-3">
                                    <b>Monday</b><br>
                                    <b>Tuesday</b><br>
                                    <b>Wednesday</b><br>
                                    <b>Thursday</b><br>
                                    <b>Friday</b><br>
                                    <b>Saturday</b><br>
                                    <b>Sunday</b><br>
                                  </div>
                                  <div class="col-md-9">
                                    <ul>
                                      <li>Omlette</li>
                                      <li>Toast</li>
                                      <li>Sausage links</li>
                                      <li>Turkey sausage</li>
                                      <li>Canadian bacon</li>
                                      <li>Sausage patties</li>
                                      <li>Sandwich</li>
                                    </ul>    
                                  </div>
                                </div>       
                                <p>List goes from monday to sunday</p>
                                <hr>
                                <h3>₹900 / week</h3>
                                <hr>
                                <p><a class="btn btn-success btn-large buttonmenu" href="#"><i class="icon-ok"></i> Select Menu</a></p>
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="well">
                                <h2 class="text-info">Menu 3</h2>
                                <p><span class="label label-info">BUDGET</span></p>
                                <div class="row">
                                  <div class="col-md-3">
                                    <b>Monday</b><br>
                                    <b>Tuesday</b><br>
                                    <b>Wednesday</b><br>
                                    <b>Thursday</b><br>
                                    <b>Friday</b><br>
                                    <b>Saturday</b><br>
                                    <b>Sunday</b><br>
                                  </div>
                                  <div class="col-md-9">
                                    <ul>
                                      <li>Omlette</li>
                                      <li>Toast</li>
                                      <li>Sausage links</li>
                                      <li>Turkey sausage</li>
                                      <li>Canadian bacon</li>
                                      <li>Sausage patties</li>
                                      <li>Sandwich</li>
                                    </ul>    
                                  </div>
                                </div>         
                                <p>List goes from monday to sunday</p>
                                <hr>
                                <h3>₹450.99 / week</h3>
                                <hr>
                                  <p><a class="btn btn-large btn-primary buttonmenu" href="#"><i class="icon-ok"></i> Select Menu</a></p>
                              </div>
                            </div>
                      </div>
                    </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <h4><b>Time Slots</b></h4>
                <div class="row">
                  <div class="col-md-3">
                    <button type="button" class="btn btn-primary buttonsubs1">09:00 am - 09:30 am</button>
                  </div>
                  <div class="col-md-3">
                    <button type="button" class="btn btn-primary buttonsubs1">09:30 am - 10:00 am</button>
                  </div>
                  <div class="col-md-3">
                    <button type="button" class="btn btn-primary buttonsubs1">10:00 am - 10:30 am</button>
                  </div>
                  <div class="col-md-3">
                    <button type="button" class="btn btn-primary buttonsubs1">10:30 am - 11:00 am</button>
                  </div>
                  <div class="col-md-3">
                    <button type="button" class="btn btn-primary buttonsubs1">11:00 am - 11:30 am</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      

      <div class="panel">
        <div class="panel-heading" role="tab" id="headingThree">
          <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Review Your Order
        </a>
      </h4>
        </div>
        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
          <div class="panel-body">
            <div class="row">
              <div class="col-md-6">
                <h4><b>Your Order</b></h4>
                <img style="padding-left: 9%; padding-bottom: 6%;" src="<?php echo HTTP_ROOT?>img/subsbreak.png">
                <div class="col-md-8" style="margin-left: -15px;">
                <input style=" width: 100%!important; font-size: 18px" type="text" name="coupon" class="textbox" placeholder="Write coupon code here">
              </div>
              <div class="col-md-4" style="margin-top: -7px;">
                <button style="background-color: #29a79c; border-color: #29a79c" class="btn-primary btn"><span style=" font-size: 18px">Apply</span></button>
              </div>
              </div>
              
              <div class="col-md-6" style="border-left: solid 1px; border-color: lightgrey">
                
                    <div class="panel panel-default">
                      <div class="panel-body">
                        <div class="col-md-12">
                          <h4><strong>Subtotal (Breakfast)</strong></h4>
                          <h4><div class="pull-right"><span>$</span><span>200.00</span></div></h4>
                          <hr>
                        </div>
                        <div class="col-md-12">
                          <h4><strong>Tax</strong></h4>
                          <h4><div class="pull-right"><span>$</span><span>200.00</span></div></h4>
                          <hr>
                        </div>
                        <div class="col-md-12">
                          <h4>Shipping
                          <div class="pull-right"><span>33</span></div></h4>
                        </div>
                        <div class="col-md-12">
                          <h4><strong>Order Total</strong>
                          <b><div class="pull-right"><span>$</span><span>150.00</span></div></b></h4>
                        </div>
                        <h4><button style="background-color: #29a79c!important; color: white!important; width: 40%!important; margin-top: 35px" type="button" class="btn btn-primary btn-lg btn-block buttonsubs1 pull-right">Checkout</button></h4>
                      </div>    
                    </div>
                    
              </div>
            </div>
          </div>
        </div>
      </div>
      
    </div>
    

</div>
</div>
 -->


<!-- <script type="text/javascript">
    $(document).ready(function() {
  $('.collapse.in').prev('.panel-heading').addClass('active');
  $('#accordion, #bs-collapse')
    .on('show.bs.collapse', function(a) {
      $(a.target).prev('.panel-heading').addClass('active');
    })
    .on('hide.bs.collapse', function(a) {
      $(a.target).prev('.panel-heading').removeClass('active');
    });
});
</script>

<script type="text/javascript">
    $(document).ready(function() {
 
  $("#owl-demo").owlCarousel({
    navigation : true
  });
 
  });
</script> -->