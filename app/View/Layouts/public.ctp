<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	
	
    <title>Garam Haandi | Indian | Mughlai | Chinese </title>

    <!-- Bootstrap -->
	<?php echo $this->Html->css(array('common/bootstrap.min','common/jquery-ui.css','frontend/custom','frontend/margins','frontend/flexslider','common/font-awesome/css/font-awesome.min','frontend/fontawesome-stars','frontend/fontawesome-stars-o'));?>
	<?php //echo $this->Html->css(array('common/bootstrap.min','frontend/custom','frontend/margins','frontend/flexslider','frontend/owl.carousel','common/font-awesome/css/font-awesome.min','frontend/fontawesome-stars'));?>
  
	<?php echo $this->Html->script(array('common/jquery.min','common/jquery-1.11.2.min.js','frontend/script','common/bootstrap.min','frontend/jquery.flexslider-min','common/jquery-1.12.4.js','common/jquery-ui.js','common/jquery.barrating'))?>

	<?php //echo $this->Html->script(array('common/jquery.min','common/jquery.validate','frontend/script','common/bootstrap.min','frontend/jquery.flexslider-min','frontend/owl.carousel.min','frontend/jquery.barrating'))?>
	
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

    <![endif]-->
  <style>
  body { padding-right: 0 !important }
  </style>
  </head>
  <body>
	<?php echo $this->element('frontElements/header');?>
	
  <?php echo $this->fetch('content');?>
	<?php echo $this->element('frontElements/footer');?>
  </body>
   <?php echo $this->element('frontElements/modal1');?>
   <?php echo $this->element('frontElements/modal2');?>
   <?php echo $this->element('frontElements/modal');?>
   <?php echo $this->element('frontElements/offer_modal');?>
  <script src="<?php echo HTTP_ROOT?>js/common/js"></script>
  <script type="text/javascript" src="<?php echo HTTP_ROOT?>js/common/jquery.barrating.js"></script>
  <script type="text/javascript" src="<?php echo HTTP_ROOT?>js/common/example.js"></script>
  <!-- <script type="text/javascript">
   $(function() {
      $('.example').barrating({
        theme: 'fontawesome-stars'
      });
   });
</script> -->
  
   </html> 