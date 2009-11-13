<?php
class AdsTypesController extends AppController
{
 	var $name='AdsTypes';
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
				$this->redirect('/users/login');
				$this->Session->setFlash('The URL you\'ve followed requires you login.');
			}
		}
	}
}
?>