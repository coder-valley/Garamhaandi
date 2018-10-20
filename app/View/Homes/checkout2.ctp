<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<style type="text/css">
	.header123
	{
		position: relative;
		display: inline-block;
		width: 100%;
		margin-bottom: -4px;
		min-height: 60px;
	}

	.block-unit
	{
		transition: ease-in-out .75s all;
		color: #585858;
		border-radius: 3px;
		box-shadow: 0 0 1px rgba(0,0,0,.05);
		/*border-bottom: 3px solid #0C786B;*/
	}
	.block-unit_block-error
	{
		background: #FEF9F2;
		border-bottom: 2px solid #0C786B;
		padding: 1% 0%;
	}

	.number12
	{
		border: 2px solid #0C786B;
		color: #0C786B;
		height: 27px;
		width: 27px;
		font-size: 14px;
		display: inline-block;
		border-radius: 15px;
		text-align: center;
		padding-top: 5px;
		margin-top: 8%;
		margin-left: 13%;
	}

	.open-popup-link
	{
		color: #0C786B;
		float: left;
		margin-left: 25%;
		margin-top: 3%!important;
	    display: inline-block;
	    color: #0C786B;
	    cursor: pointer;
	    border: 1px solid;
	    padding: 5px 15px;
	    border-radius: 3px;
	}
	.content-summary
	{
		display: none;
	}
	.add123
	{
		display: none;
	}
	.deladd
	{
		font-weight: 700;
	}
	.address-list
	{
		padding-bottom: 1.5em;
		border-bottom: 1px solid #0C786B;
		margin-bottom: 1.5em;
	}
	.link-bar 
	{
    	margin-top: 2em;
	}
	.addnew
	{
		color: #0C786B;
		cursor: pointer;
		text-decoration: underline;
		font-weight: 400;
	}
	.address-bar
	{
		background: #FDFDFD;
		border: 1px solid #d4d4d4;
		margin-bottom: 1em;
		border-radius: 3px;
		overflow: hidden;
		cursor: pointer;
		max-height: 85px;
		position: relative;
		transition: all ease-in-out .25s;
	}
	.address-bar:hover
	{
		border: 1px solid #0C786B;
		background-color: #F5F5F5;
	}
	.rigt123
	{
		float: left;
		width: 28%;
		position: relative;
	}
	.middle
	{
		float: left;
		width: 57%;
	}
	.left
	{
		padding-top: 1.8em;
		text-align: center;
		float: left;
		width: 15%;
		color: #9A9A9A;
	}
	address
	{
		height: 83px;
		padding: 1em;
		margin-bottom: 0;
		display: table-cell;
		vertical-align: middle;
	}
	.addr-line
	{
		color: #585858;
		display: block;
		text-transform: capitalize;
		text-align: left;
	}
	.checkbox-wrapper
	{
		transition: background ease-in-out .25s;
		position: relative;
		height: 85px;
		width: 3.25em;
		background: #f3f3f3;
		top: 0;
		right: 0;
		display: inline-block;
		float: right;
	}
	.checkbox-wrapper:hover
	{
		background: #0C786B;
	}
	.newadress
	{
		font-size: 12px;
	}
	.comment-box-wrapper
	{
		position: relative;
		width: 75%;
	}
	.char-count
	{
		position: absolute;
		width: calc(100% - 2px);
		bottom: 0;
		padding: .5em;
		background: #f6f6f6;
		margin: 1px;
		color: #9E9E9E;
	}
	.content-detailed 
	{
	    opacity: 1;
	    height: 340px;
	    transition: ease-in-out .75s all;
	    background: #fff;
	    position: relative;
	}
	.content-detailed-notuser
	{
		opacity: 1;
	    height: 63px;
	    transition: ease-in-out .75s all;
	    background: #fff;
	    position: relative;	
	}
	.form-control:focus
	{
		border-color:#0C786B;
	}
	.no-pad
	{
		padding: 0;
	}
	.add-coupon 
	{
	    margin-bottom: 0;
	    border-bottom: 0 solid #f6f6f6;
	}
	.add-notes
	{
		padding-bottom: 1.5em;
		margin-bottom: 1.5em;
	}
	.no-address-selected
	{
		display: none;
	}
	.cntnbtn
	{	border-radius: 3px;
		background: #0C786B;
		text-transform: uppercase;
		color: #fff;
		font-size: 1em;
		padding: 1em 4.5em;
	}
	.pymnt
	{
		background: #FEFEFE;
		border-bottom: 2px solid #f6f6f6;
		padding: 1.5em 0;
	}
	.no-left-pad
	{
		padding-left: 0;
	}
	.checkout-item-block 
	{
    	margin: 0 auto 3em;
    }
	/*.number 
	{
		border: 2px solid #0C786B;
		color: #0C786B;
		height: 27px;
		width: 27px;
		font-size: 14px;
		display: inline-block;
		border-radius: 15px;
		text-align: center;
		padding-top: 5px;
		margin-top: 8%;
		margin-left: 13%;
	}*/
	#menu-cart-static-wrapper 
	{
    	position: static;
	}
	.menu-cart-block
	{
		transition: -webkit-filter ease-in-out .25s;
	    margin: 5em auto 2em;
	    border-radius: 3px;
	}
	.brdr
	{
		border: 1px solid #0C786B;
		border-radius: 3px;
	}
	.menu-cart-title
	{
		background: #fbfafa;
		border-top-left-radius: 3px;
		border-top-right-radius: 3px;
		padding: 1em;
	}
	.cart-quotes
	{
		display: none;
		position: relative;
	}
	.container-fluid
	{
		padding-right: 15px!important;
		padding-left: 15px!important;
	}
	.menu-cart-body
	{
	    border-radius: 3px;
	    border-bottom: 0;
	    position: relative;
	    background-color: #fff;
	    padding: 1em 0 1em 1em;
	    /*border-bottom: 1px solid #cbcbcb;*/
	    min-height: 50px;
	    /*overflow-y: auto;*/
	    transition: min-height ease-in-out .75s;
	}
	.menu-cart-items:last-child 
	{
    	border-bottom: 0 solid #f6f6f6;
	}
	.menu-cart-items 
	{
	    border-bottom: 1px solid #f6f6f6;
	    padding: .5em 0;
	}
	.notification
	{
		display: none;
	}
	.no-pad
	{
		padding: 0;
	}
	.block-item
	{
    	pointer-events: auto;
    }
    .no-line-break 
    {
    	white-space: nowrap;
	}
	.final-price 
	{
    	display: none;
    }
    .menu-cart-items p
    {
    	margin-bottom: 0;
		position: relative;
		font-weight: 400;
    }
    .add2cart
    {
	    /*float: right !important;*/
	    color: #a8aeb3;
	    border: 1px #29a79c solid;
	    padding: 3px 10px;
	    text-transform: uppercase;
	    border-radius: 50%;
	    outline: none !important;
	    /*font-size: 1.25em;*/
		cursor: pointer;
	}
	.veg-item
	{
		font-weight: 400;
		font-size: 12px;
	}
	.quantity-left-minus
	{
		float: none!important;
	}
	.final-price
	{
		&#8377;
	}
	.btn-checkout
	{
		display: none;
	}
	.cart-sub-total-cnt
	{
	    padding: 0px 1em;
	    background: #fbfbfb;
	}
	.bill-item 
	{
	    font-size: 13px;
	    line-height: 1.7;
	    color: #585858;
	}
	.bill-item__text 
	{
	    float: left;
	    /*width: 70%;*/
	}
	/*.bill-item__value 
	{
	    float: right;
	    text-align: right;
	    width: 30%;
	}*/
	.bill-item__apply_coupon 
	{
	    display: initial !important;
	}
	.bill-item__apply-link
	{
		cursor: pointer;
		color: #0C786B;
	}
	.bill-item__grand_total
	{
	    margin: 15px -1em -15px;
	    padding: 0 1em;
	    background: #fff;
	    color: #0C786B;
	    font-weight: 600;
	    border-top: solid 1px #e9e9e9;
	    line-height: 43px;
	    height: 44px;
	}
	.open-address
	{
		color: #0C786B;
	}
	.checkbox-wrapper::before 
	{
	    content: '';
	    height: 20px;
	    width: 20px;
	    border-radius: 10px;
	    background: #fff;
	    position: absolute;
	    top: 50%;
	    left: 50%;
	    margin-left: -10px;
	    margin-top: -10px;
	    box-shadow: 0 0 1px rgba(0,0,0,.05) inset;
	}
	.add-address
	{
		color: #0C786B!important;
		text-decoration: none!important;
		outline: none!important;
	}
	.checkbox-wrapper 
	{
	    transition: background ease-in-out .25s;
	    position: relative;
	    height: 85;
	    width: 3.25em;
	    background: #f3f3f3;
	    top: 0;
	    right: 0;
	    display: inline-block;
	    float: right;
	}
	.select-box 
	{
	    cursor: pointer;
	    font-size: 2.2em;
	    color: #0C786B;
	    position: absolute;
	    top: 50%;
	    left: 50%;
	    margin-left: -11px;
	    margin-top: -15px;
	    transition: all .2s linear;
	    /*width: 0;*/
	    overflow: hidden;
	}
	#usrnt
	{
		color: #fff;
		outline: none!important;
		text-decoration: none;
		margin-left: 17%;	
		font-size: 14px;
	}
	.user-login
	{
		margin-top: 1%;
		margin-bottom: 1%;
		margin-left: 16%;
	}
	.chck121::before 
	{
    	content: "";
	}

