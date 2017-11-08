<!DOCTYPE html>
<html <?php language_attributes(); ?>> <!-- para obtener el lang desde el mismo wordpress -->
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<title><?php wp_title('|', true, 'right');?><?php bloginfo('name');?></title> <!-- traiendose el titulo de page o post y un separador a la derecha-->
  <?php wp_head(); ?> <!-- funcion de head para traer los cambios en el head -->
</head>

<body>

	<!-- <div id='preloader' >
			<div class='loader' >
					<img src="wp-content/themes/tema_prueba/img/loading.gif" width="200" alt="">
			</div>
	</div><!-- Preloader -->
	<div class="news-ticker-wrap">
		 <span class="ticker-title tt-u">Lo último</span>
			<ul class="news-ticker">
					<li><a href="#">En breve iniciaremos los avances</a></li>
					<!-- <li><a href="#">Elías Jaua: El chavismo es una mayoría política y cultural en Venezuela</a></li>
					<li><a href="#">Maduro se reunió con gobernadores opositores</a></li>
					<li><a href="#">Panamá confirmó que reunión del Grupo de Lima se realizará este jueves</a></li> -->
			</ul>

			<div class="ticker-control">
					<i class="ti-angle-left" id="prev-ticker"></i>
					<i class="ti-angle-right" id="next-ticker"></i>
			</div>

	</div><!-- /.news-ticker-wrap -->
		<header id="header" class="header sticky-header">
      <div class="mid-header">
          <div class="container">
              <div class="site-branding text-center">
								<a href="#"><img src="wp-content/themes/tema_prueba/img/Logo.png" alt="NuevoDia"></a>
                  <div class="container">
                  <div class="col-xs-6 xs-padding xs-text-center">
                      <p class="no-margin fz-13 text-light"></p>
                  </div>
                  <div class="col-xs-6 xs-padding">
                      <ul class="footer-social text-right xs-text-center">
                          <li><a href="#"><i class="ti-facebook"></i></a></li>
                          <li><a href="#"><i class="ti-twitter"></i></a></li>
                          <li><a href="#"><i class="ti-instagram"></i></a></li>
                          <li><a href="#"><i class="ti-youtube"></i></a></li>
                      </ul>
                  </div>
              </div>
              </div><!-- /.site-branding -->

          </div>
      </div><!-- /.mid-header -->
			<div class="mainmenu-wrap bg-red">
					<div class="container">
							<div class="col-md-9 col-xs-6">
											<div class="menu-wrap mean-menu">
													<nav class="mainmenu">
															<ul id="navi-menu">

																	<li class="current_page_item"><a href="#index.html">Inicio</a></li>
																	<li class="page_item"><a href="category/regionales/">Regionales</a>
																			<ul>
																					 <li><a href="#">Sucesos</a></li>
																					 <li><a href="#">Política</a></li>
																					 <li><a href="#">Economía</a></li>
																					 <li><a href="#">Educación</a></li>
																					 <li><a href="#">Salud</a></li>
																			</ul>
																	</li>
																	<li><a href="#regionales">Nacionales</a></li>
																	<li><a href="#fotomancheta">Internacionales</a></li>
																	<li><a href="#fotomancheta">Opinión</a></li>
																	<li><a href="index.php/category/deportes">Deportes</a></li>
																	<li><a href="#fotomancheta">Espectáculos</a></li>
																	<li class="page_item"><a href="#noticias">Más</a>
																			<ul>
																					<li><a href="index.html">Ciencia y tecnología</a></li>
																					 <li><a href="index.html">Turismo</a></li>
																					 <li><a href="index.html">Curiosidades</a></li>
																					 <li><a href="index.html">Cultura</a></li>
																					 <li><a href="index.html">Historias que transcienden</a></li>
																			</ul>
																	</li>

																	<li><a href="#naranja">Naranja</a>

																	</li>
															</ul>
													</nav>
											</div>
									</div>
									<div class="col-md-3 col-xs-6">
											<form action="#" class="search-form">
													<input type="text" placeholder="Buscar..">
													<button class="submit" type="submit"><i class="ti-search"></i></button>
											</form>
									</div>
									<div class="mobile-menu"></div>
					</div>
			</div><!-- /.mainmenu-wrap -->
		</header><!-- /#main-header -->
