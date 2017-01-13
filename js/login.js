$('document').ready(function() 
{

	$("#login-form").validate({
	      rules:
	   {
	   password: {
	   required: true,
	   },
	   user_name: {
	            required: true
	            },
	    },
	       messages:
	    {
	            password:{
	              required: "Por favor ingresa tu contraseña para continuar"
	                     },
	            user_name: "Por favor ingresa tu nombre de usuario para continuar",
	       },
	    submitHandler: submitForm 
	       });  


	function submitForm()
    { 
	var data = $("#login-form").serialize();
	$.ajax({
		url: 'rpc/login_process.php',
		type: 'POST',
		//dataType: 'json',
		data:data,
		
		beforeSend: function()
		   { 
		    $("#error").fadeOut();
		    $("#btn-login").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; sending ...');
		   },
		   success :  function(response)
		      {      
		     if(response=="ok"){
		         
		      $("#btn-login").html('<img src="btn-ajax-loader.gif" /> &nbsp; Signing In ...');
		       window.location.href = "inicio.php";
		     }
		     else{
		      $("#error").fadeIn(1000, function(){      
		    $("#error").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; '+response+' !</div>');
		           $("#btn-login").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Sign In');
		         });
		     }
		     }
		   });
		    return false;
		



}


});