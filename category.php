<?php get_header(); ?>
<div class="container">
  <div class="banner bg-white separacion separacion-top">
    <?php if ( function_exists( 'easingslider' ) ) { easingslider( 180 ); } ?>
  </div>
  <?php if (is_category('opinion')) : ?>
<h2 class="block-opinion mb-40">OPINIóN</h2>
<?php elseif (is_category('falcon')) : ?>
<h2 class="block-falcon mb-20">FALCÓN</h2>
<?php elseif (is_category('espectaculos')) : ?>
<h2 class="block-espectaculos mb-40">ESPECTÁCULOS</h2>
<?php elseif (is_category('deportes')) : ?>
<h2 class="block-deportes mb-40">DEPORTES</h2>
<?php elseif (is_category('sucesos')) : ?>
<h2 class="block-sucesos mb-40">SUCESOS</h2>
<?php elseif (is_category('ciencia-y-tecnologia')) : ?>
<h2 class="block-ciencia mb-40">CIENCIA Y TECNOLOGÍA</h2>
<?php elseif (is_category('nacionales')) : ?>
<h2 class="block-nacionales mb-40">NACIONALES</h2>
<?php elseif (is_category('internacionales')) : ?>
<h2 class="block-inter mb-40">INTERNACIONALES</h2>
<?php else : ?>
<p>This is some generic text to describe all other category pages,
I could be left blank</p>
<?php endif; ?>
  <div class="category">
    <div class="category-one separacion-top">
      <div class="slider-nav">
        <a class="next-btn" style="height: 100%;">
        </a>
        <a class="prev-btn" style="height: 100%;">
        </a>
        <div id="carrusel">
          <?php $count = 1;?>
          <?php while (have_posts()) : the_post(); ?>
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
          <?php endwhile;?>
          <!-- <p><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></p> -->

        </div>
      </div>
      <div class="category-post-others separacion-top">
        <div class="category-section-one separacion-top">
          <div class="rejilla6">
          <?php while (have_posts()) : the_post(); ?>
            <?php $post_views = get_post_views(get_the_ID());?>
            <?php $post_thumbnail_id = get_post_thumbnail_id( $post_id );
            $url = wp_get_attachment_url( $post_thumbnail_id);
            ?>
              <div class="post-relationship">
                <a target="_blank" href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>">
                  <?php if ( has_post_thumbnail() ) {
                    the_post_thumbnail();
                  }else{
                    ?>
                    <a target="_blank" href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>"><img src="<?php bloginfo('template_url'); ?>/img/nombre-imagen-defecto.png" /></a>
                    <?php
                  }
                  ?>
                  <div class="post-relationship-content">
                    <p class="titlelast"><?php the_title(); ?></p>
                    <p><?php the_time( get_option('date_format') ); ?></p>
                  </div>
                </a>
              </div>
          <?php endwhile;?>
        </div>
        <div class="separacion">
        <?php if ( function_exists( 'easingslider' ) ) { easingslider( 183 ); } ?>
      </div>
      </div>
      <div class="category-section-one separacion-top">
        <div class="rejilla6">
        <?php while (have_posts()) : the_post(); ?>
          <?php $post_views = get_post_views(get_the_ID());?>
          <?php $post_thumbnail_id = get_post_thumbnail_id( $post_id );
          $url = wp_get_attachment_url( $post_thumbnail_id);
          ?>
            <div class="post-relationship">
              <a target="_blank" href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>">
                <?php if ( has_post_thumbnail() ) {
                  the_post_thumbnail();
                }else{
                  ?>
                  <a target="_blank" href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>"><img src="<?php bloginfo('template_url'); ?>/img/nombre-imagen-defecto.png" /></a>
                  <?php
                }
                ?>
                <div class="post-relationship-content">
                  <p class="titlelast"><?php the_title(); ?></p>
                  <p><?php the_time( get_option('date_format') ); ?></p>
                </div>
              </a>
            </div>
        <?php endwhile;?>
      </div>
      <div class="separacion">
      <?php if ( function_exists( 'easingslider' ) ) { easingslider( 183 ); } ?>
    </div>
    </div>
    <div class="category-section-one separacion-top">
      <div class="rejilla6">
      <?php while (have_posts()) : the_post(); ?>
        <?php $post_views = get_post_views(get_the_ID());?>
        <?php $post_thumbnail_id = get_post_thumbnail_id( $post_id );
        $url = wp_get_attachment_url( $post_thumbnail_id);
        ?>
          <div class="post-relationship">
            <a target="_blank" href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>">
              <?php if ( has_post_thumbnail() ) {
                the_post_thumbnail();
              }else{
                ?>
                <a target="_blank" href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>"><img src="<?php bloginfo('template_url'); ?>/img/nombre-imagen-defecto.png" /></a>
                <?php
              }
              ?>
              <div class="post-relationship-content">
                <p class="titlelast"><?php the_title(); ?></p>
                <p class="separacion-top"><?php the_time( get_option('date_format') ); ?></p>
              </div>
            </a>
          </div>
      <?php endwhile;?>
    </div>
    <div class="separacion">
    <?php if ( function_exists( 'easingslider' ) ) { easingslider( 183 ); } ?>
  </div>
  </div>

      </div>
    </div>
    <div class="category-two separacion-top visible-md visible-lg">
      <aside id="sidebar" class="sidebar-widgets m-padding">
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
  </div>

  <?php get_footer(); ?>
