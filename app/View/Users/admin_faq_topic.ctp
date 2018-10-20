<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" type="text/css">

<div id="sub-nav">
    <div class="page-title">
		<h1>topics</h1>
    </div>
</div>
<div id="page-layout">

	<div id="page-content">
        <div id="page-content-wrapper" class="no-bg-image wrapper-full">           
            
			<?php if($myvar = $this->Session->flash()){ ?>
				<div class="response-msg success ui-corner-all">
					<?php echo $myvar;?>
				</div>
				
			<?php } ?>
            <div class="hastable">
             <table id="sort-table"> 
                 <thead> 
					<tr>
							<th align="left" style="text-align:left;" colspan="7"><span style="font-size: 14px">List of Faq's topic
							</span></th>
							<th>
							<span style="font-size: 14px" class="ui-state-default ui-corner-all float-right ui-button">
							<?php echo $this->Html->link('Add Topic',array('controller' => 'Users', 'action' => 'faq_topic_add'));?>
							</span>
							</th>
					</tr> 
					
							
			</thead>
			
			 </table>
			   		<br>	
				<div class="hastable" style="text-align:center;">
					<form name="myform" class="pager-form" method="post" action="">
						<table id="sort-table"> 
						<thead> 
						<tr>
                            <th title="Sort">Sr.No</th>
		                    <th title="Sort">Heading</th>
							<td style="cursor:text;width:200px">Action</td> 
						</tr> 
						</thead> 
						<tbody> 
						<?php $i=1; foreach ($details as $detail): ?>			 
						   <tr>
                            	<td style="text-align:center"><?php echo $i; ?></td>
								<td style="text-align:center"><?php echo $detail['Topic']['topic']?></td> 
                            	<td style="width:150px">
                           			<a title="Delete_user" href="<?php echo HTTP_ROOT.'admin/users/delete_topic/'.base64_encode(convert_uuencode($detail['Topic']['id']))?>" onclick = "if(!confirm('Are you sure, you want to delete this Topic?')){return false;}" class="ui-state-default ui-corner-all float-left ui-button tooltip"><i class="fa fa-trash" aria-hidden="true"></i></a>
									

									<a class="ui-state-default ui-corner-all float-left ui-button" title="Edit" href="<?php echo HTTP_ROOT.'admin/users/faqtopic_edit/'.base64_encode($detail['Topic']['id'])?>" >
									<i class="fa fa-edit" aria-hidden="true"></i>
									</a>
                           		 </td>
                            </tr> 
                            <?php $i++; endforeach; ?>
						
						</tbody>
						</table>
					</form>		
                    
					<div class="clear"></div>
				</div>						
			<div class="clear"></div>
			
       		</div>
			
        </div>
        <div class="clear"></div>			
    </div>
</div>
