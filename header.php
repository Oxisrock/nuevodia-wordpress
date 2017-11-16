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
	</div> -->

	<div class="news-ticker-wrap">
		 <span class="ticker-title tt-u">Lo último</span>
			<ul class="news-ticker">
	      <?php if (have_posts()) : while( have_posts() ) : the_post(); ?>
					<li class="news-div"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
					<!-- <li><a href="#">Elías Jaua: El chavismo es una mayoría política y cultural en Venezuela</a></li>
					<li><a href="#">Maduro se reunió con gobernadores opositores</a></li>
					<li><a href="#">Panamá confirmó que reunión del Grupo de Lima se realizará este jueves</a></li> -->
					<?php endwhile; endif; ?>
			</ul>

			<div class="ticker-control">
					<div class="slick-prev1 slick-arrow"><i class="fa fa-chevron-left" id="prev-ticker"></i></div>
					<div class="slick-next2 slick-arrow"><i class="fa fa-chevron-right" id="next-ticker"></i></div>
			</div>

	</div><!-- /.news-ticker-wrap -->
		<header id="header" class="header sticky-header">
      <div class="mid-header">
          <div class="container">
              <div class="site-branding text-center">
								<a href="/nuevodia/index.php"><img src="wp-content/themes/tema_prueba/img/Logo.png" alt="NuevoDia"></a>
                  <div class="container">
                  <div class="col-xs-6 xs-padding xs-text-center">
                      <p class="no-margin fz-13 text-light"></p>
                  </div>
									<br>
									<div class="col-xs-12 xs-padding">
											<ul class="footer-social text-center xs-text-center">
													<li><a href="#"><i class="fa fa-facebook"></i></a></li>
													<li><a href="#"><i class="fa fa-twitter"></i></a></li>
													<li><a href="#"><i class="fa fa-instagram"></i></a></li>
											</ul>
									</div><!-- /.site-branding -->

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

																	<li class="current_page_item"><a href="/nuevodia/">Inicio</a></li>
																	<li class="page_item"><a href="/nuevodia/index.php/category/falcon/">Falcón</a>
																			<ul>
																					 <li><a href="/nuevodia/index.php/category/falcon/politica">Política</a></li>
																					 <li><a href="/nuevodia/index.php/category/falcon/economia">Economía</a></li>
																					 <li><a href="/nuevodia/index.php/category/falcon/educacion">Educación</a></li>
																					 <li><a href="/nuevodia/index.php/category/falcon/salud">Salud</a></li>
																					 <li><a href="/nuevodia/index.php/category/falcon/educacion">Comunidad</a></li>
																					 <li><a href="/nuevodia/index.php/category/falcon/salud">Generales</a></li>
																			</ul>
																	</li>
																	<li><a href="/nuevodia/index.php/category/sucesos">Sucesos</a></li>
																	<li><a href="/nuevodia/index.php/category/nacionales">Nacionales</a></li>
																	<li><a href="/nuevodia/index.php/category/internacionales">Internacionales</a></li>
																	<li><a href="/nuevodia/index.php/category/opinion">Opinión</a></li>
																	<li><a href="/nuevodia/index.php/category/deportes">Deportes</a></li>
																	<li><a href="/nuevodia/index.php/category/espectaculos">Espectáculos</a></li>
																	<li><a href="/nuevodia/index.php/category/naranja">Naranja</a>
																	<li class="page_item"><a href="#noticias">Más</a>
																			<ul>
																					<li><a href="/nuevodia/index.php/category/ciencia-y-tecnologia">Ciencia y tecnología</a></li>
																					 <li><a href="index.html">Turismo</a></li>
																					 <li><a href="index.html">Curiosidades</a></li>
																					 <li><a href="index.html">Cultura</a></li>
																					 <li><a href="index.html">Historias que transcienden</a></li>
																			</ul>
																	</li>
																	</li>
															</ul>
													</nav>
											</div>
									</div>
									<?php get_search_form(); ?>
									<div class="mobile-menu"></div>
					</div>
			</div><!-- /.mainmenu-wrap -->
		</header><!-- /#main-header -->
