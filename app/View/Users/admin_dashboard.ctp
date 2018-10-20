<div id="sub-nav">
    <div class="page-title">
		<h1>Dashboard</h1>
    </div>
</div>
<div id="page-layout">

	<div id="page-content">
        <div id="page-content-wrapper" class="no-bg-image wrapper-full">           
            <?php echo $this->Session->flash();?>
            <div class="hastable">
             <table id="sort-table"> 
                 <thead> 
					<tr>
							<th align="left" style="text-align:left;" colspan="7"><span style="font-size: 14px">Welcome To Administration Panel</span></th>
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
		                    <th title="Sort">User Name</th>
		                    <th title="Sort">Email</th>
                            <th title="Sort">Login Status</th>
							<td style="cursor:text;width:200px">Action</td> 
						</tr> 
						</thead> 
						<tbody> 			 
						   <tr>
                            	<td style="text-align:center">1.</td>
								<td style="text-align:center"><?php echo $admin_details['Admin']['username']?></td> 
								<td style="text-align:center"><?php echo $admin_details['Admin']['email']?></td> 
								<td style="text-align:center"><?php echo $admin_details['Admin']['last_login']?></td> 
                            	<td style="width:150px">
                           
									<a title="Change Password" href="<?php echo HTTP_ROOT.'admin/users/change_password/'.base64_encode(convert_uuencode($admin_details['Admin']['id']))?>" class="btn_no_text btn ui-state-default ui-corner-all tooltip">
									<span class="ui-icon ui-icon-wrench"></span>
									</a>
									<a title="Edit" href="<?php echo HTTP_ROOT.'admin/users/edit/'.base64_encode(convert_uuencode($admin_details['Admin']['id']))?>" class="btn_no_text btn ui-state-default ui-corner-all tooltip">
									<span class="ui-icon ui-icon-pencil"></span>
									</a>
                   
                           		 </td>
                            </tr> 
						
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
