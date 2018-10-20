var host = window.location.host;
var proto = window.location.protocol;
var ajax_url = proto+"//"+host+"/crowdfunding/";
$(document).ready(function(){

	
	//upload video
	$('#uploadMet_video').each(function(){
		var btnUpload=$(this);
		 
		new AjaxUpload(btnUpload, {
			action: ajax_url+'homes/upload_file/type:file',
			name: 'uploadfile',
			onSubmit: function(file, ext)
			{
				//btnUpload.html('<img src="'+ajax_url+'img/ajax-loader.gif" class="Loader"/>');
				
				 if (! (ext && /^(mp4|webm|ogg)$/.test(ext)))
				 {  
					alert("Only MP4, WEBM or OGG files are allowed");
					//btnUpload.html('Upload');
					return false;	
				 }
				
			},
			onComplete: function(file, response)
			{
				html=response.split(":");
				
				if($.trim(html[0])==="success")
				{
					$('span.alter').text(html[1]);
					$('input#uploadMet_hidden').val(html[1]);
					//btnUpload.attr('rel',html[1]);
				}
				else if($.trim(html[0])==="size")
				{
					btnUpload.html('Upload');
					alert($.trim(html[1]));
				}		
				else
				{
					alert(response)
					btnUpload.html('Upload');
					alert("There was some error in uploading.Try again");
				}
			}
		})
	})
	
$('.select_stage_tab').change(function()
	{
		$this = $('.stage_val').val();
		equity_percent = $('.equity_percent').val();
		
		if($this == 1)
		{
			
			$('.equity').val('SEK 250,000-750,000');
			start = (equity_percent * 250000)/100;
			end = (equity_percent * 750000)/100;
			val = 'SEK '+start+'-'+end
			$('.invest').val(val);
			
		}
		else if($this == 2)
		{
			$('.equity').val('SEK 750,000-2,500,000');
			start = (equity_percent * 750000)/100;
			end = (equity_percent * 2500000)/100;
			val = 'SEK '+start+'-'+end
			$('.invest').val(val);
		}
		else if($this == 3)
		{
			$('.equity').val('SEK 2,500,000-7,500,000');
			start = (equity_percent * 2500000)/100;
			end = (equity_percent * 7500000)/100;
			val = 'SEK '+start+'-'+end
			$('.invest').val(val);
		}
		else if($this == 4)
		{
			$('.equity').val('TBD');
			$('.invest').val('TBD  x % equity');
			$('.int_val').val('0');
			//$('.invest').css('box-shadow','none')
			//$('.equity').css('box-shadow','none')
			//$('.per_fill_strc').show();
			//$('.pre_auction').hide();
			//$('.fill_auction').show();
			
		}
		else
		{
			$('.equity').val('');
			$('.invest').val('');	
			//$('.invest').css('box-shadow','none')
			//$('.equity').css('box-shadow','none')
			//$('.pre_auction').hide();
			//$('.fill_auction').hide();
		}
		
	})
//by rtsh
	var sel = new Array();
	$('.industry').each(function()
	{
		if($(this).val()!='')
		sel.push($(this).val());
	})	
	$('.industry option').each(function()
	{
		if($(this).parent().val() !=$(this).attr('value'))			
		{
			if(sel.indexOf($(this).attr('value'))!='-1')
			{
				$(this).attr('disabled','disabled');
			}
		}
	})	
	$('.industry').on('change',function()
	{
		
		var sel = new Array();
		$('.industry option').attr('disabled',false);
		$('.industry').removeClass('current');
		$(this).addClass('current');
		$('.industry').each(function()
		{
			if($(this).val()!='')
			sel.push($(this).val());
		})		
		$('.industry option').each(function()
		{
			if($(this).parent().val() !=$(this).attr('value'))			
			{
				if(sel.indexOf($(this).attr('value'))!='-1')
				{
					$(this).attr('disabled','disabled');
				}
			}
		})
		$(this).children().each(function()
		{
			if($(this).attr('value')==sel)
			$(this).attr('disabled',false);
		})	
	})
	/* Team owner Section*/
	$('#PitchTeamTeamForm,#PitchTeamTeamForm1').submit(function()
	{
		$this = $(this);
		$this.css('opacity','0.8');
		$this.find('input[type=submit]').attr('disabled','disabled');		
		$.ajax({
			url:ajax_url+'admin/pitches/team',
			type:'post',
			data:$this.serialize(),
			success:function(resp)
			{
				e=resp.split(":");
				if($.trim(e[0])=='error')
				{
					alert($.trim(e[1]));
				}
				else
				{
					var content = $.parseJSON(resp)
					if(content.type=='0')
						$('#teamlisting tbody').append(content.html);
					else
						$('#ownerlisting tbody').append(content.html);
					$this.find(".team_list").hide();
					$this.find(".owner_list").hide();
					$this.find('input[type=text]').val('');
					$this.find('textarea').val('');	
					$this.find('.team_img').val('');
					var good = $this.find('a.team_img').attr('rel');
					$this.find('a.team_img').attr('rel','');
					$this.find('td.team_img').text('[uploaded file name]');				
					$this.find('input[type=text]').css('box-shadow','none');
				}
				$this.css('opacity','1');									
				$this.find('textarea').css('box-shadow','none');
				$this.find('input[type=submit]').attr('disabled',false);	
			}
		})
		return false;
	})
	$('#EditPitchTeamTeamForm,#EditPitchTeamTeamForm1').submit(function()
		{
			$this = $(this);
			$this.css('opacity','0.8');
			$this.find('input[type=submit]').attr('disabled','disabled');
			$.ajax({
				url:ajax_url+'admin/pitches/team/edit',
				type:'post',
				data:$this.serialize(),
				success:function(resp)
				{
					e=resp.split(":");
					if($.trim(e[0])=='error')
					{
						alert($.trim(e[1]));
					}
					else
					{
					var content = $.parseJSON(resp)
					$('#teams'+content.id).html(content.html);
					$this.find('input[type=text]').val('');
					//$this.css('opacity','1');
					//$this.find('input[type=submit]').attr('disabled',false);
					$this.slideUp();
					}	
					$this.css('opacity','1');
					$this.find('input[type=submit]').attr('disabled',false);
					
				}
			})
			return false;
		})	
	$(document).on('click', '#teamlisting a.team_edit',function()
	{		
		$this = $(this);
		image = $this.attr('image');
		$('#EditPitchTeamTeamForm #team_image').attr('rel',image);	
		$('#EditPitchTeamTeamForm #team_image').next().val(image);
		$('#EditPitchTeamTeamForm #team_image').parent().prev().text(image);
		$('#EditPitchTeamTeamForm #PitchTeamProfileDescription').val($this.attr('profile_description'));
		$('#EditPitchTeamTeamForm #PitchTeamFname').val($this.attr('fname'));
		$('#EditPitchTeamTeamForm #PitchTeamLname').val($this.attr('lname'));
		$('#EditPitchTeamTeamForm #PitchTeamTitle').val($this.attr('title'));
		$('#EditPitchTeamTeamForm #PitchTeamSecurityNo').val($this.attr('security_no'));
		$('#EditPitchTeamTeamForm #PitchTeamLinkedinUrl').val($this.attr('linkedinurl'));
		$('#EditPitchTeamTeamForm #PitchTeamId').val($this.attr('id'));		
		$(".team_list").hide();
		$("#EditPitchTeamTeamForm").show();
	})
	$(document).on('click', '#ownerlisting a.team_edit',function()
	{		
		$this = $(this);
		image = $this.attr('image');
		$('#EditPitchTeamTeamForm1 #team_image').attr('rel',image);	
		$('#EditPitchTeamTeamForm1 #team_image').next().val(image);
		$('#EditPitchTeamTeamForm1 #team_image').parent().prev().text(image);		
		$('#EditPitchTeamTeamForm1 #PitchTeamProfileDescription').val($this.attr('profile_description'));
		$('#EditPitchTeamTeamForm1 #PitchTeamFname').val($this.attr('fname'));
		$('#EditPitchTeamTeamForm1 #PitchTeamLname').val($this.attr('lname'));
		$('#EditPitchTeamTeamForm1 #PitchTeamPercent').val($this.attr('percent'));
		$('#EditPitchTeamTeamForm1 #PitchTeamSecurityNo').val($this.attr('security_no'));
		$('#EditPitchTeamTeamForm1 #PitchTeamLinkedinUrl').val($this.attr('linkedinurl'));
		$('#EditPitchTeamTeamForm1 #PitchTeamId').val($this.attr('id'));		
		$(".owner_list").hide();
		$("#EditPitchTeamTeamForm1").show();
	})
	
	//for case Study
	/* Team owner Section*/
	$('#CaseTeamTeamForm,#CaseTeamTeamForm1').submit(function()
	{
		$this = $(this);
		$this.css('opacity','0.8');
		$this.find('input[type=submit]').attr('disabled','disabled');		
		$.ajax({
			url:ajax_url+'admin/pitches/case_team',
			type:'post',
			data:$this.serialize(),
			success:function(resp)
			{
				e=resp.split(":");
				if($.trim(e[0])=='error')
				{
					alert($.trim(e[1]));
				}
				else
				{
					var content = $.parseJSON(resp)
					if(content.type=='0')
						$('#caseTeamlisting tbody').append(content.html);
					else
						$('#caseOwnerlisting tbody').append(content.html);
					$this.find(".team_list").hide();
					$this.find(".owner_list").hide();
					$this.find('input[type=text]').val('');
					$this.find('textarea').val('');	
					$this.find('.team_img').val('');
					var good = $this.find('a.team_img').attr('rel');
					$this.find('a.team_img').attr('rel','');
					$this.find('td.team_img').text('[uploaded file name]');				
					$this.find('input[type=text]').css('box-shadow','none');
				}
				$this.css('opacity','1');									
				$this.find('textarea').css('box-shadow','none');
				$this.find('input[type=submit]').attr('disabled',false);	
			}
		})
		return false;
	})
	$('#EditCaseTeamTeamForm,#EditCaseTeamTeamForm1').submit(function()
		{
			$this = $(this);
			$this.css('opacity','0.8');
			$this.find('input[type=submit]').attr('disabled','disabled');
			$.ajax({
				url:ajax_url+'admin/pitches/case_team/newedit',
				type:'post',
				data:$this.serialize(),
				success:function(resp)
				{
					e=resp.split(":");
					if($.trim(e[0])=='error')
					{
						alert($.trim(e[1]));
					}
					else
					{
						var content = $.parseJSON(resp)
						$('#teams'+content.id).html(content.html);
						$this.find('input[type=text]').val('');
						$this.slideUp();	
					}
						$this.css('opacity','1');
						$this.find('input[type=submit]').attr('disabled',false);
											
				}
			})
			return false;
		})	
	$(document).on('click', '#caseTeamlisting a.team_edit',function()
	{		
		$this = $(this);
		image = $this.attr('image');
		$('#EditCaseTeamTeamForm #team_image').attr('rel',image);	
		$('#EditCaseTeamTeamForm #team_image').next().val(image);
		$('#EditCaseTeamTeamForm #team_image').parent().prev().text(image);
		$('#EditCaseTeamTeamForm #CaseStudyTeamProfileDescription').val($this.attr('profile_description'));
		$('#EditCaseTeamTeamForm #CaseStudyTeamFname').val($this.attr('fname'));
		$('#EditCaseTeamTeamForm #CaseStudyTeamLname').val($this.attr('lname'));
		$('#EditCaseTeamTeamForm #CaseStudyTeamTitle').val($this.attr('title'));
		$('#EditCaseTeamTeamForm #CaseStudyTeamSecurityNo').val($this.attr('security_no'));
		$('#EditCaseTeamTeamForm #CaseStudyTeamLinkedinUrl').val($this.attr('linkedinurl'));
		$('#EditCaseTeamTeamForm #CaseStudyTeamId').val($this.attr('id'));		
		$(".team_list").hide();
		$("#EditCaseTeamTeamForm").show();
	})
	$(document).on('click', '#caseOwnerlisting a.team_edit',function()
	{		
		$this = $(this);
		image = $this.attr('image');
		$('#EditCaseTeamTeamForm1 #team_image').attr('rel',image);	
		$('#EditCaseTeamTeamForm1 #team_image').next().val(image);
		$('#EditCaseTeamTeamForm1 #team_image').parent().prev().text(image);		
		$('#EditCaseTeamTeamForm1 #CaseStudyTeamProfileDescription').val($this.attr('profile_description'));
		$('#EditCaseTeamTeamForm1 #CaseStudyTeamFname').val($this.attr('fname'));
		$('#EditCaseTeamTeamForm1 #CaseStudyTeamLname').val($this.attr('lname'));
		$('#EditCaseTeamTeamForm1 #CaseStudyTeamPercent').val($this.attr('percent'));
		$('#EditCaseTeamTeamForm1 #CaseStudyTeamSecurityNo').val($this.attr('security_no'));
		$('#EditCaseTeamTeamForm1 #CaseStudyTeamLinkedinUrl').val($this.attr('linkedinurl'));
		$('#EditCaseTeamTeamForm1 #CaseStudyTeamId').val($this.attr('id'));		
		$(".owner_list").hide();
		$("#EditCaseTeamTeamForm1").show();
	})
	
	//end for case study
	$(document).on('click','.remove_tm',function(){ 
			btn=$(this);
		var id= $(this).parent().parent().children('input').val();
		
		var model= $('.model').attr('rel');
		$.ajax({
					url:ajax_url+'admin/pitches/remove_team/'+id+'/'+model,
					success:function(html)
					{
						
						btn.parent().parent().hide();
					}				
				})
	});
	$('.uploadMet_image').each(function(){
		var btnUpload=$(this);
		 
		new AjaxUpload(btnUpload, {
			action: ajax_url+'homes/upload_file/type:image',
			name: 'uploadfile',
			onSubmit: function(file, ext)
			{
				btnUpload.html('<img src="'+ajax_url+'img/ajax-loader.gif" class="Loader"/>');
				
				 
				 if (! (ext && /^(jpg|png|jpeg|gif|bmp)$/.test(ext)))
				 { 
					// extension is not allowed 
					//$("#status").html('Only JPG, PNG or GIF files are allowed');
					alert("Only JPG, PNG, BMP or GIF files are allowed");
					btnUpload.html('Upload');
					return false;	
				}
				btnUpload.parent().prev().text('['+file+']');
				 var old_file = btnUpload.attr('rel');
				 if(old_file != '')
				 {
					 $.ajax({
								url:ajax_url+'homes/remove_file/'+old_file,
								success:function(html)
								{
								}				
							})
				 }
				
			},
			onComplete: function(file, response)
			{
				html=response.split(":");
				
				if($.trim(html[0])==="success")
				{
					btnUpload.html('Upload');
					btnUpload.next('input').val(html[1]);
					btnUpload.attr('rel',html[1]);
					/* if($.trim(html[2])==="resized")
					{
						alert('Uploaded image is not consistent with the Size dimensions. Please check the image preview, and if the image is distorted, then load another image that meets the Size dimensions.The logo should be 131 * 41 pixels to display correctly')
					} */
				}
				else if($.trim(html[0])==="size")
				{
					btnUpload.html('Upload');
					alert($.trim(html[1]));
				}		
				else
				{
					btnUpload.html('Upload');
					alert("There was some error in uploading.Try again");
				}
			}
		})
	})
	$(".add").click(function(){
		$('#EditPitchTeamTeamForm').hide()
		$(".team_list").slideToggle("slow");
	});
	$(".add_anchor").click(function(){
		$('#EditPitchTeamTeamForm1').hide()
		$(".owner_list").slideToggle("slow");
	});
	$(document).on('keyup', '.number',function () { 
		this.value = this.value.replace(/[^0-9\.\-]/g,'');
	});
	$('#PitchCompanyLogos, #PitchInvestorPresentation, #PitchOtherDocuments, #PitchBussinessPlan, #PitchFinancialForecast').change(function()
	{
		$(this).next('span').text($(this).val())
	})
})