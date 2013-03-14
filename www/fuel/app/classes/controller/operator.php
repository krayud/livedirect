<?php
class Controller_Operator extends Controller_Base_Cabinet
{
	protected $_operatorInfo = null;

//ПУБЛИЧНЫЕ ЭКШЕНЫ
	public function action_index()
	{
		  Lang::load("operator");
		  $this->template->pageTitle = __("pageTitle");
		  $this->template->pageContent = "Контент оператора";
	}
	
	
//ВНУТРЕННИЕ МЕТОДЫ


//вызывается из родительского main
	protected function CheckAuth(){
		//ПРОВЕРКА КОРРЕКТНОСТИ КУК, ЕСЛИ true, то войти в кабинет, если нет то редирект на index
		if(false){
			$this->BaseRedirect('');
			//УДАЛЬТЬ КУКИ Оператора!!!!!
		}
		echo "Проверка авторизации из operator</br>";
	}
}
