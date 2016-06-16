

		<meta http-equiv="Content-Type" content="text/html; charset= UTF-8" />
		<link rel="stylesheet" href="css/main.css">

<title>Renuevo</title>
		
		<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
		
		<meta name="keywords" content="Renuevo, renuevo, 87.9, la voz de la cristanizacion, cristanizacion,
		la voz de la cristanización">
    
    <meta name="rating" content="general"/>
	<meta name="ROBOTS" content="index, follow">
	<meta name="revisit-after" content="1 days">
    <meta name="author" content="agencia7am.com" />
    <meta name="google-site-verification" content="ALaRzgkTOXzZftd3qoZQo6URJbjIROAmU3R23x19uxc" />
		
		
		<!-- Super Box -->
		<link rel="stylesheet" href="css/jquery.superbox.css" type="text/css" media="all" />
		<script type="text/javascript" src="js/jquery.js"></script>
		<!--<script type="text/javascript" src="js/jquery.min.js"></script>-->
		<script type="text/javascript" src="js/jquery.superbox-min.js"></script>
		

		<link rel="stylesheet" type="text/css" href="css/slick.css"/>
		<link rel="stylesheet" type="text/css" href="css/slick-theme.css"/>
		
		<!-- Slcik iniciado -->
		
		<style>
    
     

		.item{ height: 360px; 
				width: 285px;
				background-color: transparent; 
			}

		.slick-slide{
					width:1%;
					margin-right: 1px;
					margin-left: 1px;
					margin: auto;
		}
		
	
		


    </style>
		
		<script type="text/javascript" src="js/jquery.js"></script>

 		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/component3d.css" />
		<link rel="stylesheet" type="text/css" href="css/menu_sideslide.css" />
		<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
		<link rel="stylesheet" href="css/lightbox.css">
		
		<!-- csstransforms3d-shiv-cssclasses-prefixed-teststyles-testprop-testallprops-prefixes-domprefixes-load --> 
		<script src="js/modernizr.custom.25376.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				$("#firstImage").trigger("click");
			});
		</script>
		<?php 
			$root = '';
			$path = 'images/ads/';
			$imgList = getImagesFromDir($root . $path);
			$img = getRandomFromArray($imgList);
				function getImagesFromDir($path) {
					$images = array();
					if ( $img_dir = @opendir($path) ) {
						while ( false !== ($img_file = readdir($img_dir)) ) {
							// checks for gif, jpg, png
							if ( preg_match("/(\.gif|\.jpg|\.png)$/", $img_file) ) {
								$images[] = $img_file;
							}
						}
						closedir($img_dir);
					}
					return $images;
				}

				function getRandomFromArray($ar) {
					$num = array_rand($ar);
					return $ar[$num];
				}

		?>
		
		
		




		
	