<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" class="no-js">
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	
	<meta name="description" content="Spicee Garden is famiy retaurant with both vegetarian and non-vegetrian." />
	<meta name="keywords" content="Restaurant,vegetarian,Non-vegetarian,Chinese,Mughlai,India,Beverages,Dinner,Lunch,Breakfast,Spicee Garden" />
	<!-- <link rel="canonical" href="http://spiceegarden.com/" />
	<link rel="shortcut icon" href="<?php echo HTTP_ROOT?>img/favicon.ico" type="image/x-icon">
	<link rel="icon" href="<?php echo HTTP_ROOT?>img/favicon.ico" type="image/x-icon" > -->
	
    <title>GaramHaandi | Indian | Mughlai | Chinese </title>

<?php  echo $this->Html->script('admin/common.js');?>	
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<?php 
	echo $this->Html->script('jquery.validate.js'); 
?>
</head>
<body class="page-header-fixed">
<!-- Main -->	   
	<?php echo $this->element('adminElements/header'); ?>
	<?php echo $this->fetch('content'); ?>
	<?php echo $this->element('adminElements/footer'); ?>
<!-- Main -->
</body>
</html>