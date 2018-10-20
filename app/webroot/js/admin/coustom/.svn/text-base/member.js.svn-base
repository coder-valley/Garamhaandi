req = '';
$(document).ready(function()
{
	$('.username').keyup(function()
	{
		if($(this).val()!='' && pregmatch($(this).val()))
		{			
			checkuser('username',$(this));
		}		
		else
		{
			$(this).siblings('.error-message').remove();
			$(this).parent().append('<div class="error-message">Username can only be letters, numbers, dash and underscore.</div>');
			$(this).parent().find('.checkvalidate').val('1');
		}
	})
	$('.username').focusout(function()
	{
		if($(this).val()!='' && pregmatch($(this).val()))
		{
			checkuser('username',$(this));
		}		
		else
		{
			$(this).siblings('.error-message').remove();
			$(this).parent().append('<div class="error-message">Username can only be letters, numbers, dash and underscore.</div>');
			$(this).parent().find('.checkvalidate').val('1');
		}
	})
	$('.email').keyup(function()
	{
		if($(this).val()!='')
			checkuser('email',$(this));
	})
	$('.email').focusout(function()
	{
		if($(this).val()!='')
			checkuser('email',$(this));
	})
	$('#MemberAddMemberForm, #MemberAdminEditMemberForm').submit(function()
	{
		if($('.email').parent().find('.checkvalidate').val()!='1' && $('.username').parent().find('.checkvalidate').val()!='1')
		{
			return true;
		}
		return false;
	})	

})
function checkuser(action,element)
{
	if(req && req.readyState != '4')
	{
		req.abort();
	}
		req = $.ajax({
					url:ajax_url+'validate/'+action+'/'+element.val()+'/'+$('#MemberId').val(),
					success:function(resp){
						element.siblings('.error-message').remove();						
						if($.trim(resp)<=0)
						{
							element.parent().children('.checkvalidate').val('0');
							return true;
						}
						else
						{
							element.parent().append('<div class="error-message">This '+action+' is already registered.</div>');							
							element.parent().find('.checkvalidate').val('1');
							return false;
						}
					}					
				})		
}

function pregmatch(value)
{
	return /^[0-9a-zA-Z_-]*$/i.test(value);
}