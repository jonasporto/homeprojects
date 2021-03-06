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

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */


class AppController extends Controller {

	var $components = array('Auth','Session','Cookie');


	public $helpers = array(  
		'Html' => array('className' => 'BootstrapHtml'),  
		'Form' => array('className' => 'BootstrapForm'),  
		'Paginator' => array('className' => 'BootstrapPaginator'),  
); 


	function beforeFilter(){
 		Security::setHash('sha256'); 
 		 $this->Auth->authError = 'Area Restrita! Efetue login!'; // Mensagem ao entrar em area restrita
		 $this->Auth->loginError = 'Nome de usuario ou senha não conferem!'; // Mensagem quando não se autenticar
		 $this->Auth->userModel = 'User';
		 
		 $this->Auth->loginRedirect = array('action' => 'index', 
		 									'controller' => 'offers');
		
		$this->Auth->fields = array('username' => 'email', 'password' => 'pasword');
		$this->Auth->loginAction = array(
		'controller' => 'users',
   		 'action' => 'login'
	);
		
				$this->set('user',$this->Auth->user('username'));

	}

	function successMessage($msg){
	  return $this->Session->setFlash($msg,'default', array('class' => 'alert alert-block alert-success'));
	}

	function errorMessage($msg){
	  return $this->Session->setFlash($msg,'default', array('class' => 'alert alert-block alert-danger'));
	}




}
