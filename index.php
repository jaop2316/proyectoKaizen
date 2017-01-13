<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

	<div class="container">

		<div class="row">
			<div class="page-header">
			  <h1>Login</h1>
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-12">
				<div id="error">
				</div>
			</div>
		</div>

		<div class="row">
		 	<div class="col-md-6 col-md-offset-3">
		 		<div class="panel panel-default">
		 		  <div class="panel-body">

		 		     <form class="form-horizontal" method:"POST" id="login-form">
		 		       <div class="form-group">
		 		         <label for="inputUsuario" class="col-sm-2 control-label">Usuario</label>
		 		         <div class="col-sm-10">
		 		           <input type="text" class="form-control" name="user_name" id="user_name" placeholder="Usuario">
		 		         </div>
		 		       </div>
		 		       <div class="form-group">
		 		         <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
		 		         <div class="col-sm-10">
		 		           <input type="password" class="form-control" name= "password" id="password" placeholder="Password">
		 		         </div>
		 		       </div>
		 		       <div class="form-group">
		 		         <div class="col-sm-offset-2 col-sm-10">
		 		           <button type="submit" class="btn btn-default" name="btn-login" id="btn-login">Sign in</button>
		 		         </div>
		 		       </div>
		 		     </form>
		 		  </div>
		 		</div>
		 	</div>
		</div>
	</div>

  <!--   <script type="text/javascript" src="js/jquery.js"></script> -->

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.validate.js"></script>
    <script type="text/javascript" src="js/login.js"></script>
</body>
</html>