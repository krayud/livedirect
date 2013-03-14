<?php
return array(
	'_root_'  => 'index/index',  // The default route
	//'_404_'   => 'index/tes',    // The main 404 route
	//'hello(/:name)?' => array('index/index', 'name' => 'hello'),
	
	'^(ru|en|fr)(/:url)?' => 'extra/languagerouter/switch/$1',

);