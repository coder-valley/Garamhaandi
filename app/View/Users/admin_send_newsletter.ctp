<?php $opt = $this->request->url; $url = base64_encode($opt);?>
<?php  //echo $this->Html->script('newadmin/tablesorter.js');?>
<?php  //echo $this->Html->script('newadmin/tablesorter-pager.js');?>
<?php  echo $this->Html->script('newadmin/common.js');?>

<style>
.radio
{
font-size:15px;
}
.pagination-div{
 float: right;
    font-size: 16px;
    font-weight: bold;
    padding-right: 10px;
    padding-top: 10px;
    width: auto;
    }
.pagination-div ul
{
float:left;
list-style:none;
}
.pagination-div ul li{
background: none repeat scroll 0 0 #ddd;
    float: left;
    margin-left: 10px;
    padding: 10px;
}
.AjaxPage {
    margin-right: 10px;
 margin-left: 10px;
}
.AjaxPage.current {
    font-weight:bolder;
}
.success {
   
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

</script>
<div id="sub-nav" >
	<div class="page-title">
		<h1>Subscribers</h1>
		<span></span> </div>
</div>
<div id="page-layout" >
	<div id="page-content" >
		<div id="page-content-wrapper" class="no-bg-image wrapper-full" >
      
		
   		
			<div id="google_translate_element"></div>
		<div class="inner-page-title">
           
         <?php @$action=@$this->params[action]; ?>
        		<h2 style="width:20%; float:left;">All Subscribers</h2>
        		 <?php if($action!='admin_newsletter_subcribers'){?>  
                        <a class="ui-state-default ui-corner-all float-right ui-button" href="<?php echo HTTP_ROOT.'admin/Users/manage_newsletter/';?>">Back</a>
                       
                     
        		<a href="<?php echo HTTP_ROOT.'admin/users/individual_listing/'.base64_encode(convert_uuencode($id))?>"><?php if($action=='admin_individual_listing'){?><input type="radio" checked="checked" name="user"><?php } else { ?><input type="radio" name="user"><?php } ?></a><label class="radio">Individual</label>
        		<a href="<?php echo HTTP_ROOT.'admin/users/business_listing/'.base64_encode(convert_uuencode($id))?>"><?php if($action=='admin_business_listing'){ ?><input type="radio" checked="checked" name="user"><?php } else { ?><input type="radio" name="user"><?php } ?></a><label class="radio">Business Owner</label>
				      <a href="<?php echo HTTP_ROOT.'admin/users/send_newsletter/'.base64_encode(convert_uuencode($id))?>"><?php  if($action=='admin_send_newsletter'){ ?><input type="radio" checked="checked" name="user"><?php } else { ?><input type="radio" name="user"><?php } ?></a><label class="radio">Both</label>
				 <?php }?>
			</div>
			<?php if($myvar = $this->Session->flash()){ ?>
				<div class="response-msg success ui-corner-all">
					<?php echo $myvar;?>
				</div>
				
			<?php } ?>
     
	 		
    		<div class="content-box content-box-header" style="border:none;">
			<div class="three-col-mid">
				<div id="page-content">
	<div id="page-content-wrapper" style="padding:0; margin:0; background:0; box-shadow:0 0 0 0 #fff;">
				
				<div class="hastable" style="text-align:center;">
					<form name="myform" class="pager-form" method="post" action="<?php echo HTTP_ROOT.'admin/users/send_newsletter'?>">
					<input type="hidden" name="data[NewsletterTemplate][id]" value="<?php echo @$id;?>">
						<table id="sort-table"> 
						<thead> 
						<tr>
						 <?php if($action!='admin_newsletter_subcribers'){?> 
                        <th><input type="checkbox" id="check_uncheck" class="check_all submit"/></th>
                        <?php }?>
                        	<th title="Sort">User Type</th>
                        	<th title="Sort">First Name</th>
                        	<th title="Sort">Last Name</th>
                        	<th title="Sort">Email</th>
						          <!-- <th title="Sort">Date Added</th>  -->
							
						</tr> 
						</thead> 
						<tbody> 
                        
            <?php
						$va=count($subscriber);
						$i=1;
						foreach($subscriber as $subscriber_list) { ?>
							<tr>
							<?php if($action!='admin_newsletter_subcribers'){?> 
                                <td class="center">
                	               <input type="checkbox" class="check"  name="emails[<?php echo $subscriber_list['User']['id']?>]" value="<?php echo $subscriber_list['User']['email'];?>" >
                                </td>
                                <?php }?>
                                <td style="text-align:center"><?php  if($subscriber_list['User']['user_type']==0){ echo 'Individual';}else{ echo 'Business Owner';}?></td>
                                <td style="text-align:center"><?php echo $subscriber_list['User']['firstname']?></td>
                                <td style="text-align:center"><?php echo $subscriber_list['User']['lastname']?></td>
                                <td style="text-align:center"><?php echo $subscriber_list['User']['email']?></td>
                        
							</tr> 
						<?php $va--;$i++;} ?>						
						</tbody>
						</table>
						 <?php if($action!='admin_newsletter_subcribers'){?> 
						<input type="submit" id="sub" class="img_mag" value="Send Newsletter"  style="margin-top:10px; float:left;width:120px;"/>						
						<?php }?>
					</form>		
                     <?php if(empty($subscriber))
					{?>
					<div style="font-size:20px;text-align:center;padding-top:5px;">No Records Found</div>
				<?php 	}?>
					<div class="clear"></div>
				</div>
				
                
                 
					<?php @$c=$this->Paginator->counter(array('format'=>'pages'));@$v=explode('of',$c);@$count=$v[1];
                 if($count>1){?>
			<div class="pagination-div">
                                <ul>
						<li><?php echo $this->Paginator->prev(' << ' . __(''),array(),null,array('class' => 'prev disabled AjaxPage'));?></li>
				
						<li><?php echo $this->Paginator->numbers(array('modulus' => '4','class'=>'AjaxPage'));?></li>
						 
						<li><?php echo $this->Paginator->next(' >> ' . __(''),array(),null,array('class' => 'next disabled AjaxPage'));?></li>
					  </ul>
				<?php //echo $this->Paginator->numbers();?>	
			</div>	
<?php }?>
				<div class="clear"></div>
		<div class="clear"></div>
    </div>
			<div class="clear"></div>
	</div>

			</div>
            			
			</div>
         
			<div class="clearfix"></div>			
			<div class="clear"></div>
		</div>
		<div class="clear"></div>
	</div>
</div>
<div class="clear"></div>
<!--script>
	$(document).ready(function() {

	/* Table Sorter */
	$("#sort-table")
	.tablesorter({
		widgets: ['zebra'],
		headers: { 
		            // assign the secound column (we start counting zero) 
		            0: { 
		                // disable it by setting the property sorter to false 
		                sorter: false 
		            }, 
		            // assign the third column (we start counting zero) 
		            // 6: { 
		            //     // disable it by setting the property sorter to false 
		            //     sorter: false 
		            // } 
		        } 
	})
	
	.tablesorterPager({container: $("#pager")}); 
	
	$(".header").append('<span class="ui-icon ui-icon-carat-2-n-s"></span>');
	
	

	
});
</script--!>

<script>
$(document).ready(function(){
	$("#check_uncheck").click(function(){
		if($(this).hasClass("check_all"))
		{
			
			$(this).removeClass("check_all");
			$(".check").attr("checked",true);
		}
		else
		{
		
			$(this).addClass("check_all");
			$(".check").attr("checked",false);
		}
	});
		
});
</script>

