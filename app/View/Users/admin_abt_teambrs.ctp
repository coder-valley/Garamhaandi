

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
		<h1>Team Members</h1>
		<span></span> </div>
</div>
<div id="page-layout" >
	<div id="page-content" >
		<div id="page-content-wrapper" class="no-bg-image wrapper-full" >
      
		
						
		<div class="inner-page-title">
  			<h2 style="width:50%; float:left;">Team Members</h2>
			<span style="font-size: 14px; margin-bottom: 1%; padding: 9px 13px 9px;" class="ui-state-default ui-corner-all float-right ui-button">
				<?php echo $this->Html->link('Add Team Members',array('controller' => 'Users', 'action' => 'admin_about_team'));?>
			</span>
		</div>
			<?php if($myvar = $this->Session->flash()){ ?>
				<div class="response-msg success ui-corner-all">
					
					<?php echo $myvar;?>
				</div>
				
			<?php } ?>
     
    		<div class="content-box content-box-header" style="border:none;">
			<div class="three-col-mid">
			<?php  echo $this->element('adminElements/abt_tm_list');?>
			</div>
            			
			</div>
            
            
			<div class="clearfix"></div>			
			<div class="clear"></div>
		</div>
		<div class="clear"></div>
	</div>
</div>
<div class="clear"></div>