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
class CollegesController extends AppController {
	
	public $components = array('Session','Email','RequestHandler','Cookie','Paginator');
	public $helpers = array('Session','Html');
    var $layout = 'admin';
    var $uses = array('Admin','College','CollegeMeta','Facility','CollegeFacility','CollegeNear','CollegeCourse','Degree');
    public function beforeFilter()
    {
        parent::beforeFilter();
        $actions = array('login','forgetPassword');
        if(!in_array($this->params['action'], $actions))
        {
            if(!$this->Session->check('Admin') )
            {
            	$this->redirect(array('controller'=>'Admins','action'=>'login'));
        	}
   		}else{
   			if($this->Session->check('Admin'))
            {
            	$this->redirect(array('controller'=>'Admins','action'=>'dashboard'));
        	}
   		}

        $adminDetails = $this->Admin->findById($this->Session->read('Admin.id'));
        $this->set(compact('adminDetails'));
  

    }
    public function delete($model = null, $id = null)
    {
        $this->loadModel($model);
        $CategoryId = base64_decode($id);
        $this->$model->delete($CategoryId);
        $this->redirect($this->referer());
    }
    
    public function manageCollege(){
        $this->Paginator->settings = array('College' => array('limit' => 10));
        $colleges=$this->paginate('College');
        $colleges = $this->College->find('all');
        $this->set(compact('colleges'));
    }

    public function addCollege()
    {
        $this->loadModel("Country");
       /* $this->loadModel("CollegeForm");
        $this->loadModel("Form");*/
        $country = $this->Country->find('all');
        $this->set(compact('country'));
        if($this->request->is('post') && !empty($this->data))
        {
            $data = $this->data;
            //pr($_FILES);
            //pr($data);die;
            $data['College']['password'] = md5($this->data['College']['password']);
            if (!empty($_FILES['image']['tmp_name'])) 
            {
                $destination = realpath('../webroot/img/collegeImages/small/') . '/';
                $destination1 = realpath('../webroot/img/collegeImages/large/') . '/';
                $image = $this->Components->load('Resize');  

                if(is_uploaded_file($_FILES['image']['tmp_name']))
                {
                    
                    $filenameimg = time().'-'.$_FILES['image']['name'];
                    $image->resize($_FILES['image']['tmp_name'],$destination.$filenameimg,'aspect_fill',50,50,0,0,0,0);
                    
                    move_uploaded_file($_FILES['image']['tmp_name'], $destination1 . $filenameimg);
                    $data['College']['image']=$filenameimg;
                    
                    
                }
            }else{
                $data['College']['image']='collegeDefault.jpg';
            }
            /*$formdata = $this->Form->find('list',array('conditions'=>array('college_id'=>'0','fields'=>'id')));
            $this->UserImage->saveAll($formdata);*/
            if($this->College->save($data))
                $this->Session->write('adminsuccess-msg','College added successfully.');
            else            
                $this->Session->write('adminerror-msg','Something went wrong,Please try again later!!!');
                $this->redirect(array('action' => 'manageCollege'));
        }
    }

    public function editCollege($id=null)
    {
        $this->loadModel("Country");
        $country = $this->Country->find('all');
        $this->College->bindModel(
        array('belongsTo' => array(
                'State' => array(
                    'className' => 'State',
                    'foreignKey' => 'state_id'
                    )
                )
            )
        );
        $this->College->bindModel(
        array('belongsTo' => array(
                'City' => array(
                    'className' => 'City',
                    'foreignKey' => 'city_id'
                    )
                )
            )
        );
        $college = $this->College->findById($id);
        //pr($college);die;
        $collegeId = $id;
        $CollegeNear = $this->CollegeNear->findByCollegeId($collegeId);
        $facility = $this->Facility->findById($id);
        $collegeMeta = $this->CollegeMeta->findByCollegeId($collegeId);
        $this->set(compact('collegeMeta'));
        $this->set(compact('facility'));
        $this->set(compact('CollegeNear','collegeId'));
        $this->set(compact('college','country'));
       /* pr($this->request);
        pr($this->data);
        pr($_POST);
        pr($_GET);
        echo "hi";die;*/

        if($this->request->is('post') && !empty($this->data))
        {
            $data = $this->data;
            if (!empty($_FILES['image']['tmp_name'])) 
            {
                $destination = realpath('../webroot/img/collegeImages/small/') . '/';
                $destination1 = realpath('../webroot/img/collegeImages/large/') . '/';
                $image = $this->Components->load('Resize');  

                if(is_uploaded_file($_FILES['image']['tmp_name']))
                {
                    
                    $filenameimg = time().'-'.$_FILES['image']['name'];
                    $image->resize($_FILES['image']['tmp_name'],$destination.$filenameimg,'aspect_fill',50,50,0,0,0,0);
                    
                    move_uploaded_file($_FILES['image']['tmp_name'], $destination1 . $filenameimg);
                    $data['College']['image']=$filenameimg;
                    
                    
                }
            }
            
            if($this->College->save($data)){
                echo "true";
                die;
               // $this->Session->write('adminsuccess-msg','College updated successfully.');

            }else{           
                echo "false";
                die;
               /* $this->Session->write('adminerror-msg','Something went wrong,Please try again later!!!');
                $this->redirect(array('action' => 'manageCollege'));*/
            }
        }
    }

