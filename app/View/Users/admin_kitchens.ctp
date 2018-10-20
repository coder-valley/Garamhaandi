<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" type="text/css">
<div id="sub-nav">
    <div class="page-title">
		<h1>Kitchens</h1>
    </div>
</div>
<div id="page-layout">

	<div id="page-content">
        <div id="page-content-wrapper" class="no-bg-image wrapper-full">           
            <?php if($myvar = $this->Session->flash()){ ?>
				<div class="response-msg success ui-corner-all">
					<?php echo $myvar;?>
				</div>
				
				<?php } ?>
            <div class="hastable">
             <table id="sort-table"> 
                 <thead> 
					<tr>
							<th align="left" style="text-align:left;" colspan="7"><span style="font-size: 14px">List of Kitchens
							</span></th>
							<th>
								<span style="font-size: 14px" class="ui-state-default ui-corner-all float-right ui-button">
								 <?php echo $this->Html->link('Add Kitchen',array('controller' => 'Users', 'action' => 'kitchen_add'));?>
								</span>
							</th>
					</tr> 
			</thead>
			
			 </table>
			   		<br>
				<div class="hastable" style="text-align:center;">
					<form name="myform" class="pager-form" method="post" action="">
						<table id="sort-table"> 
						<thead> 
						<tr>
                            <th title="Sort">Sr.No</th>
		                    <th title="Sort">Name</th>
		                    <th title="Sort">Email</th>
                            <th title="Sort">Contact-No.</th>
                            <th title="Sort">Country</th>
                            <th title="Sort">State</th>
                            <th title="Sort">City</th>
                            <th title="Sort">Delivery Location</th>
                            <!-- <th title="Sort">Status</th> -->
                            
							<td style="cursor:text;width:200px">Action</td> 
						</tr> 
						</thead> 
						<tbody>
						<?php $i=1; foreach ($details as $detail): ?>
						   <tr>
                            	<td style="text-align:center"><?php echo $i; ?></td>
								<td style="text-align:center"><?php echo $detail['Kitchen']['name']?></td>
								<td style="text-align:center"><?php echo $detail['Kitchen']['email']?></td>
								<!-- <td style="text-align:center"><?php echo $detail['Kitchen']['password']?></td> -->
								<td style="text-align:center"><?php echo $detail['Kitchen']['contact_no']?></td>
								<td style="text-align:center"><?php echo $detail['Country']['country_name']?></td>
								<td style="text-align:center"><?php echo $detail['State']['statename']?></td>
								<td style="text-align:center"><?php echo $detail['City']['city_name']?></td>
								<td style="text-align:center">
								<?php foreach($detail['Kitlocation'] as $kit)
									echo $kit['Location']['location'].',';
								 ?></td>
								<!-- <td style="text-align:center"><?php if($detail['Kitchen']['status'] == 0) echo 'Active'; else echo 'Inactive'; ?></td> -->
								<!-- <td style="text-align:center"><?php echo $detail['Kitchen']['image']?></td>  -->
                            	<td style="width:150px">
                            	<!-- <a class="ui-state-default ui-corner-all float-left ui-button" href="<?php echo HTTP_ROOT.'admin/Users/location/'.base64_encode($detail['Kitchen']['id']);?>">Manage Location</a>
								 -->
								<a class="ui-state-default ui-corner-all float-right ui-button" href="<?php echo HTTP_ROOT.'admin/users/delete_kitchen/'.base64_encode(convert_uuencode($detail['Kitchen']['id']))?>" onclick = "if(!confirm('Are you sure, you want to delete this Kitchen?')){return false;}"><i class="fa fa-trash" aria-hidden="true"></i></a>
									
									<a class="ui-state-default ui-corner-all float-right ui-button" title="Edit" href="<?php echo HTTP_ROOT.'admin/users/kitchen_edit/'.base64_encode($detail['Kitchen']['id'])?>" >
									<i class="fa fa-edit" aria-hidden="true"></i>
									</a>
									<a class="ui-state-default ui-corner-all float-left ui-button" href="<?php echo HTTP_ROOT.'admin/Users/food/'.base64_encode($detail['Kitchen']['id']);?>">Manage Item</a>
                           		 </td>
                            </tr> 
                            <?php $i++; endforeach; ?>
						
						</tbody>
						</table>
					</form>		
                    
					<div class="clear"></div>
				</div>						
			<div class="clear"></div>
			
       		</div>
			
        </div>
        <div class="clear"></div>			
    </div>
</div>