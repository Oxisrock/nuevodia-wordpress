<?php get_header(); ?>
<div class="container">
	<div class="banner bg-white separacion separacion-top">
		<?php if ( function_exists( 'easingslider' ) ) { easingslider( 180 ); } ?>
	</div>
	<div class="container-post">
		<div class="post">
			<section class="separacion main-content">

				<?php if (have_posts()) : while( have_posts() ) : the_post(); ?>
					<?php $post_views = get_post_views(get_the_ID());?>
					<article class="">
						<?php $post_thumbnail_id = get_post_thumbnail_id( $post_id );
						$url = wp_get_attachment_url( $post_thumbnail_id);
						?>

						<?php the_category(); ?>

						<div class="img-post separacion" style="background-image:url(<?php echo $url; ?>);">
							<div class="title-post"><h1><?php the_title(); ?></h1></div>
						</div>
						<header class="atributes-post">
							<p><i class="fa fa-calendar-o"></i><?php the_time( get_option('date_format') ); ?></p> <p><i class="fa fa-user"></i> <?php the_author(); ?></p> <?php if (the_tags) : ?><p><i class="fa fa-bookmark-o"></i> <?php the_tags(); ?></p><?php endif; ?>
						</header>

						<div class="post-content">
							<?php the_content(); ?>
						</div>
						<p>vistas <i class="fa fa-views"></i> <?php  echo sprintf( _n( '%s vez', '%s veces', $post_views, 'your_textdomain' ), $post_views );?></p>

						<!-- <div class="social-share-wrap">
						<span class="fz-16 text-black fw-6">Compartir:</span>
						<ul class="share-icon">
						<li><a href="#"><i class="fa fa-facebook"></i> Facebook</a></li>
						<li><a href="#"><i class="fa fa-twitter"></i> Twitter</a></li>
						<li><a href="#"><i class="fa fa-google"></i> Google+</a></li>
					</ul>
				</div><!-- social-share-wrap -->
			</article>	<!-- article -->

		<?php endwhile; endif; ?>
	</section><!-- /#main-content -->
	<section class="separacion main-content">
		<div class="author-info">
			<div class="thumbnail-author">
				<?php echo get_avatar( get_the_author_meta('email'), '80' ); ?>
				<div class="thumbnail-author-img" style="background: url(<?php echo get_avatar( get_the_author_meta('email'), '80' ); ?>)">
				</div>
				<!-- <?php echo get_avatar( get_the_author_meta('email'), '80' ); ?> -->
				<?php
	                // FACEBOOK
	                $perfil_facebook = get_the_author_meta( 'perfil_facebook' );
	                if ( $perfil_facebook && $perfil_facebook != '' ) {
	                    echo '<a class="face" target="_blank" href="' . esc_url($perfil_facebook) . '">'.' <i class="fa fa-facebook fa-2x"></i> '.'</a>';
	                }

									// TWITTER
	                $perfil_twitter = get_the_author_meta( 'perfil_twitter' );
	                if ( $perfil_twitter && $perfil_twitter != '' ) {
	                    echo '<a class="twitter" target="_blank" href="' . esc_url($perfil_twitter) . '">'.' <i class="fa fa-twitter fa-2x"></i> '.'</a>';
	                }

	                // LINKEDIN
	                $perfil_linkedin = get_the_author_meta( 'perfil_linkedin' );
	                if ( $perfil_linkedin && $perfil_linkedin != '' ) {
	                    echo '<a class="linkedin" target="_blank" href="' . esc_url($perfil_linkedin) . '">'.' <i class="fa fa-linkedin fa-2x"></i> '.'</a>';
	                }
	                ?>
			</div>
			<div class="description-author">
				<h3><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><?php the_author(); ?></a></h3>
				<p><?php the_author_meta('description'); ?></p>
			</div>
		</div>
	</section>
	<section class="separacion main-content">
		<div class="relacionadas">
			<h3>NOTICIAS RELACIONADAS</h3>
			<div class="post-relations">
				<?php
				$related = get_posts( array( 'category__in' => wp_get_post_categories($post->ID), 'orderby'=>'rand', 'numberposts' => 4, 'post__not_in' => array($post->ID) ) );

				if( $related ) foreach( $related as $post ) {
					setup_postdata($post); ?>
					<div class="post-relationship">
						<a target="_blank" href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>">
							<?php if ( has_post_thumbnail() ) {
								the_post_thumbnail();
							}else{
								?>
								<img src="<?php bloginfo('template_url'); ?>/img/nombre-imagen-defecto.png" />
								<?php
							}
							?>
							<div class="post-relationship-content">
								<p class="titlelast"><?php the_title(); ?></p>
								<p><i class="fa fa-calendar-o" aria-hidden="true"></i> <?php the_time( get_option('date_format') ); ?></p>
							</div>
						</a>
					</div>
					<?php }
					wp_reset_postdata(); ?>
				</div>
			</div>
		</section>
		<div class="banner bg-white separacion">
			<?php if ( function_exists( 'easingslider' ) ) { easingslider( 180 ); } ?>
		</div>
	</div>
		<aside id="sidebar" class="sidebar-widgets m-padding">
		  <div class="sidebar-wrap">

		  <!-- <div class="widget">
		    <h3 class="widget-title">Widget de texto</h3>
		    <div class="widget-content">
		      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		    </div>
		  </div> -->
		  <?php
		    if (is_active_sidebar('sidebar_post_page')) {
		      dynamic_sidebar('sidebar_post_page');
		    }else { ?>
		      <div class="single-sidebar">
		        <h3 class="fw-8 fz-18 tt-u mb-30"><?php _e('Buscar', 'apk'); ?></h3>
		        <?php get_search_form(); ?>
		      </div>
		  <?php  }?>
		</div>
		</aside><!-- /#sidebar -->
</div>
</div>
<?php get_footer(); ?>
