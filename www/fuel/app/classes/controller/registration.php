<?php
class Controller_Registration extends Controller_Base_Home
{

	public function action_index()
	{
		  Lang::load("registration");
		  $this->_extraJs = array('registration/regform');
		  $this->template->pageTitle = __('title');
		  $this->template->pageContent = View::forge('registration/regform'); // Шаблон формы
	}
}
