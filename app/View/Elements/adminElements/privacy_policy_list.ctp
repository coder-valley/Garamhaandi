<?php  $opt = $this->request->url;
$url = base64_encode($opt);?>
<!-- <?php  echo $this->Html->script('newadmin/tablesorter.js');?>
<?php  echo $this->Html->script('newadmin/tablesorter-pager.js');?>
<?php  echo $this->Html->script('newadmin/common.js');?> -->

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
							                 <th title="Sort">Title</th>
                         <th title="Sort">Description</th>
                         <td style="cursor:text;width:200px">Action</td> 
						</tr> 
						</thead> 
						<tbody> 
           <?php $va=count($privacy_policy);
                 $i=1;
						          foreach($privacy_policy as $privacy_policy_list) { 
						     ?>
						   <tr>
						                   
                           <td style="text-align:center"> <?php echo $i;?></td>
						                    <td style="text-align:center"><?php echo $privacy_policy_list['PrivacyPolicy']['title']?></td>
                           <td style="text-align:center"><?php echo $privacy_policy_list['PrivacyPolicy']['description']?></td> 
								                  <td style="width:150px">
								                      <a class="btn_no_text btn ui-state-default ui-corner-all tooltip" title="Edit" href="<?php echo HTTP_ROOT.'admin/Users/edit_privacy_policy/'.base64_encode(convert_uuencode($privacy_policy_list['PrivacyPolicy']['id']))?>">
                               <span class="ui-icon ui-icon-pencil"></span>
                               </a> 
									                 </td>
           </tr> 
						<?php $va--;$i++;}  ?>						
						</tbody>
						</table>
					</form>		
      <?php if(empty($privacy_policy)){?>
					<div style="font-size:20px;text-align:center;padding-top:5px;">No Records Found</div>
				 <?php 	}?>
					<div class="clear"></div>
				</div>
                
                 
				
				<div class="clear"></div>
		<div class="clear"></div>
    </div>
			<div class="clear"></div>
	</div>