</style>


<?php
	// Merchant key here as provided by Payu
	$MERCHANT_KEY = "JBZaLc";

	// Merchant Salt as provided by Payu
	$SALT = "GQs7yium";

	// End point - change to https://secure.payu.in for LIVE mode
	$PAYU_BASE_URL = "https://test.payu.in";

	$action = '';

	$posted = array();
	/*if(!empty($_POST)) {
			
	  foreach($_POST as $key => $value) {    
	    $posted[$key] = $value; 
		
	  }
	}
	 */
	$formError = 0;

	if(empty($posted['txnid'])) {
	  // Generate random transaction id
		$txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
	} else {
	  $txnid = $posted['txnid'];
	}
	$hash = '';
	// Hash Sequence
	$hashSequence = "".$MERCHANT_KEY."|".$txnid."|".$total."|".$orderid."|".$usrnme."|".$usremail."|".$usrphone;

	$hash = strtolower(hash('sha512', $hashSequence));
	// pr($hashSequence);die;

	// if(empty($posted['hash']) && sizeof($posted) > 0) {
	//   if(
	//           empty($posted['key'])
	//           || empty($posted['txnid'])
	//           || empty($posted['amount'])
	//           || empty($posted['firstname'])
	//           || empty($posted['email'])
	//           || empty($posted['phone'])
	//           || empty($posted['productinfo'])
	//           || empty($posted['surl'])
	//           || empty($posted['furl'])
	// 		  || empty($posted['service_provider'])
	//   ) {
	//     $formError = 1;
	//   } else {
	//     //$posted['productinfo'] = json_encode(json_decode('[{"name":"tutionfee","description":"","value":"500","isRequired":"false"},{"name":"developmentfee","description":"monthly tution fee","value":"1500","isRequired":"false"}]'));
	// 	$hashVarsSeq = explode('|', $hashSequence);
	//     $hash_string = '';	
	// 	foreach($hashVarsSeq as $hash_var) {
	//       $hash_string .= isset($posted[$hash_var]) ? $posted[$hash_var] : '';
	//       $hash_string .= '|';
	//       // pr($hash_string);die;  
	//     }
	//    $hash_string .= $SALT;
		

	//     $hash = strtolower(hash('sha512', $hash_string));
	//     $action = $PAYU_BASE_URL . '/_payment';
	//   }
	// } elseif(!empty($posted['hash'])) {
	//   $hash = $posted['hash'];
	//   $action = $PAYU_BASE_URL . '/_payment';
	// }
