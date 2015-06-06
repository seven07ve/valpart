<?php 
include("php/menus-links.sev.php");
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>VALPARTS,C.A.</title>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
<link href="css/estilos.css" rel="stylesheet" type="text/css">
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

</head>

<body>
<header>
  <nav>
  <div class="cont-hed-sup">
    <div class="logo"> <a href=""><img src="imagenes/logo.png" width="137" height="50" alt=""/></a> </div>
    <div class="ingreso">
    <?php echo ingreso();?>
    </div>
    </div>
    <div class="botones-men">
		<div class="cont-botones-men">
			<?php echo menu('','who'); ?>
		</div>
    </div>
  </nav>
</header>
<div style="width:1260px; margin:0 auto;" >
<section class="contenido"><img src="imagenes/motor.jpg" width="500" height="350" style="float:right; margin:20px;" alt=""/>
  <h2 style="color:#2E56A6;">¿Por qué comprar con nosotros?</h2>
  <p>Cuando usted hace compras con Valparts, C.A., podrás elegir entre los nombres más-a buenos precios ordenadores-la marca de la industria. Pero eso es sólo el principio. También tenemos un amplio inventario de componentes: placas base, procesadores, discos duros, unidades ópticas, cajas y más. Usted encontrará las tecnologías emergentes, así, porque al final del día, nos encanta lo que vendemos.</p>
  <h2><a href="quienes-somos/index.php">Éstas</a> son sólo algunas de las razones por las que debe ir de compras con nosotros:</h2>
  <p>Ofrecemos productos de la más alta calidad de la industria a los de más bajo precio posible.<br>
    Ofrecemos la información del producto y de la foto galerías más completas disponibles.<br>
    Enviamos la mayoría de los pedidos el mismo día.<br>
    Ofrecemos a nuestros clientes información --- por teléfono, en nuestra tienda, o en nuestro sitio-web para tomar decisiones informadas. Cada uno de nuestros representantes por teléfono continuamente entrenados por los fabricantes de los productos que vendemos. Ellos pueden responder a sus preguntas al instante.<br>
    Hemos establecido el poder de compra, lo que significa que podemos comprar productos a precios muy por debajo de nuestra competencia --- y pasar los ahorros a usted.<br>
    Ofrecemos a nuestros clientes frecuentes actualizaciones sobre nuevos productos que llegan por hora en nuestro almacén.<br>
    Haga clic aquí para averiguar cómo puede unirse a nuestra lista de correo!<br>
    Ofrecemos a nuestros clientes corporativos y gubernamentales ofertas instantáneos, precios competitivos y entrega rápida.<br>
  </p>
  <h2>Acerca de la compañía
  </h2>
  <p>Valparts, C.A. se creó para atender las necesidades de los distribuidores de patres automotrices, y hoy somos uno de los mejores informáticos y productos ordenador minoristas de la industria. Nuestro sitio web ha sido clasificado entre los &quot;25 mejores minoristas en línea&quot; The New York Times 'y nuestro catálogo se ha convertido en un libro de texto para los usuarios de computadoras. Pero nuestro éxito se ha construido en un principio simple: cuidar a cada cliente como si fuera un miembro de nuestra familia. Desde el principio, nuestra máxima prioridad es proporcionar atención al cliente inigualable y ayudar a nuestros clientes a entender cómo la tecnología puede ayudar a ellos. Siempre hemos invitado, hombres y mujeres inteligentes cortés al personal de nuestro centro de llamadas; para responder a sus preguntas, hacer recomendaciones y ofrecer soluciones. Disponemos de nuestro sitio web con los últimos productos, las mejores ofertas de --- y un montón de información para ayudarle a decidir por sí mismo. Estamos orgullosos de cada uno de los miembros de nuestro personal, ya que hacen la diferencia.</p>
</section>
	<footer>
	<?php echo pie(""); ?>
    <br clear="all">
    <div class="derechos"><?php echo creditos(); ?></div>
</footer>
</body>
</html>