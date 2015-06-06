<?php 
session_start();
$_SESSION['user_cuenta'];
$_SESSION['pasword_cuenta'];

include("php/dbconect.php");
include("php/acceso.sev.php");
$validar = validar_usuario($_SESSION['user_cuenta'],$_SESSION['pasword_cuenta']);
if ($validar <> "correcto"){
	echo '<SCRIPT LANGUAGE="javascript">location.href = "http://www.google.co.ve/";</SCRIPT>';
}
//BUSCA LOS ARCHIVOS PARA DAR EL NOMBRE A LA NUEVA IMG
$directorio = '../imgsweb/'.$_POST["imagen"];
unlink($directorio);
/*echo '<SCRIPT LANGUAGE="javascript">location.href = "javascript:window.history.go(-1)";</SCRIPT>';*/
/*echo '<SCRIPT LANGUAGE="javascript">location.href = "prod-mod.php?id_prod='.$_POST["id_prod"].'";</SCRIPT>';*/
header('location: '.$_POST["pagina"]);
?>
