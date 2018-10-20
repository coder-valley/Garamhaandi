<div id="sub-nav">
	<div class="page-title">
		<h1>FAQ DETAIL</h1>
	</div>
	<div id="top-buttons">		
        <a href="<?php echo HTTP_ROOT.'admin/users/faq'?>" class="btn ui-state-default ui-corner-all">Back</a>
	</div>
</div>
<div id="page-layout">
	<div id="page-content">   		
		<div id="page-content-wrapper" class="no-bg-image wrapper-full">			
			
			<div class="content-box content-box-header">
				<div class="column-content-box">

					<div class="ui-state-default ui-corner-top ui-box-header">

						<span class="ui-icon float-left ui-icon-notice"></span>
						 Faq Detail
					</div>
						
					<div class="content-box-wrapper">

			<div class="hastable">
					<table id="sort-table" class="view"> 
                            <tbody>
                                <!-- user=0 bussiness=1-->
								                       <tr><th>Question</th><td style="width:60%;"><?php  echo $view_faq['Faq']['question']; ?></td></tr>
									                      <tr><th>Answer</th><td style="width:60%;"><?php   echo $view_faq['Faq']['answer']; ?></td></tr>
									                  </tbody>
						</table>
                 <div class="clear"></div>
				</div>
				
			</div>
			<div class="clearfix"></div>
			
			<div class="clear"></div>
		</div>
		<div class="clear"></div>
	</div>
</div>
<div class="clear"></div> 