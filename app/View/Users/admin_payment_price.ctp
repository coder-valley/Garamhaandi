<div id="sub-nav">
    <div class="page-title">
		<h1>Payment Price</h1>
    </div>
</div>
<div id="page-layout">

	<div id="page-content">
        <div id="page-content-wrapper" class="no-bg-image wrapper-full">           
            <?php echo $this->Session->flash();?>
            <div class="hastable">
             <table id="sort-table"> 
                 <thead> 
					<tr>
							<th align="left" style="text-align:left;" colspan="7"><span style="font-size: 14px">Payment Price</span></th>
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
												<th title="Sort">Type</th>
							                     <th title="Sort">Payment Price</th>
							                    
							                     <td style="cursor:text;width:200px">Action</td> 
						</tr> 
						</thead> 
						<tbody> 
                        
                        <?php
					
						$i=1;
						 foreach($payment as $payments){?>
						   <tr>
								<td style="text-align:center"> <?php echo $i;?></td>
								<td style="text-align:center"><?php echo $payments['PaymentPrice']['type']?></td> 
								<td style="text-align:center"><?php echo $payments['PaymentPrice']['price']?></td> 
							                    	     
								<td style="width:150px">
									<a title="Edit" href="<?php echo HTTP_ROOT.'admin/users/edit_payment/'.base64_encode(convert_uuencode($payments['PaymentPrice']['id']))?>" class="btn_no_text btn ui-state-default ui-corner-all tooltip">
										<span class="ui-icon ui-icon-pencil"></span>
									</a>
                   
								</td>
                         </tr> 
						<?php $i++;}?>					
						</tbody>
						</table>
					</form>		
                     <?php if(empty($payments))
					{?>
					<div style="font-size:20px;text-align:center;padding-top:5px;">No Records Found</div>
				<?php 	}?>
				
					<div class="clear"></div>
				</div>						
			<div class="clear"></div>
			
       		</div>
			
        </div>
        <div class="clear"></div>			
    </div>
</div>
