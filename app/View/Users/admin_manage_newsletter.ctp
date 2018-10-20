<!-- <?php $opt = $this->request->url; $url = base64_encode($opt);?>
<?php  //echo $this->Html->script('newadmin/tablesorter.js');?>
<?php  //echo $this->Html->script('newadmin/tablesorter-pager.js');?>
<?php  echo $this->Html->script('newadmin/common.js');?>

<style>
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
		<h1>Newsletter Listings</h1>
		<span></span> </div>
</div>
<div id="page-layout" >
	<div id="page-content" >
		<div id="page-content-wrapper" class="no-bg-image wrapper-full" >
      
		
		
			<div id="google_translate_element"></div>
		<div class="inner-page-title">
                         <a class="ui-state-default ui-corner-all float-right ui-button" href="<?php echo HTTP_ROOT.'admin/Users/add_newsletter/';?>">Add Newsletter</a>
        
        		<h2 style="width:50%; float:left;">All Newsletter Listings</h2>
				 <span> </span>
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
					<form name="myform" class="pager-form" method="post" action="">
						<table id="sort-table"> 
						<thead> 
						<tr>
                        <th><input type="checkbox" class="submit" onclick="this.value=check(this.form.list)" value="check_none"></th>
                        	<th title="Sort">Sr.No</th>
                        	<th title="Sort">Title</th>
                        	<th title="Sort">Description</th>
						          <!-- <th title="Sort">Date Added</th>  -->
							<td style="cursor:text;width:200px">Action</td> 
						</tr> 
						</thead> 
						<tbody> 
                        
            <?php
						$va=count($newsletter);
						$i=1;
						foreach($newsletter as $news) { ?>
							<tr>
                                <td class="center">
                	            <input type="checkbox" class="checkbox" name="list" value="1" id="<?php echo $news['NewsletterTemplate']['id'];?>">
                                </td>
                                <td style="text-align:center"><?php echo $i;?></td>
                                <td style="text-align:center"><?php echo $news['NewsletterTemplate']['title']?></td>
                                <td style="text-align:center"><?php echo $news['NewsletterTemplate']['description']?></td>
                                <td>
                                    <a class=	"btn_no_text btn ui-state-default ui-corner-all tooltip" title="View" href="<?php echo HTTP_ROOT.'admin/users/view_newsletter/'.base64_encode(convert_uuencode($news['NewsletterTemplate']['id']))?>">
                                    <span class="ui-icon ui-icon-search"></span>
							                            </a>
                                    <a class="btn_no_text btn ui-state-default ui-corner-all tooltip" title="Edit" href="<?php echo HTTP_ROOT.'admin/users/edit_newsletter/'.base64_encode(convert_uuencode($news['NewsletterTemplate']['id']))?>">
                                    <span class="ui-icon ui-icon-pencil"></span>
                                    </a>
                                    <a class="btn_no_text btn ui-state-default ui-corner-all tooltip" title="Send NewsLetter" href="<?php echo HTTP_ROOT.'admin/users/send_newsletter/'.base64_encode(convert_uuencode($news['NewsletterTemplate']['id']))?>">
                                    <span class="ui-icon ui-icon-mail-open"></span>
                                    </a>
									                          <a class="btn_no_text btn ui-state-default ui-corner-all tooltip" onclick="if(!confirm('Do you want to delete this record?')){return false;}" title="Delete" href="<?php echo HTTP_ROOT.'admin/users/delete_newsletter/'.base64_encode(convert_uuencode($news['NewsletterTemplate']['id']))?>">
                                    <span class="ui-icon ui-icon-circle-close"></span>
                                    </a>
																	</td>
							</tr> 
						<?php $va--;$i++;} ?>						
						</tbody>
						</table>
					</form>		
                     <?php if(empty($newsletter))
					{?>
					<div style="font-size:20px;text-align:center;padding-top:5px;">No Records Found</div>
				<?php 	}?>
					<div class="clear"></div>
				</div>
                
                 <div style="font-size:14px; margin-left:10px; padding-top:10px;">Perform Action:</div>	
                <select id="action" style="margin-left:124px; margin-top:-17px;" onchange="abc();">
                <option value="">Select</option>
				<option value="delete" >Delete</option>
               
                </select>
					<?php @$c=$this->Paginator->counter(array('format'=>'pages'));@$v=explode('of',$c);@$count=$v[1];
                 if($count>1){?>
			<div class="pagination-div">
                                <ul>
						<li><?php echo $this->Paginator->prev(' << ' . __(''),array(),null,array('class' => 'prev disabled AjaxPage'));?></li>
				
						<li><?php echo $this->Paginator->numbers(array('modulus' => '4','separator'=>null,'class'=>'AjaxPage'));?></li>
						 
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
	
function abc()
{
	  var id_sent=0;
	  var a=$("#action").val();
			$('.checkbox').each(function(){
  
			if($(this).is(":checked"))
			{
				var id=$(this).attr('id');
				//alert(id);
				if(id_sent=="0")
				{
					id_sent=id;
				}else
				{
					id_sent=id_sent+','+id;
					//alert(id_sent);
				}
				
			}
		});
			if(id_sent!="" && a=='delete')
			{
			
				  if(confirm('Are you sure, you want to delete selected newsletter?'))
				  {
					var id=id_sent.indexOf(",");
					location.replace("<?php echo HTTP_ROOT; ?>/admin/users/deleteAll/"+id_sent+"/NewsletterTemplate");
					return false;
				  }
			}
			
			
		
			if(id_sent=='')
			{
				alert('Please select a record ');
				return false;
			}
	  }
</script>
 -->