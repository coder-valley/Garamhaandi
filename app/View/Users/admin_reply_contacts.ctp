<div id="page-layout">
	<div id="page-content">
		<div id="page-content-wrapper">
			<a style="margin-bottom:10px;" class="ui-state-default ui-corner-all float-right ui-button" href="javascript:void(0);" onclick="history.go(-1)">Back</a>
			<div class="inner-page-title">
				<h2>Reply To Request</h2>
				<span></span>
			</div>
			<?php echo $this->Session->flash()?>
			<div class="content-box content-box-header" style="border:none;">
			<div class="column-content-box">



						<div class="ui-state-default ui-corner-top ui-box-header">

							<span class="ui-icon float-left ui-icon-notice"></span>

							Reply 
						</div>

						
						<div class="content-box-wrapper">

							<form method="post" action="<?php echo HTTP_ROOT.'admin/users/reply'?>" id="editDetail" >
							  <input type="hidden" name="data[Contact][id]" value="<?php  echo $contact['Contact']['id'];;?>"/>
						<fieldset>
							<ul>
								<li>
									<label class="desc" >Name</label>
									<div>
										<input  readonly class="field text full required" name="data[Contact][name]"  type="text" value="<?php echo $contact['Contact']['name']; ?>" />
									</div>
								</li>
                                <li>
									<label class="desc" >Email</label>
									<div>
										<input readonly class="field text full required"   name="data[Contact][email]" type="text" value="<?php echo $contact['Contact']['email']; ?>" />
									</div>
								</li>
								
								<li>
									<label class="desc" >Request Message</label>
									<div>
										<input readonly class="field text full required" name="data[Contact][message]" type="textarea" value="<?php echo $contact['Contact']['message']; ?>" />
									</div>
								</li>
								 <li>
									<label class="desc" >Reply Message</label>
									<div>
										<textarea  class="field text full required" name="data[Contact][reply]" type="text"></textarea>
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
