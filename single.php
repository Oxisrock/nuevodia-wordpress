<?php get_header(); ?>
<div class="container">
	<div class="banner bg-white separacion separacion-top">
		<?php if ( function_exists( 'easingslider' ) ) { easingslider( 180 ); } ?>
	</div>
	<div class="container-post">
		<div class="post">
			<section class="separacion main-contento">

				<?php if (in_category('opinion')) : ?>
			<h2 class="block-opinion mb-40">OPINIóN</h2>
		<?php elseif (in_category('falcon')) : ?>
			<h2 class="block-falcon mb-20">FALCÓN</h2>
		<?php elseif (in_category('espectaculos')) : ?>
			<h2 class="block-espectaculos mb-40">ESPECTÁCULOS</h2>
		<?php elseif (in_category('deportes')) : ?>
			<h2 class="block-deportes mb-40">DEPORTES</h2>
		<?php elseif (in_category('sucesos')) : ?>
			<h2 class="block-sucesos mb-40">SUCESOS</h2>
		<?php elseif (in_category('ciencia-y-tecnologia')) : ?>
			<h2 class="block-ciencia mb-40">CIENCIA Y TECNOLOGÍA</h2>
		<?php elseif (in_category('nacionales')) : ?>
			<h2 class="block-nacionales mb-40">NACIONALES</h2>
		<?php elseif (in_category('internacionales')) : ?>
			<h2 class="block-inter mb-40">INTERNACIONALES</h2>
			<?php else : ?>
			<p>This is some generic text to describe all other category pages,
			I could be left blank</p>
			<?php endif; ?>
				<?php if (have_posts()) : while( have_posts() ) : the_post(); ?>
					<?php $post_views = get_post_views(get_the_ID());?>
					<article class="">
						<?php $post_thumbnail_id = get_post_thumbnail_id( $post_id );
						$url = wp_get_attachment_url( $post_thumbnail_id);
						?>
						<div class="img-post separacion" style="background-image:url(<?php echo $url; ?>);">
							<div class="title-post"><h1><?php the_title(); ?></h1></div>
						</div>
						<div class="atributes-post" style="padding-top: 2em;">
							<p><?php the_time( get_option('date_format') ); ?></p><?php if (in_category('opinion')) : ?><p><i class="fa fa-user"></i> <?php the_author(); ?></p> <?php endif; ?> <?php if (has_tag('')) : ?><p><i class="fa fa-bookmark-o"></i> <?php the_tags(); ?></p><?php endif; ?>
						</div>

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
	<?php if (in_category('opinion')) : ?>
	<section class="separacion main-contento">
		<div class="author-info">
			<div class="thumbnail-author">
				<?php echo get_avatar( get_the_author_meta('email'), '80' ); ?>
				<div class="thumbnail-author-img" style="background: url(<?php echo get_avatar( get_the_author_meta('email'), '80' ); ?>)">
				</div>
		</div>
			<div class="description-author">
				<h3><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><?php the_author(); ?></a></h3>
				<p><?php the_author_meta('description'); ?></p>
				<div class="author-social text-center">
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
			</div>
		</div>
	</section>
<?php endif ?>
	<section class="separacion main-contento">
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
								<p><?php the_time( get_option('date_format') ); ?></p>
							</div>
						</a>
					</div>
					<?php }
					wp_reset_postdata(); ?>
				</div>
			</div>
		</section>
	</div>
		<aside id="sidebar" class="sidebar-widgets m-padding visible-md visible-lg">
		  <div class="sidebar-wrap">
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
