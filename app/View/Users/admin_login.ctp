 <?php echo $this->Html->script(array('admin/ui/ui.widget.js','admin/jquery.validate.js','admin/ui/ui.tabs.js','admin/coustom/login.js'))?>
    <?php echo $this->Html->css(array('admin/ui/ui.login.css','admin/ui/ui.base.css','admin/themes/apple_pie/ui.css'))?>
<style>
.ui-widget {
    margin: 0em 0em 0;
}

</style>    
    
    
<script type="text/javascript">
$(document).ready(function() {
	$('#email').focus();
	
	$('#AdminLogin').validate(
	{
		rules:
		{
			"data[Admin][username]":
			{
				required:true,
			},
			"data[Admin][password]":
			{
				required:true,
			}
		},
		messages:
		{
			"data[Admin][username]":
			{
				required:'This field is required.'
			},
			"data[Admin][password]":
			{
				required:'This field is required.'
			}
		}
	});
	
	
	$('#tabs, #tabs2, #tabs5').tabs();
});
</script>

	<div id="page_wrapper">
		<div id="page-header">
			<div id="page-header-wrapper">
				          <span class="logo">GaramHaandi</span>
			</div>
		</div>
        <div id="sub-nav">
            <div class="page-title">
                <h1>Admin Login</h1>
            </div>										
            <div id="page-layout">
                <div id="page-content">
                    <div id="page-content-wrapper">
                        <div id="tabs">
                            <ul>
                                <li><a href="#login">Login</a></li>
                                <li><a href="#recover">Recover password</a></li>
                            </ul>
                               <?php if($this->Session->check('error')){ ?>
							<div class="response-msg error ui-corner-all">
								<span>Error message</span>
								<?php echo $this->Session->read('error');?>
							</div>
                            <?php CakeSession::delete('error'); ?>
						<?php } else if($this->Session->check('success')){?>
<div class="response-msg success ui-corner-all">
								<span>Success message</span>
								<?php echo $this->Session->read('success');?>
							</div>
                            <?php CakeSession::delete('success'); ?>
<?php }?>

                            <div id="login">
                              
                                <form method="post" action="<?php //echo HTTP_ROOT."admin/users/login"?>" id="AdminLogin">
						   <ul>
                                        <li>
                                            <label for="email" class="desc">User Name:</label>
                                            <div>
                                                <input type="text" class="field text full required" name="data[Admin][username]"/>
                                            </div>
                                        </li>
                                        <li>
                                            <label for="password" class="desc">Password:</label>
                        
                                            <div>
                                                <input type="password" value="" class="field text full required" name="data[Admin][password]" />
                                            </div>
                                        </li>
                                        <li class="buttons">
                                            <div>
                                                <input class="ui-state-default ui-corner-all float-right ui-button" type="submit" value="Submit" />
                                            </div>
                                        </li>
                                    </ul>
                                </form>
                            </div>					
                            <div id="recover">                               
                                    <ul>
                                      <form action="<?php echo HTTP_ROOT?>admin/users/forgot_password" method="post">
	                                   <label style="font-weight:bold">Email id:</label>  
                                        <li>
										<input type="text" tabindex="1" class="field text full required" name="data[Admin][username]" id="email" />
									</li>
                                        <li>
                                        	<input type="submit" class="ui-state-default ui-corner-all float-right ui-button" value="Submit" />
									</li>
                                    </ul>
                            </div>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
	</div>