?>

<script>
  //   var hash = '<?php echo $hash ?>';
  //   function submitPayuForm() {
		// //alert(hash);
  //     if(hash == '') {
  //       return;
  //     }
  //     var payuForm = document.forms.payuForm;
  //     payuForm.submit();
  //   }
</script>

<div class="container" style="">
	<form action="https://test.payu.in/_payment" method="post" name="payuForm">
		<input type="hidden" name="key" value="<?php echo $MERCHANT_KEY ?>" />
      	<input type="hidden" name="hash" value="<?php echo $hash ?>"/>
      	<input type="hidden" name="txnid" value="<?php echo $txnid ?>" />
		<div class="col-md-8 col-sm-12 col-xs-12 checkout-item-block">
			<section>
				<header class="header123">
					<div class="holder">
						<div class="col-lg-5 col-md-4 col-sm-4 col-xs-12 no-left-pad">
							<div class="title">
								<h1 style="font-size: 30px;">Checkout</h1>
							</div>
						</div>
					</div>
				</header>
				<div class="container-fluid">
					<div class="row no-pad">
						<div class="col-xs-12 no-pad">
							<section class="block-unit block-error detailed">
								<header class="block-unit_block-error">
		                            <div class="container-fluid">
		                                <div class="row">
		                                    <div class="col-sm-1 col-xs-2">
		                                        <span class="number12">1</span>
		                                    </div>
		                                    <div class="no-left-pad col-sm-7 col-xs-10">
		                                        <h4 style="">Delivery Address</h4>
		                                    </div>
		                                    <div class="col-sm-4 col-xs-4 text-right ng-hide">
		                                    	<?php if($this->Session->check('User')) {?>
		                                    	<input name="firstname" type="hidden" id="firstname" value="<?php echo ($usrnme) ? : $posted['firstname']; ?>" />
		                                    	<input name="surl" type="hidden" value="<?php echo ("http://52.25.144.123/GaramHaandi/") ? : $posted['surl'] ?>" size="64" />
		                                    	<input name="phone" id="email" type="hidden" value="<?php echo ($usrphone) ? : $posted['phone']; ?>" />
		                                    	<input name="email" type="hidden" value="<?php echo ($usremail) ? : $posted['phone']; ?>" />
		                                    	<input type="hidden" name="service_provider" value="payu_paisa" size="64" />
		                                        <span class="open-popup-link">
		                                        	<i class="glyphicon glyphicon-pencil"></i>
		                                        	<a class="add-address" href="<?php echo HTTP_ROOT.'/Homes/user_add_address/'.base64_encode($this->Session->read('User.id'));?>">Add New Address</a>
		                                        </span>
		                                        <?php }?>
		                                    </div>
		                                </div>
		                            </div>
	                            </header>
	                            <div class="content">
	                                <div class="content-summary">
	                                    <div class="container-fluid">
	                                        <div class="row">
	                                            <div class="col-sm-6 col-sm-offset-1 col-xs-12 no-left-pad xs-pad">
	                                                <address>
	                                                    <span class="user-name">qwerty</span>
	                                                    <span class="addr-line"> <!----></span>
	                                                    <span class="addr-line text-ellipsis"></span>
	                                                </address>
	                                            </div>
	                                            <div class="col-sm-5 col-xs-12 no-left-pad xs-pad">
	                                                <!----><div class="delivery-extra" ng-if="vm.orderCommentsEnabled">
	                                                    <span class="note-title">Order Notes:</span>
	                                                    <span>
	                                                --
	                                            </span>
	                                                </div><!---->
	                                                <div class="delivery-extra">
	                                                    <span class="note-title">Coupon Code:</span>
	                                                    <!---->
	                                                    <!----><span class="no-coupon-code" ng-if="!vm.swgyCart.coupon_code || vm.swgyCart.coupon_error_message">No Coupon Applied</span><!---->
	                                                </div>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
	                                <?php if($this->Session->check('User')) {?>
	                                <div class="content-detailed">
	                                    <div class="container-fluid">
	                                        <div class="row">
	                                            <div class="col-xs-12 col-sm-11 col-sm-offset-1 no-pad xs-pad">
	                                            	<?php if($this->Session->check('User')) {?>
	                                                <div class="address-list clearfix">
	                                                    <div class="col-sm-9 no-pad link-bar clearfix">
	                                                        <h5 class="pull-left deladd"><span class="deladd">Select</span> Delivery Address</h5>
	                                                        <!----><!-- <h5 class="pull-right addnew">+ Add New Address</h5> --><!---->
	                                                    </div>
	                                                    <!---->
	                                                    <div class="col-sm-9 no-pad address-bar">
	                                                        <div class="desktop clearfix">
	                                                            <div class="left">
	                                                                <span class="icon-swgy-book">
	                                                                	<i class="fa fa-address-book" style="font-size:20px;" aria-hidden="true"></i>
																	</span>
	                                                                <h6 class="text-ellipsis">OTHER</h6>
	                                                            </div>
	                                                            <div class="middle">
	                                                                <address>
	                                                                    <span class="addr-line"> 
	                                                                      <?php foreach ($uinfo['Address'] as $detail):?>
	                                                                      <?php echo $detail['adress'].','.$detail['Location']['location'].','.$detail['City']['city_name'].'<br>';?>
	                                                                  	</span>
	                                                                  <?php endforeach; ?>
	                                                                    <span class="addr-line text-ellipsis"></span>
	                                                                </address>
	                                                            </div>
	                                                            <div class="rigt123">
	                                                                <div class="checkbox-wrapper">
	                                                                    <span class="select-box chck121"></span>
	                                                                </div>
	                                                            </div>
	                                                        </div><!---->
	                                                        <!---->
	                                                    </div><!---->
	                                                    <div class="col-sm-9 no-address">
	                                                        <div class="content add123">
	                                                            <div class="text">
	                                                                <span>None of your existing addresses are serviceable by this restaurant.</span>
	                                                                <span>
	                                                                <u ng-click="vm.openInitialMap()" data-toggle="modal" data-target="#add-address" data-gtm-element="checkout_2">Add a new address to continue.</u></span>
	                                                                <div class="sad-mouse">
	                                                                    <img src="https://res.cloudinary.com/swiggy/image/upload/f_auto,fl_lossy,q_auto/v1462170280/Group_9-1_m13j7t">
	                                                                </div>
	                                                            </div>
	                                                        </div>
	                                                    </div>
	                                                    <!---->
	                                                    <!-- <span class="col-sm-9 no-pad newadress">Not the address you were looking for? Choose from <a href="#" class="open-address"><u>your other saved addresses</u></a>
	                                                    </span> -->
	                                                </div>
	                                                <?php }?>
	                                                
	                                                <div class="add-coupon">
	                                                    <div class="continue-to-pay">
													           <input type="submit" id="cntpaymn" class="btn btn-lg cntnbtn" value="Continue to payment" />													        
	                                                        <div class="no-address-selected" ng-hide="vm.deliveryAddress &amp;&amp; vm.deliveryAddress.delivery_valid">
	                                                            <div class="up-arrow"></div>
	                                                            Sorry, but we are unable to continue without a delivery address.
	                                                        </div>
	                                                    </div>
	                                                </div>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
	                                <?php } else {?>
	                                <div class="content-detailed-notuser">
	                                    <div class="container-fluid">
	                                        <div class="row">
	                                            <div class="col-xs-12 col-sm-11 col-sm-offset-1 no-pad xs-pad">
	                                            	<div class="user-login">
	                                                    <a class="btn btn-lg cntnbtn" id="usrnt" data-toggle="modal" data-target="#myModal1" href="javascript:void(0);">Please login.</a>
	                                                    <div class="no-address-selected">
	                                                    </div>
	                                                </div>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
	                                <?php }?>
	                            </div>
							</section>
							<!-- <section class="block-unit summary">
								<header class="pymnt">
	                                <div class="container-fluid">
	                                    <div class="row">
	                                        <div class="col-xs-2 col-sm-1">
	                                            <span class="number12">2</span>
	                                        </div>
	                                        <div class="col-xs-10 col-sm-11 no-left-pad">
	                                            <h5 style="margin: 0px;">Payment Method</h5>
	                                            <h6 style="margin: 3px 0 0;">How do you wish to pay?</h6>
	                                        </div>
	                                    </div>
	                                </div>
	                            </header>
							</section> -->
						</div>
					</div>
				</div>
			</section>
		</div>

		<div id="menu-cart-static-wrapper" class="col-md-4 hidden-xs hidden-sm menu-cart-block" style="">
			<div class="brdr">
				<section>
					
					<div class="menu-cart-title">
				        <h1 style="margin-top: 0; margin-bottom: 3px; font-size: 12px; text-transform: uppercase;">Your Cart</h1>
				        <div class="sla" ng-show="vm.estimatedSLA" style="">
				            <!-- <i class="glyphicon glyphicon-time"></i> -->
				            <strong>
				                <!-- Estimated Delivery Time: <span ng-show="::vm.isSlaRange &amp;&amp; vm.estimatedSlaMin" class="ng-hide">37 - </span>37 Mins -->
				            </strong>
				        </div>
				    </div>
				    <forms>
					    <div class="menu-cart-body">
						    <div class="cart-quotes">
						        The only thing I like better than talking about food is eating.
						        <span>-John Walters</span>
						    </div>
						    <div class="menu-cart-items">
		            			<div class="container-fluid">
		            				<?php if(!empty($products)) { foreach($products as $pr_list) { ?>
		                			<div class="row no-pad" style="margin-top: 3%;">
		            					<!-- <input type="hidden" name="key" value="<?php echo $MERCHANT_KEY ?>" />
								      	<input type="hidden" name="hash" value="<?php echo $hash ?>"/>
								      	<input type="hidden" name="txnid" value="<?php echo $txnid ?>" /> -->
		                    			<div class="col-xs-5 no-pad">
		                    				<input type="hidden" name="productinfo" value="<?php echo ($pr_list['Food']['title']) ?  : $posted['productinfo'] ?>">

		                        			<p class="veg-item"><?php echo ($pr_list['Food']['title'])?></p>
		                    			</div>
					                    <div class="col-xs-3 block-item text-center no-pad">
					                        <span class="add2cart quantity-left-minus additem" id="<?php echo $pr_list['Food']['id']?>">-</span>
					                        <span class="item-count" id="quantity_<?php echo $pr_list['Food']['id']?>"><?php echo $pr_list['Food']['quantity']?></span>
					                        <span class="add2cart quantity-right-plus additem" id="<?php echo $pr_list['Food']['id']?>">+</span>
					                    </div>
					                    <div class="col-xs-4 no-left-pad block-item text-right">
					                        <div>
					                            <span class="item-price">&#8377;</span> <span class="item-price"><?php echo $pr_list['Food']['price']?></span>
					                            <span class="no-line-break"><span class="final-price"></span> <span class="final-price">79.00</span></span>
					                        </div>
					                    </div>
		                			</div>
		                			<?php } } ?>
					                <div class="col-xs-12 notification">
					                    <small>Sorry, this item is out of stock</small>
					                    <button class="btn-remove" ng-click="vm.removeItemFromCart(item)" data-gtm-element="cart_4">Remove</button>
					                </div>
		            			</div>
		        			</div>
						</div>
						<div class="menu-cart-footer">
		        			<div class="cart-sub-total-cnt">
		        				<div  class="container-fluid" style="padding: 0!important;">
			            			<div class="cart-sub-total">
			                			<bill-item  couponerror="" coupon="">
				                			<div class="bill-item bill-item__item_total row" style="margin: 0!important">
											    <div class="bill-item__text col-md-10 no-pad">
											        Item Total : <!---->
											    </div>
											    <div class="bill-item__value text-right">
											    	<input name="amount" type="hidden" value="<?php echo ($total) ? : $posted['amount'] ?>" />
											        <span class="">&#8377;</span> <?php echo ($total)?>
											    </div>
											</div>
										</bill-item>
			            			</div>
			            			<div class="cart-sub-total">
			                			<bill-item couponerror="" coupon="">
			                				
			                			</bill-item>
			            			</div>
			            			<div class="cart-sub-total">
			                			<bill-item item="" couponerror="" coupon="">
											<div class="bill-item bill-item__apply_coupon">
											    <!-- <div class="bill-item__text col-md-7 no-pad" style="">
											        Coupon Discount :
											    </div> -->
											    <!-- <div class="bill-item__value col-md-5 no-pad text-right" style="">
											       <div class="bill-item__apply-link">Apply Coupon?</div>
											    </div> -->
											</div>
										</bill-item>
			            			</div>
			            			<div class="cart-sub-total">
			                			<bill-item item="" couponerror="" coupon="">
			                				<div class="bill-item bill-item__delivery_charges_threshold">
											    <!-- <div class="bill-item__text col-md-10 no-pad">
											        Delivery Charges : <span class="bill-item__text__info"><i class="icon-swgy-info"></i><span class="bill-item__text__info__data">Base delivery charges applicable on restaurant to help us serve you better</span></span>
											    </div>
											    <div class="bill-item__value text-right">
											        <span class="">&#8377;</span> 30.00
											    </div> -->
											</div>
										</bill-item>
			            			</div>
			            			<div class="cart-sub-total">
			                			<bill-item item="" couponerror="" coupon="">
			                				
			                			</bill-item>
			            			</div>
			            			<div class="cart-sub-total" >
			               				<bill-item item="" couponerror="" coupon="">
			               					
			               				</bill-item>
			            			</div>
			            			<div class="cart-sub-total" >
				                		<bill-item item="" couponerror="" coupon="">
				                			<div class="bill-item bill-item__grand_total">
											    <div class="bill-item__text col-md-10 no-pad">
											        To Pay : 
											    </div>
											    <div class="bill-item__value text-right">
											        <span class="">&#8377;</span> <?php echo ($total)?>
											    </div>
											</div>
										</bill-item>
			            			</div>
		            			</div>
		        			</div>
							<button class="btn btn-checkout" id="btn-checkout">Checkout</button>
		    			</div>
	    			</form>
	    			
				</section>
			</div>
		</div>
	</form>

	<div class="container">
		<div class="col-md-12" style="border:solid 1px lightgrey; border-radius: 5px;">
	        <div class="row">
	            <div class="col-xs-12 recommendation">
	                <h3>Recommendations</h3>
	            </div>
	            <div style="margin-top: 7%; padding-bottom: 21%; ">
	                <div class="col-xs-3" style="">
	                   <div>
	                        <img style="width: 100%" src="http://static1.squarespace.com/static/55ac6d80e4b0a964784b2f80/t/5703eb2e746fb98cc2510ebd/1459874606989/PsZyN43.png">
	                        
	                        
	                    </div>
	                    <div class="row">
	                        <div class="col-xs-6 pull-left">
	                            <h5>Gulabjamun</h5>
	                        </div>
	                        <div class="col-xs-6">
	                            <h5 style="padding-left: 46px;">₹20</h5>
	                        </div>
	                    </div>
	                    <div class="row">
	                        <div class="col-xs-6">
	                            <span class="add2cart quantity-left-minus additem" id="140">-</span>
	                        </div>
	                        <div class="col-xs-6" style="text-align: right;">
	                            <span class="add2cart quantity-left-minus additem" id="140">+</span>
	                        </div>
	                    </div>
	                </div>
	                <div class="col-xs-3" style="">
	                   <div>
	                        <img style="width: 100%" src="http://static1.squarespace.com/static/55ac6d80e4b0a964784b2f80/t/5703eb2e746fb98cc2510ebd/1459874606989/PsZyN43.png">
	                    </div>
	                    <div class="row">
	                        <div class="col-xs-6 pull-left">
	                            <h5>Gulabjamun</h5>
	                        </div>
	                        <div class="col-xs-6">
	                            <h5 style="padding-left: 46px;">₹20</h5>
	                        </div>
	                    </div>
	                    <div class="row">
	                       <div class="col-xs-6">
	                            <span class="add2cart quantity-left-minus additem" id="140">-</span>
	                        </div>
	                        <div class="col-xs-6" style="text-align: right;">
	                            <span class="add2cart quantity-left-minus additem" id="140">+</span>
	                        </div>
	                    </div>
	                </div>
	                <div class="col-xs-3">
	                   <div>
	                        <img style="width: 100%" src="http://static1.squarespace.com/static/55ac6d80e4b0a964784b2f80/t/5703eb2e746fb98cc2510ebd/1459874606989/PsZyN43.png">
	                    </div>
	                    <div class="row">
	                        <div class="col-xs-6 pull-left">
	                            <h5>Gulabjamun</h5>
	                        </div>
	                        <div class="col-xs-6">
	                            <h5 style="padding-left: 46px;">₹20</h5>
	                        </div>
	                    </div>
	                    <div class="row">
	                       <div class="col-xs-6">
	                            <span class="add2cart quantity-left-minus additem" id="140">-</span>
	                        </div>
	                        <div class="col-xs-6" style="text-align: right;">
	                            <span class="add2cart quantity-left-minus additem" id="140">+</span>
	                        </div>
	                    </div>
	                </div>
	                <div class="col-xs-3">
	                   <div>
	                        <img style="width: 100%" src="http://static1.squarespace.com/static/55ac6d80e4b0a964784b2f80/t/5703eb2e746fb98cc2510ebd/1459874606989/PsZyN43.png">
	                    </div>
	                    <div class="row">
	                        <div class="col-xs-6 pull-left">
	                            <h5>Gulabjamun</h5>
	                        </div>
	                        <div class="col-xs-6">
	                            <h5 style="padding-left: 46px;">₹20</h5>
	                        </div>
	                    </div>
	                    <div class="row">
	                       <div class="col-xs-6">
	                            <span class="add2cart quantity-left-minus additem" id="140">-</span>
	                        </div>
	                        <div class="col-xs-6" style="text-align: right;">
	                            <span class="add2cart quantity-left-minus additem" id="140">+</span>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
		</div>
	</div>
</div>



<!-- <td>Amount: </td>
        
          <td>Success URI: </td>
          <td colspan="3"></td>
        </tr>
        <tr>
          <td>Failure URI: </td>
          <td colspan="3"><input name="furl" value="<?php echo (empty($posted['furl'])) ? '' : $posted['furl'] ?>" size="64" /></td>
        </tr>

        <tr>
          <td colspan="3"</td>
        </tr>
        <tr>
          <?php if(!$hash) { ?>
            <td colspan="4"><input type="submit" value="Submit" /></td>
          <?php } ?>
        </tr>
      </table>
    </form> -->