<?php get_header(); ?>
<div class="container">
  <div class="banner bg-white separacion separacion-top">
		<?php if ( function_exists( 'easingslider' ) ) { easingslider( 180 ); } ?>
	</div>
  <span class="separacion-top"><?php the_category(); ?></span>
  <div class="category">
    <div class="category-one separacion-top">
      <div class="slider-nav">
        <a class="next-btn" style="height: 100%;">
        </a>
        <a class="prev-btn" style="height: 100%;">
        </a>
        <div id="carrusel">
          <?php $count = 1;?>
          <?php if (have_posts()) : while( have_posts() ) : the_post(); ?>
            <?php $post_views = get_post_views(get_the_ID());?>
            <?php if ($count <= 3) : ?>
              <div class="carousel">
                <a href="<?php the_permalink(); ?>">
                  <?php $post_thumbnail_id = get_post_thumbnail_id( $post_id );
                  $url = wp_get_attachment_url( $post_thumbnail_id);
                  ?>
                  <div class="slider-img" style="background-image: url(<?php echo $url; ?>);">

                  </div>
                  <!-- <p style="color: #000; font-size: 6em;"><?= $category->name ?></p> -->
                  <div class="picture-caption-fixed">
                    <h2 class="margin-top-5 margin-bottom-5 font-weight-200"><?php the_title(); ?></h2>
                  </div>
                  <!-- <p style="color: #000;"><?php the_time( get_option('date_format') ); ?> </p> -->
                </a>
              </div>
              <?php $count++; ?>
            <?php endif; ?>
          <?php endwhile; endif; ?>
          <?wp_reset_query();?>
          <!-- <p><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></p> -->

        </div>
      </div>
      <div class="category-post-others separacion-top">
        <div class="category-section-one separaciont-top">
        <?php if (have_posts()) : while( have_posts() ) : the_post(); ?>
          <?php $post_views = get_post_views(get_the_ID());?>
          <?php $post_thumbnail_id = get_post_thumbnail_id( $post_id );
          $url = wp_get_attachment_url( $post_thumbnail_id);
          ?>
          <?php $count++; ?>
          <?php if ($count >= 8) : ?>
            <?php if ($count <= 13) : ?>
              <?php if ($count <= 10) : ?>
              <div class="post-relationship">
                <?php echo $count; ?>
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
              <?php endif; ?>
            <?php endif; ?>
          <?php endif; ?>
        <?php endwhile; endif; ?>
      </div>
      <div class="category-section-two separaciont-top">
      <?php if (have_posts()) : while( have_posts() ) : the_post(); ?>
        <?php $post_views = get_post_views(get_the_ID());?>
        <?php $post_thumbnail_id = get_post_thumbnail_id( $post_id );
        $url = wp_get_attachment_url( $post_thumbnail_id);
        ?>
          <?php $count++; ?>
        <?php if ($count >= 22) : ?>
          <?php if ($count <= 24) : ?>
            <?php if ($count >= 21) : ?>
            <div class="post-relationship">
              <?php echo $count; ?>
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
            <?php endif; ?>
          <?php endif; ?>
        <?php endif; ?>
      <?php endwhile; endif; ?>
    </div>
      </div>
      <div class="banner bg-white separacion">
  			<?php if ( function_exists( 'easingslider' ) ) { easingslider( 180 ); } ?>
  		</div>
      <div class="category-section-tree separaciont-top">
      <?php if (have_posts()) : while( have_posts() ) : the_post(); ?>
        <?php $post_views = get_post_views(get_the_ID());?>
        <?php $post_thumbnail_id = get_post_thumbnail_id( $post_id );
        $url = wp_get_attachment_url( $post_thumbnail_id);
        ?>
        <?php $count++; ?>
        <?php if ($count >= 8) : ?>
          <?php if ($count <= 13) : ?>
            <?php if ($count <= 10) : ?>
            <div class="post-relationship">
              <?php echo $count; ?>
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
            <?php endif; ?>
          <?php endif; ?>
        <?php endif; ?>
      <?php endwhile; endif; ?>
    </div>
    <div class="category-section-four separaciont-top">
    <?php if (have_posts()) : while( have_posts() ) : the_post(); ?>
      <?php $post_views = get_post_views(get_the_ID());?>
      <?php $post_thumbnail_id = get_post_thumbnail_id( $post_id );
      $url = wp_get_attachment_url( $post_thumbnail_id);
      ?>
        <?php $count++; ?>
      <?php if ($count >= 22) : ?>
        <?php if ($count <= 24) : ?>
          <?php if ($count >= 21) : ?>
          <div class="post-relationship">
            <?php echo $count; ?>
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
          <?php endif; ?>
        <?php endif; ?>
      <?php endif; ?>
    <?php endwhile; endif; ?>
  </div>
    </div>

    <div class="category-two separacion-top">
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
  <!-- <div class="main-content mt-20 ov-hidden">
  <div class="col-md-8 sm-padding">
  <section id="main-content" class="main-wrapper mb-40">
  <?php if (have_posts()) : while( have_posts() ) : the_post(); ?>
  <?php $post_views = get_post_views(get_the_ID());?>
  <div class="news-block padding-15 bg-white bd-grey mb-40">
  <article class="post resume">
  <header class="post-title">
  <h2 class="block-falcon mb-40"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
  <small class="meta"><?php the_time( get_option('date_format') ); ?> &bull; <a href=""><?php the_category(', '); ?></a></small>
</header>
<div class="post-content">
<?php the_excerpt(); ?>
<a href="<?php the_permalink(); ?>" class="readmore"><?php _e('Seguir Leyendo', 'apk');?> &rarr;</a>
</div>

<p>Este post ha sido visto <?php  echo sprintf( _n( '%s vez', '%s veces', $post_views, 'your_textdomain' ), $post_views );?></p>
</article>	<!-- article -->
</div>
</div>
<!--  <?php endwhile; endif; ?> -->

<?php get_footer(); ?>
