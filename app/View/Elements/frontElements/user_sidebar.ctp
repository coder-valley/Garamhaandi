<style type="text/css">
	.active-cstm
	{
		background-color: white;
		color: #0c786b!important;
	}
</style>
<?php $action = $this->params['action']?>
<div class="col-md-3 aboutheadmain m-b-50 leftside">

	<img class="imagedash img-circle" src="<?php echo HTTP_ROOT.'img/usereimg/'.$uname['User']['image'] ?>">
	<div class="row">
	    <!-- <b><?php echo $uname['User']['name']; ?></b><br> -->
	    <div class="btn-group col-md-12">
 			<a style="margin-top:8px;" type="button" class="btn buttondashboard button-clicked <?php echo $action == 'user_edit' ? 'active-cstm' : ''; ?>" href="<?php echo HTTP_ROOT.'/Homes/user_edit/'.base64_encode($this->Session->read('User.id'));?>" >Edit Your Profile</a><br>
 			<a style="margin-top:8px;" type="button" class="btn buttondashboard <?php echo $action == 'orderdetails' ? 'active-cstm' : ''; ?>" href="<?php echo HTTP_ROOT.'/Homes/orderdetails/'.base64_encode($this->Session->read('User.id'));?>">Order Details</a><br>
 			<a style="margin-top:8px;" type="button" class="btn buttondashboard <?php echo $action == '' ? 'active-cstm' : ''; ?>" href="#">Subscription</a><br>
 			<a style="margin-top:8px;" type="button" class="btn buttondashboard <?php echo $action == '' ? 'active-cstm' : ''; ?>" href="#">Reviews</a><br>
		</div>
	</div>
</div>
