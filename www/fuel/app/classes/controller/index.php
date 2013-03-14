<?php
class Controller_Index extends Controller_Base_Home
{

	public function action_index()
	{
		  Lang::load("index");
			
		  $this->template->pageTitle = __('title');
		  $this->template->pageContent = __('content'); // Генерация формы логина
	}
}
