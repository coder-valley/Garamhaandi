<?php echo $this->Html->script('admin/tinymce/js/tinymce/tinymce.min.js'); ?>
<script type="text/javascript">
    tinymce.init({
        selector: "textarea",
        plugins: [
            "advlist autolink autosave link image lists charmap print preview hr anchor pagebreak spellchecker",
            "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
            "table contextmenu directionality emoticons template textcolor paste textcolor colorpicker textpattern"
        ],

        toolbar1: "newdocument fullpage | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | styleselect formatselect fontselect fontsizeselect",
        toolbar2: "cut copy paste | searchreplace | bullist numlist | outdent indent blockquote | undo redo | link unlink anchor image media code | insertdatetime preview | forecolor backcolor",
        toolbar3: "table | hr removeformat | subscript superscript | charmap emoticons | print fullscreen | ltr rtl | spellchecker | visualchars visualblocks nonbreaking template pagebreak restoredraft",

        menubar: false,
        toolbar_items_size: 'small',

        style_formats: [{
            title: 'Bold text',
            inline: 'b'
        }, {
            title: 'Red text',
            inline: 'span',
            styles: {
                color: '#ff0000'
            }
        }, {
            title: 'Red header',
            block: 'h1',
            styles: {
                color: '#ff0000'
            }
        }, {
            title: 'Example 1',
            inline: 'span',
            classes: 'example1'
        }, {
            title: 'Example 2',
            inline: 'span',
            classes: 'example2'
        }, {
            title: 'Table styles'
        }, {
            title: 'Table row 1',
            selector: 'tr',
            classes: 'tablerow1'
        }],

        templates: [{
            title: 'Test template 1',
            content: 'Test 1'
        }, {
            title: 'Test template 2',
            content: 'Test 2'
        }]
    });
</script>
<div id="sub-nav">
    <div class="page-title">
        <h1>Add Privacy Policy</h1>
    </div>
</div>
<div id="page-layout">
    <div id="page-content">
        <div id="page-content-wrapper">
            <a style="margin-bottom:10px;" onclick="history.go(-1);" class="ui-state-default ui-corner-all float-right ui-button">Back</a>
            <div class="inner-page-title">
                <h2>Add Privacy Policy</h2>
                <span></span>
            </div>
            <?php echo $this->Session->flash();?>
            <div class="content-box content-box-header">
                <div class="column-content-box">
                    <div class="ui-state-default ui-corner-top ui-box-header">
                        <span class="ui-icon float-left ui-icon-notice"></span> New Privacy Policy
                    </div>

                    <div class="content-box-wrapper">
                        <form name="myform" id="tableForm" class="pager-form" method="post" action="">
                            <fieldset>
                                <ul>
                                    <li>
                                        <label class="desc required">Title<em style="color:red;">*</label>
									     <div>
										      <textarea class="field text full required"  name="data[PrivacyPolicy][title]" type="text"></textarea>
										        <div style="color:red;float:left;" id="respon"></div>	
									     </div>
								</li>
								   
							    <li>
									    <label class="desc">Descrition<em style="color:red;">*</label>
									     <div>
										     <textarea id="elm4_textarea" name="data[PrivacyPolicy][description]" class="mceEditor mce_editor" style="width:100%;height:250px;">
                                            </textarea>
									     </div>
								</li>
								
								
								<!-- <li>
									    <label class="desc">Address<em style="color:red;">*</label>
									     <div>
										      <input class="field text full required" maxlength="100" id="description" name="data[User][address]" type="text">
									     </div>
								</li> -->
								   	
								   
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
</script>
<script type="text/javascript">
$('#tableForm').validate();
</script>
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
		  }
			}
	});
	
	});
</script>