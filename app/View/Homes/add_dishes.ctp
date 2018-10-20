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
	.error 
	{
		color: red;
	}
	.imgerror
	{
		color: red!important;
		font-weight: 700!important;
		/*display: none;*/
	}
</style>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>

<section>
	<div class="container">   
	  <div class="row m-t-40 m-b-20" style="margin-top: 55px">
	    <div class="col-md-12 aboutheadmain m-b-50 headimage">
	      <h3 class="text-center">Dashboard</h3>
	      <p class="text-center">Add New Dishes</p>
	    </div>
	    <div class="col-md-12">
	      <div class="row">
	        <div class="col-md-3 aboutheadmain m-b-50 leftside">
	        	<?php echo $this->element('frontElements/sidebar');?>
	        </div>
	        <div class="col-md-9 aboutheadmain m-b-50" style="padding-left:10px!important;">
	        
	        	<div class="col-md-12">
					<h2><b>Add New Dishes</b></h2><br>
	        	</div>
	        <div class="container col-md-12">
	        <form name="myform" id="tableFrm123" class="pager-form" method="post"  action="" enctype="multipart/form-data">
  				<table class="table table-hover">
   					<tbody>
   						<tr>
	     				 	<td>
								<label class="desc" >Title<em style="color:red;">*</label>
							</td>
							<td>
								<input class="field form-control text full"  name="data[Food][title]" type="text" required>
								<div style="color:red;float:left;" id="respon"></div>
							</td>
	   				   	</tr>
   						<tr>
	     				 	<td>
								<label class="desc" >Description<em style="color:red;">*</label>
							</td>
							<td>
								<textarea class="field form-control text full" name="data[Food][description]" type="text" required></textarea>
								<div style="color:red;float:left;" id="respon"></div>
							</td>
	   				   	</tr>
	   				   	<tr>
	   				   		<td>
	   				   			<label class="desc">Category<em style="color:red;">*</label>
	   				   		</td>
							<td>
								<div>
								    <select class="form-control" name="data[Food][category]" required>
								    <option disabled="disabled" selected="selected" value="">select</option>
								    <option value="Monday">Monday</option>
									<option value="Tuesday">Tuesday</option>
									<option value="Wednesday">Wednesday</option>
									<option value="Thursday">Thursday</option>
									<option value="Friday">Friday</option>
									<option value="Saturday">Saturday</option>
									<option value="Sunday">Sunday</option>
									</select> 
								</div>
							</td>
						</tr>
						<tr>
	   				   		<td>
	   				   			<label class="desc">SubCategory<em style="color:red;">*</label>
	   				   		</td>
							<td>
								<div>
									<select class="form-control" name="data[Food][subcategory]" required>
										<option disabled="disabled" selected="selected" value="">select</option>
										<option value="Breakfast">Breakfast</option>
										<option value="Lunch">Lunch</option>
										<option value="Snacks">Snacks</option>
										<option value="Dinner">Dinner</option>
									</select> 
								</div>
							</td>
						</tr>
						<tr>
	   				   		<td>
	   				   			<label class="desc">Type<em style="color:red;">*</label>
	   				   		</td>
							<td>
								<div>
									<label class="radio-inline remove">
        								<input type="radio" required value="0" name="data[Food][type]">Veg
        							</label>
     								<label class="radio-inline remove">
   										<input type="radio" value="1" name="data[Food][type]">NonVeg
       								</label>     
								</div>
							</td>
						</tr>
						<tr>
	   				   		<td>
	   				   			<label class="desc">Price<em style="color:red;">*</label>
	   				   		</td>
							<td>
								<div>
									<input class="field form-control text full" maxlength="4" id="description" name="data[Food][price]" type="numbers" required onkeyup="this.value=this.value.replace(/[^\d]/,'')">
								</div>
							</td>
						</tr>
	     				<tr>
	     				 	<td>
								<label class="desc" >Image<em style="color:red;">*</label>
							</td>
							<td>
								<input class="field text full required" required id="fileUpload" name="image" type="file">
								<p class="imgerror">Height and Width of image must be 300*300 pixels.</p>
							</td>
	   				   	</tr>
  				  	</tbody>
 				</table>
 				<div class="center">
 					<input type="submit" id="upload" class="btn btn-primary buttoncolor" style="margin-left: 28%;" value="Submit">
 				</div>
 				</form>
			</div>
	        </div>
	      </div>
	      </div>

	    </div>
	  </div>
</section>

<script type="text/javascript" src="/GaramHaandi/js/common/jquery.validate.js"></script>
<script type="text/javascript">
  $('#tableFrm123').validate();
</script>
<script type="text/javascript">
$(function () {
	$('.imgerror').hide();
    $("#fileUpload").on('change', function () {
        //Get reference of FileUpload.
        var fileUpload = $("#fileUpload")[0];

        //Check whether the file is valid Image.
        var regex = new RegExp("([a-zA-Z0-9\s_\\.\-:])+(.jpg|.png|.gif)$");
        if (regex.test(fileUpload.value.toLowerCase())) 
        {

            //Check whether HTML5 is supported.
            if (typeof (fileUpload.files) != "undefined") 
            {
                //Initiate the FileReader object.
                var reader = new FileReader();

                //Read the contents of Image File.
                reader.readAsDataURL(fileUpload.files[0]);
                reader.onload = function (e) {

                    //Initiate the JavaScript Image object.
                    var image = new Image();

                    //Set the Base64 string return from FileReader as source.
                    image.src = e.target.result;
                    image.onload = function () 
                    {

                        //Determine the Height and Width.
                        var height = this.height;
                        var width = this.width;
                        if (height > 300 || width > 300) 
                        {
                            // alert("Height and Width must not exceed 100px.");
                            $("#fileUpload").val('');
                            $('.imgerror').show();
                            // window.location.reload();
                            return false;
                        }
                        else
                        {
                        	if((height < 300 || width < 300) )
                        	{
                        		$("#fileUpload").val('');
	                            $('.imgerror').show();
	                            // window.location.reload();
	                            return false;
	                            // console.log('hi');
                        	}
                        	else
                        	{
                        		$('.imgerror').hide();
                        	}
                        }
                        // alert("Uploaded image has valid Height and Width.");
                        return false;
                    };
                }
            } 
            else 
            {
                alert("This browser does not support HTML5.");
                return false;
            }
        } 
        else 
        {
            /*alert("Please select a valid Image file.");
            return false;*/
        }
    });
});
</script>