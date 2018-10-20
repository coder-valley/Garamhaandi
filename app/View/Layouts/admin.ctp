<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	
	<meta name="description" content="GaramHaandi is hygienic with both vegetarian and non-vegetrian." />
	<meta name="keywords" content="vegetarian,Non-vegetarian,Chinese,Mughlai,India,Beverages,Dinner,Lunch,Breakfast" />
	<!-- <link rel="canonical" href="http://spiceegarden.com/" />
	<link rel="shortcut icon" href="<?php echo HTTP_ROOT?>img/favicon.ico" type="image/x-icon">
	<link rel="icon" href="<?php echo HTTP_ROOT?>img/favicon.ico" type="image/x-icon" > -->
	
    <title>GaramHaandi </title>
<style>
 input[type=submit]:hover {
    cursor:pointer;
} 
 input[type=button]:hover {
    cursor:pointer;
} 
</style>
<?php // echo $this->Html->script('newadmin/jquery.validate.js'); ?>
   


 <?php echo $this->Html->css(array('admin/ui/ui.base.css','admin/themes/apple_pie/ui.css','admin/admin.css'))?>
<?php echo $this->Html->script(array('admin/jquery-1.8.2.js','admin/jquery.validate.js','admin/tooltip.js','admin/superfish.js','admin/common.js'))?>
</head>


 
  <body id="sidebar-left">    	
	  <div id="page_wrapper">
		  <div id="page-header">
			<?php
			if(!in_array($this->params['action'],array('admin_login')))
			{
				echo $this->element('adminElements/dashboard_header'); 
			}
			?>
		  </div>
		  <div id="content">
			  <?php echo $content_for_layout?>            
		  </div>
	  </div>        
  </body>
</html>