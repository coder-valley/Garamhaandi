<?php if(!empty($message)): ?>
	<style type="text/css">
		.successmsg
		{
			color: white;
			background-color: #0C786B;
			font-size:18px;
			text-align:center;
		}
	</style>
<div class="alert alert-danger successmsg">
  <?php echo $message; ?>
</div>
<?php endif; ?>


