<?
//����� ����� � �������
if($generalCss != null)
	foreach($generalCss as $style)
		echo Asset::css($style.'.css');
		
if($generalJs != null)
	foreach($generalJs as $script)
		echo Asset::js($script.'.js');

//����� � ������� ���, ������������ �� ���������� ��������
if(isset($extraCss) && $extraCss != null)
	foreach($extraCss as $style)
		echo Asset::css($style.'.css');
		
if(isset($extraJs) && $extraJs != null)
	foreach($extraJs as $script)
		echo Asset::js($script.'.js');