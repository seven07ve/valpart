<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
<?php
$directorio = 'imgsweb/';
$ficheros1  = scandir($directorio);
//$ficheros2  = scandir($directorio, 1);
asort($ficheros1);
//print_r($ficheros1);
//print_r($ficheros2);

//echo end($ficheros1);
//este escribe el ultimo
Foreach ($ficheros1 as $valor)
{
	if ($valor == '.' or $valor == '..'){
	}
	else{
		$partes_ruta = pathinfo($directorio.$valor);
		$ultimo = $partes_ruta['filename'];
		echo '<img src="imgsweb/'.$valor.'" alt=""/> ';
	}
}
echo $ultimo;
Foreach ($ficheros1 as $valor)
{
	if ($valor == '.' or $valor == '..'){
	}
	else{
		$partes_ruta = pathinfo($directorio.$valor);
		echo 'xx'.$partes_ruta['filename'];
		echo '<img src="imgsweb/'.$valor.'" alt=""/> ';
	}
}

?>
</body>
</html>