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
	<div id="head">
	Шапка. Шаблон <b>HOME</b> для index, registration
	</div>
	
	<div id="center">
		<?=$pageContent?>
	</div>
	
	<div id="footer">
	Футер
	</div>
</body>
</html>