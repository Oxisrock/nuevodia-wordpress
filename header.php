<!DOCTYPE html>
<html <?php language_attributes(); ?>> <!-- para obtener el lang desde el mismo wordpress -->
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<title><?php wp_title('|', true, 'right');?><?php bloginfo('name');?></title> <!-- traiendose el titulo de page o post y un separador a la derecha-->
  <?php wp_head(); ?> <!-- funcion de head para traer los cambios en el head -->
</head>

<body>

	<div id='preloader' >
			<div class='loader' >
					<img src="<?php echo get_bloginfo('template_url') ?>/img/loading.gif" width="200" alt="">
			</div>
	</div>
<div>
	<div class="news-ticker-wrap visible-md visible-lg">
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
      <div class="mid-header visible-md visible-lg" style="background-image: url(<?php echo esc_url( get_theme_mod( 'img-upload-header' ) ); ?>);">
          <div class="container">
              <div class="site-branding text-center">
								<a href="/wp_nuevodia/index.php"><img id="logo" class="text-center" src='<?php echo esc_url( get_theme_mod( 'img-upload-logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?> Logo' class="img-responsive"></a>
                  <div class="container">
                  <div class="col-xs-6 xs-padding xs-text-center">
                      <p class="no-margin fz-13 text-light"></p>
                  </div>
									<div class="col-xs-12 xs-padding visible-md visible-lg">
											<ul class="footer-social text-center xs-text-center">
													<li><a href="#"><i class="fa fa-facebook fa-3x"></i></a></li>
													<li><a href="#"><i class="fa fa-twitter fa-3x"></i></a></li>
													<li><a href="#"><i class="fa fa-instagram fa-3x"></i></a></li>
											</ul>
									</div><!-- /.site-branding -->

              	</div>
              </div><!-- /.site-branding -->

          </div>
      </div><!-- /.mid-header -->
			<div class="mainmenu-wrap bg-red">
					<div class="container menu-top">
							<div class="visible-md visible-lg">
											<div class="menu-wrap mean-menu">
													<nav class="mainmenu menu-complete">
															<ul id="navi-menu" class="menu-items">

																	<li class="current_page_item"><a href="/wp_nuevodia/">Inicio</a></li>
																	<li class="page_item"><a href="/wp_nuevodia/index.php/category/falcon/">Falcón</a>
																			<ul>
																					 <li><a href="/wp_nuevodia/index.php/category/falcon/politica">Política</a></li>
																					 <li><a href="/wp_nuevodia/index.php/category/falcon/economia">Economía</a></li>
																					 <li><a href="/wp_nuevodia/index.php/category/falcon/educacion">Educación</a></li>
																					 <li><a href="/wp_nuevodia/index.php/category/falcon/salud">Salud</a></li>
																					 <li><a href="/wp_nuevodia/index.php/category/falcon/educacion">Comunidad</a></li>
																					 <li><a href="/wp_nuevodia/index.php/category/falcon/salud">Generales</a></li>
																			</ul>
																	</li>
																	<li><a href="/wp_nuevodia/index.php/category/sucesos">Sucesos</a></li>
																	<li><a href="/wp_nuevodia/index.php/category/nacionales">Nacionales</a></li>
																	<li><a href="/wp_nuevodia/index.php/category/internacionales">Internacionales</a></li>
																	<li><a href="/wp_nuevodia/index.php/category/opinion">Opinión</a></li>
																	<li><a href="/wp_nuevodia/index.php/category/deportes">Deportes</a></li>
																	<li><a href="/wp_nuevodia/index.php/category/espectaculos">Espectáculos</a></li>
																	<li><a href="/wp_nuevodia/index.php/category/naranja">Naranja</a>
																	<li class="page_item"><a href="#noticias">Más</a>
																			<ul>
																					<li><a href="/wp_nuevodia/index.php/category/ciencia-y-tecnologia">Ciencia y tecnología</a></li>
																					 <li><a href="index.php">Turismo</a></li>
																					 <li><a href="index.php">Curiosidades</a></li>
																					 <li><a href="index.php">Cultura</a></li>
																					 <li><a href="index.php">Historias que transcienden</a></li>
																			</ul>
																	</li>
																	</li>
															</ul>
															<?php get_search_form(); ?>
													</nav>
											</div>
									</div>
									<div class="navbar-header hidden-md hidden-lg" style="z-index: 10000; display:flex;">
										<button type="button" class="navbar-toggle togglebutton" data-toggle="collapse" data-target=".navbar-collapse">
							       <span class="fa fa-bars menus fa-2x"></span></button>
											 <label for="buscador-responsive" style="margin-top:auto;margin-bottom:auto;margin-right:30px;"><i class="fa fa-search fa-2x"></i></label>
										 <form id="demo-2" style="margin-top:auto;margin-bottom:auto;margin-right:30px;">
											 	<input type="search" id="buscador-responsive">
										</form>
										<!-- <?php get_search_form(); ?> -->
										<a href="index.php" style="margin: 1em;" class="footer-logo"><img src="http://localhost/nuevodia/wp-content/uploads/2017/11/logo-light.png" alt="NuevoDia"></a>
							</div>
									<div class="new-menu-responsive hidden-md hidden-lg">
										<nav class="collapse navbar-collapse menubar" role="navigation">
									     <ul class="nav navbar-nav navbar-right">
									      <li >
									       <div>
									         <i class="fa fa-home fa-2x icon-borde text-center"></i><a  href="#">Falcon</a>
									       </div>

									     </li>
									     <li >
									        <div class="1">
									         <i class="fa fa-thumb-tack fa-2x chinc icon-borde1 text-center"></i><a  href="#">Sucesos</a>
									       </div>

									     </li>
									      <li >
									      <div>
									         <i class="fa fa-globe fa-2x  icon-borde2 text-center"></i><a  href="#">Internacionales</a>
									       </div>

									        </li>
									      <li>
									       <div>
									         <i class="fa fa-dribbble fa-2x icon-borde3 text-center"></i><a  href="#">Deportes</a>
									       </div>

									     </li>
									      <li >
									       <div>
									         <i class="fa fa-laptop fa-2x icon-borde4 text-center"></i><a  href="#">Tecnologia</a>
									       </div>

									     </li>
									      <li>
									       <div>
									         <i class="fa fa-comments-o fa-2x icon-borde text-center"></i><a  href="#">Opinion</a>
									       </div>

									     </li>
									         <li>
									       <div>
									         <i class="fa fa-star  icon-borde1 fa-2x text-center"></i><a  href="#">Espetaculos</a>
									       </div>

									     </li>
									    </ul>
									  </nav>
									</div>
					</div>
			</div><!-- /.mainmenu-wrap -->
		</header><!-- /#main-header -->
