<?php
class Controller_Extra_Languagerouter extends Controller_Base_Main
{

//СМЕНА ЯЗЫКА ПО GET ЗАПРОСУ
	public function action_switch($language){
		
		if(Input::method() == "GET"){
			$cookieName = $this->ReadBaseConfig('cookie.language');
			$cookieTime = $this->ReadBaseConfig('cookie.languageTime');
			Cookie::set($cookieName,$language,$cookieTime);
			$this->BaseRedirect($this->param('url'));
		}
		$this->ShowError404();
		
	}

//Обязана быть, т.к. вызывается из базового класса
	protected function CheckAuth(){}
}