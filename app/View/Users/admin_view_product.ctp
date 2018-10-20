<!-- <?php echo $this->Html->css('jquery-bxslider.css');?>
<?php echo $this->Html->script('jquery-bxslider.min.js');?>
<script>
$(document).ready(function(){
$('.bxslider').bxSlider();
$('.bx-pager').hide();
});
</script>
<div id="sub-nav">
	<div class="page-title">
		<h1>PRODUCT DETAIL</h1>
	</div>
	<div id="top-buttons">	
	<a style="margin-bottom:10px;" onclick="history.go(-1);" href="javascript:void(0);" class="ui-state-default ui-corner-all float-right ui-button">Back</a>		
       <!-- <a href="<?php echo HTTP_ROOT.'admin/users/manage_products'?>" class="btn ui-state-default ui-corner-all">Back</a>-->
	</div>
</div>
<div id="page-layout">
	<div id="page-content">   		
		<div id="page-content-wrapper" class="no-bg-image wrapper-full">			
			
			<div class="content-box content-box-header">
				<div class="column-content-box">

					<div class="ui-state-default ui-corner-top ui-box-header">

						<span class="ui-icon float-left ui-icon-notice"></span>
						<?php  echo @$product['User']['firstname']." ".$product['User']['lastname']." Products"; ?>
					</div>
						
					<div class="content-box-wrapper">

			<div class="hastable">
					<table id="sort-table" class="view"> 
                            <tbody>
								<tr>							
                                    <th>User Name</th> 
                                    <td style="width:60%;"><?php  echo @$product['User']['firstname']." ".$product['User']['lastname']; ?>
									</td>
									</tr>
								<tr>							
                                    <th>Title</th> 
                                    <td style="width:60%;"><?php  echo @$product['Product']['title']; ?>
									</td>
								</tr>
								<tr>							
                                    <th>Description</th> 
                                    <td style="width:60%;"><?php  echo @$product['Product']['description']; ?>
									</td>
								</tr>
								<tr>							
                                    <th>Category</th> 
                                    <td style="width:60%;"><?php  echo  @$category['Category']['category']; ?>
									</td>
								</tr>
								<tr>							
                                    <th>SubCategory</th> 
                                    <td style="width:60%;"><?php  echo @$subcat['SubCategory']['subcategory']; ?>
									</td>
								</tr>
								<tr>							
                                    <th>Child SubCategory</th> 
                                    <td style="width:60%;"><?php  echo @$childsubcat['ChildSubcategory']['childsubcategory']; ?>
									</td>
								</tr>
								<tr>							
                                    <th>Price</th> 
                                    <td style="width:60%;">Rs <?php  echo @$product['Product']['price']; ?>
									</td>
								</tr>
								<?php if(@$product['Product']['offer_discount']>0){?>
								<tr>							
                                    <th>Discount</th> 
                                    <td style="width:60%;"><?php  echo @$product['Product']['offer_discount']." %"; ?>
									</td>
								</tr>
								<?php }?>
								<tr>							
                                    <th>Ad_type</th> 
                                    <?php if($product['Product']['ad_type']==0){?>
											<td style="width:60%;">Not specified</td>
									<?php }?>
									<?php if($product['Product']['ad_type']==1){?>
											<td style="width:60%;">Buy</td>
									<?php }?>
									<?php if($product['Product']['ad_type']==2){?>
											<td style="width:60%;">Sell</td>
									<?php }?>
									<?php if($product['Product']['ad_type']==3){?>
										<td style="width:60%;">Barter</td>
									<?php }?>
									<?php if($product['Product']['ad_type']==4){?>
										<td style="width:60%;">Offer</td>
									<?php }?>		
								</tr>
								<?php if($product['Category']['id']==17){?>
								<tr>							
                                    <th>Manufacturing Year</th> 
                                    <td style="width:60%;"><?php  echo @$product['Product']['year']; ?>
									</td>
								</tr>
								<tr>							
                                    <th>Km Driven</th> 
                                    <td style="width:60%;"><?php  echo @$product['Product']['kmdriven']; ?>
									</td>
								</tr>
								<tr>							
                                    <th>Fuel</th> 
                                    <?php if(@$product['Product']['fuel']==1){?>
                                    <td style="width:60%;">Petrol
									</td>
									<?php }?>
									<?php if(@$product['Product']['fuel']==2){?>
                                    <td style="width:60%;">Diesel
									</td>
									<?php }?>
									<?php if(@$product['Product']['fuel']==3){?>
                                    <td style="width:60%;">LPG
									</td>
									<?php }?>
									<?php if(@$product['Product']['fuel']==4){?>
                                    <td style="width:60%;">CNG $ Hybrids
									</td>
									<?php }?>
								</tr>
								<?php }?>
								<?php if($product['Category']['id']==30){?>
								<tr>							
                                    <th>Furnished</th> 
                                    <?php if(@$product['Product']['furnished']==1){?>
                                    <td style="width:60%;">Yes
									</td>
									<?php }?>
									<?php if(@$product['Product']['furnished']==2){?>
                                    <td style="width:60%;">No
									</td>
									<?php }?>
								</tr>
								<tr>							
                                    <th>Rooms</th> 
                                    <td style="width:60%;"><?php  echo @$product['Product']['room']; ?>
									</td>
								</tr>
								<tr>							
                                    <th>Area</th> 
                                    <td style="width:60%;"><?php  echo @$product['Product']['squaremeter'];?> m<sup>2</sup>
									</td>
								</tr>
								<?php }?>
								<tr>							
                                    <th>Start Date</th> 
                                    <td style="width:60%;"><?php  echo $product['Product']['startdate']; ?>
									</td>
									</tr>	
								<tr>							
                                    <th>End Date</th> 
                                    <td style="width:60%;"><?php  echo @$product['Product']['enddate']; ?>
									</td>
								</tr>		
								<tr>															
                                    <th>Image</th> <td style="width:100px;">
                                   <div style="width:150px;">
                                   <?php $Image=$product['Image']?>
									<ul class="bxslider" >
									
									<?php foreach($Image as $image){?>
									
									  <center><li><img class="img-responsive" src="<?php echo HTTP_ROOT.'img/'.@$image['image']?>" style="width:100px;height:100px;"></li></center>
									
									 <?php }?>
									 
									 
							</ul>
					</div>
									</td>
									
                                </tr> 
                            </tbody>
						</table>
                 <div class="clear"></div>
				</div>
				
			</div>
			<div class="clearfix"></div>
			
			<div class="clear"></div>
		</div>
		<div class="clear"></div>
	</div>
</div>
<div class="clear"></div> 
<script>/*
$(document).ready(function(){
	var j;
	var a=$('[class^="active_"]').length;
	$('[class^="active_"]').hide();
	$('.active_1').show();
	$('#b1').attr("disabled", "disabled");
var i=1;
$('#b2').on('click',function(){
	$('[class^="active_"]').hide();
	
	$('.active_'+i).next().show();
i++;
if(i>a){
	$(this).attr("disabled", "disabled");
	
        $("#b1").removeAttr("disabled");
	
	$('.active_'+a).show();
	j=a;
	
	}
	
		 

	
	});

$('#b1').click(function(){
		if(j==1){
	  $("#b2").removeAttr("disabled");
	
			$(this).attr("disabled", "disabled");
	
	i=1;
		
		}else{
		
	$('[class^="active_"]').hide();
	$('.active_'+j).prev().show();
	j--;
	}
		
	});	



	});*/
</script>
 -->