<?php
class MessagesController extends AppController
{
 	var $name='Messages';
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