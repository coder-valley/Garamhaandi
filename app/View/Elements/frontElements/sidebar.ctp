<style type="text/css">
	.cstm-acvtv
	{
		background-color: white;
		color: #0c786b!important;
	}
</style>
<?php $action = $this->params['action']?>
<img class="imagedash img-circle" src="<?php echo HTTP_ROOT.'img/usereimg/'.$kitname['Kitchen']['image'] ?>">
<div class="row">
	<!-- <b><?php echo $kitname['Kitchen']['name']; ?></b><br> -->
	<div class="btn-group col-md-12">
		<a style="margin-top:8px;" type="button" class="btn buttondashboard button-clicked <?php echo $action == 'kitchen_edit' ? 'cstm-acvtv' : ''; ?>" href="<?php echo HTTP_ROOT.'/Homes/kitchen_edit/'.base64_encode($this->Session->read('Kitchen.id'));?>">Edit Your Profile</a><br>
		<a style="margin-top:8px;" type="button" class="btn buttondashboard <?php echo $action == 'add_dishes' ? 'cstm-acvtv' : ''; ?>" href="<?php echo HTTP_ROOT.'/Homes/add_dishes/'.base64_encode($this->Session->read('Kitchen.id'));?>" >Add Dishes</a><br>
		<a style="margin-top:8px;" type="button" class="btn buttondashboard <?php echo $action == 'view_dishes' ? 'cstm-acvtv' : ''; ?>" href="<?php echo HTTP_ROOT.'/Homes/view_dishes/'.base64_encode($this->Session->read('Kitchen.id'));?>">View Your Dishes</a><br>
		<a style="margin-top:8px;" type="button" class="btn buttondashboard <?php echo $action == 'kit_order' ? 'cstm-acvtv' : ''; ?>" href="<?php echo HTTP_ROOT.'/Homes/kit_order/'.base64_encode($this->Session->read('Kitchen.id'));?>">Order Details</a><br>
	</div>
</div>
