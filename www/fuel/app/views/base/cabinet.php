<!DOCTYPE html>
<html>
<head>
	<title><?=$pageTitle;?></title>
	<? 
		echo Asset::css('base/'.basename(__FILE__,'.php').'/main.css');
		require_once("helpers/cssjsattach.php"); 
	?>
</head>
<body>
<body>
	<div id="head">
	Шапка. Шаблон <b>CABINET</b> для кабинетов администратора и оператора
	</div>
	
	<div id="middle">
		<div id="bar">
			Меню кабинета
		</div>
		<div id="center">
			<? echo $pageContent;?>
		</div>
	</div>
	<div class="clear"></div>
	
	<div id="footer">
	Футер
	</div>
</body>
</html>
