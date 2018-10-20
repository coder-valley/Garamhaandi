<?php 

	ob_start();
	class HomesController extends AppController{
	var $layout = 'public';
    var $helpers = array('Session','Html','Js','Form','Paginator','Text');
    public $components = array('Session','Email','RequestHandler','Cookie','Resize','Upload','Paginator');
    var $cart_item = array();
    var $kitid = '';

    public function beforeFilter()
    {
        parent::beforeFilter();
        
        $title = $this->params['action'];
        // pr($uname);die;
        $kit = array('kitchen_dashboard','forgot','kit_order','view_dishes','delete_dish',
                'add_dishes','edit_dish','kitchen_logout','kitchen_edit','kitchen_change_password');
        $user = array('user_dashboard','address_edit','forgot','user_logout','user_edit','orderdetails','checkout2','user_change_password');
        if(!$this->Session->check('Kitchen'))
        {
            if(in_array($title, $kit))
            {
                $this->redirect(array('controller' => 'homes','action'=>'index'));
            }
        } 

        if(!$this->Session->check('User'))
        { 
            if(in_array($title, $user))
            {
                $this->redirect(array('controller' => 'homes','action'=>'index'));
            }
            /*else{
                echo 'false';die;
            }*/
        } 
        $this->loadModel("User");
        $this->loadModel("Kitchen");
        $this->loadModel("Address");
        $this->loadModel("Kitlocation");
        $this->loadModel("Location");
        $kitid = $this->Session->read('Kitchen.id');
        $kitname = $this->Kitchen->find('first', array('fields' => array('name','image'),'conditions'=> array('id' => $kitid)));
    	$uid = $this->Session->read('User.id');
        $uname = $this->User->find('first', array('fields' => array('name','image'),'conditions'=> array('id' => $uid)));
        $this->Address->bindModel(array(
											'belongsTo' => array(
																	'City' => array(
																						'className' => 'City',
																						'foreignKey' => 'city'	
																						),
																	'Location' => array(
																						'className' => 'Location',
																						'foreignKey' => 'location',
																						'fields' => array('location','id')
																						)
																)
										)
									);
		// $kitlocate = $this->Kitlocation->find('all', array('recursive' => 3,'conditions' => array('Kitlocation.kitchen_id' => $kitid)));
		$ulocation = $this->Address->find('first',array('conditions'=>array('Address.user_id'=>$uid)));
		$this->Session->write('ulocate',$ulocation);
        // pr($ulocation);die;
        $this->set(compact('uname','kitname','ulocation'));
    }

	public function index()
	{
		$this->layout = 'public';
		$this->loadModel('Category');
		$categories = $this->Category->findAllByParent_id('0');
		//pr($categories);die;
		$this->set(compact('categories'));
	}

	public function menuimg()
	{		
		
	}

	public function validation()
	{
		$validate = array('contact_no'=> array('rule' => 'isUnique','message'=>'Contact No. already registered'));
	}

	public function faq()
	{
		$this->layout = 'public';
	 	$this->loadModel("Faq");
	 	$this->loadModel("Topic");
	 	$this->Faq->bindModel(array(
										'belongsTo' => array(
																'Topic' => array(
																					'className' => 'Topic',
																					'foreignKey' => 'topic_id'	
																					)
															)
									)
								);
		
		$faq=$this->Faq->find('all',array('recursive' => 2));
	 	$tpc=$this->Topic->find('all');
	 	// pr($faq);die;
	 	$this->set(compact('faq','tpc'));
	}
	
	public function forgot()
	{
		$this->layout = 'public';
	}

	public function reviews()
	{
		$this->layout = 'public';
	}

	public function about()
	{
		$this->loadModel('About');
		$this->loadModel('About_team');
		$about = $this->About->find('first');
		$about_team = $this->About_team->find('all');
		// pr($about_team);die;
		$this->set(compact('about','about_team'));
	}
	public function offers()
	{		
	}

	public function contact()
	{	
		$this->layout ="public";
		$this->loadModel('Contact');
		$uid = $this->Session->read('User.id');
		$uinfo = $this->User->findById($uid);
		// pr($uinfo);die;
		if ($this->request->is('post')) 
        {
        	$data = $this->request->data;
        	// pr($data);die;
        	if ($this->Contact->save($data)) 
			{
				$this->Session->setFlash('Your query is received Successfully.','success');
				return $this->redirect(array('action' => 'contact'));
			}
			else
			{
				$this->Session->setFlash('Query not received.','error');
				$this->redirect($this->referer());
			}
        }
		$this->set(compact('uid','uinfo'));
	}
	public function dishAjax()
	{
		$this->autoRender = false;
		$this->layout = null;
		$catId = $_POST['id'];
		$this->loadModel('Category');
		$this->Category->bindModel(array(
								'hasMany' => array(
													'Menu' => array(
																	'className' => 'Menu',
																	'foreignKey' => 'category_id'
																	)
													)	
								)
						);
		$categories = $this->Category->findById($catId);
		$this->set(compact('categories'));
		$this->render('dishElement');
	}

	public function ajaxSearch()
	{
		$this->autoRender = false;
		$this->layout = null;
		$search = $_POST['key'];
		$this->loadModel('Kitchen');
		$categories = $this->Food->find('all',array(
													'conditions' => array(
																			'dish Like' => '%'.$search.'%'
																			)
													)
										);
		$this->set(compact('categories'));
		$this->render('search');
	}

	public function order(){
		if($this->request->is('post'))
		{
			// pr($this->data);die;
		}
	}

	/*SEARCH BAR START*/
	public function search_box($id = null)
	{
		// echo $id;
		// pr($id);die;
		$this->layout = "public";
		$this->loadModel('Food');
		$this->loadModel('Kitchen');
		$this->loadModel('Location');
		$data=$this->data;
		
		$locate=$this->Location->find('all',array('conditions' => array('Location.location Like' =>  $id.'%')));
		$lo = '';
		foreach($locate as $loc)
		{
			$lo = $lo . '<li class="ui-menu-item"><a autocomplete="off" href="'.HTTP_ROOT."/Homes/menu/".base64_encode($loc['Location']['id']).'">'.$loc['Location']['location'].'</a></li>';
		}
		
		// $this->Session->write('menulocate',$locate);
		echo $lo;
		die;
		// pr($locate);die;
	}
	/*SEARCH BAR END*/


	/*SMS GATEWAY START*/
	public function  sendotpsms($id = null)
	{
		// echo $id;die;
		$id = base64_encode($id);
		// pr($id);die;
		$six_digit_random_number = base64_encode(mt_rand(000000, 999999));

		$this->Session->write('verifyotp',$six_digit_random_number);
		// $data=$this->data;
		//pr($data);die;
		// Authorisation details.
		$username = "monu.chauhan0490@gmail.com";
		$hash = "ce5525a1f0a7523fc3af809155d6c743d5bb12ac70ce2ad5e8e1cfee76d3a39c";

		// Config variables. Consult http://api.textlocal.in/docs for more info.
		$test = "0";

		// Data for text message. This is the text message data.
		$sender = "TXTLCL"; // This is who the message appears to be from.
		$numbers = base64_decode($id); // A single number or a comma-seperated list of numbers
		$message = "Your OTP For Verification on GaramHaandi is.". base64_decode($six_digit_random_number);
		// 612 chars or less
		// A single number or a comma-seperated list of numbers
		$message = urlencode($message);
		$data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
		$ch = curl_init('http://api.textlocal.in/send/?');
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$result = curl_exec($ch); // This is the result from the API
		curl_close($ch);

		echo json_encode($six_digit_random_number);
		die;

		// echo "<pre>";
		// print_r($numbers);die;
	}

	public function  verifyotp($id = null)
	{
		// echo $id;die;
		$uid = $this->Session->read('verifyotp');
		$userid = base64_decode($uid);
		// pr($userid);die;
		if($userid==$id)
		{
			echo 'success';
		}
		else
		{
			echo 'error';
		}
		//echo json_encode($uid);
		//$this->set(compact('uid'));
		die;
	}
	/*SMS GATEWAY END*/

	/*User Manage Addresses START*/
		public function address_edit($id = null)
		{
			$this->layout="public";
			$this->loadModel('Address');
			$this->loadModel('Country');
			$this->loadModel('State');
			$this->loadModel('City');
			$id=base64_decode($id);
			$details=$this->Address->findById($id);
			$count = $this->Country->find('all', array('fields'=>array('Country.country_name','Country.id')));
			$state_list = $this->State->find('all', array('fields'=>array('State.id','State.statename')));
			$city_list = $this->City->find('all', array('conditions'=>array('state_id'=>$details['Address']['state']),'fields'=>array('City.id','City.city_name')));
			$location_list = $this->Location->find('all', array('conditions'=>array('city_id'=>$details['Address']['city']),'fields'=>array('Location.id','Location.location')));
			// pr($location_list);die;
			//$stt = $this->State->find('all', array('fields'=>array('State.id','State.statename')));
			//$ct = $this->City->find('all', array('fields'=>array('City.id','City.city_name')));
			// pr($details);die;
			$this->set(compact('details','count','state_list','city_list','location_list'));
			$this->set('id',$id);
			if($this->request->is('post'))
			{
				$data=$this->data;
				// pr($data);die;
				if(!empty($data))
				{
					if($this->Address->save($data))
					{
						// pr($data);die;
						$kid = base64_encode($details['Address']['user_id']);
						$this->Session->setFlash('Address Details has been updated successfully.','success');
						$this->redirect(array('action'=>'user_address',$kid));
					}
					else
					{
						$this->Session->setFlash('failed in updating.','error');
						$this->redirect($this->referer());
					}
				}
		  	}
		}

		public function user_add_address($id = null)
		{
			$this->layout="public";
			$id=(base64_decode($id));
			$this->loadModel("Address");
			$this->loadModel("User");
			$this->loadModel("Country");
			$this->loadModel("State");
			$this->loadModel("City");
			$this->loadModel("Location");
			$count = $this->Country->find('all', array('fields'=>array('Country.country_name','Country.id')));
			$stt = $this->State->find('all', array('fields'=>array('State.id','State.statename')));
			$ct = $this->City->find('all', array('fields'=>array('City.id','City.city_name')));
			$locate = $this->Location->find('all', array('fields'=>array('Location.id','Location.location')));
			// pr($locate);die;
			//pr($ct);die;
			$this->set(compact('count', 'ct', 'stt', 'locate'));
			if ($this->request->is('post')) {
				$data = $this->data;
				$data['Address']['user_id'] = $id;
				//pr($data);die;
				if($this->Address->save($data)){
					$id = base64_encode($id);
					return $this->redirect(array('action' => 'user_address',$id));
				}
			}
		}

		public function user_address($id =null)
		{
			$this->layout="public";
			$id=(base64_decode($id));
			$this->loadModel("Address");
			$this->loadModel("User");
			$this->Address->bindModel(array(
											'belongsTo' => array(
																	'Country' => array(
																						'className' => 'Country',
																						'foreignKey' => 'country'	
																						)
																)
										)
									);
			$this->Address->bindModel(array(
											'belongsTo' => array(
																	'State' => array(
																						'className' => 'State',
																						'foreignKey' => 'state'	
																						)
																)
										)
									);
			$this->Address->bindModel(array(
											'belongsTo' => array(
																	'City' => array(
																						'className' => 'City',
																						'foreignKey' => 'city'	
																						),
																	'Location' => array(
																						'className' => 'Location',
																						'foreignKey' => 'location'
																						)
																)
										)
									);
			// $this->User->bindModel(
			// 		array('className'=>'Country','foreignKey'=>'country_name','className'=>'State', 'foreignKey'=>'statename')
			// 	);
			$this->Paginator->settings = array('limit' => '50','conditions'=>array('user_id'=>$id));

			$uid=$this->paginate('Address');
			$this->Session->delete('ulocate');
			// pr($uid);die;
			$this->set(compact('uid', 'id'));
		}
	/*User Manage Addresses END*/

	/*KITCHEN && USER DASHBOARD START*/
		public function user_dashboard()
		{
			$this->layout="public";
			$this->loadModel("User");
			$this->loadModel('City');
			$this->loadModel('Address');
			$this->User->bindModel(array('hasMany'=> array('Address'=> array('className' => 'Address', 'foreignKey' => 'user_id'))));
			$this->Address->bindModel(array('belongsTo'=> array('City'=> array('className' => 'City', 'foreignKey' => 'city'))));
			$uid = $this->Session->read('User.id');
			$uinfo = $this->User->find('all',array('recursive'=>2, 'conditions' =>array('User.id'=> $uid)));
			// pr($uid);die;
			// pr($uinfo);die;
			$this->set(compact('uid','uinfo'));
		}

		public function kitchen_dashboard()
		{
			$this->layout="public";
			$this->loadModel("Food");
			$this->loadModel("Kitchen");
			$this->loadModel("Kitlocation");
			$this->loadModel('Location');
			$this->loadModel('City');
			$this->Kitchen->bindModel(array(
											'belongsTo' => array(
																	
																	'City' => array(
																					'className' => 'City',
																					'foreignKey' => 'city'
																					),

											),
											'hasMany' => array(
																'Kitlocation' => array(
																					'className' => 'Kitlocation',
																					'foreignKey' => 'kitchen_id'
																					   )
														   )
										));
			$this->Kitlocation->bindModel(array('belongsTo' => array(
																 'Location' => array(
																 					'className' => 'Location',
																 					'foreignKey' => 'location_id'
																 					)
																)));
			$id = $this->Session->read('Kitchen.id');
			$info = $this->Kitchen->find('all', array('recursive' => 3,'conditions' => array('Kitchen.id' => $id)));
			// pr($id);die;
			// pr($info);die;
			$this->set(compact('id','info'));
		}
	/*KITCHEN && USER DASHBOARD ENDS*/

	/*KITCHEN && USER ORDER HISTORY START*/
		public function kit_order()
		{
			$this->layout="public";
			$this->loadModel("Food");
			$this->loadModel("Kitchen");
			$id = $this->Session->read('Kitchen.id');
			$this->set(compact('id'));
		}

		public function orderdetails()
		{
			$this->layout="public";
			$this->loadModel("Food");
			$this->loadModel("Order");
			$this->loadModel("Orderitem");
			$this->loadModel("User");
			$id = $this->Session->read('User.id');
			$orderitem = $this->Orderitem->find('all',array('conditions' => array('user_id'=>$id)));
			// pr($orderitem);die;
			$order = $this->Order->find('all',array('conditions' => array('user_id'=>$id)));
			// pr($order);die;
			$this->set(compact('id','orderitem','order'));
		}
	/*KITCHEN && USER ORDER HISTORY ENDS*/

	/*ADD VIEW DELETE DISHES STARTS*/
		public function view_dishes($id = null)
		{
			$this->layout="public";
			$id=(base64_decode($id));
			//$id = $this->Session->read('Kitchen.id');
			$this->loadModel("Food");
			$this->loadModel("Kitchen");
			$this->Paginator->settings = array('limit' => '50','conditions'=>array('kitchen_id'=>$id));
			$pr=$this->paginate('Food');
			$this->set(compact('pr', 'id'));
		}

		public function delete_dish($id=null)
		{
			$this->layout="public";
			$this->loadModel("Food");
			$id=convert_uudecode(base64_decode($id));
			//echo '<pre>';print_r($id);die;
			if($this->Food->delete($id))
			{
			   $this->Session->setFlash('Dish has been deleted successfully','success');
			   $this->redirect($this->referer());
			}
			$this->Session->setFlash('Error in deleting Dish');
			$this->redirect($this->referer());
		}

		public function add_dishes($id = null)
		{
			$this->layout="public";
			$id=(base64_decode($id));
			//pr($id);die;
			$this->loadModel("Food");
			if ($this->request->is('post')) 
			{
				$data = $this->data;
				//pr($data);die;
				//pr($data);die;
				if(!empty($_FILES['image']['name']))
				{
					//pr($_FILES);die;
					//echo '<pre>';print_r($_FILES);die;
					App::Import('Component','UploadComponent');
					$upload= new UploadComponent(); 
					$imgName=pathinfo($_FILES['image']['name']);
					$ext=$imgName['extension'];
					$newImgName = rand(10,100000);
					$tempFile = $_FILES['image']['tmp_name'];
					$destination = realpath('../webroot/img/food'). '/';
					//echo '<pre>';print_r($destination);die;
					if(is_uploaded_file($_FILES['image']['tmp_name']))
					{
						$src = $_FILES['image']['tmp_name'];
						//echo '<pre>';print_r($src);die;
						list( $width, $height, $source_type ) = getimagesize($src);
						if ($width > 200 && $height > 200)
						{
							move_uploaded_file($_FILES['image']['tmp_name'],$destination.$newImgName.".".$ext);
						}else
						{
							$this->Resize->resize($_FILES['image']['tmp_name'],$destination.$newImgName.".".$ext,'as_define',200,200,0,0,0,0);
						}
					}
					$data['Food']['image']=$newImgName.".".$ext;	  
				}
				$data['Food']['kitchen_id'] = $id;
				if ($this->Food->save($data)) 
				{
					// pr($data);die;
					$id = base64_encode($id);
					$this->Session->setFlash('Dish added Succesfully.','success');
					$this->redirect(array('action' => 'view_dishes',$id));
				}
				else
				{
					$this->Session->setFlash('Dish not added.','error');
					$this->redirect($this->referer());
				}
			}
			$this->set(compact('id'));
		}

		public function edit_dish($id = null)
		{
			$this->layout="public";
			$this->loadModel('Food');
			$id=base64_decode($id);
			$details=$this->Food->findById($id);
			// pr($details);die;
			$this->set(compact('details'));
			$this->set('id',$id);
			if($this->request->is('post'))
			{
				if(!empty($this->data))
				{
					if(!empty($id))
					{
						$data=$this->data;
						// pr($data);die;
						//pr($_FILES);die;
						if(!empty($_FILES['image']['name'][0]))
							{
							//App::Import('Component','UploadComponent');
							//$$upload= new UploadComponent();
							$imgName=pathinfo($_FILES['image']['name']);
							//echo '<pre>';print_r($imgName);die;
							$ext=$imgName['extension'];
							$newImgName = rand(10,100000);
							$tempFile = $_FILES['image']['tmp_name'];
							$destination = realpath('../webroot/img/food'). '/';
							if(is_uploaded_file($_FILES['image']['tmp_name']))
							{
								move_uploaded_file($_FILES['image']['tmp_name'],$destination.$newImgName.".".$ext);
							
							 }
							$data['image']=$newImgName.".".$ext;
						}

						$data['id'] = $id;
					
						//pr($data);die;
						if($this->Food->save($data))
						{
							//pr($data);die;
							$kid = base64_encode($details['Food']['kitchen_id']);
							$this->Session->setFlash('Dish Details has been updated successfully.','success');
							$this->redirect(array('action'=>'view_dishes',$kid));
						}
						else
						{
							$this->Session->setFlash('failed in updating.','error');
							$this->redirect($this->referer());
						}
					}
				}
		  }
		}
	/*ADD VIEW DELETE DISHES ENDS*/


	/* USER AND KITCHEN REGISTRATION, CHECK, LOGIN AND LOGOUT STARTS*/
		public function kitchen_register()
		{	
			$this->layout = 'public';
			$this->loadModel('Kitchen');
			// $this->loadModel('Kitchen');
	        if ($this->request->is('post')) 
	        {
	        	$data = $this->request->data;
	        	// pr($data);die;
	            if ($this->Kitchen->save($data)) 
				{
					$this->Session->setFlash('Registered succesfully.Please login to proceed further.','success');
					return $this->redirect(array('action' => 'index'));
				}
				else
				{
					$this->Session->setFlash('Registration Failed.','error');
					$this->redirect($this->referer());
				}
	        }
		}

		public function kitchcknmbr($id = null)
		{
			// echo $id;die;
			$kitcntct = $this->Kitchen->find('first', array('conditions' => array('Kitchen.contact_no' => $id), 'fields'=>array('contact_no')));
			// pr($kitcntct);die;
			if($kitcntct)
			{
				echo 'true';
			}
			else
			{
				echo 'false';
			}
			die;
		}
		public function kitchen_login($nmbr= null, $pswrd = null)
		{
			$this->layout="public";
			$this->loadModel('Kitchen');
			if($this->request->is('post'))
			{
				// $data = $this->data;
				// pr($data);die;
			  	$login = $this->Kitchen->find('first',array('conditions'=>array('Kitchen.contact_no'=>$nmbr,'Kitchen.password'=>$pswrd)));
			  	//pr($login);die;
			  	if($login)
				{		
					$this->Session->write('Kitchen',$login['Kitchen']);
					echo 'true';
				}			
				else
				{
					echo 'fail';
				}
				die;
				
			}
		}

		public function kitchen_logout()
		{
			$this->Session->delete('Kitchen');
			$this->Session->delete('error');
			$this->redirect(array('action' => 'index'));
		}

		public function user_register()
		{	
			$this->layout = 'public';
			$this->loadModel('User');
	        if ($this->request->is('post')) 
	        {
	        	$data = $this->request->data;
	        	// pr($data);die;
	        	if ($this->User->save($data)) 
				{
					$this->Session->setFlash('Registered succesfully.Please login to proceed further.','success');
					return $this->redirect(array('action' => 'index'));
				}
				else
				{
					$this->Session->setFlash('Registration Failed.','error');
					$this->redirect($this->referer());
				}
	        }
		}

		public function userchcknmbr($id = null)
		{
			// echo $id;die;
			$ucntct = $this->User->find('first', array('conditions' => array('User.contact_no' => $id), 'fields'=>array('contact_no')));
			// pr($ucntct);die;
			if($ucntct)
			{
				echo 'true';
			}
			else
			{
				echo 'false';
			}
			die;
		}

		public function user_login($nmbr= null, $pswrd = null)
		{
			$this->layout="public";
			$this->loadModel('User');
			if($this->request->is('post'))
			{
				// $data = $this->data;
				// pr($data);die;
				//echo $nmbr.$pswrd;
			  	$login = $this->User->find('first',array('conditions'=>array('User.contact_no'=>$nmbr,'User.password'=>$pswrd)));
			  	// pr($login);die;
			  	if($login)
				{		
					$this->Session->write('User',$login['User']);
					echo 'true';
				}			
				else
				{
					echo 'fail';
				}
				die;
			}
		}

		public function user_logout()
		{
			$this->Session->delete('User');
			$this->Session->delete('error');
			$this->redirect(array('action' => 'index'));
		}
	/* USER AND KITCHEN REGISTRATION, CHECK, LOGIN AND LOGOUT ENDS*/

	/* USER AND KITCHEN FORGOT PASSWORD STARTS*/
		public function kitchen_forgot($id = null) 
		{
			// echo $id;die;
			$this->layout="public";
			// $id = base64_encode($id);
			$this->loadModel('Kitchen');
			$data = $this->data;
			// pr($data);die;
		  	$login = $this->Kitchen->find('first',array('conditions'=>array('Kitchen.contact_no'=>$id), 'fields'=>array('id')));
		  	// $this->set(compact('login'));
		  	$kitid = base64_encode($login['Kitchen']['id']);
			// pr($kitid);die;
		  	if($login)
			{				
				// echo 'success';
				// 
				// pr($id);die;
				$six_digit_random_number = base64_encode(mt_rand(000000, 999999));

				$this->Session->write('verifyotp',$six_digit_random_number);
				// $data=$this->data;
				// pr($data);die;
				// Authorisation details.
				$username = "monu.chauhan0490@gmail.com";
				$hash = "ce5525a1f0a7523fc3af809155d6c743d5bb12ac70ce2ad5e8e1cfee76d3a39c";

				// Config variables. Consult http://api.textlocal.in/docs for more info.
				$test = "0";

				// Data for text message. This is the text message data.
				$sender = "TXTLCL"; // This is who the message appears to be from.
				$numbers = $id; // A single number or a comma-seperated list of numbers
				$message = "Your OTP For Verification on GaramHaandi is.". base64_decode($six_digit_random_number);
				// 612 chars or less
				// A single number or a comma-seperated list of numbers
				$message = urlencode($message);
				$data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
				$ch = curl_init('http://api.textlocal.in/send/?');
				curl_setopt($ch, CURLOPT_POST, true);
				curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
				$result = curl_exec($ch); // This is the result from the API
				curl_close($ch);

				//$data001['data']['otp'] = $six_digit_random_number;
				//$data001['data']['id'] = $id;

				echo $kitid;
				
				die;
			}
			else
			{
				echo 'error';	
			}

			// echo json_encode($kitid);
			die;
			// $this->set(compact('login'));
		}

		public function user_forgot($id = null)
		{
			// echo $id;die;
			$this->layout="public";
			$this->loadModel('User');
			$data = $this->data;
			//pr($data);die;
		  	$login = $this->User->find('first',array('conditions'=>array('User.contact_no'=>$id), 'fields'=>array('id')));
		  	$userid = base64_encode($login['User']['id']);
		  	// pr($login);die;
		  	if($login)
			{				
							
				// echo 'success';
				// 
				// pr($id);die;
				$six_digit_random_number = base64_encode(mt_rand(000000, 999999));

				$this->Session->write('verifyotp',$six_digit_random_number);
				// Authorisation details.
				$username = "monu.chauhan0490@gmail.com";
				$hash = "ce5525a1f0a7523fc3af809155d6c743d5bb12ac70ce2ad5e8e1cfee76d3a39c";

				// Config variables. Consult http://api.textlocal.in/docs for more info.
				$test = "0";

				// Data for text message. This is the text message data.
				$sender = "TXTLCL"; // This is who the message appears to be from.
				$numbers = $id; // A single number or a comma-seperated list of numbers
				$message = "Your OTP For Verification on GaramHaandi is.". base64_decode($six_digit_random_number);
				// 612 chars or less
				// A single number or a comma-seperated list of numbers
				$message = urlencode($message);
				$data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
				$ch = curl_init('http://api.textlocal.in/send/?');
				curl_setopt($ch, CURLOPT_POST, true);
				curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
				$result = curl_exec($ch); // This is the result from the API
				curl_close($ch);

				//$data001['data']['otp'] = $six_digit_random_number;
				//$data001['data']['id'] = $id;

				echo $userid;
				
				die;
			}
			else
			{
				echo 'error';	
			}

			// echo json_encode($kitid);
			die;
		}
	/* USER AND KITCHEN FORGOT PASSWORD ENDS*/

	/* USER AND KITCHEN Edit Profile  STARTS*/
		public function user_edit($id = null)
		{
			$this->layout="public";
			$this->loadModel('User');
			$id=(base64_decode($id));
			$details=$this->User->findById($id);
			// pr($details);die;
			$this->set(compact('details'));
			$this->set('id',$id);
			if($this->request->is('post'))
			{
				// pr($data);die;
				if(!empty($this->data))
				{
					// pr($data);die;
					if(!empty($id))
					{
						$data=$this->data;
						// pr($data);die;
						// pr($_FILES);die;
						if(!empty($_FILES['image']['name'][0]))
						{
							App::Import('Component','UploadComponent');
							$$upload= new UploadComponent();
							$imgName=pathinfo($_FILES['image']['name']);
							//echo '<pre>';print_r($imgName);die;
							$ext=$imgName['extension'];
							$newImgName = rand(10,100000);
							$tempFile = $_FILES['image']['tmp_name'];
							$destination = realpath('../webroot/img/usereimg'). '/';
							if(is_uploaded_file($_FILES['image']['tmp_name']))
							{
								move_uploaded_file($_FILES['image']['tmp_name'],$destination.$newImgName.".".$ext);
							}
							$data['image']=$newImgName.".".$ext;
						}

						$data['id'] = $id;
						$data1 = $data;
						//$data1['User']['id'] = $data['id'];
						if($this->User->save($data1))
						{
							//pr($data1);die;
							$this->Session->setFlash('User Details has been updated successfully.','success');
							$this->redirect(array('action'=>'user_dashboard'));
						}
						else
						{
							$this->Session->setFlash('Failed in updating.','error');
							$this->redirect($this->referer());
						}
					}
				}
		  	}
		}

		public function kitchen_edit($id = null)
		{
			$this->layout="public";
			$this->loadModel('Kitchen');
			$this->loadModel('Country');
			$this->loadModel('State');
			$this->loadModel('City');
			$this->loadModel('Location');
			$this->loadModel('Kitlocation');
			$id=(base64_decode($id));
			$details=$this->Kitchen->findById($id);
			//pr($details);die;
			$count = $this->Country->find('all', array('fields'=>array('Country.country_name','Country.id')));
			$state_list = $this->State->find('all', array('conditions'=>array('country_id'=>$details['Kitchen']['country']),'fields'=>array('State.id','State.statename')));
			$city_list = $this->City->find('all', array('conditions'=>array('state_id'=>$details['Kitchen']['state']),'fields'=>array('City.id','City.city_name')));
			$location_list = $this->Location->find('all', array('conditions'=>array('city_id'=>$details['Kitchen']['city']),'fields'=>array('Location.id','Location.location')));
			$this->Kitlocation->bindModel(array('belongsTo' => array(
																 'Location' => array(
																 					'className' => 'Location',
																 					'foreignKey' => 'location_id'
																 					)
																)));
			$kitlocate = $this->Kitlocation->find('list', array('fields' => 'location_id','conditions' => array('kitchen_id' => $id)));
			// pr($city_list);pr($location_list);die;
			$this->set(compact('details','count','kitlocate','state_list','city_list','location_list'));
			$this->set('id',$id);
			if($this->request->is('post'))
			{
				if(!empty($this->data))
				{
					// pr($data);die;
					if(!empty($id))
					{
						$data=$this->data;
						$kitlocation = $data['Kitlocation'];
						// pr($data);die;
						if(!empty($_FILES['image']['name'][0]))
						{
							App::Import('Component','UploadComponent');
							$$upload= new UploadComponent();
							$imgName=pathinfo($_FILES['image']['name']);
							// echo '<pre>';print_r($imgName);die;
							$ext=$imgName['extension'];
							$newImgName = rand(10,100000);
							$tempFile = $_FILES['image']['tmp_name'];
							$destination = realpath('../webroot/img/usereimg'). '/';
							if(is_uploaded_file($_FILES['image']['tmp_name']))
							{
								move_uploaded_file($_FILES['image']['tmp_name'],$destination.$newImgName.".".$ext);
							}
							$data['image']=$newImgName.".".$ext;
						}

						$data['id'] = $id;
						$data1 = $data;
						// pr($data1);die;
						$this->Kitlocation->deleteAll(array('kitchen_id' =>$id));
						if($this->Kitchen->save($data1))
						{
							// pr($data1);die;
							foreach ($data['Kitlocation']['location_id'] as $l_id ) 
							{
								$location_id['Kitlocation']['location_id'] = $l_id;
								$location_id['Kitlocation']['kitchen_id'] = $id;
								// pr($l_id); 
								//pr($l_id); die;
								$this->Kitlocation->create();
			                    $this->Kitlocation->save($location_id);
							}
							$this->Session->setFlash('Kitchen Details has been updated successfully.','success');
							$this->redirect(array('action'=>'kitchen_dashboard'));
						}
						else
						{
							$this->Session->setFlash('failed in updating.','error');
							$this->redirect($this->referer());
						}
					}
		  		}
		  	}
		}
	/* USER AND KITCHEN Edit Profile ENDS*/

	/*STATE CITY AND LOCATIONS START*/

		public function getstates($id=null)
		{
			//pr($id);die;
		  $this->loadModel('State');
		  $state_list = $this->State->find('all', array('conditions' => array('country_id' => $id)));
		  pr($state_list);
		  $state = '<option>Select</option>';
		  foreach($state_list as $cnt)
		  {
			$state = $state . '<option value="'.$cnt['State']['id'].'">'.$cnt['State']['statename'].'</option>';
		  }
		  //echo $result;
		  echo json_encode($state);
		  die;
		}

		public function getcities($id=null)
		{
			//pr($id);die;
		  $this->loadModel('City');
		  $city_list = $this->City->find('all', array('conditions' => array('state_id' => $id)));
		 //pr($city_list);
		  $city = '<option>Select</option>';
		  foreach($city_list as $ct)
		  {
			$city = $city . '<option value="'.$ct['City']['id'].'">'.$ct['City']['city_name'].'</option>';
		  }
		  //echo $result;
		  echo json_encode($city);
		  die;
		}

		public function getlocations($id=null)
		{
			//pr($id);die;
		  $this->loadModel('Location');
		  $location_list = $this->Location->find('all', array('conditions' => array('city_id' => $id)));
		 //pr($city_list);

		  $location = '<select class="form-control required location_change" multiple id="locationF" name="data[Kitlocation][location_id][]">';
		  $location .='<option disabled value=""></option>';
		  foreach($location_list as $lctn)
		  {
			$location = $location.'<option value="'.$lctn["Location"]["id"].'">'.$lctn["Location"]["location"].'</option>';
		  }
		   $location.='</select>';
		  //echo $result;
		  //pr($location);die;
		  echo json_encode($location);
		  die;
		}

	/*STATE CITY AND LOCATIONS START*/

	/*CHANGE PASSWORD START*/

		public function user_change_password($id = null)
		{
			$this->layout="public";
			$this->loadModel('User');
			$id=base64_decode($id);
			$userDetail = $this->User->find('first',array('conditions'=>array('User.id'=>$id),'fields'=>array('id','password')));
			$this->set('userDetail',$userDetail);
			$this->set('id',$id);
			//pr($userDetail);die;
			if(!empty($this->data))
			{

				$data = $this->data;
				//pr($data);die;
				if($data['User']['old'] == $data['userpass'])
				{	
					$user['User']['password'] =$data['User']['new'];
					$user['User']['id'] =$data['id'];
					$this->User->save($user);
					$this->Session->setFlash('Password has been changed successfully.','success');
					$this->redirect(array('controller'=>'Homes','action'=>'user_dashboard'));
				}
				else
				{
					$this->Session->setFlash('Please enter the correct password.','error');
					$this->redirect($this->referer());
				}
			}
		}

		public function kitchen_change_password($id = null)
		{
			$this->layout="public";
			$this->loadModel('Kitchen');
			$id=base64_decode($id);
			$kitDetail = $this->Kitchen->find('first',array('conditions'=>array('Kitchen.id'=>$id),'fields'=>array('id','password')));
			$this->set('kitDetail',$kitDetail);
			$this->set('id',$id);
			//pr($kitDetail);die;
			if(!empty($this->data))
			{

				$data = $this->data;
				//pr($data);die;
				if($data['Kitchen']['old'] == $data['kitpass'])
				{	
					$kit['Kitchen']['password'] =$data['Kitchen']['new'];
					$kit['Kitchen']['id'] =$data['id'];
					$this->Kitchen->save($kit);
					$this->Session->setFlash('Password has been changed successfully.','success');
					$this->redirect(array('controller'=>'Homes','action'=>'kitchen_dashboard'));
				}
				else
				{
				 
					$this->Session->setFlash('Please enter the correct password.','error');
					$this->redirect($this->referer());
				}
			}	
		}

	/*CHANGE PASSWORD END*/

	/*POLICY,TERMS PAGE START*/
	public function terms()
	{
		$this->layout = "public";
		$this->loadModel('Term');
		$term = $this->Term->find('all');
		$this->set(compact('term'));
	}

	public function privacy_policy()
	{
		$this->layout = "public";
		$this->loadModel('Privacy_policy');
		$data = $this->Privacy_policy->find('all');
		// pr($data);die;
		$this->set(compact('data'));
	}
	/*POLICY,TERMS PAGE END*/

	/*CHECKOUT, MENU and CART Page START*/
	public function menu($id = null)
	{
		
		$this->layout = "public";
		$this->loadModel("Food");
		$this->loadModel("Review");
		$this->loadModel("Location");
		$this->loadModel("Kitlocation");
		$this->loadModel("Kitchen");
		$id=(base64_decode($id));
		$loc = $this->Kitlocation->find('list', array('conditions'=>array('location_id'=>$id),'fields'=>'kitchen_id'));
		// pr($id);die;
		$food=$this->Food->find('all',array('conditions'=>array('kitchen_id'=>$loc)));
		// pr($loc);die;
		$uid = $this->Session->read('User.id');
		$uinfo = $this->User->findById($uid);
		if(!empty($this->request->is('post')))
		{	
			// pr($uinfo); die;
			$data = $this->data;
			$data['Review']['location_id'] = $id;
			$data['Review']['user_id'] = $uid;
			// pr($data); die;
			$this->Review->save($data);
			// $this->Session->write('show_msg','Message sent successfull.');
			// $this->redirect(array('action'=>'index'));
		}
		//pr($this->Review);die;
		$this->Review->bindModel(array('belongsTo'=> array('User'=> array('className' => 'User', 'foreignKey' => 'user_id'))));
		$rvw = $this->Review->find('all',array('recursive' => 2, 'order'=> 'rating Desc','limit'=>6));
		// pr($rvw);die;
		$this->set(compact('food','uid','uinfo','rvw'));
	}


	public function getcartitem($id = null)
	{
		//$this->Session->delete('cart');
		//pr($this->Session->read('cart'));die;
		$this->layout = "public";
		$this->loadModel("Food");
		//pr($_POST);
		//$id = base64_decode($id);
		//echo $id;die;
		
		$this->Session->write('cart.'.$id,$_POST['quantity']);
		//pr($this->Session->read('cart'));
		//$count = count);
		$valus = array_values($this->Session->read('cart'));
		$sum = array_sum($valus);
		echo $sum;
		die;
		// pr($count);die;
		/*if (!empty($count)) 
		{
			$count = $this->cart->findById($id);

		}*/

	}

	public function checkout2($id = null)
	{
		$this->layout = "public";
		$this->loadModel("Food");
		$this->loadModel("User");
		$this->loadModel("Address");
		$this->loadModel("Order");
		$this->loadModel("Orderitem");
		$id=convert_uudecode(base64_decode($id));
		$this->User->bindModel(array('hasMany'=> array('Address'=> array('className' => 'Address', 'foreignKey' => 'user_id'))));
		$this->Address->bindModel(array('belongsTo'=> array(
															'City'=> array('className' => 'City', 'foreignKey' => 'city'),
															'Location'=>array('className' => 'Location', 'foreignKey' => 'location')
																)));
		$this->Orderitem->bindModel(array('belongsTo'=>array('Order' => array('className' => 'Order','foreignKey' => 'order_id'))));
		$this->Orderitem->bindModel(array('hasMany' => array('food'=> array('className' => 'Food', 'foreignKey' => 'food_id')
			)));

		$uid = $this->Session->read('User.id');
		$uinfo = $this->User->find('first',array('recursive'=>2, 'conditions' =>array('User.id'=> $uid)));
		
		$pr = $this->Session->read('cart');				
		$products=[];
		$grandTotal = 0;
		$i=0;
		foreach($pr as $key => $value){
			$products[$i] = $this->Food->findById($key);
			$products[$i]['Food']['quantity'] = $value;
			$products[$i]['Food']['total_price'] = $products[$i]['Food']['price'] * $value;
			$grandTotal += $products[$i]['Food']['total_price'];
			$total = $grandTotal;
			$i++;
		}
		// pr($uemail); die;

		// pr($uinfo);die;
		// echo $products; die;
		// Merchant key here as provided by Payu
		

		// echo $total;
		$this->Session->read('User');
		$order['Order']['user_id'] = $this->Session->read('User.id');
		$order['Order']['date'] = date('y-m-d');
		$order['Order']['grandtotal'] =$total;
		$this->Order->save($order);
	   // pr($products);die;
		/* Order Item Start */
		foreach($products as $prod)
		{
			//pr($prod);die;
			$orderitem['Orderitem']['order_id'] = $this->Order->getLastInsertId();
			$orderitem['Orderitem']['user_id'] = $this->Session->read('User.id');
			$orderitem['Orderitem']['food_id'] = $prod['Food']['id'];
			$orderitem['Orderitem']['quantity'] = $prod['Food']['quantity'];
			$orderitem['Orderitem']['price'] = $prod['Food']['price'];
			$orderitem['Orderitem']['total'] = $prod['Food']['total_price'];
			// pr($orderitem);
			$this->Orderitem->create();
			$this->Orderitem->save($orderitem);
		}

		/* Order Item Ends */
		// if($this->request->is('post'))
		// {
			foreach ($products as $pr_list) 
			{
				$productinfo  = $pr_list['Food']['title'];
			}

			$orderid = $orderitem['Orderitem']['order_id'];
			// pr($orderid);die;

			$usrnme = $uinfo["User"]["name"];
			$usrphone = $uinfo["User"]["contact_no"];
			$usremail = $uinfo["User"]["email"];
		// 	$this->redirect(array('action' => 'payment',$total,$productinfo,$usrnme,$usrphone,'usremail'));
		// }
			// pr($uname);die;
		$this->set(compact('total','products','uid','uinfo','usrnme','usrphone','usremail','productinfo','orderid'));
	}

	public function payment($total = null,$productinfo = null,$uname = null,$uphone = null)
	{
		$MERCHANT_KEY = "JBZaLc";

		// Merchant Salt as provided by Payu
		$SALT = "GQs7yium";

		// End point - change to https://secure.payu.in for LIVE mode
		$PAYU_BASE_URL = "https://test.payu.in";

		$action = '';

		$posted = array();

		$formError = 0;
		
		// Generate random transaction id
		$txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
		 
		$surl = "http://52.25.144.123/GaramHaandi/";
		
		$hash = '';
		// Hash Sequence
		$hashSequence = "key|txnid|".$total."|".$productinfo."|".$uname."|".$uphone."||||||||||";
		if(empty($posted['hash']) && sizeof($posted) > 0) 
		{
		  if(
		          empty($posted['key'])
		          || empty($posted['txnid'])
		          || empty($posted['total'])
		          || empty($posted['firstname'])
		          || empty($posted['email'])
		          || empty($posted['phone'])
		          || empty($posted['productinfo'])
		          || empty($posted['surl'])
		          || empty($posted['furl'])
				  || empty($posted['service_provider'])
		  ) {
		    $formError = 1;
		  } 
		  else {
		    //$posted['productinfo'] = json_encode(json_decode('[{"name":"tutionfee","description":"","value":"500","isRequired":"false"},{"name":"developmentfee","description":"monthly tution fee","value":"1500","isRequired":"false"}]'));
			$hashVarsSeq = explode('|', $hashSequence);
		    $hash_string = '';	
			foreach($hashVarsSeq as $hash_var) {
		      $hash_string .= isset($posted[$hash_var]) ? $posted[$hash_var] : '';
		      $hash_string .= '|';
		    }


		    $hash_string .= $SALT;


		    $hash = strtolower(hash('sha512', $hash_string));
		    $action = $PAYU_BASE_URL . '/_payment';
		  }
		} 
		elseif(!empty($posted['hash'])) 
		{
		  $hash = $posted['hash'];
		  $action = $PAYU_BASE_URL . '/_payment';
		}
		// $this->redirect($action);
		// die;
	}
	/*CHECKOUT, MENU and CART Page ENDS*/

	/*ORDER DETAILS START*/

	public function orders()
	{
		$this->layout = "public";
		$this->loadModel("Order");
		$pr = $this->Session->read('cart');
	}

	/*ORDER DETAILS END*/
	/*Delete Cart Item START*/
	public function dltCartItem($id=null)
	{
		$cart = $this->Session->read('cart');
		//pr($cart);die;
		unset($cart[$id]);
		//pr($cart);die;
		//$this->Session->delete('cart'.$id);
		$this->Session->write('cart', $cart);
		//pr($this->Session->read('cart'));die;
		$this->redirect($this->referer());
	}
	/*Delete Cart Item END*/

	/*Subscription START*/
	public function subscription()
	{
		$this->layout = "public";
	}
	/*Subscription End*/

	/*Subscribe START*/
	public function subscribe()
	{
		$this->layout = "public";
		$this->loadModel('User');
		$uid = $this->Session->read('User.id');
		$uinfo = $this->User->findById($uid);
		//pr($uid);die;
		// pr($uinfo);die;
		$this->set(compact('uid','uinfo'));
	}
	/*Subscribe End*/
	public function subscribe1()
	{
		$this->layout = "public";
	}

	public function subscribe2()
	{
		$this->layout = "public";
	}

	public function kitchenforgotpwd($id = null)
	{
		$this->layout = "public";
		$this->loadModel('Kitchen');
		$id=(base64_decode($id));
		$kitDetail = $this->Kitchen->find('first',array('conditions'=>array('Kitchen.id'=>$id),'fields'=>array('id')));
		// pr($kitDetail); die;
		if(!empty($this->data))
		{
			$data = $this->data;
			// pr($data);die;
			$kit['Kitchen']['password'] =$data['Kitchen']['new'];
			$kit['Kitchen']['id'] =$id;
			$this->Kitchen->save($kit);
			$this->Session->setFlash('Password has been changed successfully.','success');
			$this->redirect(array('controller'=>'Homes','action'=>'index'));
		}
	}

	public function userforgotpwd($id = null)
	{
		$this->layout = "public";
		$this->loadModel('User');
		$id=(base64_decode($id));
		$userDetail = $this->User->find('first',array('conditions'=>array('User.id'=>$id),'fields'=>array('id')));
		// pr($userDetail); die;
		if(!empty($this->data))
		{
			$data = $this->data;
			// pr($data);die;
			$user['User']['password'] =$data['User']['new'];
			$user['User']['id'] =$id;
			$this->User->save($user);
			$this->Session->setFlash('Password has been changed successfully.','success');
			$this->redirect(array('controller'=>'Homes','action'=>'index'));
		}
	}

	public function select_time()
	{
		$this->layout = "public";
	}

	public function modal1()
	{
		$this->layout = "public";
	}

	public function modal2()
	{
		$this->layout = "public";
	}

	/* Reffer a friend Start*/
	public function reffer_friend()
	{
		$this->layout = "public";
	}
	/*End*/

	/* Offer modal Start*/
	public function offer_modal()
	{
		$this->layout = "public";
	}
	/*End*/

	public function checkout($id = null)
	{
		$this->layout = "public";
		$this->loadModel("Food");
		$this->loadModel("User");
		$this->loadModel("Address");
		$this->loadModel("Order");
		$this->loadModel("Orderitem");
		$id=convert_uudecode(base64_decode($id));
		$this->User->bindModel(array('hasMany'=> array('Address'=> array('className' => 'Address', 'foreignKey' => 'user_id'))));
		$this->Address->bindModel(array('belongsTo'=> array(
															'City'=> array('className' => 'City', 'foreignKey' => 'city'),
															'Location'=>array('className' => 'Location', 'foreignKey' => 'location')
																)));
		$this->Orderitem->bindModel(array('belongsTo'=>array('Order' => array('className' => 'Order','foreignKey' => 'order_id'))));
		$this->Orderitem->bindModel(array('hasMany' => array('food'=> array('className' => 'Food', 'foreignKey' => 'food_id')
			)));

		$uid = $this->Session->read('User.id');
		$uinfo = $this->User->find('first',array('recursive'=>2, 'conditions' =>array('User.id'=> $uid)));
		// pr($uinfo);die;

		$pr = $this->Session->read('cart');				
		$products=[];
		$grandTotal = 0;
		$i=0;
		foreach($pr as $key => $value){
			$products[$i] = $this->Food->findById($key);
			$products[$i]['Food']['quantity'] = $value;
			$products[$i]['Food']['total_price'] = $products[$i]['Food']['price'] * $value;
			$grandTotal += $products[$i]['Food']['total_price'];
			$total = $grandTotal;
			$i++;
		}
		// echo $total;
	// 	$this->Session->read('User');
	// 	$order['Order']['user_id'] = $this->Session->read('User.id');
	// 	$order['Order']['date'] = date('y-m-d');
	// 	$order['Order']['grandtotal'] =$total;
	// 	$this->Order->save($order);
	// pr($products);die;
	// 	/* Order Item Start */
	// 	foreach($products as $prod){
	// 		//pr($prod);die;
	// 	$orderitem['Orderitem']['order_id'] = $this->Order->getLastInsertId();
	// 	$orderitem['Orderitem']['user_id'] = $this->Session->read('User.id');
	// 	$orderitem['Orderitem']['food_id'] = $prod['Food']['id'];
	// 	$orderitem['Orderitem']['quantity'] = $prod['Food']['quantity'];
	// 	$orderitem['Orderitem']['price'] = $prod['Food']['price'];
	// 	$orderitem['Orderitem']['total'] = $prod['Food']['total_price'];
	// 	//pr($orderitem);
	// 	$this->Orderitem->create();
	// 	$this->Orderitem->save($orderitem);
	// }

		/* Order Item Ends */

		//die;
		$this->set(compact('total','products','uid','uinfo'));
	}
	/*End*/

}