<?php require('function/base.php');?>
<!DOCTYPE html>
<html lang="es-ES">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<title>Resume | SebaThomson</title>
	<link rel="stylesheet" href="css/style_projects.css" media='screen'/>
	<link rel="stylesheet" href="css/user_projects.css" media='screen'/>
	<link rel="stylesheet" href="css/bootstrap.css" media='screen'/>
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
						<a href="http://thomsoncorp.cl/">Home</a>
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
		</div>
		<div class="panels">
			<div class="description" id="tab_education">
				<div class="full-width">
					<div id="main">
						<div class="post">
							<div class="post-content">
								<h1 class="title">Projects</h1>
								<div class="entry">
									<p>
										<div class="threecol-one">
											<p>
												<a href="http://projects.thomsoncorp.cl/phpscaffold/" class="thumbnail">
													<img src="img/projects/ScaffoldCRUD.png" alt="ScaffoldCRUD" id="image-project" />
												</a>
											</p>
										</div>
										<div class="threecol-two">
											<p>
												<span class="titulo">ScaffoldCRUD</span>
												<br />
												<b>Descripción:</b>
												Sitio web en el se puede obtener las páginas CRUD en PHP desde la estruectura de una tabla SQL.
												<br/>
												<b>Comentarios:</b>
												El proyecto lo realicé utilizando los source del proyecto <a href="http://www.phpscaffold.com/">http://www.phpscaffold.com/</a>
											</p>
											<p><b>Sitio Web:</b> <a href="http://projects.thomsoncorp.cl/phpscaffold/">http://projects.thomsoncorp.cl/phpscaffold/</a></p>
											<p>
												<b>Etiquetas:</b>
												<a href="<?php echo path_blog_tag; ?>php">PHP</a>, 
												<a href="<?php echo path_blog_tag; ?>html">HTML</a>, 
												<a href="<?php echo path_blog_tag; ?>css">CSS</a>, 
												<a href="<?php echo path_blog_tag; ?>bootstrap">Bootstrap</a>, 
												<a href="<?php echo path_blog_tag; ?>jquery">jQuery</a>.
											</p>
										</div>
									</p>
									<div class="clear"></div>
									<hr>
									<p>
										<div class="threecol-one">
											<p>
												<a href="http://thomsoncorp.cl/project/phpscaffold/" class="thumbnail">
													<img src="img/projects/IntranetIntegraIngenieía.png" alt="IntranetIntegraIngenieía" id="image-project" />
												</a>
											</p>
										</div>
										<div class="threecol-two">
											<p>
												<span class="titulo">Intranet Integra Ingeniería (Proyecto de Título)</span>
												<br />
												<b>Descripción:</b>
												Sitio Web de mi proyecto de título para la Universidad Andrés Bello.
												<br/>
												<b>Comentarios:</b>
												Todo el desarrollo fue realizado por <a href="https://twitter.com/milo86U">Camilo Navarrete</a> y yo.
											</p>
											<p><b>Sitio Web:</b> <a href="http://thomsoncorp.cl/project/intranetii/">http://thomsoncorp.cl/project/intranetii/</a></p>
											<p>
												<b>Etiquetas:</b>
												<a href="<?php echo path_blog_tag; ?>php">PHP</a>, 
												<a href="<?php echo path_blog_tag; ?>html">HTML</a>, 
												<a href="<?php echo path_blog_tag; ?>css">CSS</a>, 
												<a href="<?php echo path_blog_tag; ?>javascript">JavaScript</a>, 
												<a href="<?php echo path_blog_tag; ?>jquery">jQuery</a>.
											</p>
										</div>
									</p>
									<div class="clear"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="js/jquery-1.7.1.min.js" type="text/javascript"></script>
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