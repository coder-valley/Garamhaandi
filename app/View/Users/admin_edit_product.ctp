<style>
.boxclose{
    float:right;
    margin-top:-30px;
    margin-right:-30px;
    cursor:pointer;
    color: #fff;
    border: 1px solid #AEAEAE;
    border-radius: 30px;
    background: #605F61;
    font-size: 31px;
    font-weight: bold;
    display: inline-block;
    line-height: 0px;
    padding: 11px 3px;       
}
.multi-img{
	position: relative;
	height:80px;
	width:80px;
	float:left;
	margin-right:15px;
	margin-top:5px;
	}
.multi-img li{
	position: relative;
	height:80px;
	width:80px;
	padding:0px;
	}
.img-size{
	height:80px;
	width:80px;
	}
.delete_image{
	height:15px;
	position:absolute;
	right:-5px;	
	top:-8px;
	cursor:pointer;
	}
	

</style>
<div id="sub-nav">
	<div class="page-title">
		<h1>EDIT PRODUCT</h1>
	</div>
</div>
<div id="page-layout">
	<div id="page-content">   		
		<div id="page-content-wrapper">		
		<a style="margin-bottom:10px;" onclick="history.go(-1);" class="ui-state-default ui-corner-all float-right ui-button">Back</a>	
		
		<?php echo $this->Session->flash();?>
			<div class="content-box content-box-header">
				<div class="column-content-box">
					<div class="ui-state-default ui-corner-top ui-box-header">
						<span class="ui-icon float-left ui-icon-notice"></span>
						Please Enter the Information.
					</div>
						
					<div class="content-box-wrapper">
					<form enctype="multipart/form-data" name="myform" id="tableForm" class="pager-form" method="post"  action="<?php echo HTTP_ROOT.'admin/Users/edit_product';?>">
					<input type="hidden" id="p_id" name="data[Menu][id]" value="<?php echo $edit_product['Menu']['id']; ?>">
						<fieldset>
							<ul>	
								<li>
									<label class="desc" >Dish<em style="color:red;">*</label>
									<div>
										<input class="field text full" id="title" name="data[Menu][dish]" type="text" value="<?php echo $edit_product['Menu']['dish']; ?>">
									</div>
								</li>
								<li>
									    <label class="desc" >Category<em style="color:red;">*</label>
									     <div>
									     <select id="cat" name="data[Menu][category_id]" required="required">
											<option selected="selected" disabled="disabled">select Category      </option>	
										      <?php foreach($category as $cat){?>
										      <option value="<?php echo @$cat['Category']['id'];?>" <?php echo $edit_product['Menu']['category_id'] == $cat['Category']['id'] ? 'selected' : '';?>><?php echo @$cat['Category']['title'];?></option>
										      <?php }?>
										  </select>    
									     </div>
								</li>
								<li>
									<label class="desc" >SubCategory<em style="color:red;">*</label>
										<select id="subcat"  name="data[Menu][subcategory_id]">
											<option disabled="disabled" selected="selected" value="<?php echo @$edit_product['Menu']['subcategory_id'];?></" ><?php echo @$edit_product['SubCategory']['title'];?></option>
								
										</select>
								</li>
								<li>
									<label class="desc" >Child SubCategory<em style="color:red;">*</label>
										<select id="childsubcat" class="childsubcat" name="data[Menu][childsubcategory_id]">
										<option disabled="disabled" selected="selected" value="<?php echo @$edit_product['Menu']['childsubcategory_id'];?></"><?php echo @$edit_product['ChildSubCategory']['title'];?></option>
						
										</select>
								</li>
								
								
								
								<li>
									<label class="desc" >Price<em style="color:red;">*</label>
									<div>
										<input class="field text full" id="price" name="data[Menu][price]" type="text" value="<?php echo @$edit_product['Menu']['price']; ?>">
									</div>
								</li>
							
								<li>
									  <label class="desc" >Description<em style="color:red;">*</label>
									  <div><textarea class="field full" id="textarea"  name="data[Menu][description]" ><?php echo @$edit_product['Menu']['description']; ?></textarea>
									  </div>
									   	<p id="req" style="display:none;"><em style="color:red;">This field is required.</em></p>
								</li>
								
								<li>
									<label class="desc" >Choose Image<em style="color:red;">*</label>
									<div>
										<input class="field text full" name="image" type="file" >
									</div>
								</li>
								<?php if(!empty($edit_product['Menu']['image'])){?>
								<li>
									<img class="img-size" src="<?php echo HTTP_ROOT.'img/dish/'.$edit_product['Menu']['image'] ?>">
								</li>	
								<?php }?>
								<li>
									  <input type="submit" value="Submit">
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
		$('#tableForm').validate({
			rules:
			{
                "data[Menu][dish]":
				{
					required:true
				},
				"data[Menu][price]":
				{
                   required:true,
                   number:true					
				},
				"data[Menu][description]":
				{
                   required:true					
				},
				"image":
				{
					//required:true,
					accept:'jpg|jpeg|gif|png'
				}
				
  	        },
  	        messages:
  	        {
              "inage":
              {
              //	required:'Please select a file',
              	accept:'Please select a valid image file'
              }

  	        }
	});
	
	
	});
</script>
<script>
  $(document).ready(function(){
     
  	$('#cat').on('change',function(){
		var cat=$(this).val();
		$('#childsubcat').text('');
		$.ajax({
			type:'POST',
			url:'<?php echo HTTP_ROOT?>admin/Users/subcat/'+cat,
			success: function(resp)
			{
				console.log(resp);
				$("#subcat").html(resp);
				$('#childsubcat').text('');
			}       

		});
		
    });
    

   
    $('#subcat').on('change',function(){
		var subcat=$(this).val();
		$('#subcategory_id').val(subcat);
		$.ajax({
			type:'POST',
			url:'<?php echo HTTP_ROOT?>admin/Users/chldsub/'+subcat,
			success: function(resp)
			{
				$("#childsubcat").html(resp);
			}       

		});

	});
});
</script>