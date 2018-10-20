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
class FormsController extends AppController {
	
	public $components = array('Session','Email','RequestHandler','Cookie','Paginator');
	public $helpers = array('Session','Html');
    var $layout = 'admin';
    var $uses = array('Admin','Form','FormMeta','CollegeForm');
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
   
    public function manageForm(){
        $this->Paginator->settings = array('Form' => array('limit' => 10,'conditions'=>array('Form.college_id'=>0)));
        $allFields=$this->paginate('Form');
        $this->set(compact('allFields'));
    }

    public function addField($formId = null){
        if(!empty($formId)){
            $form = $this->Form->findById($formId);
            $this->set(compact('form'));
        }
        if($this->request->is('post') && !empty($this->data))
        {
            $data = $this->data;
            if($this->Form->save($data))
                $this->Session->write('adminsuccess-msg','Field added successfully.');
            else            
                $this->Session->write('adminerror-msg','Something went wrong,Please try again later!!!');
                $this->redirect(array('action' => 'manageForm'));
        }
    }

    public function manageOption($formId = null){
        $alloption = $this->FormMeta->findAllByFormId($formId);
        $this->set(compact('alloption','formId'));
        if($this->request->is('post') && !empty($this->data))
        {
            $data = $this->data;
            $formdata = $this->Form->findById($formId);
            $data['FormMeta']['form_id'] = $formId;
            $data['FormMeta']['college_id'] = $formdata['Form']['college_id'];

            if($this->FormMeta->save($data))
                $this->Session->write('adminsuccess-msg','Field added successfully.');
            else            
                $this->Session->write('adminerror-msg','Something went wrong,Please try again later!!!');
                $this->redirect(array('action' => 'manageOption',$formId));
        }
    }

    public function viewForm(){
        $this->Form->bindModel(
        array('hasMany' => array(
                'FormMeta' => array(
                    'className' => 'FormMeta',
                    'foreignKey' => 'form_id'
                    )
                )
            )
        );
        $allfields = $this->Form->findAllByCollegeId('0');
        //pr($allfields);die;
        $this->set(compact('allfields'));
        if($this->request->is('post')){
            $data = $this->data;
           // pr($data);die;
        }
    }

    public function collegeForm($collegeId = null){
        $this->Form->bindModel(
        array('hasOne' => array(
                'CollegeForm' => array(
                    'className' => 'CollegeForm',
                    'foreignKey' => 'form_id',
                    'conditions' => array('CollegeForm.college_id' => $collegeId)
                    )
                )
            )
        );
        $allfields =  $this->Form->find('all',array('conditions'=>array('Form.college_id'=>array('0',$collegeId))));
        $this->set(compact('allfields','collegeId'));
        if($this->request->is('post')){
            $data = $this->data;
            foreach($data as $field){
                if(!empty($field['CollegeForm']['form_id'])){
                    $this->CollegeForm->create();
                    $this->CollegeForm->save($field);
                }
            }
            $this->redirect(array('action'=>'collegeForm',$collegeId));
        
        }
    }

    public function addCustomField($CollegeId = null){
        if(!empty($formId)){
            $form = $this->Form->findById($formId);
            
        }
        $this->set(compact('form','CollegeId'));
        if($this->request->is('post') && !empty($this->data))
        {
            $data = $this->data;
            if($this->Form->save($data))
                $this->Session->write('adminsuccess-msg','Field added successfully.');
            else            
                $this->Session->write('adminerror-msg','Something went wrong,Please try again later!!!');
                $this->redirect(array('action' => 'collegeForm',$CollegeId));
        }
    }

    public function generateForm(){
        $data = $this->data;
        $this->Form->bindModel(
        array('hasMany' => array(
                'FormMeta' => array(
                    'className' => 'FormMeta',
                    'foreignKey' => 'form_id'
                    )
                )
            )
        );
        $data['collegeIds'][] = '0';
        //pr($data);die;
        $allfields = $this->Form->find('all',array('conditions'=>array('Form.College_id' => $data['collegeIds'])));
        $this->set(compact('allfields'));

    }


    public function generateFormData(){
        $data = $this->data;
        pr($data);die;

    }
}
