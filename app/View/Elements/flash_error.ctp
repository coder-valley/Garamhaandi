<?php if(!empty($message)): ?>
	<style type="text/css">
		.errormainmasg
		{
			color: red;
			background-color: #AD3234;
			font-size:18px;
			text-align:center;
		}
	</style>
<div class="alert alert-danger errormainmasg">
  <?php echo $message; ?>
</div>
<?php endif; ?>


