<?php
session_start();
$Usuario=$_POST['usuario'];
$Clave=$_POST['contrasena1'];
$user="root";
$pass="";
$server="localhost";
$db="crm_aveza";

try {
$conn = new PDO('mysql:host='.$server.';dbname='.$db, $user, $pass);
} catch (PDOException $e) {
die('Falló la conexion a la base de datos: ' . $e->getMessage());
}
$records = $conn->prepare('SELECT * FROM tbl_registro_cliente WHERE cedula=:Usuario');
$records->bindParam(':Usuario', $Usuario);
$records->execute();
$results = $records->fetchALL(PDO::FETCH_ASSOC);
$validar = sizeof($results);
$clavebd = $results[0]['contrasena'];

if($validar>0){
/*$vali=password_verify($Clave, $clavebd)*/
	
	if ($Clave===$clavebd) {
		/*$_SESSION['user_id'] = $results[0]['id'];*/
		/*$mensaje = 'app/';*/
		header('Location: ..\Menu.html');
	}else{
		$mensaje = '<div class="alert alert-danger text-center" role="alert">Usuario o contraseña incorrecta';
		}
}else{
	$mensaje = '<div class="alert alert-danger text-center" role="alert">Usuario o contrasena incorrecta';
}
echo json_encode($mensaje);
?>