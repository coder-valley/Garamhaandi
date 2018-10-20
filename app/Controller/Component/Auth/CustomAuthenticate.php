<?php
App::uses('FormAuthenticate', 'Controller/Component/Auth');
class CustomAuthenticate extends FormAuthenticate {

	public function authenticate(CakeRequest $request, CakeResponse $response) {
		$userModel = $this->settings['userModel'];
		list($plugin, $model) = pluginSplit($userModel);

		$fields = $this->settings['fields'];
		
		
		if (empty($request->data[$model])) {
		
			return false;
		}
		if (
			empty($request->data[$model][$fields['username']]) ||
			empty($request->data[$model][$fields['password']])
		) {
		
			return false;
		}
		
		
		return $this->_findUser(
			$request->data[$model][$fields['username']],
			$request->data[$model][$fields['password']]
		);
	}
	
	

	public $settings = array(
		'fields' => array(
			'username' => 'username',
			'password' => 'password'
		),
		'userModel' => 'User',
		'scope' => array()
	);
	
	protected function _findUser($username, $password) {
		$userModel = $this->settings['userModel'];
		list($plugin, $model) = pluginSplit($userModel);
		$fields = $this->settings['fields'];
		
		$conditions = array(
			$model . '.' . $fields['username'] => $username,
			$model . '.' . $fields['password'] => $this->_password($password),
			
		);	
		if (!empty($this->settings['scope'])) {
			$conditions = array_merge($conditions, $this->settings['scope']);
		}
		$result = ClassRegistry::init($userModel)->find('first', array(
			'conditions' => $conditions,
			'recursive' => 0,
			'fields' => array('id','fname','lname' ,'email','phone','password','image')
		));
		if (empty($result) || empty($result[$model])) {
			return false;
		}
		unset($result[$model][$fields['password']]);
		return $result[$model];
	}
	
	protected function _password($password) {
	
        return self::hash($password);
    }

    public static function hash($password) {
        // Manipulate $password, hash, custom hash, whatever
        return md5($password);
    }
}