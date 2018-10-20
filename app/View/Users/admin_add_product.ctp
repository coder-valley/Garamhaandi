<?php echo $this->Html->css('bootstrap-datepicker.css');?>
<?php echo $this->Html->script('bootstrap-datepicker.js');?>
<?php echo $this->Html->script('admin/jquery.validate.js'); ?>
<?php echo $this->Html->script('admin/additional-methods.js'); ?>
<?php echo $this->Html->script('common.js'); ?>






<script>
$(document).ready(function(){
  $("#StartDate,#EndDate").datepicker({
      format: 'mm/dd/yyyy',
      startDate:'+1d',
      autoclose:true
       });
});

</script>

<div id="sub-nav">
	<div class="page-title">
		<h1>ADD PRODUCT</h1>
	</div>
</div>
<div id="page-layout">
	<div id="page-content">   		
		<div id="page-content-wrapper">		
		<a style="margin-bottom:10px;" onclick="history.go(-1);"  class="ui-state-default ui-corner-all float-right ui-button">Back</a>	
		<div class="inner-page-title">
				<h2>Add Product</h2>
				<span></span>
			</div>
		<?php echo $this->Session->flash();?>
			<div class="content-box content-box-header">
				<div class="column-content-box">
					<div class="ui-state-default ui-corner-top ui-box-header">
						<span class="ui-icon float-left ui-icon-notice"></span>
						Add Product
					</div>
						
					<div class="content-box-wrapper">
					<form enctype="multipart/form-data" name="myform" id="tableForm" class="pager-form" method="post"  action="<?php echo HTTP_ROOT.'admin/Users/add_product';?>">
					<fieldset>
							<input type="hidden" name="data[Product][user_id]" value="<?php echo @$id;?>">
<input type="hidden" name="data[Product][state_id]" value="<?php echo @$user_data['User']['state_id'];?>">
							<input type="hidden" name="data[Product][city_id]" value="<?php echo @$user_data['User']['city_id'];?>">
							<ul>
							    <li>
									    <label class="desc" >Title<em style="color:red;">*</label>
									     <div>
										      <input class="field text full" id="title" name="data[Product][title]" type="text">
									     </div>
								</li>
								<li>
									    <label class="desc" >Category<em style="color:red;">*</label>
									     
									<select id="cat" name="data[Product][categorie_id]">
									<option disabled="disabled" selected="selected" value="" required="required">select</option>
										    <option value="1">Monday</option>
											<option value="2">Tuesday</option>
											<option value="3">Wednesday</option>
											<option value="4">Thursday</option>
											<option value="4">Friday</option>
											<option value="4">Saturday</option>
											<option value="4">Sunday</option>
									</select>    
								</li>
								<li>
									   <label class="desc" >SubCategory<em style="color:red;">*</label>
										
										<!--	<input class="field text full" id="subcategory_id" name="data[Product][subcategory_id]" type="hidden">-->
										<select id="subcat" name="data[Product][subcategory_id]" required>
											<option disabled="disabled" selected="selected" value="">select</option>
											<option value="1">Breakfast</option>
											<option value="2">Lunch</option>
											<option value="2">Snacks</option>
											<option value="3">Dinner</option>
										</select>
								</li>
<!-- 								<li>
									    <label class="desc" >Child SubCategory<em style="color:red;">*</label>
									
										<!--	<input class="field text full" id="childsubcategory_id" name="data[Product][childsubcategory_id]" type="hidden">-->
											<!-- <select id="childsubcat" name="data[Product][childsubcategory_id]" class="childsubcat" required>
												<option disabled="disabled" selected="selected" value="">select</option>
								
											</select>
								</li> -->
<!-- 								<li>
									    <label class="desc" id=="ad_type">Ad_type<em style="color:red;">*</label>
									     <div>
											<select name="data[Product][ad_type]" id="ad_type">
											    <option selected="selected" disabled="disabled" value="">Select</option>
												<option value="1">Buy</option>
												<option value="2">Sell</option>
												<option value="3">Barter</option>
												<option value="4">Offer</option>
											</select>
										     
									     </div>
								</li> -->
								<li id="ad_type_offer" style="display:none;">
									    <label class="desc" >Discount<em style="color:red;">*</label>
									     <div>
										      <input class="field text full" id="price" name="data[Product][offer_discount]" type="text">
									     </div>
								</li>
								<div id="cat_id_17"style="display:none;">
								<li >
									    <label class="desc" >Km Driven<em style="color:red;">*</label>
									     <div>
										      <input class="field text full" id="price" name="data[Product][kmdriven]" type="text">
									     </div>
								</li>
								<li >
									    <label class="desc" >fuel<em style="color:red;">*</label>
									     <div>
											<select name="data[Product][fuel]">
											<option selected="selected" disabled="disabled" value="">Select</option>
												<option value="1">Petrol</option>
												<option value="2">Diesel</option>
												<option value="3">LPG</option>
												<option value="4">CNG and hybrids</option>
											</select>
										     
									     </div>
								</li>
								<li >
									    <label class="desc" >Manufacturing Year<em style="color:red;">*</label>
									     <div>
										      <input class="field text full" id="price" name="data[Product][year]" type="text">
									     </div>
								</li>
								</div>
								
								<div id="cat_id_30" style="display:none;">
								<li >
									    <label class="desc" >Area In Square Meters<em style="color:red;">*</label>
									     <div>
										      <input class="field text full"  name="data[Product][squaremeter]" type="text">
									     </div>
								</li>
								<li >
									    <label class="desc" >No. of Rooms<em style="color:red;">*</label>
									     <div>
											<select name="data[Product][room]">
												<option selected="selected" disabled="disabled" value="">Select</option>
												<option value="1">1 room</option>
												<option value="2">2 room</option>
												<option value="3">3 room</option>
												<option value="4">4 room</option>
											</select>
										     
									     </div>
								</li>
								<li >
									    <label class="desc" >Furnished<em style="color:red;">*</label>
									     <div>
											<select name="data[Product][furnished]">
												<option selected="selected" disabled="disabled" value="">Select</option>
												<option value="1">Yes</option>
												<option value="2">No</option>
												
											</select>
										     
									     </div>
								</li>
								</div>
								
								
								
								
								<li>
									    <label class="desc" >Price<em style="color:red;">*</label>
									     <div>
										      <input class="field text full" id="price" name="data[Product][price]" type="text">
									     </div>
								</li>
								
							    <li>
									    <label class="desc" >Description<em style="color:red;">*</label>
									     <div>
										      <textarea class="field text full" id="textar" name="data[Product][description]"></textarea>
									     </div>
								</li>
								
