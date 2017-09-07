<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<?php header('Content-Type: text/html; charset=ISO-8859-1');?>
	
	<title>Estudio Colectivo de Arquitectura</title>
	<link rel="icon" type="image/png/" href="/eco2/images/eco-ico.png" />
	
	<meta name="viewport" content="width=device-width,initial-scale=1">
	
	
	<link rel="stylesheet" href="slider/css/1140.css">
	<link rel="stylesheet" href="slider/css/flexslider.css">
	<link rel="stylesheet" href="slider/css/style.css">
	<link rel="stylesheet" type="text/css" href="css/barra.css">

	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
	<script type="text/javascript" src="slider/js/jquery.flexslider-min.js"></script>
	
	
	<script src="javascripts/jquery.js"></script>
	<script type="text/javascript" src="//www.google.fr/jsapi"></script></script>
	<script type="text/javascript" src="javascripts/jquery.googlemap.js"></script>
	
	<script type="text/javascript" charset="utf-8">
	  $(window).load(function() {
	    $('.flexslider').flexslider({
	    	controlsContainer: '.flex-container'
	    });
	  });
	  var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-718520-23']);
		_gaq.push(['_trackPageview']);
		
		(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
				
		function backHome(pag) {
			location.href = pag;
		};		
		google.load("maps", "3.4", {
			other_params: "sensor=false&language=fr"
		});
	</script>
</head>

<body>
	<div class="barracentro azul">
	
		<a class="txt_top" target="_blank" href="https://facebook.com/estudiocolectivodearquitectura/">
			<img alt="ECO" src="assets/imgs/fbicon.png" >
		</a>
		<a class="txt_top" target="_blank" href="https://www.instagram.com/eco.arq/">
			<img alt="ECO" src="assets/imgs/instaicon.png" >
		</a>
		<a class="txt_top" target="_blank" href="#">
			<img alt="ECO" src="assets/imgs/twicon.png" >
		</a>
		<a class="txt_top" style="margin-top:50% !important" href="#popup-contacto" data-rel="popup" data-position-to="window" data-transition="fade">Contacto</a>
		<a class="txt_top" href="#popup-eco" data-rel="popup" data-position-to="window" data-transition="fade">ECO</a>
		<a href="#" onclick="backHome('./portafolio.php');"> <img  style="margin-left:10px;" alt="ECO" src="/eco2/images/eco-ico-white.png" ><a/> 
		
	</div>

  <div class="container">
  
  <br/>
  <br/>
    
    <div id="main" class="row">
    
    	<div class="onecol"></div> 
    	   
			<div id="slider" class="tencol">

				<div class="flex-container">
					<div class="flexslider">
						<ul class="slides">
						<?php
							if(isset($_GET['proyecto'])) { 
								$nombreProyecto = $_GET['proyecto']; 
							}
							if($gestor=opendir('./img/'.$nombreProyecto)) { 
							$i = 0;
							while (($archivo=readdir($gestor))!==false){ 
								if ((!is_file($archivo))and($archivo!='.')and($archivo!='..')and($archivo!='desc.txt')){ 
										
										$array_img[$i]=$archivo; 
										$i++;
								}
							} 
							closedir($gestor); 
						}
						?>
							<?php foreach ($array_img as &$imagen) {?>
								<li class="img"><img src="img/<?php echo $nombreProyecto."/".$imagen; ?>" alt=""></li>
							<?php } ?>
						</ul><!-- .slides -->
						
					</div><!-- .flexslider -->
				</div><!-- .flex-container -->
				<br/>
				<?php
					$fp = fopen('./img/'.$nombreProyecto.'/desc.txt', 'r');
					
					
					echo '<p style="text-align:justify; margin-top:10%; font-size: 140%">';									

					while(!feof($fp)) {
						$linea = fgets($fp);
						//echo $linea;
						echo nl2br($linea);
					}
					"</p>";
					fclose($fp);
				?>
			</div>	
    	<div class="onecol last"></div>
    </div>
  </div> <!--! end of #container -->

  <!--[if lt IE 7 ]>
    <script src="http://ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
    <script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
  <![endif]-->
  
</body>
</html>
