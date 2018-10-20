
<style>
.li{
width:100px;	
	}
</style>


<div id="sub-nav">
	<div class="page-title">
		<h1>NEWSLETTER DETAIL</h1>
	</div>
	<div id="top-buttons">		
        <a href="<?php echo HTTP_ROOT.'admin/users/manage_newsletter'?>" class="btn ui-state-default ui-corner-all">Back</a>
	</div>
</div>
<div id="page-layout">
	<div id="page-content">   		
		<div id="page-content-wrapper" class="no-bg-image wrapper-full">			
			
			<div class="content-box content-box-header">
				<div class="column-content-box">

					<div class="ui-state-default ui-corner-top ui-box-header">

						<span class="ui-icon float-left ui-icon-notice"></span>
						 Newsletter Detail
					</div>
						
					<div class="content-box-wrapper">

			<div class="hastable">
					<table id="sort-table" class="view"> 
                            <tbody>
                                <!-- user=0 bussiness=1-->
								                       <tr><th>Title</th><td style="width:60%;"><?php  echo $view_newsletter['NewsletterTemplate']['title']; ?></td></tr>
									                      <tr><th>Description</th><td style="width:60%;"><?php   echo $view_newsletter['NewsletterTemplate']['description']; ?></td></tr>
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