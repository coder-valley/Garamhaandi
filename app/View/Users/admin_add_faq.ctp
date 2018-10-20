<?php echo $this->Html->script('admin/jquery.validate.js'); ?>
<?php echo $this->Html->script('admin/additional-methods.js'); ?>
<?php echo $this->Html->script('common.js'); ?>
<div id="sub-nav">
	<div class="page-title">
	<?php if(@$edit_faq['Faq']['id']!='') {?>
   	<h1>EDIT FAQ</h1>
    <?php } else { ?>				
				<h1>ADD FAQ</h1>
				<?php } ?>
	</div>
</div>
<div id="page-layout">
	<div id="page-content">   		
		<div id="page-content-wrapper">		
		<a style="margin-bottom:10px;" onclick="history.go(-1);"  class="ui-state-default ui-corner-all float-right ui-button">Back</a>	
		<div class="inner-page-title">
		  <?php if(@$edit_faq['Faq']['id']!='') {?>
    <h2>Edit Faq</h2>
    <?php } else { ?>				
				<h2>Add Faq</h2>
				<?php } ?>
				<span></span>
			</div>
		<?php echo $this->Session->flash();?>
			<div class="content-box content-box-header">
				<div class="column-content-box">
					<div class="ui-state-default ui-corner-top ui-box-header">
						<span class="ui-icon float-left ui-icon-notice"></span>
						 <?php if(@$edit_faq['Faq']['id']!='') {?>
      	   Edit Faq
        <?php } else { ?>	
						   Add Faq
						<?php } ?>
					</div>
						
					<div class="content-box-wrapper">
					<form name="myform" id="tableForm" class="pager-form" method="post"  action="<?php echo HTTP_ROOT.'admin/Users/add_faq';?>">
      <input type="hidden" class="field text full" id="ids" name="data[Faq][id]" value="<?php echo @$edit_faq['Faq']['id']?>">					
					<fieldset>
							<ul>
								<li>
								    <label class="desc">Topic<em style="color:red;">*</label>
								   <div class="location-select">
								    <select class="form-control required" id="country" name="data[Faq][topic_id]">
									    <option selected="selected" disabled="">select</option>
									    <?php foreach ($tpc  as $counting){?>
									    <option value="<?php echo @$counting['Topic']['id']; ?>"><?php echo @$counting['Topic']['topic']; ?></option>
									    <?php } ?>
										</select> 
									</div>
								</li>
							    <li>
								    <label class="desc" >Question<em style="color:red;">*</label>
								     <div>
									      <input class="field text full" id="Question" name="data[Faq][question]" type="text" value="<?php echo @$edit_faq['Faq']['question']?>">
									        <div style="color:red;float:left;" id="respon"></div>	
								     </div>
								</li>
								   
							    <li>
									    <label class="desc" >Answer<em style="color:red;">*</label>
									     <div>
									       <textarea class="field text full" id="Answer" name="data[Faq][answer]" ><?php echo @$edit_faq['Faq']['answer']?></textarea>
										    </div>
								   </li>
								   
								   <li>
									       <input type="submit" id="btnsub" value="Submit">									
								   </li>													
							</ul>
						</fieldset>
					</form>	
					</div>                        

				</div>
			</div>
			
		</div>
		<div class="clear"></div>
	</div>
</div>
<div class="clear"></div>
<script>
	$(document).ready(function(){

		$('#tableForm').validate({
			rules:
			{

	 			"data[Faq][question]":
				{
					required:true,
		  },
		  "data[Faq][answer]":
				{
					required:true,
		  }
		 }
	});
	
	});
</script>