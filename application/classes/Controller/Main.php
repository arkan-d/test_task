<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Main extends Controller_Template {
	
	public $template = 'template';

	public function action_index()
	{
		$this->_allClients();
		 
	}
	
	private function _allClients(){
		$this->template->title = 'Clients';
		$this->template->content = 'Hello';
	}
	
	
	public function action_add(){
		$this->template->title = 'Add client';
		url::redirect('blog/view_articles');
	}
	
	public function action_edit(){
		$this->template->title = 'Edit';
	}
	
	public function action_del(){
		$this->template->title = 'Delete';
	}

} // End Main
