<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Main extends Controller_Template {
	
	public $template = 'template';

	public function action_index()
	{
		$this->_allClients();
		 
	}
	
	private function _allClients(){
		$this->template->title = 'Clients';
	$clients = Model::factory('clients');
	
	
	$all_clients = $clients->get_all_clients(); 
	if (!isset($all_clients )){
		$all_clients = '';
	}
	
	$view = new View('client/table');
	$view->set('clients',$all_clients);
	$this->template->set('content',$view);
	
	}
	
	
	private function _valid($post){
		
		$clients = Model::factory('clients');
		$object = Validation::factory($post);	
		$object->rules(		
		   'number',array(
			array('not_empty'),
		        array('max_length', array(':value', 10)),
			array('numeric')			
			//array(array($clients,'unique_number'))
			
		   ));
		
		 $object->rules(  
		   'name',array(
			array('not_empty'),
		        array('max_length', array(':value', 100)),
			array('regex', array(':value', '/^[a-z_.]++$/iD')) 
		   ));
		  $object->rules( 
		   'last_name',array(
			array('not_empty'),
		        array('max_length', array(':value', 100)),
			array('regex', array(':value', '/^[a-z_.]++$/iD')) 	
		   ));
		  $object->rules(
		   'email', array(
		      array('not_empty'),
		      array('max_length', array(':value', 100)),
		      array('email')
		   ));
		   
		   $object->rules(
		   'adress',array(
			array('not_empty'),
		        array('max_length', array(':value', 100))    
		   ));
		   $object->rules(
		   'city',array(
			array('not_empty'),
		        array('max_length', array(':value', 100)),
			array('regex', array(':value', '/^[a-z_.]++$/iD')) 
		   ));
		   $object->rules(
		   'country',array(
			array('not_empty'),
		        array('max_length', array(':value', 100)),
			array('regex', array(':value', '/^[a-z_.]++$/iD'))
		   ));
		   
		return $object;
		
	}
	
	
	public function action_add(){
		$this->template->title = 'Add client';
		
		//$view = new View('client/edit');
		$post = array('id'=> '',
			      'number'=>'',
			      'name'=>'',
			      'last_name'=>'',
			      'email'=>'',
			      'adress'=>'',
			      'city'=>'',
			      'country'=>''
			      );
		//$this->template->set('content',$view);
		$this->template->content = View::factory('client/add')->bind('post', $post);
		$clients = Model::factory('clients');
		
		if ($this->request->post()){
			
			$post = $this->request->post();
		foreach ($post as $value => $key){
			$post[$value] = trim(htmlentities($key)); 
		}
		
		$object = $this->_valid($post);
		
		if ($object->check())
		{	
			
			try {
			if (! $clients->add_client($post)) {
			    throw new Exception("Somethink was wrong!!");
				}
			}
			catch (Exception $e) {
			    echo $e->getMessage();
			}
		$this->redirect('main');		
		}else {
		$errors = $object->errors('clients');
		// Display the  form
		$this->template->content = View::factory('client/add')
		->bind('post', $post)
		->bind('errors', $errors);
		  
		}
		
		
			
			
		}//endif;
	}
	
	
	
	
	public function action_edit($id=''){
		$this->template->title = 'Edit';
		$id = $this->request->param('id');
		
		if (!isset($id) || !is_numeric($id)){
			$this->redirect('main'); exit();
		}
		$clients = Model::factory('clients');
		$single = $clients->one_client($id);
		
		foreach ($single as $key => $value){			
		}
		$this->template->content = View::factory('client/add')
		->bind('post', $value);
		
		///------------------
		if ($this->request->post()){
			
			$post = $this->request->post();
		foreach ($post as $value => $key){
			$post['id']= $id;
			$post[$value] = trim(htmlentities($key)); 
		}
		
		$object = $this->_valid($post);
		
		if ($object->check())
		{	
			
			try {
			if (! $clients->edit_client($post)) {
			    throw new Exception("Somethink was wrong!!");
				}
			}
			catch (Exception $e) {
			    echo $e->getMessage();
			}
		$this->redirect('main');
		//$session = Session::instance();
		//$session->set('test', 'Success!');
		
		}else {
		$errors = $object->errors('clients');
		// Display the  form
		$this->template->content = View::factory('client/add')
		->bind('post', $post)
		  ->bind('errors', $errors);
		  
		}
		
		
			
			
		}//endif;
		
		
		
	}

	public function action_del($id=''){
		$this->template->title = 'Delete';
		
		$id = $this->request->param('id');
		
		if (!isset($id) || !is_numeric($id)){
			$this->redirect('main'); exit();
		}elseif (isset($id) && !empty($id)) {
		
		$clients = Model::factory('clients');
		
			try {
			if (! $clients->del_client($id)) {
			    throw new Exception("Somethink was wrong!!");
				}
			}
			catch (Exception $e) {
			    echo $e->getMessage();
			}
		$this->redirect('main');
		}
	}
	
	
} // End Main
