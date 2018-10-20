

<style>
#elm1_textarea_tbl
{
	width:137% !important;
}
 form span
 {
	position: static;
 } 
 form li span
 {
	float:none;
 }
 .uploadMet
{
	width:30%;
}
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
	<h1>PRIVACY POLICY</h1>
	</div>
</div>
<div id="page-layout" >
	<div id="page-content" >
		<div id="page-content-wrapper" class="no-bg-image wrapper-full" >
      
		
						
		<div class="hastable">
			<table>
				<thead>
					<tr>
						<th align="left" style="text-align:left;" colspan="7">
							<h2 style="font-size: 14px">Privacy Policy
							</h2>
						</th>
						<th>
							<span style="font-size: 14px" class="ui-state-default ui-corner-all float-right ui-button">
							<?php echo $this->Html->link('New Privacy Policy',array('controller' => 'Users', 'action' => 'privacy_add'));?>
							</span>
						</th>
					</tr>
				</thead>
			</table>
 		 	
				       <span> </span>
		</div>
			<?php if($myvar = $this->Session->flash()){ ?>
				<div class="response-msg success ui-corner-all">
					
					<?php echo $myvar;?>
				</div>
				
			<?php } ?>
     
	 		
     
    		<div class="content-box content-box-header" style="border:none;">
			<div class="three-col-mid">
			<?php  echo $this->element('adminElements/privacy_policy_list');?>
			</div>
            			
			</div>
            
            
			<div class="clearfix"></div>			
			<div class="clear"></div>
		</div>
		<div class="clear"></div>
	</div>
</div>
<div class="clear"></div>




