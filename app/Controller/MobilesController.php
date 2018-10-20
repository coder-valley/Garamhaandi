<?php
if (isset($_SERVER['HTTP_ORIGIN'])) {
header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
header('Access-Control-Allow-Credentials: true');
header('Access-Control-Max-Age: 86400'); // cache for 1 day
}
	
	Class MobilesController extends AppController
	{
		public function decode_request()
	    {
	        return $this->request->input('json_decode',false);
	    }
		function login()
	    {
	    	$this->loadModel('User');
	    	$this->loadModel('Subscription');
	        $user = $this->decode_request();
	        if(empty($user->number))
	        {
	            $data['status'] = false;
	            $data['msg'] = 'Mobile Number can not be empty';
	            echo json_encode($data);
	            die;
	        }
	        if(empty($user->password))
	        {
	        	$data['status'] = false;
	        	$data['msg'] = "Password field cannot be empty";
	        	echo json_encode($data);
	            die;
	        }
	        $mobile = $user->number;
	        $password = $user->password;
	        $data = $this->User->find('first', array('conditions' => array('User.contact_no' => $mobile, 'User.password' => $password)));
	        if($data)
	        {
	        	/////////////////////////////////Update Subscription Statuses/////////////////////////////////
	        	$datetoday = date('Y-m-d');
	        	$dat = "";$i=0;
	        	$subs = $this->Subscription->findAllByUserId($data['User']['id']);

	     		foreach($subs as $sub)
	     		{
	     			if(date("Y-m-d", strtotime($sub['Subscription']['start_date'])) < $datetoday && $datetoday < date("Y-m-d", strtotime($sub['Subscription']['end_date'])))
	     			{
	     				$dat[$i]['Subscription'] = $sub['Subscription'];
	     				$dat[$i]['Subscription']['status'] = 1;
	     			}
	     			else
	     			{
	     				$dat[$i]['Subscription'] = $sub['Subscription'];
	     				$dat[$i]['Subscription']['status'] = 0;
	     			}
	     			$this->Subscription->save($dat[$i]);
	     			$i++;
	     		}
	     		////////////////////////////////////////////////////////////////////////////////////////////////
	        	$data['status'] = true;
	        	$data['msg'] = "Successfull Login!";
	        }
	        else
	        {
	        	$data['status'] = false;
	        	$data['msg'] = "Login Unsuccessful!";	
	        }
	        echo json_encode($data);
	        die;
	    }

	    function register()
	    {
	    	$this->loadModel('User');
	    	$user = $this->decode_request();
	    	//pr($user);die;
	    	if(empty($user->name))
	    	{
	    		$data['status'] = false;
	    		$data['msg'] = 'Name cant be empty';
	    		echo json_encode($data);
	            die;
	    	}
	    	$name = $user->name;
			if(empty($user->number))
	        {
	            $data['status'] = false;
	            $data['msg'] = 'Mobile Number can not be empty';
	            echo json_encode($data);
	            die;
	        }
	        $number = $user->number;
	    	if(empty($user->email))
	    	{
	    		$data['status'] = false;
	    		$data['msg'] = 'Email cant be empty';
	    		echo json_encode($data);
	            die;
	    	}
	    	$email = $user->email;
	        if(empty($user->password))
	        {
	        	$data['status'] = false;
	        	$data['msg'] = "Password field cannot be empty";
	        	echo json_encode($data);
	            die;
	        }
	        $password = $user->password;
	        $data['User']['name'] = $name;
	        $data['User']['contact_no'] = $number;
	        $data['User']['email'] = $email;
	        $data['User']['password'] = $password;
	    
	        $check = $this->User->findByContactNo($number);
	        if($check)
	        {
	        	$resp['status'] = false;
	        	$resp['msg'] = 'Number Already Registered!';
	        	echo json_encode($resp);
	        	die;
	        }
	        $resp['User'] = $data['User'];
	        //echo "<pre>";print_r($resp['User']);die;
	        $random_number = mt_rand(000000, 999999);
	        $username = "monu.chauhan0490@gmail.com";
	        $hash = "ce5525a1f0a7523fc3af809155d6c743d5bb12ac70ce2ad5e8e1cfee76d3a39c";
	        $test = "0";
	        $sender = "TXTLCL"; 
	        $numbers = $number;
	        $message = "Your OTP For Verification on GaramHaandi is ". $random_number;
	        $message = urlencode($message);
	        $data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
	        $ch = curl_init('http://api.textlocal.in/send/?');
	        curl_setopt($ch, CURLOPT_POST, true);
	        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	        $result = curl_exec($ch); // This is the result from the API
	        curl_close($ch);
	        $resp['status'] = true;
    		$resp['otp'] = $random_number;
    		//$resp['User'] = $data['User'];
	        echo json_encode($resp);
	        die;
 	    }
 	    function forgotpassword()
 	    {
 	    	$this->loadModel('User');
 	    	$user = $this->decode_request();
 	    	$exist = $this->User->findByContactNo($user);
 	    	if(!$exist)
 	    	{
 	    		$resp['status'] = false;
 	    		$resp['message'] = "Not a Registered User!";
 	    	}
 	    	else
 	    	{
 	    		$random_number = mt_rand(000000, 999999);
		        $username = "monu.chauhan0490@gmail.com";
		        $hash = "ce5525a1f0a7523fc3af809155d6c743d5bb12ac70ce2ad5e8e1cfee76d3a39c";
		        $test = "0";
		        $sender = "TXTLCL"; 
		        $numbers = $user;
		        $message = "Your OTP For Verification on GaramHaandi is ". $random_number;
		        $message = urlencode($message);
		        $data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
		        $ch = curl_init('http://api.textlocal.in/send/?');
		        curl_setopt($ch, CURLOPT_POST, true);
		        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
		        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		        $result = curl_exec($ch); // This is the result from the API
		        curl_close($ch);
		        $resp['status'] = true;
	    		$resp['otp'] = $random_number;
 	    	}
 	    	//echo "<pre>";print_r($resp);die;
 	    	echo json_encode($resp);
	        die;
 	    }
 	    function newpassword()
 	    {
 	    	$this->loadModel('User');
 	    	$user = $this->decode_request();
 	    	$guy = $this->User->findByContactNo($user->number);
 	    	$guy['User']['password'] = $user->cnew;
 	    	if($this->User->save($guy))
 	    	{
 	    		$resp['status'] = true;
 	    		$resp['message'] = "Successfully Updated Your Password, Login with new Password!";
 	    	}
 	    	else
 	    	{
 	    		$resp['status'] = false;
 	    		$resp['message'] = "Could not update password!";
 	    	}
 	    	echo json_encode($resp);die;
 	    	//echo "<pre>";print_r($guy);die;
 	    }
 	    function verify()
 	    {
 	    	$this->loadModel('User');
 	    	$user = $this->decode_request();
 	    	//echo "<pre>";print_r($user);die;
 	    	$data['User']['name'] = $user->name;
 	    	$data['User']['contact_no'] = $user->contact_no;
 	    	$data['User']['email'] = $user->email;
 	    	$data['User']['password'] = $user->password;
 	    	if($this->User->save($data))
 	    	{
 	    		$resp['status'] = true;
 	    		$resp['msg'] = 'Registered Successfully!';
 	    	}
 	    	else
 	    	{
 	    		$resp['status'] = false;
 	    		$resp['msg'] = 'Could Not Register! Please try again!';	
 	    	}
 	    	echo json_encode($resp);
	        die;
 	    }
 	    function profile()
 	    {
 	    	$this->loadModel('User');
 	    	$user = $this->decode_request();
 	    	$data = $this->User->findById($user->id);
 	    	//echo "<pre>";print_r($data);die;
 	    	echo json_encode($data);
	        die;
 	    }
 	    function edituser()
 	    {
 	    	$this->loadModel('User');
 	    	$user = $this->decode_request();
 	    	$data['User']['id'] = $user->User->id;
 	    	$data['User']['name'] = $user->User->name;
 	    	$data['User']['email'] = $user->User->email;
 	    	$data['User']['address'] = $user->User->address;
 	    	//echo "<pre>";print_r($data);die;
 	    	if($this->User->save($data))
 	    	{
 	    		$resp['status'] = true;
 	    		$resp['msg'] = "Updated Profile!";
 	    	}
 	    	else
 	    	{
 	    		$resp['status'] = false;
 	    		$resp['msg'] = "Some Problem Occured! Try again!";
 	    	}
 	    	echo json_encode($resp);
	        die;
 	    }
 	    function locations()
 	    {
 	    	$this->loadModel('Location');
 	    	//echo "<pre>";print_r($_GET['keyword']);die;
 	    	$locations['Location'] = $this->Location->find('all', array('conditions' => array('Location LIKE' => '%'.$_GET['keyword'].'%')));
 	    	//echo "<pre>";print_r($locations);die;
 	    	if(!empty($locations['Location']))
 	    	{
 	    		$locations['status'] = true;
 	    		echo json_encode($locations);
	        	die;
 	    	}
 	    	else
 	    	{
 	    		$locations['status'] = false;
 	    		echo json_encode($locations);
	        	die;
 	    	}
 	    }
 	    function menu()
 	    {
 	    	//echo "<pre>";print_r($_GET);die;
 	    	$id = $_GET['location'];
	 	    $this->loadModel("Food");
			$this->loadModel("Location");
			$this->loadModel("Kitlocation");
			$this->loadModel("Kitchen");
			$loc = $this->Kitlocation->find('list', array('conditions'=>array('location_id'=>$id),'fields'=>'kitchen_id'));
			$food['Food']=$this->Food->find('all',array('conditions'=>array('kitchen_id'=>$loc, 'Food.method' => 0)));
			//echo "<pre>";print_r($food);die;
			if(!empty($food['Food']))
 	    	{
 	    		$food['status'] = true;
 	    		echo json_encode($food);
	        	die;
 	    	}
 	    	else
 	    	{
 	    		$food['status'] = false;
 	    		echo json_encode($food);
	        	die;
 	    	}
 	    }
 	    function discount()
 	    {
 	    	$this->loadModel('Coupon');
 	    	$code = $_GET['code'];
 	    	$date = date("Y-m-d");
 	    	$cupn = $this->Coupon->find('first', array('conditions' => array('Coupon.code' => $code, 'Coupon.valid_from <=' => $date, 'Coupon.valid_to >=' => $date), 'fields'=>array('code','category','amount')));
 	    	//echo "<pre>";print_r($cupn);die;
 	    	if($cupn)
 	    	{
 	    		$resp['data'] = $cupn['Coupon'];
 	    		$resp['status'] = true;
 	    	}
 	    	else
 	    	{
 	    		$resp['status'] = false;	
 	    	}
 	    	echo json_encode($resp);
	       	die;
 	    }
 	    function order()
 	    {
 	    	$this->loadModel('Order');
 	    	$this->loadModel('Orderitem');
 	    	$order = $this->decode_request();
 	    	//echo "<pre>";print_r($order);die;
 	    	$meals = $order->data;
 	    	$gtotal = 0;
 	    	foreach ($meals as $meal) {
 	    		$gtotal = $gtotal + ($meal->price * $meal->quantity);
 	    	}
 	    	$gtotal = $gtotal - $order->discount;
 	    	$orders['Order']['user_id'] = $order->uid;
 	    	$orders['Order']['date'] = date("Y-m-d h:m:s");
 	    	$orders['Order']['grandtotal'] = $gtotal;
 	    	$orders['Order']['address_id'] = $order->add_id;
 	    	if($this->Order->save($orders))
 	    	{
 	    		$id = $this->Order->getLastInsertID();
 	    		foreach($meals as $meal)
 	    		{
 	    			//echo "<pre>";print_r($meal);die;
 	    			$items['Orderitem']['user_id'] = $order->uid;
 	    			$items['Orderitem']['order_id'] = $id; 
 	    			$items['Orderitem']['food_id'] = $meal->id;
 	    			$items['Orderitem']['quantity'] = $meal->quantity;
 	    			$items['Orderitem']['price'] = $meal->price;
 	    			$items['Orderitem']['total'] = $meal->quantity * $meal->price;
 	    			$this->Orderitem->create();
 	    			$this->Orderitem->save($items);
 	    		}
 	    		$resp['status'] = true;
 	    	}
 	    	else
 	    	{
 	    		$resp['status'] = false;
 	    	}
 	    	echo json_encode($resp);
 	    	die;
 	    	//echo "<pre>";print_r($gtotal);die;
 	    }
 	    function getaddress()
 	    {
 	    	$this->loadModel('Address');
 	    	$this->loadModel('User');
 	    	$id = $_GET['id'];
 	    	$user = $this->User->findById($id);
 	    	$address = $this->Address->find('all', array('conditions' => array('Address.user_id' => $id)));
 	    	//pr($user);die;
 	    	$basic['name'] = $user['User']['name'];
 	    	$basic['number'] = $user['User']['contact_no'];
 	    	if($address)
 	    	{
 	    		$resp['data'] = $address;
 	    		$resp['basic'] = $basic;
 	    		$resp['status'] = true;
 	    		//echo "<pre>";print_r($resp);die;
 	    	}
 	    	else{
 	    		$resp['status'] = false;
 	    		//echo "<pre>";print_r($resp);die;
 	    	}	
 	    	echo json_encode($resp);
 	    	die;
 	    }
 	    function getsubsfood()
 	    {
 	    	$this->loadModel('Food');
 	    	$info = $this->decode_request();
 	    	if(!empty($info->type) && !empty($info->meal_type)){
 	    		$type = $info->type;
 	    		$meal = $info->meal_type;
 	    		$foods = $this->Food->find('all', array('conditions' => array('Food.method' => 1, 'Food.type' => $type, 'Food.subcategory' => $meal)));
 	    	}
 	    	elseif(!empty($info->type))
 	    	{
 	    		$type = $info->type;
 	    		$foods = $this->Food->find('all', array('conditions' => array('Food.method' => 1, 'Food.type' => $type)));
 	    	}
 	    	elseif (!empty($info->meal_type)) {
 	    		$meal = $info->meal_type;
 	    		$foods = $this->Food->find('all', array('conditions' => array('Food.method' => 1,'Food.subcategory' => $meal)));
 	    	}
 	    	
 	    	//pr($foods);die;
 	    	if(!empty($foods))
 	    	{
 	    		$resp['status'] = true;
 	    		$resp['foods'] = $foods;
 	    	}
 	    	else
 	    	$resp['status'] = false;

 	    	echo json_encode($resp);
 	    	die;
 	    }
 	    function subscribe()
 	    {
 	    	$this->loadModel('Subscription');
 	    	$this->loadModel('SubscriptionItem');
 	    	$info = $this->decode_request();
 	    	//pr($info);die;
 	    	$data['Subscription']['name'] = $info->basic->name;
 	    	$data['Subscription']['user_id'] = $info->basic->id;
 	    	$data['Subscription']['address_id'] = $info->basic->address;
 	    	$data['Subscription']['number'] = $info->basic->number;
 	    	$data['Subscription']['total'] = $info->total - $info->discount;
 	    	$data['Subscription']['start_date'] = date("Y-m-d");
 	    	$data['Subscription']['end_date'] = date("Y-m-d", strtotime($data['Subscription']['start_date'] . ' + '.$info->days.' days'));
 	    	$data['Subscription']['status'] = 1;
 	    	if($this->Subscription->save($data))
 	    	{
 	    		$id = $this->Subscription->getLastInsertID();
 	    		foreach($info->items as $pro)
 	    		{
 	    			$dat['SubscriptionItem']['sub_id'] = $id;
 	    			$dat['SubscriptionItem']['food_id'] = $pro->id;
 	    			$dat['SubscriptionItem']['created_date'] = date("Y-m-d");
 	    			$this->SubscriptionItem->create();
 	    			$this->SubscriptionItem->save($dat);
 	    		}
 	    		$resp['status'] = true;
 	    	}
 	    	else
 	    	{
 	    		$resp['status'] = false;
 	    	}
 	    	echo json_encode($resp);
 	    	die;
 	    }
 	    function orders()
 	    {
 	    	$this->loadModel('Order');
 	    	$this->loadModel('Orderitem');
 	    	$this->loadModel('Address');
 	    	$this->loadModel('Food');
 	    	$user = $_GET['user'];
 	    	
 	    	$this->Order->bindModel(array('hasMany' => array('Orderitem' => array('className' => 'Orderitem','foreignKey' => 'order_id'))));
 	    	$this->Order->bindModel(array('belongsTo' => array('Address' => array('className' => 'Address','foreignKey' => 'address_id'))));
 	    	$this->Orderitem->bindModel(array('belongsTo' => array('Food' => array('className' => 'Food','foreignKey' => 'food_id'))));
 	    	$pros = $this->Order->find('all', array('conditions' => array('Order.user_id' => $user), 'recursive' => 4));
 	    	$i=0;
 	    	foreach($pros as $pro)
 	    	{
 	    		$pro['Order']['date'] = date("d-m-Y", strtotime($pro['Order']['date']));
 	    		$pro1[$i]['Order'] =  $pro['Order'];
 	    		$pro1[$i]['Address'] = $pro['Address'];
 	    		$pro1[$i]['Orderitem'] = $pro['Orderitem'];
 	    		$i++;
 	    	}
 	    	if(!empty($pros))
 	    	{
 	    		$resp['status'] = true;
 	    		$resp['data'] = $pro1;
 	    	}
 	    	else
 	    	{
 	    		$resp['status'] = false;
 	    	}
 	    	echo json_encode($resp);die;
 	    }
 	    function subscriptions()
 	    {
 	    	$this->loadModel('Subscription');
 	    	$this->loadModel('SubscriptionItem');
 	    	$this->loadModel('Address');
 	    	$this->loadModel('Food');
 	    	$user = $_GET['user'];
 	    	$this->Subscription->bindModel(array('hasMany' => array('SubscriptionItem' => array('className' => 'SubscriptionItem','foreignKey' => 'sub_id'))));
 	    	$this->Subscription->bindModel(array('belongsTo' => array('Address' => array('className' => 'Address','foreignKey' => 'address_id'))));
 	    	$this->SubscriptionItem->bindModel(array('belongsTo' => array('Food' => array('className' => 'Food','foreignKey' => 'food_id'))));
 	    	$pros = $this->Subscription->find('all', array('conditions' => array('Subscription.user_id' => $user), 'recursive' => 4));
 	    	$i=0;$data="";
 	    	foreach($pros as $pro)
 	    	{
 	    		$data[$i]['Subscription'] = $pro['Subscription'];
 	    		$data[$i]['Subscription']['start_date'] = date("d-m-Y", strtotime($pro['Subscription']['start_date']));
 	    		$data[$i]['Subscription']['end_date'] = date("d-m-Y", strtotime($pro['Subscription']['end_date']));
 	    		$data[$i]['Address'] = $pro['Address'];
 	    		$j = 0;$new="";
 	    		$data[$i]['SubscriptionItem'] = $pro['SubscriptionItem'];
 	    		foreach($pro['SubscriptionItem'] as $item)
 	    		{
 	    			if($item['Food']['type'] == 1)
 	    				$data[$i]['SubscriptionItem'][$j]['Food']['type'] = "Veg";
 	    			else
 	    				$data[$i]['SubscriptionItem'][$j]['Food']['type'] = "NonVeg";
 	    			$j++;
 	    		}
 	    		$i++;
 	    	}
 	    	//pr($data);die;
 	    	if(!empty($data))
 	    	{
 	    		$resp['status'] = true;
 	    		$resp['data'] = $data;
 	    	}
 	    	else
 	    	{
 	    		$resp['status'] = false;
 	    	}
 	    	echo json_encode($resp);die;
 	    }
 	    function imageupload()
 	    {
 	    	$this->loadModel('User');
 	    	//pr($_FILES);pr($_POST);die;
 	    	App::Import('Component','UploadComponent');
	          $imgName=pathinfo($_FILES['attach']['name']);
	          $ext=$imgName['extension'];
	          $newImgName = rand(10,100000);
	          $tempFile = $_FILES['attach']['tmp_name'];
	          $destination = realpath('../webroot/img/usereimg/'). '/';
	          if(is_uploaded_file($_FILES['attach']['tmp_name']))
	            {

	             $src = $_FILES['attach']['tmp_name'];
	              list( $width, $height, $source_type ) = getimagesize($src);
	                        
	              move_uploaded_file($_FILES['attach']['tmp_name'],$destination.$newImgName.".".$ext);
	            }
	            $Image['User']['image']=$newImgName.".".$ext;
	            $Image['User']['id'] = $_POST['id'];
	            if($this->User->save($Image))
	            {$resp['status'] = true;
	          	$resp['image'] = $Image;}
		          	else
	 	    		{
	 	    			$resp['status'] = false;
	 	    		}
	 	    	echo json_encode($resp);die;
 	    }
 	   	function deladd()
 	   	{
 	   		$this->loadModel('Address');
 	   		$id = $this->decode_request();
 	   		//pr($id);die;
 	   		if($this->Address->delete($id))
 	   		{
 	   			$resp['status'] = true;
 	   		}
 	   		else
 	   		{
 	   			$resp['status'] = false;
 	   		}
 	   		echo json_encode($resp);die;
 	   	}
 	   	function addaddress()
 	   	{
 	   		$this->loadModel('Address');
 	   		$info = $this->decode_request();
 	   		//pr($info);die;
 	   		$data['Address']['user_id'] = $info->user;
 	   		$data['Address']['adress'] = $info->address;
 	   		$data['Address']['pincode'] = $info->pincode;
 	   		$data['Address']['contact_no'] = $info->contact;
 	   		if($this->Address->save($data))
 	   		{
 	   			$resp['id'] = $this->Address->getLastInsertID();
 	   			$resp['status'] = true;
 	   		}
 	   		else
 	   		$resp['status'] = false;
 	   		echo json_encode($resp);die;
 	   	}
 	    function editaddress()
 	    {
 	    	$this->loadModel('Address');
 	   		$info = $this->decode_request();
 	   		//pr($info);die;
 	   		$data['Address']['user_id'] = $info->user_id;
 	   		$data['Address']['adress'] = $info->adress;
 	   		$data['Address']['pincode'] = $info->pincode;
 	   		$data['Address']['contact_no'] = $info->contact_no;
 	   		$data['Address']['id'] = $info->id;
 	   		if($this->Address->save($data))
 	   		$resp['status'] = true;
 	   		else
 	   		$resp['status'] = false;
 	   		echo json_encode($resp);die;
 	    }	
 	    function reviews()
 	    {
 	    	$this->loadModel('Review');
 	   		$info = $_GET['id'];
 	   		//pr($info);die;
 	   		$revs = $this->Review->findAllByUserId($info);
 	   		if(!empty($revs))
 	   		{
 	   			$resp['status'] = true;
 	   			$resp['data'] = $revs;
 	   		}
 	   		else
 	   		$resp['status'] = false;
 	   		echo json_encode($resp);die;
 	    }
 	    function rndmfoods()
 	    {
			$this->loadModel('Food');
			$time = date("H:m:s");
			//pr($time);die;
			if(strtotime('10:00:00') < strtotime($time) && strtotime($time) < strtotime('12:00:00'))
			{
				$foods = $this->Food->find('all', array('conditions' => array('Food.subcategory' => 'Breakfast'), 'limit' => '6', 'order' => 'Food.id DESC'));
				$resp['type'] = "Breakfast";
			} 
			elseif(strtotime('12:00:00') < strtotime($time) && strtotime($time) < strtotime('15:00:00'))
			{
				$foods = $this->Food->find('all', array('conditions' => array('Food.subcategory' => 'Lunch'), 'limit' => '6', 'order' => 'Food.id DESC'));	
				$resp['type'] = "Lunch";
			}
			elseif(strtotime('19:00:00') < strtotime($time) && strtotime($time) < strtotime('23:00:00'))
			{
				$foods = $this->Food->find('all', array('conditions' => array('Food.subcategory' => 'Lunch'), 'limit' => '6', 'order' => 'Food.id DESC'));
				$resp['type'] = "Dinner";	
			}
			else
			{
				$foods = $this->Food->find('all', array('limit' => '5', 'order' => 'Food.id DESC'));
				$resp['type'] = "Your delicious meals!";
			}
			if(!empty($foods))
			{
				$resp['status'] = true;
				$resp['data'] = $foods;
			}
			else
			$resp['status'] = false;
			echo json_encode($resp);die;
 	    }
	}