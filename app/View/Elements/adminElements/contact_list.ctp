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
margin-left:10px!important;
}
.AjaxPage.current {
    font-weight:bolder;
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

<div id="page-content">
	<div id="page-content-wrapper" style="padding:0; margin:0; background:0; box-shadow:0 0 0 0 #fff;">
				
				<div class="hastable" style="text-align:center;">
					<form name="myform" class="pager-form" method="post" action="">
						<table id="sort-table"> 
						<thead> 
						<tr>
							<th title="Sort">S.No</th>
							<th title="Sort">Name</th>
							<th title="Sort">Email</th>
							<th title="Sort">Customer Message</th>
							<th title="Sort">Our Response</th>
							<td style="cursor:text;width:200px">Action</td> 
						</tr> 
						</thead> 
						<tbody> 
           		<?php $va=count($contacts);
                 $i=1;
						          foreach($contacts as $contact) { 
						     ?>
						   <tr>
                           <!-- <td class="center"><input type="checkbox" class="checkbox" name="list" value="1" id="<?php echo $contact['Contact']['id'];?>"></td> -->
                           <td style="text-align:center"> <?php echo $i;?></td>
						   <td style="text-align:center"><?php echo $contact['Contact']['name']?></td>
						   <td style="text-align:center"><?php echo $contact['Contact']['email']?></td>
                          <td style="text-align:center"><?php echo $contact['Contact']['message']?></td>
						  <?php if(empty($contact['Contact']['reply'])){?>
                          <td style="text-align:center">Not replied</td>
                          <?php }else{?>
                           <td style="text-align:center"><?php echo $contact['Contact']['reply']?></td>
                           <?php }?>
                           <td style="width:150px">
								                      <a class="btn_no_text btn ui-state-default ui-corner-all tooltip" title="Reply" href="<?php echo HTTP_ROOT.'admin/Users/reply_contacts/'.base64_encode(convert_uuencode($contact['Contact']['id']))?>">
                               <span class="ui-icon ui-icon-search"></span>
								                      </a>
								                      
									                     <a title="Delete" href="<?php echo HTTP_ROOT.'admin/Users/delete_contacts/'.base64_encode(convert_uuencode($contact['Contact']['id']))?>" onclick="if(!confirm('Are you sure, you want to delete this business owner?')){return false;}" class="btn_no_text btn ui-state-default ui-corner-all tooltip">
                               <span class="ui-icon ui-icon-circle-close"></span>
                               </a>
							                    </td>
           </tr> 
						<?php $va--;$i++;}  ?>						
						</tbody>
						</table>
					</form>		
<?php @$c=$this->Paginator->counter(array('format'=>'pages'));@$v=explode('of',$c);@$count=$v[1];
                 if($count>1){?>
					<div class="pagination-div">
                                <ul>
						<li><?php echo $this->Paginator->prev(' << ' . __(''),array(),null,array('class' => 'prev disabled AjaxPage'));?></li>
				
						<li><?php echo $this->Paginator->numbers(array('modulus' => '4','class'=>'AjaxPage'));?></li>
						 
						<li><?php echo $this->Paginator->next(' >> ' . __(''),array(),null,array('class' => 'next disabled AjaxPage'));?></li>
					  </ul>
				<?php //echo $this->Paginator->numbers();?>	
			</div>	<?php }?>
      <?php if(empty($contacts)){?>
					<div style="font-size:20px;text-align:center;padding-top:5px;">No Records Found</div>
				 <?php 	}?>
					<div class="clear"></div>
				</div>
                
                 
				<div id="pager">
					<?php //echo $this->element('adminElements/table_head'); ?>
				</div>
				<div class="clear"></div>
		<div class="clear"></div>
    </div>
			<div class="clear"></div>
	</div>
<script>
/*	$(document).ready(function() {

	 Table Sorter 
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
	
	

	
});*/
</script>
<script>
	
function abc()
{
	  var id_sent=0;
	  var a=$("#action").val();
			$('.checkbox').each(function(){
  
			if($(this).is(":checked"))
			{
				var id=$(this).attr('id');
				if(id_sent=="0")
				{
					id_sent=id;
				}else
				{
					id_sent=id_sent+','+id;
				}
				
			}
		});
			if(id_sent!="" && a=='delete')
			{
			
				  if(confirm('Are you sure, you want to delete selected user?'))
				  {
					var id=id_sent.indexOf(",");
				 location.replace("<?php echo HTTP_ROOT; ?>/admin/users/deleteAll/"+id_sent+"/User");
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
