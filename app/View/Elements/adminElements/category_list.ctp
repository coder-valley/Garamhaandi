<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" type="text/css">
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
                        <!-- <th>
                        	<input type="checkbox" class="submit" onclick="this.value=check(this.form.list)" value="check_none">
                        </th> -->
                        <th title="Sort">Sr.No</th>
						<!--<th title="Sort">Organizer</th>-->
						
<!-- 						<th title="Sort">Address</th>
						<th title="Sort">Address Type</th> -->
						<th title="Sort">Category</th>
						<!-- <th title="Sort">State</th>
						<th title="Sort">City</th>
						<th title="Sort">Location</th> -->
						<!-- <th title="Sort">Contact No.</th> -->
						<td style="cursor:text;width:200px">Action</td> 
						</tr> 
						</thead> 
						<tbody> 
						
           <?php $va=count($uid);
            $i=1;
			foreach($uid as $pr_list) { 
			?>
			<tr>
            <td style="text-align:center"> <?php echo $i;?></td>
			<td style="text-align:center"><?php echo $pr_list['Category']['category']?></td>
			<!-- <td style="text-align:center"><?php echo $pr_list['State']['statename']?></td>
			<td style="text-align:center"><?php echo $pr_list['City']['city_name'];?></td>
			<td style="text-align:center"><?php echo $pr_list['Location']['location']?></td> -->
		    	
			<td style="width:150px">

				<!-- <a class="btn_no_text btn ui-state-default ui-corner-all tooltip" title="Edit Location" href="<?php echo HTTP_ROOT.'admin/Users/location_edit/'.base64_encode($pr_list['Location']['id']);?>">
	            <i class="fa fa-edit" aria-hidden="true"></i> </a> -->
				 
				<a title="Delete Location" href="<?php echo HTTP_ROOT.'admin/Users/delete_category/'.base64_encode(convert_uuencode($pr_list['Category']['id']))?>" onclick="if(!confirm('Are you sure, you want to delete this Category?')){return false;}" class="btn_no_text btn ui-state-default ui-corner-all tooltip">
	            <i class="fa fa-trash" aria-hidden="true"></i></a>
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
