<?php echo $this->Html->script('newadmin/jquery.validate.js'); ?>
<script type="text/javascript">
$(document).ready(function() {
		
	$('#editDetail').validate(
	{
		rules:
		{
			"data[User][username]":
			{
				required:true
			},
			"data[User][email]":
			{
				required:true,
			}
		},
		messages:
		{
			"data[User][username]":
			{
				required:'This field is required.'
			},
			"data[User][password]":
			{
				required:'This field is required.'
			}
		}
	});
	
});
</script>
<style>
.container_load{
	margin: 0px auto;
	width: 100px;
	position: absolute;
	top: 69%; left: 49%;
 }
 .loading_overlay
	{
		background-color: #E3E3E3;		
		height: 100%;
		left: 0;
		opacity: 0.3;
		position: fixed;
		top: 0;
		width: 100%;
		//z-index: 9999;
	}
</style>
<div id="sub-nav">
	<div class="page-title">
		<h1>Edit Faq</h1>
		<span></span>
	</div>
		<div id="top-buttons">

		</div>

</div>

		
<div id="page-layout">
	<div id="page-content">
		<div id="page-content-wrapper">
			<a style="margin-bottom:10px;" class="ui-state-default ui-corner-all float-right ui-button" href="javascript:void(0);" onclick="history.go(-1)">Back</a>
			<div class="inner-page-title">
				<h2>Edit Faq</h2>
				<span></span>
			</div>
			<?php echo $this->Session->flash()?>
			<div class="content-box content-box-header" style="border:none;">
			<div class="column-content-box">



						<div class="ui-state-default ui-corner-top ui-box-header">

							<span class="ui-icon float-left ui-icon-notice"></span>

							Edit FAQ
						</div>

						
						<div class="content-box-wrapper">

							<form method="post" action="" id="editDetail" >
							  <input type="hidden" name="id" value="<?php  echo $id;?>"/>
						<fieldset>
							<ul>
								<li>
									<label class="desc" >Topic</label>
									<select class="form-control required city_change"  name="topic_id">
									    <option value="" disabled >select</option>
									    <?php foreach ($tpc as $topic){?>
									    <option  value="<?php echo @$topic['Topic']['id']; ?>"
									    <?php echo @$topic['Topic']['id']==$details['Faq']['topic_id']?'selected':'';?>>
									    <?php echo @$topic['Topic']['topic']; ?> </option>
									    <?php }  ?>
									</select>
								</li>
								<li>
									<label class="desc" >Question</label>
									<div>
										<input name="question"  class="field text full required" type="text" value="<?php echo $details['Faq']['question']; ?>" >
									</div>
								</li>
								<li>
									<label class="desc" >Answer</label>
									<div>
										<input name="answer" class="field text full required" type="text" value="<?php echo $details['Faq']['answer']; ?>" >
									</div>
								</li>
								<li>
									<input class = "sub-bttn" type="submit" value = "Submit"/>
								</li>							
								
							</ul>
						</fieldset>
					</form>
						</div>
                    	

				</div>
			</div>
			<div class="clearfix"></div>
			<div class="clear"></div>
		</div>
		<div class="clear"></div>
	</div>
</div>
	<div class="clear"></div>
