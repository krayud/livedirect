<?php
class Controller_Base_Main extends Controller_Template
{
	
	//PUBLIC
	public $template = null; // Переопределяется в наследниках
	
	//PRIVATE
	private $_baseConfigFile = 'base.ini';
	private $_generalCss = array('base/main');
	private $_generalJs = array('jquery');
	
	//PROTECTED
	protected $_lang;
	protected $_extraCss = null;
	protected $_extraJs = null;
	
	public function  before(){
		parent::before();
		Config::load($this->_baseConfigFile,'baseConfig'); // Подгрузка файла основных настроек системы
		$this->CheckAuth(); // Вызов соответствующих методов в дочерних классах
		$this->LoadLang();
	}
	
	public function after($response){
        $response = parent::after($response);
        $this->template->generalCss = $this->_generalCss;
		$this->template->generalJs = $this->_generalJs;
		$this->template->extraCss = $this->_extraCss;
		$this->template->extraJs = $this->_extraJs;
        return $response;
    }

//ВНУТРЕННИЕ МЕТОДЫ ОБЩИЕ ДЛЯ ВСЕХ СТРАНИЦ

	private function LoadLang(){
		$langCookieName = $this->ReadBaseConfig('cookie.language');
		$lang = Cookie::get($langCookieName,null);
		if($lang == null)
			$this->_lang = $this->ReadBaseConfig('system.defaultLang');
		else
			$this->_lang = $lang;
		Config::set("language",$this->_lang);
	}
	//Чтение базовых настроек #'группа.параметр'
	protected function ReadBaseConfig($groupAndParam){
		$res = Config::get("baseConfig.".$groupAndParam);
		return $res;
	}
	//Редирект относительно корня #'registration' -> http.../cabinet/registration
	protected function BaseRedirect($controller){
	header('Location: '.Uri::base(false).$controller,true, 302);
	exit;
	}
	
	protected function ShowError404(){
		echo "Страница не найдена.";
		exit;
	}
}