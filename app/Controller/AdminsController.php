<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('Controller', 'Controller');
App::uses('CakeEmail', 'Network/Email');
/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AdminsController extends AppController {
	
	public $components = array('Session','Email','RequestHandler','Cookie','Paginator');
	public $helpers = array('Session','Html');
    var $layout = 'admin';
    var $uses = array('Admin');
    public function beforeFilter()
    {
        parent::beforeFilter();
        $actions = array('login','forgetPassword');
        if(!in_array($this->params['action'], $actions))
        {
            if(!$this->Session->check('Admin') )
            {
            	$this->redirect(array('action'=>'login'));
        	}
   		}else{
   			if($this->Session->check('Admin'))
            {
            	$this->redirect(array('action'=>'dashboard'));
        	}
   		}

        $adminDetails = $this->Admin->findById($this->Session->read('Admin.id'));
        $this->set(compact('adminDetails'));

        $subadminBlockedAction = array('manageSubadmin','editsubadmin','addSubadmin','deletesubadmin');

        if(!empty($adminDetails['Admin']['type']) && $adminDetails['Admin']['type'] == '1')
        {
            if(in_array($this->params['action'], $subadminBlockedAction))
                {
                    $this->Session->write('adminerror-msg','You are not authorized to view this page!!!');
                    $this->redirect(array('action'=>'dashboard'));
                 
                }   
        }
  

    }

    public function login() 
    {
       $this->layout="adminLoginLayout";
        $this->loadModel('Admin');
        if($this->request->is('post')) 
        {
        	
            $data['Admin'] = $this->data['Admin'];

            $data['Admin']['password'] = md5($data['Admin']['password']);
            $result = $this->Admin->find('first',array('conditions'=>array('OR'=>array(array('Admin.username'=>$data['Admin']['name']),array('Admin.email'=>$data['Admin']['name'])),'Admin.password'=>$data['Admin']['password'])));
            if(count($result)>0)
            {	//pr($this->data['remember']);die;
            	if($this->data['remember'] == '1'){

            	}
				$this->Session->write('Admin',$result['Admin']);
				$result['Admin']['current_ip'] = $_SERVER['REMOTE_ADDR'];
				$result['Admin']['current_access']  = date("Y-m-d H:i:s");
				//pr($result);die;
				$this->Admin->save($result);    
				$this->redirect(array('action'=>'dashboard'));
                    
            }else
            {
                $this->Session->write('loginerror-msg','Incorrect Username/Email or Password');
                $this->redirect(array('controller'=>'Admins','action'=>'login'));
                        
            }
                 
        }
    }

    public function logout() 
    {
        $this->layout="";
        $result = $this->Admin->findById($this->Session->read('Admin.id'));
        $result['Admin']['last_ip'] = $_SERVER['REMOTE_ADDR'];
        $result['Admin']['last _access']  = $result['Admin']['current_access'];
        $result['Admin']['online']  = '0';
        $this->Admin->save($result);
        $this->Session->delete('Admin');
        $this->redirect(array('controller'=>'Admins','action' => 'login'));
        
    }

    public function forgetPassword()
    {
        $this->loadModel('Admin');
		
		//pr($this->data);die;
		$email = $this->data['email'];
        $checkEmail = $this->Admin->findByEmail($email);
        if (!empty( $checkEmail)) 
        {
			$password = $this->RandomStringGenerator();
			$encryptPassword = md5($password);
			$this->Admin->id = $checkEmail['Admin']['id'];
			$this->Admin->saveField('password',$encryptPassword);
			/*$Email = new CakeEmail();
			//$Email->viewVars(array('value' => $p,'value2'=>$email1,'value3'=>$email3['User']['name']));//echo $link;die;



			$Email->template('forgotmail')
			$Email->emailFormat('html')
			$Email->from(array('info@Formsadda.com' => 'Formsadda'));
			$Email->to($email);
			$Email->subject('Account Password');
			$Email->send('Your new password is'.$password);*/
			$this->Session->write('forgetpassword-msg','Password sent to given email. Please check.');
        	$this->redirect(array('action' => 'login'));
        } else {
            $this->Session->write('forgetpassword-msg',"Email doesn't exist. Please contact to Admin.");
        	$this->redirect(array('action' => 'login'));
        }
        
    }

    public function admin_coupons($couponId = null)
    {
        $this->loadModel('Coupon');
            
    }

    public function getCode()
    {
        $code = $this->CapitalRandomStringGenerator(8);
        echo $code;die;
    }

    public function dashboard()
    {
    	
    }

    public function editAdmin()
    {
        $admin = $this->Admin->findById($this->Session->read('Admin.id'));
        $this->set(compact('admin'));
        if($this->request->is('post'))
        {
            $data = $this->data;
            $data['Admin']['id'] = $this->Session->read('Admin.id');
            
            if (!empty($_FILES['image']['tmp_name'])) 
            {
                $destination = realpath('../webroot/img/adminImages/small/') . '/';
                $destination1 = realpath('../webroot/img/adminImages/large/') . '/';
                $image = $this->Components->load('Resize');  

                if(is_uploaded_file($_FILES['image']['tmp_name']))
                {
                    
                    $filenameimg = time().'-'.$_FILES['image']['name'];
                    $image->resize($_FILES['image']['tmp_name'],$destination.$filenameimg,'aspect_fill',50,50,0,0,0,0);
                    
                    move_uploaded_file($_FILES['image']['tmp_name'], $destination1 . $filenameimg);
                    $data['Admin']['image']=$filenameimg;
                    
                    
                }
            }
            
            if($this->Admin->save($data))
                $this->Session->write('adminsuccess-msg','Admin details updated successfully.');
            else            
                $this->Session->write('adminerror-msg','Something went wrong,Please try again later!!!');
                $this->redirect(array('action' => 'editAdmin'));
        }
    }

    public function ChangePasswordAdmin()
    {
        if($this->request->is('post'))
        {
            //pr($this->data);
            $data['Admin']['password'] = md5($this->data['password']);
            $data['Admin']['id'] = $this->Session->read('Admin.id');
            //pr($data);die;
            $this->Admin->save($data);
            $this->Session->write('adminsuccess-msg','Password change successfully.');
            $this->redirect(array('action' => 'dashboard'));


        }
    }

    public function checkPassword()
    {
        $password = md5(trim($this->data['oldpassword']));
        $checkPassword = $this->Admin->findByPassword($password);
        if(!empty($checkPassword))
            echo 'true';
        else
            echo 'false';
        die;
        
    }

    public function checkEmail()
    {
        $email = trim($this->data['Admin']['email']);
        $checkEmail = $this->Admin->findByEmail($email);
        if(!empty($checkEmail))
            echo 'false';
        else
            echo 'true';
        die;
        
    }

    public function manageSubadmin(){
        $subadmins = $this->Admin->findAllByType('1');
        $this->set(compact('subadmins'));
    }

    public function deletesubadmin($id = null)
    {
        
        if($this->Admin->delete($id))
            $this->Session->write('adminsuccess-msg','SubAdmin deleted successfully.');
        else            
            $this->Session->write('adminerror-msg','Something went wrong,Please try again later!!!');
            $this->redirect(array('action' => 'manageSubadmin'));
    }

    public function editsubadmin($id = null)
    {
        $admin = $this->Admin->findById($id);
        $this->set(compact('admin'));
        if($this->request->is('post'))
        {
            $data = $this->data;
            
            if (!empty($_FILES['image']['tmp_name'])) 
            {
                $destination = realpath('../webroot/img/adminImages/small/') . '/';
                $destination1 = realpath('../webroot/img/adminImages/large/') . '/';
                $image = $this->Components->load('Resize');  

                if(is_uploaded_file($_FILES['image']['tmp_name']))
                {
                    
                    $filenameimg = time().'-'.$_FILES['image']['name'];
                    $image->resize($_FILES['image']['tmp_name'],$destination.$filenameimg,'aspect_fill',50,50,0,0,0,0);
                    
                    move_uploaded_file($_FILES['image']['tmp_name'], $destination1 . $filenameimg);
                    $data['Admin']['image']=$filenameimg;
                    
                    
                }
            }
            
            if($this->Admin->save($data))
                $this->Session->write('adminsuccess-msg','SubAdmin details updated successfully.');
            else            
                $this->Session->write('adminerror-msg','Something went wrong,Please try again later!!!');
                $this->redirect(array('action' => 'manageSubadmin'));
        }
    }

    public function addSubadmin($id = null)
    {
        if($this->request->is('post') && !empty($this->data))
        {
            $data = $this->data;
            $data['Admin']['password'] = md5($this->data['Admin']['password']);
            if (!empty($_FILES['image']['tmp_name'])) 
            {
                $destination = realpath('../webroot/img/adminImages/small/') . '/';
                $destination1 = realpath('../webroot/img/adminImages/large/') . '/';
                $image = $this->Components->load('Resize');  

                if(is_uploaded_file($_FILES['image']['tmp_name']))
                {
                    
                    $filenameimg = time().'-'.$_FILES['image']['name'];
                    $image->resize($_FILES['image']['tmp_name'],$destination.$filenameimg,'aspect_fill',50,50,0,0,0,0);
                    
                    move_uploaded_file($_FILES['image']['tmp_name'], $destination1 . $filenameimg);
                    $data['Admin']['image']=$filenameimg;
                    
                    
                }
            }else{
                $data['Admin']['image']='adminDefault.png';
            }
            
            if($this->Admin->save($data))
                $this->Session->write('adminsuccess-msg','SubAdmin added successfully.');
            else            
                $this->Session->write('adminerror-msg','Something went wrong,Please try again later!!!');
                $this->redirect(array('action' => 'manageSubadmin'));
        }
    }

    public function findState($country_id=null){
        $this->loadModel("State");
        $data = $this->State->find('all', array('conditions' => array('State.country_id' => $country_id)));
        if(!empty($data)){
            $state = '<option>Select State</option>';
            foreach ($data as $da) {
                $state .= '<option value="'.$da['State']['id'].'">'.$da['State']['statename'].'</option>';
            }
            echo json_encode($state);die;
        }
        
    }
    public function findCity($state_id=null){
        $this->loadModel("City");
        $data = $this->City->find('all', array('conditions' => array('City.state_id' => $state_id)));
        if(!empty($data)){
            $state = '<option>Select City</option>';
            foreach ($data as $da) {
                $state .= '<option value="'.$da['City']['id'].'">'.$da['City']['city_name'].'</option>';
            }
            echo json_encode($state);die;
        }
        
    }
    public function delete($model = null, $id = null)
    {
        $this->loadModel($model);
        $CategoryId = base64_decode($id);
        $this->$model->delete($CategoryId);
        $this->redirect($this->referer());
    }
    public function manageCountry(){
        $this->loadModel("Country");
        $countries = $this->Country->find('all');
        $this->set(compact('countries'));
    }

    public function addCountry(){
        $this->loadModel("Country");
        if($this->request->is('post') && !empty($this->data))
        {
            $data = $this->data;
            if($this->Country->save($data))
                $this->Session->write('adminsuccess-msg','Country added successfully.');
            else            
                $this->Session->write('adminerror-msg','Something went wrong,Please try again later!!!');
                $this->redirect(array('action' => 'manageCountry'));
        }
    }

    public function manageState(){
        $this->loadModel("State");
        $this->State->bindModel(
        array('belongsTo' => array(
                'Country' => array(
                    'className' => 'Country',
                    'foreignKey' => 'country_id'
                    )
                )
            )
        );
        $countries = $this->State->find('all');
        $this->set(compact('countries'));
    }
    public function addState(){
        $this->loadModel("Country");
        $this->loadModel("State");
        $country = $this->Country->find('all');
        $this->set(compact('country'));
        if($this->request->is('post') && !empty($this->data))
        {
            $data = $this->data;
            if($this->State->save($data))
                $this->Session->write('adminsuccess-msg','State added successfully.');
            else            
                $this->Session->write('adminerror-msg','Something went wrong,Please try again later!!!');
                $this->redirect(array('action' => 'manageState'));
        }
    }

    public function manageCity(){
        $this->loadModel("City");
        $this->City->bindModel(
        array('belongsTo' => array(
                'State' => array(
                    'className' => 'State',
                    'foreignKey' => 'state_id'
                    )
                )
            )
        );
        //$countries = $this->City->find('all');
        $this->Paginator->settings = array('City' => array('limit' => 10));
        $countries=$this->paginate('City');
        $this->set(compact('countries'));
    }
    public function addCity(){
        $this->loadModel("Country");
        $this->loadModel("City");
        $this->loadModel("State");
        $country = $this->Country->find('all');
        $this->set(compact('country'));
        if($this->request->is('post') && !empty($this->data))
        {
            $data = $this->data;
            if($this->City->save($data))
                $this->Session->write('adminsuccess-msg','City added successfully.');
            else            
                $this->Session->write('adminerror-msg','Something went wrong,Please try again later!!!');
                $this->redirect(array('action' => 'manageCity'));
        }
    }

}
