<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" type="text/css">

<div id="sub-nav">
    <div class="page-title">
		<h1>Customers</h1>
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
							<th align="left" style="text-align:left;" colspan="7"><span style="font-size: 14px">List of Customers
							</span></th>
							<th>
							<span style="font-size: 14px" class="ui-state-default ui-corner-all float-right ui-button">
							<?php echo $this->Html->link('Add Customer',array('controller' => 'Users', 'action' => 'add'));?>
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
                            <!-- <th title="Sort">Password</th> -->
                            <th title="Sort">Contact-No.</th>
                            <!-- <th title="Sort">Gender</th> -->
                            <!-- <th title="Sort">Address</th> -->
                            <!-- <th title="Sort">Image</th> -->
                            <!-- <th title="Sort">Status</th> -->
							<td style="cursor:text;width:200px">Action</td> 
						</tr> 
						</thead> 
						<tbody> 
						<?php $i=1; foreach ($details as $detail): ?>			 
						   <tr>
                            	<td style="text-align:center"><?php echo $i; ?></td>
								<td style="text-align:center"><?php echo $detail['User']['name']?></td> 
								<td style="text-align:center"><?php echo $detail['User']['email']?></td>
								<!-- <td style="text-align:center"><?php echo $detail['User']['password']?></td> -->
								<td style="text-align:center"><?php echo $detail['User']['contact_no']?></td> 
								<!-- <td style="text-align:center"><?php echo $detail['User']['gender']?></td> -->
								<!-- <td style="text-align:center"><?php echo $detail['User']['address']?></td> -->
								<!-- <td style="text-align:center"><?php echo $detail['User']['image']?></td> -->
								<!-- <td style="text-align:center"><?php if($detail['User']['status'] == 0) echo 'Inactive'; else echo 'Active'; ?></td>  -->
                            	<td style="width:150px">
<!-- 
                            	<a title="Delete Dish" href="<?php echo HTTP_ROOT.'admin/Users/delete_food/'.base64_encode(convert_uuencode($pr_list['Food']['id']))?>" onclick="if(!confirm('Are you sure, you want to delete this Dish?')){return false;}" class="btn_no_text btn ui-state-default ui-corner-all tooltip">
            <i class="fa fa-trash" aria-hidden="true"></i></a> -->

                           			<a title="Delete_user" href="<?php echo HTTP_ROOT.'admin/users/delete_user/'.base64_encode(convert_uuencode($detail['User']['id']))?>" onclick = "if(!confirm('Are you sure, you want to delete this User?')){return false;}" class="ui-state-default ui-corner-all float-left ui-button tooltip"><i class="fa fa-trash" aria-hidden="true"></i></a>
									

									<a class="ui-state-default ui-corner-all float-left ui-button" title="Edit" href="<?php echo HTTP_ROOT.'admin/users/customers_edit/'.base64_encode($detail['User']['id'])?>" >
									<i class="fa fa-edit" aria-hidden="true"></i>
									</a>
                   					<a class="ui-state-default ui-corner-all float-right ui-button" title="Manage Address" href="<?php echo HTTP_ROOT.'admin/Users/address/'.base64_encode($detail['User']['id']);?>">Manage Address</a>
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
