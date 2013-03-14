<?php
class Controller_Admin extends Controller_Base_Cabinet
{
	protected $_adminInfo = null;

//ПУБЛИЧНЫЕ ЭКШЕНЫ
	public function action_index()
	{
		  Lang::load("admin");
		  $this->template->pageTitle = "Кабинет администратора";
		  $this->template->pageContent = "Контент админа";
	}
	
	
//ВНУТРЕННИЕ МЕТОДЫ


//вызывается из родительского main
	protected function CheckAuth(){
		//ПРОВЕРКА КОРРЕКТНОСТИ КУК, ЕСЛИ true, то войти в кабинет, если нет то редирект на index
		if(false){
			$this->BaseRedirect('');
			//УДАЛЬТЬ КУКИ АДМИНА!!!!!
		}
		echo "Проверка авторизации из admin</br>";
	}
}
