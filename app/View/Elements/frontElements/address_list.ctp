<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" type="text/css">
<style>
	.headingorders{
		padding-right: 20px;
    	width: 15%;
	}
	.edit
	{
		font-size: 20px;
	}
</style>

<div id="page-content">
	<div id="page-content-wrapper" style="padding:0; margin:0; background:0; box-shadow:0 0 0 0 #fff;">
				
				<div class="hastable" style="text-align:center;">
					<form name="myform" class="pager-form" method="post" action="">
						<table id="sort-table"> 
						<thead> 
						<tr>
                        <th class="headingorders" style="width: 10%!important" title="Sort">Sr.No</th>
						<th class="headingorders" style="width: 15%!important" title="Sort">Address</th>
						<!-- <th class="headingorders" title="Sort">Country</th> -->
						<th class="headingorders" style="width: 15%!important" title="Sort">State</th>
						<th class="headingorders" style="width: 15%!important; text-align: center;" title="Sort">City</th>
						<th class="headingorders" style="width: 15%!important; text-align: center;" title="Sort">Location</th>
						<th class="headingorders" style="width: 15%!important" title="Sort">Pincode</th>
						<th class="headingorders" style="width: 15%!important; cursor:text;width:200px">Action</th> 
						</tr> 
						</thead> 
						<tbody> 
						
           <?php $va=count($uid);
            $i=1;
			foreach($uid as $pr_list) { 
			?>
			<tr>
			<!-- <td class="center"><input type="checkbox" class="checkbox" name="list" value="1" id="<?php echo $pr_list['Address']['id'];?>"></td> -->

            <td style="text-align:left"> <?php echo $i;?></td>

			<td style="text-align:left"><?php echo $pr_list['Address']['adress']?></td>
			<td style="text-align:left"><?php echo $pr_list['State']['statename']?></td>
			<td style="text-align:center;"><?php echo $pr_list['City']['city_name'];?></td>
			<td style="text-align:center;"><?php echo $pr_list['Location']['location'];?></td>
			<td style="text-align:left"><?php echo $pr_list['Address']['pincode']?></td>
			<td style="text-align:left; width:150px">
				<a class="edit" title="Edit Address" href="<?php echo HTTP_ROOT.'/homes/address_edit/'.base64_encode($pr_list['Address']['id']);?>"><i class="fa fa-edit" aria-hidden="true"></i>
            	</a>
			 	<a title="Delete Address" href="<?php echo HTTP_ROOT.'admin/Users/delete_address/'.base64_encode(convert_uuencode($pr_list['Address']['id']))?>" onclick="if(!confirm('Are you sure, you want to delete this Address?')){return false;}" class="edit">
            	<i class="fa fa-trash" aria-hidden="true"></i>
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
			</div>	
<?php }?>
            <?php if(empty($uid)){?>
				<div style="font-size:20px;text-align:center;padding-top:5px;">No Records Found</div>
			<?php 	}?>
				<div class="clear"></div>
				</div>
                <!-- <div style="font-size:14px; margin-left:10px; padding-top:10px;">Perform Action:</div>	
                <select id="action" style="margin-left:124px; margin-top:-17px;" onchange="abc();">
                <option value="">Select</option>
				            <option value="delete" >Delete</option>
                                               
               </select> -->
				<div id="pager">
					<?php //echo $this->element('adminElements/table_head'); ?>
				</div>
				<div class="clear"></div>
		<div class="clear"></div>
    </div>
			<div class="clear"></div>
	</div>
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
			
				  if(confirm('Are you sure to delete?'))
				  {
					var id=id_sent.indexOf(",");
				 location.replace("<?php echo HTTP_ROOT; ?>/admin/users/deleteAll/"+id_sent+"/Menu");
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
