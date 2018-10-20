<html>
	<head>
	  <meta charset="utf-8">
	  <meta http-equiv="X-UA-Compatible" content="IE=edge">
	  <title>Formsadda | Login</title>
	  <!-- Tell the browser to be responsive to screen width -->
	  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	 
	  <!-- Theme style -->
	  <link rel="stylesheet" href="">
	  <!-- AdminLTE Skins. Choose a skin from the css/skins
	       folder instead of downloading all of them to reduce the load. -->
	  <!-- iCheck -->
	 
			<?php echo $this->Html->css(array(
												'bootstrap/css/bootstrap.min.css',
												'AdminLTE.min.css'
											)
										);
			?>
		 <!-- Font Awesome -->
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
	  <!-- Ionicons -->
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">		
	  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	  <!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	  <![endif]-->
	</head>
	<?php $currentAction = $this->params['action'];?>
	<?php echo $this->fetch('content');?>
	<?php echo $this->Html->script(array(
											'/plugins/jQuery/jquery-2.2.3.min.js',
											'bootstrap/js/bootstrap.min.js',
											'validate.js',
											'custom.js'
											)
									);
	?>
	<script>
	  <?php if($this->Session->check('forgetpassword-msg')){?>
	    $(document).ready(function(){
	      $('#forget-password').modal('show');
	    });
	  <?php unset($_SESSION['forgetpassword-msg']);?>  
	  <?php }?>
	</script>
</html>