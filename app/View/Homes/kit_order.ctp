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
</style>




<section>
	<div class="container">   
	  <div class="row m-t-40 m-b-20" style="margin-top:55px">
	    <div class="col-md-12 aboutheadmain m-b-50 headimage">
	      <h3 class="text-center">Dashboard</h3>
	      <p class="text-center">Welcome to GaramHaandi</p>
	    </div>
	    <div class="col-md-12">
	      <div class="row">
	        <div class="col-md-3 aboutheadmain m-b-50 leftside">
	        	<?php echo $this->element('frontElements/sidebar');?>
	        </div>
	        <div class="col-md-9 aboutheadmain m-b-50" style="padding-left:10px!important;">
	        
	        	<div class="col-md-12">
					<h2><b>Your Order History</b></h2><br>
	        	</div>
	        <div class="container col-md-12">
  					<table class="table table-hover">
   				 <thead>
    				  <tr>
       					 <th>#</th>
      					  <th>Name</th>
      					  <th>Item</th>
      					  <th>Quantity</th>
      					  <th>Address</th>
      					  <th>Price</th>
     				 </tr>
    			</thead>
   				 <tbody>
    			  <tr>
     				   <td>1</td>
     				   <td>A</td>
     				   <td>Kadhai paneer, Chilly Paneer</td>
     				   <td>2</td>
     				   <td>C-164</td>
     				   <td>430 rupees</td>
     				 </tr>
     				 <tr>
    				    <td>2</td>
     				   <td>Test</td>
     				   <td>Fried Rice, Chilly Paneer</td>
     				   <td>4</td>
     				   <td>C-164</td>
     				   <td>500 rupees</td>
   				   </tr>
  				  </tbody>
 				 </table>
				</div>
	        </div>
	      </div>
	      </div>

	    </div>
	  </div>
	  
</section>