<!-- 								<li>
									    <label class="desc" >Start Date<em style="color:red;">*</label>
									     <div>
											
										      <input class="parent_dob field text full" id="StartDate" name="data[Product][startdate]">
									     </div>
								</li>
								<li>
									    <label class="desc" >End Date<em style="color:red;">*</label>
									     <div>
										      <input class="parent_dob field text full" id="EndDate" name="data[Product][enddate]">
									     </div>
								</li> -->
								
<!-- 								<li>
									    <label class="desc" >Choose Image<em style="color:red;">*</label>
									    <div>
									    <input type="file" name="photo[]" class="field text full" id="im" multiple="multiple">	
									    </div>
								</li> -->	
								   
								   <li>
									       <input id="sub" type="submit" value="Submit">									
								   </li>													
							</ul>
						</fieldset>
					</form>	
					</div>                        

				</div>
			</div>
			
		</div>
		<div class="clear"></div>
	</div>
</div>
<div class="clear"></div>
<script>
	$(document).ready(function(){
		
			$('form').submit(function(){
				var a=$('#EndDate').val();
				var b=$('#StartDate').val();
				var c=$('#cat').val();
				$('#cat').val(c);
				
				if(b>=a){
				alert('End Date Cannot Be Less Than Start Date');
				return false;}
				
					
			});
			
	//$('#title').click(function(){
	//	alert($('#status').val());
	//	});
		
	
	

		$('#tableForm').validate({
			rules:
			{

	 			"data[Product][title]":
				{
					required:true
					
		        },
		        "data[Product][price]":
				{
					required:true,
					number:true
				},
				
				 "data[Product][status]":
				{
					required:true,
					//number:true
				},
		        "data[Product][description]":
				{
					required:true
					
		        },
		        "data[Product][startdate]":
				{
					required:true
					
		        },
                        "data[Product][category_id]":
                                  {
                                    required:true
                                  },
		        "data[Product][enddate]":
				{
					
					required:true
					
		        },
		         "data[Product][ad_type]":
				{
					
					required:true
					
		        },
		         "data[Product][offer_discount]":
				{
					
					required:true,
					number:true
		        },
		        "data[Product][kmdriven]":
				{
					
					required:true,
					number:true
		        },
		        "data[Product][fuel]":
				{
					
					required:true
		        },
		        "data[Product][year]":
				{
					
					required:true,
					number:true
		        },
		        "data[Product][squaremeter]":
				{
					
					required:true,
					number:true
		        },
		        "data[Product][furnished]":
				{
					
					required:true
		        },
		        "data[Product][room]":
				{
					
					required:true,
					
		        },
		        "photo[]":
		        {
		        	required:true,
		        	accept:'jpg|jpeg|gif|png'
		        }
			},
			messages:
			{
				"photo":
				{
					required:'Please select an image',
					accept:'Please select an valid image'
				}
			}
	});
	
	});
</script>
<script>
  $(document).ready(function(){
     
  $('#cat').on('change',function(){
      //$('#childsb').hide();
      //alert("hi");
     var cat=$(this).val();
     $('#childsubcat').text('');
 
     $.ajax({
   type:'POST',
   url:ajax_url+'/admin/Users/subcat/'+cat,
   success: function(resp)
   {  //alert(resp);
         $("#subcat").html(resp);
     
        
       }       
      
    });
    return false;
    });
    

   
      $('#subcat').on('change',function(){
          //alert('hi');
          var subcat=$(this).val();
          //alert(subcat);
         // $('#subcategory_id').val(subcat);
   
      $.ajax({
      type:'POST',
      url:ajax_url+'/admin/Users/chldsub/'+subcat,
      success: function(resp)
      {    //alert(resp);
            $("#childsubcat").html(resp);
       
          }       
         
		});

      return false;   
         });

         
         $('#childsubcat').change(function(){
			 //alert($(this).val());
			 $('#childsubcategory_id').val($(this).val());
			 });
			 
			 
			 

});
</script>
<script>
$(document).ready(function(){
	$(document).on('change','#ad_type',function(){

		if($(this).val()==4){
		$('#ad_type_offer').show();
		}
		else{
		$('#ad_type_offer').hide();
		}
		});
		
	$('#cat').on('change',function(){
      
		if($(this).val()==17){
		$('#cat_id_17').show();
		}
		else{
			$('#cat_id_17').hide();
			}
		if($(this).val()==22){
			$('#cat_id_30').show();
			}
		else{
			$('#cat_id_30').hide();
			}
		});	
	
	});

</script>