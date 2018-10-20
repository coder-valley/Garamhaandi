<style>
.black_overlay {
    background-color: #333333;
    display: none;
    height: 100%;
    left: 0;
    opacity: 0.4;
    position: absolute;
    top: 0;
    width: 100%;
    z-index: 1001;
}
.text_display{
	
	text-align:center;	
}
</style>

<div id="page-content">
	<div id="page-content-wrapper" style="padding:0; margin:0; background:0; box-shadow:0 0 0 0 #fff;">
				
				<div class="hastable" style="text-align:center;">
					<form name="myform" class="pager-form" method="post" action="">
						<table id="sort-table"> 
						<thead> 
						<tr>
                         <th title="Sort">Sr.No</th>
                         <th title="Sort">Name</th>
						 <th title="Sort">Designation</th>
						 <th title="Sort">Description</th>
                         <th title="Sort">Image</th>
                         <td style="cursor:text;width:200px">Action</td> 
						</tr> 
						</thead> 
						<tbody> 
           <?php $va=count($abt_team);
                 $i=1;
						          foreach($abt_team as $about_list) { 
						     ?>
						   <tr>
						                   
                           <td style="text-align:center"> <?php echo $i;?></td>
                           <td style="text-align:center"><?php echo $about_list['About_team']['name']?></td>
						   <td style="text-align:center"><?php echo $about_list['About_team']['designation']?></td>
						   <td style="text-align:center"><?php echo $about_list['About_team']['description']?></td>
                           <td style="text-align:center"><?php echo $about_list['About_team']['image']?>
                           	
                           </td> 
							<td style="width:150px">
								<a class="btn_no_text btn ui-state-default ui-corner-all tooltip" title="Edit" href="<?php echo HTTP_ROOT.'admin/Users/edit_about_team_mbrs/'.base64_encode(convert_uuencode($about_list['About_team']['id']))?>">
                            	<span class="ui-icon ui-icon-pencil"></span>
                               </a>
                               <a title="Delete_member" href="<?php echo HTTP_ROOT.'admin/users/delete_about_team/'.base64_encode(convert_uuencode($about_list['About_team']['id']))?>" onclick = "if(!confirm('Are you sure, you want to delete this Member?')){return false;}" class="btn_no_text btn ui-state-default ui-corner-all float-left ui-button tooltip"><span class="ui-icon ui-icon-trash"></span></a>
							</td>
           </tr> 
						<?php $va--;$i++;}  ?>						
						</tbody>
						</table>
					</form>		
      <?php if(empty($abt_team)){?>
					<div style="font-size:20px;text-align:center;padding-top:5px;">No Records Found</div>
				 <?php 	}?>
					<div class="clear"></div>
				</div>
                
                 
				
				<div class="clear"></div>
		<div class="clear"></div>
    </div>
			<div class="clear"></div>
	</div>


