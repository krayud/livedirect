$('document').ready(function(){


//SETTINGS
var fieldsId = {
	'email':'email',
	'password':'password',
	'password_re':'password_re',
	'regButton':'regBtn',
	};




	$('#'+fieldsId['regButton']).click(function(){
		
		
		var email = $('#'+fieldsId['email']).val(); 
		var password = $('#'+fieldsId['password']).val(); 
		var password_re = $('#'+fieldsId['password_re']).val(); 
		
		if(password != password_re)
			return;
			
		alert(123);
	});

});