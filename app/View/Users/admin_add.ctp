<style type="text/css">
.useralrdyrgstrd
  {
    color: red;
    font-weight: 700;
    text-align: center;
  }
</style>
<div id="sub-nav">
	<div class="page-title">
		<h1>ADD CUSTOMER</h1>
	</div>
</div>
<div id="page-layout">
	<div id="page-content">   		
		<div id="page-content-wrapper">		
		<a style="margin-bottom:10px;" onclick="history.go(-1);"  class="ui-state-default ui-corner-all float-right ui-button">Back</a>	
		<div class="inner-page-title">
				<h2>Add CUSTOMER</h2>
				<span></span>
			</div>
		<?php echo $this->Session->flash();?>
			<div class="content-box content-box-header">
				<div class="column-content-box">
					<div class="ui-state-default ui-corner-top ui-box-header">
						<span class="ui-icon float-left ui-icon-notice"></span>
						Add CUSTOMER
					</div>
						
					<div class="content-box-wrapper">
					<form name="myform" id="tableForm" class="pager-form" method="post"  action="">
					<fieldset>
							<ul>
							    <li>
									    <label class="desc required" >Name<em style="color:red;">*</label>
									     <div>
										      <input class="field text full required"  name="data[User][name]" type="text">
										        <div style="color:red;float:left;" id="respon"></div>	
									     </div>
								</li>
								   
							    <li>
									    <label class="desc">Email<em style="color:red;">*</label>
									     <div>
										     <input class="field text  required email full" id="description" name="data[User][email]" type="email">
									     </div>
								</li>
								<li>
									    <label class="desc">Contact No.<em style="color:red;">*</label>
									     <div>
										      <input class="field text full required number" min="0" minlength="10" maxlength="10" id="ucntctnmbr" name="data[User][contact_no]" type="text">
										      <p class="useralrdyrgstrd">This mobile number is already registered. Please enter another mobile number.</p>
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

	 			"data[Category][category]":
				{
					required:true,
			  },
			  "data[Category][description]":
					{
						required:true,
			  },
			  "data[User][contact_no]":
			  {
			  	required:true,
			  	minlength: 10,
			  	
			  }
			},
			messages: 
		  	{
		  		 "data[User][contact_no]":
			  {
			  	minlength:"Please enter atleast 10 numbers.",
			  	maxlength : "Please enter atleast 10 numbers.",
			  	
			  },
		  		
		  	},
	});
	
	});
</script>

<!--User nmbr check on Registration START-->
  <script type="text/javascript">
    $(document).ready(function(){
      $('.useralrdyrgstrd').hide();
      $('#btnsub').attr('disabled',true);
      $('#ucntctnmbr').keyup(function(){
        var number = $("#ucntctnmbr").val();
        // console.log(number);
        if($(this).val().length ==10)
        {
          // console.log('hi');
          $.ajax({
            data: {id: number},
            type: 'post',
            url: "<?php echo HTTP_ROOT.'users/userchcknmbr/'?>"+number,
            success: function(resp)
            {
              if(resp == 'true')
              {
                $('.useralrdyrgstrd').show();
                $('#btnsub').attr('disabled',true);
              }
              else
              {
                $('.useralrdyrgstrd').hide();
                $('#signupmob').attr('readonly',true);
                $('#btnsub').attr('disabled',false);
              }
            }
          });
        }
        else
        {
          $('.useralrdyrgstrd').hide();
          $('#btnsub').attr('disabled',true);
        }
      })
    })
  </script>
<!--User nmbr check on Registration END-->