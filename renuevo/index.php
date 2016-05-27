<?php 
include('admin/conectdb.php');

$id = $_GET['id'];

if($id ==""){
	
	$rs = mysql_query("SELECT MAX(id) AS id FROM recetas");
if ($row = mysql_fetch_row($rs)) {
$id = trim($row[0]);
}
	
	}

mysql_select_db("renuevo", $link); 
$result = mysql_query("SELECT * FROM recetas WHERE id='$id'", $link); 
$row = mysql_fetch_array($result);


$titulo = $row["titulo"];
$msj = nl2br($row["msj"]);
$fecha = $row["fecha"];

include('escuchar.php');
include('paginacion.php');
include('sanear.php');

?>


<!DOCTYPE html>

<head>

<?php include("include/head.php");?>

 
 
</head>
    
<body>

<?php include("include/menu.php");?>


<div id="slider">
	<div id="logo"></div>
    <div id="rota-logos">
    	<div class="franja"></div>
		<div class="contenedor-slider">
			<div class="mini-carousel ">
			<div class="item"> <img src="images/galeria1.jpg"> </div>
			<div class="item"> <img src="images/galeria1.jpg"> </div>
			<div class="item"> <img src="images/galeria1.jpg"> </div>
			<div class="item"> <img src="images/galeria1.jpg"> </div>
			<div class="item"> <img src="images/galeria1.jpg"> </div>
			<div class="item"> <img src="images/galeria1.jpg"> </div>
			<div class="item"> <img src="images/galeria1.jpg"> </div>
			</div>
		</div>
   
     </div>
     <div id="escuchar-box">
		<a href="https://play.google.com/store/apps/details?id=tunein.player&hl=es_419" target="_blank"> <div class="clickme"></div> </a>
    	<a href="escuchar.html" target="_blank" 
		onclick="window.open(this.href, this.target, 'width=510,height=275'); 
		return false;"> <div id="play-buttom"></div></a>
    </div>
    
        <!--// FIN //-->
    </div>
</div>
    
<div id="general">
    <div class="grupo_uno">
     
        <div class="informacionGeneral">
            <div class="img-art">
            	<div class="cuadro-color"></div>
            	<img src="images/jefe-de-prensa.jpg">
            </div>
                <div class="textonoticia">
                    <p class="titulo">Reflexion</p>
                    <p class="txtCabecera">Sonografia General, Doppler a Color 
                    y Musculo Esqueletico</p>
                    <p class="parrafos">This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor...</p>
                </div>
        
        </div>
        
    <div class="informacionGeneral" style="margin-right:0;" ><!--style="background-color: violet;"-->
        <div class="img-art">
        	<div class="cuadro-color"></div>
        	<img src="images/jefe-de-prensa.jpg">
        </div>
        <div class="textonoticia">
        <p class="titulo">Noticia</p>
            <p class="txtCabecera">Sonografia General, Doppler a Color 
                y Musculo Esqueletico</p>
        <p class="parrafos"> This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor...</p>
            </div>
    </div>    
        
    <div class="imgGeneral">
        <div class="contenedormini">
            <div class="mini">
            	<img src="images/jefe-de-prensa.jpg">
            </div>
            <div class="mini">
            <img src="images/jefe-de-prensa.jpg">
            </div>
        </div>
        
        <div class="contenedorgrande">
            <div class="grande"><img  src="images/jefe-de-prensa.jpg"></div>
            <div class="grande" style=" margin-right:0;"><img  src="images/jefe-de-prensa.jpg"></div>
        </div>
        
        <div class="contenedormini" style="margin-right:0;">
            <div class="mini"><img  src="images/jefe-de-prensa.jpg"></div>
            <div class="mini"><img  src="images/jefe-de-prensa.jpg"></div>
        </div>
        
    </div>
</div>
    <div class="importante"><img class="importante-ajuste" src="images/banner.jpg"></div>

        
</div>    

<div id="parteVideo"> 
    <div class="contenedorvideo">
            <div id="textoVideo">
                <div id="txt"><div style="color: white; font-size: 23px; margin-bottom: 0px;">Video</div>
                    <div class="sonografia">Sonografia General, 
                    Doppler a Color y Musculo 
                    Esqueletico</div>
                       </div>
                
            </div>
        <!--  --><div id="mediaVideo"> <iframe class="video-ajuste" width="100%" height="315" src="https://www.youtube.com/embed/yUbZdl7Z92U" frameborder="0" allowfullscreen></iframe> </div>
    </div>
</div>
    
<div id="footer">
    <p>&copy;Copyright 2016. Todos los derechos reservados.</p>
    <a href="#">Desarrollado por: www.agencia7am.com</a> 
</div>



<?php include("include/menu3d.php");?>
  
  
  <script type="text/javascript">

	$('.mini-carousel').slick({
    arrows: false,
    slidesToShow: 1,
    autoplay: true,
	draggable: true,
    autoplaySpeed:2500,
    speed: 500,
    variableWidth: true,
    onAfterChange: function(){ 
          var cat = ($('.mini-carousel').slickCurrentSlide()) + 1;
		  $('.client-text > li').hide();
          $('.client-text > li:nth-child('+ cat +')').show();
          
    }
});
		
		</script>
  
</body>
</html>