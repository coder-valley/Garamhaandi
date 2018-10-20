<style>
	.imagedash{
		width: 50%;
	}
	
	.leftside{
		text-align: center;
	}
	.rightside{
		text-align: right;
	}
	.Date{
		font-weight: 900;
		font-size: 20px;
		background-color: #0c786b;
		color: white;
		text-align: center;
	}
	.hover:hover{
		opacity: 1!important;

	}
</style>
<link rel="stylesheet" type="text/css" href="/GaramHaandi/Newfolder/style.css">



<section>
	<div class="container">   
	  <div class="row m-t-40 m-b-20" style="margin-top: 55px">
	    <div class="col-md-12 aboutheadmain m-b-50 headimage">
	      <h3 class="text-center">Dashboard</h3>
	      <p class="text-center">Your Order History</p>
	    </div>
	    <div class="col-md-12">
	      <div class="row">
	        <?php echo $this->element('frontElements/user_sidebar');?>
	        <div class="col-md-9 aboutheadmain m-b-50" style="padding-left:10px!important;">
	        
	        	<div class="col-md-12">
					<h2><b>Track Your Order</b></h2><br>
					 <br>
					<!--<b> Chicken Shezwan<br>
					Momos (Steamed)<br></b>-->
					<span class="trackorder"></span> <br>
					
					<div class="col-md-3"><img src="<?php echo HTTP_ROOT?>img/order.jpg" style="height: 40px"><p style="color: black; margin-left: -5%;">Order Received</p></div>
					<div class="col-md-3" style="padding-left: 70px;"><img src="<?php echo HTTP_ROOT?>img/getting_hotter.jpg" style="height: 40px"><p style="color: black; margin-left: -6%;">Getting Hot</p>
 					</div>

					<div class="col-md-3" style="padding-left: 102px;"><img src="<?php echo HTTP_ROOT?>img/on_its_way.png" style="height: 40px"><p style="color: black; margin-left: -5%;">On Its Way</p></div>
					<div class="col-md-3" style="padding-left: 137px;"><img src="<?php echo HTTP_ROOT?>img/delivered.png" style="height: 40px"><p style="color: black; margin-left: -4%;">Delivered</p></div>
						
					
	        	</div>
	        	<div class="col-md-12">
	        	<img src="">
	        	<div class="row" style="padding-bottom: 10px">
	        		<div class="col-md-6">
	        		<div class="yourorder">
            <h5 class="m-t-5 m-b-15"><b>Shipping Address</b></h5>
            
              <div class="order-list">
              	<table width="100%">
	        	
	        		<tr>
	        			<td>
	        				C-164, Beta 1,<br>
	        				Greater Noida, U.P
	        			</td>
	        			
	        		</tr>

	        	</table>
              </div>
            
           
            
          </div>
	        	</div>
	        	<div class="col-md-6">
	        		<div class="yourorder">
            <h5 class="m-t-5 m-b-15"><b>Delivery Address</b></h5>
            
              <div class="order-list">
              	<table width="100%">
	        	
	        		<tr>
	        			<td>
	        				C-164, Beta 1,<br>
	        				Greater Noida, U.P
	        			</td>
	        			
	        		</tr>

	        	</table>
              </div>
            
           
            
          </div>
	        	</div>
	        	
	        	</div>
	        	





	        	<div class="yourorder">
            <h5 class="m-t-5 m-b-15"><b>Your Order</b></h5>
            
              <div class="order-list">
              	<table width="810">
	        	
	        		<tr>
	        			<td>
	        				Chicken Shezwan
	        			</td>
	        			<td>
	        				1 x ₹ 100
	        			</td>
	        			<td class="pull-right">
	        				₹ 100
	        				</td>
	        		</tr>
	        		<tr>
	        			<td>
	        				Momos (Steamed)
	        			</td>
	        			<td>
	        				1 x ₹ 40
	        			</td>
	        			<td class="pull-right">
	        				₹ 40
	        				</td>
	        		</tr>
	        		
	        		<tr>
	        			<td>
	        				Tax
	        			</td>
	        			<td>
	        				G.S.T 18%
	        			</td>
	        			<td class="pull-right">
	        				₹ 25.2
	        			</td>
	        		</tr>

	        	</table>
              </div>
            
            <h6 style="font-size: 120%;">Total<span class="pull-right" id="total-price"><b>₹ 165.2<b></span></h6>
            
          </div>
	        </div>
	        <br>
	        <!--<span style="font-weight: 900; font-size: 25px; padding-left: 10px">Total: 140rs</span>-->
	        <div class="container col-md-12">
 				<h2><b>Previous Orders</b></h2>
 	<div style="border: 1px solid lightgrey;margin-right: -6px!important;padding: 10px;" class="row">
 		<div class="col-md-6">
 			<span class="a">Order Id: 1101</span>
 		</div>
 		<div class="col-md-6" style="text-align: right!important">
 			<span class="a">Order Date: 13 sep 2017</span>
 		</div>
	
	<br>
	<hr>
	<!-- <span class="b">Package was handed directly to customer</span> -->
	
	<div class="row">
		<div class="col-md-12">
			<br><table style="width: 100%;margin-left: 18px;">
				<tr>
					<td><span style="color: #0C786B!important;">Kadai Paneer, Dal Makhni, 3 Chapati, Rice</span></td>
					<td><span> ₹ 895.00</span></td>
					
				</tr>
			</table><br>
		</div>	
	</div>
	<hr>
	<div class="row">
	<div class="col-md-8">
		<button class="btn btn-primary hover" style="margin-left: 18px; background-color: #990002; outline: none">Cancelled</button>
	</div>
	<div class="col-md-4" style="text-align: right">
		<a href="<?php echo HTTP_ROOT.'/Homes/menu'?>"><button class="btn btn-primary buttoncolor" style="outline: none">Order Again</button></a>
	</div>
	</div>
	</div>
	<br>
	<div style="border: 1px solid lightgrey;margin-right: -6px!important;padding: 10px;" class="row">
		<div class="col-md-6">
 			<span class="a">Order Id: 1101</span>

 		</div>
 		<div class="col-md-6" style="text-align: right!important">
 			<span class="a">Order Date: 13 sep 2017</span>
 		</div>
	<br>
	<hr>
	<!-- <span class="b">Package was handed directly to customer</span> -->
	
	<div class="row">
		<div class="col-md-12">
			<br><table style="width: 100%;margin-left: 18px;">
				<tr>
					<td><span style="color: #0C786B!important;">Kadai Paneer, Dal Makhni, 3 Chapati, Rice</span></td>
					<td><span> ₹ 895.00</span></td>
					
				</tr>
			</table><br>
		</div>	
	</div>
	<hr>
	
	<div class="row">
	<div class="col-md-8">
		<button class="btn btn-primary hover" style="margin-left: 18px; background-color: #29a79c; border-color: #29a79c;outline: none">Delivered</button>
	</div>
	<div class="col-md-4" style="text-align: right;">
		<a href="<?php echo HTTP_ROOT.'/Homes/menu'?>"><button class="btn btn-primary buttoncolor">Order Again</button></a>
	</div>
	</div>
	</div>
	
	  
</section>