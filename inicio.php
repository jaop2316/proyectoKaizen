<?php
session_start();

if(!isset($_SESSION['user_session']))
{
 header("Location: index.php");
}

include_once 'rpc/dbconfig.php';

$stmt = $db_con->prepare("SELECT * FROM usuario_login WHERE CODUSUARIO=:uid");
$stmt->execute(array(":uid"=>$_SESSION['user_session']));
$row=$stmt->fetch(PDO::FETCH_ASSOC);

?>

<html>
	<head>
			<meta charset="utf-8">
		    <meta http-equiv="X-UA-Compatible" content="IE=edge">
		    <meta name="viewport" content="width=device-width, initial-scale=1">
		    <title>Inicio</title>

		    <!-- Bootstrap -->
		    <link href="css/bootstrap.min.css" rel="stylesheet">
	</head>
	<body>

		<div class="container">

            <div class="row">
            	<div class="col-md-12">
            		<nav class="navbar navbar-default">
            		  <div class="container-fluid">
            		    <!-- Brand and toggle get grouped for better mobile display -->
            		    <div class="navbar-header">
            		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            		        <span class="sr-only">Toggle navigation</span>
            		        <span class="icon-bar"></span>
            		        <span class="icon-bar"></span>
            		        <span class="icon-bar"></span>
            		      </button>
            		      <a class="navbar-brand" href="#">Brand</a>
            		    </div>

            		    <!-- Collect the nav links, forms, and other content for toggling -->
            		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            		      <ul class="nav navbar-nav">
            		        <li class="active"><a href="#">PRODUCTOS<span class="sr-only">(current)</span></a></li>
            		        <li><a href="#">SERVICIOS</a></li>
            		        <li class="dropdown">
            		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">CLIENTES<span class="caret"></span></a>
            		          <ul class="dropdown-menu">
            		            <li><a href="#">Registrar Clientes</a></li>
            		            <li><a href="#">Listar Clientes</a></li>
            		          </ul>
            		        </li>
            		      </ul>
            		      <ul class="nav navbar-nav navbar-right">
            		        <li><a href="./rpc/logout.php">CERRAR SESION</a></li>
            		      </ul>
            		    </div><!-- /.navbar-collapse -->
            		  </div><!-- /.container-fluid -->
            		</nav>
            	</div>
            </div>


			<div class='alert alert-success'>
				<strong>Hola &nbsp; '<?php echo $row['NOMUSUARIO']; ?>'&nbsp;Bienvenido al sistema.</strong>
			</div>
			
		</div>


		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

	</body>
</html>