<?php  echo $this->Html->script('admin/ui/ui.core.js');?>

<style>
.success {
    background: url("../../img/icons/success.png") no-repeat scroll 10px 50% #E9F9E5;
    border: 1px solid #B4E8AA;
    color: #1C8400;
}
ui.messages.css (line 65)
.response-msg {
    font-size: 0.96em;
    margin: 0 0 10px;
    padding: 6px 10px 10px 45px;
}
.pagesize,.pagedisplay 
{
	 border-color: #7C7C7C #C3C3C3 #DDDDDD;
    border-style: solid;
    border-width: 1px;
    color: #333333;
    float: left;
    margin: 5px;
    padding: 4px;
}

</style>

<div id="sub-nav" >
	<div class="page-title">
		<h1>DASHBOARD DETAIL</h1>
		<span></span> </div>
</div>
<div id="page-layout" >
	<div id="page-content" >
		<div id="page-content-wrapper" class="no-bg-image wrapper-full" >
      
		<div id="google_translate_element"></div>
		<div class="inner-page-title">
    	<h2 style="width:50%; float:left;">DASHBOARD DETAIL</h2>
				 <span> </span>
			</div>
			<?php if($myvar = $this->Session->flash()){ ?>
				<div class="response-msg success ui-corner-all">
					<?php echo $myvar;?>
				</div>
				
			<?php } ?>
     
	 		
    		<div class="content-box content-box-header" style="border:none;">
			    <div class="hastable" style="text-align:center;">
			     
						<table id="sort-table"> 
						<thead> 
						<tr>
                       
                        	<th title="Sort">Sr.No</th>
							                 <th title="Sort">Description</th>
						                  <td style="cursor:text;width:200px">Action</td> 
						</tr> 
						</thead> 
						<tbody> 
						   <tr>
						                   
                           
                           <td style="text-align:center"> <?php echo '1';?></td>
						                    <td style="text-align:center"><?php echo $dash['DashDetail']['description']?></td> 
								                  <td style="width:150px">
								                   <a class="btn_no_text btn ui-state-default ui-corner-all tooltip" title="Edit" href="<?php echo HTTP_ROOT.'admin/Users/edit_dash_detail/'.base64_encode(convert_uuencode($dash['DashDetail']['id']))?>">
                               <span class="ui-icon ui-icon-pencil"></span>
                               </a> 
									                     <a title="view" href="<?php echo HTTP_ROOT.'admin/Users/view_dash_detail'?>" class="btn_no_text btn ui-state-default ui-corner-all tooltip">
                               <span class="ui-icon ui-icon-search"></span>
                               </a>
							                    </td>
           </tr> 
						</tbody>
						</table>
			    </div>
     	</div>
         
			<div class="clearfix"></div>			
			<div class="clear"></div>
		</div>
		<div class="clear"></div>
	</div>
</div>
<div class="clear"></div>

