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
<a href="<?php echo $path . $img ?>" data-lightbox="aula" data-title=""  id="firstImage"></a>

<?php include("include/menu.php");?>
<div class="spacer">
    &nbsp;
</div>

<div id="slider">
	<div id="logo"></div>
    <div id="rota-logos">
    	<div class="franja"></div>
		<div class="contenedor-slider">
			<div class="mini-carousel ">
			<div class="item"> <img class="media" src="images/1.png"> </div>
			<div class="item"> <img class="media" src="images/2.png"> </div>
			<div class="item"> <img class="media" src="images/3.png"> </div>
			<div class="item"> <img  class="media"src="images/4-2.png"> </div>
			<div class="item"> <img class="media" src="images/5.png"> </div>
			<div class="item"> <img class="media" src="images/6.png"> </div>
			<div class="item"> <img class="media" src="images/7.png"> </div>
			<div class="item"> <img  class="media" src="images/8.png"> </div>
			<div class="item"> <img  class="media" src="images/9.png"> </div>
			<div class="item"> <img  class="media" src="images/10.png"> </div>
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

    
<div id="general">
    <div class="grupo_uno">
     
        <div class="informacionGeneral">
            <div class="img-art">
            	<div class="cuadro-color"></div>
            	<img src="images/propositos2.jpg">
            </div>
                <div class="textonoticia">
                    <p class="titulo">Reflexion</p>
                    <p class="txtCabecera">Dios es quien te sustenta en todo</p>
                    <a href="reflexion1.php" class="decora"><p class="parrafos">Salmos 94: 18 “Cuando yo decía: Mi pie resbala, Tu misericordia, oh Jehová, sustentaba”... Leer Más</p></a>
                </div>
        
        </div>
        
    <div class="informacionGeneral" style="margin-right:0;" ><!--style="background-color: violet;"-->
        <div class="img-art">
        	<div class="cuadro-color"></div>
        	<img src="images/noticia1.jpg">
        </div>
        <div class="textonoticia">
        <p class="titulo">Noticia</p>
            <p class="txtCabecera">Cristianos de EEUU muestran apoyo ante la masacre</p>
        <a href="noticiero1.php" class="decora"><p class="parrafos">“Llamamos a nuestras congregaciones a orar y mostrar amor a los homosexuales”, enfatizó Russell Moore, 
					presidente de la Comisión de Ética de la Convención...&nbsp;&nbsp;&nbsp;&nbsp; Leer Más</a></p>
            </div>
    </div>    
        
    <div class="imgGeneral">
	<a href="galeria.php">
	<div id="txt" style="position: absolute; margin-top: 12px; width: 85px; height: 35px;"><div style="color: white; font-size: 23px; margin-bottom: 0px;">Galeria</div></div>
        <div class="contenedormini">
            <div class="mini">
            	<img src="images/atoloquedamini.jpg">
            </div>
            <div class="mini">
            <img src="images/avivate_radiomini.jpg">
            </div>
        </div>
        
        <div class="contenedorgrande">
            <div class="grande"><img  src="images/congrande.jpg"></div>
            <div class="grande" style=" margin-right:0;"><img  src="images/mejornochegrande.jpg"></div>
        </div>
        
        <div class="contenedormini" style="margin-right:0;">
            <div class="mini"><img  src="images/premio1mini.jpg"></div>
            <div class="mini"><img  src="images/premio2mini.jpg"></div>
        </div>
        </a>
    </div>
</div>
    <div class="importante"><img class="importante-ajuste" src="images/banner.jpg"></div>

        
</div>    

<div id="parteVideo"> 
    <div class="contenedorvideo">
            <div id="textoVideo">
                <div id="txt"><div style="color: white; font-size: 23px; margin-bottom: 0px;">Video</div>
                    <div class="sonografia">Matty Martinez - Te Perdono (Video Oficial)</div>
                       </div>
                
            </div>
        <!--  --><div id="mediaVideo"> <iframe class="video-ajuste"  src="https://www.youtube.com/embed/innGRc5w9K8" frameborder="0" allowfullscreen></iframe> </div>
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