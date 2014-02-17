<?php
App::uses('AppModel', 'Model');
/**
 * User Model
 *
 */
class User extends AppModel {
	

 public function beforeSave($options=array()) {
        
    if (isset($this->data['User']['password'])) {
    	echo "uepa";
        $this->data['User']['password'] = AuthComponent::password($this->data['User']['password']);
    }
    return true;
	}

}
