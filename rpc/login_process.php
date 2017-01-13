<?php

session_start();

require_once 'dbconfig.php';

if($_POST) {

	$user_name=trim($_POST['user_name']);
	$user_password=trim($_POST['password']);
	//print_r($user_name);

	try{
		$stmt = $db_con->prepare("SELECT * FROM usuario_login WHERE NOMUSUARIO=:user_name");
		//$stmt-> bindValue(':user_name', $user_name);
		$stmt->execute(array(':user_name'=>$user_name));
		$row = $stmt->fetch(PDO::FETCH_ASSOC);
		$count = $stmt->rowCount();

		if($row['CLAVEUSUARIO']==$user_password){
		    
		    echo "ok"; // log in
		    $_SESSION['user_session'] = $row['CODUSUARIO'];
		   }
		   else{
		    
		    echo "El usuario o password no existen"; // wrong details 
		   }
	}

	catch(PDOException $e){
	   echo $e->getMessage();
	  }
}

?>