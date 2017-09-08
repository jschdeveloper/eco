<!DOCTYPE html>
<html lang="es">
   <head>
      <meta charset="encoding">
      <meta charset="utf-8">
      <?php header('Content-Type: text/html;  charset=utf-8'); ?>
      <title>Estudio Colectivo de Arquitectura</title>
      <link rel="icon" type="image/png/" href="/eco2/images/eco-ico.png" />
      <meta name="description" content="Estudio Colectivo de Arquitectura"/>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
      <link rel="stylesheet" type="text/css" href="css/reset.css">
      <link rel="stylesheet" type="text/css" href="css/main.css">
      
      <link rel="stylesheet" type="text/css" href="css/barra.css">
      <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Asap|Gudea:400,400italic,700">
      <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
      <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
      <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
      <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>	
      <script type="text/javascript" src="//www.google.fr/jsapi"></script>
      <script type="text/javascript" src="js/jquery.googlemap.js"></script>
	  <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
		<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>	
		<script type="text/javascript" src="//www.google.fr/jsapi"></script>
		<script type="text/javascript" src="js/jquery.googlemap.js"></script>
  

      <script type="text/javascript" language="javascript">
         function editar(id) {
         	location.href = "proyectos.php?proyecto=" + id;
         };
         function backHome(pag) {
         	location.href = pag;
         };
         google.load("maps", "3.4", {
         	other_params: "sensor=false&language=fr"
         });
         
      </script>
   </head>
      <header></header>
	  <body>
      <div class="barracentro azul">
       <a href="#" onclick="backHome('..');"> <img  style="margin-left:10px;" alt="ECO" src="/eco/images/eco-ico-white.png" />
         

         <a class="txt_top" target="_blank" href="https://facebook.com/estudiocolectivodearquitectura/">
         <img alt="Facebook" src="assets/imgs/fbicon.png" >
         </a>
         <a class="txt_top" target="_blank" href="https://www.instagram.com/eco.arq/">
         <img alt="Instagram" src="assets/imgs/instaicon.png" >
         </a>
         <a class="txt_top" target="_blank" href="#">
         <img alt="Twitter" src="assets/imgs/twicon.png" >
         </a>
         <a class="txt_top" href="./nosotros.php" target="_self">
         <img alt="Contacto" src="assets/imgs/mail.png" >
         </a>
         <a class="txt_top" href="./ventas.php" target="_self" >
         <img alt="Ventas" src="assets/imgs/sell.png" >
         </a>
         <a class="txt_top"   href="./contacto.php" target="_self">
         <img alt="Información" src="assets/imgs/info.png" >
         </a>
        
      </div>
      <section class="main clearfix">
      <?php 
         if($gestor=opendir('./img/')) { 
         	$i = 0;
         	while (($archivo=readdir($gestor))!==false){ 
         		if ((!is_file($archivo))and($archivo!='.')and($archivo!='..')){ 
         				$array_img[$i]=$archivo; 
         				$i++;
         		}
         	} 
         	closedir($gestor); 
         	foreach ($array_img as &$imagen) {
         		$ii=0;
         		if($gestor2=opendir('./img/'.$imagen)) { 
         			while (($carpeta=readdir($gestor2))!==false){ 
         				if ((!is_file($carpeta))and($carpeta!='.')and($carpeta!='..')and($carpeta!='desc.txt')){ 
         						$array_img2[$ii]=$carpeta;
         						$ii++;
         				}
         			} 
         			closedir($gestor2); 
         		
         			foreach ($array_img2 as &$imagen2) {
         				
         ?>
      <form id="mi_proyecto" action="proyectos.php" method="POST">
      <div class="work" style="border-style: solid; border-width: 4px;border-color:white;">
      <a href="#" onclick="editar('<?php echo $imagen ?>');">
      <img src="img/<?php echo "/".$imagen ."/".$imagen2; ?>" class="media" alt=""/>
      <div class="caption">
      <div class="work_title">
      <h1><?php echo $imagen;?><br/><br/> Xalapa, Veracruz</h1><br/>
      </div>
      </div>
      </a>
      </div>
      </form>
      <?php	
         break;			
         }
         unset($array_img2);
         }
         }
         }
         ?>
      </section>
      <div class="container">
	
</div>

	


   </body>
</html>