<?php
class Controller_Base_Home extends Controller_Base_Main
{
	public $template = 'base/home'; // ОБЩИЙ ШАБЛОН ДЛЯ index и registration
	

//ВЫЗЫВАЕТСЯ ИЗ РОДИТЕЛЬСКОГО КОНТРОЛЛЕРА MAIN
	protected function CheckAuth(){
	
	//ЕСЛИ ЕСТЬ КУКИ АДМИНА ИЛИ ОПЕРАТОРА, ТО РЕДИРЕКТ В СООТВЕТСТВУЮЩИЙ КАБИНЕТ!!!
		if(false){
			$this->BaseRedirect('admin');
		}
		if(false){
			$this->BaseRedirect('operator');
		}
		echo "Проверка авторизации из Home</br>";
	}
}