<?php require('function/base.php');?>
<!DOCTYPE html>
<html lang="es-ES">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<title>Resume | SebaThomson</title>
	<link rel="stylesheet" href="css/style_resume.css" media='screen'/>
	<link rel="stylesheet" href="css/user_resume.css" media='screen'/>
	<link rel="stylesheet" href="css/bootstrap.css" media='screen'/>
</head>
<body>
	<div class="wrap wide">
		<header id="header">
			<div class="pdf"><a href="resume/resume.pdf">PDF</a></div>
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
			<div class="sidebar" id="education">
				<a href="#tab_education">
					<img src="img/resume/graduation.png" alt="">
					<span>Education</span>
				</a>
			</div>
			<div class="sidebar" id="profile">
				<a href="#tab_profile">
					<img src="img/resume/user.png" alt="">
					<span>Profile</span>
				</a>
			</div>
			<div class="sidebar" id="technical">
				<a href="#tab_technical">
					<img src="img/resume/cog.png" alt="">
					<span>Technical</span>
				</a>
			</div>
			<div class="sidebar" id="work">
				<a href="#tab_work">
					<img src="img/resume/briefcase.png" alt="">
					<span>Experience</span>
				</a>
			</div>
		</div>
		<div class="panels">
			<div class="description" id="tab_education">
				<div class="full-width">
					<div id="main">
						<div class="post">
							<div class="post-content">
								<h1 class="title">Education</h1>
								<div class="entry">
									<p>
										<div class="fivecol-one">
											<p>
												<span class="anio">2008 - 2012</span>
											</p>
										</div>
										<div class="fivecol-four">
											<p>
												<span class="titulo">Ingeniería en Computación e Informática</span>
												<br /> <b>Institución:</b>
												Universidad Nacional Andrés Bello
												<br/> <b>Nivel:</b>
												Enseñanza Superior
												<br />
											</p>
											<p>
												<b>Comentarios:</b>
												A la espera de mi título.
											</p>
										</div>
									</p>
									<div class="clear"></div>
									<hr>
									<p>
										<div class="fivecol-one">
											<p>
												<span class="anio">2005 - 2007</span>
											</p>
										</div>
										<div class="fivecol-four">
											<p>
												<span class="titulo">Técnico Contable Nivel Medio</span>
												<br />
												<b>Institución:</b>
												Colegio Polivalente Francisco Ramírez
												<br/>
												<b>Nivel:</b>
												Enseñanza Media
												<br />
											</p>
											<p>
												<b>Comentarios:</b>
												Durante 2 años estuve aprendiendo lo básico de la contabilidad.
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
			<div class="description" id="tab_profile">
				<div class="full-width">
					<div id="main">
						<div class="post">
							<div class="post-content">
								<h1 class="title">Professional Profile</h1>
								<!-- <div class="entry"> -->
								<div style="padding-left: 50px;">
									<p>
										<b>Ingeniero en Computación e Informática</b> de la Universidad Andrés Bello. 
									</p>
									<p>
										Apasionado por todo lo que tenga que ver con las tecnologías web. 
									</p>
									<p>
										Soy desarrollador de plataformas web basadas en el lenguaje <a href="<?php echo path_blog_tag; ?>php">PHP</a>/<a href="<?php echo path_blog_tag; ?>mysql">MySQL</a>.
									</p>
									<p>
										También 'le pego' al diseño de los sitios web en los que he trabajado.
										<ul style="padding-left: 10px;">
											<li>Maqueteo en <a href="<?php echo path_blog_tag; ?>html">HTML</a> (Actualmente aprendiendo <b>HTML5</b>)</li>
											<li>Aplico diseño con <a href="<?php echo path_blog_tag; ?>css">CSS</a> (Actualmente aprendiendo <b>CSS3</b>)</li>
											<li>Ocasionalmente uso <a href="<?php echo path_blog_tag; ?>js">JavaScript</a> (Siempre aprendo más de él y del framework jQuery)</li>
											<li>Aprendiendo Responsive Design y Elastic Design.</li>
										</ul>
									</p>
									<p>
										Mi Inglés es básico pero estoy haciendo un curso para subir mi nivel.
									</p>
									<p>
										Me gusta aprender cosas nuevas. Así que si no se algo, daré mi 110% para aprenderlo.
									</p>
									<p style="float: right">Seba<b>Thomson</b>.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="description" id="tab_technical">
				<div class="full-width">
					<div id="main">
						<div class="post">
							<div class="post-content">
								<h1 class="title">Programming</h1>
								<div class="entry">
									<p>
										<div class="usercol">
											<p>
												<span class="anio"><a href="<?php echo path_blog_tag; ?>php">PHP</a></span>
											</p>
											<p>
												<div class="progress progress-striped">
													<div class="bar" style="width: 75%;"></div>
												</div>
											</p>
											<p>
												<b>Symfony 1.4</b>: Intermedio
											</p>
										</div>
										<div class="usercol">
											<p>
												<span class="anio"><a href="<?php echo path_blog_tag; ?>python">Python</a></span>
											</p>
											<p>
												<div class="progress progress-striped">
													<div class="bar" style="width: 25%;"></div>
												</div>
											</p>
											<p>
												<b>Django</b>: Básico
											</p>
										</div>
										<div class="clear"></div>
										<hr>
										<div class="usercol">
											<p>
												<span class="anio">SQL</span>
											</p>
											<p>
												<div class="progress progress-striped">
													<div class="bar" style="width: 75%;"></div>
												</div>
											</p>
											<p>
												<b>MySQL</b>: Intermedio
											</p>
										</div>
									</p>
									<div class="clear"></div>
								</div>
							</div>
						</div>
						<div class="hr clear"></div>
						<div class="post">
							<div class="post-content">
								<h1 class="title title-two">Web</h1>
								<div class="entry">
									<p>
										<div class="usercol">
											<p>
												<span class="anio"><a href="<?php echo path_blog_tag; ?>html">HTML / HTML5</a></span>
											</p>
											<p>
												<div class="progress progress-success progress-striped">
													<div class="bar" style="width: 75%;"></div>
												</div>
											</p>
											<p>
												<b>HTML</b>: Avanzado
												<b>HTML5</b>: Intermedio
											</p>
										</div>
										<div class="usercol">
											<p>
												<span class="anio"><a href="<?php echo path_blog_tag; ?>css">CSS / CSS3</a></span>
											</p>
											<p>
												<div class="progress progress-success progress-striped">
													<div class="bar" style="width: 75%;"></div>
												</div>
											</p>
											<p>
												<b>CSS</b>: Avanzado
												<b>CSS3</b>: Intermedio
												<b>Bootstrap</b>: Intermedio
											</p>
										</div>
										<div class="clear"></div>
										<hr>
										<div class="usercol">
											<p>
												<span class="anio"><a href="<?php echo path_blog_tag; ?>js">JavaScript</a></span>
											</p>
											<p>
												<div class="progress progress-success progress-striped">
													<div class="bar" style="width: 25%;"></div>
												</div>
											</p>
											<p>
												<b>jQuery</b>: Básico
											</p>
										</div>
									</p>
									<div class="clear"></div>
								</div>
							</div>
						</div>
						<div class="hr clear"></div>
						<div class="post">
							<div class="post-content">
								<h1 class="title title-two">Tools</h1>
								<div class="entry">
									<p>
										<div class="usercol">
											<p>
												<span class="anio">Netbeans</span>
											</p>
											<p>
												<div class="progress progress-warning progress-striped">
													<div class="bar" style="width: 95%;"></div>
												</div>
											</p>
										</div>
										<div class="usercol">
											<p>
												<span class="anio"><a href="<?php echo path_blog_tag; ?>">Sublime Text 2</a></span>
											</p>
											<p>
												<div class="progress progress-warning progress-striped">
													<div class="bar" style="width: 95%;"></div>
												</div>
											</p>
										</div>
									</p>
									<div class="clear"></div>
								</div>
							</div>
						</div>
						<div class="hr clear"></div>
						<div class="post">
							<div class="post-content">
								<h1 class="title title-two">Operating Systems | Office Suites</h1>
								<div class="entry">
									<p>
										<div class="usercol">
											<p>
												<span class="anio">Windows XP/7</span>
											</p>
											<p>
												<div class="progress progress-danger progress-striped">
													<div class="bar" style="width: 75%;"></div>
												</div>
											</p>
										</div>
										<div class="usercol">
											<p>
												<span class="anio">Word/Excel/Pont</span>
											</p>
											<p>
												<div class="progress progress-danger progress-striped">
													<div class="bar" style="width: 75%;"></div>
												</div>
											</p>
										</div>
									</p>
									<div class="clear"></div>
								</div>
							</div>
						</div>
						<div class="hr clear"></div>
						<div class="post">
							<div class="post-content">
								<h1 class="title title-two">*Niveles</h1>
								<div class="entry">
									<p>
										<div class="threecol-one">
											<p>
												<span class="anio">Básico</span>
											</p>
										</div>
										<div class="threecol-two">
											<p>
												<div class="progress progress-striped">
													<div class="bar" style="width: 25%;"></div>
												</div>
											</p>
										</div>
										<div class="clear"></div>
										<div class="threecol-one">
											<p>
												<span class="anio">Intermedio</span>
											</p>
										</div>
										<div class="threecol-two">
											<p>
												<div class="progress progress-striped">
													<div class="bar" style="width: 50%;"></div>
												</div>
											</p>
										</div>
										<div class="clear"></div>
										<div class="threecol-one">
											<p>
												<span class="anio">Intermedio-Avanzado</span>
											</p>
										</div>
										<div class="threecol-two">
											<p>
												<div class="progress progress-striped">
													<div class="bar" style="width: 75%;"></div>
												</div>
											</p>
										</div>
										<div class="clear"></div>
										<div class="threecol-one">
											<p>
												<span class="anio">Avanzado</span>
											</p>
										</div>
										<div class="threecol-two">
											<p>
												<div class="progress progress-striped">
													<div class="bar" style="width: 95%;"></div>
												</div>
											</p>
										</div>
										<div class="clear"></div>
									</p>
									<div class="clear"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="description" id="tab_work">
				<div class="full-width">
					<div id="main">
						<div class="post">
							<div class="post-content">
								<h1 class="title">Experience</h1>
								<div class="entry">
									<p>
										<div class="fivecol-one">
											<p>
												<span class="anio">2012</span>
												<br />
												Sep 2012 - Mar 2013
											</p>
										</div>
										<div class="fivecol-four">
											<p>
												<span class="titulo">Miembro del Equipo Desarrollador de uLearnet</span>
												<br />
												<b>Empresa:</b>
												Universidad de Chile - Programa de Gestión de la Calidad y Seguimiento de los Aprendizajes
												<br/>
											</p>
											<p>
												<b>Funciones:</b>
												Diseño y desarrollo de la plataforma educativa uLearnet3.0
											</p>
											<p>
												<b>Etiquetas:</b>
												<a href="<?php echo path_blog_tag; ?>php">PHP</a>, 
												<a href="<?php echo path_blog_tag; ?>mysql">MySQL</a>, 
												<a href="<?php echo path_blog_tag; ?>sf">Symfony 1.4</a>, 
												<a href="<?php echo path_blog_tag; ?>html">HTML</a>, 
												<a href="<?php echo path_blog_tag; ?>css">CSS</a>, 
												<a href="<?php echo path_blog_tag; ?>bootstrap">Bootstrap</a>, 
												<a href="<?php echo path_blog_tag; ?>js">Javascript</a> y 
												<a href="<?php echo path_blog_tag; ?>jquery">jQuery</a>.
											</p>
										</div>
									</p>
									<div class="clear"></div>
									<hr>
									<p>
										<div class="fivecol-one">
											<p>
												<span class="anio">2012</span>
												<br />
												Nov 2012
											</p>
										</div>
										<div class="fivecol-four">
											<p>
												<span class="titulo">Proyecto Desarrollo de sitio web basado en WordPress.</span>
												<br />
												<b>Empresa:</b>
												Ministerio de Vivienda y Urbanismo - Secretaria Ejecutiva de Campamentos
												<br/>
											</p>
											<p>
												<b>Funciones:</b>
												Personalización de Theme en WordPress para sitio web..
											</p>
											<p>
												<b>Etiquetas:</b>
												<a href="<?php echo path_blog_tag; ?>wordpress">Wordpress</a>, 
												<a href="<?php echo path_blog_tag; ?>php">PHP</a>, 
												<a href="<?php echo path_blog_tag; ?>html">HTML</a>, 
												<a href="<?php echo path_blog_tag; ?>css">CSS</a>, 
												<a href="<?php echo path_blog_tag; ?>js">Javascript</a> y 
												<a href="<?php echo path_blog_tag; ?>jquery">jQuery</a>.
											</p>
										</div>
									</p>
									<div class="clear"></div>
									<hr>
									<p>
										<div class="fivecol-one">
											<p>
												<span class="anio">2012</span>
												<br />
												Ene 2012 - Feb 2012
											</p>
										</div>
										<div class="fivecol-four">
											<p>
												<span class="titulo">Práctica Profesional Ingeniería en Computación e Informática</span>
												<br />
												<b>Empresa:</b>
												Empresa Nacional de Telecomunicaciones (ENTEL)
												<br/>
											</p>
											<p>
												<b>Funciones:</b>
												Explotación de Sistemas y Documentación de Procesos.
											</p>
										</div>
									</p>
									<div class="clear"></div>
									<hr>
									<p>
										<div class="fivecol-one">
											<p>
												<span class="anio">2008 - 2009</span>
												<br />
												Dic 2008 - Feb 2009
											</p>
										</div>
										<div class="fivecol-four">
											<p>
												<span class="titulo">Práctica Técnico Contable</span>
												<br />
												<b>Empresa:</b>
												Oficina Contable SERCORET
												<br/>
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
		$("#education").click(function () {
			$("#tab_education").show(1000);
			$("#tab_profile").hide(1000);
			$("#tab_technical").hide(1000);
			$("#tab_work").hide(1000);
		});
		$("#profile").click(function () {
			$("#tab_education").hide(1000);
			$("#tab_profile").show(1000);
			$("#tab_technical").hide(1000);
			$("#tab_work").hide(1000);
		});
		$("#technical").click(function () {
			$("#tab_education").hide(1000);
			$("#tab_profile").hide(1000);
			$("#tab_technical").show(1000);
			$("#tab_work").hide(1000);
		});
		$("#work").click(function () {
			$("#tab_education").hide(1000);
			$("#tab_profile").hide(1000);
			$("#tab_technical").hide(1000);
			$("#tab_work").show(1000);
		});
		$("#tab_technical").show();
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