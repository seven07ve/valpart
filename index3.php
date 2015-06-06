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
<link href="css/flexslider.css" rel="stylesheet" type="text/css" media="screen" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
</head>
<body>
<header>
  <nav>
  <div class="cont-hed-sup">
<?php
echo logo('home');
echo buscador();
echo ingreso();
?>
    </div>
    <div class="botones-men">
		<div class="cont-botones-men">
			<?php echo menu('','home'); ?>
		</div>
    </div>
  </nav>
</header>
<div style="width:1260px; margin:0 auto;" >
<section>
    <!-- slider -->
		<div class="cont-slid">
            <div class="flexslider1" style="border:none;">
            <ul class="slides">
<?php
$directorio = 'imgsbanner';
$archivo  = scandir($directorio);
//ordena inversamente por nombre
//print_r($archivo);
$pos=1;
Foreach ($archivo as $valor)
{
	$valor;
	if ($valor == '.' or $valor == '..'){
	}
	else{
		//muestra la imagen
		echo '<li><img src="imgsbanner/'.$valor.'" width="1260" height="300" alt=""/></li>';
	}
}
?>
            </ul>
            </div>
		</div><!-- slider -->
 </section>
 <!-- slider 2-->
  <div class="tit-home" style="border-bottom:#CCC 1px solid;">Ofertas</div>
  <div class="cont-slid2">
         <div class="flexslider2 carousel">
          <ul class="slides">
	            <li><a href="#"><img src="imagenes/bobina.jpg" /></a></li>
  	    		<li><a href=""><img src="imagenes/bomb-ag.jpg" /></a></li>
  	    		<li><a href="#"><img src="imagenes/automa.fw.png" /></a></li>
				<li><a href="#"><img src="imagenes/bomb-gas.jpg" /></a></li>
  	    		<li><a href="#"><img src="imagenes/bombillos.jpg" /></a></li>
  	    		<li><a href="#"><img src="imagenes/cables.jpg" /></a></li>
	            <li><a href="#"><img src="imagenes/carb.jpg" /></a></li>
  	    		<li><a href=""><img src="imagenes/collar.jpg" /></a></li>
	            <li><a href="#"><img src="imagenes/bobina.jpg" /></a></li>
  	    		<li><a href=""><img src="imagenes/bomb-ag.jpg" /></a></li>
  	    		<li><a href="#"><img src="imagenes/automa.fw.png" /></a></li>
				<li><a href="#"><img src="imagenes/bomb-gas.jpg" /></a></li>
  	    		<li><a href="#"><img src="imagenes/bombillos.jpg" /></a></li>
  	    		<li><a href="#"><img src="imagenes/cables.jpg" /></a></li>
	            <li><a href="#"><img src="imagenes/carb.jpg" /></a></li>
  	    		<li><a href=""><img src="imagenes/collar.jpg" /></a></li>
          </ul>
        </div>
        </div>
 <!-- slider 3-->
 <div class="tit-home" style="border-bottom:#CCC 1px solid;"> Destacados</div>
   <div class="cont-slid2">
         <div class="flexslider2 carousel">
          <ul class="slides">
	            <li><a href="#"><img src="imagenes/bobina.jpg" /></a></li>
  	    		<li><a href=""><img src="imagenes/bomb-ag.jpg" /></a></li>
  	    		<li><a href="#"><img src="imagenes/automa.fw.png" /></a></li>
				<li><a href="#"><img src="imagenes/bomb-gas.jpg" /></a></li>
  	    		<li><a href="#"><img src="imagenes/bombillos.jpg" /></a></li>
  	    		<li><a href="#"><img src="imagenes/cables.jpg" /></a></li>
	            <li><a href="#"><img src="imagenes/carb.jpg" /></a></li>
  	    		<li><a href=""><img src="imagenes/collar.jpg" /></a></li>
	            <li><a href="#"><img src="imagenes/bobina.jpg" /></a></li>
  	    		<li><a href=""><img src="imagenes/bomb-ag.jpg" /></a></li>
  	    		<li><a href="#"><img src="imagenes/automa.fw.png" /></a></li>
				<li><a href="#"><img src="imagenes/bomb-gas.jpg" /></a></li>
  	    		<li><a href="#"><img src="imagenes/bombillos.jpg" /></a></li>
  	    		<li><a href="#"><img src="imagenes/cables.jpg" /></a></li>
	            <li><a href="#"><img src="imagenes/carb.jpg" /></a></li>
  	    		<li><a href=""><img src="imagenes/collar.jpg" /></a></li>
          </ul>
        </div>
    </div>
</div>
	<footer>
	<?php echo pie("","home"); ?>
    <br clear="all">
    <div class="derechos"><?php echo creditos(); ?></div>
    </footer>
 
  <!-- jQuery -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.min.js">\x3C/script>')</script>
 <!-- FlexSlider -->
    <script defer src="scripts/jquery.flexslider.js"></script>
  
  <script type="text/javascript">
    $(function(){
      SyntaxHighlighter.all();
    });
    $(window).load(function(){
      $('.flexslider1').flexslider({
        animation: "fade",
		controlNav: true,
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });
  </script>
  
    <script type="text/javascript">
    $(function(){
      SyntaxHighlighter.all();
    });
    $(window).load(function(){
      $('.flexslider2').flexslider({
        animation: "slide",
		directionNav: true,
        animationLoop: false,
        itemWidth: 150,
        itemMargin: 5,
		slideshow: false,
		controlNav: false,
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });
  </script>
<!-- FlexSlider -->
</body>
</html>