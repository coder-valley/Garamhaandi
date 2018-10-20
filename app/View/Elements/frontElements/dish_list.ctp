<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" type="text/css">
<style>
	.imagedash{
		width: 50%;
	}
	
	.leftside{
		text-align: center;
	}
	.rightside{
		text-align: right;
	}
	.Date{
		font-weight: 900;
		font-size: 20px;
		background-color: #0c786b;
		color: white;
		text-align: center;
	}
	.edit
	{
		font-size: 20px;
	}
</style>




<section>
	<div class="container">   
	  <div class="row m-t-40 m-b-20" style="margin-top:55px">
	    <div class="col-md-12 aboutheadmain m-b-50 headimage">
	      <h3 class="text-center">Dashboard</h3>
	      <p class="text-center">Welcome to GaramHaandi</p>
	      <?php if($myvar = $this->Session->flash()){ ?>
				<div class="response-msg success ui-corner-all">
					<?php echo $myvar;?>
				</div>
				
			<?php } ?>
	    </div>
	    <div class="col-md-12">
	      <div class="row">
	        <div class="col-md-3 aboutheadmain m-b-50 leftside">
	        	<?php echo $this->element('frontElements/sidebar');?>
	        </div>
	        <div class="col-md-9 aboutheadmain m-b-50" style="padding-left:10px!important;">
	        
	        	<div class="col-md-12">
					<h2><b>Dishes You Added</b></h2><br>
	        	</div>
	        <div class="container col-md-12">
  					<div class="hastable" style="text-align:center;">
					<form name="myform" class="pager-form" method="post" action="">
						<table class="table table-hover" id="sort-table"> 
						<thead> 
							<tr>
		                        <th>Sr.No</th>
								<th style="text-align:center; width:150px;">Title</th>
								<th style="text-align:center">Description</th>
								<th style="text-align:center; width:100px;">Price</th>
								<th style="text-align:center">Category</th>
								<th style="text-align:center">Subcategory</th>
								<th style="text-align:center">Type</th>
								<th style="text-align:center">Image</th>
								<th style="cursor:text;text-align:center;">Action</th> 
							</tr> 
						</thead> 
						<tbody> 
						<?php $va=count($pr);$i=1;foreach($pr as $pr_list) { ?>
						<tr>
				            <td><?php echo $i;?></td>
							<td><?php echo $pr_list['Food']['title']?></td>
							<td><?php echo $pr_list['Food']['description']?></td>
							<td>Rs. <?php echo $pr_list['Food']['price']?></td>
							<td><?php echo $pr_list['Food']['category']?></td>
							<td><?php echo $pr_list['Food']['subcategory'];?></td>
							<td><?php if($pr_list['Food']['type'] == 0) echo 'Veg'; else echo 'NonVeg'; ?></td>
						    <td style="text-align:center"><img src="<?php echo HTTP_ROOT.'img/food/'.$pr_list['Food']['image'] ?>" width="50%" height="10%"></td>
							<td style="">
								<a title="Edit Dish" class="edit" href="<?php echo HTTP_ROOT.'homes/edit_dish/'.base64_encode($pr_list['Food']['id']);?>" >
				            	<i class="fa fa-edit" aria-hidden="true"></i> </a>
				            	
								<a title="Delete Dish" class="edit" href="<?php echo HTTP_ROOT.'homes/delete_dish/'.base64_encode(convert_uuencode($pr_list['Food']['id']))?>" onclick="if(!confirm('Are you sure, you want to delete this Dish?')){return false;}" >
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
