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
						
						<th title="Sort">Title</th>
						<th title="Sort">Description</th>
						<th title="Sort">Price</th>
						<th title="Sort">Category</th>
						<th title="Sort">Subcategory</th>
						<th title="Sort">Type</th>
						<td style="cursor:text;width:200px">Action</td> 
						</tr> 
						</thead> 
						<tbody> 
						
           <?php $va=count($pr);
            $i=1;
			foreach($pr as $pr_list) { 
			?>
			<tr>
			<!-- <td class="center"><input type="checkbox" class="checkbox" name="list" value="1" id="<?php echo $pr_list['Food']['id'];?>"></td> -->

            <td style="text-align:center"> <?php echo $i;?></td>

            <!--<td style="text-align:center"><?php echo $pr_list['Product']['organizer']?></td>-->
			
		
			
			<td style="text-align:center"><?php echo $pr_list['Food']['title']?></td>
			<td style="text-align:center"><?php echo $pr_list['Food']['description']?></td>
			<td style="text-align:center">Rs. <?php echo $pr_list['Food']['price']?></td>

			<td style="text-align:center"><?php echo $pr_list['Food']['category']?></td>
			<td style="text-align:center"><?php echo $pr_list['Food']['subcategory'];?></td>
			<td style="text-align:center"><?php echo $pr_list['Food']['type']?></td>
			

		   <!--  <td style="text-align:center"><img src="<?php echo HTTP_ROOT.'img/dish/'.$pr_list['Food']['image'] ?>" width="50%" height="10%"></td> -->
		    	
			<td style="width:150px">

			 <a class="btn_no_text btn ui-state-default ui-corner-all tooltip" title="Edit Dish" href="<?php echo HTTP_ROOT.'admin/Users/food_edit/'.base64_encode($pr_list['Food']['id']);?>">
            <i class="fa fa-edit" aria-hidden="true"></i> </a>
             <!-- <a class="btn_no_text btn ui-state-default ui-corner-all tooltip" title="View Dish" href="<?php echo HTTP_ROOT.'admin/Users/view_product/'.base64_encode(convert_uuencode($pr_list['Food']['id']))?>">
                               <span class="ui-icon ui-icon-search"></span>
								                      </a> -->

			 <a title="Delete Dish" href="<?php echo HTTP_ROOT.'admin/Users/delete_food/'.base64_encode(convert_uuencode($pr_list['Food']['id']))?>" onclick="if(!confirm('Are you sure, you want to delete this Dish?')){return false;}" class="btn_no_text btn ui-state-default ui-corner-all tooltip">
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
            <?php if(empty($pr)){?>
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
