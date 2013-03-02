<?php require('function/base.php');?>
<!DOCTYPE html>
<html lang="es-ES">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<title>Contacto | SebaThomson</title>
	<link rel="stylesheet" href="css/style.css" media='screen'/>
	<link rel="stylesheet" href="css/user_contacto.css" media='screen'/>
</head>
<body>
	<div class="wrap wide">
		<header id="header">
			<div id="logo">
				<h1>
					<a>Sebastián Andrés Thomson Henríquez</a>
				</h1>
			</div>
			<div id="navbar">
				<ul>
					<li>
						<a href="http://www.thomsoncorp.cl/">Home</a>
					</li>
					<li>
						<a href="http://blog.thomsoncorp.cl/">Blog</a>
					</li>
					<li>
						<a href="http://thomsoncorp.cl/resume.php">Resume</a>
					</li>
					<li>
						<a href="http://thomsoncorp.cl/contacto.php">Contacto</a>
					</li>
				</ul>
			</div>
			<div class="clear"></div>
		</header>
		<div class="contenido">
			<div class="panels">
				<div class="description" id="tab_gmail">
					Seba.Thomson[at]gmail.com
					<br />
					<span>No me envíes spam ¬¬</span>
				</div>
				<div class="description" id="tab_skype">
					SebaThomson
					<br />
					<span>Agrégame como contacto en skype</span>
				</div>
				<div class="description" id="tab_phone">
					+56985844725
					<br />
					<span>Solo para temas de trabajo. No hago ni tengo vida social :D</span>
				</div>
			</div>
			<div class="sidebar" id="gmail">
				<a href="#tab_gmail">
					<img src="img/contact/mail.png" alt="">
					<span>Gmail</span>
				</a>
			</div>
			<div class="sidebar" id="skype">
				<a href="#tab_skype">
					<img src="img/contact/skype.png" alt="">
					<span>Skype</span>
				</a>
			</div>
			<div class="sidebar" id="phone">
				<a href="#tab_phone">
					<img src="img/contact/phone.png" alt="">
					<span>Celular</span>
				</a>
			</div>
		</div>
	</div>
	<script src="js/jquery-1.7.1.min.js" type="text/javascript"></script>
	<script type="text/javascript">
		$("#gmail").click(function () {
			$("#tab_gmail").show();
			$("#tab_skype").hide();
			$("#tab_phone").hide();
		});
		$("#skype").click(function () {
			$("#tab_gmail").hide();
			$("#tab_skype").show();
			$("#tab_phone").hide();
		});
		$("#phone").click(function () {
			$("#tab_gmail").hide();
			$("#tab_skype").hide();
			$("#tab_phone").show();
		});
	</script>
	<script type="text/javascript">
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-37427122-1']);
	  _gaq.push(['_setDomainName', 'thomsoncorp.cl']);
	  _gaq.push(['_trackPageview']);

	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
	</script>
</body>
</html>