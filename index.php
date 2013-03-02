<?php require('function/base.php');?>
<!DOCTYPE html>
<html lang="es-ES">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<title>SebaThomson</title>
	<link rel="stylesheet" href="css/style.css" media='screen'/>
	<link rel="stylesheet" href="css/user.css" media='screen'/>
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
			<div id="sidebar">
				<img id="profile-img" src="<?php echo get_gravatar('seba.thomson@gmail.com', 160); ?>
				" />
				<span id="profile">Ingeniero en Computación e Informática</span>
				<ul>
					<a href="https://twitter.com/#!/SebaThomson">
						<li id="twitter">
							<img src="img/homepage/twitter.png" alt="" />
						</li>
					</a>
					<a href="http://t.thomsoncorp.cl/">
						<li id="tumblr">
							<img src="img/homepage/tumblr.png" alt="" />
						</li>
					</a>
					<a href="https://www.facebook.com/sebathomsonh">
						<li id="facebook">
							<img src="img/homepage/facebook.png" alt="" />
						</li>
					</a>
				</ul>
			</div>
		</div>
	</div>
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