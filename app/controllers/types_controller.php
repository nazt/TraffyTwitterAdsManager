<?php
class TypesController extends AppController
{
 	var $name='Types';
	var $scaffold;
	function beforeFilter()
	{
		$this->__validateLoginStatus();
	}	
	function __validateLoginStatus()
	{
		if($this->action != 'login' && $this->action != 'logout')
		{
			if($this->Session->check('User') == false)
			{
				$this->Session->setFlash('The URL you\'ve followed requires you login.');
				$this->redirect('/users/login');
				
			}
		}
	}
}
?>