<?php
	
	App::uses('CakeEmail', 'Network/Email');
	ob_start();
	class UsersController extends AppController{
	var $helpers = array('Session','Html','Js','Form','Paginator','Text');
	public $components = array('Session','Email','RequestHandler','Cookie','Resize','Upload','Paginator');
	
	function admin_address_edit($id = null)
	{

		$this->layout="admin";
		$this->loadModel('Address');
		$this->loadModel('Country');
		$this->loadModel('State');
		$this->loadModel('City');
		$id=base64_decode($id);
		$details=$this->Address->findById($id);
		$count = $this->Country->find('all', array('fields'=>array('Country.country_name','Country.id')));
		$state_list = $this->State->find('all', array('conditions'=>array('country_id'=>$details['Address']['country']),'fields'=>array('State.id','State.statename')));
		$city_list = $this->City->find('all', array('conditions'=>array('state_id'=>$details['Address']['state']),'fields'=>array('City.id','City.city_name')));
		//pr($city_list);die;
		//$stt = $this->State->find('all', array('fields'=>array('State.id','State.statename')));
		//$ct = $this->City->find('all', array('fields'=>array('City.id','City.city_name')));
		// pr($details);die;
		$this->set(compact('details','count','state_list','city_list'));
		$this->set('id',$id);
		if($this->request->is('post'))
		{
			$data=$this->data;
			// pr($data);die;
			if(!empty($data))
			{
				
				if($this->Address->save($data))
				{
					//pr($data1);die;
					$kid = base64_encode($details['Address']['user_id']);
					$this->Session->setFlash('Address Details has been updated successfully.','success');
					$this->redirect(array('action'=>'admin_address',$kid));
				}
				else
				{
					$this->Session->setFlash('failed in updating.','error');
					$this->redirect($this->referer());
				}
			}
	  	}
	}
	
	function admin_delete_address($id=null)
	{
		$this->layout="admin";
		$this->loadModel("Address");
		$id=convert_uudecode(base64_decode($id));
		//echo '<pre>';print_r($id);die;
		if($this->Address->delete($id))
		{
		   $this->Session->setFlash('Address has been deleted successfully','success');
		   $this->redirect($this->referer());
		}
		$this->Session->setFlash('Error in deleting Address','error');
		$this->redirect($this->referer());
	}

	function admin_delete_location($id = null)
	{
		$this->layout="admin";
		$this->loadModel("Location");
		$id=convert_uudecode(base64_decode($id));
		//echo '<pre>';print_r($id);die;
		if($this->Location->delete($id))
		{
		   $this->Session->setFlash('Location has been deleted successfully','success');
		   $this->redirect($this->referer());
		}
		$this->Session->setFlash('Error in deleting Location','error');
		$this->redirect($this->referer());
	}
	
	function admin_add_address($id = null)
	{
		$this->layout="admin";
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
		//pr($stt);die;
		//pr($ct);die;
		$this->set(compact('rst', 'count', 'ct','stt'));
		if ($this->request->is('post')) {
			$data = $this->data;
			$data['Address']['user_id'] = $id;
			//pr($data);die;
			if($this->Address->save($data)){
				$id = base64_encode($id);
				return $this->redirect(array('action' => 'admin_address',$id));
			}
		}
	}

	function admin_add_location($id = null)
	{
		$this->layout="admin";
		$this->loadModel("Country");
		$this->loadModel("State");
		$this->loadModel("City");
		$this->loadModel("Location");
		$count = $this->Country->find('all', array('fields'=>array('Country.country_name','Country.id')));
		$stt = $this->State->find('all', array('fields'=>array('State.id','State.statename')));
		$ct = $this->City->find('all', array('fields'=>array('City.id','City.city_name')));
		//pr($stt);die;
		//pr($ct);die;
		$this->set(compact('rst', 'count', 'ct','stt'));
		if ($this->request->is('post')) 
		{
			$data = $this->data;
			//pr($data);die;
			if($this->Location->save($data)){
				$id = base64_encode($id);
				return $this->redirect(array('action' => 'admin_location',$id));
			}
		}
	}

	function admin_location_edit()
	{

	}

	public function admin_coupons($couponId = null)
    {
    	$this->layout="admin";
        $this->loadModel('Coupon');

        $coupon = $this->Coupon->find('all');

        $this->set(compact('coupon'));
    }

    public function admin_add_coupons($couponId = null)
    {
        $this->layout="admin";
        $this->loadModel('Coupon');

        if ($this->request->is('post')) 
        {
        	$data = $this->data;
        	$data['Coupon']['valid_from'] = date("Y-m-d", strtotime($data['Coupon']['valid_from']));
        	$data['Coupon']['valid_to'] = date("Y-m-d", strtotime($data['Coupon']['valid_to']));
        	// pr($data);die;
        	$this->Coupon->save($data);
        	return $this->redirect(array('action' => 'admin_coupons'));
        }
    }

    public function  admin_Coupons_edit($id = null)
    {
    	$this->layout="admin";
    	$this->loadModel('Coupon');

    	$coupon = $this->Coupon->findById($id);
    	// pr($coupon);die;
    	$this->set(compact('coupon'));
    }

    public function getCode()
    {
        $code = $this->CapitalRandomStringGenerator(8);
        echo $code;die;
    }


	public function getstates($id=null)
	{
		//pr($id);die;
	  $this->loadModel('State');
	  $state_list = $this->State->find('all', array('conditions' => array('country_id' => $id)));
	 // pr($state_list);
	  $state = '<option value="">Select</option>';
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
	  $city = '<option value="">Select</option>';
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

	  $location = '<select class="form-control required location_change" multiple id="location" name="data[Kitlocation][location_id][]">';
	  $location .='<option disabled value="">Select</option>';
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

	function admin_add_food($id = null)
	{
		$this->layout="admin";
		$id=(base64_decode($id));
		$this->loadModel("Food");
		$this->loadModel("Kitchen");

		if ($this->request->is('post')) {
			$data = $this->data;
			//pr($data);die;
			//pr($data);die;
			$data['Food']['kitchen_id'] = $id;
			if ($this->Food->save($data)) {
				//$this->Flash->success(__('The user has been saved'));
				$id = base64_encode($id);
				return $this->redirect(array('action' => 'admin_food',$id));
			}
			// $this->session->setflash(
			//     __('The user could not be saved. Please, try again.')
			// );
		}
	}
	
	function admin_category($id = null)
	{
		$this->layout="admin";
		$this->loadModel("Category");
		$id=(base64_decode($id));
		$this->Paginator->settings = array('limit' => '50','conditions'=>array());

		$uid=$this->paginate('Category');
		$this->set(compact('id','uid'));

	}

	function admin_add_category()
	{
		$this->layout="admin";
		$this->loadModel("Category");
	}

	function admin_location($id = null) 
	{
		$this->layout="admin";
		$id=(base64_decode($id));
		$this->loadModel("Location");
		$this->Location->bindModel(array(
										'belongsTo' => array(
																'Country' => array(
																					'className' => 'Country',
																					'foreignKey' => 'country'	
																					)
															)
									)
								);
		$this->Location->bindModel(array(
										'belongsTo' => array(
																'State' => array(
																					'className' => 'State',
																					'foreignKey' => 'state'	
																					)
															)
									)
								);
		$this->Location->bindModel(array(
										'belongsTo' => array(
																'City' => array(
																					'className' => 'City',
																					'foreignKey' => 'city_id'	
																					)
															)
									)
								);
		$this->Paginator->settings = array('limit' => '50','conditions'=>array());

		$uid=$this->paginate('Location');
		//pr($uid);die;
		$this->set(compact('uid', 'id'));
	}

	function admin_address($id = null)
	{
		$this->layout="admin";
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
																					)
															)
									)
								);
		// $this->User->bindModel(
		// 		array('className'=>'Country','foreignKey'=>'country_name','className'=>'State', 'foreignKey'=>'statename')
		// 	);
		$this->Paginator->settings = array('limit' => '50','conditions'=>array('user_id'=>$id));

		$uid=$this->paginate('Address');
		//pr($uid);die;
		$this->set(compact('uid', 'id'));
	}
	
	function admin_food($id = null)
	{
		$this->layout="admin";
		$id=(base64_decode($id));
		$this->loadModel("Food");
		$this->loadModel("Kitchen");
		$this->Paginator->settings = array('limit' => '50','conditions'=>array('kitchen_id'=>$id));
		$pr=$this->paginate('Food');
		//par($pr);die;
		$this->set(compact('pr', 'id'));
	}

	function admin_food_edit($id = null)
	{

		$this->layout="admin";
		$this->loadModel('Food');
		$id=base64_decode($id);
		$details=$this->Food->findById($id);
		// pr($details);die;
		$this->set(compact('details'));
		$this->set('id',$id);
		if($this->request->is('post'))
		{
			$data=$this->data;
			// pr($data);die;
			if(!empty($data))
			{
				
				if($this->Food->save($data))
				{
					//pr($data1);die;
					$kid = base64_encode($details['Food']['kitchen_id']);
					$this->Session->setFlash('Dish Details has been updated successfully.','success');
					$this->redirect(array('action'=>'admin_food',$kid));
				}
				else
				{
					$this->Session->setFlash('failed in updating.','error');
					$this->redirect($this->referer());
				}
			}
	  }
	}

	function admin_delete_food($id=null)
	{
		$this->layout="admin";
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

	function admin_kitchen_edit($id = null)
	{

		$this->layout="admin";
		$this->loadModel('Kitchen');
		$this->loadModel('Kitlocation');
		$this->loadModel('Country');
		$this->loadModel('State');
		$this->loadModel('City');
		$this->loadModel('Location');
		$id=(base64_decode($id));
		$details=$this->Kitchen->findById($id);
		// pr($details);die;
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
		$locate = $this->Kitchen->find('list');
		// pr($location_list);die;
		// pr($locate);die;
		$this->set(compact('details','kitlocate','count','state_list','city_list','location_list'));
		$this->set('id',$id);
		if($this->request->is('post'))
		{
			$data=$this->data;

			// $kitchen = $data['Kitchen'];
			$kitlocation = $data['Kitlocation'];
			// pr($data);die;
			if(!empty($data))
			{
				$this->Kitlocation->deleteAll(array('kitchen_id' =>$id));
				if($this->Kitchen->save($data))
				{
					
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
					$this->redirect(array('action'=>'admin_kitchens'));
				}
				else
				{
					$this->Session->setFlash('failed in updating.','error');
					$this->redirect($this->referer());
				}
			}
	  }
	}

	function admin_kitchen_add()
	{
		$this->layout="admin";
		$this->loadModel('Kitchen');
		$this->loadModel('Address');
		$this->loadModel('Country');
		$this->loadModel('State');
		$this->loadModel('City');
		$this->loadModel('Kitlocation');
		$this->loadModel('Location');
		$count = $this->Country->find('all', array('fields'=>array('Country.country_name','Country.id')));
		$stt = $this->State->find('all', array('fields'=>array('State.id','State.statename')));
		$ct = $this->City->find('all', array('fields'=>array('City.id','City.city_name')));
		$lctn = $this->Location->find('all', array('fields'=>array('Location.id','Location.location')));
		 //pr($stt);
		 //pr($lctn);
		 //die;
		$this->set(compact('count', 'ct','stt','lctn'));
		if ($this->request->is('post')) 
		{
			$data = $this->data;
			$kitchen = $data['Kitchen'];
			$kitlocation = $data['Kitlocation'];
			//pr($data);die;
			if ($this->Kitchen->save($data)) 
			{	
				$kit_id = $this->Kitchen->getLastInsertId();
				//pr($kit_id);die;
				foreach ($data['Kitlocation']['location_id'] as $l_id ) 
				{
					$location_id['Kitlocation']['location_id'] = $l_id;
					$location_id['Kitlocation']['kitchen_id'] = $kit_id;
					//pr($l_id); die;
					$this->Kitlocation->create();
                    $this->Kitlocation->save($location_id);
				}
				$this->Session->setFlash('The Kitchen has been saved','success');
				return $this->redirect(array('action' => 'admin_kitchens'));
			}
			else
			{
				$this->Session->setFlash('failed in updating.','error');
				$this->redirect($this->referer());
			}	
		}
	}

	function admin_customers_edit($id = null)
	{
		$this->layout="admin";
		$this->loadModel('User');
		$id=(base64_decode($id));
		$details=$this->User->findById($id);
		//pr($details);die;
		$this->set(compact('details'));
		$this->set('id',$id);
		if($this->request->is('post'))
		{
			$data=$this->data;
			//pr($data);die;
			if(!empty($data))
			{
				$data1 = $data;
				//$data1['User']['id'] = $data['id'];
				if($this->User->save($data1))
				{
					//pr($data1);die;
					$this->Session->setFlash('User Details has been updated successfully.','success');
					$this->redirect(array('action'=>'admin_customers'));
				}
				else
				{
					$this->Session->setFlash('Failed in updating.','error');
					$this->redirect($this->referer());
				}
			}
	  }
	}

	function admin_add()
	{
		$this->layout="admin";
		$this->loadModel('User');
		if ($this->request->is('post')) 
		{

			$data = $this->data;
			//pr($data);die;
			if ($this->User->save($data)) 
			{
				$this->Session->setFlash('The user has been saved.','success');
				return $this->redirect(array('action' => 'admin_customers'));
			}
			else
			{
				$this->Session->setFlash('Failed in adding.','error');
				$this->redirect($this->referer());
			}
		}
	}

	public function userchcknmbr($id = null)
	{
		// echo $id;die;
		$this->loadModel('User');
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

	public function kitchcknmbr($id = null)
		{
			// echo $id;die;
			$this->loadModel('Kitchen');
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

	function admin_delete_kitchen($id=null)
	{
		$this->layout="admin";
		$this->loadModel("Kitchen");
		$id=convert_uudecode(base64_decode($id));
		//echo '<pre>';print_r($id);die;
		if($this->Kitchen->delete($id))
		{
		   $this->Session->setFlash('Kitchen has been deleted successfully','success');
		   $this->redirect($this->referer());
		}
		$this->Session->setFlash('Error in deleting Kitchen');
		$this->redirect($this->referer());
	}

	function admin_login()
	{
		$this->layout="admin";
		$this->loadModel('Admin');
		if($this->request->is('post')) 
		{
			$data = $this->data;
			$result = $this->Admin->find('first',array('conditions'=>array('Admin.username'=>$data['Admin']['username'],'Admin.password'=>$data['Admin']['password'])));			
  
			if(!empty($result))
			{				
				$this->Admin->updateAll(array('Admin.last_login'=>'now()'),array('Admin.id'=>$result['Admin']['id']));
				$this->Session->write('Admin',$result['Admin']);
				$this->redirect(array('controller'=>'Users','action'=>'dashboard','admin' => true));
			}			
			else
			{
				$this->Session->write('error','Authentication failed. Please enter correct username and password.');
				$this->redirect(array('controller'=>'Users','action'=>'login','admin' => true));
			}
		}
	}

	function admin_kitchens()
	{
		//echo "hii";die;
		$this->layout="admin";
		$this->loadModel('Kitchen');
		$this->loadModel('Location');
		$this->loadModel('Kitlocation');
		$this->Kitchen->bindModel(array(
										'belongsTo' => array(
																
																'City' => array(
																					'className' => 'City',
																					'foreignKey' => 'city'	
																					),
																'Country' => array(
																					'className' => 'Country',
																					'foreignKey' => 'country'	
																					),
																'State' => array(
																					'className' => 'State',
																					'foreignKey' => 'state'	
																					),
															),
										'hasMany' => array(
																'Kitlocation' => array(
																					'className' => 'Kitlocation',
																					'foreignKey' => 'kitchen_id'
																					   )
														   )
									)
		);
		$this->Kitlocation->bindModel(array('belongsTo' => array(
																 'Location' => array(
																 					'className' => 'Location',
																 					'foreignKey' => 'location_id'
																 					)
																)));
		$details = $this->Kitchen->find('all', array('recursive' => 3));
		// $locatename = $this->Kitlocation->find('all');
		//pr($details);
		//pr($details);die;
		//  foreach ($locatename as $kitlocate) 
		//  {
		//  	$kitlocate['Location']['location'] = $locate;
		//  }
		
		$this->set(compact('details','locatename'));
	}

	function admin_customers()
	{
		$this->layout="admin";
		$this->loadModel('User');
		$details = $this->User->find('all');
		//pr($details);die;
		$this->set(compact('details'));
	}

	function admin_dashboard() 
	{   
		$this->layout="admin";
		$this->loadModel('Admin');
		$admin_details = $this->Admin->find('first');
		//pr($admin_details);die;	
		$this->set(compact('admin_details'));
	}

	function admin_logout()
	{
	
		$this->Session->delete('Admin');
		$this->Session->delete('error');
		$this->redirect(array('action' => 'login','admin' => true));
	}
		
	function admin_change_password($id=null) 
	{
		$this->layout="admin";
		$this->loadModel('Admin');
		$id=convert_uudecode(base64_decode($id));
		$adminDetail = $this->Admin->find('first',array('conditions'=>array('Admin.id'=>$id),'fields'=>array('id','password')));
		$this->set('adminDetail',$adminDetail);
		$this->set('id',$id);
		if(!empty($this->data))
		{
			$data = $this->data;
			if($data['Admin']['old'] == $data['adminpass'])
			{	
				$admin['Admin']['password'] =$data['Admin']['new'];
				$admin['Admin']['id'] =$data['id'];
				$this->Admin->save($admin);
				$this->Session->setFlash('Password has been changed successfully.','success');
				$this->redirect(array('controller'=>'users','action'=>'admin_dashboard'));
			}else
			{
			 
				$this->Session->setFlash('Please enter the correct password.','error');
				$this->redirect($this->referer());
			}
		}		
	}

	function admin_edit($id=null)
	{
		$this->layout="admin";
		$this->loadModel('Admin');
		$id=convert_uudecode(base64_decode($id));
		$adminDetail=$this->Admin->find('first', array('conditions'=>array('Admin.id'=>$id),'fields'=>array('id','username','email')));
		$this->set('adminDetail',$adminDetail);
		$this->set('id',$id);
		$data=$this->data;
	  
		if(!empty($data))
		{
			$data['Admin']['id'] = $data['id'];
			if($this->Admin->save($data))
			{
				$this->Session->setFlash('Admin Details has been updated successfully.','success');
				$this->redirect(array('action'=>'admin_dashboard'));
			}
			else
			{
				$this->Session->setFlash('failed in updating.','error');
				$this->redirect($this->referer());
			}
		}
	}
	
	function admin_delete_user($id=null)
	{
		$this->layout="admin";
		$this->loadModel("User");
		$id=convert_uudecode(base64_decode($id));
		//echo '<pre>';print_r($id);die;
		if($this->User->delete($id))
		{
		   $this->Session->setFlash('User has been deleted successfully','success');
		   $this->redirect($this->referer());
		}
		$this->Session->setFlash('Error in deleting user');
		$this->redirect($this->referer());
	}
	
	function admin_deleteAll($id=null,$modal=null)
	{
		$this->loadModel($modal);
		$ids=explode("," ,$id);
		//echo '<pre>';print_r($ids);die;
		foreach ($ids as $id) {
			$this->$modal->delete($id);
		}
		$this->Session->setFlash('Records has been Deleted successfully');
		$this->redirect($this->referer());
	}
	
	function  admin_email_template()
	{
		$this->layout="admin";
		$this->loadModel("EmailTemplate");
		$this->Paginator->settings = array('EmailTemplate' => array('limit' => 10,'order'=>array('EmailTemplate.id'=>'desc')));
		//$this->paginator['page']= 2;
		$email_template=$this->paginate('EmailTemplate');

		//$email_template=$this->EmailTemplate->find('all');
		//echo '<pre>';print_r($email_template);die;		
		$this->set(compact('email_template'));	 		
	}

	function admin_edit_email_template($id=null)
	{
		$this->layout="admin";
		$this->loadModel("EmailTemplate");
		$id=convert_uudecode(base64_decode($id));
		//echo '<pre>';print_r($id);die;		
		$email=$this->EmailTemplate->find('first',array('conditions'=>array('EmailTemplate.id'=>$id)));
		//echo '<pre>';print_r($email);die;
		$this->set(compact('email'));
		if(!empty($this->data))
		{
			$data=$this->data;
			//echo '<pre>';print_r($data);die;	 		  	
			if($this->EmailTemplate->save($data))
			{
		  		$this->Session->setFlash('Information has been updated');
		  		$this->redirect(array('action'=>'email_template'));
			}
			else 
			{
				$this->Session->setFlash('Error in updating');
				$this->redirect($this->referer()); 
			}
		}
	}
				
	function admin_search_email($id=null)
	{
		//echo $id;die;
		
		//echo "<pre>";print_r($search);die;
		//$column=$search[0];
		//$ser=$search[1];
		Configure::write('debug',0);
		if($this->RequestHandler->isAjax())
		{
			$emails=$this->User->find('all',array('conditions'=>array('AND'=>array('OR'=>array(array('User.firstname LIKE'=>'%'.$id.'%'),array('User.lastname LIKE'=>'%'.$id.'%')),array('User.user_type'=>1))),'fields'=>array('User.email','User.firstname','User.lastname','User.id')));   
			//$business_user=$this->User->find('all',array('conditions'=>array('User.firstname'=>$id)));
			//echo "<pre>";print_r($emails);die;
			$list='';
			foreach($emails as $email )
			{
				$list .='<a href="javascript:void(0)"><div class="display_box" align="left" style="position:relative">
							  <span class="friend_auto_id" style="display:none">'.$email['User']['id'].'</span>
							  <p class="friendAuto">'.$email['User']['firstname'].' '.$email['User']['lastname'].'</p><br/>
							</div></a>';
			}
			if(!empty($list))
			{
				$this->set(compact('list'));
				//echo "<pre>";print_r($list);die;
				$this->layout='';
				$this->autoRender=false;
				print_r($list);die;
				//$this->redirect($this->referer());
				//$this->viewPath='Users';
				//$this->render('admin_add_banner');
			}
			else
			{
				$this->layout='';
				$list='no result found';
				$this->set(compact('list'));
				//echo "<pre>";print_r($list);die;
				$this->autoRender=false;
				print_r($list);die;
				//$this->viewPath='Users';
				//$this->render('admin_add_banner');
			}
		}
	}

	function admin_manage_category()
	{
		$this->layout="admin";
		$this->loadModel("Category");
		$this->Paginator->settings = array('limit' => 10,'order'=>array('Category.id'=>'desc'),'conditions'=>array('Category.parent_id' => 0));
		$Category = $this->paginate('Category');
		$this->set(compact('Category')); 			 			
	}
	
	function admin_edit_category($id=null)
	{
		$this->layout="admin";
		$this->loadModel("Category");
		$id=convert_uudecode(base64_decode($id));
		$edit_Category=$this->Category->find('first',array('conditions'=>array('Category.id'=>$id)));	 
		$this->set(compact('edit_Category'));
		if(!empty($this->data))
		{
			$data=$this->data;
			if(!empty($_FILES['photo']['name']))
			{
				App::Import('Component','UploadComponent');
				$upload= new UploadComponent(); 
				$imgName=pathinfo($_FILES['photo']['name']);
				$ext=$imgName['extension'];
				$newImgName = rand(10,100000);
				$tempFile = $_FILES['photo']['tmp_name'];
				$destination = realpath('../webroot/img/category/'). '/';
				//echo '<pre>';print_r($destination);die;
				if(is_uploaded_file($_FILES['photo']['tmp_name']))
				{
					$src = $_FILES['photo']['tmp_name'];
					//echo '<pre>';print_r($src);die;
					list( $width, $height, $source_type ) = getimagesize($src);
					if ($width <= 19 && $height <= 16)
					{
						move_uploaded_file($_FILES['photo']['tmp_name'],$destination.$newImgName.".".$ext);
					}
					else
					{
						$this->Resize->resize($_FILES['photo']['tmp_name'],$destination.$newImgName.".".$ext,'as_define',200,200,0,0,0,0);
					}
				}
				$data['Category']['image']=$newImgName.".".$ext;	  
			}
			if($this->Category->save($data))
			{
				$this->Session->setFlash('Category has been updated');
				$this->redirect(array('action'=>'manage_category'));          	
			}
			else 
			{
				$this->Session->setFlash('Error in updating');
				$this->redirect($this->referer());
			}
		}
	}

	function admin_delete_category($id=null)
	{
		$this->layout="admin";
		$this->loadModel("Category");
		$id=convert_uudecode(base64_decode($id));
		//echo '<pre>';print_r($id);die; 	 	  	
		if($this->Category->delete($id))
		{
			$this->Session->setFlash('Category has been deleted successfully');
			$this->redirect(array('action'=>'manage_category')); 	  	   	
		}
		else
		{
			$this->Session->setFlash('Error in deleting');
			$this->redirect($this->referer());
		} 
	}

	//function admin_add_category()//used
	// {
	// 	$this->layout="admin";	 			
	// 	$this->loadModel("Category");
	// 	if(!empty($this->data))
	// 	{
	// 		$data=$this->data;
	// 		///echo '<pre>';print_r($data);die;
	// 		if(!empty($_FILES['photo']['name']))
	// 		{
	// 			//echo '<pre>';print_r($_FILES);die;
	// 			App::Import('Component','UploadComponent');
	// 			$upload= new UploadComponent(); 
	// 			$imgName=pathinfo($_FILES['photo']['name']);
	// 			$ext=$imgName['extension'];
	// 			$newImgName = rand(10,100000);
	// 			$tempFile = $_FILES['photo']['tmp_name'];
	// 			$destination = realpath('../webroot/img/category'). '/';
	// 			//echo '<pre>';print_r($destination);die;
	// 			if(is_uploaded_file($_FILES['photo']['tmp_name']))
	// 			{
	// 				$src = $_FILES['photo']['tmp_name'];
	// 				//echo '<pre>';print_r($src);die;
	// 				list( $width, $height, $source_type ) = getimagesize($src);
	// 				if ($width <= 19 && $height <= 16)
	// 				{
	// 					move_uploaded_file($_FILES['photo']['tmp_name'],$destination.$newImgName.".".$ext);
	// 				}else
	// 				{
	// 					$this->Resize->resize($_FILES['photo']['tmp_name'],$destination.$newImgName.".".$ext,'as_define',200,200,0,0,0,0);
	// 				}
	// 			}
	// 			$data['Category']['image']=$newImgName.".".$ext;	  
	// 		}     	 			 	
	// 		pr($data);
	// 		if($this->Category->save($data))
	// 		{
	// 			$this->Session->setFlash('Category has been added successfully');
	// 			$this->redirect(array('action'=>'manage_category'));	 			 	 	
	// 		}else 
	// 		{
	// 			$this->Session->setFlash('Error in adding');
	// 			$this->redirect($this->referer());	 			 	 		
	// 		}
	// 	}

	// }

	function admin_add_subcategory($id=null)
	{
		$id=convert_uudecode(base64_decode($id));
		$this->layout="admin";
		$this->loadModel("Category");
		$cat=$this->Category->find('first',array('conditions' => array('Category.id'=>$id)));
		$this->set(compact('id','cat'));
		if(!empty($this->data))
		{
			$data = $this->data;
			$id=base64_encode(convert_uuencode($data['Category']['parent_id']));
			//pr($data);die;
			if($this->Category->save($data))
			{
				$this->Session->setFlash('SubCategory Added successfully');
				$this->redirect(array('action'=>'manage_subcategory/'.$id));		
			}
			$this->Session->setFlash('Error in Adding new SubCategory','error');
			$this->redirect(array('action'=>'manage_subcategory'));
		}
	}
	
	function admin_manage_subcategory($id=null)
	{
		$catId=convert_uudecode(base64_decode($id));
		$this->layout="admin";
		$this->loadModel("Category");
		$this->Paginator->settings = array('limit' => 10,'order'=>array('Category.id'=>'desc'));
		$SubCategory=$this->paginate('Category',array('Category.parent_id'=>$catId));
		$this->set(compact('SubCategory','catId','id')); 			 			
	}
	
	function admin_edit_subcategory($id=null,$cat=null)	
	{
		$this->layout="admin";
		$id=convert_uudecode(base64_decode($id));
		//echo "<pre>";print_r($id);die;
		$catId=convert_uudecode(base64_decode($cat));
		//echo "<pre>";print_r($catids);die;
		$this->loadModel('SubCategory');
		$edit_Subcategory = $this->SubCategory->find('first', array('conditions'=>array('SubCategory.id'=>$id)));
		//echo "<pre>";print_r($edit_Subcategory);die;
		$this->set(compact('edit_Subcategory','catId'));
		if(!empty($this->data))
		{
			$data = $this->data;
			// echo "<pre>";print_r($data);die;
			$id=$data['SubCategory']['category_id'];
			$id=base64_encode(convert_uuencode($id));
	
			if($this->SubCategory->save($data))
			{
				//echo "<pre>";print_r($id);die;
				$this->Session->setFlash('Subcategory information updated successfully');
				$this->redirect(array('action'=>'admin_manage_subcategory/'.$id));
			}
			$this->Session->setFlash('Problem in updating Subcategory information');
			$this->redirect(array('action'=>'admin_manage_subcategory'));
		}
	}
	
	function admin_delete_subcategory($id=null,$catid=null)
	{
		$this->layout="admin";
	  	$this->loadModel("SubCategory");
	  	$id=convert_uudecode(base64_decode($id));
	  	//echo '<pre>';print_r($id);die; 	 	  	
		if($this->SubCategory->delete($id))
		{
			$this->Session->setFlash('SubCategory has been deleted successfully');
		  	$this->redirect(array('action'=>'manage_subcategory/'.$catid)); 	  	   	
		}
		else
		{
			$this->Session->setFlash('Error in deleting');
			$this->redirect($this->referer());
		} 
	}	
		
	function admin_add_childsubcategory($id=null)
	{
		$id=convert_uudecode(base64_decode($id));
		//echo "<pre>";print_r($id);die;
		$this->layout="admin";
		$this->loadModel('Category');
		$subcat=$this->Category->findById($id);
		$this->set(compact('id','subcat'));
		if(!empty($this->data))
		{
			$data = $this->data;
			//echo "<pre>";print_r($data);die;
			//$id=$data['ChildSubcategory']['subcategory_id'];
			$id=base64_encode(convert_uuencode($data['Category']['parent_id']));
		 //echo "<pre>";print_r($id);die;
			if($this->Category->save($data))
			{
			//	echo $id;die;
				$this->Session->setFlash('ChildSubCategory Added successfully');
				$this->redirect(array('action'=>'manage_childsubcategory/'.$id));
		
			}
			$this->Session->setFlash('Error in Adding new ChildSubCategory','error');
			$this->redirect(array('action'=>'manage_childsubcategory'));
		}
	}

	function admin_edit_childsubcategory($id=null,$subid=null)//used
	{
		$this->layout="admin";
		$id=convert_uudecode(base64_decode($id));
		$sbcid=convert_uudecode(base64_decode($subid));
		//echo "<pre>";print_r($sbcid);die;
		$this->loadModel('ChildSubcategory');
		$echild = $this->ChildSubcategory->find('first', array('conditions'=>array('ChildSubcategory.id'=>$id)));
		//echo "<pre>";print_r($echild);die;
		$this->set(compact('echild','sbcid'));
		if(!empty($this->data))
		{
			$data = $this->data;
			//echo '<pre>';print_r($data);die;
			$id=$data['ChildSubcategory']['subcategory_id'];
			$id=base64_encode(convert_uuencode($id));
			//echo "<pre>";print_r($data);die;
		
			if($this->ChildSubcategory->save($data))
			{
				$this->Session->setFlash('Subcategory information updated successfully');
				$this->redirect(array('action'=>'admin_manage_childsubcategory/'.$id));
			}
			$this->Session->setFlash('Problem in updating Subcategory information');
			$this->redirect(array('action'=>'admin_manage_childsubcategory'));
		}
	}
	
	function admin_delete_childsubcategory($id=null,$subid=null)
	{
		$this->layout="admin";
	  	$this->loadModel("ChildSubcategory");
	 	$id=convert_uudecode(base64_decode($id));
	  	//$scid=convert_uudecode(base64_decode($subid));
	  	//echo '<pre>';print_r($id);die; 	 	  	
		if($this->ChildSubcategory->delete($id))
		{
			$this->Session->setFlash('SubCategory has been deleted successfully');
		 	$this->redirect(array('action'=>'manage_childsubcategory/'.$subid)); 	  	   	
		}
		else
		{
			$this->Session->setFlash('Error in deleting');
		  	$this->redirect($this->referer());
		} 
	}

	function admin_manage_products($id=null)
	{
		$this->layout="admin";
		$id=(base64_decode($id));

		$this->loadModel("Menu");
		$this->loadModel("Kitchen");
		$this->Paginator->settings = array('limit' => '50','conditions'=>array('kitchen_id'=>$id));
		$pr=$this->paginate('Menu');
		//pr($pr);die;
		$this->set(compact('pr'));
	}
	
	function admin_add_product($id=null)
    {	
    	//echo $id;die
       $this->layout="admin";
       $this->loadModel("Menu");
       $this->loadModel("Kitchen");
       $this->loadModel("Image");
		$this->loadModel("Categorie");
		$category=$this->Categorie->find('all',array('recursive'=>-1));
		// echo"<pre>";print_r($category);die;
        $user_data=$this->Kitchen->find('first',array('conditions'=>array('Kitchen.id'=>$id)));
        // echo"<pre>";print_r($user_data);die;
        $count_product=$this->Kitchen->find('count',array('conditions'=>array('kitchen.id'=>$id)));
        if($count_product>=10)
        {
        	$this->Session->setFlash('One user Cannot add more than 10 products');
          	$this->redirect($this->referer());
        }    
		$this->set(compact('category','user_data'));
		if(!empty($this->data))
       	{
       		$data=$this->data;
       		// echo"<pre>";print_r($data);die;
       	 	//echo $id;die;
       	 	//$data['Product']['user_id']=$id;
			//echo $this->Product->getLastInsertId();
			$count=$this->Categorie->find('first',array('recursive'=>-1,'conditions'=>array('created'=>date('Y-m-d')),'order'=>array('Categorie.id DESC')));
 
          $y=explode('-',$count['Categorie']['kitchen_id']);
          $count=$y[1];         
          if($count>0)
          {  
	      	$c=++$count;
	      	$data['Product']['ad_id']= date('ymd').'-'.$c;
          }
			//echo '<pre>';print_r($data);die;
       		if($this->Categorie->save($data,array('validate'=>false)))
	       	{
	       		$product_id=$this->Categorie->getLastInsertId();
	       	}
	       	else
	       	{
				$this->Session->setFlash('Product Not Saved successfully');
	        	$this->redirect(array('action'=>'manage_product'));
			}
      		//echo $product_id;die;
	        $id=$data['Product']['user_id'];
	        $id=base64_encode(convert_uuencode($id));
			
	        if(!empty($_FILES['photo']['name']))
	        {
	        	echo '<pre>';print_r($_FILES['photo']['name']);
	         	$count=count($_FILES['photo']['name']);
	         	//echo $count;die;
	         	for($i=0;$i<$count;$i++)
	         	{
					//echo 'hi1';die;
					//echo '<pre>';print_r($_FILES['photo']['name'][$i]);
			       	App::Import('Component','UploadComponent');
			       	$upload= new UploadComponent(); 
			       	$imgName=pathinfo($_FILES['photo']['name'][$i]);
			        echo '<pre>';print_r($imgName);
			       	$ext=$imgName['extension'];
			       	//echo '<pre>';print_r($ext);die;
			       	$newImgName = rand(10,100000);
			       	$tempFile = $_FILES['photo']['tmp_name'][$i];
			      	echo '<pre>';print_r($tempFile);
			       	$destination = realpath('../webroot/img/'). '/';
	           		if(is_uploaded_file($_FILES['photo']['tmp_name'][$i]))
	           		{
	             		$src = $_FILES['photo']['tmp_name'][$i];
			            echo '<pre>';print_r($src);
			            list( $width, $height, $source_type ) = getimagesize($src);
			            if ($width <= 379 && $height <= 321)
			            {
			            	move_uploaded_file($_FILES['photo']['tmp_name'][$i],$destination.$newImgName.".".$ext);
			            }
			            else
						{
							$this->Resize->resize($_FILES['photo']['tmp_name'][$i],$destination.$newImgName.".".$ext,'as_define',379,321,0,0,0,0);
						}
	            	}
	            	$Image['Image']['image']=$newImgName.".".$ext;	  
		            $Image['Image']['product_id']=$product_id;
		            $this->Image->create();
		            $this->Image->save($Image);
				}
				$this->Session->setFlash('Product has been updated successfully');
	        	$this->redirect(array('action'=>'manage_products',$id));
	        	echo 'hi'; die();
         	}
         	//echo 'hi';die;
        }
   	}

   	function admin_edit_product($ids=null)
   	{
   		$this->layout="admin";
		$this->loadModel("Menu");
		$this->loadModel("Category");
		$ids=convert_uudecode(base64_decode($ids));
		$this->Menu->bindModel(array(
										'belongsTo' => array(
																'Category' => array(
																					'className' => 'Category',
																					'foreignKey' => 'category_id'	
																					)
															)
									)
								);
		$this->Menu->bindModel(array(
										'belongsTo' => array(
																'SubCategory' => array(
																					'className' => 'Category',
																					'foreignKey' => 'subcategory_id'	
																					)
															)
									)
								);
		$this->Menu->bindModel(array(
										'belongsTo' => array(
																'ChildSubCategory' => array(
																					'className' => 'Category',
																					'foreignKey' => 'childsubcategory_id'	
																					)
															)
									)
								);
		$edit_product=$this->Menu->findById($ids);
		$category=$this->Category->findAllByParent_id('0');
		$this->set(compact('edit_product','category'));
		if(!empty($this->data))
		{
			$data=$this->data;
			//pr($_FILES);
			//echo "<pre>";print_r($data);die;
			if(!empty($_FILES['image']['name'][0]))
			{
				//App::Import('Component','UploadComponent');
				//$$upload= new UploadComponent();
				$imgName=pathinfo($_FILES['image']['name']);
				//echo '<pre>';print_r($imgName);die;
				$ext=$imgName['extension'];
				$newImgName = rand(10,100000);
				$tempFile = $_FILES['image']['tmp_name'];
				$destination = realpath('../webroot/img/dish'). '/';
				if(is_uploaded_file($_FILES['image']['tmp_name']))
				{
					move_uploaded_file($_FILES['image']['tmp_name'],$destination.$newImgName.".".$ext);
				
				 }
				$data['Menu']['image']=$newImgName.".".$ext;
			}
			//pr($data);die;
			if($this->Menu->save($data))
			{ 
				$this->Session->setFlash('Dish has been updated successfully');
				$this->redirect(array('action'=>'manage_products'));	
			}
		}     
	}

	function admin_delete_product($id=null)
	{
		$this->layout="admin";
		$this->loadModel("Product");
		$id=convert_uudecode(base64_decode($id));
		//echo '<pre>';print_r($id);die;
		if($this->Product->delete($id))
		{
		   $this->Session->setFlash('Information has been deleted');
		   $this->redirect($this->referer());
		   //$this->redirect(array('action'=>'manage_products'));
		}
		else
		{
		   $this->Session->setFlash('Error in deleting');
		   $this->redirect($this->referer());
		}	
	}

	function admin_view_product($id=null)
	{
		$this->layout="admin";
		$this->loadModel("Product");
		$id=convert_uudecode(base64_decode($id));
		//echo '<pre>';print_r($id);die;
		$product=$this->Product->find('first',array('conditions'=>array('Product.id'=>$id)));
		//echo '<pre>';print_r($product);die;	
		$this->set(compact('product'));
	}

		// function admin_view_product($id=null){
		// 		$this->layout="admin";
		// 		$this->loadModel("Product");
		// 		$this->loadModel("Category");
		// 		$this->loadModel("SubCategory");
		// 		$this->loadModel("ChildSubcategory");
		// 		$id=convert_uudecode(base64_decode($id));
		// 		//echo '<pre>';print_r($id);die;
		// 		$product=$this->Product->find('first',array('conditions'=>array('Product.id'=>$id)));
		// 		$cat_id=$product['Product']['category_id'];
		// $subcat_id=$product['Product']['subcategory_id'];
		// $childsubcat_id=$product['Product']['childsubcategory_id'];
		 
		//  //echo $cat_id;
		//  $category=$this->Category->find('first',array('conditions'=>array('Category.id'=>$cat_id),'recursive'=>-1));
		//  //echo "<pre>";print_r($category);die;
		// // echo $subcat_id;
		//  $subcat=$this->SubCategory->find('first',array('conditions'=>array('SubCategory.id'=>$subcat_id),'recursive'=>-1));
		// // echo "<pre>";print_r($subcat);
		//  //echo $childsubcat_id;
		//  $childsubcat=$this->ChildSubcategory->find('first',array('conditions'=>array('ChildSubcategory.id'=>$childsubcat_id),'recursive'=>-1));
		// // echo "<pre>";print_r($childsubcat);die;
		//   $this->set(compact('product','category','subcat','childsubcat'));
		// 		//echo '<pre>';print_r($product);die;	
		// 		//$this->set(compact('product'));

		// }

	function admin_manage_products1()
	{
		// $page=2;
		$this->layout="admin";
		$this->loadModel("Product");
		$this->loadModel("User");
	 	$this->Paginator->settings = array('Product' => array('limit' => 10,'order' =>'Product.id desc','conditions'=>array('Product.ad_type !='=>4)));
		//$this->paginator['page']= 2;
	  	$pr=$this->paginate('Product');
	  	//$pr=$this->Product->paginate();
	  	$this->set(compact('pr'));
	}

	function admin_update_status($id=null)
	{
		$this->loadModel('Product');
		$id=convert_uudecode(base64_decode($id));
		$this->Product->id=$id;
		$data=$this->Product->find('first',array('conditions'=>array('Product.id'=>$id),'fields'=>array('Product.spotlight')));
		//echo"<pre>";print_r($data);die;
		$status=$data['Product']['spotlight'];
		//echo"<pre>";print_r($status);die;
		if($status==1)
		{
			if($this->Product->savefield('spotlight',0))
		    $this->Session->setFlash('Status Updated Successfully');
			$this->redirect($this->referer());
		}
		else
		{
			if($this->Product->saveField('spotlight',1))
			$this->Session->setFlash('Status Updated Successfully');
			$this->redirect($this->referer());
		}
	}
	 
	 
	function admin_subcat($id=null)//used
	{   
		$this->loadModel("Category");
		if($this->request->is('ajax'))
		{
			$count=$this->Category->find('all',array('conditions'=>array('Category.parent_id'=>$id)));
			if(!empty($count))
			{
				$subCat = '';
				$subCat .='<option disabled="disabled" selected="selected" value="">Select</option>';
				foreach($count as $value)
				{
					$subCat .='<option value="'.$value['Category']['id'].'">'.$value['Category']['title'].'</option>';			
				}
			}
			else
			{
				$subCat='<option value="0">No subcategory</option>';
			}	
			echo $subCat;
			die;
		}
	}

	function admin_chldsub($id)//used 
	{
		//echo $id;die;      
		$this->loadModel("Category");
		if($this->request->is('ajax'))
		{

			$count=$this->Category->find('all',array(
													'conditions'=>array(
																		'Category.parent_id'=>$id
																		)
													)
										);
			if(!empty($count)){
				$subCat = '';
				$subCat .='<option disabled="disabled" selected="selected" value="">Select</option>';
				foreach($count as $value)
				{		
					$subCat .='<option value="'.$value['Category']['id'].'">'.$value['Category']['title'].'</option>';
				}
			}else
			{
				$subCat = '<option value="0">No ChildSubcategory</option>';
			}	
			echo $subCat;
			die;

		}
	}
	 
	 
	function admin_delete_image($id=null)
	{
		 //echo $id;
		 $id=explode(" ",$id);
		 $img_id=$id[0];
		 $p_id=$id[1];
		 $this->loadModel("Image");
		 $this->loadModel("Product");
		 //echo $img_id." ".$p_id;die;
		 //$Image=$this->Image->find('all',array('conditions'=>array('Image.product_id'=>$p_id)));
		 //echo "<pre>";print_r($Image);die;
			//$id=convert_uudecode(base64_decode($id));
			$this->Image->delete($img_id);
			$destination = realpath('../webroot/img/'). '/';
			$image=$this->Image->find('first',array('conditions'=>array('Image.id'=>$img_id),'fields'=>'image'));
			 unlink($destination.$image['Image']['image']);
				$this->redirect($this->referer());
		 
		 }

		 




				 function admin_business_category()
		   {
			 $this->layout="admin";
			 $this->loadModel('BusinessCategory');
			 $this->Paginator->settings = array('BusinessCategory' => array('limit' => 5,'order'=>array('BusinessCategory.id'=>'desc')));
					  $busines_cat=$this->paginate('BusinessCategory');
			 //$busines_cat=$this->BusinessCategory->find('all');           	
			  $this->set(compact('busines_cat'));
			
			
			}
			
	function admin_add_business_category($id=null)
			{
			   $this->layout="admin";	
			   $id=convert_uudecode(base64_decode($id));
			   $this->loadModel("BusinessCategory");
						  $edit_cat=$this->BusinessCategory->find('first',array('conditions'=>array('BusinessCategory.id'=>$id)));
						  //echo '<pre>';print_r($edit_cat);die; 			
			   $this->set(compact('edit_cat'));	 			          
						  if($this->request->is('post'))
						   {
				  $data=$this->data;
				  if($data['BusinessCategory']['id']!='')
				  {
				  //echo 'hi';die; 	
				  if(!empty($_FILES['photo']['name']))
				   {
					 
					App::Import('Component','UploadComponent');
					$upload= new UploadComponent(); 
					$imgName=pathinfo($_FILES['photo']['name']);
					$ext=$imgName['extension'];
					$newImgName = rand(10,100000);
					$tempFile = $_FILES['photo']['tmp_name'];
					$destination = realpath('../webroot/img/'). '/';
					if(is_uploaded_file($_FILES['photo']['tmp_name']))
					{
					  $src = $_FILES['photo']['tmp_name'];
					  //echo '<pre>';print_r($src);die;
					  list( $width, $height, $source_type ) = getimagesize($src);
					   if ($width <= 379 && $height <= 321)
					   {
						 move_uploaded_file($_FILES['photo']['tmp_name'],$destination.$newImgName.".".$ext);
					   }
					   else
							   {
									$this->Resize->resize($_FILES['photo']['tmp_name'],$destination.$newImgName.".".$ext,'as_define',379,321,0,0,0,0);
								}
					}
				   $data['BusinessCategory']['icon']=$newImgName.".".$ext;	  
				  } 
		 
						
								 if($this->BusinessCategory->save($data))
								  {
					 $this->Session->setFlash('Category has been updated successfully');
					 $this->redirect(array('action'=>'business_category'));	 			 	 	
									}
									else 
									 {
					 $this->Session->setFlash('Error in updating');
					 $this->redirect($this->referer());	 			 	 		
										}
										}
										else
										{
											//echo 'helo';die;
										if(!empty($_FILES['photo']['name']))
					{
					 
					App::Import('Component','UploadComponent');
					$upload= new UploadComponent(); 
					$imgName=pathinfo($_FILES['photo']['name']);
					$ext=$imgName['extension'];
					$newImgName = rand(10,100000);
					$tempFile = $_FILES['photo']['tmp_name'];
					$destination = realpath('../webroot/img/'). '/';
					if(is_uploaded_file($_FILES['photo']['tmp_name']))
					{
					  $src = $_FILES['photo']['tmp_name'];
					  //echo '<pre>';print_r($src);die;
					  list( $width, $height, $source_type ) = getimagesize($src);
					   if ($width <= 379 && $height <= 321)
					   {
						 move_uploaded_file($_FILES['photo']['tmp_name'],$destination.$newImgName.".".$ext);
					   }
					   else
							   {
									$this->Resize->resize($_FILES['photo']['tmp_name'],$destination.$newImgName.".".$ext,'as_define',379,321,0,0,0,0);
								}
					}
				   $data['BusinessCategory']['icon']=$newImgName.".".$ext;	  
				  } 
		 
						
								 if($this->BusinessCategory->save($data))
								  {
					 $this->Session->setFlash('Category has been added successfully');
					 $this->redirect(array('action'=>'business_category'));	 			 	 	
									}
									else 
									 {
					 $this->Session->setFlash('Error in adding');
					 $this->redirect($this->referer());	 			 	 		
										}
							}
			}
		 } 	
			function admin_view_business_category($id=null)
			{
			 $this->layout="admin";
			 $id=convert_uudecode(base64_decode($id));
			 $this->loadModel("BusinessCategory");
			 $view_cat=$this->BusinessCategory->find('first',array('condtions'=>array('BusinessCategory.id'=>$id)));
			 $this->set(compact('view_cat'));         		
				} 
				
				function admin_delete_business_category($id=null)
		   {
				$this->layout="admin";
			 $id=convert_uudecode(base64_decode($id));
			 $this->loadModel("BusinessCategory");
			if($this->BusinessCategory->delete($id))
			  {
				  $this->Session->setFlash('Category has been deleted successfully','success');
				  $this->redirect(array('action'=>'business_category'));
				}
				else
				{
				  $this->Session->setFlash('Error in deleting','flash_error');
				  $this->redirect(array('action'=>'business_category'));
				}
			}
	
	function admin_delete_businessimage($id=null){
		 //echo $id;
		 $id=explode(" ",$id);
		 $img_id=$id[0];
		 //$u_id=$id[1];
		 $this->loadModel("BusinessImage");
		
			
			$destination = realpath('../webroot/img/'). '/';
			$image=$this->BusinessImage->find('first',array('conditions'=>array('BusinessImage.id'=>$img_id),'fields'=>'image'));
			 unlink($destination.$image['BusinessImage']['image']);
			 $this->BusinessImage->delete($img_id);
				$this->redirect($this->referer());
		 
		 }
 	
 	function admin_update_userstatus($id=null){
	 $this->loadModel('User');
	 $id=convert_uudecode(base64_decode($id));
	 
	 $this->User->id=$id;
	 
	 $data=$this->User->find('all',array('conditions'=>array('User.id'=>$id),'fields'=>array('User.status')));
	 $status=$data[0]['User']['status'];
	// echo"<pre>";print_r($status);die;
	 if($status==1){
		 //$data['Product']['status']=0;
		
		 if($this->User->savefield('status',0))
		 $this->Session->setFlash('Status Updated Successfully');
					$this->redirect($this->referer());
		 }
		 else{
			 if($this->User->saveField('status',1))
			
			 $this->Session->setFlash('Status Updated Successfully');
					$this->redirect($this->referer());
			 }
	 
	 }
	
	function admin_featured_update($id=null){
	 $this->loadModel('User');
	 $id=convert_uudecode(base64_decode($id));
	 
	 $this->User->id=$id;
	 
	 $data=$this->User->find('first',array('conditions'=>array('User.id'=>$id),'fields'=>array('User.featured')));
	 $status=$data['User']['featured'];
	// echo"<pre>";print_r($status);die;
	 if($status==1){
		 //$data['Product']['status']=0;
		
		 if($this->User->savefield('featured',0))
		 $this->Session->setFlash('Status Updated Successfully');
					$this->redirect($this->referer());
		 }
		 else{
			 if($this->User->saveField('featured',1))
			
			 $this->Session->setFlash('Status Updated Successfully');
					$this->redirect($this->referer());
			 }
	 
	 }
	
	function admin_contacts()//used
	{
		$this->layout="admin";	 
		$this->loadModel("Contact");
		$this->Paginator->settings = array('Contact' => array('limit' => 10,'order'=>array('Contact.id'=>'desc')));
		$contacts=$this->paginate('Contact');
		$this->set(compact('contacts'));
	}	
		
	function admin_delete_contacts($id=null)//used
	{
		$this->loadModel('Contact');
		$id=convert_uudecode(base64_decode($id));
		if($this->Contact->delete($id))
		{
			$this->Session->setFlash('Request is Deleted');
			$this->redirect(array('action'=>'contacts'));
		}
		else
		{
			$this->Session->setFlash('Error in deleting');
			$this->redirect($this->referer());
		}	
	}
		
	function admin_reply_contacts($id=null)//used
	{
		$this->layout='admin';
		$this->loadModel("Contact");
		$id=convert_uudecode(base64_decode($id));
		$contact=$this->Contact->find('first',array('conditions'=>array('Contact.id'=>$id)));
		// echo "<pre>";print_r($contact);die;
						
		$this->set(compact('contact'));
	}		
	
	function admin_reply()
	{
		$this->loadModel('Contact');
		$data=$this->data;
		// pr($data);die;
		if(empty($data['Contact']['reply']))
		{
			$this->Session->setFlash('Reply Cannot Be Empty');
			$this->redirect($this->referer());
		}
		else
		{
			$Email = new CakeEmail();
			// pr($Email);die;
			$Email->from(array('buildrepo.ashutosh@gmail.com' => 'garamhaandi'))
			->to($data['Contact']['email'])
			// $Email->subject('About')
			->send($data['Contact']['reply']);
			$this->redirect(array('action'=>'contacts'));
		}
	}
	
	function admin_faq()
	{
		$this->layout="admin";
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
		// pr($faq);die;
		// pr($this->Topic);die;
		//$faq=$this->Faq->find('all');
	  $this->set(compact('faq'));
	}

	function admin_faqtopic_edit($id = null)
	{
		$this->layout="admin";
		$this->loadModel('Topic');
		$id=(base64_decode($id));
		$details=$this->Topic->findById($id);
		// pr($details);die;
		$this->set(compact('details'));
		$this->set('id',$id);
		if($this->request->is('post'))
		{
			$data=$this->data;
			// pr($data);die;
			if(!empty($data))
			{
				$data1 = $data;
				if($this->Topic->save($data1))
				{
					// pr($data1);die;
					$this->Session->setFlash('Topic has been updated successfully.','success');
					$this->redirect(array('action'=>'admin_faq_topic'));
				}
				else
				{
					$this->Session->setFlash('Failed in updating.','error');
					$this->redirect($this->referer());
				}
			}
	  }
	}

	function admin_faq_topic_add()
	{
		$this->layout="admin";
		$this->loadModel('Topic');
		if ($this->request->is('post')) 
		{
			$data = $this->data;
			// pr($data);die;
			if ($this->Topic->save($data)) 
			{
				$this->Session->setFlash('Topic for faq has been updated successfully.','success');
				return $this->redirect(array('action' => 'admin_faq_topic'));
			}
		}
	}

	function admin_faq_topic()
	{
		$this->layout="admin";
		$this->loadModel('Topic');
		$details = $this->Topic->find('all');
		//pr($details);die;
		$this->set(compact('details'));
	}
	function admin_delete_topic($id = null)
	{
		$this->layout="admin";
		$this->loadModel("Topic");
		$id=convert_uudecode(base64_decode($id));
		//echo '<pre>';print_r($id);die;
		if($this->Topic->delete($id))
		{
		   $this->Session->setFlash('Topic has been deleted successfully','success');
		   $this->redirect($this->referer());
		}
		$this->Session->setFlash('Error in deleting Topic');
		$this->redirect($this->referer());
	}

	function admin_faq_edit($id = null)
	{
		$this->layout="admin";
		$this->loadModel('Faq');
		$this->loadModel('Topic');
		$id=(base64_decode($id));
		$details=$this->Faq->findById($id);
		$tpc = $this->Topic->find('all');
		// pr($tpc);die;
		$this->set(compact('details','tpc'));
		$this->set('id',$id);
		if($this->request->is('post'))
		{
			$data=$this->data;
			// pr($data);die;
			if(!empty($data))
			{
				$data1 = $data;
				//$data1['User']['id'] = $data['id'];
				$this->Faq->deleteAll(array('topic_id' =>$id));
				if($this->Faq->save($data1))
				{
					foreach ($data['Faq']['topic_id'] as $l_id ) 
					{
						$topic_id['Topic']['topic'] = $l_id;
						$topic_id['Faq']['topic_id'] = $id;
						// pr($l_id); 
						// pr($id); die;
						$this->Faq->create();
	                    $this->Faq->save($topic_id);
					}
					// pr($data1);die;
					$this->Session->setFlash('Faq has been updated successfully.','success');
					$this->redirect(array('action'=>'admin_faq'));
				}
				else
				{
					$this->Session->setFlash('Failed in updating.','error');
					$this->redirect($this->referer());
				}
			}
	  }
	}

	function admin_view_faq($id=null)
	{
		$this->layout="admin";
		$this->loadModel("Faq");
		$id=convert_uudecode(base64_decode($id));
		$view_faq=$this->Faq->find('first',array('conditions'=>array('Faq.id'=>$id)));      		
		$this->set(compact('view_faq'));
	}

	function admin_delete_faq($id=null)
	{
		$this->layout="admin";
		$this->loadModel("Faq");
		$id=convert_uudecode(base64_decode($id));
		if($this->Faq->delete($id))
		{
		$this->Session->setFlash('Faq has been deleted successfully','success');
		$this->redirect($this->referer());	
		}
		else {
		$this->Session->setFlash('Error in deleting','flash_error');
		$this->redirect($this->referer());	
		}
	}

	function admin_add_faq($id=null)
	{
		$this->layout="admin";	
		$this->loadModel("Faq");
		$this->loadModel("Topic"); 
		$id=convert_uudecode(base64_decode($id));
		// echo '<pre>';print_r($id);die;	
		$edit_faq=$this->Faq->find('first',array('conditions'=>array('Faq.id'=>$id)));
		$tpc = $this->Topic->find('all', array('fields'=>array('Topic.id','Topic.topic')));
		// echo '<pre>';print_r($edit_faq);die;
		$this->set(compact('edit_faq','tpc'));	
		if(!empty($this->data))
		{
   			$data=$this->data;
   			// pr($data);die;
	   		if($data['Faq']['id']!='')
	   		{
				// echo '<pre>';print_r($data);die;  
			 	if($this->Faq->save($data))
				{
				   $this->Session->setFlash('Faq has been updated successfully','success');
				   $this->redirect(array('action'=>'faq'));	 			 	 	
				}
				else 
				{
					$this->Session->setFlash('Error in adding','error_flash');
					$this->redirect(array('action'=>'faq'));	 			 	 	
				}                     	
			}
			else
			{
				if($this->Faq->save($data))
				{	
					// pr($data);die;
		   			$this->Session->setFlash('Faq has been added successfully','success');
			 		$this->redirect(array('action'=>'faq'));	 			 	 	
				}
				else 
				{
					$this->Session->setFlash('Error in adding','error_flash');
			 		$this->redirect($this->referer());	 			 	 		
				}
			}
		}
	}

	function admin_delete_about_team($id= null)
	{
		$this->layout="admin";
		$this->loadModel("About_team");
		$id=convert_uudecode(base64_decode($id));
		//echo '<pre>';print_r($id);die;
		if($this->About_team->delete($id))
		{
		   $this->Session->setFlash('Team member has been deleted successfully','success');
		   $this->redirect($this->referer());
		}
		$this->Session->setFlash('Error in deleting Team member','error');
		$this->redirect($this->referer());
	}

	function admin_edit_about_team_mbrs($id = null)
	{
		$this->layout="admin";
		$this->loadModel("About_team");
		$id=convert_uudecode(base64_decode($id));
		$edit_about_team=$this->About_team->find('first',array('conditions'=>array('About_team.id'=>$id)));
		// pr($edit_about_team);die;
		if($this->request->is('post'))
		{
			if(!empty($this->data))
			{
				if(!empty($id))
				{
					$data=$this->data;
					// pr($data);die;
					// pr($_FILES);die;
					if(!empty($_FILES['image']['name']))
					{
						$imgName=pathinfo($_FILES['image']['name']);
						$ext=$imgName['extension'];
						$newImgName = rand(10,100000);
						$tempFile = $_FILES['image']['tmp_name'];
						$destination = realpath('../webroot/img/about_team'). '/';

						if(is_uploaded_file($_FILES['image']['tmp_name']))
						{
							// $src = $_FILES['image']['tmp_name'];
							move_uploaded_file($_FILES['image']['tmp_name'],$destination.$newImgName.".".$ext);
						}
						$data['image']=$newImgName.".".$ext;	  
					}
					$data['id'] = $id;
					if($this->About_team->save($data))
					{
						// pr($data);die;
						$this->Session->setFlash('Information has been updated successfully','success');                       	
						$this->redirect(array('action'=>'abt_teambrs'));                       
					}
					else
					{
						$this->Session->setFlash('Error in updating','flash_error');                       	
						$this->redirect(array('action'=>'admin_abt_teambrs'));                       
					}
				}
			}
		}
		$this->set(compact('edit_about_team','id'));
	}

	function admin_about_team()//used
	{
		$this->layout="admin";
		$this->loadModel("About_team");
		if($this->request->is('post'))
		{
			$data = $this->data;
			// pr($data);die;
			if(!empty($_FILES['image']['name']))
			{
				$imgName=pathinfo($_FILES['image']['name']);
				$ext=$imgName['extension'];
				$newImgName = rand(10,100000);
				$tempFile = $_FILES['image']['tmp_name'];
				$destination = realpath('../webroot/img/about_team'). '/';

				if(is_uploaded_file($_FILES['image']['tmp_name']))
				{
					$src = $_FILES['image']['tmp_name'];
					move_uploaded_file($_FILES['image']['tmp_name'],$destination.$newImgName.".".$ext);
				}
				$data['About_team']['image']=$newImgName.".".$ext;	  
			}
			if ($this->About_team->save($data)) 
			{
				$this->Session->setFlash('The user has been saved.','success');
				return $this->redirect(array('action' => 'admin_abt_teambrs'));
			}
			else
			{
				$this->Session->setFlash('Failed in adding.','error');
				$this->redirect($this->referer());
			}
		}
	}

	function admin_abt_teambrs()
	{
		$this->layout="admin";
		$this->loadModel("About_team");
		$abt_team = $this->About_team->find('all');
		$this->set(compact('abt_team'));
	}

	function admin_about_us()//used
	{
		$this->layout="admin";
		$this->loadModel("About");
		$about_us=$this->About->find('all')	;

		$this->set(compact('about_us'));
	}
							
	function admin_edit_about_us($id=null)//used
	{
		$this->layout="admin";
		$this->loadModel("About");
		$id=convert_uudecode(base64_decode($id));
		$edit_about=$this->About->find('first',array('conditions'=>array('About.id'=>$id)));
		$this->set(compact('edit_about'));
		if(!empty($this->data))
		{
			$data=$this->data;
			// pr($data);die;
			if(!empty($_FILES['intro_image']['name']))
			{
				$imgName=pathinfo($_FILES['intro_image']['name']);
				$ext=$imgName['extension'];
				$newImgName = rand(10,100000);
				$tempFile = $_FILES['intro_image']['tmp_name'];
				$destination = realpath('../webroot/img'). '/';

				if(is_uploaded_file($_FILES['intro_image']['tmp_name']))
				{
					$src = $_FILES['intro_image']['tmp_name'];
					move_uploaded_file($_FILES['intro_image']['tmp_name'],$destination.$newImgName.".".$ext);
				}
				$data['About']['intro_image']=$newImgName.".".$ext;	  
			}

			if(!empty($_FILES['mission_image']['name']))
			{
				$imgName=pathinfo($_FILES['mission_image']['name']);
				$ext=$imgName['extension'];
				$newImgName = rand(10,100000);
				$tempFile = $_FILES['mission_image']['tmp_name'];
				$destination = realpath('../webroot/img'). '/';

				if(is_uploaded_file($_FILES['mission_image']['tmp_name']))
				{
					$src = $_FILES['mission_image']['tmp_name'];
					move_uploaded_file($_FILES['mission_image']['tmp_name'],$destination.$newImgName.".".$ext);
				}
				$data['About']['mission_image']=$newImgName.".".$ext;	  
			}

			if(!empty($_FILES['value_image']['name']))
			{
				$imgName=pathinfo($_FILES['value_image']['name']);
				$ext=$imgName['extension'];
				$newImgName = rand(10,100000);
				$tempFile = $_FILES['value_image']['tmp_name'];
				$destination = realpath('../webroot/img'). '/';

				if(is_uploaded_file($_FILES['value_image']['tmp_name']))
				{
					$src = $_FILES['value_image']['tmp_name'];
					move_uploaded_file($_FILES['value_image']['tmp_name'],$destination.$newImgName.".".$ext);
				}
				$data['About']['value_image']=$newImgName.".".$ext;	  
			}

			if(!empty($_FILES['solution_image']['name']))
			{
				$imgName=pathinfo($_FILES['solution_image']['name']);
				$ext=$imgName['extension'];
				$newImgName = rand(10,100000);
				$tempFile = $_FILES['solution_image']['tmp_name'];
				$destination = realpath('../webroot/img'). '/';

				if(is_uploaded_file($_FILES['solution_image']['tmp_name']))
				{
					$src = $_FILES['solution_image']['tmp_name'];
					move_uploaded_file($_FILES['solution_image']['tmp_name'],$destination.$newImgName.".".$ext);
				}
				$data['About']['solution_image']=$newImgName.".".$ext;	  
			}
			//echo '<pre>';print_r($_FILES);
			//echo '<pre>';print_r($data);die;
			if($this->About->save($data))
			{
				// pr($data);die;
				$this->Session->setFlash('Information has been updated successfully','success');                       	
				$this->redirect(array('action'=>'about_us'));                       
			}
			else
			{
				$this->Session->setFlash('Error in updating','flash_error');                       	
				$this->redirect(array('action'=>'about_us'));                       
			} 	             	     	 	
		}
	}
								
	function admin_privacy_policy()
	{
		$this->layout="admin";
		$this->loadModel("PrivacyPolicy");
		$privacy_policy=$this->PrivacyPolicy->find('all')	;
		//echo '<pre>';print_r($privacy_policy);die;
		$this->set(compact('privacy_policy'));             	    	
	}

	function admin_privacy_add()
	{
		$this->layout = "admin";
		$this->loadModel("PrivacyPolicy");
		if ($this->request->is('post')) 
		{
			$data = $this->data;
			// pr($data);die;
			if ($this->PrivacyPolicy->save($data)) 
			{
				$this->Session->setFlash('The PrivacyPolicy has been saved','success');
				return $this->redirect(array('action' => 'admin_privacy_policy'));
			}
			else
			{
				$this->Session->setFlash('failed in updating.','error');
				$this->redirect($this->referer());
			}	
		}
	}

	function admin_edit_privacy_policy($id=null)
	{
		$this->layout="admin";
		$this->loadModel("PrivacyPolicy");
		$id=convert_uudecode(base64_decode($id));

		$edit_privacy=$this->PrivacyPolicy->find('first',array('conditions'=>array('PrivacyPolicy.id'=>$id)));
		//echo '<pre>';print_r($edit_privacy);die; 	             	     	 
		$this->set(compact('edit_privacy'));
		if(!empty($this->data))
		{
			$data=$this->data;
			//echo '<pre>';print_r($data);die;
			if($this->PrivacyPolicy->save($data))
			{
				$this->Session->setFlash('Information has been updated successfully','success');                       	
				$this->redirect(array('action'=>'privacy_policy'));                       
			}
			else
			{
				$this->Session->setFlash('Error in updating','flash_error');                       	
				$this->redirect(array('action'=>'privacy_policy'));                       
			} 	             	     	 	
		}
	}
							
	function admin_term()
	{
		$this->layout="admin";
		$this->loadModel("Term");
		$term=$this->Term->find('all')	;
		//echo '<pre>';print_r($term);die;
		$this->set(compact('term'));             	    	
	}

	function admin_add_terms()
	{
		$this->layout="admin";
		$this->loadModel("Term");
		if($this->request->is('post'))
		{
			$data = $this->data;
			if($this->Term->save($data))
			{
				$this->Session->setFlash('Information has been saved successfully','success');                       	
				$this->redirect(array('action'=>'term'));                       
			}
			else
			{
				$this->Session->setFlash('Error in updating','flash_error');                       	
				$this->redirect(array('action'=>'term'));                       
			}
		}
	}

	function admin_delete_term($id = null)
	{
		$this->layout="admin";
		$this->loadModel("Term");
		$id=convert_uudecode(base64_decode($id));
		// pr($id);die;
		if($this->Term->delete($id))
		{
			$this->Session->setFlash('Information is Deleted');
			$this->redirect(array('action'=>'term'));
		}
		else
		{
			$this->Session->setFlash('Error in deleting');
			$this->redirect($this->referer());
		}    
	}
			
	function admin_edit_term($id=null)
	{
		$this->layout="admin";
		$this->loadModel("Term");
		$id=convert_uudecode(base64_decode($id));
		//echo '<pre>';print_r($id);die;
		$edit_term=$this->Term->find('first',array('conditions'=>array('Term.id'=>$id)));
	 	//echo '<pre>';print_r($edit_term);die; 	             	     	 
		$this->set(compact('edit_term'));
		if(!empty($this->data))
		{
	   		$data=$this->data;
	   		//echo '<pre>';print_r($data);die;
	   		if($this->Term->save($data))
	   		{
		 		$this->Session->setFlash('Information has been updated successfully','success');                       	
		 		$this->redirect(array('action'=>'term'));                       
			}
			else
			{
				$this->Session->setFlash('Error in updating','flash_error');                       	
		 		$this->redirect(array('action'=>'term'));                       
			} 	             	     	 	
		}
	}



 public function admin_messages(){
			 $this->layout='admin';
			 $this->loadModel("Message");
			 $this->Paginator->settings = array('Message' => array('limit' => 10,'order'=>array('Message.id'=>'desc')));
			 $messages=$this->paginate('Message');
 $count=$this->Message->find('count');
			 //echo"<pre>";print_r($messages);die;
			 $this->set(compact('messages','count'));
			 }     
		 
		 
		 
	function admin_delete_messages($id=null)
	{
		$this->loadModel('Message');
			$id=convert_uudecode(base64_decode($id));
			if($this->Message->delete($id)){
				$this->Session->setFlash('Message is Deleted');
				$this->redirect(array('action'=>'messages'));
				}else{
					$this->Session->setFlash('Error in deleting');
					$this->redirect($this->referer());
					}     
		}
		 
	function admin_reply_messages($id=null){
			$this->layout='admin';
			$this->loadModel("Message");
			$id=convert_uudecode(base64_decode($id));
			$message=$this->Message->find('first',array('conditions'=>array('Message.id'=>$id)));
			//echo "<pre>";print_r($message);die;
							 
			$this->set(compact('message'));
			if($this->request->is('post')){
				$data=$this->data;
				date_default_timezone_set("Asia/Kolkata");
				$data['Message']['ans_date']=date('d-m-Y H:i:s');
				$data['Message']['ans_status']=1;
				//echo "<pre>";print_r($data);die;
				$this->Message->id=$data['Message']['id'];
				if($this->Message->save($data)){
				$this->Session->setFlash('Answer successfully');
				$this->redirect(array('action'=>'messages'));
				}
				else{
					$this->Session->setFlash('Error in Answering');
					$this->redirect($this->referer());
					}     
				}
		}



	 function cat_verify($catgry)
	 {
	//echo $catgry;die;	
	$this->loadModel("BusinessCategory");
	if($this->request->is('ajax')) 
	  { 	
			$count=$this->BusinessCategory->find('count',array('conditions'=>array('BusinessCategory.title'=>$catgry)));
			//echo '<pre>';print_r($count);die;
	  if($count>0)
	  {
	  echo 'exist';die;	
	  }
	  else {
	  echo 'not exist';die;      	
		}
	}
		}



   function category_verify($catgry)
	 {
	//echo $catgry;die;	
	$this->loadModel("Category");
	if($this->request->is('ajax')) 
	  { 	
			$count=$this->Category->find('count',array('conditions'=>array('Category.category'=>$catgry)));
			//echo '<pre>';print_r($count);die;
	  if($count>0)
	  {
	  echo 'exist';die;	
	  }
	  else {
	  echo 'not exist';die;      	
		}
	}
		}	


	


	public function admin_message_chat($id=null){
			 $this->layout='admin';
			  $id=convert_uudecode(base64_decode($id));
			//echo $id;die;
			 $this->loadModel("MessageChat");
			 $this->loadModel("Message");
			 $user=$this->Message->find('first',array('conditions'=>array('Message.id'=>$id)));
			 // echo"<pre>";print_r($user);die;
			 $this->Paginator->settings = array('MessageChat' => array('limit' => 10,'conditions'=>array('message_id'=>$id),'order'=>array('MessageChat.id'=>'desc')));
			 $messages=$this->paginate('MessageChat');
			
			 $this->set(compact('messages','user'));
			 }
			 
				
 function admin_delete_message_chat($id=null){
		$this->loadModel('MessageChat');
			$id=convert_uudecode(base64_decode($id));
			if($this->MessageChat->delete($id)){
				$this->Session->setFlash('Message is Deleted');
			  $this->redirect($this->referer());
				}else{
					$this->Session->setFlash('Error in deleting');
					$this->redirect($this->referer());
					}     
		}	
		
  function admin_reply_message_chat($id=null,$m_id=null){
			$this->layout='admin';
			
			$this->loadModel("MessageChat");
			$id=convert_uudecode(base64_decode($id));
			//$m_id=convert_uudecode(base64_decode($m_id));
			//echo $id."hi ".$m_id;die;
			$message=$this->MessageChat->find('first',array('conditions'=>array('MessageChat.id'=>$id)));
			//echo "<pre>";print_r($message);die;
							 
			$this->set(compact('message','m_id'));
			if($this->request->is('post')){
				$data=$this->data;
				date_default_timezone_set("Asia/Kolkata");
				$data['MessageChat']['ans_date']=date('d-m-Y H:i:s');
				$data['MessageChat']['ans_status']=1;
				//echo "<pre>";print_r($data);die;
				$m_id=$data['m_id'];
				$this->MessageChat->id=$data['Message']['id'];
				if($this->MessageChat->save($data)){
				$this->Session->setFlash('Answer successfully');
				$this->redirect(array('action'=>'message_chat',$m_id));
				}
				else{
					$this->Session->setFlash('Error in Answering');
					$this->redirect($this->referer());
					}     
				}
		}
	
	
		 /*function admin_spotlight($id){
		$ids=explode("," ,$id);
		//echo"<pre>";print_r($ids);die;
		$this->loadModel('Product');
		foreach ($ids as $id) {
			$this->Product->id=$id;
			$this->Product->saveField('spotlight',1);
		}
		$this->Session->setFlash('Ads in spotlight successfully');
		$this->redirect($this->referer());
		
		}*/



		 function admin_user_search($id=null){
		//echo $id;
		$this->loadModel('User');
		$this->loadModel('City');
		$search=explode(" ",$id);
		//echo "<pre>";print_r($search);die;
		$column=$search[0];
		$ser=$search[1];
		if($column=='firstname'){
			$user_info=$this->User->find('all',array('conditions'=>array('User.firstname LIKE'=>'%'.$ser.'%','User.user_type'=>'0')));  
			//echo "<pre>";print_r($user_info);die;
			}
		elseif($column=='lastname'){ 
			 $user_info=$this->User->find('all',array('conditions'=>array('User.lastname LIKE'=>'%'.$ser.'%','User.user_type'=>'0')));
			 }	
		elseif($column=='email'){ 
			$user_info=$this->User->find('all',array('conditions'=>array('User.email LIKE'=>'%'.$ser.'%','User.user_type'=>'0')));
		   }
		elseif($column=='city'){ 
		$cityname=$this->City->find('first',array('conditions'=>array('City.city_name LIKE'=>'%'.$ser.'%')));
		//echo "<pre>";print_r($cityname);die;			
			$user_info=$this->User->find('all',array('conditions'=>array('User.city_id'=>$cityname['City']['id'],'User.user_type'=>'0')));
		 //echo "<pre>";print_r($user_info);die;
		   }
	  //echo "<pre>";print_r($user_info);die;
		if(!empty($user_info)){
			$this->set(compact('user_info'));
			$this->autoRender=false;
			$this->viewPath='Elements/adminElements/admins';
			$this->render('user_list');
			}
		else{
			$this->viewPath='Elements/adminElements/admins';
			$this->render('user_list');
			}
		} 


			function admin_business_search($id=null){
		//echo $id;die;
		$this->loadModel('User');
		$this->loadModel('City');
		$search=explode(" ",$id);
		//echo "<pre>";print_r($search);die;
		$column=$search[0];
		$ser=$search[1];
		if($column=='firstname'){
			$business_user=$this->User->find('all',array('conditions'=>array('User.firstname LIKE'=>'%'.$ser.'%','User.user_type'=>'1')));  
			//echo "<pre>";print_r($business_user);die;
			}
		elseif($column=='lastname'){ 
			 $business_user=$this->User->find('all',array('conditions'=>array('User.lastname LIKE'=>'%'.$ser.'%','User.user_type'=>'1')));
			 }	
		elseif($column=='email'){ 
			$business_user=$this->User->find('all',array('conditions'=>array('User.email LIKE'=>'%'.$ser.'%','User.user_type'=>'1')));
		   }
		elseif($column=='city'){ 
		 $cityname=$this->City->find('first',array('conditions'=>array('City.city_name LIKE'=>'%'.$ser.'%')));
				 $business_user=$this->User->find('all',array('conditions'=>array('User.city_id'=>$cityname['City']['id'],'User.user_type'=>'1')));
		   }
		//$business_user=$this->User->find('all',array('conditions'=>array('User.firstname'=>$id)));
		//echo "<pre>";print_r($business_user);die;
		if(!empty($business_user)){
			$this->set(compact('business_user'));
			$this->autoRender=false;
			$this->viewPath='Elements/adminElements/admins';
			$this->render('business_list');
			}
		else{
			$this->viewPath='Elements/adminElements/admins';
			$this->render('business_list');
			}
		} 
 public function admin_manage_offers($id=null)
	 { $this->autoRender=false;
		  //echo $id;die;
	  $this->layout="admin";
	  $this->loadModel("Product");
	  $this->loadModel("User");
	  $id=convert_uudecode(base64_decode($id));
	 //echo $id;die;
	  $p=$this->User->find('all',array('conditions'=>array('User.id'=>$id)));
	 // echo '<pre>';print_r($p);die;
	  $name=$p[0]['User']['firstname']." ".$p[0]['User']['lastname'];
	 // echo '<pre>';print_r($name);die;
	 $this->set(compact('id','name'));
	
$this->Paginator->settings = array('Product' => array('limit' => 10));
		//$this->paginator['page']= 2;
	  $pr=$this->paginate('Product',array('Product.user_id'=>$id,'Product.ad_type'=>4));
	 
	  //echo '<pre>';print_r($pr);die;
	  $this->set(compact('pr'));  
	  $this->render('/Users/admin_manage_products');
  }



function admin_manage_newsletter()
	{
   $this->layout="admin";
   $this->loadModel('NewsletterTemplate');
   $this->Paginator->settings = array('NewsletterTemplate' => array('limit' => 5));
   $newsletter=$this->paginate('NewsletterTemplate');
   
   //echo '<pre>';print_r($newsletter);die;		
		 $this->set(compact('newsletter'));
		} 
		
		function admin_view_newsletter($id=null)
		{
			$id=convert_uudecode(base64_decode($id));
			$this->layout="admin";
   $this->loadModel('NewsletterTemplate');
			$view_newsletter=$this->NewsletterTemplate->find('first',array('conditions'=>array('NewsletterTemplate.id'=>$id)));
			//echo '<pre>';print_r($view_newsletter);die;
				$this->set(compact('view_newsletter'));	
			}
			
				 function admin_delete_newsletter($id=null)
	 {
		  $this->layout="admin";
	$this->loadModel('NewsletterTemplate');
	   $id=convert_uudecode(base64_decode($id));
		  //echo '<pre>';print_r($id);die;
			if($this->NewsletterTemplate->delete($id))
		  {
			   $this->Session->setFlash('Newsletter has been deleted successfully');
			   $this->redirect($this->referer());
		  }
		  $this->Session->setFlash('Error in deleting Newsletter');
		  $this->redirect($this->referer());
		}
		
		function admin_edit_newsletter($id=null)
		{
			$id=convert_uudecode(base64_decode($id));
			 $this->layout="admin";
	$this->loadModel('NewsletterTemplate');
	$edit_newsletter=$this->NewsletterTemplate->find('first',array('conditions'=>array('NewsletterTemplate.id'=>$id)));
			//echo '<pre>';print_r($edit_newsletter);die;
			$this->set(compact('edit_newsletter'));
			if(!empty($this->data))
							 {
					   $data=$this->data;
					   //echo '<pre>';print_r($data);die;
					   if($this->NewsletterTemplate->save($data))
					   {
						 $this->Session->setFlash('Newsletter has been updated successfully');                       	
						 $this->redirect(array('action'=>'manage_newsletter'));                       
						}
						else
						{
							$this->Session->setFlash('Error in updating');                       	
						 $this->redirect(array('action'=>'manage_newsletter'));                       
						} 	             	     	 	
								}
			
			}
			
			function admin_add_newsletter()
		{
			
			 $this->layout="admin";
	$this->loadModel('NewsletterTemplate');
		if(!empty($this->data))
							 {
					   $data=$this->data;
					   //echo '<pre>';print_r($data);die;
					   if($this->NewsletterTemplate->save($data))
					   {
						 $this->Session->setFlash('Newsletter has been added successfully');                       	
						 $this->redirect(array('action'=>'manage_newsletter'));                       
						}
						else
						{
							$this->Session->setFlash('Error in adding');                       	
						 $this->redirect(array('action'=>'manage_newsletter'));                       
						} 	             	     	 	
								}
			
			}


						function admin_individual_listing($id=null)
			{
				$this->autoRender=false;
				$this->layout='admin';
				$id=convert_uudecode(base64_decode($id));
				//echo $id;die;
				$this->loadModel('User');
				$this->Paginator->settings=array('User'=> array('conditions'=>array('User.user_type'=>0,'User.newsletter_status'=>0),'limit'=>15,'fields'=>array('id','firstname','lastname','user_type','email'),'contain'=>false));
				$subscriber=$this->paginate('User');
				//echo '<pre>';print_r($subscriber);die;
				
				$this->set(compact('subscriber','id'));
				$this->render('/Users/admin_send_newsletter');
			}
			
			function admin_business_listing($id=null)
			{
				$this->autoRender=false;
				$this->layout='admin';
				$id=convert_uudecode(base64_decode($id));
				//echo $id;die;
				$this->loadModel('User');
				$this->Paginator->settings=array('User'=> array('conditions'=>array('User.user_type'=>1,'User.newsletter_status'=>0),'limit'=>15,'fields'=>array('id','firstname','lastname','user_type','email'),'contain'=>false));
				$subscriber=$this->paginate('User');
				//echo '<pre>';print_r($subscriber);die;
				$this->set(compact('subscriber','id'));
				$this->render('/Users/admin_send_newsletter');
			}
			
			
			function admin_send_newsletter($id=null)
			{
				$id=convert_uudecode(base64_decode($id));
				//echo $id;die;
				$this->layout='admin';
				$this->loadModel('User');
				$this->loadModel('NewsletterTemplate');
				$this->Paginator->settings = array('User' => array('conditions'=>array('User.newsletter_status'=>0),'limit' => 10,'fields'=>array('id','firstname','lastname','user_type','email','newsletter_status'),'contain'=>false));
	 $subscriber=$this->paginate('User');
	 //echo '<pre>';print_r($subscriber);die;
				//$this->loadModel('NewsletterTemplate');
			 //$subscriber=$this->User->find('all',array('fields'=>array('id','firstname','lastname','email','user_type'),'contain'=>array('User')));
			 //echo '<pre>';print_r($subscriber);die;
			 $this->set(compact('subscriber','id'));
			 
			 
			 if(!empty($this->data)) 
			{   
					$data = $this->data;
					//echo '<pre>';print_r($data);die;
					 if(count($data['emails'])<1)
					  {	
							$this->Session->setFlash('Please select atleast one subscriber.');
							$this->redirect($this->referer());
					  }			
						 $getMsgDetail = $this->NewsletterTemplate->find('first',array('conditions'=>array('NewsletterTemplate.id'=>$data['NewsletterTemplate']['id'])));
				 //echo '<pre>';print_r($getMsgDetail);die;                
				foreach($data['emails'] as $value)
						  {
									
							   $get=$this->User->find('first',array('conditions'=>array('User.email'=>$value),'contain'=>array('User')));
							   //echo '<pre>';print_r($get);die;
							   if(!empty($get))
							   {
									$template_info=$getMsgDetail['NewsletterTemplate']['description'];
									$title = $getMsgDetail['NewsletterTemplate']['title'];
									$to = trim($get['User']['email']);
									$name=$get['User']['firstname'];
							$replace = array('{[DomainPath]}','{[firstname]}','{[description]}','{[title]}','{[email]}');
									$with = array($_SERVER['HTTP_HOST'],$name,$template_info,$title,$to);
								 $this->send_email($replace,$with,'newsletter_send',NO_REPLY,$to);
							}
					   }
					  $this->Session->setFlash('NewsLetter has been sent successfully');
					  $this->redirect(array('controller'=>'users','action'=>'manage_newsletter','admin'=>true));
			 }
				
				
				
				}

	  public function admin_manage_offers1()
	 { $this->autoRender=false;
		 // $page=2;
	  $this->layout="admin";
	  $this->loadModel("Product");
	  $this->loadModel("User");
	 $this->Paginator->settings = array('Product' => array('limit' => 10,'order' =>'Product.id desc','conditions'=>array('Product.ad_type'=>4)));
		//$this->paginator['page']= 2;
	  $pr=$this->paginate('Product');
	  //$pr=$this->Product->paginate();
	  
	  $this->set(compact('pr'));
	  $this->render('/Users/admin_manage_products1');
	 }


	public function admin_messages2(){
		  $this->autoRender=false;
			 $this->layout='admin';
			 
			 $this->loadModel("Message");          
				$this->loadModel("MessageChat");          

			 
			 $this->Message->hasMany['MessageChat']['conditions'] = array('MessageChat.ans_status' => 0);
												$this->loadModel('MessageChat');           
			
			$msg=$this->MessageChat->find('list',array('fields'=>'message_id','conditions'=>array('MessageChat.ans_status' => 0)));            
		 
		  $msg=array_unique($msg);  
		  //echo"<pre>";print_r($msg);
			$mz=$this->Message->find('list',array('fields'=>'id','conditions'=>array('Message.ans_status'=>0)));
			  //echo"<pre>";print_r($mz);
			$final=array_merge($msg,$mz);
			  //echo"<pre>";print_r($final);
			$this->Paginator->settings = array('Message' => array('limit' => 10,'order'=>array('Message.id'=>'desc'),'contain'=>array('User','MessageChat')));
			 $messages=$this->paginate('Message',array('Message.id'=>$final));
		   //echo"<pre>";print_r($messages);die;
			$count=count($messages);		
			 $this->set(compact('messages','count'));
			 $this->render('/Users/admin_messages');
			 }      
	
	 function admin_forgot_password(){
		$this->loadModel('Admin');
		
		$data=$this->data['Admin']['username'];
		//echo $data;
		$email=$this->Admin->find('first',array('conditions'=>array('Admin.email'=>$data)));
		//pr($email);die;
		if(empty($email)){
			$this->Session->write('error','Email address does not exist. Please enter correct email.');
			$this->redirect($this->referer());
			}
			else{
				
				$password_reset=$email['Admin']['password'];
				$username=$email['Admin']['username'];
				 $user_email=$email['Admin']['email']; 
				// $link = '<a href="'.HTTP_ROOT.'admin/users/login'.'" target="_blank">Click here to go to page</a>';
				 $replace = array('{[DomainPath]}','{[user_email]}','{[password_reset]}','{[username]}');
				 $with = array($_SERVER['HTTP_HOST'],$user_email,$password_reset,$username);      
				 $this->send_email($replace,$with,'forgot_admin_password',NO_REPLY,$user_email);
				 $this->Session->write('success','Password send to email address');
			 $this->redirect($this->referer());
				}
		}



  function admin_informational_video(){
	  $this->layout='admin';
	  $this->loadModel('InformationalVideo');
	  $infor=$this->InformationalVideo->find('first');
	  $this->set(compact('infor'));
	  
	  
	  }
  function admin_edit_inform_video($id=null)
	{
		$this->layout="admin";
		$id=convert_uudecode(base64_decode($id));
		 $this->loadModel('InformationalVideo');
		$inform=$this->InformationalVideo->find('first', array('conditions'=>array('InformationalVideo.id'=>$id)));
		$this->set('inform',$inform);
		$this->set('id',$id);
		$data=$this->data;
		 
		if(!empty($data))
		{
			$data['InformationalVideo']['id'] = $data['id'];
			//echo"<pre>";print_r($data);die;
			if($this->InformationalVideo->save($data))
			{
				$this->Session->setFlash('Video Link has been updated successfully.','success');
				$this->redirect(array('action'=>'admin_informational_video'));
			}
			else
			{
				$this->Session->setFlash('failed in updating.','error');
				$this->redirect($this->referer());
			}
		}
		
	}
  
	function admin_business_mail()
			{
		  $this->layout="admin";
		  $this->loadModel('Send');
		  $this->Paginator->settings = array('Send' => array('limit' => 5));
	$mails=$this->paginate('Send');
		$this->set(compact('mails'));
		}
		
	function admin_delete_mail($id=null){
			  
		$this->loadModel('Send');
		$id=convert_uudecode(base64_decode($id));
		if($this->Send->delete($id)){
		$this->Session->setFlash('Email is Deleted');
		$this->redirect(array('action'=>'business_mail'));
		}else{
		$this->Session->setFlash('Error in deleting');
		$this->redirect($this->referer());
		}     
		}
		
  function admin_view_mail($id=null)
  {
	$this->layout='admin';
   $this->loadModel('Send');
   $id=convert_uudecode(base64_decode($id));
   $view=$this->Send->find('first',array('conditions'=>array('Send.id'=>$id)));
   $this->set(compact('view'));
	
	} 


	function admin_business_category_status($id=null){
		 
	 $this->loadModel('BusinessCategory');
	 $id=convert_uudecode(base64_decode($id));
	 //echo $id;die;
	 $this->BusinessCategory->id=$id;
	 
	 $data=$this->BusinessCategory->find('first',array('conditions'=>array('BusinessCategory.id'=>$id),'fields'=>array('BusinessCategory.status')));
	 $status=$data['BusinessCategory']['status'];
	 //echo $status;die;
	 if($status==1){
		 
		
		 if($this->BusinessCategory->savefield('status',0))
		 $this->Session->setFlash('Status Updated Successfully');
					$this->redirect($this->referer());
		 }
		 else{
			 if($this->BusinessCategory->saveField('status',1))
			
			 $this->Session->setFlash('Status Updated Successfully');
					$this->redirect($this->referer());
			 }
	 
	 }

		function admin_product_category_status($id=null){
		 
	 $this->loadModel('Category');
	 $id=convert_uudecode(base64_decode($id));
	 //echo $id;die;
	 $this->Category->id=$id;
	 
	 $data=$this->Category->find('first',array('conditions'=>array('Category.id'=>$id),'fields'=>array('Category.status')));
	 $status=$data['Category']['status'];
	 //echo $status;die;
	 if($status==1){
		 
		
		 if($this->Category->savefield('status',0))
		 $this->Session->setFlash('Status Updated Successfully');
					$this->redirect($this->referer());
		 }
		 else{
			 if($this->Category->saveField('status',1))
			
			 $this->Session->setFlash('Status Updated Successfully');
					$this->redirect($this->referer());
			 }
	 
	 }

 function admin_newsletter_subcribers()
			{
				$this->autoRender=false;
				$this->layout='admin';
				//$id=convert_uudecode(base64_decode($id));
				//echo $id;die;
				$this->loadModel('User');
				$this->Paginator->settings=array('User'=> array('conditions'=>array('User.newsletter_status'=>0),'limit'=>15,'fields'=>array('id','firstname','lastname','user_type','email','newsletter_status'),'contain'=>false));
				$subscriber=$this->paginate('User');
				//echo '<pre>';print_r($subscriber);die;
				
				$this->set(compact('subscriber'));
				$this->render('/Users/admin_send_newsletter');
			}




			 function admin_generate_csv_user($id=null)
	{
		$this->layout="admin";
  $this->autoRender=false;
		$this->loadModel('User');
	 $ids=explode("," ,$id);
	 $result=$this->User->find('all',array('conditions'=>array('User.id'=>$ids),'contain'=>array('State','City')));
		$data ="First Name,Last Name,Address,Title,Description,City,State,Country,Postcode,Phone,Telephone,Establish_in,Work_hours,Email,Status \n";
		foreach($result as $rslt)
		{
		if($rslt['User']['user_type']!="")
			{
					$data .=$rslt['User']['firstname'].",";
					$data .=$rslt['User']['lastname'].",";
				 $data .=$rslt['User']['address'].",";
			  $data .=$rslt['User']['title'].",";				 	
					$data .=$rslt['User']['description'].",";			
					$data .=$rslt['City']['city_name'].",";
					$data .=$rslt['State']['statename'].",";
					$data .='India'.",";
					$data .=$rslt['User']['zipcode'].",";
					$data .=$rslt['User']['phone'].",";
					$data .=$rslt['User']['telephone'].",";
					$data .=$rslt['User']['establish_in'].",";				 	
					$data .=$rslt['User']['work_hours'].",";			
					$data .=$rslt['User']['email'].",";
					if($rslt['User']['status']==0)
						{
							$data .="Inactive".",";
						}
					   else
						{
							$data .="Active".",";
						}
						$data .="\n";
					
		}
		}
   //echo '<pre>';print_r($data);die;
			header("Content-Type: application/csv");
			header("Content-type: application/octet-stream");
			$csv_filename = 'User_list'."_".date('M').date('dy').".csv";
			header("Content-Disposition:attachment;filename=$csv_filename");
			$fd = fopen ($csv_filename, "w");
			fputs($fd,$data);
			fclose($fd);  
			echo $data;
						die();
						
						
						
	}

	  function admin_dashboard_detail()
	{
  $this->layout="admin";		
		$this->loadModel("DashDetail");
		$dash=$this->DashDetail->find('first');
		$this->set(compact('dash'));		}
		
		function admin_view_dash_detail()
		{
   $this->layout="admin";
   $this->loadModel("DashDetail");			
		 $view_dash=$this->DashDetail->find('first');
		 //echo'<pre>';print_r($view_dash);die;
	$this->set(compact('view_dash'));			
			}
			
			function admin_edit_dash_detail($id=null)
			{
				$id=convert_uudecode(base64_decode($id));
				//echo $id;die;
	 $this->layout="admin";
	$this->loadModel("DashDetail");				
				$edit_dash=$this->DashDetail->find('first',array('conditions'=>array('DashDetail.id'=>$id)));
		 // echo'<pre>';print_r($edit_dash);die;
	$this->set(compact('edit_dash'));
	if(!empty($this->data))
   {
	$data=$this->data;
	//echo '<pre>';print_r($data);die;    	
	if($this->DashDetail->save($data))
	 {
		$this->Session->setFlash('Information has been updated');
		$this->redirect(array('action'=>'dashboard_detail'));
		}
		else    
	 {
		  $this->Session->setFlash('Error in updating');
		  $this->redirect(array('action'=>'dashboard_detail'));
		 }
	}
		}



function admin_buyer_tip()
		{
	$this->layout="admin";
	$this->loadModel("Meet");
	$meet_detail=$this->Meet->find('all');	 		
			 //echo '<pre>';print_r($meet_detail);die;
			$this->set(compact('meet_detail'));
		}
		
			public function admin_add_buyer_tip()
		{
	 $this->layout="admin";
	 $this->loadModel("Meet");
	 if(!empty($this->data))
	 {
	   $data=$this->data;
	   //echo '<pre>';print_r($data);die;
	   if($this->Meet->save($data))
		{
		   $this->Session->setFlash('Information has been added successfully');
		   $this->redirect(array('action'=>'buyer_tip'));     	
		}
		else 
		{
		   $this->Session->setFlash('Error in adding');
		   $this->redirect($this->referer());      		
		}     	
		}	 	
			}	
			
			
				 public function admin_delete_buyer_tip($id=null)
		  {
	  $this->layout="admin";
	  $this->loadModel("Meet");
	  $id=convert_uudecode(base64_decode($id));
	  //echo '<pre>';print_r($id);die; 	 	  	
			  if($this->Meet->delete($id))
			   {
			$this->Session->setFlash('Information has been deleted successfully');
		  $this->redirect(array('action'=>'buyer_tip'));      	   	
				}
				else
				{
				  $this->Session->setFlash('Error in deleting');
		  $this->redirect($this->referer());
				} 
			}	
			
			
				public function admin_edit_buyer_tip($id=null)
		 {
	  $this->layout="admin";
	  $this->loadModel("Meet");$this->Session->setFlash('CSV has been generated','success');
	  $id=convert_uudecode(base64_decode($id));
	  //echo '<pre>';print_r($id);die;
	  $edit_message=$this->Meet->find('first',array('conditions'=>array('Meet.id'=>$id)));	 	 	
			   //echo '<pre>';print_r($edit_message);die;
			   $this->set(compact('edit_message'));
			   if(!empty($this->data))
				{
		 $data=$this->data;
		 //echo '<pre>';print_r($data);die;
		 if($this->Meet->save($data))
		  {
			$this->Session->setFlash('Information has been updated');
		   $this->redirect(array('action'=>'buyer_tip'));   
			}
			else 
			{
				 $this->Session->setFlash('Error in updating');
			$this->redirect($this->referer());
		  }
					}
			}

	   function admin_safety_image()
		{
				  $this->layout="admin";
				  $this->loadModel("MeetImage");
				  $meet_image=$this->MeetImage->find('first');	 		
			  //echo '<pre>';print_r($meet_image);die;
			  $this->set(compact('meet_image'));
		}
			
			
			function admin_edit_safety_image($id=null)
	   {
		 $this->layout="admin";
		 $this->loadModel("MeetImage");
		 $id=convert_uudecode(base64_decode($id));
		 $edit_image=$this->MeetImage->find('first',array('conditions'=>array('MeetImage.id'=>$id)));
		 $this->set(compact('edit_image'));
		 if(!empty($this->data))
		 {
			$data=$this->data;
			if(!empty($_FILES['vid']['name']))
			{
			App::Import('Component','UploadComponent');
				$upload= new UploadComponent();
				$imgName=pathinfo($_FILES['vid']['name']);
		   $ext=$imgName['extension'];
		   $newImgName = rand(10,100000);
		   $tempFile = $_FILES['vid']['tmp_name'];
		   $destination = realpath('../webroot/img'). '/';
		   $image=$this->MeetImage->find('first',array('conditions'=>array('MeetImage.id'=>$data['MeetImage']['id']),'fields'=>'image'));
		   if(is_uploaded_file($_FILES['vid']['tmp_name']))
			{
			  unlink($destination.$image['MeetImage']['image']);
			  $src = $_FILES['vid']['tmp_name'];
			  list( $width, $height, $source_type ) = getimagesize($src);
			   if ($width <= 379 && $height <= 321)
				  {
					move_uploaded_file($_FILES['vid']['tmp_name'],$destination.$newImgName.".".$ext);
				  }
				  else
							 {
								  $this->Resize->resize($_FILES['vid']['tmp_name'],$destination.$newImgName.".".$ext,'as_define',379,321,0,0,0,0);
							 }
						  }
						 $data['MeetImage']['image']=$newImgName.".".$ext;	  
			 }     
			
				 if($this->MeetImage->save($data))
					{
						$this->Session->setFlash('Image has been updated successfully');
					  $this->redirect(array('action'=>'safety_image'));	
					}
					else 
						{
						  $this->Session->setFlash('Error in editing','flash_error');
						  $this->redirect($this->referer());
						}
			
			   }
		   }


		  function admin_email_verify($email=null)
		   {
			 $this->loadModel('User');
			 if($this->RequestHandler->isAjax())
			 {
				$match=$this->User->find('count',array('conditions'=>array('User.email'=>$email)));
				if($match>0)
				{
			   echo 'exist';die;             		
					}
				else
				{
			  echo 'not exist';die;             		
				}
			 
				}          	
			}
	function admin_followus(){
	  $this->layout='admin';
	  $this->loadModel('FollowUs');
	  $follows=$this->FollowUs->find('all');
	  $this->set(compact('follows'));
	  
	  
	  }
  function admin_edit_followus($id=null)
	{
		$this->layout="admin";
		$id=convert_uudecode(base64_decode($id));
		 $this->loadModel('FollowUs');
		$follow=$this->FollowUs->find('first', array('conditions'=>array('FollowUs.id'=>$id)));
		$this->set('follow',$follow);
		$data=$this->data;
		 
		if(!empty($data))
		{
			
			//echo"<pre>";print_r($data);die;
			if($this->FollowUs->save($data))
			{
				$this->Session->setFlash('Link has been updated successfully.','success');
				$this->redirect(array('action'=>'admin_followus'));
			}
			else
			{
				$this->Session->setFlash('failed in updating.','error');
				$this->redirect($this->referer());
			}
		}
		
	}



 function admin_csv()
		{
			//configure::write('debug',0);
			$this->layout='admin';
				$this->autoRender=false;
			$this->loadModel('User');
			$this->loadModel('City');
		//echo "<pre>";print_r($_FILES);die;
			if(!empty($_FILES['data']))
		{   //echo 'hi';die;  
	   
			$row=1;
			  if (($handle = fopen($_FILES['data']['tmp_name'],"r")) !== FALSE)
			
			{
			   
				//echo '<pre>';print_r($handle);die;
				while (($data = fgetcsv($handle, 1000,",")) !== FALSE)
				{
				   
			   
					if($row==1)
					{
						$row++;
						continue;   
					}   
			//echo'<pre>';print_r($data);die;
			$csv['User']['product_id']='NULL';
			
			$csv['User']['firstname']=$data[0];
			
			$csv['User']['lastname']=$data[1];
			$csv['User']['user_type']=1;
			$csv['User']['address']=$data[2];
			$csv['User']['avg_rating']='NULL';
			$csv['User']['title']=$data[3];
					 $csv['User']['description']=$data[4];
					 $city_id=$this->City->find('first',array('conditions'=>array('City.city_name'=>$data[5])));
					 //echo '<pre>';print_r($city_name);die;
					 $csv['User']['city_id']=$city_id['City']['id'];
					 $csv['User']['state_id']=$city_id['City']['state_id'];
			$csv['User']['country']='India';
			$csv['User']['zipcode']=$data[8];
			$csv['User']['phone']=$data[9];
			$csv['User']['telephone']=$data[10];	
			$csv['User']['establish_in']=$data[11];
			$csv['User']['work_hours']=$data[12];
			$email=$this->User->find('count',array('conditions'=>array('User.email'=>$data[13])));
			if($email>0)
			{
			$this->Session->setFlash('Email Id already exist');
			$this->redirect($this->referer());           	
			}
			$csv['User']['email']=$data[13];
			$csv['User']['cemail']=$csv['User']['email'];
			$csv['User']['decode_password']='NULL';
			$csv['User']['password'] = 'NULL';
				$csv['User']['cpassword'] = 'NULL';  
			$csv['User']['status']=0; 
			$csv['User']['verify_status']=0; 
			$csv['User']['featured']=0; 
			$csv['User']['newsletter_status']=0; 
			echo '<pre>';print_r($csv);die;
			$this->User->create();
			$this->User->save($csv,array('validate'=>false));
			}
		}
	fclose($handle);
		
	}
	 $this->Session->setFlash('CSV added successfully');	
  $this->redirect(array('controller'=>'users','action'=>'business'));  
}





function admin_generate_csv_indiv($id=null)
	{
		$this->layout="admin";
  $this->autoRender=false;
		$this->loadModel('User');
	 $ids=explode("," ,$id);
	 $result=$this->User->find('all',array('conditions'=>array('User.id'=>$ids),'contain'=>array('State','City')));
		$data ="First Name,Last Name,Address,City,State,Country,Postcode,Phone,Telephone,Email,Status \n";
		foreach($result as $rslt)
		{
		if($rslt['User']['user_type']!="")
			{
					$data .=$rslt['User']['firstname'].",";
					$data .=$rslt['User']['lastname'].",";
				 $data .=$rslt['User']['address'].",";
				$data .=$rslt['City']['city_name'].",";
					$data .=$rslt['State']['statename'].",";
					$data .='India'.",";
					$data .=$rslt['User']['zipcode'].",";
					$data .=$rslt['User']['phone'].",";
					$data .=$rslt['User']['telephone'].",";
					$data .=$rslt['User']['email'].",";
					if($rslt['User']['status']==0)
						{
							$data .="Inactive".",";
						}
					   else
						{
							$data .="Active".",";
						}
						$data .="\n";
		}
		}
   //echo '<pre>';print_r($data);die;
			header("Content-Type: application/csv");
			header("Content-type: application/octet-stream");
			$csv_filename = 'User_list'."_".date('M').date('dy').".csv";
			header("Content-Disposition:attachment;filename=$csv_filename");
			$fd = fopen ($csv_filename, "w");
			fputs($fd,$data);
			fclose($fd);  
			echo $data;
   die();
						
						
						
	}	
	

function admin_payment_price(){
	$this->layout="admin";
	$this->loadModel('PaymentPrice');
	$payments=$this->PaymentPrice->find('all');
	$this->set('payment',$payments);  
	  
	}
	
	  function admin_edit_payment($id=null)
	{
		$this->layout="admin";
		$id=convert_uudecode(base64_decode($id));
		 $this->loadModel('PaymentPrice');
		$payments=$this->PaymentPrice->find('first', array('conditions'=>array('PaymentPrice.id'=>$id)));
		$this->set('payments',$payments);
		$data=$this->data;
		 
		if(!empty($data))
		{
			
			//echo"<pre>";print_r($data);die;
			if($this->PaymentPrice->save($data))
			{
				$this->Session->setFlash('Price has been updated successfully.','success');
				$this->redirect(array('action'=>'admin_payment_price'));
			}
			else
			{
				$this->Session->setFlash('failed in updating.','error');
				$this->redirect($this->referer());
			}
		}
		
	}

	function admin_transaction_details(){
		$this->layout='admin';
		$this->loadModel('TransactionDetail');
			$this->Paginator->settings = array('TransactionDetail' => array('limit' => 10,'order'=>array('TransactionDetail.id'=>'desc')));
		   $transactions=$this->paginate('TransactionDetail');
		$this->set(compact('transactions'));	
		}



}
?>
