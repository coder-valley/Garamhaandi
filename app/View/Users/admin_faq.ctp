<?php  echo $this->Html->script('admin/ui/ui.core.js');?>
<?php  echo $this->Html->script('admin/ui/ui.datepicker.js'); ?>
<?php  echo $this->Html->css('ui/ui.datepicker.css'); ?>

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
.pagination-div{
 float: right;
    font-size: 16px;
    font-weight: bold;
    padding-right: 10px;
    padding-top: 10px;
    width: auto;
    }
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

<div id="sub-nav" >
	<div class="page-title">
		<h1>FAQ LISTING</h1>
		<span></span> </div>
</div>
<div id="page-layout" >
	<div id="page-content" >
		<div id="page-content-wrapper" class="no-bg-image wrapper-full" >
      
  <div id="google_translate_element"></div>
		<div class="inner-page-title">
    	<h2 style="width:20%; float:left;">All Faq Listing</h2>
    <a class="ui-state-default ui-corner-all float-right ui-button" href="<?php echo HTTP_ROOT.'admin/Users/add_faq';?>">Add Faq</a>
				 
			</div>
			<?php if($myvar = $this->Session->flash()){ ?>
				<div class="response-msg success ui-corner-all">
					<?php echo $myvar;?>
				</div>
				
			<?php } ?>
     
	 		
    		<div class="content-box content-box-header" style="border:none;">
			    <div class="three-col-mid">
			     <?php  echo $this->element('adminElements/faq_list');?>
			    </div>
     	</div>
         
			<div class="clearfix"></div>			
			<div class="clear"></div>
		</div>
		<div class="clear"></div>
	</div>
</div>
<div class="clear"></div>