    public function checkCollegeEmail()
    {
        $email = trim($this->data['College']['email']);
        $checkEmail = $this->College->findByEmail($email);
        if(!empty($checkEmail))
            echo 'false';
        else
            echo 'true';
        die;
        
    }

    public function manageFacility(){
        $this->loadModel('Facility');
         $this->Paginator->settings = array('Facility' => array('limit' => 10));
        $facilities=$this->paginate('Facility');
        $this->set(compact('facilities'));
    }

    public function addFacility($id = null){
        $this->loadModel("Facility");
        if(!empty($id)){
            $facility = $this->Facility->findById($id);
            $this->set(compact('facility'));
        }
        if($this->request->is('post') && !empty($this->data))
        {
            $data = $this->data;
            if($this->Facility->save($data))
                $this->Session->write('adminsuccess-msg','Facility added successfully.');
            else            
                $this->Session->write('adminerror-msg','Something went wrong,Please try again later!!!');
                $this->redirect(array('action' => 'manageFacility'));
        }
    }

    public function collegeAbout($collegeId = null){
        $collegeMeta = $this->CollegeMeta->findByCollegeId($collegeId);
        $this->set(compact('collegeMeta','collegeId'));
        if($this->request->is('post')){
            $data = $this->data;
            if($this->CollegeMeta->save($data)){
                echo "true";die;
                //$this->Session->write('adminsuccess-msg','College About Updated successfully.');
            }
            else {
                echo "false";die;
            }           
               /* $this->Session->write('adminerror-msg','Something went wrong,Please try again later!!!');
                $this->redirect(array('action' => 'manageCollege'));*/
            
        }
    }

    public function collegeFacility($collegeId = null,$collegeFacilityId = null){
        $this->CollegeFacility->bindModel(
        array('belongsTo' => array(
                'Facility' => array(
                    'className' => 'Facility',
                    'foreignKey' => 'facility_id'
                    )
                )
            )
        );
        $this->Paginator->settings = array('CollegeFacility' => array('limit' => 10,'conditions'=>array('CollegeFacility.college_id'=>$collegeId)));
        $CollegeFacilities=$this->paginate('CollegeFacility');
        if(!empty($collegeFacilityId)){
            $CollegeFacility = $this->CollegeFacility->findById($collegeFacilityId);
            //pr($CollegeFacility );die;
        }
        $facilities = $this->Facility->find('all');
        $this->set(compact('CollegeFacility','CollegeFacilities','collegeId','facilities'));
        if($this->request->is('post')){
            $data = $this->data;
            if($this->CollegeFacility->save($data))
                $this->Session->write('adminsuccess-msg','College Facility Updated successfully.');
            else            
                $this->Session->write('adminerror-msg','Something went wrong,Please try again later!!!');
                $this->redirect(array('action' => 'collegeFacility',$collegeId));
            
        }
    }

    public function collegeCourses($collegeId = null,$collegeCourseId = null){
        $this->CollegeCourse->bindModel(
        array('belongsTo' => array(
                'Degree' => array(
                    'className' => 'Degree',
                    'foreignKey' => 'degree_id'
                    )
                )
            )
        );
        $this->Paginator->settings = array('CollegeCourse' => array('limit' => 10));
        $CollegeCourses=$this->paginate('CollegeCourse');
        $allDegree = $this->Degree->find('all');
        if(!empty($collegeCourseId)){
            $CollegeCourse = $this->CollegeCourse->findById($collegeCourseId);
            //pr($CollegeFacility );die;
        }
        $this->set(compact('CollegeCourses','allDegree','CollegeCourse','collegeId'));
        if($this->request->is('post')){
            $data = $this->data;
            if($this->CollegeCourse->save($data))
                $this->Session->write('adminsuccess-msg','College Courses Updated successfully.');
            else            
                $this->Session->write('adminerror-msg','Something went wrong,Please try again later!!!');
                $this->redirect(array('action' => 'collegeCourses',$collegeId));
            
        }  
    }
    public function collegeNear($collegeId = null){
       
        if($this->request->is('post')){
            $data = $this->data;
            if($this->CollegeNear->save($data)){
                echo "true";die;
                //$this->Session->write('adminsuccess-msg','College Near Updated successfully.');
            }
            else{
                echo "false";die;
            }
                /*$this->Session->write('adminerror-msg','Something went wrong,Please try again later!!!');
                $this->redirect(array('action' => 'manageCollege'));*/
            
        }
    }

    public function manageDegree($degreeId = null){
        $this->Paginator->settings = array('Degree' => array('limit' => 10));
        $degrees=$this->paginate('Degree');
        if(!empty($degreeId)){
            $degree = $this->Degree->findById($degreeId);
            //pr($CollegeFacility );die;
        }
        $this->set(compact('degree','degrees'));
        if($this->request->is('post')){
            $data = $this->data;
            if($this->Degree->save($data))
                $this->Session->write('adminsuccess-msg','Degree added successfully.');
            else            
                $this->Session->write('adminerror-msg','Something went wrong,Please try again later!!!');
                $this->redirect(array('action' => 'manageDegree'));
            
        }  
    }

}
